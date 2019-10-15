<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller {
	private $login_status;
	public $sesson;

	public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('functions');
		$this->load->library('form_validation');
		$this->load->model('users/user_login');
		if ($this->session->userdata('logged_in') == true) {
			$this->login_status = true;
		}else {
			$this->login_status = false;
		}
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// $data ['failed'] = '';
		// $this->load->view('admin/login', $data);
		redirect("admin/login");
	}
	
	
	
	
	
	public function login() {
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|min_length[6]|max_length[60]||valid_email|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[20]|xss_clean');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/login');
		}else {
		
			$login = $this->user_login->login_user();

			//print $this->session->userdata('logged_in');
			if ($login) {
				$this->load->helper('settings_functions_helper');
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');
				$this->load->view('admin/index');
				$this->load->view('admin/footer');
			}else {
				// $data ['failed'] = 1;
				// $this->load->view('admin/login', $data);
				redirect("admin/login");
			}
		
		
		}
	}
	
	
	
	
	

    function logout() {
			$this->session->unset_userdata('logged_in');
			$this->session->sess_destroy();
			$this->load->view('admin/login');
		}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */