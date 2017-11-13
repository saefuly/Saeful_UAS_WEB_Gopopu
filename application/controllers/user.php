<?php
class User extends CI_Controller{
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
	}

    function index(){
        $this->load->model('model_user');
        $judul          = "Daftar User";
        $data['judul']  = $judul;
        $data['user'] = $this->model_user->list_user()->result();

        $this->load->view('templates/header');
        $this->load->view('user/list_user',$data);
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
		$hobi = implode(',', $this->input->post('hobi'));
	    $datauser = array(
	        'username'   	=>  $this->input->post('username'),
	        'password'   	=>  $this->input->post('password'),
	        'email'   		=>  $this->input->post('email'),
	        'nim'   		=>  $this->input->post('nim'),
	        'nama'          =>  $this->input->post('nama'),
	        'alamat'        =>  $this->input->post('alamat'),
	        'kota_asal'     =>  $this->input->post('kota'),
	        'jenis_kelamin' =>  $this->input->post('jk'),
	        'hobi' 			=>  $hobi,
	        'deskripsi' 	=>  $this->input->post('deskripsi'));
	    if ($this->input->post('password') == $this->input->post('re-password')) {
	    	$this->db->insert('user',$datauser);
	    	redirect('user');
	    } else {
	    	$this->session->set_flashdata('message', 'Password Tidak Sesuai!');
			$this->session->set_flashdata('desc', false);
			redirect('user/input');
	    }
	       
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

	function report(){
		$this->load->library('pdfgenerator');
		$this->load->model('model_user');

		$data['user'] = $this->model_user->list_user()->result();
		$html = $this->load->view('user/report_user', $data, true);
		$this->pdfgenerator->generate($html,'contoh');
	}

	function view_report(){
		$this->load->library('pdfgenerator');

		$this->load->model('model_user');
		$data['user'] = $this->model_user->list_user()->result();
		$this->load->view('user/report_view', $data);
		$html = $this->output->get_output();

		$this->pdfgenerator->generate($html,'contoh');
	}
}
?>
