<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_kota');
	}

	public function index() {
		$data['userdata'] 	= $this->userdata;
		$data['kunjunganPasien'] 	= $this->M_kota->select_kunjungan_pasien();

		$data['page'] 		= "laporan-pendaftaran";
		$data['judul'] 		= "Laporan Pendaftaran";
		$data['deskripsi'] 	= "Manage Data Laporan Pendaftaran";

		$data['start_date'] = $this->input->get('start_date',true);

        $data['end_date'] = $this->input->get('end_date',true);
        
        $data['search'] = $this->input->get('search',true);

		$this->template->views('d_kota/laporan', $data);
	}


}
