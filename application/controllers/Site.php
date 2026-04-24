<?php


defined('BASEPATH') OR exit('No direct script access allowed');
 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Site extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 $this->perPage = 10;
		date_default_timezone_set('Asia/Kolkata');
		$this->category = $this->Common_Model->FetchData('mstr_category',"*","deleted_status = 0 and parent_id = 0 and status = 1");
 

	}

	public function index(){

		$data = array();
		$recent_products = $this->Common_Model->db_query("SELECT A.*,B.company_name FROM t_product A LEFT JOIN vendor_details B ON A.vendor_id = B.user_id WHERE A.deleted_flag = 0 and A.recently_added = 1 order by A.product_id desc");
		$data['recent_products']  = $recent_products;

	
		$category = $this->Common_Model->FetchData('mstr_category',"*","deleted_status = 0  and status = 1");
		$data['category_list']  = $category;
		
	 


$data['categories'] = $this->Common_Model->FetchData(
    'mstr_category',
    "*",
    "deleted_status = 0 AND status = 1 AND parent_id = 0  "
);


 


 












$products['products'] = $this->Common_Model->db_query( "SELECT 
        *, 
        ROUND(((tp.actual_price - tp.product_price) / tp.actual_price) * 100) AS discount_percentage 
    FROM 
        t_product tp 
    WHERE 
            tp.deleted_flag = 0 
    ORDER BY 
        tp.product_id DESC"
     
);

$data['products_list'] = $products;




// Banner List
$banner = $this->Common_Model->FetchData(
    'mstr_banner',
    "*",
    "deleted_status = 0 AND banner_status = 1",
    "banner_order ASC"
);
$data['banner_list'] = $banner;
   // echo "<pre>";print_r( $data['banner_list']);exit;	    





$products['products'] = $this->Common_Model->db_query( "SELECT 
        *, 
        ROUND(((tp.actual_price - tp.product_price) / tp.actual_price) * 100) AS discount_percentage 
    FROM 
        t_product tp 
    WHERE 
            tp.deleted_flag = 0 
    ORDER BY 
        tp.product_id DESC"
     
);

 
 
$data['products_cat'] = $this->Common_Model->db_query("
SELECT 
    tp.*, 
    b.brand_name,
    c.category_name,
    c.category_subname,
    ROUND(
        IF(tp.actual_price > 0,
           ((tp.actual_price - tp.product_price) / tp.actual_price) * 100,
           0
        )
    ) AS discount_percentage
FROM t_product AS tp
LEFT JOIN m_brand AS b ON tp.brand_id = b.brand_id
LEFT JOIN mstr_category AS c ON tp.category_id = c.category_id
");
		    
	 // echo "<pre>";print_r($products['products']);exit;		    
		    
		    
		    
		    
		    
		    
		    
		    
		    
		    
		    
		    
		    
 

 
		    
	    
		    
		    
 // 1. Fetch all main categories
    $this->db->where('parent_id', 0);
    $this->db->where('category_status', 1);
    $this->db->where('deleted_status', 0);
    $categories = $this->db->get('mstr_category')->result_array();

    $final_data = [];

    foreach ($categories as $cat) {

        $category_id = $cat['category_id'];

        // 2. Fetch all subcategories of this main category
        $this->db->where('parent_id', $category_id);
        $this->db->where('category_status', 1);
        $this->db->where('deleted_status', 0);
        $subcats = $this->db->get('mstr_category')->result_array();

        // collect all ids → parent + subcategories
        $category_ids = [$category_id];

        foreach ($subcats as $sc) {
            $category_ids[] = $sc['category_id'];
        }

        // 3. Fetch products from category + subcategory
        $this->db->where_in('category_id', $category_ids);
        $this->db->where('deleted_flag', 0);
        $this->db->order_by('product_id', 'DESC');
        $products = $this->db->get('t_product')->result_array();

        // 4. Merge category + products
        $final_data[] = [
            'category_id'   => $category_id,
            'category_name' => $cat['category_name'],
            'category_image' => $cat['category_image'],
            'products'      => $products
        ];
          if (!empty($p['actual_price']) && $p['actual_price'] > $p['product_price']) {
        $discount = round((($p['actual_price'] - $p['product_price']) / $p['actual_price']) * 100);
    } else {
        $discount = 0;
    }

    $p['discount_percentage'] = $discount;  // ADD THIS
    $final_products[] = $p;
    }

    $data['category_products'] = $final_data;

		    
 // echo "<pre>";print_r( $data['category_products']);exit;	    
		    
		    
		    
		    
		    
		//echo "<pre>";print_r($category_wise_data);exit;
		$this->load->view('index', $data);
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
				$userdata = $this->Common_Model->FetchData("users", "*", "(mobile = '".$username."' OR email = '".$username."') AND user_type = 2 AND user_status='Active' AND password = '".$password."'");
				$this->db->close();
				if($userdata){
	                $user_details = array (
									   'usertype'   	=> 2,
									   'fullname'   	=> $userdata[0]['fullname'],
									   'email'      	=> $userdata[0]['email'],
									   'mobile'     	=> $userdata[0]['mobile'],
									   'user_id'  		=> $userdata[0]['user_id'],
									   
									'custom_user_id'  	=> $userdata[0]['custom_user_id'],
									   
									   'is_loggedin'	=> true,
									   
									   );

	    		
				$this->session->set_userdata($user_details);
				if(!empty($_SESSION['bill_id'])){
				   redirect('site/cart');
				}else{
				   redirect('site/view_profile'); 
				}
				}else{
					$this->session->set_flashdata('error', 'Wrong mobile no/email id/password !');
				}
			}else{
				$this->session->set_flashdata("error", validation_errors());
			}
		}else{
			//$this->session->sess_destroy();
		}
		$this->load->view('login', $data);
	}

// STEP 1: Show the first form
    public function register_form() {

        $this->load->view('register');
    }

public function view_profile() {
    $data = array();

    // Get user ID from session
    $u_id = $this->session->userdata('custom_user_id');

    // Fetch user data
    $users = $this->Common_Model->FetchData('users', '*', "custom_user_id = '$u_id'");
   $sql = "SELECT ul.*
        FROM users_lvl ul
        JOIN users u ON u.user_id = ul.user_id
        WHERE u.custom_user_id = '$u_id'
        ORDER BY ul.user_lvl ASC";

$levels = $this->Common_Model->db_query($sql);
// echo '<pre>';
// print_r($levels);
// exit;
$data['levels'] = is_array($levels) ? $levels : [];

    // If user found, store first result in $data['profile']
    $data['profile'] = !empty($users) ? $users[0] : [];

    // Load the view
    $this->load->view('view_profile', $data);
}


public function profile() {
    $data = array();
 

    // Get user ID from session
    $u_id = $this->session->userdata('custom_user_id');

    // Check if user ID is available
    if (empty($u_id)) {
        show_error("User not logged in or session expired.", 403);
        return;
    }

    // Fetch user data
    $users = $this->Common_Model->FetchData('users', '*', "custom_user_id = '$u_id'");

    // Mask specific fields if data is not empty
    if (!empty($users)) {
        foreach ($users as &$user) {
            if (!empty($user['mobile'])) {
                $user['mobile'] = mask_number($user['mobile']);
            }

            if (!empty($user['aadhar_card_no'])) {
                $user['aadhar_card_no'] = mask_number($user['aadhar_card_no']);
            }

            if (!empty($user['bank_ac_no'])) {
                $user['bank_ac_no'] = mask_number($user['bank_ac_no']);
            }
            
             if (!empty($user['pan_card_no'])) {
                $user['pan_card_no'] = mask_number($user['pan_card_no']);
            }
        }
        unset($user); // unset reference
    }

    // Store the first user's profile or empty array
    $data['profile'] = !empty($users) ? $users[0] : [];

    // Load the view
    $this->load->view('profile', $data);
}











public function cheque() {
    $data = array();

    // Get user ID from session
    $u_id = $this->session->userdata('custom_user_id');

    // Get wallet info from DB using the correct variable
    $wallet = $this->Common_Model->FetchData('users', '*', "custom_user_id='$u_id'");

    $data['wallet'] = !empty($wallet) ? $wallet[0] : null;

    // Debug print correctly
    // echo '<pre>'; print_r($data['wallet']); exit();

    // This line will not be reached because of exit(), move it if needed
    $this->load->view('cheque', $data);
}


 public function levels() {
    $data = array();

    // Get user ID from session
      $u_id = $this->session->userdata('custom_user_id');

    if ($user_id) {
        // Build condition string
        $cond = "user_id = {$user_id} AND user_status = 1";

        // Fetch data
        $data['profile'] = $this->Common_Model->FetchData('users', '*', $cond);

        $this->load->view('levels', $data);
    } else {
        redirect('login');
    }
}




	public function register(){
	$data = array();
	// if($this->session->userdata('u_id')){
	// 	redirect('site/verify_kyc');
	// }

	if ($this->input->post('submitBtn')) {


		$this->form_validation->set_rules('fullname', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Id', 'trim|required');
		$this->form_validation->set_rules('mobile', 'Mobile No', 'trim|required');
		$this->form_validation->set_rules('pincode', 'Pincode', 'trim|required');
		$this->form_validation->set_rules('custstate', 'State', 'trim|required');
		$this->form_validation->set_rules('custdistrict', 'District', 'trim|required');
		$this->form_validation->set_rules('custcity', 'City', 'trim|required');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
		$this->form_validation->set_error_delimiters('<p class="has-error"><label class="control-label">','</label></p>');

		if ($this->form_validation->run()) {
            $parent_id = $this->session->userdata('custom_user_id') ?? 0;
			$mobile  = $this->input->post("mobile");
			$email   = $this->input->post("email");
			$pincode   = $this->input->post("pincode");
			$custstate = $this->input->post("custstate");
			$custdistrict   = $this->input->post("custdistrict");
			$custcity  = $this->input->post("custcity");
		    $address   = $this->input->post("address");

	// echo '<pre>';
	// print_r($this->session->userdata());
	// echo '</pre>';
	// exit()
			$chk_mobile = $this->Common_Model->db_query("SELECT COUNT(1) as cnt FROM users WHERE mobile = '$mobile' AND delete_status = 0 AND custom_user_id IS NOT NULL");
			if ($chk_mobile[0]['cnt'] > 0) {
				$this->session->set_flashdata("error", 'Duplicate mobile no. exists !!! ');
				redirect($_SERVER['HTTP_REFERER']);
			}

			$chk_email = $this->Common_Model->db_query("SELECT COUNT(1) as cnt FROM users WHERE email = '$email' AND delete_status = 0 AND custom_user_id IS NOT NULL");
			if ($chk_email[0]['cnt'] > 0) {
				$this->session->set_flashdata("error", 'Duplicate email id exists !!! ');
				redirect($_SERVER['HTTP_REFERER']);
			}

			$data_list = array(
				"fullname"	=> $this->input->post("fullname"),
				"mobile"	=> $mobile,
				"email"		=> $email,
			 	"custstate"		=> $custstate,
				"pincode"		=> $pincode,
				"custdistrict"	=> $custdistrict,
				"email"		=> $email,
				"custcity"	=> $custcity,
				"address"		=> $address,

 				"user_type"	=> 2,
		 
				'parent_id' => $parent_id, 

			);

			// ✅ Correct user ID capture
			$insert_id = $this->Common_Model->dbinsertid("users", $data_list);
			$res = $this->Common_Model->db_query("SELECT * FROM users WHERE user_id = $insert_id AND delete_status = 0");

			// Send OTP SMS
			// @file_get_contents('http://sms.mydigitaltelemarketing.com/vb/apikey.php?apikey=y3f8BHxNWL7SdJO6&senderid=REALYB&templateid=1507166254294770845&number='.$res[0]['mobile'].'&message=Your%20Verification%20OTP%20is%20'.$res[0]['otp'].'.%20Validity%20for%2020%20minutes.%20Please%20don%27t%20share%20this%20OTP%20with%20any%20one.%20Regards,%20Realybest.com');
if ($insert_id) {
	$this->session->set_flashdata('success', 'You have registered successfully.');
 
} else {   


	$this->session->set_flashdata('error', 'You have registered successfully.');

  }
			

			// ✅ Pass user_id to the verify_kyc view
			$data['user_id'] = $insert_id;
			$this->session->set_userdata('u_id',$insert_id);
			redirect('site/verify_kyc');
		}
	}

	$this->load->view('register'); // fallback if not submitted or failed
}









public function banner_list()
{
    $data = array();

    // Fetch Active + Not Deleted Banners
    $data['banner_list'] = $this->Common_Model->FetchData(
        'mstr_banner',
        '*',
        "deleted_status = 0 AND banner_status = 1",
        "banner_order ASC"
    );

    // Load Banner Page View
    $this->load->view('index', $data);
}









public function verify_kyc() {
	$data = array();

	$u_id = $this->session->userdata('u_id');

	if ($this->input->post('submitBtn')) {

	$this->form_validation->set_rules(
    'aadhar_card_no',
    'Aadhar Card',
    'trim|required|regex_match[/^[0-9]{12}$/]',
    array(
        'required'    => 'Aadhar Card number is required',
        'regex_match' => 'Aadhar Card number must be exactly 12 digits'
    )
);

// PAN: 5 letters, 4 digits, 1 letter (e.g., ABCDE1234F)
$this->form_validation->set_rules(
    'pan_card_no',
    'PAN Card',
    'trim|required|regex_match[/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/]',
    array(
        'required'    => 'PAN Card number is required',
        'regex_match' => 'PAN Card number format is invalid'
    )
);
		$this->form_validation->set_error_delimiters('<p class="has-error"><label class="control-label">','</label></p>');

		if ($this->form_validation->run()) {


 
			$aadhar_card_no = $this->input->post("aadhar_card_no");
			$pan_card_no    = $this->input->post("pan_card_no");

			// Duplicate Aadhar check excluding current user
$chk_aadhar = $this->Common_Model->db_query("
    SELECT COUNT(1) as cnt 
    FROM users 
    WHERE aadhar_card_no = '$aadhar_card_no' 
    AND user_id != '$u_id' 
    AND delete_status = 0
");

if ($chk_aadhar[0]['cnt'] > 0) {
    $this->session->set_flashdata("error", 'Duplicate Aadhar number exists!');
    redirect('Site/verify_kyc');
}

// Duplicate PAN check excluding current user
$chk_pan = $this->Common_Model->db_query("
    SELECT COUNT(1) as cnt 
    FROM users 
    WHERE pan_card_no = '$pan_card_no' 
    AND user_id != $u_id 
    AND delete_status = 0
");

if ($chk_pan[0]['cnt'] > 0) {
    $this->session->set_flashdata("error", 'Duplicate PAN number exists!');
    redirect('Site/verify_kyc');
}


			// Update existing user
			$data_list = array(
				"aadhar_card_no" => $aadhar_card_no,
				"pan_card_no"    => $pan_card_no
			);
			
			

			$this->Common_Model->update_records("users","user_id",$u_id, $data_list);

			$this->session->set_flashdata('success', 'You have verified KYC successfully.');

			// ✅ Pass user_id back to the view
			redirect('site/verify_bank');
			
		} else {
			// Validation failed: repopulate user_id
			$this->session->set_flashdata("error", validation_errors());
			redirect('site/verify_kyc');
			
		}
	}


	$this->load->view('verify_kyc', $data);
}


public function verify_bank() {
	$data = array();
	if ($this->input->post('submitBtn')) {
// Bank Name: Letters, spaces, and dots only
$this->form_validation->set_rules(
    'bank_name',
    'Bank Name',
    'trim|required|regex_match[/^[A-Za-z\s\.]+$/]',
    array(
        'required'    => 'Bank Name is required',
        'regex_match' => 'Bank Name can only contain letters, spaces, and dots'
    )
);

// Bank Account Number: 9 to 18 digits
$this->form_validation->set_rules(
    'bank_ac_no',
    'A/C Number',
    'trim|required|regex_match[/^[0-9]{9,18}$/]',
    array(
        'required'    => 'Account Number is required',
        'regex_match' => 'Account Number must be between 9 and 18 digits'
    )
);

// IFSC Code: 4 letters + 0 + 6 digits (e.g., SBIN0001234)
$this->form_validation->set_rules(
    'ifsc',
    'IFSC Code',
    'trim|required|regex_match[/^[A-Z]{4}0[A-Z0-9]{6}$/]',
    array(
        'required'    => 'IFSC Code is required',
        'regex_match' => 'Invalid IFSC Code format'
    )
);

		$this->form_validation->set_error_delimiters('<p class="has-error"><label class="control-label">','</label></p>');

		if ($this->form_validation->run()) {
			$user_id = $this->session->userdata('u_id');
			$bank_name = $this->input->post("bank_name");
			$bank_ac_no    = $this->input->post("bank_ac_no");
			$ifsc    = $this->input->post("ifsc");

			// Duplicate check excluding current user
			$chk_aadhar = $this->Common_Model->db_query("SELECT COUNT(1) as cnt FROM users WHERE aadhar_card_no = '$bank_name' AND user_id != $user_id AND delete_status = 0");

			if ($chk_aadhar[0]['cnt'] > 0) {
				$this->session->set_flashdata("error", 'Duplicate Aadhar number exists!');
				redirect('Site/register');
			}

			$chk_pan = $this->Common_Model->db_query("SELECT COUNT(1) as cnt FROM users WHERE bank_ac_no = '$bank_ac_no' AND user_id != $user_id AND delete_status = 0");
			if ($chk_pan[0]['cnt'] > 0) {
				$this->session->set_flashdata("error", 'Duplicate A/C number exists!');
				redirect('Site/verify_bank');
			}

			// Update existing user
			$data_list = array(
				"bank_name" => $bank_name,
				"bank_ac_no"    => $bank_ac_no ,
				"ifsc"    => $ifsc
			);

			$this->Common_Model->update_records("users","user_id",$user_id, $data_list);

			$this->session->set_flashdata('success', 'You have verified Bank successfully.');

			// ✅ Pass user_id back to the view
			
			redirect('site/create_userid');
			
		} else {
			// Validation failed: repopulate user_id
			$this->session->set_flashdata("error", validation_errors());
			redirect('site/create_userid');
			
		}
	}

	$this->load->view('verify_bank', $data);
}
 



public function create_userid() {
	$data = array();
		if($this->input->post('submitBtn')){
			//echo "<pre>";print_r($this->input->post());exit;
			$this->form_validation->set_rules('custom_user_id', 'User ID', 'trim|required');
			
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			$this->form_validation->set_rules('conpassword', 'Confirm Password', 'trim|required');
			$this->form_validation->set_error_delimiters('<p class="has-error"><label class="control-label">','</label></p>');
			if($this->form_validation->run()){
				$user_id = $this->session->userdata('u_id');
				/******** Duplicate Record Check ********/
				$duplicate_user_id  = $this->input->post("custom_user_id");
		 
				$chk_user_id = $this->Common_Model->db_query("SELECT COUNT(1) as cnt FROM users WHERE custom_user_id = '$duplicate_user_id' and delete_status = 0");
				if($chk_user_id[0]['cnt']>0){
					$this->session->set_flashdata("error", 'User ID  exists !!! ');
					redirect('Site/register');
				}
			 
				/******** Duplicate Record Check ********/
					
					$data_list = array(
						"custom_user_id"			=> $this->input->post("custom_user_id"),
						 
						 
						"password"			=> md5($this->input->post("password")),
						 
						 
					);

					$this->Common_Model->update_records("users","user_id",$user_id, $data_list);

			$this->session->set_flashdata('success', 'User ID Created  successfully.');

			// ✅ Pass user_id back to the view
			$this->session->set_userdata('user_id','');
			redirect('site/register');
			
		} else {
			// Validation failed: repopulate user_id
			$data['user_id'] = $this->input->post('user_id');
			redirect('site/create_userid');
			
		}
}

$this->load->view('create_userid', $data);

}
 

	public function logout(){
		$this->session->sess_destroy();
		redirect ('site');  
	}

	 
// 	public function category_products($id)
// {

//     $category = $this->Common_Model->FetchData('mstr_category',"*","deleted_status = 0 and status = 1");
// 		$data['category_list']  = $category;
//     // Get category details using slug
//   $data['products'] = $products = $this->Common_Model->db_query(" SELECT 
//     tp.*, 
//     c.category_name, 
//     ROUND(((tp.actual_price - tp.product_price) / tp.actual_price) * 100) AS discount_percentage
// FROM t_product AS tp
// LEFT JOIN mstr_category AS c ON tp.category_id = c.category_id
// WHERE c.category_id = '$id'");
    


//     if ($products) { 
//         $this->load->view('category', $data);  
//     } else {
//      	redirect($this->input->server('HTTP_REFERER'));
//     }

      
//     } 







public function category_products($id)
{
    // Fetch all active categories
    $category = $this->Common_Model->FetchData(
        'mstr_category',
        "*",
        "deleted_status = 0 AND status = 1"
    );
    $data['category_list'] = $category;

    // Fetch products for this category that are NOT deleted
    $data['products'] = $products = $this->Common_Model->db_query("
        SELECT 
            tp.*, 
            c.category_name, 
            ROUND(((tp.actual_price - tp.product_price) / tp.actual_price) * 100) AS discount_percentage
        FROM t_product AS tp
        LEFT JOIN mstr_category AS c ON tp.category_id = c.category_id
        WHERE c.category_id = '$id'
          AND tp.deleted_flag = 0
    ");

    if ($products) { 
        $this->load->view('category', $data);  
    } else {
        redirect($this->input->server('HTTP_REFERER'));
    }
}















	public function  products_details($id)
{
//     $category = $this->Common_Model->FetchData('mstr_category',"*","deleted_status = 0 and parent_id = 0 and status = 1");
// 		$data['category_list']  = $category;
//     // Get category details using slug
   $data['products'] = $products = $this->Common_Model->db_query("  SELECT 
    tp.*, 
    b.brand_name,
    c.category_name,
    c.category_subname,
    ROUND(((tp.actual_price - tp.product_price) / tp.actual_price) * 100) AS discount_percentage
FROM t_product AS tp
LEFT JOIN m_brand AS b 
       ON tp.brand_id = b.brand_id
LEFT JOIN mstr_category AS c
       ON tp.category_id = c.category_id
WHERE tp.product_id = '$id';
 
");	
    
  $category_id = $data['products'][0]['category_id'];
$data['related_products'] = $this->Common_Model->db_query("
    SELECT 
        tp.*, 
        b.brand_name,
        ROUND(((tp.actual_price - tp.product_price) / tp.actual_price) * 100) AS discount_percentage
    FROM t_product AS tp
    LEFT JOIN m_brand AS b ON tp.brand_id = b.brand_id
    WHERE tp.category_id = '$category_id'
      AND tp.product_id != '$id'
      AND tp.deleted_flag = 0
    ORDER BY tp.product_id DESC
    LIMIT 8
");
  
 
//   echo "<pre>";
// print_r($product);
// echo "</pre>";
// exit;
    
    // echo "<pre>";print_r( $data['products']);
    
    
    
    
    if ($products) { 
        $this->load->view('product_details', $data);  
    } else {
     	redirect($this->input->server('HTTP_REFERER'));
    } 


  
    } 








	 public function send_otp()
			{
				//$input=$this->input->post('inputmailno');
				$input="gyaneswarsahu2003@gmail.com";
				$user= $this->Common_Model->FetchData('users',"*","(mobile='$input' OR email='$input') AND delete_status=0 AND custom_user_id IS NOT NULL");
				if($user){
					//echo 11;exit;
				    $user_id = $user[0]['user_id'];

				    // Fallback or hardcoded email (for testing)
				    $email = $user[0]['email'];

				    // Generate OTP
				    $otp = rand(100000, 999999);
				    $now = date('Y-m-d H:i:s');
				    $expires_at = date('Y-m-d H:i:s', strtotime('+5 minutes'));

				    // Store OTP in your user table (optional, if you need it for verification)
				    $data_list = [
				        'otp' => $otp,
				        'otp_created_on' => $now,
				    ];

				    // Uncomment this when you have the correct table name
				    $this->Common_Model->update_records("users", "user_id", $user_id, $data_list);


			   
				    $msg = "<p><strong>Samaj Matrimony OTP:</strong> <br>Your One Time Password is <b>$otp</b>.<br>It is valid for 5 minutes.</p>";

				     include(base_url('phpmailer/PHPMailerAutoload.php'));
				     $mail = new PHPmailer;
				     $mail->Host='smtp.gmail.com';
				     $mail->Port=587;
				     $mail->SMTPAuth=true;
				     $mail->SMTPSecure='tls';
				     $mail->Username='samajamatrimony.digital@gmail.com';
				     $mail->Password='xses yome oybl cfjs';
				     
				     
				     $mail->setFrom('samajamatrimony.digital@gmail.com','AumaanTrak');
				     $mail->addAddress($email);
				     $mail->addReplyTo('samajamatrimony.digital@gmail.com','AumaanTrak');
				     $mail->isHTML(true);
				     $mail->CharSet = 'UTF-8';
				     $mail->Subject='OTP Verification';
				     $mail->Body=$msg;
				     if($mail->send()){
				     	echo json_encode(array('status'=>200,'message'=> 'OTP sent successfully to your email.'));exit;
				     }else{
				     	echo json_encode(array('status'=>204,'message'=> 'Somthing went wrong.'));exit;
				     }

				    
				    // $mail = new PHPMailer(true);

				    // try {
				    //     // SMTP configuration
				    //     $mail->isSMTP();
				    //     $mail->Host       = 'smtp.gmail.com';
				    //     $mail->SMTPAuth   = true;
				    //     $mail->Username   = 'samajamatrimony.digital@gmail.com'; // your Gmail
				    //     $mail->Password   = 'xses yome oybl cfjs';               // app password (not Gmail password)
				    //     $mail->SMTPSecure = 'tls';
				    //     $mail->Port       = 587;

				    //     // Email headers
				    //     $mail->setFrom('samajamatrimony.digital@gmail.com', 'Samaj Matrimony');
				    //     $mail->addAddress($email); // Receiver
				    //     $mail->addReplyTo('samajamatrimony.digital@gmail.com', 'Samaj Matrimony');

				    //     // Email content
				    //     $mail->isHTML(true);
				    //     $mail->Subject = 'Your OTP for Samaj Matrimony';
				    //     $mail->Body    = $msg;

				    //     $mail->send();

				    //     echo json_encode(array('status'=>200,'message'=> 'OTP sent successfully to your email.'));exit;
				    // } catch (Exception $e) {
				    //     echo json_encode(array('status'=>204,'message'=> 'Somthing went wrong.'));exit;
				    // }

				}else{
					echo json_encode(array('status'=>204,'message'=> 'Invalid user mail or number.'));exit;
				}

			}





 public function verify_otp() 

    	{

    	$user_id = $this->session->userdata('user_id');
        
        $entered_otp = $this->input->post('otp');
        $now = date('Y-m-d H:i:s');

        $otp_data=$this->Common_Model->FetchData("tablename","*","user_id=$user_id AND is_verified=0 AND $now<expires_at");


        if($otp_data[0]['otp']== $entered_otp)

        {

        	$this->Common_Model->db_query("UPDATE TABLENAME SET is_verified = 1 WHERE UserID = '$user_id'");

        	$this->session->set_flashdata('success', 'OTP verified successfully!');

        }

        else

        {
        	$this->session->set_flashdata('error', 'Invalid or expired OTP.');
        }

       

        redirect('yerpath');
    }

 






public function forgot_password() {
        $data = [];

        if ($this->input->post('send_otp')) {
          	$mobile  = (isset($_REQUEST['mobile']))?$_REQUEST['mobile']:'';
    		$usr_det_res = $this->Common_Model->FetchData('users',"*","(mobile='$mobile' OR email='$mobile') AND delete_status=0 AND custom_user_id IS NOT NULL"); 
    		if(!empty($usr_det_res)){
    			$otpVal = rand(1000,9999);
    			
            	$this->session->set_userdata('otp_mobile', $usr_det_res[0]['email']);
            	$this->session->set_userdata('otp_code', $otpVal);
				$message = "OTP to reset your Aumaantrak password is ".$otpVal.". OTP valid for 10mins. Do not Share OTP with anyone.";
      
      			$this->load->library('email');

			    // Email configuration (update with your SMTP settings if needed)
			    $config = array(
			        'protocol'  => 'smtp',
			        'smtp_host' => 'smtp.gmail.com',
			        'smtp_port' => 587,
			        'smtp_user' => 'subha.cloudjiffy@gmail.com',
			        'smtp_pass' => 'ffdq luwn nexq cfza',
			        'mailtype'  => 'text',
			        'charset'   => 'utf-8',
			        'newline'   => "\r\n",
			        'smtp_crypto' => 'tls',
			    );
			    $this->email->initialize($config);

			    // Set email parameters
			    $this->email->from('subha.cloudjiffy@gmail.com', 'AUMAANTRAK ONLINE SHOPPE PRIVATE LIMITED');
			    $this->email->to($usr_det_res[0]['email']);
			    $this->email->subject('OTP for Password Reset');
			    $this->email->message($message);


			    // Send the email
			    $this->email->send();

                $data['step'] = 'verify';
                $data['message'] = "OTP sent to $mobile.";
             
          } else{
                  $data['error'] = "Please enter your registered mobile no/email."; 
              }
        }

        elseif ($this->input->post('verify_otp')) {
            $entered_otp = $this->input->post('otp');
            $session_otp = $this->session->userdata('otp_code');

            if ($entered_otp == $session_otp) {
                $data['step'] = 'reset';
                $data['message'] = 'OTP verified successfully.';
                $this->session->unset_userdata(['otp_code']);
            } else {
                $data['step'] = 'verify';
                $data['error'] = 'Invalid OTP entered.';
            }
        }elseif ($this->input->post('reset_pwd')) {
            // Set form validation rules
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
            $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');

            if ($this->form_validation->run() == FALSE) {
                $data['step'] = 'verify';
                $data['error'] = validation_error();
            } else {
              	$mobile = $this->session->userdata('otp_mobile');
                $password = $this->input->post('password');
                $hashed_password = md5($password); // Secure hashing
                // Update password in DB
              	
                $usr_det = "SELECT * FROM users WHERE delete_status = 0 and (mobile = '$mobile' or email='$mobile') ";
		    	$usr_det_res = $this->Common_Model->db_query($usr_det);    
		    	if($usr_det_res){
                  $sql = "update users SET password = '$hashed_password' where user_id = ".$usr_det_res[0]['user_id'];
                  $this->Common_Model->db_query($sql);    

                  redirect('site/login');exit;
                }
            }
        }


        if (!isset($data['step'])) {
            $data['step'] = 'send';
        }
        $this->load->view('forgotpassword', $data);
    }




























        public function testmail(){
            $message = "OTP to reset your tooros password is 4444 OTP valid for 10mins. Do not Share OTP with anyone.";
      
      			$this->load->library('email');

			    // Email configuration (update with your SMTP settings if needed)
			    $config = array(
			        'protocol'  => 'smtp',
			        'smtp_host' => 'smtp.gmail.com',
			        'smtp_port' => 587,
			        'smtp_user' => 'samajamatrimony.digital@gmail.com',
			        'smtp_pass' => 'xses yome oybl cfjs',
			        'mailtype'  => 'text',
			        'charset'   => 'utf-8',
			        'newline'   => "\r\n",
			        'smtp_crypto' => 'tls',
			    );
			    $this->email->initialize($config);

			    // Set email parameters
			    $this->email->from('samajamatrimony.digital@gmail.com', 'AUMAANTRAK ONLINE SHOPPE PRIVATE LIMITED');
			    $this->email->to('jyotiprakashmohanta30@gmail.com');
			    $this->email->subject('OTP for Password Reset');
			    $this->email->message($message);


			    // Send the email
			    if ($this->email->send()) {
			          echo "success";
			    } else {
			        // Show error for debugging
			        echo $this->email->print_debugger();
			    }
        } 





public function brands()
{
    $data = array();

    // Fetch active brands
    $data['brands'] = $this->Common_Model->FetchData(
        "m_brand",
        "*",
        "deleted_flag = 1"
    );

    // Fetch products with brand name
    $sql = "
        SELECT P.*, B.brand_name 
        FROM t_product P
        LEFT JOIN m_brand B ON P.brand_id = B.brand_id
        WHERE P.deleted_flag = 1
        ORDER BY B.brand_name ASC, P.product_name ASC
    ";

    $data['products'] = $this->Common_Model->db_query($sql);

    $this->load->view('brand_page', $data);
}











 
	public function dsagreement(){
		$data = array();
		$this->load->view('dsagreement', $data);
	}

	public function privacypolicy(){
		$data = array();
		$this->load->view('privacypolicy', $data);
	}
	
	public function termsconditions(){
		$data = array();
		$records = $this->Common_Model->db_query("SELECT * FROM term_conditions WHERE 1");
		$data['records']  = $records;
		$this->load->view('termsconditions', $data);
	}

		public function RefundPolicy(){
		$data = array();
		$this->load->view('RefundPolicy', $data);
	}



	
		public function LegalDocuments(){
		$data = array();
		$this->load->view('certificates', $data);
	}
	
			public function Aboutus(){
		$data = array();
		$this->load->view('aboutus', $data);

 
	}


public function Contact(){
		$data = array();
		$this->load->view('contact', $data);
	}
public function Projects(){
		$data = array();
		$this->load->view('projects', $data);
	}
	public function Project_details(){
		$data = array();
		$this->load->view('project_details', $data);
	}
public function Blog(){
		$data = array();


		$this->load->view('blog', $data);

			
	}
public function Blog_details(){
		$data = array();


		$this->load->view('blog_details', $data);

			
	}
	public function Careers(){
		$data = array();
		$this->load->view('careers', $data);
	}

	public function Global_Presense(){
		$data = array();
		$this->load->view('global_presense', $data);
	}
 
// public function search_product()
// {
//     // Load category list (same as your product_details)
//     $category = $this->Common_Model->FetchData(
//         'mstr_category',
//         "*",
//         "deleted_status = 0 AND parent_id = 0 AND status = 1"
//     );
//     $data['category_list'] = $category;

//     // Get search keyword
//     $keyword = $this->input->get('keyword');

//     // If empty, redirect back
//     if (!$keyword) {
//         redirect($this->input->server('HTTP_REFERER'));
//     }

//     // Search by product_slug or product_name
//     $data['products'] = $products = $this->Common_Model->db_query("
//         SELECT tp.*, b.brand_name,
//             ROUND(((tp.actual_price - tp.product_price) / tp.actual_price) * 100) AS discount_percentage
//         FROM t_product AS tp
//         LEFT JOIN m_brand AS b ON tp.brand_id = b.brand_id
//         WHERE tp.deleted_flag = 0
//         AND (
//             tp.product_slug LIKE '%$keyword%' 
//             OR tp.product_name LIKE '%$keyword%'
//         )
//     ");

//     // Load view only if result found
//     if ($products) {
//         $data['keyword'] = $keyword;
//         $this->load->view('search_product', $data);
//     } else {
//         redirect($this->input->server('HTTP_REFERER'));
//     }
// }




public function search_product()
{
    // Load category list
    $category = $this->Common_Model->FetchData(
        'mstr_category',
        "*",
        "deleted_status = 0 AND parent_id = 0 AND status = 1"
    );
    $data['category_list'] = $category;

    // Get search keyword and trim spaces
    $keyword = $this->input->get('keyword');
    $keyword = trim($keyword);          // remove leading/trailing spaces
    $keyword = preg_replace('/\s+/', ' ', $keyword); // replace multiple spaces with single

    // If empty, redirect back
    if (!$keyword) {
        redirect($this->input->server('HTTP_REFERER'));
    }

    // Search by product_slug or product_name
    $keyword_escaped = $this->db->escape_like_str($keyword); // escape for LIKE query

    $data['products'] = $products = $this->Common_Model->db_query("
        SELECT tp.*, b.brand_name,
            ROUND(((tp.actual_price - tp.product_price) / tp.actual_price) * 100) AS discount_percentage
        FROM t_product AS tp
        LEFT JOIN m_brand AS b ON tp.brand_id = b.brand_id
        WHERE tp.deleted_flag = 0
        AND (
            tp.product_slug LIKE '%{$keyword_escaped}%'
            OR tp.product_name LIKE '%{$keyword_escaped}%'
        )
    ");

    // Load view only if result found
    if ($products) {
        $data['keyword'] = $keyword;
        $this->load->view('search_product', $data);
    } else {
        redirect($this->input->server('HTTP_REFERER'));
    }
}








// public function parent_products($category_id)
// {
//      // Get current parent category
//     $data['category'] = $this->Common_Model->FetchData(
//         'mstr_category',
//         "*",
//         "category_id = " . $category_id
//     )[0]; 

//     // Get subcategories
//     $data['subcategories'] = $this->Common_Model->FetchData(
//         'mstr_category',
//         "*",
//         "deleted_status = 0 AND status = 1 AND parent_id = " . $category_id
//     );


// // echo "<pre>";
// // print_r($data['subcategories']);
// // echo "</pre>";
// // exit;   // stop execution here

    

//     // 4. Load view
//     $this->load->view("parent_products", $data);
// }


public function all_segments()
{
     // Get current parent category
    $data['category_list'] = $this->Common_Model->FetchData(
          'mstr_category',
        "*",
        "deleted_status = 0 AND status = 1 AND parent_id =  0" ); 

     


 
    $this->load->view("parent_products", $data);
}



public function all_products()
{
   $data['products_list'] = $this->Common_Model->db_query( "SELECT 
        *, 
        ROUND(((tp.actual_price - tp.product_price) / tp.actual_price) * 100) AS discount_percentage 
    FROM 
        t_product tp 
    WHERE 
            tp.deleted_flag = 0 
    ORDER BY 
        tp.product_id DESC"
     
);

 

     
 //  echo "<pre>";
 //  print_r($data['products_list']);
 //  echo "</pre>";
 // exit;    

 
    $this->load->view("product_list", $data);
}	



}
