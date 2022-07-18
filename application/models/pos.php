<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pos extends CI_Model {
  // Fungsi untuk menampilkan semua data admin
  public function view(){
    return $this->db->get('pos')->result();
  }
  
  // Fungsi untuk menampilkan data admin berdasarkan kode nya
  public function view_by($id_pos){
    $this->db->where('id_pos', $id_pos);
    return $this->db->get('pos')->row();
  }

  public function edit($id_pos){
    $data = array(
      "id_pos" => $this->input->post('id_pos'),
      "nama_pos" => $this->input->post('nama_pos'),
      "alamat"=> $this->input->post('alamat'),
      "jenis_bencana" => $this->input->post('jenis_bencana'),
      "jumlah" => $this->input->post('jumlah'),
      "jarak" => $this->input->post('jarak'),
      "keterangan" => $this->input->post('keterangan')
      );
    
    $this->db->where('id_pos', $id_pos);
    $this->db->update('pos', $data); // Untuk mengeksekusi perintah update data
  }

}