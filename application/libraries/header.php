<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class header {

    public function headerarea()
    {
		if ($this->m_logged_in == true) {
		$data['log_url'] = 'member_form/logout_member.html';
		$data['log_title'] = 'Logout';
		}else {
		$data['log_url'] = 'member_form/login.html';
		$data['log_title'] = 'Login';
		}
		$data['check_user'] = $this->session->userdata('m_logged_in');
		
		$data['page_title'] = 'home';
		$data['header_area'] = $this->load->view('front/header', $data, true);
		return $data['header_area'];
    }
}