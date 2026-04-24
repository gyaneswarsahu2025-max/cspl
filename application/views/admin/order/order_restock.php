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
            <h1 class="m-0 text-dark"> Orders</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=site_url('dashboard');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Orders</a></li>
              <li class="breadcrumb-item active">Add Re-stock</li>
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


           <div class="col-md-5">
            <!-- jquery validation -->
            <div class="card card-primary">
              <!--<div class="card-header">
                <h3 class="card-title">Add/Edit Category</h3>
                <a href="<?//=site_url('masters/category');?>" class="btn btn-primary btn-xs float-right">List All</a>
              </div>-->
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="myForm" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="card-body">
                  <div class="form-group">
                    <label for="parent_id">Select OrderId</label>
                    <select class="form-control" name="order_id" id="order_id">
                      <option value="">-Select-</option>
                      <?php if(!empty($records)){
                              foreach ($records as $key => $value) { ?>
                                <option value="<?php echo $value['order_id']?>"><?php echo $value['order_no']?></option>  
                        <?php }
                      }?>  
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="product">Product Name</label>
                    <select class="form-control" name="product" id="product"></select>
                  </div>
                  
                  <div class="form-group">
                    <label for="qty">Product Return quantity</label>
                    <input class="form-control" name="qty" id="qty">
                  </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submitBtn" value="Submit" onclick="return validate();" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            </div>
            <!-- /.card -->
            <div class="col-md-7">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Sl No</th>
                      <th>Product Name</th>
                      <th>Restock Quantity</th>
                      <th>Date & Time</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php if($stock){ for($i=0;$i<count($stock);$i++){ ?>
                      <tr>
                      <td><?php echo ($i+1);?></td>
                      <td><?=$stock[$i]['prod'];?></td>
                      <td><?=$stock[$i]['stock'];?></td>
                      <td><?=$stock[$i]['updated_on'];?></td>
                    </tr>
                    <?php }} ?>
                  </tbody>
                </table>
            </div>
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
    bsCustomFileInput.init();
});

$("#order_id").change(function(e){
        //alert($(this).val());
            $.ajax({
                url : '<?=site_url("ajax/get_product")?>',
                data : {order_id : $(this).val()},
                dataType : 'HTML',
                type : 'POST',
                success: function (data) {
                    //console.log(data.exam_title);
                    $("#product").html(data);
            }
        });
    });

function validate(){
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
  });
}
</script>
</body>
</html>