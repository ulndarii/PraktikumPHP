<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {
    public function index()
	{
        $this->load->model("dosen_model","dsn1");
        $this->dsn1->nidn=1001;
        $this->dsn1->nama='Sirojul Munir, S.Si, M.Kom';
        $this->dsn1->pendidikan='S2 Ilmu Komputer';
        $this->dsn1->gender='L';

        $this->load->model("dosen_model","dsn2");
        $this->dsn2->nidn=1002;
        $this->dsn2->nama='Pristi Sukmasetya, S.Kom';
        $this->dsn2->pendidikan='S1 Ilmu Komputer';
        $this->dsn2->gender='P';

        $this->load->model("dosen_model","dsn3");
        $this->dsn3->nidn=1003;
        $this->dsn3->nama='	Fachriadi Tanjung, S.E, M.Si';
        $this->dsn3->pendidikan='S2 Sistem Informasi';
        $this->dsn3->gender='L';

        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['list_dsn']=$list_dsn;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		$this->load->view('dosen/index',$data);
        $this->load->view('layout/footer');
	}

    public function create(){
        $data['judul']='Form Kelolah Dosen';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		$this->load->view('dosen/create',$data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model("dosen_model","dsn1");
        $this->dsn1->nidn = $this->input->post('nidn');
        $this->dsn1->nama = $this->input->post('nama');
        $this->dsn1->gender = $this->input->post('jk');
        $this->dsn1->ttl = $this->input->post('ttl');
        $this->dsn1->pendidikan = $this->input->post('pendidikan');

        $data['dsn1']=$this->dsn1;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		$this->load->view('dosen/view',$data);
        $this->load->view('layout/footer');
    }
}
