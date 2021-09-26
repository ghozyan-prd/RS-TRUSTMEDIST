<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jadwal extends CI_Model {
	public function select_all() {
		$sql = " SELECT master_jadwal.jadwal_id, master_jadwal.jam_mulai, master_jadwal.jam_selesai, master_dokter.pegawai_nama, master_unit.unit_nama, hari.nama as hari FROM master_jadwal JOIN master_dokter ON master_dokter.pegawai_id = master_jadwal.pegawai_id JOIN master_unit ON master_unit.unit_id = master_jadwal.unit_id JOIN hari ON hari.hari_id = master_jadwal.hari_id ";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = " SELECT master_jadwal.jadwal_id, master_jadwal.jam_mulai, master_jadwal.jam_selesai, master_dokter.pegawai_nama, master_unit.unit_nama, hari.nama as hari FROM master_jadwal JOIN master_dokter ON master_dokter.pegawai_id = master_jadwal.pegawai_id JOIN master_unit ON master_unit.unit_id = master_jadwal.unit_id JOIN hari ON hari.hari_id = master_jadwal.hari_id WHERE master_jadwal.jadwal_id = '{$id}' ";


		$data = $this->db->query($sql);

		return $data->row();
	}

	public function select_by_id_new($id) {
		$sql = " SELECT master_jadwal.jadwal_id, master_jadwal.jam_mulai, master_jadwal.jam_selesai, master_dokter.pegawai_id, master_unit.unit_id, hari.hari_id FROM master_jadwal JOIN master_dokter ON master_dokter.pegawai_id = master_jadwal.pegawai_id JOIN master_unit ON master_unit.unit_id = master_jadwal.unit_id JOIN hari ON hari.hari_id = master_jadwal.hari_id WHERE master_jadwal.jadwal_id = '{$id}' ";


		$data = $this->db->query($sql);

		return $data->row();
	}

	public function select_by_pegawai($id) {
		$sql = " SELECT pegawai.id AS id, pegawai.nama AS pegawai, pegawai.telp AS telp, kota.nama AS kota, kelamin.nama AS kelamin, posisi.nama AS posisi FROM pegawai, kota, kelamin, posisi WHERE pegawai.id_kelamin = kelamin.id AND pegawai.id_posisi = posisi.id AND pegawai.id_kota = kota.id AND pegawai.id_posisi={$id}";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function insert($data) {
		$sql = "INSERT INTO master_jadwal VALUES('','" .$data['pegawai_id'] ."','" .$data['unit_id'] ."','" .$data['hari_id'] ."','" .$data['jam_mulai']."','" .$data['jam_selesai']."')";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert_batch($data) {
		$this->db->insert_batch('posisi', $data);
		
		return $this->db->affected_rows();
	}

	public function update($data) {
		$sql = "UPDATE master_jadwal SET pegawai_id='" .$data['pegawai_id'] ."', unit_id='" .$data['unit_id'] ."', hari_id='" .$data['hari_id'] ."', jam_mulai='" .$data['jam_mulai'] ."', jam_selesai='" .$data['jam_selesai'] ."' WHERE jadwal_id='" .$data['id'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM master_jadwal WHERE jadwal_id='" .$id ."'";

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

	public function select_all_hari() {
		$sql = "SELECT * FROM hari";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_all_jam() {
		$sql = "SELECT * FROM jam";

		$data = $this->db->query($sql);

		return $data->result();
	}
}
