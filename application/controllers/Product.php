<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 $this->perPage = 10;
		 date_default_timezone_set('Asia/Kolkata');
	}

	public function index(){
		//product_code(3);
		is_logged_in();
		$data = array();
		$this->load->helper('url');
		$currentURL = current_url();
		$sql = "1 AND A.deleted_flag = 0";
		if($this->session->userdata('user_type') == 1){
			$sql .= " AND A.vendor_id = ".$this->session->userdata('user_id');
		}
		$queryvars = "";
		$sql.= " ORDER BY A.product_name ASC ";

		// $rows = $this->Common_Model->FetchRows("vendor_details A", "*", "$sql");
		// $data['page_num'] = $page_num = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
		// $this->load->library("Paginator");
		// $this->paginator->setparam(array("page_num" => $page_num, "num_rows" => $rows));
		// $this->paginator->set_Limit(10);
		// $range1 = $this->paginator->getRange1();
		// $range2 = $this->paginator->getRange2();
		// $sql .= " LIMIT ".$range1.', '.$range2;

		//$records = $this->Common_Model->db_query("SELECT A.*,B.category_name,C.brand_name,D.company_name FROM t_product A LEFT JOIN mstr_category B ON A.category_id = B.category_id LEFT JOIN m_brand C ON A.brand_id = C.brand_id LEFT JOIN vendor_details D ON A.vendor_id = D.user_id WHERE ".$sql);
	$records = $this->Common_Model->db_query("
SELECT 
    A.*, 
    B.category_name, 
    E.parent_id, 
    E.category_name AS parent_category, 
    C.brand_name
FROM t_product A
LEFT JOIN mstr_category B ON A.category_id = B.category_id
LEFT JOIN m_brand C ON A.brand_id = C.brand_id
LEFT JOIN mstr_category E ON B.parent_id = E.category_id
WHERE A.deleted_flag = 0;

");




		//$paging_info = $this->paginator->DBPagingNav($queryvars, $currentURL);

		// $data['tot_page'] = $paging_info[0];
		// $data['sPages']   = $paging_info[1];
		//$data['rows']     = $rows;
		$data['records']  = $records;
// 		echo '<pre>';
// print_r($records);
// exit;
// 		$data['mainmenu'] = 'product';
		$data['submenu'] = 'product';
		$this->load->view('admin/product/view_product', $data);
	}	

	public function add($product_id = 0){
		$data = array();

		if($this->input->post('btnProductFeatures')){
			if(!empty($_POST['features'])){
			$dbData = array();
			foreach($_POST['features'] as $fkey => $fval) {
				if(!empty($_POST['features'][$fkey])){
		            $temp['product_id']          = $product_id;
		            $temp['features']  			 = $_POST['features'][$fkey];
		            $temp['created_by']          =  $this->session->userdata('user_id');
		            array_push($dbData, $temp);
				}
	          }
			}

			if(!empty($dbData)){
				$product_features_id  = $this->Common_Model->dbinsertbatch("t_product_features", $dbData);
				if($product_features_id>0){
					$this->session->set_flashdata('success', 'Product features added successfully.' );
				}else{
					$this->session->set_flashdata('error', 'Something went wrong while saving product images.' );
				}
			}else{
				$this->session->set_flashdata('error', 'Nothing has been updated.' );
			}
			redirect($_SERVER['HTTP_REFERER']);
		}

		if($this->input->post('btnProductSpecification')){
			if(!empty($_POST['specification_head'])){
			$dbData = array();
			foreach($_POST['specification_head'] as $specifkey => $specifval) {
				if(!empty($_POST['specification_head'][$specifkey]) && !empty($_POST['specification_value'][$specifkey])){
		            $temp['product_id']          = $product_id;
		            $temp['specification_head']  = $_POST['specification_head'][$specifkey];
		            $temp['specification_value'] = $_POST['specification_value'][$specifkey];
		            $temp['created_by']          =  $this->session->userdata('user_id');
		            array_push($dbData, $temp);
				}
	          }
			}

			if(!empty($dbData)){
				$product_specification_id  = $this->Common_Model->dbinsertbatch("t_product_specification", $dbData);
				if($product_specification_id>0){
					$this->session->set_flashdata('success', 'Product specification added successfully.' );
				}else{
					$this->session->set_flashdata('error', 'Something went wrong while saving product images.' );
				}
			}else{
				$this->session->set_flashdata('error', 'Nothing has been updated.' );
			}
			redirect($_SERVER['HTTP_REFERER']);
		}
		
		if($this->input->post('btnProductAttribute')){
			if(!empty($_POST['attribute_id'])){
			$dbData = array();
			foreach ($_POST['attribute_id'] as $attrkey => $attrval) {
				if(!empty($_POST['attribute_id'][$attrkey]) && !empty($_POST['attribute_value'][$attrkey])){
		            $temp['product_id']          = $product_id;
		            $temp['attribute_id']        = $_POST['attribute_id'][$attrkey];
		            $temp['attribute_value_id']  = $_POST['attribute_value'][$attrkey];
		            $temp['created_by']          =  $this->session->userdata('user_id');
		            array_push($dbData, $temp);
				}
	          }
			}

			if(!empty($dbData)){
				$product_attribute_id  = $this->Common_Model->dbinsertbatch("t_product_attribute", $dbData);
				if($product_attribute_id>0){
					$this->session->set_flashdata('success', 'Product attributes added successfully.' );
				}else{
					$this->session->set_flashdata('error', 'Something went wrong while saving product images.' );
				}
			}else{
				$this->session->set_flashdata('error', 'Nothing has been updated.' );
			}
			redirect($_SERVER['HTTP_REFERER']);
		}		

		if($this->input->post('btnPimgSubmit')){
			//echo "<pre>";print_r($_FILES);exit;
			if(!empty($_FILES['product_images']['name'])){
				$dbData = array();
				foreach ($_FILES['product_images']['name'] as $pikey => $product_images) {

				  // Define new $_FILES array - $_FILES['file']
		          $_FILES['file']['name'] = $_FILES['product_images']['name'][$pikey];
		          $_FILES['file']['type'] = $_FILES['product_images']['type'][$pikey];
		          $_FILES['file']['tmp_name'] = $_FILES['product_images']['tmp_name'][$pikey];
		          $_FILES['file']['error'] = $_FILES['product_images']['error'][$pikey];
		          $_FILES['file']['size'] = $_FILES['product_images']['size'][$pikey];

		          // Set preference
		          $config['upload_path'] = 'uploads/product/';
		          $config['allowed_types'] = 'jpg|jpeg|png|mp4|avi|mov|doc';
		          $config['max_size'] = '1024'; // max_size in kb
		          $config['file_name'] = 'Product_'.date("Ymd").'_'.time();
		 
		          //Load upload library
		          $this->load->library('upload',$config); 
		          $this->upload->initialize($config);
		 
		          // File upload
		          if($this->upload->do_upload('file')){
		            // Get data about the file
		            $uploadData = $this->upload->data();
		            $product_image = $uploadData['file_name'];

		            // Initialize array
		            $temp['product_id']    = $product_id;
		            $temp['product_image'] = $product_image;
		            $temp['created_by'] =  $this->session->userdata('user_id');
		            array_push($dbData, $temp);
		          }

				}

                //print_r($dbData);exit;

				if(!empty($dbData)){
					$product_image_id  = $this->Common_Model->dbinsertbatch("t_product_image", $dbData);
					if($product_image_id>0){
						$this->session->set_flashdata('success', 'Product Images added successfully.' );
					}else{
						$this->session->set_flashdata('error', 'Something went wrong while saving product images.' );
					}
				}else{
					$this->session->set_flashdata('error', 'Nothing has been updated.' );
				}
				redirect($_SERVER['HTTP_REFERER']);
			}
		}

		if($this->input->post('btnSubmit')){
			$this->form_validation->set_rules('category_id', 'Category', 'trim|required');
			$this->form_validation->set_rules('product_name', 'Product Name', 'trim|required');
			$this->form_validation->set_rules('product_slug', 'Product Slug', 'trim|required');
			$this->form_validation->set_rules('product_price', 'Product Price', 'trim|required');
			$this->form_validation->set_error_delimiters('<p class="has-error"><label class="control-label">', '</label></p>');
			if($this->form_validation->run()){

				// echo "<pre>";print_r($_FILES);exit;

				// Product image upload //
		        if(!empty($_FILES['product_image']['name'])){
	                $config['upload_path'] 	 = 'uploads/product/';
	                $config['allowed_types'] = 'jpg|jpeg|png';
	                $config['file_name'] 	 = 'Product_'.date("Ymd").'_'.time();
	                $config['max_size']      = '1024';
	                //Load upload library and initialize configuration
	                $this->load->library('upload',$config);
	                $this->upload->initialize($config);
	                
	                if($this->upload->do_upload('product_image')){
	                    $uploadData = $this->upload->data();
	                    $product_image = $uploadData['file_name'];
	                }else{
	                    $product_image = '';
	                }
	            }else{
	                $product_image = $this->input->post("old_product_image");
	            }
				// Product image upload //

				$data_list = array(
					"category_id"			=> $this->input->post("category_id"),
					"product_name"			=> $this->input->post("product_name"),
					"product_slug"			=> $this->input->post("product_slug"),
					"product_desc"			=> $this->input->post("product_desc"),
					"product_price"			=> $this->input->post("product_price"),
					// "actual_price"			=> $this->input->post("regular_price"),
					"brand_id"				=> $this->input->post("brand_id"),
					"product_image"			=> $product_image,
					"product_seo_meta_tag"	=> $this->input->post("product_seo_meta_tag"),
					"vendor_id"				=> $this->session->userdata('user_id'),
					"created_by"			=> $this->session->userdata('user_id'),
					"rk_no"					=> $this->input->post('rk_no'),
					"code_no"				=> $this->input->post('code_no'),
					"description"			=> $this->input->post('description')

				);


// 		echo "<pre>";
// print_r($data_list);
// echo "</pre>";
// exit;

				if($product_id>0){
					$this->Common_Model->update_records('t_product', 'product_id', $product_id, $data_list);
					product_code($product_id);
					$this->session->set_flashdata('success', 'Product Updated successfully.' );
				}else{					
					$product_last_id = $this->Common_Model->dbinsertid("t_product", $data_list);
					product_code($product_last_id);
					$this->session->set_flashdata('success', 'Product Added successfully.' );
				}
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata("error", validation_errors());
			}
		}
		$data['mainmenu']  = 'product';
		$data['submenu']   = 'product';
		$data['strAction'] = ($product_id == 0)?'Add':'Edit';
		$data['strButton'] = ($product_id == 0)?'Submit':'Update';
		$data['product_id'] = $product_id;

		$data['category_list']   = $this->Common_Model->FetchData("mstr_category", "*", "deleted_status = 0");
		if($product_id > 0){
			$data['product_data'] = $this->Common_Model->FetchData("t_product", "*", "product_id = $product_id");
			$data['product_images_data'] = $this->Common_Model->FetchData("t_product_image", "*", "product_id = $product_id and deleted_flag = 0");
			$data['product_attr_data'] = $this->Common_Model->db_query("SELECT A.*,B.attribute_name,C.attribute_value FROM t_product_attribute A LEFT JOIN m_attribute B ON A.attribute_id = B.attribute_id LEFT JOIN m_attribute_value C ON A.attribute_value_id = C.attribute_value_id WHERE A.product_id = $product_id and A.deleted_flag = 0");
			$data['product_specif_data'] = $this->Common_Model->FetchData("t_product_specification", "*", "product_id = $product_id and deleted_flag = 0");
			$data['product_features_data'] = $this->Common_Model->FetchData("t_product_features", "*", "product_id = $product_id and deleted_flag = 0");
			// echo '<pre>';print_r($data['product_attr_data']);exit;
		}

		$this->load->view('admin/product/add_product', $data);
	}

	public function edit($product_id = 0){
		$this->add($product_id);
	}
public function delete($product_id = 0) {
    
    // Check if product_id is valid
    if ($product_id == 0 || empty($product_id)) {
        $this->session->set_flashdata('error', 'Invalid Product ID.');
        redirect("product");
        return;
    }

    // Prepare data to mark as deleted
    $data_list = array(
        "deleted_flag" => 1
    );

    // Update the record
    $this->db->where('product_id', $product_id);
    $this->db->update('t_product', $data_list);

    if ($this->db->affected_rows() > 0) {
        $this->session->set_flashdata('success', 'Record deleted successfully.');
    } else {
        $this->session->set_flashdata('error', 'Record not found or already deleted.');
    }

    redirect("product");
}


	public function stock($product_id = 0){		
		$data = array();
    	if($this->input->post('btnSubmit')){
			$this->form_validation->set_rules('stock', 'Stock', 'trim|required');
			$this->form_validation->set_error_delimiters('<p class="has-error"><label class="control-label">', '</label></p>');
			if($this->form_validation->run()){			

				$data_list = array(
					"product_id"			=> $product_id,
					"stock"					=> $this->input->post("stock"),
					"created_by"			=> $this->session->userdata('user_id'),
					"created_on"			=> date('Y-m-d H:i:s')

				);			
				$last_id = $this->Common_Model->dbinsertid("t_stock", $data_list);
				$this->session->set_flashdata('success', 'Stock Added successfully.' );
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata("error", validation_errors());
			}
		}

		$data['product_data'] = $this->Common_Model->FetchData("t_product", "*", "product_id = $product_id"); 

		//echo '<pre>';print_r($data['product_data']);exit;

		$total_stock = $this->Common_Model->db_query("SELECT SUM(stock) as total_stock FROM t_stock  WHERE deleted_flag = 0 AND product_id = ".$product_id." AND stock > 0 ");
		$data['total_stock']  = $total_stock[0]['total_stock'];

		$in_stock = $this->Common_Model->db_query("SELECT SUM(stock) as in_stock FROM t_stock  WHERE deleted_flag = 0 AND product_id = ".$product_id);
		$data['in_stock']  = $in_stock[0]['in_stock'];

		$out_stock = $this->Common_Model->db_query("SELECT SUM(stock) as out_stock FROM t_stock  WHERE deleted_flag = 0 AND product_id = ".$product_id." AND stock < 0 ");
		$data['out_stock']  = $out_stock[0]['out_stock'];

		$this->load->view('admin/product/product_stock', $data);
	}
}
