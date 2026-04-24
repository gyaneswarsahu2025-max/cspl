<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->perPage = 10;
		is_logged_in();
		date_default_timezone_set('Asia/Kolkata');
	}

	public function index()
	{
		$data = array();
		$sql = "1 AND A.deleted_flag = 0";
		$sql.= " ORDER BY A.created_on DESC LIMIT 6";
		$uid = $this->session->userdata('user_id');
		
		$sel = "1 AND A.deleted_flag = 0 AND A.user_id=".$uid;
		$sel.= " ORDER BY A.created_on DESC LIMIT 6";
		
		$rec = $this->Common_Model->db_query("SELECT A.* FROM t_order A  WHERE ".$sel);
		
		$records = $this->Common_Model->db_query("SELECT A.* FROM t_order A  WHERE ".$sql);
		
		$recent_prods = $this->Common_Model->db_query("SELECT A.*,B.company_name FROM t_product A LEFT JOIN vendor_details B ON A.vendor_id = B.user_id WHERE A.deleted_flag = 0 and A.recently_added = 1 and A.vendor_id = $uid order by A.product_id desc");
		
		$recent_products = $this->Common_Model->db_query("SELECT A.*,B.company_name FROM t_product A LEFT JOIN vendor_details B ON A.vendor_id = B.user_id WHERE A.deleted_flag = 0 and A.recently_added = 1 order by A.product_id desc");
		
		$data['recent_prods']  = $recent_prods;
		$data['recent_products']  = $recent_products;
		$data['rec']  = $rec;
		$data['records']  = $records;
		$data['mainmenu'] = 'dashboard';
		$data['submenu'] = 'dashboard';
		$this->load->view('admin/dashboard', $data);
	}
}
