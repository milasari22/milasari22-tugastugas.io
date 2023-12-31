<?php 

class Data_barang extends CI_Controller {
    public function index ()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $nama_barang        = $this->input->post('nama_barang');
        $keterangan         = $this->input->post('keterangan');
        $kategori           = $this->input->post('kategori');
        $harga              = $this->input->post('harga');
        $stok               = $this->input->post('stok');
        $gambar               = $FILES['gambar']['name'];
        if ($gambar_barang  = ''){}else{
            $config ['upload_path'] = './uploads';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
                echo "Gambar Gagal diUpload!";
            }else{
                $gambar_barang=$this->upload->data('file_name');
            }
        }

        $data = array (
            'nama_barang'   => $nama_barang,
            'keterangan'    => $keterangan,
            'kategori'      => $kategori,
            'harga'         => $harga,
            'stok'          => $stok,
            'gambar' => $gambar
        );

        $this->model_barang->tambah_barang($data, 'tbl_barang');
        redirect('admin/data_barang/index');
    }
}