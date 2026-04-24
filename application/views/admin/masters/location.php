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
          <!-- <div class="col-md-12">
              <div class="card card-primary">
                  <div class="card-header">
                      <h3 class="card-title">Employee Filter</h3>
                  </div>
                  <form method="post" action="">
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-3">
                                  <select name="department_id" id="department_id" class="form-control">
                                    <option value="">-Department-</option>
                                    <?php 
                                      if(!empty($departments)){
                                        foreach ($departments as $k => $v) {
                                          # code...
                                          echo '<option value="'.$v['department_id'].'">'.$v['department_name'].'</option>';
                                        }
                                      }
                                    ?>
                                  </select>
                              </div>
                              <div class="col-md-3">
                                  <input type="text" name="subject_name" class="form-control" id="subject_name" placeholder="Subject">
                              </div>
                              <div class="col-md-3">
                                  <label for="stream_id">&nbsp;</label>
                                  <input type="submit" name="submit" value="Search" class="btn btn-primary">
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
          </div> -->
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Location</h3>
                <a href="<?=site_url('masters/add_edit_location');?>" class="btn btn-primary btn-xs float-right">Add New</a>
              </div>
              <div class="card-body p-0">
                <table class="table table-striped">
                  <tr>
                    <th>Sl No</th>
                    <th>Location Name</th>
                    <th>Pincode</th>
                    <th>Delivery Cost</th>
                    <th>Actve Status</th>
                    <th>Action</th>
                  </tr>
                  <?php if($records){ for($i=0;$i<count($records);$i++){?>
                  <tr>
                    <td><?=($i+1);?></td>
                    <th><?=$records[$i]['location_name'];?></th>
                    <th><?=$records[$i]['pincode'];?></th>
                    <th><?=$records[$i]['delivery_cost'];?></th>
                    <th><?=($records[$i]['location_status'])?'Active':'In-Active';?></th>
                    <td>
                      <a href="<?=site_url('masters/add_edit_location/'.$records[$i]['location_id']);?>" class="btn btn-warning btn-xs">Edit</a>
                      <a href="<?=site_url('masters/delete_location/'.$records[$i]['location_id']);?>" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure to delete this?');">Delete</a>
                    </td>
                  </tr>
                  <?php }}?>
                </table>
              </div>
              <div class="card-footer">
                <?php if($records){echo $sPages; }?>
              </div>
            </div>
          </div>
          
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