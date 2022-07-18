<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Chart extends CI_Model {
  // Fungsi untuk menampilkan semua data 
  public function chartpos(){
  	$data = $this->db->query('select nama_pos,jumlah from pos');
	return $data->result();
	}
  
}