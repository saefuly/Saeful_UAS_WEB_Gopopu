<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
	}

	function index(){
		$this->load->view('templates/header');
        $this->load->view('auth/admin');
        $this->load->view('templates/footer');
	}
}

?>