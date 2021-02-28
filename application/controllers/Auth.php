<?php
class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Guru_model');
	}

	public function index()
	{
		$data['title'] = 'Home';
		$data['detail'] = $this->Guru_model->SelectDetailTeacher();
		$this->load->view('template/header', $data);
		$this->load->view('template/topbar');
		// $this->load->view('template/sidebar');
		$this->load->view('auth/home', $data);
		$this->load->view('template/footer');
	}

	public function login()
	{
		$this->form_validation->set_rules('email', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == false) {
			$data['title'] = 'Login';
			$this->load->view('template/header', $data);
			$this->load->view('auth/login');
			$this->load->view('template/footer');
		} else {
			$this->login_action();
		}
	}

	public function register()
	{
		$data['rand_string'] = random_string('alnum', 8);
		$data['title'] = 'Register';
		$this->load->view('template/header', $data);
		$this->load->view('auth/register');
		$this->load->view('template/footer');
	}

	private function login_action()
	{
		$email = $this->input->post('email', true);
		$password = $this->input->post('password', true);
		$cek_userId = $this->db->get_where('guru', ['email' => $email])->row_array();
		if ($cek_userId) {
			if (password_verify($password, $cek_userId['pasword'])) {
				$data = [
					'email' => $cek_userId['email'],
					'nama_guru' => $cek_userId['nama_guru'],
					'role' => $cek_userId['role']
				];
				$this->session->set_userdata($data);
				if ($cek_userId['role'] == "admin") {
					redirect('admin');
				} else if ($cek_userId['role'] == "guru") {
					redirect('guru');
				} else if ($cek_userId['role'] == "karyawan") {
					redirect('guru');
				} else if ($cek_userId['role'] == "leader camp") {
					redirect('guru');
				}
			} else {
				$this->session->set_flashdata('notify', '<div class="alert alert-danger" role="alert">
                Password akun anda salah!
              </div>');
				redirect('auth/login');
			}
		} else {
			$this->session->set_flashdata('notify', '<div class="alert alert-danger" role="alert">
				  Nama pengguna akun anda salah!
				</div>');
			redirect('auth/login');
		}
	}

	public function register_action()
	{
		$this->form_validation->set_rules('kd_guru', 'Code Teacher', 'required|trim');
		$this->form_validation->set_rules('nama_guru', 'Username', 'required|trim|is_unique[guru.nama_guru]');
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('no_tlp', 'No Tlp', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Address', 'required|trim');
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
				  Failed create a new account, please try again!!
				</div>');
			redirect('auth/register');
		} else {
			$this->session->set_flashdata('notify', '<div class="alert alert-success" role="alert">
				  Success create a new account, welcome to join our system!!
				</div>');
			$this->Guru_model->Insert_New_Teach();
			redirect('auth/login');
		}
	}

	public function log_out()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('nama_guru');
		$this->session->unset_userdata('role');
		$this->session->set_flashdata('notify', '<div class="alert alert-success" role="alert">
    Success LogOut!!
   </div>');
		redirect('auth');
	}

	public function forgotpassword()
	{
		$data['title'] = 'Forgot Password';
		$this->load->view('template/header', $data);
		$this->load->view('auth/forgot_password');
		$this->load->view('template/footer');
	}
}
