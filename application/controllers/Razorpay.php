<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Razorpay extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}
	
	// public function index() {
	// 	$data = [];
	// 	$data['title']              = 'Checkout payment | Tutsmake.com';  
	// 	$data['callback_url']       = base_url().'/razorpay/callback';
	// 	$data['surl']               = base_url().'/razorpay/success';;
	// 	$data['furl']               = base_url().'/razorpay/failed';;
	// 	$data['currency_code']      = 'INR';
	// 	echo view("checkout", $data);
	// }

	// initialized cURL Request
	private function curl_handler($payment_id, $amount){

		//echo "<pre>";print_r($this->session());exit;
		$url            = 'https://api.razorpay.com/v1/payments/'.$payment_id.'/capture';
		$key_id         = RAZOR_KEY_ID;
		$key_secret     = RAZOR_KEY_SECRET;
		$fields_string  = "amount=$amount";
		//cURL Request
		$ch = curl_init();
		//set the url, number of POST vars, POST data
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_USERPWD, $key_id.':'.$key_secret);
		curl_setopt($ch, CURLOPT_TIMEOUT, 60);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
		return $ch;
	}   

	// callback method
	public function callback(){

		if (!empty($this->input->post('razorpay_payment_id')) && !empty($this->input->post('merchant_order_id'))) {
			$razorpay_payment_id    = $this->input->post('razorpay_payment_id');
			$merchant_order_id      = $this->input->post('merchant_order_id');
			$_SESSION['razorpay_payment_id'] = $this->input->post('razorpay_payment_id');
			$_SESSION['merchant_order_id'] = $this->input->post('merchant_order_id');
			$currency_code = 'INR';
			$amount = $this->input->post('merchant_total');
			$success = false;
			$error = '';
			//echo "<pre>";print_r($_SESSION);exit;

			/******** Save Payment Details before Payment Response :: Start  ********/

			$_SESSION['transaction_id'] = time();
			$_SESSION['payment_id']     = $this->input->post('merchant_order_id');

			$data_payment_list = array(
				"payment_id"		=> $_SESSION['payment_id'],
				"transaction_id"	=> $_SESSION['transaction_id'],
				"amount"			=> $amount/100,
				"request"			=> json_encode($this->input->post()),
				"created_on"		=> date('Y-m-d H:i:s')
			);
			$this->Common_Model->dbinsertid("t_payment", $data_payment_list);

			/******** Save Payment Details before Payment Response :: End  ********/

			try {                
				$ch = $this->curl_handler($razorpay_payment_id, $amount);
				//execute post
				$result = curl_exec($ch);
				$dataFlesh = $result;
				//echo "<pre>";print_r($result);exit;
				$http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
				if ($result === false) {
					$success = false;
					$error = 'Curl error: '.curl_error($ch);
				} else {
					$response_array = json_decode($result, true);
					//Check success response
					if ($http_status === 200 and isset($response_array['error']) === false) {
						$success = true;
					} else {
						$success = false;
						if (!empty($response_array['error']['code'])) {
							$error = $response_array['error']['code'].':'.$response_array['error']['description'];
						} else {
							$error = 'RAZORPAY_ERROR:Invalid Response <br/>'.$result;
						}
					}
				}
				//close curl connection
				curl_close($ch);
			} catch (Exception $e) {
				$success = false;
				$error = 'Request to Razorpay Failed';	
			}
			if($success === true) {

				/******** Save Payment Details after Payment Response :: Start  ********/
				$pstatus = ($success === true) ? 1 : 0;
				$response = json_encode($dataFlesh);
				$query = "UPDATE t_payment SET response = '$response',status = $pstatus WHERE transaction_id = '$_SESSION[transaction_id]' AND payment_id = '$_SESSION[payment_id]'";
				$this->Common_Model->db_query($query);
				
					$data_order_list = array(
						"payment_status"  => 1
					);
					$this->Common_Model->update_records('t_order', 'order_no', $_SESSION['payment_id'], $data_order_list);
					$_SESSION['bill_id'] = '';		
					updatestock($_SESSION['payment_id']);
				/******** Save Payment Details after Payment Response :: End  ********/

				if(!empty($_SESSION['ci_subscription_keys'])) {
					$_SESSION['ci_subscription_keys'];
				}
			    //echo "<pre>";print_r($this->input->post());exit;
				if (!$order_info['order_status_id']) {
					echo json_encode(array('redirectURL' => $this->input->post('merchant_surl_id')));
				} else {					
					echo json_encode(array('redirectURL' => $this->input->post('merchant_surl_id')));
				}
			} else {
				echo json_encode(array('redirectURL' => $this->input->post('merchant_furl_id')));
			}
		} else {
			echo json_encode(array('msg' => 'An error occured. Contact site administrator, please!'));

		}
	}

	public function success(){
		$data['title'] = 'Razorpay Success';
		echo "<h4>Your transaction is successful</h4>";  
		echo "<br/>";
		echo "Transaction ID: ".$_SESSION['razorpay_payment_id'];
		echo "<br/>";
		echo "Order ID: ".$_SESSION['merchant_order_id'];
		$order_no    = data_enc('encrypt' , $_SESSION['merchant_order_id']);
		redirect('site/ordersuccess/'.$order_no);
	}  

	public function failed(){
		$data['title'] = 'Razorpay Failed';  
		echo "<h4>Your transaction got Failed</h4>";            
		echo "<br/>";
		echo "Transaction ID: ".$_SESSION['razorpay_payment_id'];
		echo "<br/>";
		echo "Order ID: ".$_SESSION['merchant_order_id'];
		redirect('site/orderfail');
	}
}