<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Stafprofil extends CI_Model {
  // Fungsi untuk menampilkan semua data 
  public function view(){
    return $this->db->get('staf')->result();
  }
  
  // Fungsi untuk menampilkan data berdasarkan kode nya
  public function view_by($id_staf){
    $this->db->where('id_staf', $id_staf);
    return $this->db->get('staf')->row();
  }

}