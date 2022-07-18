<?php 

class Staflogin extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('s_login');

	}

	function index(){
		$this->load->view('frontend/home');
	}

	function aksi_login(){
		$usernameS = $this->input->post('usernameS');
		$passwordS = $this->input->post('passwordS');
		$where = array(
			'usernameS' => $usernameS,
			'passwordS' => ($passwordS)
			);
		$cek = $this->s_login->cek_login("staf",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'usernameS' => $usernameS,
				'passwordS' => $passwordS,
				'nama_staf' => $cek->nama_staf,
				'status' 	=> "slogin"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("staf/dashboard"));

		}else{
			
			redirect(base_url("home"));
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('home'));
	}
}