<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attribute extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 $this->perPage = 10;
		 date_default_timezone_set('Asia/Kolkata');
	}

	public function add($attribute_id = 0){
		$data = array();
		if($this->input->post('btnSubmit')){
			$this->form_validation->set_rules('attribute_name', 'Product Attribute Name', 'trim|required');
			$this->form_validation->set_error_delimiters('<p class="has-error"><label class="control-label">', '</label></p>');
			if($this->form_validation->run()){

				/******** Duplicate Record Check ********/
				$attribute_name  = $this->input->post("attribute_name");
				$category_id  = $this->input->post("category_id");
				if($attribute_id > 0){
					$chk_attribute_name = $this->Common_Model->db_query("SELECT COUNT(1) as cnt FROM m_attribute WHERE category_id = '$category_id' and attribute_name = '$attribute_name' and deleted_flag = 0 and attribute_id != $attribute_id");
				}else{
					$chk_attribute_name = $this->Common_Model->db_query("SELECT COUNT(1) as cnt FROM m_attribute WHERE category_id = '$category_id' and attribute_name = '$attribute_name' and deleted_flag = 0");
				}
				if($chk_attribute_name[0]['cnt']>0){
					$this->session->set_flashdata("error", 'Duplicate record exists !!! ');
					redirect($_SERVER['HTTP_REFERER']);
				}
				/******** Duplicate Record Check ********/

				$data_list = array(
					"category_id"			=> $this->input->post("category_id"),
					"attribute_name"		=> $this->input->post("attribute_name"),
					"created_by"			=> $this->session->userdata('user_id')

				);
				if($attribute_id>0){
					$this->Common_Model->update_records('m_attribute', 'attribute_id', $attribute_id, $data_list);
					$this->session->set_flashdata('success', 'Record Updated successfully.' );
				}else{					
					$attribute_last_id = $this->Common_Model->dbinsertid("m_attribute", $data_list);
					$this->session->set_flashdata('success', 'Record Added successfully.' );
				}
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata("error", validation_errors());
			}
		}
		$data['mainmenu'] = 'master';
		$data['submenu'] = 'attribute';
		$data['category_list']   = $this->Common_Model->FetchData("mstr_category", "*", "deleted_status = 0");
		if($attribute_id > 0){
			$data['attribute_data'] = $this->Common_Model->FetchData("m_attribute", "*", "attribute_id = $attribute_id");
		}
		$this->load->view('admin/attribute/add_attribute', $data);
	}

	public function edit($attribute_id = 0){
		$this->add($attribute_id);
	}

	public function index(){
		is_logged_in();
		$data = array();
		$this->load->helper('url');
		$currentURL = current_url();
		$sql = "1 AND A.deleted_flag = 0";
		$queryvars = "";
		$sql.= " ORDER BY A.attribute_name ASC ";

		// $rows = $this->Common_Model->FetchRows("vendor_details A", "*", "$sql");
		// $data['page_num'] = $page_num = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
		// $this->load->library("Paginator");
		// $this->paginator->setparam(array("page_num" => $page_num, "num_rows" => $rows));
		// $this->paginator->set_Limit(10);
		// $range1 = $this->paginator->getRange1();
		// $range2 = $this->paginator->getRange2();
		// $sql .= " LIMIT ".$range1.', '.$range2;

		$records = $this->Common_Model->db_query("SELECT A.*,B.category_name FROM m_attribute A LEFT JOIN mstr_category B ON A.category_id = B.category_id WHERE ".$sql);

		//$paging_info = $this->paginator->DBPagingNav($queryvars, $currentURL);

		// $data['tot_page'] = $paging_info[0];
		// $data['sPages']   = $paging_info[1];
		//$data['rows']     = $rows;
		$data['records']  = $records;
		$data['mainmenu'] = 'product';
		$data['submenu'] = 'product-attribute';
		$this->load->view('admin/attribute/view_attribute', $data);
	}

	public function delete($attribute_id = 0){
		$data_list = array(
			"deleted_flag"	=> 1
		);
		$this->Common_Model->update_records('m_attribute', 'attribute_id', $attribute_id, $data_list);
		$this->session->set_flashdata('success', 'Record deleted successfully.' );
		redirect("attribute");
	}

}
