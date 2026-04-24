<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->perPage = 10;
		// if(!in_array($this->router->fetch_method(),array('save_attribute_value','loadBrand','loadAttributes','loadAttributeValue'))){
		// 	is_logged_in();
		// }
		date_default_timezone_set('Asia/Kolkata');
	}

	function save_attribute_value(){
		$data_list = array();
		$attribute_value = $this->input->post("attribute_value");
		if(!empty($attribute_value)){
			foreach ($attribute_value as $key => $value) {
				$tmp['attribute_id'] = $this->input->post("attribute_id");
				$tmp['attribute_value'] = $value;
				$tmp['created_by'] =  $this->session->userdata('user_id');
				array_push($data_list, $tmp);
			}
		}
		$attribute_value_id  = $this->Common_Model->dbinsertbatch("m_attribute_value", $data_list);
		if($attribute_value_id>0){
			echo json_encode(array('status' => 200,'uid' => $attribute_value_id));exit();
		}else{
			echo json_encode(array('status' => 500));exit();
		}
	}

	function get_attribute_values(){
		$response = array();
		$attribute_id = $this->input->post("attribute_id");
		if(!empty($attribute_id)){			
			$attribute_values = $this->Common_Model->FetchData('m_attribute_value',"*","attribute_id = ".$attribute_id." and deleted_flag = 0");
			if(!empty($attribute_values)){
				foreach ($attribute_values as $key => $value) {
					// echo "<pre>";print_r($value);exit;
					$tmp['attribute_value_id'] = $value['attribute_value_id'];
					$tmp['attribute_value'] = $value['attribute_value'];
					array_push($response, $tmp);
				}
			}
		}
		echo json_encode(array('status' => 200, 'res' => $response));exit;	
	}

	function delete_attribute_value(){
		$attribute_value_id = $this->input->post("attribute_value_id");
		if(!empty($attribute_value_id)){			
			$data_list = array(
			"deleted_flag"	=> 1
			);
			$this->Common_Model->update_records('m_attribute_value', 'attribute_value_id', $attribute_value_id, $data_list);
		}
		echo json_encode(array('status' => 200));exit;	
	}

	function delete_product_image(){
		$product_image_id = $this->input->post("product_image_id");
		if(!empty($product_image_id)){			
			$data_list = array(
			"deleted_flag"	=> 1
			);
			$this->Common_Model->update_records('t_product_image', 'product_image_id', $product_image_id, $data_list);
		}
		echo json_encode(array('status' => 200));exit;	
	}

	function delete_product_attribute(){
		$product_attribute_id = $this->input->post("product_attribute_id");
		if(!empty($product_attribute_id)){			
			$data_list = array(
			"deleted_flag"	=> 1
			);
			$this->Common_Model->update_records('t_product_attribute', 'product_attribute_id', $product_attribute_id, $data_list);
		}
		echo json_encode(array('status' => 200));exit;	
	}

	function delete_product_specification(){
		$product_specification_id = $this->input->post("product_specification_id");
		if(!empty($product_specification_id)){			
			$data_list = array(
			"deleted_flag"	=> 1
			);
			$this->Common_Model->update_records('t_product_specification', 'product_specification_id', $product_specification_id, $data_list);
		}
		echo json_encode(array('status' => 200));exit;	
	}

	function delete_product_features(){
		$product_features_id = $this->input->post("product_features_id");
		if(!empty($product_features_id)){			
			$data_list = array(
			"deleted_flag"	=> 1
			);
			$this->Common_Model->update_records('t_product_features', 'product_features_id', $product_features_id, $data_list);
		}
		echo json_encode(array('status' => 200));exit;	
	}

	function loadBrand(){
		$requestData    = $this->input->post();
		$category_id    = $requestData['category_id'];
		// if($category_id>0){
		// 	$allparentids = $this->Common_Model->allparentids($category_id,'');
		// 	//echo $allparentids;exit;
		// 	if(!empty($allparentids)){
		// 		$parentIdsArr = explode(',', $allparentids);
		// 		$brand = $this->Common_Model->FetchData('m_brand',"*","deleted_flag = 0 and category_id IN(".$allparentids.")");
		// 	}else{
		// 		$brand = $this->Common_Model->FetchData('m_brand',"*","deleted_flag = 0 and category_id = ".$category_id);
		// 	}
		// 	//echo "<pre>";print_r($brand);exit;
		// }else{
		// 	$brand = $this->Common_Model->FetchData("m_brand", "*" , "deleted_flag =0");
		// }
		$brand = brandsByCategory($category_id);
		if(!empty($brand)){
			echo json_encode(array('status' => 200, 'res' => $brand));exit;
		}else{
			echo json_encode(array('status' => 500, 'msg' => 'Something went wrong.'));exit;
		}
	}

	function loadAttributes(){
		$requestData    = $this->input->post();
		$category_id    = $requestData['category_id'];
		if($category_id>0){
			$allparentids = $this->Common_Model->allparentids($category_id,'');
			//echo $allparentids;exit;
			if(!empty($allparentids)){
				$parentIdsArr = explode(',', $allparentids);
				$attribute = $this->Common_Model->FetchData('m_attribute',"*","deleted_flag = 0 and category_id IN(".$allparentids.")");
			}else{
				$attribute = $this->Common_Model->FetchData('m_attribute',"*","deleted_flag = 0 and category_id = ".$category_id);
			}
		}else{
			$attribute = $this->Common_Model->FetchData("m_attribute", "*" , "deleted_flag =0");
		}
		if(!empty($attribute)){
			echo json_encode(array('status' => 200, 'res' => $attribute));exit;
		}else{
			echo json_encode(array('status' => 500, 'msg' => 'Something went wrong.'));exit;
		}
	}

	function loadAttributeValue(){
		$requestData    = $this->input->post();
		$attribute_id    = $requestData['attribute_id'];
		if($attribute_id>0){
			$attributeval = $this->Common_Model->FetchData('m_attribute_value',"*","deleted_flag =0 and attribute_id = ".$attribute_id);
		}else{
			$attributeval = $this->Common_Model->FetchData("m_attribute_value", "*" , "deleted_flag =0");
		}
		if(!empty($attributeval)){
			echo json_encode(array('status' => 200, 'res' => $attributeval));exit;
		}else{
			echo json_encode(array('status' => 500, 'msg' => 'Something went wrong.'));exit;
		}
	}

	function product_details(){
			
		$response = array();
		$requestData    = $this->input->post();
		$bill_id        =  $requestData['bill_id'];

		$product_details =  $this->Common_Model->db_query("SELECT C.*, P.product_slug, P.category_id, P.vendor_id, P.product_name, P.product_desc, P.product_price, P.brand_id, P.product_image,V.company_name,B.brand_name FROM t_cart C LEFT JOIN t_product P ON C.product_id = P.product_id LEFT JOIN vendor_details V ON P.vendor_id = V.user_id LEFT JOIN m_brand B ON P.brand_id = B.brand_id WHERE C.deleted_flag = 0 AND C.cart_status = 1 AND C.bill_id = '".$bill_id."'");
		 echo json_encode(array('status' => 200, 'res' => $product_details));exit;

	}

	function get_category_home_slider_img(){
		$response = array();
		$category_id = $this->input->post("category_id");
		if(!empty($category_id)){			
			$category_slider_images = $this->Common_Model->FetchData('t_category_slider_image',"*","category_id = ".$category_id." and deleted_flag = 0");
			if(!empty($category_slider_images)){
				foreach ($category_slider_images as $key => $value) {
					// echo "<pre>";print_r($value);exit;
					$tmp['category_slider_image_id'] = $value['category_slider_image_id'];
					$tmp['link'] = $value['link'];
					$tmp['category_id'] = $value['category_id'];
					$tmp['image'] = $value['image'];
					array_push($response, $tmp);
				}
			}
		}
		echo json_encode(array('status' => 200, 'res' => $response));exit;	
	}


  	function save_category_slider_img(){
    	$dbData = array();
    	//echo "<pre>";print_r($this->input->post());exit;
    	//echo "<pre>";print_r($_FILES);exit;

    	if(!empty($_FILES['category_slider_img']['name'])){
    		foreach ($_FILES['category_slider_img']['name'] as $csimgkey => $csimgkey) {

    			// Define new $_FILES array - $_FILES['file']
		          $_FILES['file']['name'] = $_FILES['category_slider_img']['name'][$csimgkey];
		          $_FILES['file']['type'] = $_FILES['category_slider_img']['type'][$csimgkey];
		          $_FILES['file']['tmp_name'] = $_FILES['category_slider_img']['tmp_name'][$csimgkey];
		          $_FILES['file']['error'] = $_FILES['category_slider_img']['error'][$csimgkey];
		          $_FILES['file']['size'] = $_FILES['category_slider_img']['size'][$csimgkey];

		          // Set preference
		          $config['upload_path'] = 'uploads/category/';
		          $config['allowed_types'] = 'jpg|jpeg|png';
		          $config['max_size'] = '1024'; // max_size in kb
		          $config['file_name'] = 'Category_Slider_'.date("Ymd").'_'.time();
		 
		          //Load upload library
		          $this->load->library('upload',$config); 
		          $this->upload->initialize($config);
		 
		          // File upload
		          if($this->upload->do_upload('file')){
		            // Get data about the file
		            $uploadData = $this->upload->data();
		            $category_slider_img = $uploadData['file_name'];

		            // Initialize array
		            $temp['category_id']   = $this->input->post("category_id");
		            $temp['image'] 		   = $category_slider_img;
		            $temp['link'] 		   = $this->input->post("link")[$csimgkey];
		            $temp['created_on']    = date("Y-m-d H:i:s");
		            array_push($dbData, $temp);
		          }
    		}

    		if(!empty($dbData)){
				$category_slider_img_id  = $this->Common_Model->dbinsertbatch("t_category_slider_image", $dbData);
				if($category_slider_img_id>0){
					echo json_encode(array('status' => 200,'msg' => 'Images added successfully.'));exit();
				}else{
					echo json_encode(array('status' => 500,'msg' => 'Something went wrong!!!Try later'));exit();
				}
			}
    	}
  	} 

	function delete_category_slider_image(){
		$category_slider_image_id = $this->input->post("category_slider_image_id");
		if(!empty($category_slider_image_id)){			
			$data_list = array(
			"deleted_flag"	=> 1
			);
			$this->Common_Model->update_records('t_category_slider_image', 'category_slider_image_id', $category_slider_image_id, $data_list);
		}
		echo json_encode(array('status' => 200));exit;	
	}

	function delete_homeslider(){
		$id = $this->input->post("id");
		if(!empty($id)){			
			$data_list = array(
			"deleted_flag"	=> 1
			);
			$this->Common_Model->update_records('t_home_slider', 'id', $id, $data_list);
		}
		echo json_encode(array('status' => 200));exit;	
	}

	function updatefeaturedproduct(){
		$product_id = $this->input->post("product_id");
		$is_feature = $this->input->post("is_feature");
		$data_list = array(
			"is_feature"	=> $is_feature
		);
		$this->Common_Model->update_records('t_product', 'product_id', $product_id, $data_list);
		echo json_encode(array('status' => 200));exit;	
	}

	function updatetodaydeal(){
		$product_id = $this->input->post("product_id");
		$todaydeal = $this->input->post("todaydeal");
		$data_list = array(
			"today_deal"	=> $todaydeal
		);
		$this->Common_Model->update_records('t_product', 'product_id', $product_id, $data_list);
		echo json_encode(array('status' => 200));exit;	
	}

	function updateshowhome(){
		$product_id = $this->input->post("product_id");
		$show_home = $this->input->post("show_home");
		$data_list = array(
			"show_home"	=> $show_home
		);
		$this->Common_Model->update_records('t_product', 'product_id', $product_id, $data_list);
		echo json_encode(array('status' => 200));exit;	
	}

	function replayMessage(){
		$requestData = $this->input->post();
		$message     = $requestData["message"];
		$id     = $requestData["id"];
		if(!empty($message)){
			$msg_data = $this->Common_Model->FetchData("t_messages", "*" , "deleted_flag =0 AND id = $id");
			$data_list = array(
				"message"		=> $message,
				"from_mobile"	=> $this->session->userdata('mobile'),
				"from_email"	=> $this->session->userdata('email'),
				"from_name"		=> $this->session->userdata('fullname'),
				"from"			=> $this->session->userdata('user_id'),
				"to_mobile"		=> $msg_data[0]['from_mobile'],
				"to_email"		=> $msg_data[0]['from_email'],
				"to_name"		=> $msg_data[0]['from_name'],
				"to"			=> $msg_data[0]['from'],
				"parent_id"		=> $id,
				"created_on"	=> date("Y-m-d H:i:s")
			);
			$message_id = $this->Common_Model->dbinsertid("t_messages", $data_list);
			if($message_id > 0){
				$udata_list = array(
					"replay"	=> 1
				);
				$this->Common_Model->update_records('t_messages', 'id', $id, $udata_list);
				echo json_encode(array('status' => 200, 'msg' => 'Message sent successfully'));exit;
			}else{
				echo json_encode(array('status' => 500, 'msg' => 'Something went wrong, while sending message.'));exit;
			}
		}else{
			echo json_encode(array('status' => 500, 'msg' => 'Something went wrong!Try later.'));exit;
		}
	}

	/********* Start :: Site Ajax *********/
	function productquickview(){
		$response = array();
		$requestData    = $this->input->post();
		$pId = data_enc('decrypt' , $requestData['encId']);
		if($pId>0){
			$productdetails = $this->Common_Model->db_query("SELECT A.*,B.company_name,C.brand_name FROM t_product A LEFT JOIN vendor_details B ON A.vendor_id = B.user_id LEFT JOIN m_brand C ON A.brand_id = C.brand_id WHERE A.deleted_flag = 0 AND A.product_id = ".$pId);

			$product_features_data= $this->Common_Model->FetchData("t_product_features", "*", "product_id = $pId and deleted_flag = 0");
			if(!empty($productdetails)){
				$response['productdetails'] = $productdetails[0];
				$response['product_features_data'] = $product_features_data;
			}
		}
	    echo json_encode(array('status' => 200, 'res' => $response));exit;
	}

	function addtocart(){
		$response = array();
		$requestData    = $this->input->post(); //echo "<pre>";print_r($requestData);exit;
		$pid = $requestData['pid'];
		$qty = $requestData['qty'];
		if($pid>0 && $qty>0){

			$productdetails = $this->Common_Model->db_query("SELECT * FROM t_product WHERE product_id = ".$pid);
			//echo "<pre>";print_r($productdetails);exit;
			$price = $productdetails[0]['product_price'];
			$total_price = $productdetails[0]['product_price']*$qty;
			$user_id = ($this->session->userdata('user_id')>0) ? $this->session->userdata('user_id') : 0 ;
			
			if(!empty($_SESSION['bill_id'])){
				$bill_id = $_SESSION['bill_id'];
			}else{
				$bill_id = time().rand(1000,9999);
				$_SESSION['bill_id'] = $bill_id;
			}

			if(count($requestData['attrVals'])>0){
				$product_attributes = implode(',',$requestData['attrVals']);
			}else{
				$product_attributes = '';
			}	

			//echo $product_attributes ;exit;

			$product_exist = $this->Common_Model->db_query("SELECT * FROM t_cart WHERE deleted_flag = 0 AND cart_status = 0 AND bill_id = '".$bill_id."' AND product_id = ".$pid);
			if(!empty($product_exist)){
				$qty = $qty + $product_exist[0]['quantity'];
				$total_price = $productdetails[0]['product_price']*$qty;
				$data_list = array(
					"product_id"				=> $pid,
					"quantity"					=> $qty,
					"price"						=> $price,
					"total_price"				=> $total_price,
					"user_id"					=> $user_id,
					"bill_id"					=> $bill_id,
					"product_attributes"		=> $product_attributes,
				);
				$this->Common_Model->update_records('t_cart', 'cart_id', $product_exist[0]['cart_id'], $data_list);
			}else{				
				$data_list = array(
					"product_id"				=> $pid,
					"quantity"					=> $qty,
					"price"						=> $price,
					"total_price"				=> $total_price,
					"user_id"					=> $user_id,
					"created_by"				=> $user_id,
					"bill_id"					=> $bill_id,
					"product_attributes"		=> $product_attributes,
				);
				$cart_id = $this->Common_Model->dbinsertid("t_cart", $data_list);
			}
			$cart = $this->Common_Model->db_query("SELECT * FROM t_cart WHERE cart_status = 0 AND bill_id = '".$bill_id."'");
			echo json_encode(array('status' => 200, 'res' => $cart));exit;
		}
	}

	function updatecart(){
		if($this->session->userdata('user_id') > 0){
		    $bill = $this->session->userdata('bill_id');
			$user_data = array(
				'user_id' => $this->session->userdata('user_id')
			);
			$this->Common_Model->update_records('t_cart', 'bill_id', $bill, $user_data);
			$cart = $this->Common_Model->db_query("SELECT C.*, P.product_slug, P.category_id, P.vendor_id, P.product_name, P.product_desc, P.product_price, P.brand_id, P.product_image,V.company_name,B.brand_name FROM t_cart C LEFT JOIN t_product P ON C.product_id = P.product_id LEFT JOIN vendor_details V ON P.vendor_id = V.user_id LEFT JOIN m_brand B ON P.brand_id = B.brand_id WHERE C.deleted_flag = 0 AND C.cart_status = 0 AND C.user_id = ".$this->session->userdata('user_id'));
		}else{
			
			if(!empty($_SESSION['bill_id'])){
				$cart = $this->Common_Model->db_query("SELECT C.*, P.product_slug, P.category_id, P.vendor_id, P.product_name, P.product_desc, P.product_price, P.brand_id, P.product_image,V.company_name,B.brand_name FROM t_cart C LEFT JOIN t_product P ON C.product_id = P.product_id LEFT JOIN vendor_details V ON P.vendor_id = V.user_id LEFT JOIN m_brand B ON P.brand_id = B.brand_id WHERE C.deleted_flag = 0 AND C.cart_status = 0 AND C.bill_id = '".$_SESSION['bill_id']."'");
			}else{
				$cart = array();
			}		
		}
		echo json_encode(array('status' => 200, 'res' => $cart));exit;
	}

	function deletecartitem(){	
		$response = array();
		$requestData    = $this->input->post();
		$cart_id = $requestData['cart_id'];
		if($cart_id>0){
			$data_list = array(
			"deleted_flag"	=> 1
			);
			$this->Common_Model->update_records('t_cart', 'cart_id', $cart_id, $data_list);
		}
		echo json_encode(array('status' => 200));exit;	
	}

	function sort(){	
		$response = array();
		$requestData    = $this->input->post();
		$type = $requestData['type'];
		$category_id = $requestData['category_id'];
		$qry = "SELECT A.*,B.company_name,C.brand_name FROM t_product A LEFT JOIN vendor_details B ON A.vendor_id = B.user_id LEFT JOIN m_brand C ON A.brand_id = C.brand_id WHERE A.deleted_flag = 0 ";
		if($category_id > 0){
			$allChildCategoryIds = $this->Common_Model->allChildCategory($category_id);
	        if(!empty($allChildCategoryIds)){
	            $allChildCategoryIds = rtrim($category_id.','.$allChildCategoryIds,',');
				$qry .= " AND A.category_id IN(".$allChildCategoryIds.") ";
			}else{
				$qry .= " AND A.category_id = $category_id ";
			}
		}
		switch ($type) {
	  		case "sortbylatest":
	  			$qry .= " order by A.created_on desc ";
	  		break;
	  		case "sortbypopularity":
	  			$qry .= " order by A.created_on desc ";	  			
	  		break;
	  		case "sortbyaveragerating":
	  			$qry .= " order by A.created_on desc ";
	  		break;
	  		case "sortbypricelowtohigh":
	  			$qry .= " order by A.product_price asc ";
	  		break;
	  		case "sortbypricehightolow":
	  			$qry .= " order by A.product_price desc ";
	  		break;  
	  	}

  		//echo $qry;exit;
  		$product = $this->Common_Model->db_query($qry);
	  	if(!empty($product)){
	  		foreach ($product as $key => $pvalue) {
	  			$pvalue['product_encId'] = data_enc('encrypt',$pvalue['product_id']);
	  			$pvalue['vendor_encId'] = data_enc('encrypt',$pvalue['vendor_id']);

				$product_features_data= $this->Common_Model->FetchData("t_product_features", "*", "product_id = $pvalue[product_id] and deleted_flag = 0");
				//echo "<pre>";print_r($product_features_data);//exit;
				if(!empty($product_features_data)){
					$pvalue['product_features_data'] = $product_features_data;
				}else{
					$pvalue['product_features_data'] = array();
				}

				array_push($response, $pvalue);
	  		}	  		
	  	}

		echo json_encode(array('status' => 200, 'res' => $response));exit;
	}
	
	function filterProducts(){	
		$response = array();
		$requestData      = $this->input->post();//echo "<pre>";print_r($requestData);exit;
		$category_id      = (!empty($requestData['category_id']))?$requestData['category_id']:0;
		$filterSort       = (!empty($requestData['filterSort']))?$requestData['filterSort']:'';
		$filteredBrandIds = (!empty($requestData['filteredBrandIds']))?$requestData['filteredBrandIds']:NULL;
		$minPrice 		  = (!empty($requestData['minPrice']))?$requestData['minPrice']:0;
		$maxPrice		  = (!empty($requestData['maxPrice']))?$requestData['maxPrice']:0;
		$filteredAttrValIds = (!empty($requestData['filteredAttrValIds']))?$requestData['filteredAttrValIds']:NULL;

		$qry = "SELECT A.*,B.company_name,C.brand_name FROM t_product A LEFT JOIN vendor_details B ON A.vendor_id = B.user_id LEFT JOIN m_brand C ON A.brand_id = C.brand_id LEFT JOIN t_product_attribute D ON A.product_id = D.product_id WHERE A.deleted_flag = 0 ";
		if($category_id = 0 && $_SESSION['header_search_category']>=0){
	        $category_id = $_SESSION['header_search_category'];
	    }
	    if($category_id == 0 && $_SESSION['header_search_txt'] != ''){
	        $qry .= " AND A.product_name like  '%".$_SESSION['header_search_txt']."%' ";
	    }
		if($category_id > 0){
			$allChildCategoryIds = $this->Common_Model->allChildCategory($category_id);
	        if(!empty($allChildCategoryIds)){
	            $allChildCategoryIds = rtrim($category_id.','.$allChildCategoryIds,',');
				$qry .= " AND A.category_id IN(".$allChildCategoryIds.") ";
			}else{
				$qry .= " AND A.category_id = $category_id ";
			}
		}
		if(count($filteredBrandIds)>0){
			$allBrandIds = implode(',',$filteredBrandIds);
			$qry .= " AND A.brand_id IN(".$allBrandIds.") ";
		}
		if(count($filteredAttrValIds)>0){
			$allfilteredAttrValIds = implode(',',$filteredAttrValIds);
			$qry .= " AND D.attribute_value_id IN(".$allfilteredAttrValIds.") ";			
			$qry .= " AND D.deleted_flag = 0 ";
		}
		if($minPrice>0){
			$qry .= " AND A.product_price >= $minPrice";
		}
		if($maxPrice>0){
			$qry .= " AND A.product_price <= $maxPrice";
		}

		$qry .= " group by A.product_id";

		switch ($filterSort) {
	  		case "sortbylatest":
	  			$qry .= " order by A.created_on desc ";
	  		break;
	  		case "sortbypopularity":
	  			$qry .= " order by A.created_on desc ";	  			
	  		break;
	  		case "sortbyaveragerating":
	  			$qry .= " order by A.created_on desc ";
	  		break;
	  		case "sortbypricelowtohigh":
	  			$qry .= " order by A.product_price asc ";
	  		break;
	  		case "sortbypricehightolow":
	  			$qry .= " order by A.product_price desc ";
	  		break;  
	  	}

  		// echo $qry;exit;

  		$product = $this->Common_Model->db_query($qry);
	  	if(!empty($product)){
	  		foreach ($product as $key => $pvalue) {
	  			$pvalue['product_encId'] = data_enc('encrypt',$pvalue['product_id']);
	  			$pvalue['vendor_encId'] = data_enc('encrypt',$pvalue['vendor_id']);

				$product_features_data= $this->Common_Model->FetchData("t_product_features", "*", "product_id = $pvalue[product_id] and deleted_flag = 0");
				//echo "<pre>";print_r($product_features_data);//exit;
				if(!empty($product_features_data)){
					$pvalue['product_features_data'] = $product_features_data;
				}else{
					$pvalue['product_features_data'] = array();
				}

				array_push($response, $pvalue);
	  		}	  		
	  	}

		echo json_encode(array('status' => 200, 'res' => $response));exit;
	}

	function headerSearch(){	
		$response = array();
		$requestData      = $this->input->post();
		$_SESSION['header_search_category'] = $requestData['header_search_category'];
		$_SESSION['header_search_txt'] = $requestData['header_search_txt'];
		//echo "<pre>";print_r($requestData);exit;
		echo json_encode(array('status' => 200, 'result' => $_SESSION));exit;
	}

	function validatepincode(){
		$requestData = $this->input->post();
		$pincode     = $requestData["pincode"];
		if(!empty($pincode)){
			$location_data = $this->Common_Model->FetchData('mstr_location',"*","deleted_flag =0 and pincode = '".$pincode."'");
			if($location_data){
				echo json_encode(array('status' => 200, 'res' => $location_data));exit;
			}else{
				echo json_encode(array('status' => 400, 'msg' => 'Sorry!We are not provide service to this location.'));exit;
			}
		}else{
			echo json_encode(array('status' => 500, 'msg' => 'Something went wrong!Try later.'));exit;
		}
	}

	function sendMessage(){
		$requestData = $this->input->post();
		$message     = $requestData["message"];
		if(!empty($message)){
			$data_list = array(
				"message"		=> $message,
				"from_mobile"		=> $this->session->userdata('mobile'),
				"from_email"		=> $this->session->userdata('email'),
				"from_name"		=> $this->session->userdata('fullname'),
				"from"			=> $this->session->userdata('user_id'),
				"created_on"	=> date("Y-m-d H:i:s")
			);
			$message_id = $this->Common_Model->dbinsertid("t_messages", $data_list);
			if($message_id > 0){
				echo json_encode(array('status' => 200, 'msg' => 'Message sent successfully'));exit;
			}else{
				echo json_encode(array('status' => 500, 'msg' => 'Something went wrong, while sending message.'));exit;
			}
		}else{
			echo json_encode(array('status' => 500, 'msg' => 'Something went wrong!Try later.'));exit;
		}
	}

	function sendAttachment(){
		$requestData = $this->input->post();

		//echo "<pre>";print_r($_FILES);exit;

    	if(!empty($_FILES['afile']['name'])){

		// Define new $_FILES array - $_FILES['file']
          $_FILES['file']['name'] = $_FILES['afile']['name'];
          $_FILES['file']['type'] = $_FILES['afile']['type'];
          $_FILES['file']['tmp_name'] = $_FILES['afile']['tmp_name'];
          $_FILES['file']['error'] = $_FILES['afile']['error'];
          $_FILES['file']['size'] = $_FILES['afile']['size'];

          // Set preference
          $config['upload_path'] = 'uploads/message/';
          $config['allowed_types'] = 'jpg|jpeg|png|mp4';
          $config['max_size'] = 1024*5; // max_size in kb
          $config['file_name'] = 'message_'.date("Ymd").'_'.time();
 
          //Load upload library
          $this->load->library('upload',$config); 
          $this->upload->initialize($config);
 
        	// File upload
        	if($this->upload->do_upload('file')){
            // Get data about the file
	            $uploadData = $this->upload->data();
	            $afile = $uploadData['file_name'];

	            // Initialize array
	            
				$data_list = array(
					"file"		=> $afile,
					"from_mobile"	=> $this->session->userdata('mobile'),
					"from_email"	=> $this->session->userdata('email'),
					"from_name"		=> $this->session->userdata('fullname'),
					"from"			=> $this->session->userdata('user_id'),
					"created_on"	=> date("Y-m-d H:i:s")
				);
				$message_id = $this->Common_Model->dbinsertid("t_messages", $data_list);
				if($message_id > 0){
					echo json_encode(array('status' => 200, 'msg' => 'Message sent successfully'));exit;
				}else{
					echo json_encode(array('status' => 500, 'msg' => 'Something went wrong, while sending attacment.'));exit;
				}
		    }else{
				echo json_encode(array('status' => 500, 'msg' => 'Something went wrong!Try later.'));exit;
			}    		
		}
	}
	
	function updaterecentlyadd(){
		$product_id = $this->input->post("product_id");
		$recently_added = $this->input->post("recently_added");
		$data_list = array(
			"recently_added"	=> $recently_added
		);
		$this->Common_Model->update_records('t_product', 'product_id', $product_id, $data_list);
		echo json_encode(array('status' => 200));exit;	
	}
	
		function delete_catalogue(){
		$id = $this->input->post("id");
		if(!empty($id)){			
			$data_list = array(
			"deleted_flag"	=> 1
			);
			$this->Common_Model->update_records('t_catalogue_slider', 'id', $id, $data_list);
		}
		echo json_encode(array('status' => 200));exit;	
	}
	
	function delete_promotional(){
		$id = $this->input->post("id");
		if(!empty($id)){			
			$data_list = array(
			"deleted_flag"	=> 1
			);
			$this->Common_Model->update_records('t_promotional_slider', 'id', $id, $data_list);
		}
		echo json_encode(array('status' => 200));exit;	
	}
	
	function filterProductsvendor(){	
		//echo 1111;exit;
		$response = array();
		$vendor_id 		  = $this->session->userdata('user_id');
		$requestData      = $this->input->post();//echo "<pre>";print_r($requestData);exit;
		$category_id      = (!empty($requestData['category_id']))?$requestData['category_id']:0;
		$filterSort       = (!empty($requestData['filterSort']))?$requestData['filterSort']:'';
		$filteredBrandIds = (!empty($requestData['filteredBrandIds']))?$requestData['filteredBrandIds']:NULL;
		$minPrice 		  = (!empty($requestData['minPrice']))?$requestData['minPrice']:0;
		$maxPrice		  = (!empty($requestData['maxPrice']))?$requestData['maxPrice']:0;
		$filteredAttrValIds = (!empty($requestData['filteredAttrValIds']))?$requestData['filteredAttrValIds']:NULL;

		$qry = "SELECT A.*,B.company_name,C.brand_name FROM t_product A LEFT JOIN vendor_details B ON A.vendor_id = B.user_id LEFT JOIN m_brand C ON A.brand_id = C.brand_id LEFT JOIN t_product_attribute D ON A.product_id = D.product_id WHERE A.deleted_flag = 0 AND A.vendor_id = $vendor_id";
		if($category_id = 0 && $_SESSION['header_search_category']>=0){
	        $category_id = $_SESSION['header_search_category'];
	    }
	    if($category_id == 0 && $_SESSION['header_search_txt'] != ''){
	        $qry .= " AND A.product_name like  '%".$_SESSION['header_search_txt']."%' ";
	    }
		if($category_id > 0){
			$allChildCategoryIds = $this->Common_Model->allChildCategory($category_id);
	        if(!empty($allChildCategoryIds)){
	            $allChildCategoryIds = rtrim($category_id.','.$allChildCategoryIds,',');
				$qry .= " AND A.category_id IN(".$allChildCategoryIds.") ";
			}else{
				$qry .= " AND A.category_id = $category_id ";
			}
		}
		if(count($filteredBrandIds)>0){
			$allBrandIds = implode(',',$filteredBrandIds);
			$qry .= " AND A.brand_id IN(".$allBrandIds.") ";
		}
		if(count($filteredAttrValIds)>0){
			$allfilteredAttrValIds = implode(',',$filteredAttrValIds);
			$qry .= " AND D.attribute_value_id IN(".$allfilteredAttrValIds.") ";			
			$qry .= " AND D.deleted_flag = 0 ";
		}
		if($minPrice>0){
			$qry .= " AND A.product_price >= $minPrice";
		}
		if($maxPrice>0){
			$qry .= " AND A.product_price <= $maxPrice";
		}

		$qry .= " group by A.product_id";

		switch ($filterSort) {
	  		case "sortbylatest":
	  			$qry .= " order by A.created_on desc ";
	  		break;
	  		case "sortbypopularity":
	  			$qry .= " order by A.created_on desc ";	  			
	  		break;
	  		case "sortbyaveragerating":
	  			$qry .= " order by A.created_on desc ";
	  		break;
	  		case "sortbypricelowtohigh":
	  			$qry .= " order by A.product_price asc ";
	  		break;
	  		case "sortbypricehightolow":
	  			$qry .= " order by A.product_price desc ";
	  		break;  
	  	}

  		// echo $qry;exit;

  		$product = $this->Common_Model->db_query($qry);
	  	if(!empty($product)){
	  		foreach ($product as $key => $pvalue) {
	  			$pvalue['product_encId'] = data_enc('encrypt',$pvalue['product_id']);
	  			$pvalue['vendor_encId'] = data_enc('encrypt',$pvalue['vendor_id']);

				$product_features_data= $this->Common_Model->FetchData("t_product_features", "*", "product_id = $pvalue[product_id] and deleted_flag = 0");
				//echo "<pre>";print_r($product_features_data);//exit;
				if(!empty($product_features_data)){
					$pvalue['product_features_data'] = $product_features_data;
				}else{
					$pvalue['product_features_data'] = array();
				}

				array_push($response, $pvalue);
	  		}	  		
	  	}

		echo json_encode(array('status' => 200, 'res' => $response));exit;
	}
	
	function updatepromotional(){
		$product_id = $this->input->post("product_id");
		$promotional = $this->input->post("promotional");
		$data_list = array(
			"promotional"	=> $promotional
		);
		$this->Common_Model->update_records('t_product', 'product_id', $product_id, $data_list);
		echo json_encode(array('status' => 200));exit;	
	}
	
	
	
	
	
	
function get_dataBypincode(){
    // Retrieve the pincode from the POST request
    $pincode = $this->input->post("pincode");
    
    // Initialize cURL session
    $curl = curl_init();
    
 
    // Set cURL options
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.postalpincode.in/pincode/' . $pincode,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_HTTPAUTH => CURLAUTH_ANY,
        CURLOPT_TIMEOUT => 30,  // Increased timeout to 30 seconds
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_POSTFIELDS => '',
        CURLOPT_SSL_VERIFYPEER => false, // ← Add this line
        CURLOPT_SSL_VERIFYHOST => false, // ← And this
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
    ));
    
    // Execute the cURL request and fetch the response
    $response = curl_exec($curl);
    
    // Check for cURL errors
    if(curl_errno($curl)) {
        // Print cURL error
        echo 'cURL Error: ' . curl_error($curl);
        curl_close($curl);
        return null;
    }
    
    // Close cURL session
    curl_close($curl);
    
    // Decode the JSON response
    $decodedResponse = json_decode($response, true);
    
    // Print the response (for debugging purposes)
    //print_r($decodedResponse[0]['PostOffice']);exit;
    $postofc = '<option value="">--Select--</option>';
    if ($decodedResponse[0]['PostOffice']) { for ($i=0; $i < count($decodedResponse[0]['PostOffice']); $i++) { 
    	$postofc .= '<option value="'.$decodedResponse[0]['PostOffice'][$i]['Name'].'">'.$decodedResponse[0]['PostOffice'][$i]['Name'].'</option>';
    }}

    if ($decodedResponse[0]['Status']=='Success') {
    		$status = $decodedResponse[0]['Status'];
    		$district = $decodedResponse[0]['PostOffice'][0]['District'];
    		$state = $decodedResponse[0]['PostOffice'][0]['State'];
    		echo json_encode(array("status" => $status, "district" => $district, "state" => $state, "postofc" => $postofc));
    }else{
    		echo json_encode(array("status" => 0, "district" => '', "state" => ''));
    }
    
    // Return the decoded response
    return $response;
	}

	
	/********* End :: Site Ajax *********/

}
