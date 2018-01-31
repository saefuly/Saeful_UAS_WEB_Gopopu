<?php
class Main extends CI_Controller{
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
	}

    function index(){
        $this->load->model('model_user');
        $judul          = "WEB DASHBOARD ADMIN";
        $data['judul']  = $judul;
        $data['user'] = $this->model_user->list_user()->result();
        $data['jumlah_user'] = $this->model_user->list_user()->num_rows();

        $this->load->view('templates/main-header');
        $this->load->view('main/homepage',$data);
        $this->load->view('templates/footer');
    }

    function detail(){
    	$this->load->model('model_user');
        $username = $this->uri->segment(3);
        $data['user'] = $this->model_user->getUser($username)->row_array();

    	$this->load->view('templates/header');
        $this->load->view('user/detail_user', $data);
    	$this->load->view('templates/footer');
    }

    function input(){
    	$this->load->view('templates/header');
        $this->load->view('user/input_user');
    	$this->load->view('templates/footer');
	}
	    
	function input_simpan(){
	    $datauser = array(
	        'username'   	=>  $this->input->post('username'),
	        'password'   	=>  $this->input->post('password'),
	        'email'   		=>  $this->input->post('email'),
	        'nim'   		=>  $this->input->post('nim'),
	        'nama'          =>  $this->input->post('nama'),
	        'alamat'        =>  $this->input->post('alamat'),
	        'kota_asal'     =>  $this->input->post('kota'),
	        'jenis_kelamin' =>  $this->input->post('jk'),
	        'hobi' 			=>  $this->input->post('hobi'),
	        'deskripsi' 	=>  $this->input->post('deskripsi'));
	    $this->db->insert('user',$datauser);
	    redirect('user');   
	}

	function edit(){
        $this->load->model('model_user');
        $username = $this->uri->segment(3);
        $data['user'] = $this->model_user->getUser($username)->row_array();


        $this->load->view('templates/header');
        $this->load->view('user/edit_user', $data);
    	$this->load->view('templates/footer');
	}
	    
	function edit_simpan(){
	    $id         = $this->input->post('id');
	    $datauser = array(
	        'username'   	=>  $this->input->post('username'),
	        'email'   		=>  $this->input->post('email'),
	        'nim'   		=>  $this->input->post('nim'),
	        'nama'          =>  $this->input->post('nama'),
	        'alamat'        =>  $this->input->post('alamat'),
	        'kota_asal'     =>  $this->input->post('kota'),
	        'jenis_kelamin' =>  $this->input->post('jk'),
	        'hobi' 			=>  $this->input->post('hobi'),
	        'deskripsi' 	=>  $this->input->post('deskripsi'));
	    $this->db->where('username',$id);
	    $this->db->update('user',$datauser);
	    redirect('user');
	}

	function delete(){
        $username = $this->uri->segment(3);
        $this->db->where('username',$username);
        $this->db->delete('user');
        redirect('user');
	}
}
?>
