<?php
class Gaji_model extends CI_Model
{

	public function InsertPaymentWorker()
	{
		$data = [
			'kd_gaji' => $this->input->post('kd_gaji'),
			'kd_guru' => $this->input->post('kd_guru'),
			'banyak_pertemuan' => $this->input->post('banyak_pertemuan'),
			'gaji_utama' => $this->input->post('gaji_utama'),
			'pt' => $this->input->post('pt'),
			'bonus_pt' => $this->input->post('bonus_pt'),
			'wn' => $this->input->post('wn'),
			'bonus_wn' => $this->input->post('bonus_wn'),
			'totalbonus' => $this->input->post('totalbonus'),
			'total_gaji' => $this->input->post('total_gaji'),
			'total_gajilembur' => $this->input->post('total_gajilembur'),
			'tgl_terima' => $this->input->post('tgl_terima')
		];

		$this->db->insert('gaji', $data);
	}

	public function SetConfirmWorker()
	{
		$data = [
			'kd_gaji' => $this->input->post('kd_gaji'),
			'kd_guru' => $this->input->post('kd_guru'),
			'status_konfirmasi' => "belum diterima"
		];
		$this->db->insert('konfirmasi', $data);
	}

	public function GetAllPayment()
	{
		$this->db->select('*');
		$this->db->from('gaji');
		$this->db->join('guru', 'guru.kd_guru = gaji.kd_guru');
		return $this->db->get()->result_array();
	}

	public function GetallConfirm()
	{
		$this->db->select('*');
		$this->db->from('konfirmasi');
		$this->db->join('gaji', 'gaji.kd_gaji = konfirmasi.kd_gaji');
		$this->db->join('guru', 'guru.kd_guru = konfirmasi.kd_guru');
		return $this->db->get()->result_array();
	}

	public function SetSelectedConfirmPayment($kdguru)
	{
		$this->db->select('*');
		$this->db->from('konfirmasi');
		$this->db->join('gaji', 'gaji.kd_gaji = konfirmasi.kd_gaji');
		$this->db->join('guru', 'guru.kd_guru = konfirmasi.kd_guru');
		$setworker = [
			'gaji.kd_guru' => $kdguru,
			'status_konfirmasi' => "belum diterima"
		];
		$this->db->where($setworker);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function ConfirmStatusPayment()
	{

		$data = [
			'status_konfirmasi' => $this->input->post('status_konfirmasi')
		];

		$kdguru = $this->input->post('kd_konfirmasi');
		$kdgaji = $this->input->post('kd_gaji');
		$this->db->where('kd_konfirmasi', $kdguru);
		$this->db->where('kd_gaji', $kdgaji);
		//$this->db->where($set_status);
		$this->db->update('konfirmasi', $data);
	}

	public function SetLogConfirmPayment($kdguru)
	{
		$this->db->select('*');
		$this->db->from('konfirmasi');
		$this->db->join('gaji', 'gaji.kd_gaji = konfirmasi.kd_gaji');
		$this->db->join('guru', 'guru.kd_guru = konfirmasi.kd_guru');
		$this->db->where('gaji.kd_guru', $kdguru);
		$query = $this->db->get();
		return $query->result_array();
	}
}
