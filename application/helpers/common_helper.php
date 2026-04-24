<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function ordinal($number) {
    $ends = array('th','st','nd','rd','th','th','th','th','th','th');
    if ((($number % 100) >= 11) && (($number%100) <= 13))
        return $number. 'th';
    else
        return $number. $ends[$number % 10];
}

function clean($string){
	return preg_replace('/[^A-Za-z0-9\- ]/', '', trim($string)); // Removes special chars.
}

function cleantext($string){
	return preg_replace('/[^A-Za-z0-9\-. , &- ]/', '', trim($string)); // Removes special chars.
}

function removeSpace($string){
	return str_replace(' ', '', $string); // Replaces all spaces.
}

function get_session_details(){
	$CI =& get_instance();
	$data = (object)$CI->session->all_userdata();
	return $data;
}

function is_logged_in(){
	$CI =& get_instance();
	$is_logged_in = $CI->session->userdata('user_id');
	if(!isset($is_logged_in) || $is_logged_in != true)
	{
		redirect ('adminlogin');   
	}       
}

function get_locations_options(){
	$CI =& get_instance();
	$records = $CI->Common_Model->FetchData(TAB_LOCATION, "*", "loc_id > 0 AND parent_state_id = 0 and parent_country_id != 0 ORDER BY loc_id ASC");
	return $records;
}

function getFetchData($table, $columns, $condition){
	$CI =& get_instance();
	$records = $CI->Common_Model->FetchData($table, $columns, $condition);
	return $records;
}

function getFetchRows($table, $columns, $condition){
	$CI =& get_instance();
	$records = $CI->Common_Model->FetchRows($table, $columns, $condition);
	return $records;
}

function db_query($sql){
	$CI =& get_instance();
	$records = $CI->Common_Model->db_query($sql);
	return $records;
}

function getarray($query,$field1,$field2){
    $CI =& get_instance();
    $records = $CI->Common_Model->db_getarr($query,$field1,$field2);
    return $records;
}

function data_enc($action, $string){
    $output = false;
 
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'MYNEWENCRYPTDATA';
    $secret_iv = 'MY_SECRET_IV';
 
    // hash
    $key = hash('sha256', $secret_key);
    
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
 
    if( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    }
    else if( $action == 'decrypt' ){
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
 
    return $output;
}

function all_parent_category(){
	$CI =& get_instance();
	$rows = $CI->Common_Model->FetchData("mstr_category A", "*", "A.deleted_status = 0 AND parent_id = 0 and A.category_status = 1");
	//echo "<pre>";print_r($rows);exit();
	return $rows;
}

function categoryHeirarchy($parent_id = 0) {
  //  echo $parent_id;exit;
  $CI =& get_instance();
  //if (!is_array($category_tree_array))
  $category_tree_array = array();
  //$query = "SELECT * FROM mstr_category WHERE deleted_status = 0 and parent_id = $parent_id ORDER BY category_name ASC";$row = $CI->Common_Model->db_query($query);
  $row = $CI->Common_Model->FetchData("mstr_category A", "*", "A.deleted_status = 0 AND A.parent_id = $parent_id");
  //echo "<pre>";print_r($row);exit();
    foreach (@$row as $rows) { //echo "<pre>";print_r($rows);exit();
         if(!empty($rows)) {
            if($rows['category_id']>0){
                $child = categoryHeirarchy($rows['category_id']);
            }else{
                $child = [];
            }
            array_push($category_tree_array, array(
                "id" => $rows['category_id'],
                "name" => $rows['category_name'],
                "child"=>$child
            ));
        } 
    }
  return $category_tree_array;
}

function brandsByCategory($category_id = 0){
    $CI =& get_instance();
    if($category_id>0){
        $allparentids = $CI->Common_Model->allparentids($category_id,'');
        //echo $allparentids;exit;
        if(!empty($allparentids)){
            $parentIdsArr = explode(',', $allparentids);
            $brand = $CI->Common_Model->FetchData('m_brand',"*","deleted_flag = 0 and category_id IN(".$allparentids.")");
        }else{
            $brand = $CI->Common_Model->FetchData('m_brand',"*","deleted_flag = 0 and category_id = ".$category_id);
        }
    }else{
        $brand = $CI->Common_Model->FetchData("m_brand", "*" , "deleted_flag =0");
    }
    return $brand;
}

function attributesByCategory($category_id = 0){
    $CI =& get_instance();
    if($category_id>0){
        $allparentids = $CI->Common_Model->allparentids($category_id,'');
        //echo $allparentids;exit;
        if(!empty($allparentids)){
            $parentIdsArr = explode(',', $allparentids);
            $attributes = $CI->Common_Model->db_query('SELECT A.*,B.attribute_name FROM m_attribute_value A LEFT JOIN m_attribute B ON A.attribute_id = B.attribute_id WHERE A.deleted_flag = 0 AND B.deleted_flag = 0 AND B.category_id IN("'.$allparentids.'")');
        }else{
            $attributes = $CI->Common_Model->db_query('SELECT A.*,B.attribute_name FROM m_attribute_value A LEFT JOIN m_attribute B ON A.attribute_id = B.attribute_id WHERE A.deleted_flag = 0 AND B.deleted_flag = 0 AND B.category_id ='.$category_id);
        }
    }else{
        $attributes = $CI->Common_Model->db_query('SELECT A.*,B.attribute_name FROM m_attribute_value A LEFT JOIN m_attribute B ON A.attribute_id = B.attribute_id WHERE A.deleted_flag = 0 AND B.deleted_flag = 0');
    }
    return $attributes;
}

function minPriceRange($category_id = 0){ 
    $CI =& get_instance();
    if($category_id>0){
        $allChildCategoryIds = $CI->Common_Model->allChildCategory($category_id);
        //echo $allChildCategoryIds;exit;
        if(!empty($allChildCategoryIds)){
            $categoryIdsArr = explode(',', $category_id.','.$allChildCategoryIds);
            $product = $CI->Common_Model->db_query("SELECT MIN(product_price) as minPrice FROM t_product WHERE deleted_flag = 0 and category_id IN(".$allChildCategoryIds.")");
        }else{
            $product = $CI->Common_Model->db_query("SELECT MIN(product_price) as minPrice FROM t_product WHERE deleted_flag = 0 and category_id = $category_id");//echo "<pre>";print_r($product);exit();
        }
    }else{
        $product = $CI->Common_Model->db_query("SELECT MIN(product_price) as minPrice FROM t_product WHERE deleted_flag = 0");
    }
    //echo "<pre>";print_r($product);exit();
    return $product[0]['minPrice'];
}

function maxPriceRange($category_id = 0){
    $CI =& get_instance();
    if($category_id>0){
        $allChildCategoryIds = $CI->Common_Model->allChildCategory($category_id);
        //echo $allChildCategoryIds;exit;
        if(!empty($allChildCategoryIds)){
            //$categoryIdsArr = explode(',', $allChildCategoryIds);
            $allChildCategoryIds = rtrim($category_id.','.$allChildCategoryIds,',');
            $product = $CI->Common_Model->db_query("SELECT MAX(product_price) as maxPrice FROM t_product WHERE deleted_flag = 0 and category_id IN(".$allChildCategoryIds.")");
        }else{
            $product = $CI->Common_Model->db_query("SELECT MAX(product_price) as maxPrice FROM t_product WHERE deleted_flag = 0 and category_id = $category_id");//echo "<pre>";print_r($product);exit();
        }
    }else{
        $product = $CI->Common_Model->db_query("SELECT MAX(product_price) as maxPrice FROM t_product WHERE deleted_flag = 0");
    }
    //echo "<pre>";print_r($product);exit();
    return $product[0]['maxPrice'];
}

function productsByCategory($category_id = 0,$vendor_id = 0){

    if($category_id == 0 && $_SESSION['header_search_category']>=0){
        $category_id = $_SESSION['header_search_category'];
    }

    $CI =& get_instance();
    $condition = '';

    if($vendor_id>0){
        $condition .= " AND A.vendor_id = $vendor_id ";
    }

    if($category_id == 0 && $_SESSION['header_search_txt'] != ''){
        $condition .= " AND A.product_name like  '%".$_SESSION['header_search_txt']."%' ";
    }
    //echo "<pre>";print_r($_SESSION['header_search_category']);exit();
    //echo $condition;exit;
    //echo $category_id;exit;
    if($category_id>0){
        $allChildCategoryIds = $CI->Common_Model->allChildCategory($category_id);
        //echo $allChildCategoryIds;exit;
        if(!empty($allChildCategoryIds)){
            $allChildCategoryIds = rtrim($category_id.','.$allChildCategoryIds,',');
            $product = $CI->Common_Model->db_query("SELECT A.*,B.company_name,C.brand_name FROM t_product A LEFT JOIN vendor_details B ON A.vendor_id = B.user_id LEFT JOIN m_brand C ON A.brand_id = C.brand_id WHERE A.deleted_flag = 0 ".$condition." and A.category_id IN(".$allChildCategoryIds.")");
        }else{
            $product = $CI->Common_Model->db_query("SELECT A.*,B.company_name,C.brand_name FROM t_product A LEFT JOIN vendor_details B ON A.vendor_id = B.user_id LEFT JOIN m_brand C ON A.brand_id = C.brand_id WHERE A.deleted_flag = 0 ".$condition." and A.category_id = $category_id");//echo "<pre>";print_r($product);exit();
        }
    }else{
        $product = $CI->Common_Model->db_query("SELECT A.*,B.company_name,C.brand_name FROM t_product A LEFT JOIN vendor_details B ON A.vendor_id = B.user_id LEFT JOIN m_brand C ON A.brand_id = C.brand_id WHERE A.deleted_flag = 0".$condition);
    }
    //echo "<pre>";print_r($_SESSION);exit();
    return $product;
}

function getProductAttributeDetails($arrtVals){ 
    $attrvals = '';
    if(!empty($arrtVals)){
        $arrtValsArr = explode(',', $arrtVals);
        foreach ($arrtValsArr as $val) {
            $CI =& get_instance();
            $product_attrs = $CI->Common_Model->db_query("SELECT B.attribute_name,C.attribute_value FROM t_product_attribute A LEFT JOIN m_attribute B ON A.attribute_id = B.attribute_id LEFT JOIN m_attribute_value C ON A.attribute_value_id = C.attribute_value_id WHERE A.product_attribute_id = $val");
            //echo "<pre>";print_r($product_attrs);exit();

            $attrvals .= $product_attrs[0]['attribute_name'].':'.$product_attrs[0]['attribute_value'].',';
        }
        $attrvals = rtrim($attrvals,',');
    }
    return $attrvals;
}

function updatestock($order_no){ 
    $CI =& get_instance();
    $bill_id   = $CI->Common_Model->FetchData("t_order", "bill_id", "order_no = '".$order_no."'");
    $bill_data = $CI->Common_Model->FetchData("t_cart", "*", "bill_id = '".$bill_id."' and cart_status = 1");
    if(!empty($bill_data)){
        foreach ($bill_data as $key => $billval) {
            $data_list = array(
                "product_id"            => $billval['product_id'],
                "stock"                 => -($billval['quantity']),
                "created_by"            => $billval['user_id'],
                "created_on"            => date('Y-m-d H:i:s'),
            );          
            $CI->Common_Model->dbinsertid("t_stock", $data_list);
        }
    }
}


function product_code($product_id){ 
    // echo "SELECT A.*,B.category_name,C.brand_name,D.company_name FROM t_product A LEFT JOIN mstr_category B ON A.category_id = B.category_id LEFT JOIN m_brand C ON A.brand_id = C.brand_id LEFT JOIN vendor_details D ON A.vendor_id = D.user_id WHERE A.product_id = ".$product_id;exit;
    $CI =& get_instance();
    $pdata = $CI->Common_Model->db_query("SELECT A.*,B.category_name,C.brand_name,D.company_name FROM t_product A LEFT JOIN mstr_category B ON A.category_id = B.category_id LEFT JOIN m_brand C ON A.brand_id = C.brand_id LEFT JOIN vendor_details D ON A.vendor_id = D.user_id WHERE A.product_id = ".$product_id);
    if(!empty($pdata)){

        if(!empty($pdata[0]['product_code'])){
            $pcode = $pdata[0]['product_code'];
        }else{
            $pcode = 'S'.$CI->Common_Model->getAbbreviation($pdata[0]['category_name'],1).'0'.$CI->Common_Model->getAbbreviation($pdata[0]['company_name']).$pdata[0]['vendor_id'].'0'.$pdata[0]['product_id'];
            $data_list = array(
                "product_code" => $pcode
            );
            $CI->Common_Model->update_records('t_product','product_id',$pdata[0]['product_id'],$data_list);
        }
        return $pcode;
    }
}

function encode_id($id)
{
    $CI =& get_instance();
    return urlencode($CI->encryption->encrypt($id));
}

function decode_id($encrypted)
{
    $CI =& get_instance();
    return $CI->encryption->decrypt(urldecode($encrypted));
}

function mask_number($number) {
    $length = strlen($number);
    return ($length <= 4) ? $number : str_repeat('*', $length - 4) . substr($number, -4);
}

// function build_tree_html($tree) {
//     $html = '<ul>';
//     foreach ($tree as $node) {
//         $html .= '<li>';
//         $html .= $node['custom_user_id']; // You can also show name, mobile, etc.
//         if (!empty($node['children'])) {
//             $html .= build_tree_html($node['children']);
//         }
//         $html .= '</li>';
//     }
//     $html .= '</ul>';
//     return $html;
// }

