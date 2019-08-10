<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class profile extends CI_Controller {
	
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

	public function index($user_id=0)
    {
        $this->load->helper('student_functions_helper');

        $data['dwn_path'] = base_url() . "uploads/downloads/";
        $notice_list = $this->db->query("SELECT * FROM `downloads` WHERE `cat_id` IN (5) ORDER BY `dwn_id` DESC LIMIT 0, 5");
        if ($notice_list->num_rows() > 0) {
            $data['list_notice'] = $notice_list->result();
        } else {
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


            $query = $this->db->get_where('users', array('ID' => $data['ID']));
            $data['row'] = $query->row();

            $this->load->view('front/client_area/member/profile', $data);
            $this->load->view('front/client_area/footer', $data);
        } else {
            redirect("member_form/login/");
        }

    }


    public function change_password()
    {
        $this->load->helper('student_functions_helper');

        $data['dwn_path'] = base_url() . "uploads/downloads/";
        $notice_list = $this->db->query("SELECT * FROM `downloads` WHERE `cat_id` IN (5) ORDER BY `dwn_id` DESC LIMIT 0, 5");
        if ($notice_list->num_rows() > 0) {
            $data['list_notice'] = $notice_list->result();
        } else {
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


            $query = $this->db->get_where('users', array('ID' => $data['ID']));
            $data['row'] = $query->row();

            $this->load->view('front/client_area/member/change_password', $data);
            $this->load->view('front/client_area/footer', $data);
        } else {
            redirect("member_form/login/");
        }

    }


    public function change_password_action()
    {
        $usrID = $this->session->userdata('user_id');
        $current_pass = md5($this->input->post('current_pass'));
        $new_pass = md5($this->input->post('new_pass'));
        $running_pass = get_field_by_id_from_table('users', 'password', 'ID', $usrID);

        $this->__passChangeRules();

        if ($this->form_validation->run() == TRUE)
        {
            if ($current_pass == $running_pass) {
                // updating data password
                $passData = array(
                    'password' => $new_pass
                );
                $this->db->where('ID', $usrID);
                $this->db->update('users', $passData);

                $this->session->set_flashdata('msg', "<div class='alert alert-success' role='alert'>Success!</div>");
            }else {
                $this->session->set_flashdata('msg', "<div class='alert alert-danger' role='alert'>Sorry! you provide wrong current password.</div>");
            }
        }
        redirect("member/profile/change_password/");

    }


    public function __passChangeRules(){
        $this->form_validation->set_rules('current_pass', 'Current Password', 'trim|required');
        $this->form_validation->set_rules('new_pass', 'New Password', 'trim|required|min_length[5]|matches[confirm_pass]');
        $this->form_validation->set_rules('confirm_pass', 'Confirmation Password', 'trim|required');
    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */