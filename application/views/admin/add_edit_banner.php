<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <?php $this->load->view('admin/common/meta');?>
<div class="wrapper">

  <!-- Navbar -->
  <?php $this->load->view('admin/common/topnav');?>
  <!-- /.navbar -->
  <?php $this->load->view('admin/common/sidebar');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Masters</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=site_url('dashboard');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Masters</a></li>
              <li class="breadcrumb-item active">Banner</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php if($this->session->flashdata('success')){ ?>
            <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <strong>Success!</strong> <?=$this->session->flashdata('success')?>
            </div>
            <?php }?>
            <?php if($this->session->flashdata('error')){ ?>
            <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
                <strong>Error!</strong> <?=$this->session->flashdata('error')?>
            </div>
            <?php }?>
          </div>

          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add/Edit Banner</h3>
                <a href="<?=site_url('masters/banner');?>" class="btn btn-primary btn-xs float-right">List All</a>
              </div>
              
              <form role="form" id="bannerForm" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="card-body">

                  <div class="form-group">
                    <label for="banner_title">Banner Title</label>
                    <input type="text" class="form-control form-control-sm" name="banner_title" id="banner_title" required value="<?php echo (!empty($banner_data))?$banner_data[0]['banner_title']:'';?>">
                  </div>

                  <div class="form-group">
                    <label for="banner_link">Banner Link</label>
                    <input type="text" class="form-control form-control-sm" name="banner_link" id="banner_link" value="<?php echo (!empty($banner_data))?$banner_data[0]['banner_link']:'';?>">
                  </div>

                  <div class="form-group">
                    <label for="banner_order">Banner Order</label>
                    <input type="number" class="form-control form-control-sm" name="banner_order" id="banner_order" value="<?php echo (!empty($banner_data))?$banner_data[0]['banner_order']:'';?>">
                  </div>

                  <div class="form-group">
                    <label for="banner_status">Status</label>
                    <select class="form-control form-control-sm" required name="banner_status" id="banner_status">
                        <option value="">-Select-</option>
                        <option <?php echo (!empty($banner_data) && $banner_data[0]['banner_status'] == 1)?'selected':'';?> value="1">Active</option>
                        <option <?php echo (!empty($banner_data) && $banner_data[0]['banner_status'] == 0)?'selected':'';?> value="0">Inactive</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="banner_image">Banner Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="banner_image" id="banner_image">
                        <label class="custom-file-label" for="banner_image">Choose file</label>
                      </div>
                      <?php if(!empty($banner_data) && !empty($banner_data[0]['banner_image'])) { ?>
                      <input type="hidden" name="old_banner_image" value="<?php echo $banner_data[0]['banner_image'];?>">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <a class="text-primary" download href="<?php echo base_url().'uploads/banner/'.$banner_data[0]['banner_image']; ?>"><i class="fa fa-download"></i></a>
                        </span>
                      </div>
                      &nbsp;&nbsp;
                      <a href="<?=site_url('masters/delete_banner_image/'.$banner_data[0]['banner_id']);?>" class="btn btn-default" onclick="return confirm('Are you sure to delete this image?');"><i class="fas fa-trash"></i></a>
                      <?php } ?>
                    </div>
                  </div>

                </div>
                <div class="card-footer">
                  <button type="submit" name="submitBtn" value="Submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <?php $this->load->view('admin/common/footer');?>
</div>
<?php $this->load->view('admin/common/script');?>

<script type="text/javascript">
$(document).ready(function () {
    bsCustomFileInput.init();
});
</script>
</body>
</html>
