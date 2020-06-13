<?php 
/**
 * 
 */
class Cv extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$this->load->view('admin/cv/design_1');
	}
}
 ?>