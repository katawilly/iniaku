<?php 
/**
 * 
 */
class Education extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Education_model','education_model');
	}
	function index(){
         $data = $this->db->query("SELECT status FROM users WHERE id=".$this->session->id)->row_array();
        if ($data['status'] == 0) {
            $data = array();
            $data['user'] = $this->admin_model->get_user_info();
            $data['page_title'] = 'Payment';
            $data['main_content'] = $this->load->view('admin/payment',$data,TRUE);
            $this->load->view('admin/index',$data);
        }else{
            $data = array();
        $data['page_title'] = "Education";
        $data['page'] = FALSE;
        $data['pages'] = $this->education_model->getEducation($this->session->id);
        $data['main_content'] = $this->load->view('admin/education/index',$data,TRUE);
        $this->load->view('admin/index',$data);
        }
		
	}
	public function add()
    {	
        if($_POST)
        {   
            $id = $this->input->post('id', true);
            $last = trim($this->input->post('is_last_education', true));
            $data=array(
                'user_id' => $this->session->id,
                'position' => trim($this->input->post('position', true)),
                'school_name' => trim($this->input->post('school_name', true)),
                'year' => trim($this->input->post('year', true)),
                'description' => trim($this->input->post('description', true)),
                'is_last_education' => $last
            );
            $data = $this->security->xss_clean($data);
            if ($last == 1) {

            	$this->db->query("UPDATE education SET is_last_education=0 WHERE user_id=".$this->session->id);
            }
            //if id available info will be edited
            if ($id != '') {
                $this->admin_model->edit_option($data, $id, 'education');
                $this->session->set_flashdata('msg', 'Education Edited Successfully'); 
            } else {
                $id = $this->admin_model->insert($data, 'education');
                $this->session->set_flashdata('msg', 'Education added Successfully'); 
            }
            redirect(base_url('admin/education'));

        }      
        
    }

    public function edit($id)
    {  
        $data = array();
        $data['page_title'] = 'Edit';   
        $data['page'] = $this->admin_model->select_option($id, 'education');
        $data['main_content'] = $this->load->view('admin/education/index',$data,TRUE);
        $this->load->view('admin/index',$data);
    }

    
    

    public function delete($id)
    {
        $this->admin_model->delete($id,'education'); 
        echo json_encode(array('st' => 1));
    }
}
 ?>