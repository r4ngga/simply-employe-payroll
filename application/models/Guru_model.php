<?php
class Guru_model extends CI_Model
{

	public function Insert_New_Teach()
	{
		$data = [
			'kd_guru' => $this->input->post('kd_guru'),
			'nama_guru' => $this->input->post('nama_guru'),
			'pasword' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
			'email' => $this->input->post('email'),
			'no_tlp' => $this->input->post('no_tlp'),
			'alamat' => $this->input->post('alamat'),
			'no_rek' => "isi sendiri",
			'gaji_utama' => 0,
			'role' => "guru",
			'sub_role' => "ditentukan oleh atasan"
		];
		$this->db->insert('guru', $data);
	}

	public function Get_All_Teach()
	{
		$setrole = "admin";
		$this->db->select('*');
		$this->db->from('guru');
		$this->db->where_not_in('role', $setrole);
		return $this->db->get()->result_array();
	}

	public function Get_Teach_ById($kdguru)
	{
		$this->db->select('*');
		$this->db->from('guru');
		$this->db->where('kd_guru', $kdguru);
		return $this->db->get()->result_array();
	}

	public function GetSearchTeacher()
	{
		$keyword = $this->input->post('keyword');
		$this->db->select('*');
		$this->db->from('guru');
		$this->db->where('kd_guru', $keyword);
		$this->db->like('nama_guru', $keyword);
		$this->db->or_like('email', $keyword);
		$this->db->or_like('no_tlp', $keyword);
		$this->db->or_like('alamat', $keyword);
		$this->db->or_like('gaji_utama', $keyword);
		$this->db->or_like('role', $keyword);
		$this->db->or_like('sub_role', $keyword);
		return $this->db->get()->result_array();
	}

	public function SaveChangeteacher()
	{
		$data = [
			'nama_guru' => $this->input->post('nama_guru'),
			'email' => $this->input->post('email'),
			'no_tlp' => $this->input->post('no_tlp'),
			'alamat' => $this->input->post('alamat'),
			'no_rek' => $this->input->post('no_rek'),
			'gaji_utama' => $this->input->post('gaji_utama'),
			'role' => $this->input->post('role'),
			'sub_role' => $this->input->post('sub_role')
		];
		$this->db->where('kd_guru', $this->input->post('kd_guru'));
		$this->db->update('guru', $data);
	}

	public function SaveSetting()
	{
		$data = [
			'nama_guru' => $this->input->post('nama_guru'),
			'pasword' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
			'email' => $this->input->post('email'),
			'no_tlp' => $this->input->post('no_tlp'),
			'alamat' => $this->input->post('alamat'),
			'no_rek' => $this->input->post('no_rek')
		];
		$this->db->where('kd_guru', $this->input->post('kd_guru'));
		$this->db->update('guru', $data);
	}

	public function DeleteAccTeacher()
	{
		$kdguru = $this->input->post('kd_guru');
		$this->db->where('kd_guru', $kdguru);
		$this->db->delete('guru');
	}

	public function SetStaffNotSelected()
	{
		$this->db->select('*');
		$this->db->from('guru_detail');
		$this->db->where_not_in('role');
		return $this->db->get()->result_array();
	}

	public function SelectDetailTeacher()
	{
		$this->db->select('*');
		$this->db->from('guru_detail');
		$this->db->join('guru', 'guru.kd_guru = guru_detail.kd_guru');
		return $this->db->get()->result_array();
	}

	public function InsertDetailStaff()
	{
		$data = [
			'guru_det' => $this->input->post('guru_det'),
			'kd_guru' => $this->input->post('kd_guru'),
			'mapel' => $this->input->post('mapel'),
			'background' => $this->input->post('background')
		];
		$this->db->insert('guru_detail', $data);
	}

	public function DeleteDetailStaff()
	{
		$kddet = $this->input->post('guru_det');
		$this->db->where('guru_det', $kddet);
		$this->db->delete('guru_detail');
	}

	public function SetSelectDetail($kd_det)
	{
		$this->db->select('*');
		$this->db->from('guru_detail');
		$this->db->join('guru', 'guru.kd_guru = guru_detail.kd_guru');
		$this->db->where('guru_det', $kd_det);
		return $this->db->get()->result_array();
	}

	public function UpdateDetailLandingPage()
	{
		$data = [
			'kd_guru' => $this->input->post('kd_guru'),
			'mapel' => $this->input->post('mapel'),
			'background' => $this->input->post('backgroound')
		];
		$this->db->where('guru_det', $this->input->post('guru_det'));
		$this->db->update('guru_detail', $data);
	}
}
