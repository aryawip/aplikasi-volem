<?php 

class Relawan extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "rlogin"){
			redirect(base_url("home"));
		}
		
	}

	function dashboard(){
		$this->load->model('Chart');
		$data['chartpos']=$this->Chart->chartpos();
        $this->load->view('backend/relawan/dashboard',$data);
	}

	function profil(){

		$this->load->model('Jobrelawan');
		$data['job_relawan'] = $this->Jobrelawan->view();

		$this->load->model('Posrelawan');
		$data['pos_relawan'] = $this->Posrelawan->view();
		
		$this->load->view('backend/relawan/profil', $data);	
	}

	function vojob(){
		$this->load->model('Job');
		$data['tabeljob'] = $this->Job->view();
		$this->load->view('backend/relawan/vojob', $data);
	}

	function posbencana(){
		$this->load->model('Pos');
		$data['tabelpos'] = $this->Pos->view();
	    $this->load->view('backend/relawan/posbencana', $data);
	}

	public function pilihpos(){
  	$data = array(
      "id_relawan" => $this->input->post('id_relawan'),
      "id_pos" => $this->input->post('id_pos')
      );
      
     $this->db->insert('pos_relawan', $data);
     redirect('relawan/posbencana','refresh');
  	} 

  	public function pilihjob(){
  	$data = array(
      "id_relawan" => $this->input->post('id_relawan'),
      "id_job" => $this->input->post('id_job')
      );
      
     $this->db->insert('job_relawan', $data);
     redirect('relawan/vojob','refresh');
  	} 

  	public function deletepos($id_relawan){
	  	$this->load->model('Posrelawan');
	    $this->Posrelawan->delete($id_relawan);
	    redirect('relawan/profil','refresh');
	}

	 public function deletejob($id_relawan){
	  	$this->load->model('Jobrelawan');
	    $this->Jobrelawan->delete($id_relawan);
	    redirect('relawan/profil','refresh');
	}

	function rekomendasipos(){
		$this->load->model('Pos');
		$this->load->view('backend/relawan/scpk');
	}

}