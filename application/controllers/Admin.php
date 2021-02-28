<?php
class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Guru_model');
		$this->load->model('Gaji_model');
	}
	public function index()
	{
		$data['user'] = $this->db->get_where('guru', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Welcome Dashboard";
		$data['dashboard_breadcumb1'] = "Dashboard";
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('template/footer');
	}

	public function showteach()
	{
		$data['dashboard_breadcumb1'] = "Management Teacher / Show All Teacher";
		$data['user'] = $this->db->get_where('guru', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Show Teacher";
		$data['guru'] = $this->Guru_model->Get_All_Teach();
		if ($this->input->post('keyword')) {
			$data['guru'] = $this->Guru_model->GetSearchTeacher();
		}
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar', $data);
		$this->load->view('guru/show_all', $data);
		$this->load->view('template/footer');
	}

	public function teacherdelete_act()
	{
		$this->form_validation->set_rules('kd_guru', 'Code Teacher', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('notify', '<div class="alert alert-danger" role="alert">
                Failed delete account teacher, please try again !!
              </div>');
			redirect('admin/showteach');
		} else {
			$this->Guru_model->DeleteAccTeacher();
			$this->session->set_flashdata('notify', '<div class="alert alert-success" role="alert">
			Success delete account teacher !!
		  </div>');
			redirect('admin/showteach');
		}
	}

	public function changeteacher($idguru)
	{
		$data['dashboard_breadcumb1'] = "Management Teacher / Edit Data Teacher";
		$data['user'] = $this->db->get_where('guru', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Edit Teacher";
		$data['guru'] = $this->Guru_model->Get_Teach_ById($idguru);
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar', $data);
		$this->load->view('guru/change_guru', $data);
		$this->load->view('template/footer');
	}

	public function changeteacher_act()
	{
		$this->form_validation->set_rules('kd_guru', 'Code Teacher', 'required|trim');
		$this->form_validation->set_rules('nama_guru', 'Username', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('no_tlp', 'No Tlp', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Address', 'required|trim');
		$this->form_validation->set_rules('no_rek', 'Account Bank Number', 'required|trim');
		$this->form_validation->set_rules('gaji_utama', 'Payment', 'required|trim');
		$this->form_validation->set_rules('role', 'Role', 'required|trim');
		$this->form_validation->set_rules('sub_role', 'Sub Role', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('notify', '<div class="alert alert-danger" role="alert">
                Failed save changes, please try again !!
              </div>');
			redirect('admin/showteach');
		} else {
			$this->Guru_model->SaveChangeteacher();
			$this->session->set_flashdata('notify', '<div class="alert alert-success" role="alert">
			Success save changes !!
		  </div>');
			redirect('admin/showteach');
		}
	}

	public function addnewteach()
	{
		$data['dashboard_breadcumb1'] = "Management Teacher / Insert Data Teacher";
		$data['user'] = $this->db->get_where('guru', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Insert Data Teacher";
		$data['rand_string'] = random_string('alnum', 8);
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar', $data);
		$this->load->view('guru/insert_guru', $data);
		$this->load->view('template/footer');
	}

	public function addnewteach_act()
	{
		$this->form_validation->set_rules('kd_guru', 'Code Teacher', 'required|trim');
		$this->form_validation->set_rules('nama_guru', 'Username', 'required|trim|is_unique[guru.nama_guru]');
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('no_tlp', 'No Tlp', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Address', 'required|trim');
		$this->form_validation->set_rules('no_rek', 'Account Bank Number', 'required|trim');
		$this->form_validation->set_rules('gaji_utama', 'Payment', 'required|trim');
		$this->form_validation->set_rules('role', 'Role', 'required|trim');
		$this->form_validation->set_rules('sub_role', 'Sub Role', 'required|trim');
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
			Failed insert a new teacher, please try again !!
		  </div>');
			redirect('admin/showteach');
		} else {
			$this->Guru_model->Insert_New_Teach();
			$this->session->set_flashdata('notify', '<div class="alert alert-success" role="alert">
			Success create a new data teacher !!
		  </div>');
			redirect('admin/showteach');
		}
	}

	public function info_acc_admin($idguru)
	{
		$data['dashboard_breadcumb1'] = "Setting / Account Information";
		$data['user'] = $this->db->get_where('guru', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Account Information";
		$data['guru'] = $this->Guru_model->Get_Teach_ById($idguru);
		$data['rand_string'] = random_string('alnum', 8);
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar', $data);
		$this->load->view('auth/info_acc', $data);
		$this->load->view('template/footer');
	}

	public function settingaccount_admin($kd_guru)
	{
		$data['dashboard_breadcumb1'] = "Setting / Change Your Setting Account";
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

	public function setting_act()
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
			redirect('admin');
		} else {
			$this->Guru_model->SaveSetting();
			$this->session->set_flashdata('notify', '<div class="alert alert-success" role="alert">
			Success save changes !!
		  </div>');
			redirect('admin');
		}
	}

	public function setpayment()
	{
		//untuk proses transaksi penggajiannya
		$data['dashboard_breadcumb1'] = "Payment Teacher";
		$data['user'] = $this->db->get_where('guru', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Payment Teacher";
		$data['guru'] = $this->Guru_model->Get_All_Teach();
		$data['rand_string'] = random_string('alnum', 6);
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar', $data);
		$this->load->view('admin/payment', $data);
		$this->load->view('template/footer');
	}

	public function payment_act()
	{
		$this->form_validation->set_rules('kd_gaji', 'Code Invoice Payment', 'required|trim');
		$this->form_validation->set_rules('kd_guru', 'Code Teacher', 'required|trim');
		$this->form_validation->set_rules('banyak_pertemuan', 'How Much Attend', 'required|trim');
		$this->form_validation->set_rules('gaji_utama', 'Default Payment', 'required|trim');
		$this->form_validation->set_rules('pt', 'How Much Placement Test', 'required|trim');
		$this->form_validation->set_rules('bonus_pt', 'Bonus Placment Test', 'required|trim');
		$this->form_validation->set_rules('wn', 'How Much Welcome Newbie', 'required|trim');
		$this->form_validation->set_rules('bonus_wn', 'Bonus Welcome Newbie', 'required|trim');
		$this->form_validation->set_rules('totalbonus', 'Total Bonus Payment', 'required|trim');
		$this->form_validation->set_rules('total_gaji', 'Total Payment', 'required|trim');
		$this->form_validation->set_rules('total_gajilembur', 'Total Payment With Bonus', 'required|trim');
		$this->form_validation->set_rules('tgl_terima', 'Date Pay', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('notify', '<div class="alert alert-danger" role="alert">
                Failed insert a new payment to worker, please try again !!
              </div>');
			redirect('admin/setpayment');
		} else {
			$this->Gaji_model->InsertPaymentWorker();
			$this->Gaji_model->SetConfirmWorker();
			$this->session->set_flashdata('notify', '<div class="alert alert-success" role="alert">
                Success insert a new payment to worker, tell them paid was send !!
              </div>');
			redirect('admin/setpayment');
		}
	}

	public function set_teacherhome()
	{
		$data['dashboard_breadcumb1'] = "Set Teacher Landing Page";
		$data['user'] = $this->db->get_where('guru', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Set Teacher Landing Page";
		$data['guru'] = $this->Guru_model->Get_All_Teach();
		$data['rand_string'] = random_string('alnum', 6);
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar', $data);
		$this->load->view('auth/manage_landingpage', $data);
		$this->load->view('template/footer');
	}

	public function set_teacherhome_act()
	{
		$this->form_validation->set_rules('guru_det', 'Description', 'required|trim');
		$this->form_validation->set_rules('kd_guru', 'Code Teacher', 'required|trim|is_unique[guru_detail.kd_guru]');
		$this->form_validation->set_rules('mapel', 'Subjects', 'required|trim');
		$this->form_validation->set_rules('background', 'Description', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('notify', '<div class="alert alert-danger" role="alert">
                Failed add staff to show landing page, please try again !!
              </div>');
			redirect('admin');
		} else {
			//action
			$this->Guru_model->InsertDetailStaff();
			$this->session->set_flashdata('notify', '<div class="alert alert-success" role="alert">
			Success add staff to show landing page !!
              </div>');
			redirect('admin');
		}
	}

	public function showteacherlandingpage()
	{
		$data['dashboard_breadcumb1'] = "List Landing Page";
		$data['user'] = $this->db->get_where('guru', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "List Landing Page";
		$data['gurudet'] = $this->Guru_model->SelectDetailTeacher();
		$data['rand_string'] = random_string('alnum', 6);
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar', $data);
		$this->load->view('guru/show_lp', $data);
		$this->load->view('template/footer');
	}

	public function changeteacherlandingpage($kd_det)
	{
		$data['dashboard_breadcumb1'] = "List Landing Page / Change Teacher Landing Page";
		$data['user'] = $this->db->get_where('guru', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Change Teacher Landing Page";
		$data['gurudet'] = $this->Guru_model->SetSelectDetail($kd_det);
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar', $data);
		$this->load->view('guru/change_lp', $data);
		$this->load->view('template/footer');
	}

	public function changeteacherlandingpage_act()
	{
		$this->form_validation->set_rules('guru_det', 'Description', 'required|trim');
		$this->form_validation->set_rules('kd_guru', 'Code Teacher', 'required|trim');
		$this->form_validation->set_rules('mapel', 'Subjects', 'required|trim');
		$this->form_validation->set_rules('background', 'Description', 'required');
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('notify', '<div class="alert alert-danger" role="alert">
                Failed update staff from landing page, please try again !!
              </div>');
			redirect('admin');
		} else {
			$this->Guru_model->UpdateDetailLandingPage();
			$this->session->set_flashdata('notify', '<div class="alert alert-success" role="alert">
			Success update staff from landing page !!
              </div>');
			redirect('admin');
		}
	}

	public function deleteteacherlp()
	{
		$this->form_validation->set_rules('guru_det', 'Description', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('notify', '<div class="alert alert-danger" role="alert">
                Failed delete staff from landing page, please try again !!
              </div>');
			redirect('admin/showteacherlandingpage');
		} else {
			$this->Guru_model->DeleteDetailStaff();
			$this->session->set_flashdata('notify', '<div class="alert alert-success" role="alert">
			Success delete staff from landing page !!
              </div>');
			redirect('admin/showteacherlandingpage');
		}
	}

	public function allreportpayment()
	{
		$data['dashboard_breadcumb1'] = "Report Payment";
		$data['user'] = $this->db->get_where('guru', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Report Payment";
		$data['gaji'] = $this->Gaji_model->GetAllPayment();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar', $data);
		$this->load->view('admin/report_payment', $data);
		$this->load->view('template/footer');
	}

	public function allreportconfirm()
	{
		$data['dashboard_breadcumb1'] = "Report Confirmation Paid";
		$data['user'] = $this->db->get_where('guru', ['email' => $this->session->userdata('email')])->row_array();
		$data['title'] = "Report Confirmation Paid";
		$data['gaji'] = $this->Gaji_model->GetallConfirm();
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('template/topbar', $data);
		$this->load->view('admin/report_confirm', $data);
		$this->load->view('template/footer');
	}
}
