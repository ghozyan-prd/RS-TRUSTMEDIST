<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kota extends CI_Model {
	public function select_all() {
		$this->db->select('*');
		$this->db->from('kota');

		$data = $this->db->get();

		return $data->result();
	}

	public function select_demograsi_kota() {
		$sql = " SELECT kota.nama, master_diagnosa.diagnosa_name, COUNT(diagnosa_pasien.diagnosapasien_id) as jml FROM diagnosa_pasien JOIN master_diagnosa ON master_diagnosa.diagnosa_id = diagnosa_pasien.m_diagnosa_id JOIN kunjungan_pasien ON kunjungan_pasien.pendaftaran_id = diagnosa_pasien.kunjungan_id JOIN master_pasien ON master_pasien.pasien_id = kunjungan_pasien.m_pasien_id JOIN kota ON kota.id = master_pasien.pasien_kota group by kota.id, master_diagnosa.diagnosa_id order by COUNT(diagnosa_pasien.diagnosapasien_id) DESC";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_demograsi_poli() {
		$sql = " SELECT master_unit.unit_nama as poli, master_diagnosa.diagnosa_name, COUNT(diagnosa_pasien.diagnosapasien_id) as jml FROM diagnosa_pasien JOIN master_diagnosa ON master_diagnosa.diagnosa_id = diagnosa_pasien.m_diagnosa_id JOIN kunjungan_pasien ON kunjungan_pasien.pendaftaran_id = diagnosa_pasien.kunjungan_id JOIN master_unit ON master_unit.unit_id  = kunjungan_pasien.m_unit_id   group by master_unit.unit_id, master_diagnosa.diagnosa_id order by COUNT(diagnosa_pasien.diagnosapasien_id) DESC";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_kunjungan_pasien() {
		$tanggal_awal = $this->input->get('start_date');
        $tanggal_akhir = $this->input->get('end_date');
        $search = $this->input->get('search');

        $where_order_id = "";
        $where_tanggal = "";
        $where_kategori = "";

        if (!empty($tanggal_awal) ANd !empty($tanggal_akhir)) {
            $tanggal_awal = formatted_date($tanggal_awal,'Y-m-d 00:00:01');
            $tanggal_akhir = formatted_date($tanggal_akhir,'Y-m-d').' 23:59:59';
            $where_tanggal = "AND (kunjungan_pasien.daftar_tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir')";
        }elseif(!empty($tanggal_awal) AND empty($tanggal_akhir)){
            $tanggal_awal = formatted_date($tanggal_awal,'Y-m-d 00:00:01');
            $tanggal_akhir = date('Y-m-d 23:59:59');
            $where_tanggal = "AND (kunjungan_pasien.daftar_tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir')";
        }

        if (!empty($search)) {
            $where_order_id = "AND master_diagnosa.diagnosa_name LIKE '%".$search."%' OR master_diagnosa.diagnosa_kode LIKE '%".$search."%'";
        }

		$sql = " SELECT master_unit.unit_nama as poli, master_pasien.pasien_nama as nama_pasien, kota.nama as kota, master_pembayaran.bayar_nama as cara_bayar, master_diagnosa.diagnosa_name as diagnosa, master_dokter.pegawai_nama as dokter, kunjungan_pasien.daftar_tanggal as tgl_masuk, kunjungan_pasien.pulang_tanggal as tgl_pulang  FROM kunjungan_pasien JOIN diagnosa_pasien ON diagnosa_pasien.kunjungan_id = kunjungan_pasien.pendaftaran_id JOIN master_pasien ON master_pasien.pasien_id  = kunjungan_pasien.m_pasien_id  JOIN master_dokter ON master_dokter.pegawai_id  = kunjungan_pasien.m_dokter_id  JOIN master_unit ON master_unit.unit_id = kunjungan_pasien.m_unit_id  JOIN kota ON kota.id = master_pasien.pasien_kota JOIN master_pembayaran ON master_pembayaran.bayar_id = kunjungan_pasien.m_bayar_id JOIN master_diagnosa ON master_diagnosa.diagnosa_id = diagnosa_pasien.m_diagnosa_id WHERE kunjungan_pasien.pendaftaran_id >= 1 " . "$where_tanggal $where_order_id";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_by_id($id) {
		$sql = "SELECT * FROM kota WHERE id = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function select_by_pegawai($id) {
		$sql = " SELECT pegawai.id AS id, pegawai.nama AS pegawai, pegawai.telp AS telp, kota.nama AS kota, kelamin.nama AS kelamin, posisi.nama AS posisi FROM pegawai, kota, kelamin, posisi WHERE pegawai.id_kelamin = kelamin.id AND pegawai.id_posisi = posisi.id AND pegawai.id_kota = kota.id AND pegawai.id_kota={$id}";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function insert($data) {
		$sql = "INSERT INTO kota VALUES('','" .$data['kota'] ."')";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function insert_batch($data) {
		$this->db->insert_batch('kota', $data);
		
		return $this->db->affected_rows();
	}

	public function update($data) {
		$sql = "UPDATE kota SET nama='" .$data['kota'] ."' WHERE id='" .$data['id'] ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$sql = "DELETE FROM kota WHERE id='" .$id ."'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function check_nama($nama) {
		$this->db->where('nama', $nama);
		$data = $this->db->get('kota');

		return $data->num_rows();
	}

	public function total_rows() {
		$data = $this->db->get('kota');

		return $data->num_rows();
	}
}

