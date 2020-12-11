<?php
class MyController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	
	}
	function index()
	{
		echo "Welcome to codeigniter";
	}
	function signup()
	{
	  $this->load->view('signup');	
	}	
	function dosignup()
	{
		$data=array("name"=>$this->input->post("name"),"email"=>$this->input->post("email"));
		print_r($data);
	}
	function display()
	{
		echo "within display";
	}
}

?>