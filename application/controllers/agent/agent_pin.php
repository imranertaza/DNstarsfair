<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class agent_pin extends CI_Controller {


	public function __construct() {
		parent::__construct();
		$this->load->helper('settings_functions_helper');
		$this->load->database();
		$this->load->model('functions');
		$this->load->model('users/user_login');
        $this->load->model('settings/global_settings');
        $this->load->helper('student_functions_helper');
		if ($this->session->userdata('m_logged_in') == true) {
			$this->m_logged_in = true;
		}else {
			$this->m_logged_in = false;
		}
	}

	public function index($user_id=0)
	{

        $data["dwn_path"] = base_url()."uploads/downloads/";
        $notice_list = $this->db->query("SELECT * FROM `downloads` WHERE `cat_id` IN (5) ORDER BY `dwn_id` DESC LIMIT 0, 5");
        if ($notice_list->num_rows() > 0)
        {
            $data["list_notice"] = $notice_list->result();
        }else {
            $data["list_notice"] = "No notice published";
        }

        $data["footer_widget_title"] = $this->functions->show_widget("title", 8);
        $data["footer_widget_description"] = $this->functions->show_widget("description", 8);

        $data["footer_widget2_title"] = $this->functions->show_widget("title", 9);
        $data["footer_widget2_description"] = $this->functions->show_widget("description", 9);

        $data["page_title"] = "home";
        $data["slider"] = "";

        if ($this->m_logged_in == true) {
            $data['log_url'] = 'member_form/logout_member.html';
            $data['log_title'] = 'Logout';
            $data['check_user'] = $this->session->userdata('m_logged_in');
            $data['ID'] = $this->session->userdata('user_id');
            $data['u_name'] = get_field_by_id_from_table('users', 'username', 'ID', $data['ID']);
            $data['f_name'] = get_field_by_id_from_table('users', 'f_name', 'ID', $data['ID']);
            $data['l_name'] = get_field_by_id_from_table('users', 'l_name', 'ID', $data['ID']);
            $data['gameBalance'] = get_field_by_id_from_table('users', 'OP_game_balance', 'ID', $data['ID']);
            $data['balance'] = get_field_by_id_from_table('users', 'balance', 'ID', $data['ID']);
            $data['point'] = get_field_by_id_from_table('users', 'point', 'ID', $data['ID']);
            $data['role'] = get_field_by_id_from_table('user_roles', 'roleID', 'userID', $data['ID']);
            $data['user_id'] = $user_id;


            $data['agentInfo'] = $this->db->get_where('pins', array("user_id" => $data['ID']))->result();

            


            if($data['role'] != 4) {
                $this->session->set_flashdata('msg', "<div class='alert alert-danger' role='alert'>You don't have permission on that page..</div>");
                redirect("agent/general/dashboard/");
                die();
            }

            $data['sidebar_left'] = $this->load->view('front/client_area/sidebar-left', $data, true);
            $this->load->view('front/client_area/header', $data);

            $query = $this->db->get_where('users', array('ID'=>$data['ID']));
            $data['row'] = $query->row();


            $this->load->view('front/client_area/agent/pin_generate', $data);
            $this->load->view('front/client_area/footer', $data);
        }else{
            redirect("member_form/login/");
        }
		
	}

	public function pin_generat_action(){
				$ID = $this->session->userdata('user_id');
				$pinAmount = $this->input->post('amount',TRUE);
				$balance = get_field_by_id_from_table('users', 'balance', 'ID', $ID);
				$active_amount = get_field_by_id_from_table('global_settings', 'value', 'title','active_amount');
				//Amount Generate
				$totalAmount = $active_amount*$pinAmount;
				//Updated Data
				$UpdateBalance = $balance - $totalAmount;

				if ($balance >= $totalAmount) {
					$num_pins = $this->input->post('amount',TRUE);
	    			$usrID = $this->input->post('user_id',TRUE);


	    			//Balance Update
	            	$balanceData = array(
						        'balance' => $UpdateBalance,
						);
	            	$this->db->where('ID', $ID);
	            	$this->db->update('users', $balanceData);


	    			for($i = 1; $i <= $num_pins; $i++) {
		   
		            	//Pin Generate
		            	$pin = $this->generate();
			            $data = array(
			      			'user_id' => $usrID,
							'pin' => $pin,
						);
		            	$this->db->insert('pins', $data);

		            	//history_balance
		            	$hisBalance = array(
			      			'user_id' => $usrID,
							'amount' => $num_pins,
							'purpose'=>'Pin generate',
						);
		            	$this->db->insert('history_balance', $hisBalance);

	            	}
	            	$this->session->set_flashdata('msg', "<div class='alert alert-success' role='alert'>Create PIN Success</div>");
	            	redirect(site_url('agent/agent_pin/'));

				}else{
					$this->session->set_flashdata('msg', "<div class='alert alert-danger' role='alert'>Sorry! No Balance Available</div>");
	            	redirect(site_url('agent/agent_pin/'));					
				}

				
	}

	public function generate() 
	{
	    $len_pins = 15; 
	    $pins = random_string('alnum', $len_pins); 
	    return $pins;
	}





}