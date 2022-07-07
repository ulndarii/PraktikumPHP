<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {
    public function index()
	{
        $this->load->model("matakuliah_model","matkul1");
        $this->matkul1->kode='2SI01';
        $this->matkul1->nama='Pemrograman Web 2';
        $this->matkul1->sks='3';

        $this->load->model("matakuliah_model","matkul2");
        $this->matkul2->kode='2SI02';
        $this->matkul2->nama='User Interface & User Experience';
        $this->matkul2->sks='3';

        $this->load->model("matakuliah_model","matkul3");
        $this->matkul3->kode='2SI03';
        $this->matkul3->nama='Komunikasi Efektif';
        $this->matkul3->sks='2';

        $list_matkul = [$this->matkul1, $this->matkul2, $this->matkul3];
        $data['list_matkul']=$list_matkul;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		$this->load->view('matakuliah/index',$data);
        $this->load->view('layout/footer');
	}
    public function create(){
        $data['judul']='Form Kelolah Matakuliah';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		$this->load->view('matakuliah/create',$data);
        $this->load->view('layout/footer');
    }
    public function save(){
        $this->load->model("matakuliah_model","matkul1");
        $this->matkul1->nama = $this->input->post('nama');
        $this->matkul1->sks = $this->input->post('sks');
        $this->matkul1->kode = $this->input->post('kode');

        $data['matkul1']=$this->matkul1;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
		$this->load->view('matakuliah/view',$data);
        $this->load->view('layout/footer');
    }
}