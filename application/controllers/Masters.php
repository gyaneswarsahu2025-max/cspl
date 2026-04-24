<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masters extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->perPage = 10;
		is_logged_in();
		date_default_timezone_set('Asia/Kolkata');
	}

	public function index()
	{
		redirect('dashboard');
	}

	public function homeslider(){
		if($this->input->post('btnPimgSubmit')){
			//echo "<pre>";print_r($this->input->post("link"));exit;
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
		          $config['upload_path'] = 'uploads/home/';
		          $config['allowed_types'] = 'jpg|jpeg|png';
		          $config['max_size'] = '1024'; // max_size in kb
		          $config['file_name'] = 'Home_Slider_'.date("Ymd").'_'.time();
		 
		          //Load upload library
		          $this->load->library('upload',$config); 
		          $this->upload->initialize($config);
		 
		          // File upload
		          if($this->upload->do_upload('file')){
		            // Get data about the file
		            $uploadData = $this->upload->data();
		            $product_image = $uploadData['file_name'];

		            // Initialize array
		            $temp['image'] = $product_image;
		            $temp['link'] =  $this->input->post("link")[$pikey];
		            $temp['created_on'] =  date("Y-m-d H:i:s");
		            array_push($dbData, $temp);
		          }

				}
                //echo "<pre>";print_r($dbData);exit;
				if(!empty($dbData)){
					$product_image_id  = $this->Common_Model->dbinsertbatch("t_home_slider", $dbData);
					if($product_image_id>0){
						$this->session->set_flashdata('success', 'Slider Images added successfully.' );
					}else{
						$this->session->set_flashdata('error', 'Something went wrong while saving product images.' );
					}
				}else{
					$this->session->set_flashdata('error', 'Nothing has been updated.' );
				}
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
		
		
		if($this->input->post('btnPromSubmit')){
			//echo "<pre>";print_r($this->input->post("link"));exit;
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
		          $config['upload_path'] = 'uploads/home/';
		          $config['allowed_types'] = 'jpg|jpeg|png';
		          $config['max_size'] = '1024'; // max_size in kb
		          $config['file_name'] = 'Home_Slider_'.date("Ymd").'_'.time();
		 
		          //Load upload library
		          $this->load->library('upload',$config); 
		          $this->upload->initialize($config);
		 
		          // File upload
		          if($this->upload->do_upload('file')){
		            // Get data about the file
		            $uploadData = $this->upload->data();
		            $product_image = $uploadData['file_name'];

		            // Initialize array
		            $temp['image'] = $product_image;
		            $temp['link'] =  $this->input->post("link")[$pikey];
		            $temp['created_on'] =  date("Y-m-d H:i:s");
		            $temp['user_id']     = $this->session->userdata('user_id');
		            array_push($dbData, $temp);
		          }

				}
                //echo "<pre>";print_r($dbData);exit;
				if(!empty($dbData)){
					$product_image_id  = $this->Common_Model->dbinsertbatch("t_promotional_slider", $dbData);
					if($product_image_id>0){
						$this->session->set_flashdata('success', 'Promotional Images added successfully.' );
					}else{
						$this->session->set_flashdata('error', 'Something went wrong while saving product images.' );
					}
				}else{
					$this->session->set_flashdata('error', 'Nothing has been updated.' );
				}
				redirect($_SERVER['HTTP_REFERER']);
			}
		}

		if($this->input->post('btnSideImgSubmit')){
			//echo "<pre>";print_r($_FILES);exit;
				// Product image upload //
		        if(!empty($_FILES['side_image1']['name'])){
	                $config['upload_path'] 	 = 'uploads/home/';
	                $config['allowed_types'] = 'jpg|jpeg|png';
	                $config['file_name'] 	 = 'homeslider_side_'.date("Ymd").'_'.time();
	                $config['max_size']      = '1024';
	                //Load upload library and initialize configuration
	                $this->load->library('upload',$config);
	                $this->upload->initialize($config);
	                
	                if($this->upload->do_upload('side_image1')){
	                    $uploadData = $this->upload->data();
	                    $side_image1 = $uploadData['file_name'];
	                }else{
	                    $side_image1 = '';
	                }
	            }else{
	                $side_image1 = $this->input->post("old_side_image1");
	            }
				// Product image upload //

				// Product image upload //
		        if(!empty($_FILES['side_image2']['name'])){
	                $config['upload_path'] 	 = 'uploads/home/';
	                $config['allowed_types'] = 'jpg|jpeg|png';
	                $config['file_name'] 	 = 'homeslider_side_'.date("Ymd").'_'.time();
	                $config['max_size']      = '1024';
	                //Load upload library and initialize configuration
	                $this->load->library('upload',$config);
	                $this->upload->initialize($config);
	                
	                if($this->upload->do_upload('side_image2')){
	                    $uploadData = $this->upload->data();
	                    $side_image2 = $uploadData['file_name'];
	                }else{
	                    $side_image2 = '';
	                }
	            }else{
	                $side_image2 = $this->input->post("old_side_image2");
	            }
				// Product image upload //

				// Product image upload //
		        if(!empty($_FILES['bottom_image1']['name'])){
	                $config['upload_path'] 	 = 'uploads/home/';
	                $config['allowed_types'] = 'jpg|jpeg|png';
	                $config['file_name'] 	 = 'homeslider_bottom_'.date("Ymd").'_'.time();
	                $config['max_size']      = '1024';
	                //Load upload library and initialize configuration
	                $this->load->library('upload',$config);
	                $this->upload->initialize($config);
	                
	                if($this->upload->do_upload('bottom_image1')){
	                    $uploadData = $this->upload->data();
	                    $bottom_image1 = $uploadData['file_name'];
	                }else{
	                    $bottom_image1 = '';
	                }
	            }else{
	                $bottom_image1 = $this->input->post("old_bottom_image1");
	            }
				// Product image upload //

				// Product image upload //
		        if(!empty($_FILES['bottom_image2']['name'])){
	                $config['upload_path'] 	 = 'uploads/home/';
	                $config['allowed_types'] = 'jpg|jpeg|png';
	                $config['file_name'] 	 = 'homeslider_bottom_'.date("Ymd").'_'.time();
	                $config['max_size']      = '1024';
	                //Load upload library and initialize configuration
	                $this->load->library('upload',$config);
	                $this->upload->initialize($config);
	                
	                if($this->upload->do_upload('bottom_image2')){
	                    $uploadData = $this->upload->data();
	                    $bottom_image2 = $uploadData['file_name'];
	                }else{
	                    $bottom_image2 = '';
	                }
	            }else{
	                $bottom_image2 = $this->input->post("old_bottom_image2");
	            }
				// Product image upload //

				// Product image upload //
		        if(!empty($_FILES['bottom_image3']['name'])){
	                $config['upload_path'] 	 = 'uploads/home/';
	                $config['allowed_types'] = 'jpg|jpeg|png';
	                $config['file_name'] 	 = 'homeslider_bottom_'.date("Ymd").'_'.time();
	                $config['max_size']      = '1024';
	                //Load upload library and initialize configuration
	                $this->load->library('upload',$config);
	                $this->upload->initialize($config);
	                
	                if($this->upload->do_upload('bottom_image3')){
	                    $uploadData = $this->upload->data();
	                    $bottom_image3 = $uploadData['file_name'];
	                }else{
	                    $bottom_image3 = '';
	                }
	            }else{
	                $bottom_image3 = $this->input->post("old_bottom_image3");
	            }
				// Product image upload //

				$data_list = array(
					"side_image1"			=> $side_image1,
					"side_image1_link"		=> $this->input->post("side_image1_link"),
					"side_image2"			=> $side_image2,
					"side_image2_link"		=>  $this->input->post("side_image2_link"),
					"bottom_image1"			=> $bottom_image1,
					"bottom_image1_link"	=>  $this->input->post("bottom_image1_link"),
					"bottom_image2"			=> $bottom_image2,
					"bottom_image2_link"	=>  $this->input->post("bottom_image2_link"),
					"bottom_image3"			=> $bottom_image3,
					"bottom_image3_link"	=>  $this->input->post("bottom_image3_link")
				);
				
				//echo "<pre>";print_r($data_list);exit;

				$this->Common_Model->update_records('m_home_image', 'id', 1 , $data_list);
				$this->session->set_flashdata('success', 'Image Updated successfully.' );
				redirect($_SERVER['HTTP_REFERER']);
		}
		
        $uid = $this->session->userdata('user_id');
        $data['t_promotional'] = $this->Common_Model->FetchData("t_promotional_slider", "*", "deleted_flag = 0 AND user_id = $uid");
		$data['homeslider_data'] = $this->Common_Model->FetchData("t_home_slider", "*", "deleted_flag = 0");
		$data['home_data'] = $this->Common_Model->FetchData("m_home_image", "*", "id = 1");
		$data['mainmenu'] = 'masters';
		$data['submenu']  = 'homeslider';
		//echo "<pre>";print_r($data);exit;
		$this->load->view('admin/masters/homeslider', $data);
	}


	public function location(){
		$this->load->helper('url');
		$currentURL = current_url();
		$data = array();
		$sql = "1 AND deleted_flag = 0";
		$queryvars = "";

		$sql.= " ORDER BY location_name ASC ";
		$rows = $this->Common_Model->FetchRows("mstr_location", "*", "$sql");
		$data['page_num'] = $page_num = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
		$this->load->library("Paginator");
		$this->paginator->setparam(array("page_num" => $page_num, "num_rows" => $rows));
		$this->paginator->set_Limit(10);
		$range1 = $this->paginator->getRange1();
		$range2 = $this->paginator->getRange2();

		$sql .= " LIMIT ".$range1.', '.$range2;

		$records = $this->Common_Model->db_query("SELECT * FROM mstr_location WHERE ".$sql);

		$paging_info = $this->paginator->DBPagingNav($queryvars, $currentURL);

		$data['tot_page'] = $paging_info[0];
		$data['sPages']   = $paging_info[1];
		$data['rows']     = $rows;
		$data['records']  = $records;
		$data['mainmenu'] = 'masters';
		$data['submenu']  = 'location';
		$this->load->view('admin/masters/location', $data);
	}


	public function add_edit_location($location_id=0){
		$data = array();
		if($this->input->post('submitBtn')){
			$this->form_validation->set_rules('location_name', 'Location Name', 'trim|required');
			$this->form_validation->set_rules('location_status', 'Location Status', 'trim|required');
			$this->form_validation->set_error_delimiters('<p class="has-error"><label class="control-label">', '</label></p>');
			if($this->form_validation->run()){
				if($location_id > 0){
					$chk_loc = $this->Common_Model->db_query("SELECT COUNT(1) as cnt FROM mstr_location WHERE location_name = '".$this->input->post("location_name")."' AND deleted_flag = 0 AND location_id NOT IN (".$location_id.")");
				}else{
					$chk_loc = $this->Common_Model->db_query("SELECT COUNT(1) as cnt FROM mstr_location WHERE location_name = '".$this->input->post("location_name")."' AND deleted_flag = 0");
				}
				if($chk_loc[0]['cnt']>0){
					$this->session->set_flashdata("error", 'Duplicate location found !!! ');
					redirect($_SERVER['HTTP_REFERER']);
				}
				$data_list = array(
					"location_name"		=> $this->input->post("location_name"),
					"pincode"		=> $this->input->post("pincode"),
					"delivery_cost"		=> $this->input->post("delivery_cost"),
					"location_status"	=> $this->input->post("location_status")
				);
				
				if($location_id > 0){
					$this->Common_Model->update_records('mstr_location', 'location_id', $location_id, $data_list);
					$this->session->set_flashdata('success', 'Record Updated successfully.' );
				}else{
					$this->Common_Model->dbinsertid("mstr_location", $data_list);
					$this->session->set_flashdata('success', 'Record Added successfully.' );
				}
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata("error", validation_errors());
			}
		}
		$data['mainmenu'] = 'masters';
		$data['submenu'] = 'subjects';
		$data['location_data'] = array();
		if($location_id > 0){
			$data['location_data'] = $this->Common_Model->FetchData("mstr_location", "*", "location_id = $location_id");
			//echo '<pre>';print_r($data['location_data']);exit;
		}
		$this->load->view('admin/masters/add_edit_location', $data);
	}


	function delete_location($location_id = 0){
		$data_list = array(
			"deleted_flag"		=> 1
		);
		$this->Common_Model->update_records('mstr_location', 'location_id', $location_id, $data_list);
		redirect("masters/location");
	}


	public function category(){
		$this->load->helper('url');
		$currentURL = current_url();
		$data = array();
		$sql = "1 AND A.deleted_status = 0";
		$queryvars = "";

		$sql.= " ORDER BY A.category_name ASC ";
		$rows = $this->Common_Model->FetchRows("mstr_category A", "*", "$sql");
		$data['page_num'] = $page_num = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
		$this->load->library("Paginator");
		$this->paginator->setparam(array("page_num" => $page_num, "num_rows" => $rows));
		$this->paginator->set_Limit(10);
		$range1 = $this->paginator->getRange1();
		$range2 = $this->paginator->getRange2();

		$sql .= " LIMIT ".$range1.', '.$range2;

		$records = $this->Common_Model->db_query("SELECT A.*,B.category_name AS parent_category_name FROM mstr_category A LEFT JOIN mstr_category B ON (A.parent_id = B.category_id) WHERE ".$sql);

		$paging_info = $this->paginator->DBPagingNav($queryvars, $currentURL);

		$data['tot_page'] = $paging_info[0];
		$data['sPages']   = $paging_info[1];
		$data['rows']     = $rows;
		$data['records']  = $records;
		$data['mainmenu'] = 'masters';
		$data['submenu']  = 'location';
		$this->load->view('admin/masters/category', $data);
	}


	public function add_edit_category($category_id=0){
		$data = array();
		if($this->input->post('submitBtn')){
			$this->form_validation->set_rules('category_name', 'Category Name', 'trim|required');
			$this->form_validation->set_rules('category_status', 'Category Status', 'trim|required');
			$this->form_validation->set_rules('parent_id', 'Parent Category', 'trim');
			$this->form_validation->set_error_delimiters('<p class="has-error"><label class="control-label">', '</label></p>');
			if($this->form_validation->run()){
				if($category_id > 0){
					$chk_loc = $this->Common_Model->db_query("SELECT COUNT(1) as cnt FROM mstr_category WHERE category_name = '".$this->input->post("category_name")."' AND deleted_status = 0 AND category_id NOT IN (".$category_id.")");
				}else{
					$chk_loc = $this->Common_Model->db_query("SELECT COUNT(1) as cnt FROM mstr_category WHERE category_name = '".$this->input->post("category_name")."' AND deleted_status = 0");
				}
				if($chk_loc[0]['cnt']>0){
					$this->session->set_flashdata("error", 'Duplicate category found !!! ');
					redirect($_SERVER['HTTP_REFERER']);
				}

				// category image upload //
		        if(!empty($_FILES['category_image']['name'])){
	                $config['upload_path'] 	 = 'uploads/category/';
	                $config['allowed_types'] = 'jpg|jpeg|png';
	                $config['file_name'] 	 = 'Category_'.date("Ymd").'_'.time();
	                $config['max_size']      = '1024';
	                //Load upload library and initialize configuration
	                $this->load->library('upload',$config);
	                $this->upload->initialize($config);
	                
	                if($this->upload->do_upload('category_image')){
	                    $uploadData = $this->upload->data();
	                    $category_image = $uploadData['file_name'];
	                }else{
	                    $category_image = '';
	                }
	            }else{
	                $category_image = $this->input->post("old_category_image");
	            }
				// category image upload //

				$data_list = array(
					"category_name"		=> $this->input->post("category_name"),
					"parent_id"			=> $this->input->post("parent_id"),
					"category_status"	=> $this->input->post("category_status"),
					"category_image"	=> $category_image,
					"nos"	            => $this->input->post("nos"),
					"category_subname"	=> $this->input->post("category_subname")
				);
				
				if($category_id > 0){
					$this->Common_Model->update_records('mstr_category', 'category_id', $category_id, $data_list);
					$this->session->set_flashdata('success', 'Record Updated successfully.' );
				}else{
					$this->Common_Model->dbinsertid("mstr_category", $data_list);
					$this->session->set_flashdata('success', 'Record Added successfully.' );
				}
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata("error", validation_errors());
			}
		}
		$data['mainmenu'] = 'masters';
		$data['submenu'] = 'category';
		$data['location_data'] = array();
		$data['parent_category']   = $this->Common_Model->FetchData("mstr_category", "*", "deleted_status = 0");
		if($category_id > 0){
			$data['category_data'] = $this->Common_Model->FetchData("mstr_category", "*", "category_id = $category_id");
			//echo '<pre>';print_r($data['location_data']);exit;
		}
		$this->load->view('admin/masters/add_edit_category', $data);
	}








public function banner(){
    $this->load->helper('url');
    $currentURL = current_url();
    $data = array();
    
    // Base SQL condition
    $sql = "1 AND A.deleted_status = 0";
    $queryvars = "";

    // Order by banner_order or banner_title
    $sql .= " ORDER BY A.banner_order ASC, A.banner_title ASC";

    // Fetch total rows for pagination
    $rows = $this->Common_Model->FetchRows("mstr_banner A", "*", "$sql");

    // Pagination setup
    $data['page_num'] = $page_num = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
    $this->load->library("Paginator");
    $this->paginator->setparam(array("page_num" => $page_num, "num_rows" => $rows));
    $this->paginator->set_Limit(10); // rows per page
    $range1 = $this->paginator->getRange1();
    $range2 = $this->paginator->getRange2();

    // Add LIMIT for SQL
    $sql .= " LIMIT ".$range1.', '.$range2;

    // Fetch records with optional additional info
    $records = $this->Common_Model->db_query("SELECT * FROM mstr_banner A WHERE ".$sql);

    // Generate pagination navigation
    $paging_info = $this->paginator->DBPagingNav($queryvars, $currentURL);

    // Assign data to view
    $data['tot_page'] = $paging_info[0];
    $data['sPages']   = $paging_info[1];
    $data['rows']     = $rows;
    $data['records']  = $records;
    $data['mainmenu'] = 'masters';
    $data['submenu']  = 'banner';

    // Load view
    $this->load->view('admin/banner', $data);
}





public function add_edit_banner($banner_id=0){
    $data = array();

    if($this->input->post('submitBtn')){
        // Form validation
        $this->form_validation->set_rules('banner_title', 'Banner Title', 'trim|required');
        $this->form_validation->set_rules('banner_status', 'Status', 'trim|required');
        $this->form_validation->set_error_delimiters('<p class="has-error"><label class="control-label">', '</label></p>');

        if($this->form_validation->run()){
            
            // Banner image upload
            if(!empty($_FILES['banner_image']['name'])){
                $config['upload_path']   = 'uploads/banner/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['file_name']     = 'Banner_'.date("Ymd").'_'.time();
                $config['max_size']      = '20048'; // 2MB max
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if($this->upload->do_upload('banner_image')){
                    $uploadData = $this->upload->data();
                    $banner_image = $uploadData['file_name'];
                } else {
                    $banner_image = '';
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect($_SERVER['HTTP_REFERER']);
                }
            } else {
                $banner_image = $this->input->post('old_banner_image');
            }

            // Data array
            $data_list = array(
                'banner_title'  => $this->input->post('banner_title'),
                'banner_link'   => $this->input->post('banner_link'),
                'banner_image'  => $banner_image,
                'banner_status' => $this->input->post('banner_status'),
                'banner_order'  => $this->input->post('banner_order')
            );

            // Insert or Update
            if($banner_id > 0){
                $this->Common_Model->update_records('mstr_banner', 'banner_id', $banner_id, $data_list);
                $this->session->set_flashdata('success', 'Banner updated successfully.');
            } else {
                $this->Common_Model->dbinsertid('mstr_banner', $data_list);
                $this->session->set_flashdata('success', 'Banner added successfully.');
            }
            redirect($_SERVER['HTTP_REFERER']);

        } else {
            $this->session->set_flashdata('error', validation_errors());
        }
    }

    // Data for view
    $data['mainmenu'] = 'masters';
    $data['submenu']  = 'banner';
    $data['banner_data'] = array();
    if($banner_id > 0){
        $data['banner_data'] = $this->Common_Model->FetchData('mstr_banner', '*', "banner_id = $banner_id");
    }

    $this->load->view('admin/add_edit_banner', $data);
}







	function delete_category($category_id = 0){
		$data_list = array(
			"deleted_status"		=> 1
		);
		$this->Common_Model->update_records('mstr_category', 'category_id', $category_id, $data_list);
		redirect("masters/category");
	}

	function delete_category_image($category_id = 0){
		$data_list = array(
			"category_image" => ""
		);
		$this->Common_Model->update_records('mstr_category', 'category_id', $category_id, $data_list);
		redirect("masters/add_edit_category/".$category_id);
	}
	
	public function vendorslider(){
	    $userid = $this->session->userdata('user_id');
	    if($this->input->post('btnCatlogSubmit')){
			//echo "<pre>";print_r($this->input->post("link"));exit;
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
		          $config['upload_path'] = 'uploads/home/';
		          $config['allowed_types'] = 'jpg|jpeg|png';
		          $config['max_size'] = '1024'; // max_size in kb
		          $config['file_name'] = 'Home_Slider_'.date("Ymd").'_'.time();
		 
		          //Load upload library
		          $this->load->library('upload',$config); 
		          $this->upload->initialize($config);
		 
		          // File upload
		          if($this->upload->do_upload('file')){
		            // Get data about the file
		            $uploadData = $this->upload->data();
		            $product_image = $uploadData['file_name'];

		            // Initialize array
		            $temp['image'] = $product_image;
		            $temp['link'] =  $this->input->post("link")[$pikey];
		            $temp['created_on'] =  date("Y-m-d H:i:s");
		            $temp['user_id']     = $this->session->userdata('user_id');
		            array_push($dbData, $temp);
		          }

				}
                //echo "<pre>";print_r($dbData);exit;
				if(!empty($dbData)){
					$product_image_id  = $this->Common_Model->dbinsertbatch("t_catalogue_slider", $dbData);
					if($product_image_id>0){
						$this->session->set_flashdata('success', 'Promotional Images added successfully.' );
					}else{
						$this->session->set_flashdata('error', 'Something went wrong while saving product images.' );
					}
				}else{
					$this->session->set_flashdata('error', 'Nothing has been updated.' );
				}
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
		
		if($this->input->post('btnPromSubmit')){
			//echo "<pre>";print_r($this->input->post("link"));exit;
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
		          $config['upload_path'] = 'uploads/home/';
		          $config['allowed_types'] = 'jpg|jpeg|png';
		          $config['max_size'] = '1024'; // max_size in kb
		          $config['file_name'] = 'Home_Slider_'.date("Ymd").'_'.time();
		 
		          //Load upload library
		          $this->load->library('upload',$config); 
		          $this->upload->initialize($config);
		 
		          // File upload
		          if($this->upload->do_upload('file')){
		            // Get data about the file
		            $uploadData = $this->upload->data();
		            $product_image = $uploadData['file_name'];

		            // Initialize array
		            $temp['image'] = $product_image;
		            $temp['link'] =  $this->input->post("link")[$pikey];
		            $temp['created_on'] =  date("Y-m-d H:i:s");
		            $temp['user_id']     = $this->session->userdata('user_id');
		            array_push($dbData, $temp);
		          }

				}
                //echo "<pre>";print_r($dbData);exit;
				if(!empty($dbData)){
					$product_image_id  = $this->Common_Model->dbinsertbatch("t_promotional_slider", $dbData);
					if($product_image_id>0){
						$this->session->set_flashdata('success', 'Promotional Images added successfully.' );
					}else{
						$this->session->set_flashdata('error', 'Something went wrong while saving product images.' );
					}
				}else{
					$this->session->set_flashdata('error', 'Nothing has been updated.' );
				}
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
		
		if($this->input->post('validatevicon')){
		    //echo $_FILES['product_image']['name'];exit;
		    $data = array();
		    $user_id = $this->session->userdata('user_id');
			if(!empty($_FILES['product_image']['name'])){
	                $config['upload_path'] 	 = 'uploads/vendor/';
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
	            $data_list = array(
	                "company_image"			=> $product_image
	                );
				//print_r($data_list);exit;
				$this->Common_Model->update_records("vendor_details", "user_id", $user_id, $data_list);
		}


		$data['homeslider_data'] = $this->Common_Model->FetchData("t_home_slider", "*", "deleted_flag = 0");
		$data['t_promotional'] = $this->Common_Model->FetchData("t_promotional_slider", "*", "deleted_flag = 0 AND user_id=$userid");
		$data['t_catalouge'] = $this->Common_Model->FetchData("t_catalogue_slider", "*", "deleted_flag = 0 AND user_id=$userid");
		$data['home_data'] = $this->Common_Model->FetchData("m_home_image", "*", "id = 1");
		$data['mainmenu'] = 'masters';
		$data['submenu']  = 'vendorslider';
		//echo "<pre>";print_r($data);exit;
		$this->load->view('admin/masters/vendorslider', $data);
	}
	
	public function disable($cat_id=0){
		is_logged_in();
		$data = array();
		$this->load->helper('url');
		$currentURL = current_url();
		
		$this->Common_Model->update_records("mstr_category", "category_id", $cat_id, array("status" => 0));
				$this->session->set_flashdata('success', 'Record Updated successfully.' );
				redirect('masters/category');

		$data['mainmenu'] = 'masters';
		$data['submenu'] = 'category';
		$this->load->view('masters/category', $data);
	}
	
	public function enable($cat_id=0){
		is_logged_in();
		$data = array();
		$this->load->helper('url');
		$currentURL = current_url();
		
		$this->Common_Model->update_records("mstr_category", "category_id", $cat_id, array("status" => 1));
				$this->session->set_flashdata('success', 'Record Updated successfully.' );
				redirect('masters/category');

		$data['mainmenu'] = 'masters';
		$data['submenu'] = 'category';
		$this->load->view('masters/category', $data);
	}
	
	public function communication(){
		$data = array();
		$from_id = 	$this->session->userdata('user_id');
		if($this->input->post('submitBtn')){
		    $data_list = array(
					"from_id"		    => $from_id,
					"to_id"		        => $this->input->post("vendor_id"),
					"msg"			    => $this->input->post("msg"),
					"entry_dt_time"     => date('Y-d-m H:s:i')
				);

				$this->Common_Model->dbinsertid("communication", $data_list);
				$this->session->set_flashdata('success', 'Message Send successfully.' );
		}
		
		$sql = "1 AND status = 0";
		$records = $this->Common_Model->db_query("SELECT *,(SELECT company_name FROM vendor_details WHERE communication.to_id=vendor_details.user_id) as vendor,(SELECT company_name FROM vendor_details WHERE communication.from_id=vendor_details.user_id) as vendor2 FROM communication   WHERE ".$sql);
		$vendors = $this->Common_Model->db_query("SELECT * FROM vendor_details   WHERE 1");
		$data['records']  = $records;
		$data['vendors']  = $vendors;
		$data['mainmenu'] = 'masters';
		$data['submenu']  = 'communication';
		$this->load->view('admin/masters/communication', $data);
	}




}
