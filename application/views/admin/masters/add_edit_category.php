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
            <h1 class="m-0 text-dark"> Masters</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=site_url('dashboard');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Masters</a></li>
              <li class="breadcrumb-item active">Category</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
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
                <h3 class="card-title">Add/Edit Category</h3>
                <a href="<?=site_url('masters/category');?>" class="btn btn-primary btn-xs float-right">List All</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="myForm" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="card-body">

                  <div class="form-group">
                    <label for="category_name">Category Name</label>
                    <input type="text" class="form-control form-control-sm" name="category_name" id="category_name" required="" value="<?php echo (!empty($category_data))?$category_data[0]['category_name']:'';?>">
                  </div>

                   <div class="form-group">
                    <label for="category_subname">Category Desc</label>
                    <input type="text" class="form-control form-control-sm" name="category_subname" id="category_subname" required="" value="<?php echo (!empty($category_data))?$category_data[0]['category_subname']:'';?>">
                  </div>

                  <div class="form-group">
                    <label for="parent_id">Select Parent Category</label>
                    <select class="form-control" name="parent_id" id="parent_id">
                      <option value="">-Select-</option>
                      <?php if(!empty($parent_category)){
                              foreach ($parent_category as $key => $value) { ?>
                                <option <?php echo (!empty($category_data) && $category_data[0]['parent_id'] == $value['category_id'])?'selected':'';?> value="<?php echo $value['category_id']?>"><?php echo $value['category_name']?></option>  
                        <?php }
                      }?>  
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="category_status">Status</label>
                    <select class="form-control form-control-sm" required="" name="category_status" id="category_status">
                        <option value="">-Select-</option>
                        <option <?php echo (!empty($category_data) && $category_data[0]['category_status'] == 1)?'selected':'';?> value="1">Active</option>
                        <option <?php echo (!empty($category_data) && $category_data[0]['category_status'] == 0)?'selected':'';?> value="0">In-Active</option>
                      </select>
                  </div>

                  <div class="form-group">
                    <label for="category_image">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="category_image" id="category_image">
                        <label class="custom-file-label" for="category_image">Choose file</label>
                      </div>
                      <?php if(!empty($category_data) && !empty($category_data[0]['category_image'])) { ?>
                      <input type="hidden" name="old_category_image" id="old_category_image" value="<?php echo (!empty($category_data))?$category_data[0]['category_image']:'';?>">
                      <div class="input-group-append">
                        <span class="input-group-text"><a class="text-primary " download href="<?php echo base_url().'uploads/category/'.$category_data[0]['category_image']; ?>" title="Category Image"><i class="fa fa-download"></i></a></span>
                      </div>
                      &nbsp; &nbsp;
                      <a title="Remove Category Image" href="<?=site_url('masters/delete_category_image/'.$category_data[0]['category_id']);?>" class="btn btn-default" onclick="return confirm('Are you sure to delete this image?');"><i class="fas fa-trash"></i></a>
                      <?php } ?>
                    </div>
                  </div>

                  <div class="form-group d-none">
                    <label for="category_name">Category Icon Class</label>
                    <input type="text" class="form-control form-control-sm" name="category_icon_class" id="category_icon_class" value="<?php echo (!empty($category_data[0]['category_icon_class']))?$category_data[0]['category_icon_class']:'';?>">
                  </div>
                  
                  <div class="form-group d-none">
                    <label for="category_name">Product display Nos. In Row</label>
                    <input type="text" class="form-control form-control-sm" name="nos" id="nos" value="<?php echo (!empty($category_data[0]['nos']))?$category_data[0]['nos']:'';?>">
                  </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submitBtn" value="Submit" onclick="return validate();" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
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
});
function validate(){
  $('#myForm').validate({
    rules: {
      location_name: {
        required: true,
      },
      location_status: {
        required: true,
      },
    },
    messages: {
      location_name: {
        required: "Please enter location name",
      },
      location_status: {
        required: "Please select location status",
      },
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