<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->perPage = 10;
		is_logged_in();
		date_default_timezone_set('Asia/Kolkata');
	}
 
	public function index2(){

		$data = array();
		$users = $this->Common_Model->FetchData('users','*',"user_type = 2 ORDER BY custom_user_id DESC");

		$data['users_list']  = $users;

		// echo "<pre>";print_r($users);exit;
 
		$this->load->view('admin/users/users_list', $data);
	}	



 



	public function enable_user($user_id=0){
		 
	
			$delete ="UPDATE users SET delete_status ='0' WHERE user_id = '$user_id'" ;
			$status ="UPDATE users SET user_status ='Active' WHERE user_id = '$user_id'" ;

            $this->Common_Model->db_query($delete);

            $this->Common_Model->db_query($status);


	  	  redirect("Users/index");
	}





	public function disable_user($user_id=0){
			$delete ="UPDATE users SET delete_status = '1',user_status ='Deactive' WHERE user_id = '$user_id'" ;

    $this->Common_Model->db_query($delete);

	   redirect("Users/index");
	}


	public function view_profile ($user_id)
	{
	    // Fetch user
	    $user = $this->Common_Model->FetchData(
	        'users',
	        '*',
	        "user_type = 2 AND  user_id = '$user_id'"
	    );


	    $data['balance'] = $this->Common_Model->db_query("SELECT * FROM users WHERE user_id =  '$user_id'  "); 
	    // echo '<pre>'; print_r(   $data['balance']) ;exit();
  
	    
	    $data['user_id']=$user_id;
	    $data['user'] = $user[0];  
	    $this->load->view('admin/users/view_user', $data);
	}


	public function user_level() {
    $level = $this->input->post('level');
    $count = $this->input->post('count');
    $user_id = $this->input->post('user_id');

    $datalist = array(
        'user_id' => $user_id,
        'user_lvl' => $level,
        'checked' => $count
    );

    $users_lvl = $this->Common_Model->FetchData('users_lvl', '*', "user_id='$user_id' AND user_lvl='$level'");

    if ($users_lvl) {
        $this->Common_Model->update_records('users_lvl', 'id', $users_lvl[0]['id'], $datalist);
        $id = 1;
    } else {
        $id = $this->Common_Model->dbinsertid('users_lvl', $datalist);
    }

    echo $id ? "Success" : "Failed";
}

	function logout(){
		$this->session->sess_destroy();
		redirect("dashboard");
	}
	




public function add_wallet() {
   //print_r($_POST);exit;
    
    $user_id = $this->input->post('user_id');
   
    
//     // Validate user_id exists
//     if (empty($user_id) || !is_numeric($user_id)) {
//         $this->session->set_flashdata('error', 'Invalid user ID provided.');
//       redirect('users/view_profile/' . $user_id);
//  // Redirect to appropriate page
//         return;
//     }
    
    if ($this->input->post('submitBtn')) {
        $this->form_validation->set_rules('wallet_bal', 'Wallet Balance', 'trim|required|numeric');
        $this->form_validation->set_rules('shopping_bal', 'Shopping Balance', 'trim|required|numeric');
        $this->form_validation->set_rules('bank_bal', 'Bank Balance', 'trim|required|numeric');
        
        
        if ($this->form_validation->run()) {
            
            $data_list = array(

                "wallet_balance" => $this->input->post("wallet_bal"),
                "shopping_balance" => $this->input->post("shopping_bal"),
                    "bank_balance" => $this->input->post("bank_bal"),
                 
            );
            

        $this->Common_Model->update_records("users" , 'user_id' , $user_id,$data_list) ;


                
            $this->session->set_flashdata('success', 'Wallet Balance Updated Successfully.');
            
            
            // Redirect to prevent form resubmission
 
        } else {
            // Validation failed
            $this->session->set_flashdata('error', validation_errors());
        }
    }
    
    
    // Load view with user_id data
    $data['user_id'] = $user_id;
    
    
    
    // Get wallet info from DB
    $wallet = $this->Common_Model->FetchData('users', '*', "user_id='$user_id'  ");

    $data['wallet'] = !empty($wallet) ? $wallet[0] : null;










    // // Optional: Load user details for display
    // $data['user_details'] = $this->Common_Model->db_query("SELECT * FROM users WHERE user_id = ? AND delete_status = 0", array($user_id));
    
redirect($_SERVER['HTTP_REFERER']);
}





public function edit_details() {
    $user_id = $this->input->post('user_id') ?? $this->input->get('user_id');

    if ($this->input->post('submitBtn')) {
        // Collect posted data
        $data_list = [
            "fullname"       => $this->input->post("fullname"),
            "mobile"         => $this->input->post("mobile"),
            "email"          => $this->input->post("email"),
            "pincode"        => $this->input->post("pincode"),
            "address"        => $this->input->post("address"),
            "custstate"      => $this->input->post("custstate"),
            "custdistrict"   => $this->input->post("custdistrict"),
            "custcity"       => $this->input->post("custcity"),
            "pan_card_no"    => $this->input->post("pan_card_no"),
            "aadhar_card_no" => $this->input->post("aadhar_card_no"),
            "bank_name"      => $this->input->post("bank_name"),
            "bank_ac_no"     => $this->input->post("bank_ac_no"),
            "ifsc"           => $this->input->post("ifsc"),
        ];

        // Update record
        $this->Common_Model->update_records("users", 'user_id', $user_id, $data_list);

        $this->session->set_flashdata('success', 'Details updated successfully.');
        redirect($_SERVER['HTTP_REFERER']);
    }

    // GET request — load form with current data
    $user_info = $this->Common_Model->FetchData('users', '*', "user_id='$user_id'");
    $data['user'] = !empty($user_info) ? $user_info[0] : [];
    $data['user_id'] = $user_id;


redirect($_SERVER['HTTP_REFERER']);

     
}


// public function user_tree($user_id = null) {
//     if (empty($user_id)) {
//         show_error("No user selected", 400);
//         return;
//     }

//     // Fetch all users
//     $users = $this->Common_Model->FetchData('users');

//     // Find the selected user (root)
//     $rootUser = null;
//     foreach ($users as $user) {
//         if ($user['user_id'] == $user_id) {
//             $rootUser = $user;
//             break;
//         }
//     }

//     if (!$rootUser) {
//         show_error("User not found", 404);
//         return;
//     }

//     // Get the custom_user_id to build downline
//     $custom_user_id = $rootUser['custom_user_id'];

//     // Build tree starting from that custom_user_id
//     $tree = $this->buildUserTree($users, $custom_user_id);

//     // Assign children to root
//     $rootUser['children'] = $tree;

//     // Pass root + children
//     $data['tree'] = [$rootUser];

//     // Load view
//     $this->load->view('admin/users/view_user', $data);
// }






	// function logout(){
	// 	$this->session->sess_destroy();
	// 	redirect("dashboard");
	// }
	
		
}
