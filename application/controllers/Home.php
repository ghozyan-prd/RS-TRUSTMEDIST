<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_pegawai');
		$this->load->model('M_posisi');
		$this->load->model('M_kota');
		$this->load->model('M_unit');
		$this->load->model('M_pasien');
	}

	public function index() {
		$data['jml_pegawai'] 	= $this->M_pegawai->total_rows();
		$data['jml_posisi'] 	= $this->M_posisi->total_rows();
		$data['jml_unit'] 		= $this->M_unit->total_rows();
		$data['jml_pasien'] 	= $this->M_pasien->total_rows();
		$data['jml_kota'] 		= $this->M_kota->total_rows();
		$data['userdata'] 		= $this->userdata;

		$data['page'] 			= "home";
		$data['judul'] 			= "Beranda";
		$data['deskripsi'] 		= "Manage Data RS TRUSTMEDIS";
		$this->template->views('home', $data);
	}
}

