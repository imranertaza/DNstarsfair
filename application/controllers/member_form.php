<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class member_form extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('settings_functions_helper');
		$this->load->database();
		$this->load->model('functions');
		$this->load->library('form_validation');
		$this->load->model('users/user_login');
		if ($this->session->userdata('m_logged_in') == true) {
			$this->m_logged_in = true;
		}else {
			$this->m_logged_in = false;
		}
		
		$this->load->helper('settings_functions_helper');
		$this->load->helper('path');
		$this->load->library('pagination');
		$this->load->model('settings/global_settings');
		$this->load->model('functions');
		
	}
	
	public function index()
	{

		$data['dwn_path'] = base_url()."uploads/downloads/"; //$get_download;
		
		
		$notice_list = $this->db->query("SELECT * FROM `downloads` WHERE `cat_id` IN (5) ORDER BY `dwn_id` DESC LIMIT 0, 5");
		if ($notice_list->num_rows() > 0)
		{
		   $data['list_notice'] = $notice_list->result();
		}else {
			$data['list_notice'] = 'No notice published';	
		}

		$data['footer_widget_title'] = $this->functions->show_widget('title', 8);
		$data['footer_widget_description'] = $this->functions->show_widget('description', 8);
		
		$data['footer_widget2_title'] = $this->functions->show_widget('title', 9);
		$data['footer_widget2_description'] = $this->functions->show_widget('description', 9);
		
		$data['page_title'] = 'home';
		$data['slider'] = '';
		
		if ($this->m_logged_in == true) {
			$data['log_url'] = 'member_form/logout_member.html';
			$data['log_title'] = 'Logout';
			$data['check_user'] = $this->session->userdata('m_logged_in');
			$data['ID'] = $this->session->userdata('user_id');
			$data['u_name'] = get_field_by_id_from_table('users', 'username', 'ID', $data['ID']);
			$data['f_name'] = get_field_by_id_from_table('users', 'f_name', 'ID', $data['ID']);
			$data['l_name'] = get_field_by_id_from_table('users', 'l_name', 'ID', $data['ID']);
			$data['balance'] = get_field_by_id_from_table('users', 'balance', 'ID', $data['ID']);
			$data['point'] = get_field_by_id_from_table('users', 'point', 'ID', $data['ID']);
			$data['role'] = get_field_by_id_from_table('user_roles', 'roleID', 'userID', $data['ID']);
			$data['sidebar_left'] = $this->load->view('front/client_area/sidebar-left', $data, true);
			$this->load->view('front/client_area/header', $data);
			$this->load->view('front/client_area/member_form', $data);
			$this->load->view('front/client_area/footer', $data);
		}else{
			$data['check_user'] = '';
			$data['log_url'] = 'member_form/login.html';
			$data['log_title'] = 'Login';
			$data['sidebar_left'] = $this->load->view('front/sidebar-left', $data, true);
			$this->load->view('front/header', $data);
			$this->load->view('front/member_form', $data);
			$this->load->view('front/footer', $data);
		}
		
	}
	
	
	
	/*public function my_tree($user_id=0)
	{
		$this->load->helper('student_functions_helper');
		
		$data['dwn_path'] = base_url()."uploads/downloads/";
		$notice_list = $this->db->query("SELECT * FROM `downloads` WHERE `cat_id` IN (5) ORDER BY `dwn_id` DESC LIMIT 0, 5");
		if ($notice_list->num_rows() > 0)
		{
		   $data['list_notice'] = $notice_list->result();
		}else {
			$data['list_notice'] = 'No notice published';	
		}

		$data['footer_widget_title'] = $this->functions->show_widget('title', 8);
		$data['footer_widget_description'] = $this->functions->show_widget('description', 8);
		
		$data['footer_widget2_title'] = $this->functions->show_widget('title', 9);
		$data['footer_widget2_description'] = $this->functions->show_widget('description', 9);
		
		$data['page_title'] = 'home';
		$data['slider'] = '';
		
		if ($this->m_logged_in == true) {
			$data['log_url'] = 'member_form/logout_member.html';
			$data['log_title'] = 'Logout';
			$data['check_user'] = $this->session->userdata('m_logged_in');
			$data['ID'] = $this->session->userdata('user_id');
			$data['u_name'] = get_field_by_id_from_table('users', 'username', 'ID', $data['ID']);
			$data['f_name'] = get_field_by_id_from_table('users', 'f_name', 'ID', $data['ID']);
			$data['l_name'] = get_field_by_id_from_table('users', 'l_name', 'ID', $data['ID']);
			$data['balance'] = get_field_by_id_from_table('users', 'balance', 'ID', $data['ID']);
			$data['point'] = get_field_by_id_from_table('users', 'point', 'ID', $data['ID']);
			$data['role'] = get_field_by_id_from_table('user_roles', 'roleID', 'userID', $data['ID']);
			$data['user_id'] = $user_id;
			$data['sidebar_left'] = $this->load->view('front/client_area/sidebar-left', $data, true);
			$this->load->view('front/client_area/header', $data);
			$this->load->view('front/my_tree', $data);
			$this->load->view('front/client_area/footer', $data);
		}else{
			$data['check_user'] = '';
			$data['log_url'] = 'member_form/login.html';
			$data['log_title'] = 'Login';
			$data['sidebar_left'] = $this->load->view('front/sidebar-left', $data, true);
			$this->load->view('front/header', $data);
			$this->load->view('front/member_form', $data);
			$this->load->view('front/footer', $data);
		}
		
	}*/
	



	public function login() {

		$home_page_query = $this->db->query("SELECT * FROM `pages` where `page_id` = '100'");
		$h_page_query = $home_page_query->row();
		$data['title'] = $h_page_query->page_title;
		$data['description'] = $h_page_query->page_description;
		$data['check_user'] = $this->session->userdata('m_logged_in');
		$data['slider'] = '';
		$login = '';
		

		$latest_notice = $this->db->query("SELECT * FROM `downloads` WHERE `cat_id` IN (5) ORDER BY `dwn_id` DESC");
		$last_notice = $latest_notice->row();
		$data['notice_title'] = $last_notice->title;
		$data['notice_description'] = $last_notice->description;
		$data['notice_file'] = $last_notice->file;
		
		
		$data['dwn_path'] = base_url()."uploads/downloads/"; //$get_download;
		
		
		$notice_list = $this->db->query("SELECT * FROM `downloads` WHERE `cat_id` IN (5) ORDER BY `dwn_id` DESC LIMIT 0, 5");
		if ($notice_list->num_rows() > 0)
		{
		   $data['list_notice'] = $notice_list->result();
		}else {
			$data['list_notice'] = 'No notice published';	
		}
		
		$data['footer_widget_title'] = $this->functions->show_widget('title', 8);
		$data['footer_widget_description'] = $this->functions->show_widget('description', 8);
		
		$data['footer_widget2_title'] = $this->functions->show_widget('title', 9);
		$data['footer_widget2_description'] = $this->functions->show_widget('description', 9);
		

		if (isset($_POST['login'])) {
		$this->form_validation->set_rules('username', 'Usernmae', 'trim|required|min_length[5]|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|xss_clean');
			
			if ($this->form_validation->run() == TRUE) {
				$login = $this->user_login->login_member();
			}
		}
		
		if (($this->m_logged_in == true) || ($login)) {

            if ($this->session->userdata('role') == 4) { redirect("agent/dashboard/"); }
		    redirect("member/dashboard/");
//			$data['check_user'] = $this->session->userdata('m_logged_in');
//			$data['ID'] = $this->session->userdata('user_id');
//			$data['u_name'] = get_field_by_id_from_table('users', 'username', 'ID', $data['ID']);
//			$data['f_name'] = get_field_by_id_from_table('users', 'f_name', 'ID', $data['ID']);
//			$data['l_name'] = get_field_by_id_from_table('users', 'l_name', 'ID', $data['ID']);
//			$data['balance'] = get_field_by_id_from_table('users', 'balance', 'ID', $data['ID']);
//			$data['point'] = get_field_by_id_from_table('users', 'point', 'ID', $data['ID']);
//			$data['role'] = get_field_by_id_from_table('user_roles', 'roleID', 'userID', $data['ID']);
//			$data['page_title'] = 'home';
//			$data['log_url'] = 'member_form/logout_member.html';
//			$data['log_title'] = 'Logout';
//			$data['sidebar_left'] = $this->load->view('front/client_area/sidebar-left', $data, true);
//			$this->load->view('front/client_area/header', $data);
//			$this->load->view('front/client_area/member_form', $data);
//			$this->load->view('front/client_area/footer', $data);
		}else {
			$data['log_url'] = 'member_form/login.html';
			$data['log_title'] = 'Login';
			$data['sidebar_left'] = $this->load->view('front/sidebar-left', $data, true);
			$this->load->view('front/header', $data);
			$this->load->view('front/member_form', $data);
			$this->load->view('front/footer', $data);	
		}	
		
	}
	
	
	
	
	
	public function register() {
		
		$this->load->helper('student_functions_helper');
		
		$data['dwn_path'] = base_url()."uploads/downloads/"; //$get_download;
		$notice_list = $this->db->query("SELECT * FROM `downloads` WHERE `cat_id` IN (5) ORDER BY `dwn_id` DESC LIMIT 0, 5");
		if ($notice_list->num_rows() > 0)
		{
		   $data['list_notice'] = $notice_list->result();
		}else {
			$data['list_notice'] = 'No notice published';	
		}

		$data['footer_widget_title'] = $this->functions->show_widget('title', 8);
		$data['footer_widget_description'] = $this->functions->show_widget('description', 8);
		
		$data['footer_widget2_title'] = $this->functions->show_widget('title', 9);
		$data['footer_widget2_description'] = $this->functions->show_widget('description', 9);
		
		$data['page_title'] = 'home';
		$data['slider'] = '';
		
		
		
		
		if ($this->m_logged_in == true) {
		    redirect("member/dashboard/");
//			$data['log_url'] = 'member_form/logout_member.html';
//			$data['log_title'] = 'Logout';
//			$data['check_user'] = $this->session->userdata('m_logged_in');
//			$data['ID'] = $this->session->userdata('user_id');
//			$data['u_name'] = get_field_by_id_from_table('users', 'username', 'ID', $data['ID']);
//			$data['f_name'] = get_field_by_id_from_table('users', 'f_name', 'ID', $data['ID']);
//			$data['l_name'] = get_field_by_id_from_table('users', 'l_name', 'ID', $data['ID']);
//			$data['balance'] = get_field_by_id_from_table('users', 'balance', 'ID', $data['ID']);
//			$data['point'] = get_field_by_id_from_table('users', 'point', 'ID', $data['ID']);
//			$data['role'] = get_field_by_id_from_table('user_roles', 'roleID', 'userID', $data['ID']);
//			$data['sidebar_left'] = $this->load->view('front/client_area/sidebar-left', $data, true);
//			$this->load->view('front/client_area/header', $data);
//			$this->load->view('front/register', $data);
//			$this->load->view('front/client_area/footer', $data);
		}else{
			$data['check_user'] = '';
			$data['log_url'] = 'member_form/login.html';
			$data['log_title'] = 'Login';
			$data['sidebar_left'] = $this->load->view('front/sidebar-left', $data, true);
			$this->load->view('front/header', $data);
			$this->load->view('front/register', $data);
			$this->load->view('front/footer', $data);
		}
		
		
	}



	function register_action(){


        if (isset($_POST['add_user'])) {
            $this->rules();

            if ($this->form_validation->run() == TRUE) {

                $position = $this->input->post('position');
                if (($position == 1) || ($position == 2)) {


                    //Image upload into temp file
                    $photo_name = 'profile_' . time() . '.jpg';
                    $config['upload_path'] = 'uploads/temp/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['file_name'] = $photo_name;
                    $config['max_size'] = '100';
                    $config['image_width'] = '1024';
                    $config['image_height'] = '768';
                    $config['is_image'] = 1;
                    $config['max_size'] = 0;
                    $this->session->set_userdata("config", $config);
                    $this->load->library('upload', $config);
                    $this->upload->do_upload('photo');

	
                    // Insert into user
                    $data_personal = array(
                        'email' => $_POST['email'],
                        'username' => $_POST['uname'],
                        'password' => md5($_POST['pass']),
                        'f_name' => $_POST['fname'],
                        'l_name' => "no_need",
                        'address1' =>$_POST['addr'],
                        'address2' => $_POST['per_addr'],
                        'phn_no' => $_POST['phone'],
                        'nid' => $_POST['nid'],
                        'father' => $_POST['father'],
                        'mother' => $_POST['mother'],
                        'religion' => $_POST['religion'],
                        'sex' => $_POST['sex'],
                        'blood' => $_POST['b_group'],
                        'division' => $_POST['division'],	
                        'district' => $_POST['district'],
                        'upozila' => $_POST['upozila'],
                        'union' => $_POST['union'],
                        'post' => $_POST['post_code'],
                        'nominee' => $_POST['non'],
                        'relationship' => $_POST['relation'],
                        'nom_dob' => $_POST['nodob'],
                        'bank_name' => $_POST['banks'],
                        'account_no' => $_POST['account_no'],
                        'balance' => '0',
                        'point' => '0',
                        'status' => 'Inactive',                        
                        'photo' => "no_need.jpg"
                    );                    
                    $this->db->insert('users', $data_personal);
                    $userID = $this->db->insert_id();



                    // Insert into user_role
                    $current_time = date('Y-M-D h:m:s');
                    $data_role = array(
                        'userID' => $userID,
                        'roleID' => 6,
                        'addDate' => $current_time
                    );
                    $this->db->insert('user_roles', $data_role);


                    // Insert into tree
                    $pid = get_ID_by_username($_POST['p_id']);
                    //$ref_id = get_ID_by_username($_POST['ref_id']);
                    $spon_id = get_ID_by_username($_POST['spon_id']);
                    $data_tree = array(
                        'u_id' => $userID,
                        'pr_id' => $pid,
                        'agent_id' => $this->session->userdata('user_id'),
                        'spon_id' => $spon_id
                    );
                    $this->db->insert('tree', $data_tree);

                    // Update tree for left and right
                    if ($_POST['position'] == 1) {
                        $data_left_right = array(
                            'l_t' => $userID
                        );
                    }
                    if ($_POST['position'] == 2) {
                        $data_left_right = array(
                            'r_t' => $userID
                        );
                    }
                    $this->db->where('u_id', $pid);
                    $this->db->update('tree', $data_left_right);

                    //pin update
                    $pin = array(
                    				'pin' =>$this->input->post('pin',TRUE), 
                    				'status'=>'used'
                				);
                    $this->db->where('pin', $_POST['pin']);
                    $this->db->update('pins', $pin);

                    $this->session->set_flashdata("msg", "<div class='alert alert-success'>Successfully Registered. Please Login</div>");
                    redirect("member_form/login/");

                }else {
                    $this->session->set_flashdata("msg", '<div class="alert alert-warning">Sorry! You did not select any position.</div>');
                    redirect("member_form/register/");
                }
            }else{
                $this->session->set_flashdata("msg", validation_errors('<div class="alert alert-warning">', '</div>'));
                redirect("member_form/register/");
            }
        }else{
            redirect("member_form/register/");
        }


    }
	
	
    private function rules() {
        $this->form_validation->set_rules('fname', 'First Name', 'required|xss_clean|encode_php_tags');
        $this->form_validation->set_rules('phone', 'Phone', 'xss_clean|encode_php_tags|is_natural');
        $this->form_validation->set_rules('spon_id', 'Sponsor ID', 'required|xss_clean|encode_php_tags');
        $this->form_validation->set_rules('p_id', 'Placement ID', 'required|xss_clean|encode_php_tags');
        $this->form_validation->set_rules('position', 'Hand/Position', 'required|xss_clean|encode_php_tags|integer|min_length[1]|max_length[1]|is_natural_no_zero');
        $this->form_validation->set_rules('uname', 'Username', 'required|min_length[5]|max_length[20]|is_unique[users.username]');
        $this->form_validation->set_rules('pass', 'Password', 'required|matches[con_pass]|min_length[6]|max_length[20]');
        $this->form_validation->set_rules('con_pass', 'Password Confirmation', 'required||min_length[6]|max_length[20]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    }

	function logout_member() {
		$home_page_query = $this->db->query("SELECT * FROM `pages` where `page_id` = '100'");
		$h_page_query = $home_page_query->row();
		$data['title'] = $h_page_query->page_title;
		$data['description'] = $h_page_query->page_description;
		$data['check_user'] = false;
		$data['slider'] = '';
		
		$notice_list = $this->db->query("SELECT * FROM `downloads` WHERE `cat_id` IN (5) ORDER BY `dwn_id` DESC LIMIT 0, 5");
		if ($notice_list->num_rows() > 0)
		{
		   $data['list_notice'] = $notice_list->result();
		}else {
			$data['list_notice'] = 'No notice published';	
		}
		
		$data['page_title'] = 'home';
		$data['sidebar_left'] = $this->load->view('front/sidebar-left', $data, true);
		
		$data['footer_widget_title'] = $this->functions->show_widget('title', 8);
		$data['footer_widget_description'] = $this->functions->show_widget('description', 8);
		
		$data['footer_widget2_title'] = $this->functions->show_widget('title', 9);
		$data['footer_widget2_description'] = $this->functions->show_widget('description', 9);
		
		$data['log_url'] = 'member_form/login.html';
		$data['log_title'] = 'Login';
		
		
		$this->session->unset_userdata('m_logged_in');
		$this->session->sess_destroy();
		$this->load->view('front/header', $data);
		$this->load->view('front/member_form', $data);
		$this->load->view('front/footer', $data);
	}
	
}
