<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SPK extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('WP_model');
    }

    /** List Alternatif */
    // Tampilan Nilai Alternatif
    public function index()
    {
        $data["alternatif"] = $this->WP_model->select_data("tabel_alternatif")->result();
        $data_b["bobot"] = $this->WP_model->select_data("tabel_bobot")->result();
        $this->load->view('v_alternatif', $data + $data_b);
    }

    // Tampilan Tambah Device
    public function tambah_Alternatif()
    {
        $this->load->view('t_alternatif');
    }

    // Data ditambahkan ke Database
    public function tambahAlternatif()
    {
        $nama                   = $this->input->post("nama");
        $c1                     = $this->input->post("c1"); 
        $c2                     = $this->input->post("c2");
        $c3                     = $this->input->post("c3");
        $c4                     = $this->input->post("c4"); 

        $data                   = array(
            'nama'              => $nama,
            'c1'                => $c1,
            'c2'                => $c2,
            'c3'                => $c3,
            'c4'                => $c4,
        );

        $hasil = $this->WP_model->simpan_data("tabel_alternatif", $data);
        if ($hasil)
        {
            echo "<script>alert('Data Berhasil di Tambah');</script>";
            $this->index();
        }
        else
        {
            echo "<script>alert('Data gagal di tambah');</script>";
            $this->index();
        }
    }

    // Tampilan Edit Alternatif
    public function edit_alternatif($id_alternatif)
    {
        $data['alternatif'] = $this->WP_model->select_condition('tabel_alternatif', array('id_alternatif' => $id_alternatif))->row();
        $this->load->view('e_alternatif', $data);
    }

    // Data yang di Ubah ke Database
    public function editAlternatif()
    {
        $id_alternatif          = $this->input->post("id_alternatif");
        $nama                   = $this->input->post("nama");
        $c1                     = $this->input->post("c1"); 
        $c2                     = $this->input->post("c2");
        $c3                     = $this->input->post("c3");
        $c4                     = $this->input->post("c4"); 

        $data                   = array(
            'nama'              => $nama,
            'c1'                => $c1,
            'c2'                => $c2,
            'c3'                => $c3,
            'c4'                => $c4,
        );

        $hasil = $this->WP_model->update("tabel_alternatif", array('id_alternatif' => $id_alternatif), $data);
        if ($hasil)
        {
            echo "<script>alert('Data Berhasil di Edit');</script>";
            $this->index();
        }
        else
        {
            echo "<script>alert('Data Gagal di Edit');</script>";
            $this->index();
        }
    }

    // Hapus Alternatif
    public function hapusAlternatif($id_alternatif)
    {
        $hasil =$this->WP_model->hapus("tabel_alternatif", array('id_alternatif' => $id_alternatif));
        if ($hasil)
        {
            echo "<script>alert('Data Berhasil di Hapus');</script>";
			$this->index();
        }
        else
        {
            echo "<script>alert('Data Gagal di Hapus');</script>";
			$this->index();
        }
    }

    // Tampilan Edit Bobot
    public function edit_bobot($id_bobot)
    {
        $data_b['bobot'] = $this->WP_model->select_condition('tabel_bobot', array('id_bobot' => $id_bobot))->row();
        $this->load->view('e_bobot', $data_b);
    }

    // Data yang di Ubah ke Database
    public function editBobot()
    {
        $id_bobot               = $this->input->post("id_bobot");
        $w1                     = $this->input->post("w1"); 
        $w2                     = $this->input->post("w2");
        $w3                     = $this->input->post("w3");
        $w4                     = $this->input->post("w4"); 

        $data_b                 = array(
            'w1'                => $w1,
            'w2'                => $w2,
            'w3'                => $w3,
            'w4'                => $w4,
        );

        $hasil = $this->WP_model->update("tabel_bobot", array('id_bobot' => $id_bobot), $data_b);
        if ($hasil)
        {
            echo "<script>alert('Data Berhasil di Edit');</script>";
            $this->index();
        }
        else
        {
            echo "<script>alert('Data Gagal di Edit');</script>";
            $this->index();
        }
    }

    // Tampilan Vektor S
    public function vektor_s()
    {
        $data["alternatif"] = $this->WP_model->select_data("tabel_alternatif")->result();
        $data_b["bobot"] = $this->WP_model->select_data("tabel_bobot")->result();
        $this->load->view('vektor_s', $data + $data_b);
    }
    
    // Tampilan Vektor V
    public function vektor_v()
    {
        $data["alternatif"] = $this->WP_model->select_data("tabel_alternatif")->result();
        $data_b["bobot"] = $this->WP_model->select_data("tabel_bobot")->result();
        $this->load->view('vektor_v', $data + $data_b);
    }

    // Tampilan Rangking
    public function rangking()
    {
        $data["alternatif"] = $this->WP_model->select_data("tabel_alternatif")->result();
        $data_b["bobot"] = $this->WP_model->select_data("tabel_bobot")->result();
        $this->load->view('alternatif_rangking', $data + $data_b);
    }
}

// Credit:
// Nama        : Aji Yudha Perwira
// Facebook    : https://web.facebook.com/profile.php?id=100007212107087
// Twitter     : https://twitter.com/ajiyudhaperwira
// linked      : https://www.linkedin.com/in/aji-yudha-perwira-343945119/
// Instagram   : https://www.instagram.com/ajiyudhaperwira/?hl=id