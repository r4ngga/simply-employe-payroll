<?php
class Guru extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Guru_model');
		$this->load->model('Gaji_model');
	}
	public function index()
	{
		$data['dashboard_breadcumb1'] = "Dashboard";
		$data['user'] = $this->db->get_where('guru', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Welcome Dashboard";
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar', $data);
		$this->load->view('guru/index', $data);
		$this->load->view('template/footer');
	}

	public function showteacher()
	{
		$data['dashboard_breadcumb1'] = "Show All Teacher";
		$data['user'] = $this->db->get_where('guru', ['email' => $this->session->userdata('email')])->row_array();
		$data['guru'] = $this->Guru_model->Get_All_Teach();
		$data['title'] = "Show Teacher";
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('template/topbar', $data);
		$this->load->view('guru/show_all', $data);
		$this->load->view('template/footer');
	}

	public function info_acc($kdguru)
	{
		$data['dashboard_breadcumb1'] = "Setting";
		$data['user'] = $this->db->get_where('guru', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Account Information";
		$data['guru'] = $this->Guru_model->Get_Teach_ById($kdguru);
		$data['rand_string'] = random_string('alnum', 8);
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar', $data);
		$this->load->view('auth/info_acc', $data);
		$this->load->view('template/footer');
	}

	public function settingaccount($kd_guru)
	{
		$data['dashboard_breadcumb1'] = "Setting / Change Your Setting Account";
		$data['dashboard_breadcumb2'] = "Setting";
		$data['user'] = $this->db->get_where('guru', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Setting";
		$data['guru'] = $this->Guru_model->Get_Teach_ById($kd_guru);
		$data['rand_string'] = random_string('alnum', 8);
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar', $data);
		$this->load->view('auth/setting', $data);
		$this->load->view('template/footer');
	}

	public function settingaccount_act()
	{
		$this->form_validation->set_rules('kd_guru', 'Code Teacher', 'required|trim');
		$this->form_validation->set_rules('nama_guru', 'Username', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('no_tlp', 'No Tlp', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Address', 'required|trim');
		$this->form_validation->set_rules('no_rek', 'Account Bank Number', 'required|trim');
		$this->form_validation->set_rules(
			'password',
			'Password',
			'required|trim|min_length[4]',
			[
				'matches' => 'password tidak sama',
				'min_length' => 'password minimal diatas 3 karakter'
			]
		);
		$this->form_validation->set_rules(
			'password1',
			'Confirm Password',
			'required|trim|min_length[4]|matches[password]',
			[
				'matches' => 'password tidak sama',
				'min_length' => 'password minimal diatas 3 karakter'
			]
		);
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('notify', '<div class="alert alert-danger" role="alert">
                Failed save changes, please try again !!
              </div>');
			redirect('guru');
		} else {
			$this->Guru_model->SaveSetting();
			$this->session->set_flashdata('notify', '<div class="alert alert-success" role="alert">
			Success save changes !!
		  </div>');
			redirect('guru');
		}
	}

	public function confirm_yourpayment($kdguru)
	{
		$data['dashboard_breadcumb1'] = "Confirm Your Payment";
		$data['dashboard_breadcumb2'] = "Setting";
		$data['user'] = $this->db->get_where('guru', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Confirm Your Payment";
		$data['konfirmasi'] = $this->Gaji_model->SetSelectedConfirmPayment($kdguru);
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar', $data);
		$this->load->view('guru/confirmpayment', $data);
		$this->load->view('template/footer');
	}

	public function confirmpayment_act()
	{
		$this->form_validation->set_rules('kd_konfirmasi', 'Code Confirm', 'required|trim');
		$this->form_validation->set_rules('kd_gaji', 'Payment Code', 'required|trim');
		$this->form_validation->set_rules('status_konfirmasi', 'Payment Code', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('notify', '<div class="alert alert-danger" role="alert">
			Failed confirmation your payment, please try again !!
		  </div>');
			redirect('guru');
		} else {
			$this->Gaji_model->ConfirmStatusPayment();
			$this->session->set_flashdata('notify', '<div class="alert alert-success" role="alert">
			Success confirmation your payment, thanks for your attention !!
		  </div>');
			redirect('guru');
		}
	}

	public function showlogpayment($kdguru)
	{
		$data['dashboard_breadcumb1'] = "Confirm Your Payment";
		$data['dashboard_breadcumb2'] = "Setting";
		$data['user'] = $this->db->get_where('guru', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Confirm Your Payment";
		$data['konfirmasi'] = $this->Gaji_model->SetLogConfirmPayment($kdguru);
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar', $data);
		$this->load->view('guru/logpayment', $data);
		$this->load->view('template/footer');
	}
}
