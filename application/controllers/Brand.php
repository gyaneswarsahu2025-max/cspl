<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 $this->perPage = 10;
		 date_default_timezone_set('Asia/Kolkata');
	}

	public function index(){
		is_logged_in();
		$data = array();
		$this->load->helper('url');
		$currentURL = current_url();
		$sql = "1 AND A.deleted_flag = 0";
		$queryvars = "";
		$sql.= " ORDER BY A.brand_name ASC ";

		// $rows = $this->Common_Model->FetchRows("vendor_details A", "*", "$sql");
		// $data['page_num'] = $page_num = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
		// $this->load->library("Paginator");
		// $this->paginator->setparam(array("page_num" => $page_num, "num_rows" => $rows));
		// $this->paginator->set_Limit(10);
		// $range1 = $this->paginator->getRange1();
		// $range2 = $this->paginator->getRange2();
		// $sql .= " LIMIT ".$range1.', '.$range2;

		$records = $this->Common_Model->db_query("SELECT A.*,B.category_name FROM m_brand A LEFT JOIN mstr_category B ON A.category_id = B.category_id WHERE ".$sql);

		//$paging_info = $this->paginator->DBPagingNav($queryvars, $currentURL);

		// $data['tot_page'] = $paging_info[0];
		// $data['sPages']   = $paging_info[1];
		//$data['rows']     = $rows;
		$data['records']  = $records;
		$data['mainmenu'] = 'product';
		$data['submenu'] = 'brand';
		$this->load->view('admin/brand/view_brand', $data);
	}	


	public function edit($brand_id = 0){
		$this->add($brand_id);
	}


	public function add($brand_id = 0){
		$data = array();
		if($this->input->post('btnSubmit')){
			$this->form_validation->set_rules('brand_name', 'Brand Name', 'trim|required');
			$this->form_validation->set_error_delimiters('<p class="has-error"><label class="control-label">', '</label></p>');
			if($this->form_validation->run()){

				/******** Duplicate Record Check ********/
				$brand_name  = $this->input->post("brand_name");
				if($brand_id > 0){
					$chk_brand_name = $this->Common_Model->db_query("SELECT COUNT(1) as cnt FROM m_brand WHERE brand_name = '$brand_name' and deleted_flag = 0 and brand_id != $brand_id");
				}else{
					$chk_brand_name = $this->Common_Model->db_query("SELECT COUNT(1) as cnt FROM m_brand WHERE brand_name = '$brand_name' and deleted_flag = 0");
				}
				if($chk_brand_name[0]['cnt']>0){
					$this->session->set_flashdata("error", 'Duplicate record exists !!! ');
					redirect($_SERVER['HTTP_REFERER']);
				}
				/******** Duplicate Record Check ********/

				// Brand Logo upload //
		        if(!empty($_FILES['brand_logo']['name'])){
	                $config['upload_path'] 	 = 'uploads/brand/';
	                $config['allowed_types'] = 'pdf|jpg|jpeg|png';
	                $config['file_name'] 	 = 'Brand_'.date("Ymd").'_'.time();
	                $config['max_size']      = '1024';
	                //Load upload library and initialize configuration
	                $this->load->library('upload',$config);
	                $this->upload->initialize($config);
	                
	                if($this->upload->do_upload('brand_logo')){
	                    $uploadData = $this->upload->data();
	                    $brand_logo = $uploadData['file_name'];
	                }else{
	                    $brand_logo = '';
	                }
	            }else{
	                $brand_logo = $this->input->post("old_brand_logo");
	            }
				// Brand Logo upload //

				$data_list = array(
					"category_id"			=> $this->input->post("category_id"),
					"brand_name"			=> $this->input->post("brand_name"),
					"brand_desc"			=> $this->input->post("brand_desc"),
					"brand_logo"			=> $brand_logo,
					"created_by"			=> $this->session->userdata('user_id')

				);
				if($brand_id>0){
					$this->Common_Model->update_records('m_brand', 'brand_id', $brand_id, $data_list);
					$this->session->set_flashdata('success', 'Record Updated successfully.' );
				}else{					
					$brand_last_id = $this->Common_Model->dbinsertid("m_brand", $data_list);
					$this->session->set_flashdata('success', 'Record Added successfully.' );
				}
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata("error", validation_errors());
			}
		}
		$data['mainmenu'] = 'product';
		$data['submenu'] = 'brand';
		$data['category_list']   = $this->Common_Model->FetchData("mstr_category", "*", "deleted_status = 0");
		if($brand_id > 0){
			$data['brand_data'] = $this->Common_Model->FetchData("m_brand", "*", "brand_id = $brand_id");
			//echo '<pre>';print_r($data['location_data']);exit;
		}
		$this->load->view('admin/brand/add_brand', $data);
	}

	function delete($brand_id = 0){
		$data_list = array(
			"deleted_flag"	=> 1
		);
		$this->Common_Model->update_records('m_brand', 'brand_id', $brand_id, $data_list);
		$this->session->set_flashdata('success', 'Record deleted successfully.' );
		redirect("brand");
	}

}
