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
        $this->load->view('header');
		$this->load->view('matakuliah/index',$data);
        $this->load->view('footer');
	}
}