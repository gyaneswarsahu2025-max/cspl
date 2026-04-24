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
              <li class="breadcrumb-item active">Location</li>
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
                <h3 class="card-title">Add/Edit Location</h3>
                <a href="<?=site_url('masters/location');?>" class="btn btn-primary btn-xs float-right">List All</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="myForm" method="post" autocomplete="off">
                <div class="card-body">
                  <div class="form-group">
                    <label for="location_name">Location Name</label>
                    <input type="text" class="form-control form-control-sm" name="location_name" id="location_name" required="" value="<?php echo (!empty($location_data))?$location_data[0]['location_name']:'';?>">
                  </div>
                  <div class="form-group">
                    <label for="pincode">Pincode</label>
                    <input type="text" class="form-control form-control-sm" name="pincode" id="pincode" required="" value="<?php echo (!empty($location_data))?$location_data[0]['pincode']:'';?>">
                  </div>
                  <div class="form-group">
                    <label for="delivery_cost">Delivery Cost</label>
                    <input type="text" class="form-control form-control-sm" name="delivery_cost" id="delivery_cost" required="" value="<?php echo (!empty($location_data))?$location_data[0]['delivery_cost']:'';?>">
                  </div>
                  <div class="form-group">
                    <label for="location_status">Status</label>
                    <select class="form-control form-control-sm" required="" name="location_status" id="location_status">
                        <option value="">-Select-</option>
                        <option <?php echo (!empty($location_data) && $location_data[0]['location_status'] == 1)?'selected':'';?> value="1">Active</option>
                        <option <?php echo (!empty($location_data) && $location_data[0]['location_status'] == 0)?'selected':'';?> value="0">In-Active</option>
                      </select>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submitBtn" value="Submit" class="btn btn-primary">Submit</button>
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
  /*$.validator.setDefaults({
    submitHandler: function () {
      // alert( "Form successful submitted!" );
      $('#myForm').submit();
    }
  });
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
  });*/
});
</script>
</body>
</html>