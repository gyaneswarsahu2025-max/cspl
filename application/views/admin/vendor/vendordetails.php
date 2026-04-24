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
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Vendor Details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="#">User</a></li>
              <li class="breadcrumb-item active">Vendor User</li>
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
          <div class="col-md-4">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?=base_url();?>assets/admin/dist/img/admin.png"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $vendorData[0]['owner_name']; ?></h3>

                <p class="text-muted text-center">Company Details</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Company Name</b> <a class="float-right"><?php echo $vendorData[0]['company_name']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Contact No</b> <a class="float-right"><?php echo  $vendorData[0]['company_contact_no']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Pick up Address </b> <a class="float-right"><?php echo $vendorData[0]['year_of_establishment']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>GST No. </b> <a class="float-right"><?php echo  $vendorData[0]['GST_no']; ?></a>
                  </li>
                </ul>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-4">
            <!-- About Me Box -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <div class="card-body">
                <p class="text-muted text-center">Owner Details</p>
                 <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b> Name</b> <a class="float-right"><?php echo $vendorData[0]['owner_name']; ?> </a>
                  </li>
                  <li class="list-group-item">
                    <b>Contact No</b> <a class="float-right"><?php echo  $vendorData[0]['owner_contact_no']; ?> </a>
                  </li>
                  <li class="list-group-item">
                    <b>Email </b> <a class="float-right"><?php echo  $vendorData[0]['owner_email']; ?> </a>
                  </li>
                  <li class="list-group-item">
                    <b>Address </b> <a class="float-right"><?php echo  $vendorData[0]['city'].','.$vendorData[0]['state'].','.$vendorData[0]['country']; ?> </a>
                  </li>
                  <li class="list-group-item">
                    <b>PAN Card No. </b> <a class="float-right"><?php echo  $vendorData[0]['PAN_card_no']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Aadhar Card No. </b> <a class="float-right"><?php echo  $vendorData[0]['aadhar_card_no']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Registerd On </b> <a class="float-right"><?php echo  date("d M Y",strtotime($vendorData[0]['created_on'])); ?></a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

            <div class="col-md-4">
            <!-- About Me Box -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <div class="card-body">
                <p class="text-muted text-center">Bank Details</p>
                 <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Bank Name</b> <a class="float-right"><?php echo $vendorData[0]['bank_name']; ?> </a>
                  </li>
                  <li class="list-group-item">
                    <b>Account Name</b> <a class="float-right"><?php echo  $vendorData[0]['account_name']; ?> </a>
                  </li>
                  <li class="list-group-item">
                    <b>Account No. </b> <a class="float-right"><?php echo  $vendorData[0]['account_number']; ?> </a>
                  </li>
                  <li class="list-group-item">
                    <b>IFSC Code </b> <a class="float-right"><?php echo  $vendorData[0]['IFSC_code']; ?> </a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <div class="card-body">
                <p class="text-muted text-center">Other Documents</p>
                <div class="row">
                  <ul style="margin: auto;" class="fc-color-picker text-center" id="color-chooser">
                    <?php if(!empty($vendorData[0]['GST_no_file'])){ ?>
                    <li><a class="text-primary " download href="<?php echo base_url().'uploads/vendor/'.$vendorData[0]['GST_no_file']; ?>" title="View GST File"><i class="fa fa-download"></i></a></li>
                    <?php } if(!empty($vendorData[0]['company_PAN_file'])){ ?>
                    <li><a class="text-warning " download href="<?php echo base_url().'uploads/vendor/'.$vendorData[0]['company_PAN_file']; ?>" title="View Company PAN Card"><i class="fa fa-download"></i></a></li>
                    <?php } if(!empty($vendorData[0]['owner_PAN_file'])){ ?>
                    <li><a class="text-success " download href="<?php echo base_url().'uploads/vendor/'.$vendorData[0]['owner_PAN_file']; ?>" title="View Owner PAN Card"><i class="fa fa-download"></i></a></li>
                    <?php } if(!empty($vendorData[0]['aadhar_card_file'])){ ?>
                    <li><a class="text-danger " download href="<?php echo base_url().'uploads/vendor/'.$vendorData[0]['aadhar_card_file']; ?>" title="View Aadhar Card"><i class="fa fa-download"></i></a></li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
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
</body>
</html>