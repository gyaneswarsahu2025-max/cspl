<?php
//print_r($records);exit;
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
            <h1 class="m-0 text-dark"> Vendor</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=site_url('dashboard');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Vendor</a></li>
              <li class="breadcrumb-item active">Vendor Details</li>
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
                <!--<h3 class="card-title">Company Name</h3>-->
                <a href="<?=site_url('report/vendors');?>" class="btn btn-primary btn-xs float-right">List All</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="myForm" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="card-body">

                  <div class="form-group">
                    <label for="company_name">Company Name</label>
                    <input type="text" class="form-control form-control-sm" name="company_name" id="company_name" required="" value="<?php echo (!empty($records))?$records[0]['company_name']:'';?>">
                  </div>

                  <div class="form-group">
                    <label for="owner_name">Owner Name</label>
                    <input type="text" class="form-control form-control-sm" name="owner_name" id="owner_name" required="" value="<?php echo (!empty($records))?$records[0]['owner_name']:'';?>">
                  </div>

                   <div class="form-group">
                    <label for="company_contact_no">Comapany Contact No.</label>
                    <input type="text" class="form-control form-control-sm" name="company_contact_no" id="company_contact_no" required="" value="<?php echo (!empty($records))?$records[0]['company_contact_no']:'';?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="owner_contact_no">Owner Contact No.</label>
                    <input type="text" class="form-control form-control-sm" name="owner_contact_no" id="owner_contact_no" required="" value="<?php echo (!empty($records))?$records[0]['owner_contact_no']:'';?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="owner_email">Owner Email</label>
                    <input type="text" class="form-control form-control-sm" name="owner_email" id="owner_email" required="" value="<?php echo (!empty($records))?$records[0]['owner_email']:'';?>">
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

</body>
</html>