<?php 
/**
 * 
 */
class Education_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function getEducation($id){
		return $this->db->get_where('education',array('user_id' => $id))->result();
	}
	
}
 ?>