<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('model_login');
	}

	function index(){
		if($this->session->userdata('status') == "login"){
			redirect(base_url("index.php/user"));
		}

		$judul          = "LOGIN ADMIN DASHBOARD";
		$data['judul']  = $judul;
        $this->load->view('templates/header');
        $this->load->view('auth/login', $data);
        $this->load->view('templates/footer');
    }

    function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->model_login->cek_login("admin",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("index.php/user"));

		} else {
			$this->session->set_flashdata('message', 'Anda memasukan data yang salah!');
			$this->session->set_flashdata('desc', false);
			redirect('login');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/login'));
	}
}
?>