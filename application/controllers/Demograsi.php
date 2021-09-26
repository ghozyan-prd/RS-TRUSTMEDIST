<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demograsi extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_kota');
	}

	public function kota() {
		$data['userdata'] 	= $this->userdata;
		$data['dataKota'] 	= $this->M_kota->select_demograsi_kota();
//print_r($data['dataKota']); die();
		$data['page'] 		= "demograsi/kota";
		$data['judul'] 		= "Data Demograsi Kota";
		$data['deskripsi'] 	= "Manage Data Demograsi Kota";

		$this->template->views('d_kota/home', $data);
	}

	public function poli() {
		$data['userdata'] 	= $this->userdata;
		$data['dataKota'] 	= $this->M_kota->select_demograsi_poli();
//print_r($data['dataKota']); die();
		$data['page'] 		= "demograsi/poli";
		$data['judul'] 		= "Data Demograsi Poli";
		$data['deskripsi'] 	= "Manage Data Demograsi Poli";


		$this->template->views('d_kota/poli', $data);
	}


}
