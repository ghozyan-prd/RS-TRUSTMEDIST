<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model {
	public function select_all_pegawai() {
		$sql = "SELECT * FROM master_dokter";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_all() {
		$sql = " SELECT master_dokter.pegawai_id AS id, master_dokter.pegawai_nama AS pegawai, master_dokter.pegawai_nomor AS nomor, master_dokter.pegawai_sip as sip, kelamin.nama as JK FROM master_dokter LEFT JOIN kelamin ON master_dokter.pegawai_jenis_kelamin = kelamin.kode";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = " SELECT master_dokter.pegawai_id AS id, master_dokter.pegawai_nama AS pegawai, master_dokter.pegawai_nomor AS nomor, master_dokter.pegawai_sip as sip, master_dokter.pegawai_jenis_kelamin as JK FROM master_dokter WHERE master_dokter.pegawai_id = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function select_by_posisi($id) {
		$sql = "SELECT COUNT(*) AS jml FROM pegawai WHERE id_posisi = {$id}";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function select_by_kota($id) {
		$sql = "SELECT COUNT(*) AS jml FROM pegawai WHERE id_kota = {$id}";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function update($data) {
		$sql = "UPDATE master_dokter SET pegawai_nama='" .$data['pegawai_nama'] ."', pegawai_nomor='" .$data['pegawai_nomor'] ."', pegawai_sip='" .$data['pegawai_sip'] ."', pegawai_jenis_kelamin='" .$data['pegawai_jenis_kelamin'] ."'  WHERE pegawai_id='" .$data['id'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM master_dokter WHERE pegawai_id='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert($data) {
		
		$sql = "INSERT INTO master_dokter VALUES('','" .$data['pegawai_nomor'] ."','" .$data['pegawai_nama'] ."','" .$data['pegawai_jenis_kelamin'] ."','" .$data['pegawai_sip']."')";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert_batch($data) {
		$this->db->insert_batch('master_dokter', $data);
		
		return $this->db->affected_rows();
	}

	public function check_nama($nama) {
		$this->db->where('pegawai_nama', $nama);
		$data = $this->db->get('master_dokter');

		return $data->num_rows();
	}

	public function total_rows() {
		$data = $this->db->get('master_dokter');

		return $data->num_rows();
	}
}

