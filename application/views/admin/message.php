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

          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Queries for Support</h3>
              </div>
              <!-- /.card-header -->
               <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Sl No</th>
                        <th>Customer Detials</th>
                        <th>Message</th>
                        <th>Replay</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if($records){ for($i=0;$i<count($records);$i++){ ?>
                      <tr>
                        <td><?php echo ($i+1);?></td>
                        <td>
                            <?php echo ($records[$i]['from_name'])?$records[$i]['from_name']:'--'; ?></br>
                            <?php echo ($records[$i]['from_mobile'])?$records[$i]['from_mobile']:'--'; ?></br>
                            <?php echo ($records[$i]['from_email'])?$records[$i]['from_email']:'--'; ?>
                        </td>
                        <td>
                          <?php echo ($records[$i]['message'])?$records[$i]['message']:'Attachment'; ?>
                          <br> <small><?php echo date("d M Y H:i A",strtotime($records[$i]['created_on'])); ?></small>
                        </td>
                        <td>
                          <a href="<?=site_url('adminlogin/messagehistory/').$records[$i]['from'];?>" class="btn btn-primary"><?php echo ($records[$i]['replay'] == 0)?'Replay':'Replied'?></a>
                        </td>
                      </tr>
                    <?php } }else{ ?>
                      <tr><td colspan="7">No record found</td></tr>
                    <?php } ?>
                    </tbody>
                   <!--  <tfoot>
                      <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                      </tr>
                    </tfoot> -->
                  </table>
              </div>
              <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
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
