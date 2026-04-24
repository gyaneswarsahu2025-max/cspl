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
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Master</a></li>
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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Brand Lists</h3>
                <a href="<?=site_url('brand/add');?>" class="btn btn-primary btn-xs float-right"> <i class="fas fa-plus mr-1"></i> Add Brand</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Sl No</th>
                      <th class="text-center">Brand Logo</th>
                      <th>Brand Name</th>
                      <th>Category Name</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if($records){ for($i=0;$i<count($records);$i++){ ?>
                    <tr>
                      <td><?php echo ($i+1);?></td>
                      <td class="text-center"><?php echo ($records[$i]['brand_logo'])? '<img src="'.base_url().'uploads/brand/'.$records[$i]['brand_logo'].'" width="50" height="50">':'--'; ?></td>
                      <td><?php echo ($records[$i]['brand_name'])?$records[$i]['brand_name']:'--'; ?></td>
                      <td><?php echo ($records[$i]['category_name'])?$records[$i]['category_name']:'--'; ?></td>
                      <td>
                        <a href="<?=site_url('brand/edit/'.$records[$i]['brand_id']);?>" class="btn btn-sm btn-default" title="Edit"><i class="fas fa-edit"></i></a>
                        <a href="<?=site_url('brand/delete/'.$records[$i]['brand_id']);?>" class="btn btn-sm btn-default" title="Delete"><i class="fas fa-trash" onclick="return confirm('Are you sure to delete this?');"></i></a>
                      </td>
                    </tr>
                  <?php } }else{ ?>
                    <tr><td colspan="7">No record found</td></tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->
  
  <!-- Main Footer -->
  <?php $this->load->view('admin/common/footer');?>
</div>
<?php $this->load->view('admin/common/script');?>
<script type="text/javascript">
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>