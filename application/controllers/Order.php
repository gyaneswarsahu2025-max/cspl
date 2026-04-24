<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 $this->perPage = 10;
		 date_default_timezone_set('Asia/Kolkata');
	}

	public function orderdetails(){
	    $uid   = $this->session->userdata('user_id');
	    $utype = $this->session->userdata('user_type');
	    //echo $this->session->userdata('user_type');exit;
		is_logged_in();
		$data = array();
		$this->load->helper('url');
		$currentURL = current_url();
		$sql = "1 AND A.deleted_flag = 0 AND $utype = 0 || A.vendor_id = $uid";
		$queryvars = "";
		$sql.= " ORDER BY A.created_on DESC ";

		$records = $this->Common_Model->db_query("SELECT A.* FROM t_order A  WHERE ".$sql);

		$data['records']  = $records;
		$data['mainmenu'] = 'order';
		$data['submenu'] = 'orderdetails';
		$this->load->view('admin/order/orderdetails', $data);
	}	
	
	public function cancelneworder($order_id=0){
		is_logged_in();
		$data = array();
		$this->load->helper('url');
		$currentURL = current_url();
		
		$this->Common_Model->update_records("t_order", "order_id", $order_id, array("active_status" => 'Cancelled',"order_status" => 1));
				$this->session->set_flashdata('success', 'Record Updated successfully.' );
				redirect('order/orderdetails');

		$data['mainmenu'] = 'order';
		$data['submenu'] = 'orderdetails';
		$this->load->view('admin/order/orderdetails', $data);
	}

	
	public function acceptorder($order_id=0){
		$data = array();
		$this->load->helper('url');
		$currentURL = current_url();
		$active_status = 'Order Accepted';

		if($active_status=='Order Accepted'){
			date_default_timezone_set('Asia/Kolkata');
        $row = $this->Common_Model->FetchData("shiprocket_token","*","1");
        //$row=mysqli_fetch_assoc(mysqli_query($con,"select * from shiprocket_token"));
        $added_on=strtotime($row[0]['added_on']);
        $current_time=strtotime(date('Y-m-d h:i:s'));
        $diff_time=$current_time-$added_on;
        if($diff_time>86400){
            $token=$this->generateShipRocketToken();
        }else{
            $token=$row[0]['token'];
        }

        $this->placeShipRocketOrder($token,$order_id);
        //return $token;
		}

		//echo $token;exit;
		
		$this->Common_Model->update_records("t_order", "order_id", $order_id, array("active_status" => 'Order Accepted',"accept_dt_time"=> $accept_dt_time,"order_status" => 1));
				$this->session->set_flashdata('success', 'Record Updated successfully.' );
				redirect('order/orderdetails');

		$data['mainmenu'] = 'order';
		$data['submenu'] = 'orderdetails';
		$this->load->view('admin/order/orderdetails', $data);
	}

	function generateShipRocketToken(){
        date_default_timezone_set('Asia/Kolkata');
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => "https://apiv2.shiprocket.in/v1/external/auth/login",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS =>"{\n    \"email\": \"pandalima2015@gmail.com\",\n    \"password\": \"123456\"\n}",
        CURLOPT_HTTPHEADER => array(
          "Content-Type: application/json"
        ),
      ));
      $SR_login_Response = curl_exec($curl);
      curl_close($curl);
      $SR_login_Response_out = json_decode($SR_login_Response);
      $token = $SR_login_Response_out->{'token'};
      $added_on=date('Y-m-d h:i:s');
      $this->Common_Model->update_records("shiprocket_token", "id",2, array("token" => $token,"added_on"=>$added_on));
      //$this->Common_Model->db_query("update shiprocket_token set token='$token',added_on='$added_on' where id=2");
      return $token;
    }

     function placeShipRocketOrder($token,$order_id){

        $row_order = $this->Common_Model->FetchData("t_order", "*", "order_id = ".$order_id);
        //print_r($row_order);
        
        $order_date_str=$row_order[0]['created_on'];
        $order_date_str=strtotime($order_date_str);
        $order_date=date('Y-m-d h:i',$order_date_str);
        $name=$row_order[0]['name'];
        $email=$row_order[0]['email'];
        $mobile=$row_order[0]['mobile'];
        $address=$row_order[0]['address'];
        $pincode=$row_order[0]['pincode'];
        $city=$row_order[0]['state'];
        $bill_id = $row_order[0]['bill_id'];
        $payment_type=$row_order[0]['payment_mode'];
        if($payment_mode=='Online'){
            $payment_type='Prepaid';
        }
        

        $total_price=$row_order[0]['order_price'];
        $res = $this->Common_Model->db_query("SELECT C.*, P.product_slug, P.category_id, P.vendor_id, P.product_name, P.product_desc, P.product_price, P.brand_id, P.product_image,V.company_name,B.brand_name FROM t_cart C LEFT JOIN t_product P ON C.product_id = P.product_id LEFT JOIN vendor_details V ON P.vendor_id = V.user_id LEFT JOIN m_brand B ON P.brand_id = B.brand_id WHERE C.deleted_flag = 0 AND C.cart_status = 1 AND C.bill_id = '".$bill_id."'");
       // $res=mysqli_query($con,"select order_detail.*,product.name from order_detail,product where product.id=order_detail.product_id and order_detail.order_id='$order_id'");
        $html='';
        
        foreach ($res as $key => $row) {  
       // echo $row['price'];die();      	
        //while($row=mysqli_fetch_assoc($res)){
            $sku=rand(111111,999999);
            $html.='{
              "name": "'.$row['product_name'].'",
              "sku": "'.$row['product_id'].'",
              "units": '.$row['quantity'].',
              "selling_price": "'.$row['price'].'",
              "discount": "",
              "tax": "",
              "hsn": ""
            },';
        }
        $html=rtrim($html,",");
        
        $curl = curl_init();
          curl_setopt_array($curl, array(
            CURLOPT_URL => "https://apiv2.shiprocket.in/v1/external/orders/create/adhoc",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS =>'{"order_id": "'.$order_id.'",
          "order_date": "'.$order_date.'",
          "pickup_location": "bbsr",
          "billing_customer_name": "'.$name.'",
          "billing_last_name": "",
          "billing_address": "bbsr",
          "billing_address_2": "",
          "billing_city": "Khorda",
          "billing_pincode": "'.$pincode.'",
          "billing_state": "'.$city.'",
          "billing_country": "India",
          "billing_email": "'.$email.'",
          "billing_phone": "'.$mobile.'",
          "shipping_is_billing": true,
          "shipping_customer_name": "Rojalisa",
          "shipping_last_name": "Panda",
          "shipping_address": "Bhubaneswar",
          "shipping_address_2": "",
          "shipping_city": "Bhubaneswar",
          "shipping_pincode": "751002",
          "shipping_country": "India",
          "shipping_state": "Delhi",
          "shipping_email": "pandalima2015@gmail.com",
          "shipping_phone": "8079865566",
          "order_items": [
            '.$html.'
          ],
          "payment_method": "'.$payment_type.'",
          "shipping_charges":0,
          "giftwrap_charges": 0,
          "transaction_charges": 0,
          "total_discount": 0,
          "sub_total": "'.$total_price.'",
          "length": 10,
          "breadth": 15,
          "height": 20,
          "weight": 2.5
            }',
        CURLOPT_HTTPHEADER => array(
          "Content-Type: application/json",
           "Authorization: Bearer $token"
        ),
      ));
          // echo $html; die();
      $SR_login_Response = curl_exec($curl);
      //print_r($SR_login_Response);die();
      curl_close($curl);
      $SR_login_Response_out = json_decode($SR_login_Response);
      $ship_order_id	 = $SR_login_Response_out->order_id;
      $ship_shipment_id  = $SR_login_Response_out->shipment_id;
      $this->Common_Model->update_records("t_order", "order_id",$order_id, array("ship_order_id" => $ship_order_id,"ship_shipment_id"=>$ship_shipment_id));
      //$SR_login_Response_out = json_decode($SR_login_Response);
      //echo '<pre>';
      //print_r($SR_login_Response);
    }

	public function pending_delivery(){
		is_logged_in();
		$data = array();
		$this->load->helper('url');
		$currentURL = current_url();
		$sql = "1 AND A.deleted_flag = 0 AND A.active_status='Order Accepted'";
		$queryvars = "";
		$sql.= " ORDER BY A.created_on DESC ";

		$records = $this->Common_Model->db_query("SELECT A.* FROM t_order A  WHERE ".$sql);

		$data['records']  = $records;
		$data['mainmenu'] = 'order';
		$data['submenu'] = 'pending_delivery';
		$this->load->view('admin/order/pending_delivery', $data);
	}

	public function order_delivery($order_id=0){
		is_logged_in();
		$data = array();
		$this->load->helper('url');
		$currentURL = current_url();
		$del_dt_time 	= date('Y-m-d H:i:s');
		
		$this->Common_Model->update_records("t_order", "order_id", $order_id, array("delivery_status" => 'Order Delivered',"del_dt_time"=> $del_dt_time,));
				$this->session->set_flashdata('success', 'Record Updated successfully.' );
				redirect('order/pending_delivery');

		$data['mainmenu'] = 'order';
		$data['submenu'] = 'pending_delivery';
		$this->load->view('admin/order/pending_delivery', $data);
	}


	public function cancelorder($order_id=0){
		is_logged_in();
		$data = array();
		$this->load->helper('url');
		$currentURL = current_url();

		$active_status = 'Order Cancelled';
		if($active_status=='Order Cancelled'){
	        
			date_default_timezone_set('Asia/Kolkata');
	        $row = $this->Common_Model->FetchData("shiprocket_token","*","1");
	        //$row=mysqli_fetch_assoc(mysqli_query($con,"select * from shiprocket_token"));
	        $added_on=strtotime($row[0]['added_on']);
	        $current_time=strtotime(date('Y-m-d h:i:s'));
	        $diff_time=$current_time-$added_on;
	        if($diff_time>86400){
	            $token=$this->generateShipRocketToken();
	        }else{
	            $token=$row[0]['token'];
	        }

	        $ship_order = $this->Common_Model->FetchData("t_order", "*", "order_id = ".$order_id);
	        $ship_order_id = $ship_order[0]['ship_order_id'];

	        $this->cancelShipRocketOrder($token,$ship_order_id);
		}
		
		$this->Common_Model->update_records("t_order", "order_id", $order_id, array("delivery_status" => 'Order Cancelled',"cancel_dt_time"=> $cancel_dt_time));
				$this->session->set_flashdata('success', 'Record Updated successfully.' );
				redirect('order/pending_delivery');

		$data['mainmenu'] = 'order';
		$data['submenu'] = 'pending_delivery';
		$this->load->view('admin/order/pending_delivery', $data);
	}

function cancelShipRocketOrder($token,$ship_order_id){
	//echo $token;die();
      $curl = curl_init();
	  curl_setopt_array($curl, array(
	  CURLOPT_URL => "https://apiv2.shiprocket.in/v1/external/orders/cancel",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 0,
	  CURLOPT_FOLLOWLOCATION => true,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS =>"{\n  \"ids\": [".$ship_order_id."]\n}",
	  CURLOPT_HTTPHEADER => array(
	    "Content-Type: application/json",
	    "Authorization: Bearer $token"
	  ),
	));

	$response = curl_exec($curl);
	curl_close($curl);
 }

	public function completeorders(){
		is_logged_in();
		$data = array();
		$this->load->helper('url');
		$currentURL = current_url();
		$sql = "1 AND A.deleted_flag = 0 AND A.delivery_status='Order Delivered'";
		$queryvars = "";
		$sql.= " ORDER BY A.created_on DESC ";

		$records = $this->Common_Model->db_query("SELECT A.*,V.company_name FROM t_order A LEFT JOIN vendor_details V ON A.user_id = V.user_id WHERE ".$sql);
		
		//echo "SELECT A.* FROM t_order A LEFT JOIN vendor_details V ON A.user_id = V.user_id WHERE ".$sql;exit;

		$data['records']  = $records;
		$data['mainmenu'] = 'order';
		$data['submenu'] = 'completeorders';
		$this->load->view('admin/order/completeorders', $data);
	}

	public function orderscancel(){
		is_logged_in();
		$data = array();
		$this->load->helper('url');
		$currentURL = current_url();
		$sql = "1 AND A.deleted_flag = 0 AND A.delivery_status='Order Cancelled' || A.active_status='Cancelled'";
		$queryvars = "";
		$sql.= " ORDER BY A.created_on DESC ";

		$records = $this->Common_Model->db_query("SELECT A.* FROM t_order A  WHERE ".$sql);

		$data['records']  = $records;
		$data['mainmenu'] = 'order';
		$data['submenu'] = 'orderscancel';
		$this->load->view('admin/order/orderscancel', $data);
	}
	
	public function order_restock(){
		is_logged_in();
		$data = array();
		$this->load->helper('url');
		$currentURL = current_url();
		$sql = "1 AND A.deleted_flag = 0 AND A.delivery_status='Order Cancelled' || A.active_status='Cancelled' || A.delivery_status='Order Returned'";
		$queryvars = "";
		$sql.= " ORDER BY A.created_on DESC ";
		$records = $this->Common_Model->db_query("SELECT A.* FROM t_order A  WHERE ".$sql);
		
		if(isset($_REQUEST['submitBtn'])){
		   $data_list = array(
							'product_id'     => $this->input->post('product'),
							'status'         => 1,
							'stock'          => $this->input->post('qty')
						);
						//print_r($data_list);exit;
		   $user_id = $this->Common_Model->dbinsertid("t_stock",$data_list); 
		}
    
        $stock = $this->Common_Model->db_query("SELECT *,(SELECT product_name FROM t_product WHERE t_product.product_id=t_stock.product_id) as prod FROM t_stock WHERE status=1");
        $data['stock']      = $stock;
		$data['records']    = $records;
		$data['mainmenu']   = 'order';
		$data['submenu']    = 'order_restock';
		$this->load->view('admin/order/order_restock', $data);
	}
}
