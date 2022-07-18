<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
  
  public function index(){
    $this->load->view('frontend/home');
  }

  public function register(){
  	$data = array(
      "usernameR" => $this->input->post('usernameR'),
      "passwordR" => $this->input->post('passwordR'),
      "nama_relawan" => $this->input->post('nama_relawan'),
      "umur" => $this->input->post('umur'),
      "jenis_kelamin" => $this->input->post('jenis_kelamin'),
      "no_telp" => $this->input->post('no_telp'),
      "email" => $this->input->post('email'),
      "berat_badan" => $this->input->post('berat_badan'),
      "tinggi_badan" => $this->input->post('tinggi_badan')
      );
      
     $this->db->insert('relawan', $data);
     redirect('home/registersukses','refresh');
  } 

  public function registersukses(){
   echo "sukses";
   redirect(base_url("home"));
  }

}




