<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->perPage = 10;
		is_logged_in();
		date_default_timezone_set('Asia/Kolkata');
	}

	public function productstock()
	{
		$data = array();
		$qry = "SELECT A.product_id,SUM(A.stock) AS stock,B.product_name FROM t_stock A LEFT JOIN t_product B ON A.product_id = B.product_id WHERE B.deleted_flag = 0 ";
		if($this->session->userdata('user_type') == 1){
			$qry .= " AND vendor_id = ". $this->session->userdata('user_id');
		}
		$qry .= " group by product_id ";
		$recs = $this->Common_Model->db_query($qry); 
		$data['recs']  = $recs;
		$data['mainmenu'] = 'report';
		$data['submenu'] = 'productstock';
		//echo '<pre>';print_r($data);exit;
		$this->load->view('admin/report/productstock', $data);
	}

	public function products(){
		$data = array();
		$qry = "SELECT A.*,B.category_name,C.brand_name,D.company_name,(SELECT SUM(stock) FROM t_stock where product_id = A.product_id)AS stock FROM t_product A LEFT JOIN mstr_category B ON A.category_id = B.category_id LEFT JOIN m_brand C ON A.brand_id = C.brand_id LEFT JOIN vendor_details D ON A.vendor_id = D.user_id WHERE A.deleted_flag = 0 ";
		if($this->session->userdata('user_type') == 1){
			$qry .= " AND vendor_id = ". $this->session->userdata('user_id');
		}
		$qry.= " ORDER BY A.product_name ASC ";
		$records = $this->Common_Model->db_query($qry); 
		$data['records']  = $records;
		$data['mainmenu'] = 'report';
		$data['submenu'] = 'products';
		//echo '<pre>';print_r($data);exit;
		$this->load->view('admin/report/products', $data);
	}

	public function customers(){
		$data = array();
		$sql = "SELECT * FROM users WHERE delete_status = 0 AND user_type = 2";
		$sql.= " ORDER BY fullname ASC ";
		$records = $this->Common_Model->db_query($sql); 
		$data['records']  = $records;
		$data['mainmenu'] = 'report';
		$data['submenu'] = 'customers';
		//echo '<pre>';print_r($data);exit;
		$this->load->view('admin/report/customers', $data);
	}

	public function vendors(){
		$data = array();
		$sql = "SELECT A.*,B.user_status FROM vendor_details A LEFT JOIN users B ON A.user_id = B.user_id WHERE B.delete_status = 0 AND B.user_type = 1";
		$sql.= " ORDER BY B.fullname DESC ";
		$records = $this->Common_Model->db_query($sql); 
		$data['records']  = $records;
		$data['mainmenu'] = 'report';
		$data['submenu'] = 'vendors';
		//echo '<pre>';print_r($data);exit;
		$this->load->view('admin/report/vendors', $data);
	}

    public function stockreport(){
		$data = array();
		$urlvars = '';
		$p_id = '';
		$sql 			= "1";

		if(isset($_REQUEST['btnSubmit'])){
		$p_id = $_REQUEST['product_id'];
		$sql .= " AND deleted_flag = 0 AND product_id = ".$p_id;

		
		$record = $this->Common_Model->db_query("SELECT *,(SELECT product_name FROM t_product WHERE t_product.product_id=t_stock.product_id) as prod_name, (SELECT SUM(stock)) as in_stock FROM t_stock WHERE ".$sql);

		if($record){
			$html = '<table border=1> <tr> <th>Product Id</th><th>Product Name</th><th>In Stock</th>';

            for($i=0;$i<count($record);$i++){
            	$html.= '<tr><td>'.$record[$i]['product_id'].'</td><td>'.$record[$i]['prod_name'].'</td><td>'.$record[$i]['in_stock'].'</td> </tr>';

            }
            $html.= '</table>';
            $this->db->close();
			header("Content-type: application/vnd.ms-excel");
			header("Content-Disposition: attachment; filename=stockreport".time().".xls");
			echo $html;exit;
		}else{
			$this->session->set_flashdata('error', 'No Records found' );
			redirect("report/stockreport");
		}
	}

		//$sel = "SELECT *,(SELECT product_name FROM t_product WHERE t_product.product_id=t_stock.product_id) as prod_name FROM t_stock WHERE deleted_flag = 0";
		$sel = "SELECT * FROM t_product WHERE deleted_flag = 0";
		//$sql.= " ORDER BY product_id DESC ";
		$records = $this->Common_Model->db_query($sel);
		
		
		$qry = "SELECT A.product_id,SUM(A.stock) AS stock,B.product_name FROM t_stock A LEFT JOIN t_product B ON A.product_id = B.product_id WHERE B.deleted_flag = 0 ";
		if($this->session->userdata('user_type') == 1){
			$qry .= " AND vendor_id = ". $this->session->userdata('user_id');
		}
		$qry .= " group by product_id ";
		$recs = $this->Common_Model->db_query($qry);
		$data['recs']  = $recs;
		$data['records']  = $records;
		$data['mainmenu'] = 'report';
		$data['submenu'] = 'stockreport';
		//echo '<pre>';print_r($data);exit;
		$this->load->view('admin/report/stockreport', $data);
	}
	
	public function sale_report(){
		$data = array();
		$urlvars = '';
		$p_id    = '';
		$sql     = "1";

		if(isset($_REQUEST['btnSubmit'])){
    		$from_date = $this->input->post("from_date");
			$stop_date   = $this->input->post("to_date");
			$to_date   = date('Y-m-d', strtotime("+1 day", strtotime($stop_date)));
    		$sql .= " AND delivery_status = 'Order Delivered' AND updated_on between '$from_date' AND '$to_date'";
    		
            //echo "SELECT * FROM t_order WHERE ".$sql;exit;
		
		$record = $this->Common_Model->db_query("SELECT * FROM t_order WHERE ".$sql);

		if($record){
			$html = '<table border=1> <tr> <th>Order No</th><th>Bill Id</th><th>Contact No.</th><th>Address</th><th>Amount</th>';

            for($i=0;$i<count($record);$i++){
            	$html.= '<tr><td>'.$record[$i]['order_no'].'</td><td>'.$record[$i]['bill_id'].'</td><td>'.$record[$i]['order_price'].'</td> </tr>';
                $sum += $record[$i]['order_price'];
            }
            
            $html.= '<tr><td>Total Sale Amount</td><td></td><td>'.$sum.'</td></tr>';
            $html.= '</table>';
            $this->db->close();
			header("Content-type: application/vnd.ms-excel");
			header("Content-Disposition: attachment; filename=sale_report".time().".xls");
			echo $html;exit;
		}else{
			$this->session->set_flashdata('error', 'No Records found');
			redirect("report/sale_report");
		}
	}
		
		$data['mainmenu'] = 'report';
		$data['submenu'] = 'sale_report';
		//echo '<pre>';print_r($data);exit;
		$this->load->view('admin/report/sale_report', $data);
	}
	
	public function edit_vendor($user_id=0){
		$data = array();
		if($this->input->post('submitBtn')){
			$this->form_validation->set_rules('company_name', 'Company Name', 'trim|required');
			$this->form_validation->set_error_delimiters('<p class="has-error"><label class="control-label">', '</label></p>');
			if($this->form_validation->run()){
				
					/*$chk_loc = $this->Common_Model->db_query("SELECT COUNT(1) as cnt FROM vendor_details WHERE location_name = '".$this->input->post("location_name")."' AND deleted_flag = 0");
				
				if($chk_loc[0]['cnt']>0){
					$this->session->set_flashdata("error", 'Duplicate location found !!! ');
					redirect($_SERVER['HTTP_REFERER']);
				}*/
				
				$data_list = array(
					"company_name"		=> $this->input->post("company_name"),
					"owner_name"		    => $this->input->post("owner_name"),
					"company_contact_no"		=> $this->input->post("company_contact_no"),
					"owner_contact_no"	=> $this->input->post("owner_contact_no")
				);
				
					$this->Common_Model->update_records('vendor_details', 'user_id', $user_id, $data_list);
					$this->session->set_flashdata('success', 'Record Updated successfully.' );
				
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$this->session->set_flashdata("error", validation_errors());
			}
		}
		
		$sql = "SELECT * FROM vendor_details WHERE deleted_flag = 0 AND user_id=$user_id";
    		$records = $this->Common_Model->db_query($sql); 
    		$data['records']  = $records;
		$this->load->view('admin/report/vendor_edit', $data);
	}

}
