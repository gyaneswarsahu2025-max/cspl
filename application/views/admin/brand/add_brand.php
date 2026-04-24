<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//echo '<pre>';print_r($location_data);exit;
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
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0 text-dark"> Masters</h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=site_url('dashboard');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Masters</a></li>
              <li class="breadcrumb-item active">Brand</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <?php if($this->session->flashdata('success')){ ?>
            <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <i class="mdi mdi-close-circle font-32"></i><strong class="pr-1">Success !</strong> <?=$this->session->flashdata('success')?>
            </div>
            <?php }?>
            <?php if($this->session->flashdata('error')){ ?>
            <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
                <i class="mdi mdi-close-circle font-32"></i><strong class="pr-1">Error !</strong> <?=$this->session->flashdata('error')?>
            </div>
            <?php }?>
          </div>


           <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Brand</h3>
                <a href="<?=site_url('brand');?>" class="btn btn-primary btn-xs float-right"> <i class="fas fa-list mr-1"></i> View Brand</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="myForm" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="card-body">

                  <div class="form-group">
                    <label for="category_id">Category</label>
                    <select class="form-control category_id" name="category_id" id="category_id">
                      <option value="">-Select-</option>
                      <?php if(!empty($category_list)){
                              foreach ($category_list as $key => $value) { ?>
                                <option <?php echo (!empty($brand_data) && $brand_data[0]['category_id'] == $value['category_id'])?'selected':'';?> value="<?php echo $value['category_id']?>"><?php echo $value['category_name']?></option>  
                      <?php } } ?>  
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="brand_name">Brand Name</label>
                    <input type="text" class="form-control form-control-sm" name="brand_name" id="brand_name" required="" value="<?php echo (!empty($brand_data))?$brand_data[0]['brand_name']:'';?>">
                  </div>

                  <div class="form-group">
                    <label for="brand_desc">Description</label>
                    <textarea name="brand_desc"  class="form-control textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo (!empty($brand_data))?$brand_data[0]['brand_desc']:'';?></textarea>
                  </div>

                  <div class="form-group">
                    <label for="brand_logo">Logo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="brand_logo" id="brand_logo">
                        <label class="custom-file-label" for="brand_logo">Choose file</label>
                      </div>
                      <?php if(!empty($brand_data) && !empty($brand_data[0]['brand_logo'])) { ?>
                      <input type="hidden" name="old_brand_logo" id="old_brand_logo" value="<?php echo (!empty($brand_data))?$brand_data[0]['brand_logo']:'';?>">
                      <div class="input-group-append">
                        <span class="input-group-text"><a class="text-primary " download href="<?php echo base_url().'uploads/brand/'.$brand_data[0]['brand_logo']; ?>" title="Brand Logo"><i class="fa fa-download"></i></a></span>
                      </div>
                      <?php } ?>
                    </div>
                  </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="btnSubmit" value="Submit" onclick="return validate();" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <?php $this->load->view('admin/common/footer');?>
</div>
<?php $this->load->view('admin/common/script');?>

<script type="text/javascript">
$(document).ready(function () {
    bsCustomFileInput.init();
    // Summernote
    $('.textarea').summernote()
});

function validate(){
  $('#myForm').validate({
    rules: {
      brand_name: {
        required: true,
      }
    },
    messages: {
      brand_name: {
        required: "Please enter the brand name",
      }
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
}
</script>
</body>
</html>