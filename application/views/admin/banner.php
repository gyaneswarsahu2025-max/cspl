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

  <!-- Content Wrapper -->
  <div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Masters</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=site_url('dashboard');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Masters</a></li>
              <li class="breadcrumb-item active">Banner</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Banner List</h3>
                <a href="<?=site_url('masters/add_edit_banner');?>" class="btn btn-primary btn-xs float-right">Add New</a>
              </div>
              <div class="card-body p-0">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Sl No</th>
                      <th>Title</th>
                      <th>Image</th>
                      <th>Link</th>
                      <th>Order</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if($records){ 
                        for($i=0;$i<count($records);$i++){ ?>
                    <tr>
                      <td><?=($i+1);?></td>
                      <td><?=$records[$i]['banner_title'];?></td>
                      <td>
                        <?php if(!empty($records[$i]['banner_image'])){ ?>
                          <img src="<?=base_url('uploads/banner/'.$records[$i]['banner_image']);?>" width="100" height="50">
                        <?php }else{ echo '--'; } ?>
                      </td>
                      <td><?=(!empty($records[$i]['banner_link']))?$records[$i]['banner_link']:'--';?></td>
                      <td><?=(!empty($records[$i]['banner_order']))?$records[$i]['banner_order']:'--';?></td>
                      <td><?=($records[$i]['banner_status'])?'Active':'Inactive';?></td>
                      <td>
                        <a href="<?=site_url('masters/add_edit_banner/'.$records[$i]['banner_id']);?>" class="btn btn-default btn-xs"><i class="fas fa-edit"></i></a>
                        <a href="<?=site_url('masters/delete_banner/'.$records[$i]['banner_id']);?>" class="btn btn-xs btn-default" onclick="return confirm('Are you sure to delete this?');"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php } }else{ ?>
                      <tr><td colspan="7">No record found</td></tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <div class="card-footer">
                <?php if($records){ echo $sPages; } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php $this->load->view('admin/common/footer');?>
</div>

<?php $this->load->view('admin/common/script');?>

<script type="text/javascript">
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
