<?php 

class Relawanlogin extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('s_login');

	}

	function index(){
		$this->load->view('frontend/home');
	}

	function aksi_login(){
		$usernameR = $this->input->post('usernameR');
		$passwordR = $this->input->post('passwordR');
		$where = array(
			'usernameR' => $usernameR,
			'passwordR' => ($passwordR)
			);
		$cek = $this->s_login->cek_login("relawan",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'usernameR' => $usernameR,
				'passwordR' => $passwordR,
				'status' => "rlogin"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("relawan/dashboard"));

		}else{
			
			redirect(base_url("home"));
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('home'));
	}
}