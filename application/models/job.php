<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Job extends CI_Model {
  // Fungsi untuk menampilkan semua data 
  public function view(){
    return $this->db->get('job')->result();
  }
  
  // Fungsi untuk menampilkan data berdasarkan kode nya
  public function view_by($id_job){
    $this->db->where('id_job', $id_job);
    return $this->db->get('job')->row();
  }

}