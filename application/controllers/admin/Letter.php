<?php 
/**
 * 
 */
class Letter extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		// if (!is_admin()) {
  //           redirect(base_url());
  //       }
	}
	public function index()
    {
        $data = $this->db->query("SELECT status FROM users WHERE id=".$this->session->id)->row_array();
        if ($data['status'] == 0) {
            $data = array();
            $data['user'] = $this->admin_model->get_user_info();
            $data['page_title'] = 'Payment';
            $data['main_content'] = $this->load->view('admin/payment',$data,TRUE);
            $this->load->view('admin/index',$data);
        }else{
            $data = array();
            $data['page_title'] = 'Letter Application';  
            $data['page'] = FALSE;
            $data['pages'] = $this->admin_model->select('application_letter');
            $data['main_content'] = $this->load->view('admin/application_letter/index',$data,TRUE);
        $this->load->view('admin/index',$data);
        }
        
    }
    function cetak($id){
         $data['letter'] = $this->db->query("SELECT users.*,application_letter.* FROM users JOIN application_letter ON users.id = application_letter.user_id WHERE application_letter.id =".$id)->row_array();
        $this->load->view('admin/application_letter/print',$data);
    }
    public function add()
    {   
        if($_POST)
        {   
            $requirements = "";
            $req = $this->input->post('requirements');
            foreach ($req as $req) {
                $requirements .= $req.";";
            }
            $id = $this->input->post('id', true);
            $data = array(

                'user_id' => $this->session->id,
                'requirements' => $requirements,
                'company_name' => trim($this->input->post('company_name', true))
            );
            $data = $this->security->xss_clean($data);
            //if id available info will be edited
            if ($id != '') {
                $this->admin_model->edit_option($data, $id, 'application_letter');
                $this->session->set_flashdata('msg', 'Application letter Edited Successfully'); 
            } else {
                $id = $this->admin_model->insert($data, 'application_letter');
                $this->session->set_flashdata('msg', 'Application letter added Successfully'); 
            }
            redirect(base_url('admin/letter'));

        }      
        
    }

    public function edit($id)
    {  
        $data = array();
        $data['page_title'] = 'Edit';   
        $data['page'] = $this->admin_model->select_option($id, 'application_letter');
        $data['main_content'] = $this->load->view('admin/application_letter/index',$data,TRUE);
        $this->load->view('admin/index',$data);
    }

    
    

    public function delete($id)
    {
        $this->admin_model->delete($id,'education'); 
        echo json_encode(array('st' => 1));
    }
}
 ?>