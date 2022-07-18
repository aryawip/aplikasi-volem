<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Posrelawan extends CI_Model {
  // Fungsi untuk menampilkan semua data 
  public function view(){
     $this->db->select('*'); //mengambil semua data dari tabel data_users dan users
     $this->db->from('pos_relawan'); //dari tabel data_users
     $this->db->join('relawan','pos_relawan.id_relawan = relawan.id_relawan'); //menyatukan tabel users menggunakan left join
     $this->db->join('pos','pos_relawan.id_pos = pos.id_pos'); //menyatukan tabel users menggunakan left join
     $data = $this->db->get(); //mengambil seluruh data
     return $data->result(); //mengembalikan data

  }
  
  // Fungsi untuk menampilkan data berdasarkan kode nya
  public function view_by($id_relawan){
    $this->db->where('id_relawan', $id_relawan);
    
    return $this->db->get('pos_relawan')->row();
  }

  public function delete($id_relawan){
    $this->db->where('id_relawan', $id_relawan);
    $this->db->delete('pos_relawan'); // Untuk mengeksekusi perintah delete data
  }
  
}