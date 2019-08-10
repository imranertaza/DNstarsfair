<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class balance_history extends CI_Controller {

    private $login_status;

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('users/user_login');
        $this->load->model('functions');
        $this->load->helper('settings_functions_helper');

        if ($this->session->userdata('logged_in') == true) {
            $this->login_status = true;
        }else {
            $this->login_status = false;
        }
    }

//	public function index(){
//	    redirect("member/general/dashboard/");
//    }





    public function index()
    {


        if ($this->login_status == true) {
            $this->load->helper('settings_functions_helper');
            $this->load->model('functions');

            $this->load->helper('url');
            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            if ($this->functions->hasPermission('download_list') == true) {

                //user list
                $this->db->select("*");
                $data['records'] = $this->db->get_where("users", array("type" => 2))->result();

                $this->load->view('admin/request/agent_balance_list', $data);
            } else {
                $this->load->view('admin/no_permission');
            }
            $this->load->view('admin/footer');

        } else {
            $this->load->helper('url');
            $this->load->library('form_validation');
            $this->load->view('admin/login');
        }
    }



    public function balance_update_action(){
        $username = $this->input->post('username');
        $balance = $this->input->post('balance');


        //Update Balance
        $statusData = array(
            'OP_game_balance' => $balance
        );
        $this->db->where('username', $username);
        $this->db->update('users', $statusData);

        redirect("admin_ut/balance_history/");
    }








}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */