<?php

class model_barang extends CI_ModeL {
    public function tampil_data() {
        return $this->db->get('tbl_barang');
    }

    public function tambah_barang($data,$table){
        $this->db->insert($table,$data);
    }

}