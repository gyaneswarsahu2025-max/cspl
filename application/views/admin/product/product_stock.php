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
              <li class="breadcrumb-item"><a href="#">Product</a></li>
              <li class="breadcrumb-item active">Product Stock</li>
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
                <h3 class="card-title">Add Stock for <b><?php echo $product_data[0]['product_name'] ?></b></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="myForm" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="card-body">

                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="attribute_name">Stock</label>
                      <input type="text" class="form-control form-control-sm" name="stock" id="stock" required>
                    </div>
                    
                    <div class="form-group col-md-6 mt-4">
                      <button type="submit" name="btnSubmit" value="Submit" onclick="return validate();" class="btn btn-primary">Submit</button>
                    </div>
                  </div>

                </div>
                <!-- /.card-body -->
              </form>

              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Total Stock</th>
                      <th>In-Stock</th>
                      <th>Out-Stock</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th><?php echo $total_stock; ?></th>
                      <th><?php echo $in_stock; ?></th>
                      <th><?php echo $total_stock + $out_stock; ?></th>
                    </tr>
                  </tbody>
                </table>
              </div>
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
      stock: {
        required: true,        
        number: true,
      }
    },
    messages: {
      stock: {
        required: "Please enter the stock quantity",
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