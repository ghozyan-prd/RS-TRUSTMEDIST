<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pasien extends CI_Model {
	public function select_all() {
		$sql = " SELECT master_pasien.pasien_id, master_pasien.pasien_norm, master_pasien.pasien_nik, master_pasien.pasien_nama, master_pasien.pasien_kelamin, master_pasien.pasien_alamat, kelamin.nama as JK, kota.nama as nama_kota FROM master_pasien JOIN kelamin ON master_pasien.pasien_kelamin = kelamin.kode JOIN kota ON master_pasien.pasien_kota = kota.id ";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM master_pasien WHERE pasien_id = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function select_by_pegawai($id) {
		$sql = " SELECT pegawai.id AS id, pegawai.nama AS pegawai, pegawai.telp AS telp, kota.nama AS kota, kelamin.nama AS kelamin, posisi.nama AS posisi FROM pegawai, kota, kelamin, posisi WHERE pegawai.id_kelamin = kelamin.id AND pegawai.id_posisi = posisi.id AND pegawai.id_kota = kota.id AND pegawai.id_posisi={$id}";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_by_kota($id) {
		$sql = "SELECT COUNT(master_diagnosa.diagnosa_id) as jml FROM diagnosa_pasien JOIN master_diagnosa ON master_diagnosa.diagnosa_id = diagnosa_pasien.m_diagnosa_id JOIN kunjungan_pasien ON kunjungan_pasien.pendaftaran_id = diagnosa_pasien.kunjungan_id JOIN master_pasien ON master_pasien.pasien_id = kunjungan_pasien.m_pasien_id JOIN kota ON kota.id = master_pasien.pasien_kota WHERE master_pasien.pasien_kota = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}


	public function insert($data) {
		$sql = "INSERT INTO master_pasien VALUES('','" .$data['pasien_norm'] ."','" .$data['pasien_nik'] ."','" .$data['pasien_nama'] ."','" .$data['pasien_kelamin']."','" .$data['pasien_alamat']."','" .$data['pasien_kota']."')";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert_batch($data) {
		$this->db->insert_batch('posisi', $data);
		
		return $this->db->affected_rows();
	}

	public function update($data) {
		$sql = "UPDATE master_pasien SET pasien_norm='" .$data['pasien_norm'] ."', pasien_nik='" .$data['pasien_nik'] ."', pasien_nama='" .$data['pasien_nama'] ."', pasien_kelamin='" .$data['pasien_alamat'] ."', pasien_alamat='" .$data['pasien_kelamin'] ."', pasien_kota='" .$data['pasien_kota'] ."'  WHERE pasien_id='" .$data['id'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM master_pasien WHERE pasien_id='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function check_nama($nama) {
		$this->db->where('nama', $nama);
		$data = $this->db->get('master_pasien');

		return $data->num_rows();
	}

	public function total_rows() {
		$data = $this->db->get('master_pasien');

		return $data->num_rows();
	}
}
