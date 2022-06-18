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
        $this->load->view('header');
		$this->load->view('dosen/index',$data);
        $this->load->view('footer');
	}
}
