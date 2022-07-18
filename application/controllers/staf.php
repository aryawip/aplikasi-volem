<?php 

class Staf extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "slogin"){
			redirect(base_url("home"));
			
		}
		
	}

	function dashboard(){
		$this->load->model('Chart');
		$data['chartpos']=$this->Chart->chartpos();
        $this->load->view('backend/staf/dashboard',$data);   
	}

	function profil(){
		$this->load->model('Stafprofil');
		$data['tabelstaf'] = $this->Stafprofil->view();

    	$this->load->view('backend/staf/profil', $data);	
	}

	function listrelawan(){
		$this->load->model('Jobrelawan');
		$data['job_relawan'] = $this->Jobrelawan->view();

		$this->load->model('Posrelawan');
		$data['pos_relawan'] = $this->Posrelawan->view();
		
		$this->load->view('backend/staf/tabeldata', $data);
	}

	function posbencana(){

		$this->load->model('Pos');
		$data['tabelpos'] = $this->Pos->view();
	    $this->load->view('backend/staf/posbencana', $data);
		
	}

	function formaddpos(){
		$this->load->view('backend/staf/crud/addpos');
	}

	public function addpos(){
  	$data = array(
      "nama_pos" => $this->input->post('nama_pos'),
      "alamat" => $this->input->post('alamat'),
      "jenis_bencana" => $this->input->post('jenis_bencana'),
      "jumlah" => $this->input->post('jumlah'),
      "jarak" => $this->input->post('jarak'),
      "keterangan" => $this->input->post('keterangan')
      );
      
     $this->db->insert('pos', $data);
     redirect('staf/posbencana','refresh');
  	} 

	public function detailpos($id_pos){
		$this->load->model('Pos');
     	$data['pos'] = $this->Pos->view_by($id_pos);
     	$this->load->view('backend/staf/crud/editpos', $data);
  	}

  	function deletepos($id_pos = NULL){
  		$this->db->where('id_pos', $id_pos);
  		$this->db->delete('pos');

  		redirect('staf/posbencana','refresh');
  	}

}