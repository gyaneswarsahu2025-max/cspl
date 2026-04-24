<?php
class Common_Model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	
	public function countRows($tbl,$cond="")
	{
		$this->db->select('COUNT(*) as num');
		$this->db->from($tbl);
		if($cond != ""){
			$this->db->where($cond);
		}	
		$query = $this->db->get();
		$row = $query->row();
		return $row->num;
	}
	function dbinsert ($tablename, $details)
    {
		if($this->db->insert ($tablename, $details))
		{
			//return true;
			return $this->db->insert_id();
		}
		else
		{
			return 0;
		}
    }
	
	function singleColumnResult($sql, $column){
		$query = $this->db->query($sql);
		$res = $query->row();
		if(!empty($res)){
			return $res->$column;
		}else{
			return NULL;
		}
	}
	
	function dbinsertbatch ($tablename, $details){
		if($this->db->insert_batch ($tablename, $details)){
			return true;
		}else{
			return false;
		}
    }
	
	function dbinsertid ($tablename, $details)
    {
		$this->db->trans_start();
		$this->db->insert($tablename, $details);
		$insert_id = $this->db->insert_id();
		$this->db->trans_complete();
		return  $insert_id;
    }
	
	public function FetchPaginationRows($tbl,$val="*",$cond="",$params = array()){
		if($cond!="")
		{
			$sq="SELECT $val FROM $tbl WHERE $cond";
		}
		else
		{
			$sq="SELECT $val FROM $tbl";
		}
        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
			$sq .= " LIMIT ".$params['start'].",".$params['limit'];
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
			$sq .= " LIMIT ".$params['limit'];
        }
		$res=$this->db->query($sq);
		return $res->num_rows(); 		
	}
	
	public function FetchPaginationData($tbl,$val="*",$cond="",$params = array())
	{
		if($cond!="")
		{
			$sq="SELECT $val FROM $tbl WHERE $cond";
		}
		else
		{
			$sq="SELECT $val FROM $tbl";
		}
        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
			$sq .= " LIMIT ".$params['start'].",".$params['limit'];
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
			$sq .= " LIMIT ".$params['limit'];
        }
		$kw=$this->db->query($sq);
		$kow = $kw->result_array();
		if(!empty($kow)){
			if(($val=="*") || (strpos($val,",")>0))
			{
				//print_r($kow);
				foreach($kow as $vl)
				{
					$dos[]=$vl;
				}
				return $dos;
			}
			else
			{
				
				foreach($kow as $vl)
				{
				return $vl["$val"];
				}
			}
		}else{
			return 0;
		}	
	}
	
	function db_select ($tablename)
    {
    	$query = $this->db->query("SELECT * FROM $tablename"); 
    	return $query;
    }
	
	function db_select_order($tablename, $ordercol, $order)
    {
    	$query = $this->db->query("SELECT * FROM $tablename ORDER BY $ordercol $order"); 
    	return $query;
    }
	
	function update_records($table, $field, $fieldvalue, $data)
    {
        $this->db->where( $field, $fieldvalue);
        //$this->db->update($table, $data);
		if($this->db->update($table, $data))
		{
			return true;
		}else{
			return 0;
		}
    }
	
	function select_record($tablename, $idname, $idvalue)
	{
		$this->db->select('*');
		$this->db->from($tablename);
		$this->db->where($idname, $idvalue);
		$results = $this->db->get();
		return $results->row();
	}
	
	function select_records($tablename, $idname, $idvalue)
	{
		$this->db->select('*');
		$this->db->from($tablename);
		$this->db->where_in($idname, explode(',',$idvalue));
		return $results = $this->db->get();
		//return $results->row();
	}
	
	function select_records_order($tablename, $idname, $idvalue, $orderby, $orderval)
	{
		$this->db->select('*');
		$this->db->from($tablename);
		$this->db->where_in($idname, explode(',',$idvalue));
		$this->db->order_by($orderby, $orderval);
		return $results = $this->db->get();
		//return $results->row();
	}
	
	function select_records_in($tablename, $idname, $idvalue)
	{
		$this->db->select('*');
		$this->db->from($tablename);
		$this->db->where($idname, $idvalue);
		return $results = $this->db->get();
		//return $results->row();
	}
	
	function deleterecord($tablename, $idname, $idvalue)
	{
		$this->db->where($idname, $idvalue);
		$this->db->delete($tablename);
	}
	public function DeleteData($tbl,$cond,$param)
	{
		$this->db->where($cond,$param);
		$this->db->delete($tbl);
		return $this->db->affected_rows();
	}
	public function DelData($tbl,$cond)
	{
		$this->db->where($cond);
		$this->db->delete($tbl);
		return $this->db->affected_rows();
	}
	public function DeleteMultiple($tbl,$array,$array2)
	{
		$this->db->where($array);
		$this->db->not_like($array2);
		$this->db->delete($tbl);
		return $this->db->affected_rows();
	}
	
	public function getPagination($tbl,$val="*",$cond="",$params = array()){
		if($cond!="")
		{
			$sq="SELECT $val FROM $tbl WHERE $cond";
		}
		else
		{
			$sq="SELECT $val FROM $tbl";
		}
        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
			$sq .= " LIMIT ".$params['start'].",".$params['limit'];
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
			$sq .= " LIMIT ".$params['limit'];
        }
		return $this->db->query($sq);
	}
	
	public function FetchData($tbl,$val="*",$cond="")
	{
		if($cond!="")
		{
			$sq="SELECT $val FROM $tbl WHERE $cond";
		}
		else
		{
			$sq="SELECT $val FROM $tbl";
		}
		//echo $sq;
		$kw=$this->db->query($sq);
		$kow = $kw->result_array();
		if(!empty($kow)){
			if(($val=="*") || (strpos($val,",")>0) || (strpos($val,"distinct")>0))
			{
				//print_r($kow);
				foreach($kow as $vl)
				{
					$dos[]=$vl;
				}
				return $dos;
			}
			else
			{
				
				foreach($kow as $vl)
				{
//				if(strpos($val,"distinct")>0){
//					str_replace("distinct ","",$val);
//				}
				return $vl["$val"];
				}
			}
		}else{
			return 0;
		}	
	}
	public function FetchRows($tbl,$val="*",$cond="")
	{
		if($cond!="")
		{
			$sq="SELECT $val FROM $tbl WHERE $cond";
		}
		else
		{
			$sq="SELECT $val FROM $tbl";
		}
		$res=$this->db->query($sq);
		return $res->num_rows(); 		
	}
	function QueryData($sql){
		$query = $this->db->query($sql);
		return $query;
	}
	function db_query($sql){
		$sql = trim($sql);
        $sql_action = strtoupper(substr($sql,0,6));
		
		switch($sql_action)
		{
			case 'SELECT':
				$kw=$this->db->query($sql);
				$kow = $kw->result_array();
				if(!empty($kow)){
					foreach($kow as $vl)
					{
						$dos[]=$vl;
					}
					return $dos;
				}else{
					return 0;
				}	
			break;
			case 'INSERT':
				$this->db->query($sql);
				return $this->db->insert_id();

			break;
			case 'UPDATE':
				$this->db->query($sql);
				return $this->db->affected_rows();

			break;
			case 'DELETE':
				$this->db->query($sql);
				return $this->db->affected_rows();

			break;

			default:

				$kw=$this->db->query($sql);
				$kow = $kw->result_array();
				if(!empty($kow)){
					foreach($kow as $vl)
					{
						$dos[]=$vl;
					}
					return $dos;
				}else{
					return 0;
				}	
		}
	}
	function db_getvalue($table_name,$field_name,$where_cond='1'){
		$data = $this->FetchData($table_name, $field_name, $where_cond);
		//echo $field_name;exit;
		if($data){
			return $data[0][$field_name];
		}else{
			return false;
		}
	}
	
	function db_getarr($query,$field1,$field2)
	{
		$infoArr = array();
		$result = $this->db_query($query);
		if($result){
			for($j=0;isset($result[$j]);$j++)
			{
				$key = $result[$j][$field1];
				$value = $result[$j][$field2];
				$infoArr[$key] = stripslashes($value);
			}
		}
		return $infoArr;
	}

	function check_duplicate_user_by_email($email){
		$chk_email = $this->Common_Model->db_query("SELECT COUNT(1) as cnt FROM erp_users WHERE email = '$email' and delete_status = 0");
		return $chk_email[0]['cnt'];		
	}

	function allparentids($category_id=0, $parent_ids=''){
		if($category_id > 0){
			$parent = $this->FetchData('mstr_category',"*","deleted_status = 0 and category_id = ".$category_id);
			//echo "<pre>";print_r($parent[0]['parent_id']);exit;
			if(!empty($parent[0]['parent_id'])){
				$parent_ids .= $parent[0]['parent_id'].',';
				$parent_ids = $this->allparentids($parent[0]['parent_id'],$parent_ids);
			}
		}
		if(!empty($parent_ids)){
			$parent_ids = rtrim($parent_ids,',');
		}
		return $parent_ids;
	}

	function allChildCategory($category_id=0, $cat_ids=''){
		if($category_id > 0){
			$category = $this->FetchData('mstr_category',"*","deleted_status = 0 and parent_id = ".$category_id);
			//echo "<pre>";print_r($category);exit;
			if(!empty($category)){
				foreach ($category as $key => $value) {			
					$cat_ids .= $value['category_id'].',';
					$cat_ids = $this->allChildCategory($value['category_id'],$cat_ids);
				}
			}else{
				//$cat_ids .= $value['category_id'].',';
			}
		}
		// if(!empty($cat_ids)){
		// 	$cat_ids = rtrim($cat_ids,',');
		// }
		return $cat_ids;
		//return rtrim($cat_ids,',');
	}

	
	function getAbbreviation($string,$length=0){
	    $words = explode(" ", $string);
	    $acronym = "";

	    foreach ($words as $w) {
	      $acronym .= $w[0];
	    }
	    if($length>0){
	       $acronym = substr($acronym, 0, $length);
	    }
	    return $acronym;
	}

}