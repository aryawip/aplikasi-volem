<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Jobrelawan extends CI_Model {
  // Fungsi untuk menampilkan semua data 
  public function view(){
     $this->db->select('*'); //mengambil semua data dari tabel data_users dan users
     $this->db->from('job_relawan'); //dari tabel data_users
     $this->db->join('relawan','job_relawan.id_relawan = relawan.id_relawan'); //menyatukan tabel users menggunakan left join
     $this->db->join('job','job_relawan.id_job = job.id_job'); //menyatukan tabel users menggunakan left join
     $data = $this->db->get(); //mengambil seluruh data
     return $data->result(); //mengembalikan data

  }
  
  // Fungsi untuk menampilkan data berdasarkan kode nya
  public function view_by($id_relawan){
    $this->db->where('id_relawan', $id_relawan);
    
    return $this->db->get('job_relawan')->row();
  }

  public function delete($id_relawan){
    $this->db->where('id_relawan', $id_relawan);
    $this->db->delete('job_relawan'); // Untuk mengeksekusi perintah delete data
  }
  
}