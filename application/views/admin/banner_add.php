<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <?php $this->load->view('admin/common/meta');?>
</head>
<body>
<div class="wrapper">

  <!-- Navbar -->
  <?php $this->load->view('admin/common/topnav');?>
  <?php $this->load->view('admin/common/sidebar');?>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?= $strAction ?> Banner</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= site_url('dashboard');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= site_url('banner');?>">Banner</a></li>
              <li class="breadcrumb-item active"><?= $strAction ?></li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">

        <!-- Flash messages -->
        <?php if($this->session->flashdata('success')){ ?>
        <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <i class="mdi mdi-check-circle font-32"></i><strong class="pr-1">Success!</strong> <?=$this->session->flashdata('success')?>
        </div>
        <?php }?>
        <?php if($this->session->flashdata('error')){ ?>
        <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <i class="mdi mdi-close-circle font-32"></i><strong class="pr-1">Error!</strong> <?=$this->session->flashdata('error')?>
        </div>
        <?php }?>

        <div class="row">
          <div class="col-md-6">
            <form role="form" id="bannerForm" method="post" enctype="multipart/form-data" autocomplete="off">
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title"><?= $strAction ?> Banner</h3>
                  <a href="<?= site_url('banner');?>" class="btn btn-primary btn-xs float-right"> <i class="fas fa-list mr-1"></i> View Banners</a>
                </div>

                <div class="card-body">

                  <!-- Banner Title -->
                  <div class="form-group">
                    <label for="banner_title">Banner Title <span class="text-danger">*</span></label>
                    <input type="text" name="banner_title" class="form-control" id="banner_title" placeholder="Enter Banner Title" value="<?= (!empty($banner_data['banner_title']))?$banner_data['banner_title']:''; ?>" required>
                  </div>

                  <!-- Banner Image -->
                  <div class="form-group">
                    <label for="banner_image">Banner Image <span class="text-danger">*</span></label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="banner_image" id="banner_image" onchange="previewImage(event)">
                        <label class="custom-file-label" for="banner_image">Choose file</label>
                      </div>
                      <?php if(!empty($banner_data['banner_image'])){ ?>
                        <input type="hidden" name="old_banner_image" value="<?= $banner_data['banner_image']; ?>">
                      <?php } ?>
                    </div>
                    <img id="image_preview" src="<?= !empty($banner_data['banner_image']) ? base_url('uploads/banner/'.$banner_data['banner_image']) : '' ?>" style="margin-top:10px; max-width:300px; <?= empty($banner_data['banner_image']) ? 'display:none;' : ''; ?>">
                  </div>

                  <!-- Banner Status -->
                  <div class="form-group">
                    <label>Status</label><br>
                    <input type="checkbox" name="status" <?= (!empty($banner_data['status']) && $banner_data['status']==1)?'checked':''; ?> data-toggle="toggle" data-on="Active" data-off="Inactive">
                  </div>

                </div>
                <div class="card-footer text-center">
                  <button type="submit" name="btnSubmit" value="Submit" class="btn btn-primary"><?= $strAction ?> Banner</button>
                </div>

              </div>
            </form>
          </div>
        </div>

      </div>
    </section>
  </div>

  <?php $this->load->view('admin/common/footer');?>
</div>

<?php $this->load->view('admin/common/script');?>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script>
  function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('image_preview');
      output.src = reader.result;
      output.style.display = 'block';
    };
    reader.readAsDataURL(event.target.files[0]);
  }

  $(document).ready(function(){
    bsCustomFileInput.init();
  });
</script>

</body>
</html>
