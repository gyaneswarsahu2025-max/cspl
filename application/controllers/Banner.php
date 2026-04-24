<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Common_Model');
    }

    // List Banners
    public function index() {
        $data['banner_list'] = $this->Common_Model->FetchData(
            'banner', "*", "deleted_status = 0"
        );
        $this->load->view('admin/banner_list', $data);
    }

    // // Add Banner Form + Save
    // public function add() {
    //     if ($this->input->post()) {

    //         $img = '';
    //         if (!empty($_FILES['banner_image']['name'])) {
    //             $img = "Banner_" . time() . ".jpg";
    //             move_uploaded_file($_FILES['banner_image']['tmp_name'], "uploads/banner/" . $img);
    //         }

    //         $insert = [
    //             "banner_title" => $this->input->post('banner_title'),
    //             "banner_image" => $img,
    //             "status"        => 1,
    //             "deleted_status" => 0
    //         ];

    //         $this->Common_Model->InsertData('banner', $insert);

    //         redirect('admin/Banner');
    //     }

    //     $this->load->view('admin/banner_add');
    // }

    // // Edit Banner
    // public function edit($id) {
    //     $data['banner'] = $this->Common_Model->FetchRow('banner', "*", "banner_id=$id");

    //     if ($this->input->post()) {

    //         $img = $data['banner']['banner_image'];

    //         if (!empty($_FILES['banner_image']['name'])) {
    //             $img = "Banner_" . time() . ".jpg";
    //             move_uploaded_file($_FILES['banner_image']['tmp_name'], "uploads/banner/" . $img);
    //         }

    //         $update = [
    //             "banner_title" => $this->input->post('banner_title'),
    //             "banner_image" => $img,
    //         ];

    //         $this->Common_Model->UpdateData('banner', $update, "banner_id=$id");

    //         redirect('admin/Banner');
    //     }

    //     $this->load->view('admin/banner_edit', $data);
    // }

    // // Soft Delete
    // public function delete($id) {
    //     $this->Common_Model->UpdateData('banner', ["deleted_status" => 1], "banner_id=$id");
    //     redirect('admin/Banner');
    // }

    // // Active / Deactive
    // public function status($id, $status) {
    //     $this->Common_Model->UpdateData('banner', ["status" => $status], "banner_id=$id");
    //     redirect('admin/Banner');
    // }
}
