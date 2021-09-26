<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_pegawai');
		$this->load->model('M_pasien');
		$this->load->model('M_posisi');
		$this->load->model('M_kota');
		$this->load->model('M_jadwal');
		$this->load->model('M_unit');
	}

	public function index() {
		$data['userdata'] = $this->userdata;
		$data['dataJadwal'] = $this->M_jadwal->select_all();
		$data['dataKota'] = $this->M_kota->select_all();
		$data['dataPegawai'] = $this->M_pegawai->select_all_pegawai();
		$data['dataUnit'] = $this->M_unit->select_all();
		$data['DataHari'] = $this->M_jadwal->select_all_hari();
		$data['DataJam'] = $this->M_jadwal->select_all_jam();
 
		$data['page'] = "jadwal";
		$data['judul'] = "Data Jadwal";
		$data['deskripsi'] = "Manage Data Jadwal";

		$data['modal_tambah_jadwal'] = show_my_modal('modals/modal_tambah_jadwal', 'tambah-jadwal', $data);

		$this->template->views('jadwal/home', $data);
	}

	public function tampil() {
		$data['dataJadwal'] = $this->M_jadwal->select_all();
		$this->load->view('jadwal/list_data', $data);
	}

	public function prosesTambah() {
		$this->form_validation->set_rules('pegawai_id', 'Pegawai', 'trim|required');
		$this->form_validation->set_rules('unit_id', 'Unit', 'trim|required');
		$this->form_validation->set_rules('hari_id', 'Hari', 'trim|required');
		$this->form_validation->set_rules('jam_mulai', 'Jam Mulai', 'trim|required');
		$this->form_validation->set_rules('jam_selesai', 'Jam Selesai', 'trim|required');

		$data = $this->input->post(); 
		if ($this->form_validation->run() == TRUE) {

			if ($data['jam_mulai'] >= $data['jam_selesai'] OR $data['jam_mulai'] == $data['jam_selesai']) {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Jam Mulai Harus Lebih Kecil Dari Jam Selesai !', '20px');

			} else{

				$result = $this->M_jadwal->insert($data);

				if ($result > 0) {
					$out['status'] = '';
					$out['msg'] = show_succ_msg('Data Jadwal Berhasil ditambahkan', '20px');
				} else {
					$out['status'] = '';
					$out['msg'] = show_err_msg('Data Jadwal Gagal ditambahkan', '20px');
				}

			}
			
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
	}

	public function update() {
		$id = trim($_POST['id']);

		$data['dataJadwal'] = $this->M_jadwal->select_by_id_new($id);
		$data['dataPegawai'] = $this->M_pegawai->select_all_pegawai();
		$data['dataUnit'] = $this->M_unit->select_all();
		$data['DataHari'] = $this->M_jadwal->select_all_hari();
		$data['DataJam'] = $this->M_jadwal->select_all_jam();
		$data['userdata'] = $this->userdata;

		echo show_my_modal('modals/modal_update_jadwal', 'update-jadwal', $data);
	}

	public function prosesUpdate() {
		$this->form_validation->set_rules('pegawai_id', 'Pegawai', 'trim|required');
		$this->form_validation->set_rules('unit_id', 'Unit', 'trim|required');
		$this->form_validation->set_rules('hari_id', 'Hari', 'trim|required');
		$this->form_validation->set_rules('jam_mulai', 'Jam Mulai', 'trim|required');
		$this->form_validation->set_rules('jam_selesai', 'Jam Selesai', 'trim|required');

		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_jadwal->update($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Jadwal Berhasil diupdate', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Jadwal Gagal diupdate', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
	}

	public function delete() {
		$id = $_POST['id'];
		$result = $this->M_pasien->delete($id);

		if ($result > 0) {
			echo show_succ_msg('Data Pasien Berhasil dihapus', '20px');
		} else {
			echo show_err_msg('Data Pasien Gagal dihapus', '20px');
		}
	}

	public function export() {
		error_reporting(E_ALL);
    
		include_once './assets/phpexcel/Classes/PHPExcel.php';
		$objPHPExcel = new PHPExcel();

		$data = $this->M_pegawai->select_all_pegawai();

		$objPHPExcel = new PHPExcel(); 
		$objPHPExcel->setActiveSheetIndex(0); 
		$rowCount = 1; 

		$objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, "ID");
		$objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, "Nama");
		$objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, "Nomor Telepon");
		$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, "ID Kota");
		$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, "ID Kelamin");
		$objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, "ID Posisi");
		$objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, "Status");
		$rowCount++;

		foreach($data as $value){
		    $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, $value->id); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, $value->nama); 
		    $objPHPExcel->getActiveSheet()->setCellValueExplicit('C'.$rowCount, $value->telp, PHPExcel_Cell_DataType::TYPE_STRING);
		    $objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, $value->id_kota); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, $value->id_kelamin); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, $value->id_posisi); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, $value->status); 
		    $rowCount++; 
		} 

		$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel); 
		$objWriter->save('./assets/excel/Data Pegawai.xlsx'); 

		$this->load->helper('download');
		force_download('./assets/excel/Data Pegawai.xlsx', NULL);
	}

	public function import() {
		$this->form_validation->set_rules('excel', 'File', 'trim|required');

		if ($_FILES['excel']['name'] == '') {
			$this->session->set_flashdata('msg', 'File harus diisi');
		} else {
			$config['upload_path'] = './assets/excel/';
			$config['allowed_types'] = 'xls|xlsx';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('excel')){
				$error = array('error' => $this->upload->display_errors());
			}
			else{
				$data = $this->upload->data();
				
				error_reporting(E_ALL);
				date_default_timezone_set('Asia/Jakarta');

				include './assets/phpexcel/Classes/PHPExcel/IOFactory.php';

				$inputFileName = './assets/excel/' .$data['file_name'];
				$objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
				$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);

				$index = 0;
				foreach ($sheetData as $key => $value) {
					if ($key != 1) {
						$id = md5(DATE('ymdhms').rand());
						$check = $this->M_pegawai->check_nama($value['B']);

						if ($check != 1) {
							$resultData[$index]['id'] = $id;
							$resultData[$index]['nama'] = ucwords($value['B']);
							$resultData[$index]['telp'] = $value['C'];
							$resultData[$index]['id_kota'] = $value['D'];
							$resultData[$index]['id_kelamin'] = $value['E'];
							$resultData[$index]['id_posisi'] = $value['F'];
							$resultData[$index]['status'] = $value['G'];
						}
					}
					$index++;
				}

				unlink('./assets/excel/' .$data['file_name']);

				if (count($resultData) != 0) {
					$result = $this->M_pegawai->insert_batch($resultData);
					if ($result > 0) {
						$this->session->set_flashdata('msg', show_succ_msg('Data Pegawai Berhasil diimport ke database'));
						redirect('Pegawai');
					}
				} else {
					$this->session->set_flashdata('msg', show_msg('Data Pegawai Gagal diimport ke database (Data Sudah terupdate)', 'warning', 'fa-warning'));
					redirect('Pegawai');
				}

			}
		}
	}
}

