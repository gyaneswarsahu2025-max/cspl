<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminlogin extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 $this->perPage = 10;
		// is_logged_in();
		date_default_timezone_set('Asia/Kolkata');
	}

	public function index()
	{
		$data = array();
		$this->load->view('admin/login', $data);
	}	

	public function change_password(){
		is_logged_in();
		$data = array();

		if($this->input->post('submitBtn')){
			
			//echo "<pre>";print_r($this->input->post());exit;
			$this->form_validation->set_rules('cur_password', 'Current password', 'trim|required');
			$this->form_validation->set_rules('password', 'New password', 'trim|required');
			$this->form_validation->set_rules('con_password', 'Confirm password', 'trim|required');
			$this->form_validation->set_error_delimiters('<p class="has-error"><label class="control-label">','</label></p>');

			if($this->form_validation->run()){

				$cur_password  = $this->input->post("cur_password");
				$password = $this->input->post("password");
				$con_password = $this->input->post("con_password");
				$user_id = $this->session->userdata("user_id");

				$data_list = array(
					"password"	=> md5($this->input->post("password"))
				);

				$this->Common_Model->update_records("users", "user_id", $user_id, $data_list);
				$this->session->set_flashdata('success', 'Password changed successfully.' );
				redirect($_SERVER['HTTP_REFERER']);

			}else{
				$this->session->set_flashdata("error", validation_errors());
			}
		}

		$data['mainmenu'] = 'change_password';
		$data['submenu'] = 'change_password';
		$this->load->view('admin/changepassword', $data);
	}

	public function logout(){
		if($this->session->userdata('user_type') == 1){
		   $this->session->sess_destroy();
		   redirect ('vendor/login');  
        }else{
        	$this->session->sess_destroy();
            redirect ('adminlogin');
        } 
	}
	
	public function login()
	{
		$data = array();
		if($this->input->post('btnLogin')){
			$username = htmlspecialchars(strip_tags($this->input->post('username')));
			$password = md5($this->input->post('password'));
			$userdata = $this->Common_Model->FetchData("users", "*", "(mobile = '".$username."' OR email = '".$username."') AND password = '".$password."'");
			$this->db->close();
			if($userdata){
                $user_details = $userdata[0];
                $this->session->set_userdata($user_details);			
                redirect('dashboard');
			}else{
				$this->session->set_flashdata('error', 'The username/password combination is not correct, please try again !!');
			}
		}
		$data['pagetitle'] = '';
		$data['mainmenu'] = '';
		$data['submenu'] = '';
		$this->load->view('login', $data);
	}	

	public function message(){
		$data = array();
		//$records = $this->Common_Model->db_query("SELECT * FROM t_messages WHERE deleted_flag = 0 AND `to`=0 group by `from` ORDER BY created_on DESC");
		$records = $this->Common_Model->db_query("SELECT * FROM t_messages a WHERE deleted_flag = 0 AND `to`=0 AND id = (SELECT MAX(id) FROM t_messages WHERE a.`from` = `from`)");
		$data['records']  = $records;
		$data['mainmenu'] = 'support';
		$data['submenu'] = 'support'; 
		$this->load->view('admin/message', $data);
	}

	public function messagehistory($id){
		$data = array();
		$records = $this->Common_Model->db_query("SELECT * FROM t_messages WHERE deleted_flag = 0 AND (`to` = $id OR `from` = $id)  ORDER BY created_on ASC");
		$data['records']  = $records;
		$data['id']  = $id;
		$data['mainmenu'] = 'support';
		$data['submenu'] = 'support';
		$this->load->view('admin/messagehistory', $data);
	}
	
	public function policy(){
		$data = array();
		
		if($this->input->post('submitBtn')){
			$this->form_validation->set_rules('privacy_policy', 'Privacy Policy', 'trim|required');
			if($this->form_validation->run()){
			    $data_list = array(
					"description"		=> $this->input->post("privacy_policy")
				);
				$chk = $this->Common_Model->db_query("SELECT COUNT(id) as cnt FROM `privacy_policy` WHERE 1");
				
				if($chk[0]['cnt'] == 1){
				    $this->session->set_flashdata('error', 'Already Added !!');
				}else{
				    $this->Common_Model->dbinsertid("privacy_policy", $data_list);
		            $this->session->set_flashdata('success', 'Record Added successfully.');
				}
			
			}else{
				$this->session->set_flashdata("error", validation_errors());
			}
		}
		
		$records = $this->Common_Model->db_query("SELECT * FROM privacy_policy WHERE 1");
		$data['records']  = $records;
		$data['mainmenu'] = 'policy';
		$data['submenu'] = 'policy'; 
		$this->load->view('admin/policy', $data);
	}
	
	public function terms(){
		$data = array();
		
		if($this->input->post('submitBtn')){
			$this->form_validation->set_rules('terms', 'Terms & Conditions', 'trim|required');
			if($this->form_validation->run()){
			    $data_list = array(
					"description"		=> $this->input->post("terms")
				);
				$chk = $this->Common_Model->db_query("SELECT COUNT(id) as cnt FROM `term_conditions` WHERE 1");
				
				if($chk[0]['cnt'] == 1){
				    $this->session->set_flashdata('error', 'Already Added !!');
				}else{
				    $this->Common_Model->dbinsertid("term_conditions", $data_list);
		            $this->session->set_flashdata('success', 'Record Added successfully.');
				}
			
			}else{
				$this->session->set_flashdata("error", validation_errors());
			}
		}
		
		$records = $this->Common_Model->db_query("SELECT * FROM term_conditions WHERE 1");
		$data['records']  = $records;
		$data['mainmenu'] = 'terms';
		$data['submenu'] = 'terms'; 
		$this->load->view('admin/terms_condition', $data);
	}
	
	function deleteterms($id = 0){
		$data_list = array(
			"deleted_flag"	=> 1
		);
		$this->Common_Model->DelData("term_conditions", "id = ".$id);
		redirect("adminlogin/terms");
	}
	
	function deletepolicy($id = 0){
		$data_list = array(
			"deleted_flag"		=> 1
		);
		$this->Common_Model->DelData("privacy_policy", "id = ".$id);
		redirect("adminlogin/policy");
	}
}
