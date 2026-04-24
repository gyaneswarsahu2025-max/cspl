<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1>Change Password</h1> -->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Help & Support</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->

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

          <div class="col-md-6">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Terms & Conditions</h3>
              </div>
              <!-- /.card-header -->
               <div class="card-body">
                  <form method="post" autocomplete="off">
                <div class="card-body">
                  <div class="form-group">
                    <label for="terms">Add Terms & Conditions</label>
                    <textarea class="form-control form-control-sm" name="terms" id="terms" required=""></textarea>
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
          <!-- right column -->
          
          <!--/.col (right) -->
        </div>
        
        <div class="col-md-6">
            <div class="card card-primary">
            <div class="card-body">
                <h5>Our Privacy Policy</h5>
                <?php if(!empty($records)){?>
                <?php echo $records[0]['description'];?>
                <a href="<?=base_url();?>index.php/adminlogin/deleteterms/<?=$records[0]['id'];?>" class="btn btn-xs btn-default" onclick="return confirm('Are you sure to delete this?');"><i class="fas fa-trash"></i></a>
                <?php }?>
            </div>
            </div>
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
