<?php
class User extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('m_pdf');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
	}

    function index(){
        $this->load->model('model_user');
        $judul          = "Daftar User";
        $data['judul']  = $judul;
        $data['user'] = $this->model_user->list_user()->result();

        $this->load->view('templates/main-header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/list', $data);
        // $this->load->view('user/list_user',$data);
        $this->load->view('templates/footer');
    }

    function detail(){
    	$this->load->model('model_user');
        $nik = $this->uri->segment(3);
        $data['user'] = $this->model_user->getUser($nik)->row_array();

    	$this->load->view('templates/main-header');
    	$this->load->view('templates/sidebar');
        $this->load->view('user/detail', $data);
    	$this->load->view('templates/footer');
    }

    function input(){
    	$this->load->view('templates/main-header');
    	$this->load->view('templates/sidebar');
        $this->load->view('user/input');
    	$this->load->view('templates/footer');
	}
	    
	function input_simpan(){
		$foto = $_FILES['foto']['name'];
        $datauser = array(
           	'nik'   			=>  $this->input->post('nik'),
			'nama'		   		=>  $this->input->post('nama'),
			'email'   			=>  $this->input->post('email'),
			'tempat_lahir'  	=>  $this->input->post('tempat_lahir'),
			'tanggal_lahir' 	=>  $this->input->post('tanggal'),
			'alamat'        	=>  $this->input->post('alamat'),
			'kota_asal'     	=>  $this->input->post('kota_asal'),
			'agama'	     		=>  $this->input->post('agama'),
			'jenis_kelamin' 	=>  $this->input->post('jenis_kelamin'),
			'status' 			=>  $this->input->post('status'),
			'pekerjaan' 		=>  $this->input->post('pekerjaan'),
			'kewarganegaran' 	=>  $this->input->post('kewarganegaran'),
			'deskripsi' 		=>  $this->input->post('deskripsi'),
            'foto' 				=>  $foto
        );
        $config['upload_path'] = './assets/upload/';
		$config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else {
            $this->db->insert('user',$datauser);
	    	redirect('user');
        }
	}

	function edit(){
        $this->load->model('model_user');
        $nik = $this->uri->segment(3);
        $data['user'] = $this->model_user->getUser($nik)->row_array();


        $this->load->view('templates/main-header');
        $this->load->view('templates/sidebar');
        $this->load->view('user/edit', $data);
    	$this->load->view('templates/footer');
	}
	    
	function edit_simpan(){
	    $id         = $this->input->post('id');
	    $foto = $_FILES['foto']['name'];
	    $datauser = array(
	        'nik'   			=>  $this->input->post('nik'),
	        'nama'		   		=>  $this->input->post('nama'),
	        'email'   			=>  $this->input->post('email'),
	        'tempat_lahir'  	=>  $this->input->post('tempat_lahir'),
	        'tanggal_lahir' 	=>  $this->input->post('tanggal'),
	        'alamat'        	=>  $this->input->post('alamat'),
	        'kota_asal'     	=>  $this->input->post('kota_asal'),
	        'agama'	     		=>  $this->input->post('agama'),
	        'jenis_kelamin' 	=>  $this->input->post('jenis_kelamin'),
	        'status' 			=>  $this->input->post('status'),
	        'pekerjaan' 		=>  $this->input->post('pekerjaan'),
	        'kewarganegaran' 	=>  $this->input->post('kewarganegaran'),
	        'deskripsi' 		=>  $this->input->post('deskripsi'),
	        'foto' 				=>  $foto
	    );
	    $config['upload_path'] = './assets/upload/';
		$config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else {
           $this->db->where('nik',$id);
	    	$this->db->update('user',$datauser);
	    	redirect('user');
        }
	}

	function delete(){
        $nik = $this->uri->segment(3);
        $this->db->where('nik',$nik);
        $this->db->delete('user');
        redirect('user');
	}

	function report(){
		// $this->load->library('pdfgenerator');
		ob_start();
		$this->load->model('model_user');
		$data['user'] = $this->model_user->list_user()->result();
		$sumber = $this->load->view('user/report_view', $data, TRUE);
		$html = $sumber;

		$pdfFilePath = "data_user.pdf";

		$pdf = $this->m_pdf->load();

		$pdf->AddPage('P');
		$pdf->WriteHTML($html);
		ob_end_clean();
		$pdf->Output($pdfFilePath, "D");

		exit();
		redirect('user');
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
