<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 $this->perPage = 10;
		 date_default_timezone_set('Asia/Kolkata');
	}

	public function login(){
		$data = array();
		if($this->input->post('btnLogin')){
			$this->form_validation->set_rules('username', 'Mobile/Email', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			$this->form_validation->set_error_delimiters('<p class="has-error"><label class="control-label">', '</label></p>');
			if($this->form_validation->run()){
				$username = htmlspecialchars(strip_tags($this->input->post('username')));
				$password = md5($this->input->post('password'));
				$userdata = $this->Common_Model->FetchData("users", "*", "(mobile = '".$username."' OR email = '".$username."') AND user_type = 1 AND password = '".$password."'");
				$this->db->close();
				if($userdata){
	                $user_details = $userdata[0];
	                if($user_details['user_status'] != 'Active'){
	                	$this->session->set_flashdata('error', 'Your account is not activated yet,contact to the administrator	.');
	                }else{
		                $this->session->set_userdata($user_details);			
		                redirect('dashboard');
	                }
				}else{
					$this->session->set_flashdata('error', 'The username/password combination is not correct, please try again !!');
				}
			}else{
				$this->session->set_flashdata("error", validation_errors());
			}
		}
		$data['pagetitle'] = '';
		$data['mainmenu'] = '';
		$data['submenu'] = '';
		$this->load->view('admin/vendor/login', $data);
	}


	public function registration(){
		$data = array();
		if($this->input->post('submitBtn')){
			//echo "<pre>";print_r($this->input->post());exit;
			$this->form_validation->set_rules('company_name', 'Company Name', 'trim|required');
			$this->form_validation->set_rules('owner_name', 'Owner Name', 'trim|required');
			$this->form_validation->set_rules('company_contact_no', 'Company Contact No', 'trim|required');
			$this->form_validation->set_rules('owner_contact_no', 'Owner Contact No', 'trim|required');
			$this->form_validation->set_rules('owner_email', 'Owner Email Id', 'trim|required');
			$this->form_validation->set_rules('GST_no', 'GST No', 'trim|required');
			$this->form_validation->set_rules('PAN_card_no', 'PAN Card No', 'trim|required');
			$this->form_validation->set_rules('aadhar_card_no', 'Aadhar Card No', 'trim|required');
			$this->form_validation->set_rules('year_of_establishment', 'Year Of Establishment', 'trim|required');
			$this->form_validation->set_rules('bank_name', 'Bank Name', 'trim|required');
			$this->form_validation->set_rules('account_name', 'Account Name', 'trim|required');
			$this->form_validation->set_rules('account_number', 'Account Number', 'trim|required');
			$this->form_validation->set_rules('IFSC_code', 'IFSC Code', 'trim|required');
			$this->form_validation->set_rules('country', 'Country', 'trim|required');
			$this->form_validation->set_rules('state', 'State', 'trim|required');
			$this->form_validation->set_rules('city', 'City', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			$this->form_validation->set_rules('con_password', 'Confirm Password', 'trim|required');
			$this->form_validation->set_error_delimiters('<p class="has-error"><label class="control-label">','</label></p>');
			if($this->form_validation->run()){

				/******** Duplicate Record Check ********/
				$mobile  = $this->input->post("owner_contact_no");
				$email   = $this->input->post("owner_email");
				$chk_mobile = $this->Common_Model->db_query("SELECT COUNT(1) as cnt FROM users WHERE mobile = '$mobile' and delete_status = 0");
				if($chk_mobile[0]['cnt']>0){
					$this->session->set_flashdata("error", 'Duplicate mobile no. exists !!! ');
					redirect($_SERVER['HTTP_REFERER']);
				}
				$chk_email = $this->Common_Model->db_query("SELECT COUNT(1) as cnt FROM users WHERE email = '$email' and delete_status = 0");
				if($chk_email[0]['cnt']>0){
					$this->session->set_flashdata("error", 'Duplicate email id exists !!! ');
					redirect($_SERVER['HTTP_REFERER']);
				}
				/******** Duplicate Record Check ********/
					// GST file upload //
			        if(!empty($_FILES['GST_no_file']['name'])){
		                $config['upload_path'] 	 = 'uploads/vendor/';
		                $config['allowed_types'] = 'pdf|jpg|jpeg|png';
		                $config['file_name'] 	 = 'GST_'.date("Ymd").'_'.time();
		                $config['max_size']      = '1024';
		                //Load upload library and initialize configuration
		                $this->load->library('upload',$config);
		                $this->upload->initialize($config);
		                
		                if($this->upload->do_upload('GST_no_file')){
		                    $uploadData = $this->upload->data();
		                    $GST_no_file = $uploadData['file_name'];
		                }else{
		                	//print_r($this->upload->display_errors());
		                    $GST_no_file = '';
		                }
		            }else{
		                $GST_no_file = '';
		            }
					// GST file upload //

					// Company PAN file upload //
			        if(!empty($_FILES['company_PAN_file']['name'])){
		                $config['upload_path'] 	 = 'uploads/vendor/';
		                $config['allowed_types'] = 'pdf|jpg|jpeg|png';
		                $config['file_name'] 	 = 'OWNER_PAN_'.date("Ymd").'_'.time();
		                $config['max_size']      = '1024';
		                //Load upload library and initialize configuration
		                $this->load->library('upload',$config);
		                $this->upload->initialize($config);
		                
		                if($this->upload->do_upload('company_PAN_file')){
		                    $uploadData = $this->upload->data();
		                    $company_PAN_file = $uploadData['file_name'];
		                }else{
		                	//print_r($this->upload->display_errors());
		                    $company_PAN_file = '';
		                }
		            }else{
		                $company_PAN_file = '';
		            }
					// Company PAN file upload //

					// Owner PAN file upload //
			        if(!empty($_FILES['owner_PAN_file']['name'])){
		                $config['upload_path'] 	 = 'uploads/vendor/';
		                $config['allowed_types'] = 'pdf|jpg|jpeg|png';
		                $config['file_name'] 	 = 'GST_'.date("Ymd").'_'.time();
		                $config['max_size']      = '1024';
		                //Load upload library and initialize configuration
		                $this->load->library('upload',$config);
		                $this->upload->initialize($config);
		                
		                if($this->upload->do_upload('owner_PAN_file')){
		                    $uploadData = $this->upload->data();
		                    $owner_PAN_file = $uploadData['file_name'];
		                }else{
		                	//print_r($this->upload->display_errors());
		                    $owner_PAN_file = '';
		                }
		            }else{
		                $owner_PAN_file = '';
		            }
					// Owner PAN file upload //

					// Aadhar Card file upload //
			        if(!empty($_FILES['aadhar_card_file']['name'])){
		                $config['upload_path'] 	 = 'uploads/vendor/';
		                $config['allowed_types'] = 'pdf|jpg|jpeg|png';
		                $config['file_name'] 	 = 'AADHAR_'.date("Ymd").'_'.time();
		                $config['max_size']      = '1024';
		                //Load upload library and initialize configuration
		                $this->load->library('upload',$config);
		                $this->upload->initialize($config);
		                
		                if($this->upload->do_upload('aadhar_card_file')){
		                    $uploadData = $this->upload->data();
		                    $aadhar_card_file = $uploadData['file_name'];
		                }else{
		                	//print_r($this->upload->display_errors());
		                    $aadhar_card_file = '';
		                }
		            }else{
		                $aadhar_card_file = '';
		            }
					// Aadhar Card file upload //
					$data_list = array(
						"fullname"			=> $this->input->post("owner_name"),
						"mobile"			=> $this->input->post("owner_contact_no"),
						"email"				=> $this->input->post("owner_email"),
						"password"			=> md5($this->input->post("password")),
						"user_type"			=> 1
					);
					$user_id = $this->Common_Model->dbinsertid("users", $data_list);

					$vendor_code =  'S'.$CI->Common_Model->getAbbreviation($this->input->post("company_name")).'0'.$user_id;

					$data_list = array(
						"user_id"				=> $user_id,
						"company_name"			=> $this->input->post("company_name"),
						"owner_name"			=> $this->input->post("owner_name"),
						"company_contact_no"	=> $this->input->post("company_contact_no"),
						"owner_contact_no"		=> $this->input->post("owner_contact_no"),
						"owner_email"			=> $this->input->post("owner_email"),
						"GST_no"				=> $this->input->post("GST_no"),
						"PAN_card_no"			=> $this->input->post("PAN_card_no"),
						"aadhar_card_no"		=> $this->input->post("aadhar_card_no"),
						"year_of_establishment"	=> $this->input->post("year_of_establishment"),
						"bank_name"			    => $this->input->post("bank_name"),
						"account_name"			=> $this->input->post("account_name"),
						"account_number"		=> $this->input->post("account_number"),
						"IFSC_code"			    => $this->input->post("IFSC_code"),
						"country"			    => $this->input->post("country"),
						"state"			        => $this->input->post("state"),
						"city"			        => $this->input->post("city"),
						"GST_no_file"			=> $GST_no_file,
						"company_PAN_file"		=> $company_PAN_file,
						"owner_PAN_file"		=> $owner_PAN_file,
						"aadhar_card_file"		=> $aadhar_card_file,
						"vendor_code"			=> $vendor_code,
					);
					$vendor_id = $this->Common_Model->dbinsertid("vendor_details", $data_list);
					
					$msg  = 'hello Roja';

                include_once (APPPATH.'phpmailer/PHPMailerAutoload.php');
                         $mail = new PHPmailer;
                         $mail->Host='smtp.gmail.com';
                         $mail->Port=465;
                         $mail->SMTPAuth=true;
                         $mail->SMTPSecure='tls';
                         $mail->Username='pandalima2015@gmail.com';
                         $mail->Password='8270679923';
                         
                         //$mail->setFrom($_POST['email'],$_POST['name']);
                         $mail->setFrom('pandalima2015@gmail.com');
                         $mail->addAddress('subhabishnu98@gmail.com','Rojalisa');
                         $mail->addReplyTo('pandalima2015@gmail.com');
                         $mail->isHTML(true);
                         $mail->CharSet = 'UTF-8';
                         $mail->Subject='RealyBest';
                         $mail->Body=$msg;
                        $mail->send();
					
					$this->session->set_flashdata('success', 'Record Added successfully.Please wait for the account activation.' );
					redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata("error", validation_errors());
			}
		}
		$this->load->view('vendor_registration', $data);
	}

	public function vendorlist(){
		is_logged_in();
		$data = array();
		$this->load->helper('url');
		$currentURL = current_url();
		$sql = "1 AND A.deleted_flag = 0";
		$queryvars = "";
		$sql.= " ORDER BY A.company_name ASC ";

		// $rows = $this->Common_Model->FetchRows("vendor_details A", "*", "$sql");
		// $data['page_num'] = $page_num = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
		// $this->load->library("Paginator");
		// $this->paginator->setparam(array("page_num" => $page_num, "num_rows" => $rows));
		// $this->paginator->set_Limit(10);
		// $range1 = $this->paginator->getRange1();
		// $range2 = $this->paginator->getRange2();
		// $sql .= " LIMIT ".$range1.', '.$range2;

		$records = $this->Common_Model->db_query("SELECT A.*,B.user_status FROM vendor_details A LEFT JOIN users B ON A.user_id = B.user_id WHERE ".$sql);

		//$paging_info = $this->paginator->DBPagingNav($queryvars, $currentURL);

		// $data['tot_page'] = $paging_info[0];
		// $data['sPages']   = $paging_info[1];
		//$data['rows']     = $rows;
		$data['records']  = $records;
		$data['mainmenu'] = 'user';
		$data['submenu'] = 'vendor';
		$this->load->view('admin/vendor/vendorlist', $data);
	}	

	public function vendordetails($user_id = 0){
		is_logged_in();
		$data = array();		
		$data['mainmenu'] = 'user';
		$data['submenu'] = 'vendor';
		$data['vendorData'] = $this->Common_Model->FetchData("vendor_details", "*", "user_id = '$user_id'");
		//echo "<pre>";print_r($data);exit;
		$this->load->view('admin/vendor/vendordetails', $data);
	}

	public function vendorActivation(){
		is_logged_in();
		$requestData = $this->input->post();
		$user_id     = $requestData['id'];
		$status      = $requestData['status'];
		$data_list = array(
			"user_status" => $status 
		);
		$res = $this->Common_Model->update_records("users", "user_id", $user_id,$data_list); 
		//echo "<pre>";print_r($res);exit;
		if($res){
			$vendorData = $this->Common_Model->FetchData("users", "*", "user_id = '$user_id'");
			if(empty($vendorData[0]['password'])){
				$pass = rand(1000,9999);
				$pass_data_list = array(
					"password" => md5($pass) 
				);
				$pass_res = $this->Common_Model->update_records("users", "user_id", $user_id,$pass_data_list);
				if($pass_res && $status == 'Active'){
					$mail_body="<html>
		                <head>
		                    <title> Account Activation </title>
		                    <style>
		                        .im {
		                        color:#4d4c4c!important;       
		                        }
		                    </style>
		                </head>
		                <body>
		               		<p>
		               			Dear ".$vendorData[0]['fullname'].", <br/>
		               			Your account has been activated successfully.You can login with your registared Mobile No./ Email Id and Password.
		               		</p>
		        		</body>
		    		</html>";
			    	sendmail('noreplay@shoppingbell.in', $vendorData[0]['email'] , 'Account Activation', $mail_body , array());
				}
			}
			echo json_encode(array('status'=>200,'msg'=>'Action taken successfully.'));
		}else{
			echo json_encode(array('status'=>400,'msg'=>'Something went wrong ! try later .'));
		}		
	}

	public function forgotpassword(){
		$data = array();
		//echo "<pre>";print_r($this->input->post());exit;
		if($this->input->post('btnSubmit')){
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_error_delimiters('<p class="has-error"><label class="control-label">', '</label></p>');
			if($this->form_validation->run()){
				$email = htmlspecialchars(strip_tags($this->input->post('email')));
				$userdata = $this->Common_Model->FetchData("users", "*", "(email = '".$email."') AND user_type = 1");
				$this->db->close();
				if($userdata){
	                $user_details = $userdata[0];
	                $this->session->set_userdata($user_details);			
	                redirect('vendor/createpassword');
				}else{
					$this->session->set_flashdata('error', 'Please enter your registered email id.');
				}
			}else{
				$this->session->set_flashdata("error", validation_errors());
			}
		}
		$data['pagetitle'] = '';
		$data['mainmenu'] = '';
		$data['submenu'] = '';
		$this->load->view('admin/vendor/forgotpassword', $data);
	}

	public function createpassword(){
		$data = array();
		//echo "<pre>";print_r($this->input->post());exit;
		if($this->input->post('btnSubmit')){
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			$this->form_validation->set_rules('conpassword', 'Confirm password', 'trim|required');
			$this->form_validation->set_error_delimiters('<p class="has-error"><label class="control-label">', '</label></p>');
			if($this->form_validation->run()){
				$password = htmlspecialchars(strip_tags($this->input->post('password')));
				$conpassword = htmlspecialchars(strip_tags($this->input->post('conpassword')));
				if($password == $conpassword){
					$user_id = $this->session->userdata('user_id');
					$data_list = array(
						"password" => md5($password)
					);
					$res = $this->Common_Model->update_records("users", "user_id", $user_id,$data_list); 
					if($res){
						$this->session->set_flashdata('success', 'Password changed successfully.' );
						$this->session->unset_userdata('user_details');
						redirect('vendor/login');
					}else{
						$this->session->set_flashdata('error', 'Something went wrong !!');
					}

				}else{
					$this->session->set_flashdata('error', 'Password does not same !!');
				}
			}else{
				$this->session->set_flashdata("error", validation_errors());
			}
		}
		$data['pagetitle'] = '';
		$data['mainmenu'] = '';
		$data['submenu'] = '';
		$this->load->view('admin/vendor/createpassword', $data);
	}

	public function profileupdate(){
		is_logged_in();
		$data = array();	
		$user_id = 	$this->session->userdata('user_id');

		if($this->input->post('updateBtn')){
			//echo "<pre>";print_r($_FILES);
			//echo "<pre>";print_r($this->input->post());exit;
			$this->form_validation->set_rules('company_name', 'Company Name', 'trim|required');
			$this->form_validation->set_rules('owner_name', 'Owner Name', 'trim|required');
			$this->form_validation->set_rules('company_contact_no', 'Company Contact No', 'trim|required');
			$this->form_validation->set_rules('owner_contact_no', 'Owner Contact No', 'trim|required');
			$this->form_validation->set_rules('owner_email', 'Owner Email Id', 'trim|required');
			$this->form_validation->set_rules('GST_no', 'GST No', 'trim|required');
			$this->form_validation->set_rules('PAN_card_no', 'PAN Card No', 'trim|required');
			$this->form_validation->set_rules('aadhar_card_no', 'Aadhar Card No', 'trim|required');
			$this->form_validation->set_rules('year_of_establishment', 'Year Of Establishment', 'trim|required');
			$this->form_validation->set_rules('bank_name', 'Bank Name', 'trim|required');
			$this->form_validation->set_rules('account_name', 'Account Name', 'trim|required');
			$this->form_validation->set_rules('account_number', 'Account Number', 'trim|required');
			$this->form_validation->set_rules('IFSC_code', 'IFSC Code', 'trim|required');
			$this->form_validation->set_rules('country', 'Country', 'trim|required');
			$this->form_validation->set_rules('state', 'State', 'trim|required');
			$this->form_validation->set_rules('city', 'City', 'trim|required');
			$this->form_validation->set_error_delimiters('<p class="has-error"><label class="control-label">','</label></p>');
			if($this->form_validation->run()){

				/******** Duplicate Record Check ********/
				$mobile  = $this->input->post("owner_contact_no");
				$email   = $this->input->post("owner_email");
				$chk_mobile = $this->Common_Model->db_query("SELECT COUNT(1) as cnt FROM users WHERE mobile = '$mobile' and delete_status = 0 and user_id != $user_id");
				if($chk_mobile[0]['cnt']>0){
					$this->session->set_flashdata("error", 'Duplicate mobile no. exists !!! ');
					redirect($_SERVER['HTTP_REFERER']);
				}
				$chk_email = $this->Common_Model->db_query("SELECT COUNT(1) as cnt FROM users WHERE email = '$email' and delete_status = 0 and user_id != $user_id");
				if($chk_email[0]['cnt']>0){
					$this->session->set_flashdata("error", 'Duplicate email id exists !!! ');
					redirect($_SERVER['HTTP_REFERER']);
				}
				/******** Duplicate Record Check ********/
					// GST file upload //
			        if(!empty($_FILES['GST_no_file']['name'])){
		                $config['upload_path'] 	 = 'uploads/vendor/';
		                $config['allowed_types'] = 'pdf|jpg|jpeg|png';
		                $config['file_name'] 	 = 'GST_'.date("Ymd").'_'.time();
		                $config['max_size']      = '1024';
		                //Load upload library and initialize configuration
		                $this->load->library('upload',$config);
		                $this->upload->initialize($config);
		                
		                if($this->upload->do_upload('GST_no_file')){
		                    $uploadData = $this->upload->data();
		                    $GST_no_file = $uploadData['file_name'];
		                }else{
		                	//print_r($this->upload->display_errors());
		                    $GST_no_file = '';
		                }
		            }else{
		                $GST_no_file = $this->input->post("old_GST_no_file");
		            }
					// GST file upload //

					// Company PAN file upload //
			        if(!empty($_FILES['company_PAN_file']['name'])){
		                $config['upload_path'] 	 = 'uploads/vendor/';
		                $config['allowed_types'] = 'pdf|jpg|jpeg|png';
		                $config['file_name'] 	 = 'COMPANY_PAN_'.date("Ymd").'_'.time();
		                $config['max_size']      = '1024';
		                //Load upload library and initialize configuration
		                $this->load->library('upload',$config);
		                $this->upload->initialize($config);
		                
		                if($this->upload->do_upload('company_PAN_file')){
		                    $uploadData = $this->upload->data();
		                    $company_PAN_file = $uploadData['file_name'];
		                }else{
		                	//print_r($this->upload->display_errors());
		                    $company_PAN_file = '';
		                }
		            }else{
		                $company_PAN_file = $this->input->post("old_company_PAN_file");
		            }
					// Company PAN file upload //

					// Company Image upload//
			        if(!empty($_FILES['company_image']['name'])){
		                $config['upload_path'] 	 = 'uploads/vendor/';
		                $config['allowed_types'] = 'jpg|jpeg|png';
		                $config['file_name'] 	 = 'COMPANY_IMG_'.date("Ymd").'_'.time();
		                $config['max_size']      = '1024';
		                //Load upload library and initialize configuration
		                $this->load->library('upload',$config);
		                $this->upload->initialize($config);
		                
		                if($this->upload->do_upload('company_image')){
		                    $uploadData = $this->upload->data();
		                    $company_image = $uploadData['file_name'];
		                }else{
		                	//print_r($this->upload->display_errors());
		                    $company_image = '';
		                }
		            }else{
		                $company_image = $this->input->post("old_company_image");
		            }
					// Company Image upload //

					// Owner PAN file upload //
			        if(!empty($_FILES['owner_PAN_file']['name'])){
		                $config['upload_path'] 	 = 'uploads/vendor/';
		                $config['allowed_types'] = 'pdf|jpg|jpeg|png';
		                $config['file_name'] 	 = 'OWNER_PAN_'.date("Ymd").'_'.time();
		                $config['max_size']      = '1024';
		                //Load upload library and initialize configuration
		                $this->load->library('upload',$config);
		                $this->upload->initialize($config);
		                
		                if($this->upload->do_upload('owner_PAN_file')){
		                    $uploadData = $this->upload->data();
		                    $owner_PAN_file = $uploadData['file_name'];
		                }else{
		                	//print_r($this->upload->display_errors());
		                    $owner_PAN_file = '';
		                }
		            }else{
		                $owner_PAN_file = $this->input->post("old_owner_PAN_file");
		            }
					// Owner PAN file upload //

					// Aadhar Card file upload //
			        if(!empty($_FILES['aadhar_card_file']['name'])){
		                $config['upload_path'] 	 = 'uploads/vendor/';
		                $config['allowed_types'] = 'pdf|jpg|jpeg|png';
		                $config['file_name'] 	 = 'AADHAR_'.date("Ymd").'_'.time();
		                $config['max_size']      = '1024';
		                //Load upload library and initialize configuration
		                $this->load->library('upload',$config);
		                $this->upload->initialize($config);
		                
		                if($this->upload->do_upload('aadhar_card_file')){
		                    $uploadData = $this->upload->data();
		                    $aadhar_card_file = $uploadData['file_name'];
		                }else{
		                	//print_r($this->upload->display_errors());
		                    $aadhar_card_file = '';
		                }
		            }else{
		                $aadhar_card_file = $this->input->post("old_aadhar_card_file");
		            }
					// Aadhar Card file upload //
					$data_list = array(
						"fullname"			=> $this->input->post("owner_name"),
						"mobile"			=> $this->input->post("owner_contact_no"),
						"email"				=> $this->input->post("owner_email")
					);
					$this->Common_Model->update_records("users","user_id",$user_id,$data_list);

					$data_list = array(
						"user_id"				=> $user_id,
						"company_name"			=> $this->input->post("company_name"),
						"owner_name"			=> $this->input->post("owner_name"),
						"company_contact_no"	=> $this->input->post("company_contact_no"),
						"owner_contact_no"		=> $this->input->post("owner_contact_no"),
						"owner_email"			=> $this->input->post("owner_email"),
						"GST_no"				=> $this->input->post("GST_no"),
						"PAN_card_no"			=> $this->input->post("PAN_card_no"),
						"aadhar_card_no"		=> $this->input->post("aadhar_card_no"),
						"year_of_establishment"	=> $this->input->post("year_of_establishment"),
						"bank_name"			    => $this->input->post("bank_name"),
						"account_name"			=> $this->input->post("account_name"),
						"account_number"		=> $this->input->post("account_number"),
						"IFSC_code"			    => $this->input->post("IFSC_code"),
						"country"			    => $this->input->post("country"),
						"state"			        => $this->input->post("state"),
						"city"			        => $this->input->post("city"),
						"GST_no_file"			=> $GST_no_file,
						"company_PAN_file"		=> $company_PAN_file,
						"owner_PAN_file"		=> $owner_PAN_file,
						"aadhar_card_file"		=> $aadhar_card_file,
						"company_image"			=> $company_image,
					);
					$this->Common_Model->update_records("vendor_details","user_id",$user_id,$data_list);
					$this->session->set_flashdata('success', 'Profile updated successfully.' );
					redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata("error", validation_errors());
			}
		}

		$data['mainmenu'] = 'user';
		$data['submenu'] = 'vendor';
		$data['vendorData'] = $this->Common_Model->FetchData("vendor_details", "*", "user_id = '$user_id'");
		//echo "<pre>";print_r($data);exit;
		$this->load->view('admin/vendor/vendorprofile', $data);
	}
	
	public function vregistration1(){
		$data = array();
		if($this->input->post('btnSubmit')){
			 $cntmob = mb_strlen($_POST['mob']);
			if($cntmob == 10){
				redirect('vendor/vregistration3');
			}else{
				redirect('vendor/vregistration1');
			}
			
		}

		$this->load->view('vregis1', $data);
	}

	public function vregistration2(){
		$data = array();
		$this->load->view('vregis2', $data);
	}

	public function vregistration3(){
		//echo 11;exit;
		$data = array();
		if($this->input->post('submitBtn')){
			//echo "<pre>";print_r($this->input->post());exit;
			$this->form_validation->set_rules('company_name', 'Company Name', 'trim|required');
			$this->form_validation->set_rules('owner_name', 'Owner Name', 'trim|required');
			$this->form_validation->set_rules('company_contact_no', 'Company Contact No', 'trim|required');
			$this->form_validation->set_error_delimiters('<p class="has-error"><label class="control-label">','</label></p>');
			if($this->form_validation->run()){
			//echo "<pre>";print_r($this->input->post());exit;
				/******** Duplicate Record Check ********/
				$mobile  = $this->input->post("owner_contact_no");
				$email   = $this->input->post("owner_email");
				$chk_mobile = $this->Common_Model->db_query("SELECT COUNT(1) as cnt FROM users WHERE mobile = '$mobile' and delete_status = 0");

				if($chk_mobile[0]['cnt']>0){
					$this->session->set_flashdata("error", 'Duplicate mobile no. exists !!! ');
					alert('Duplicate mobile no. exists !!!');
					redirect($_SERVER['HTTP_REFERER']);
				}
				$chk_email = $this->Common_Model->db_query("SELECT COUNT(1) as cnt FROM users WHERE email = '$email' and delete_status = 0");
				if($chk_email[0]['cnt']>0){
					$this->session->set_flashdata("error", 'Duplicate email id exists !!! ');
					alert('Duplicate mobile no. exists !!!');
					redirect($_SERVER['HTTP_REFERER']);
				}
				/******** Duplicate Record Check ********/

				//echo $this->input->post("company_name");exit;
					
					$data_list = array(
						"fullname"			=> $this->input->post("owner_name"),
						"mobile"			=> $this->input->post("owner_contact_no"),
						"email"				=> $this->input->post("owner_email"),
						"password"			=> md5($this->input->post("password")),
						"user_type"			=> 1,
						"user_status"       => 'Deactive'
					);
					//print_r($data_list);exit;
					$user_id = $this->Common_Model->dbinsertid("users", $data_list);

					$vendor_code =  'S'.$this->input->post("company_name").'0'.$user_id;
					//echo $vendor_code;exit;
					
					if(!empty($_FILES['company_image']['name'])){
		                $config['upload_path'] 	 = 'uploads/vendor/';
		                $config['allowed_types'] = 'jpg|jpeg|png';
		                $config['file_name'] 	 = 'COMPANY_IMG_'.date("Ymd").'_'.time();
		                $config['max_size']      = '1024';
		                //Load upload library and initialize configuration
		                $this->load->library('upload',$config);
		                $this->upload->initialize($config);
		                
		                if($this->upload->do_upload('company_image')){
		                    $uploadData = $this->upload->data();
		                    $company_image = $uploadData['file_name'];
		                }else{
		                	//print_r($this->upload->display_errors());
		                    $company_image = '';
		                }
		            }else{
		                $company_image = $this->input->post("old_company_image");
		            }

					$data_list = array(
						"user_id"				=> $user_id,
						"company_name"			=> $this->input->post("company_name"),
						"owner_name"			=> $this->input->post("owner_name"),
						"company_contact_no"	=> $this->input->post("company_contact_no"),
						"owner_contact_no"		=> $this->input->post("owner_contact_no"),
						"owner_email"			=> $this->input->post("owner_email"),
						"GST_no"				=> $this->input->post("GST_no"),
						"PAN_card_no"			=> $this->input->post("PAN_card_no"),
						//"aadhar_card_no"		=> $this->input->post("aadhar_card_no"),
						"year_of_establishment"	=> $this->input->post("year_of_establishment"),
						"bank_name"			    => $this->input->post("bank_name"),
						"account_name"			=> $this->input->post("account_name"),
						"account_number"		=> $this->input->post("account_number"),
						"IFSC_code"			    => $this->input->post("IFSC_code"),
						"country"			    => 'INDIA',
						"company_image"			=> $company_image,
						"city"			        => $this->input->post("city"),						
						"vendor_code"			=> $vendor_code,
						"catid"			        => $this->input->post("catid"),
						"own_store"			        => $this->input->post("own_store"),
						"nbusiness"			        => $this->input->post("nbusiness")
					);
					//print_r($data_list);exit;
					$vendor_id = $this->Common_Model->dbinsertid("vendor_details", $data_list);
					$this->session->set_flashdata('success', 'Registered successfully. Please wait for the account activation.');
					redirect('vendor/login');
			}else{
				$this->session->set_flashdata("error", validation_errors());
			}
		}
		$category = $this->Common_Model->FetchData('mstr_category',"*","deleted_status = 0 and parent_id > 0 and status = 1");
		$data['category_list']  = $category;
		$this->load->view('vregis3', $data);
	}
	
	public function communication(){
		$data = array();
		$user_id = 	$this->session->userdata('user_id');
		if($this->input->post('submitBtn')){
		    $data_list = array(
					"from_id"		    => $user_id,
					"to_id"		        => 1,
					"msg"			    => $this->input->post("msg"),
					"entry_dt_time"     => date('Y-d-m H:s:i')
				);

				$this->Common_Model->dbinsertid("communication", $data_list);
				$this->session->set_flashdata('success', 'Message Send successfully.' );
		}
		
		$sql = "1 AND status = 0 || from_id=$user_id || to_id =1 ";
		$records = $this->Common_Model->db_query("SELECT * FROM communication   WHERE ".$sql);
		$vendors = $this->Common_Model->db_query("SELECT * FROM vendor_details   WHERE 1");
		$data['records']  = $records;
		$data['vendors']  = $vendors;
		$data['mainmenu'] = 'masters';
		$data['submenu']  = 'communication';
		$this->load->view('admin/vendor/communication', $data);
	}
}
