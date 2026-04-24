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
              <li class="breadcrumb-item active">Product</li>
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
                <h3 class="card-title">Product Lists</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Sl No</th>
                      <th>Name</th>
                      <th>Category</th>
                      <?php if($this->session->userdata('user_type') == 0){ ?>
                      <th>Company</th>  
                      <?php } ?>
                      <th>Price</th>
                      <th>Brand</th>
                      <th>Stock</th>
                      <th>Sell</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if($records){ for($i=0;$i<count($records);$i++){ ?>
                    <tr>
                      <td><?php echo ($i+1);?></td>   
                      <td>
                        <img src="<?=base_url();?>uploads/product/<?php echo $records[$i]['product_image']; ?>" width="30" height="30">
                        <?php echo ($records[$i]['product_name'])?$records[$i]['product_name']:'--'; ?>                          
                      </td>   
                      <td>
                        <?php echo ($records[$i]['category_name'])?$records[$i]['category_name']:'--'; ?>                          
                      </td>        
                      <?php if($this->session->userdata('user_type') == 0){ ?>                         
                      <td><?php echo ($records[$i]['company_name'])?$records[$i]['company_name']:'--'; ?></td>  
                      <?php } ?>                
                      <td><?php echo ($records[$i]['product_price'])?$records[$i]['product_price']:'--'; ?></td>                  
                      <td><?php echo ($records[$i]['brand_name'])?$records[$i]['brand_name']:'--'; ?></td>
                      <td><?php echo ($records[$i]['stock']>0)?$records[$i]['stock']:0; ?></td>
                      <td><?php echo ($records[$i]['sale']>0)?$records[$i]['sale']:0; ?></td>                      
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
  function updatefeaturedproduct(pid,status){
    var is_feature = 0 ;
    if(status){
      is_feature = 1 ;
    }
    $.ajax({
      method:'post',
      url: appUrl+'index.php/ajax/updatefeaturedproduct',
      dataType:'json',
      data:{product_id:pid,is_feature:is_feature},
      success:function(data){
      }
    });
  }
  function updatetodaydeal(pid,status){
    var todaydeal = 0 ;
    if(status){
      todaydeal = 1 ;
    }
    $.ajax({
      method:'post',
      url: appUrl+'index.php/ajax/updatetodaydeal',
      dataType:'json',
      data:{product_id:pid,todaydeal:todaydeal},
      success:function(data){
      }
    });
  }
</script>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
</body>
</html>