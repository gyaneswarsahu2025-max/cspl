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
              <li class="breadcrumb-item"><a href="#">Order</a></li>
              <li class="breadcrumb-item active">Cancel Order</li>
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
                <h3 class="card-title">Cancel Order</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">                
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Sl No</th>
                      <th>Order Number</th>
                      <th>Order Date</th>
                      <th width="20%">Customer Details</th>
                      <th>View Product Details</th>
                      <th>Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if($records){ for($i=0;$i<count($records);$i++){ ?>
                    <tr>
                      <td><?php echo ($i+1);?></td>
                      <td><?php echo ($records[$i]['order_no'])?$records[$i]['order_no']:'--'; ?></td>
                      <td><?php echo (strtotime($records[$i]['order_time'])>0)?date("d M Y H:i A",strtotime($records[$i]['order_time'])):'--'; ?></td>
                      <td><?php echo ($records[$i]['name'])?$records[$i]['name']:'--'; ?><br/><?php echo ($records[$i]['mobile'])?$records[$i]['mobile']:'--'; ?><br/><?php echo ($records[$i]['email'])?$records[$i]['email']:'--'; ?><br/><b>Address</b> : <?php echo ($records[$i]['address'])?$records[$i]['address']:'--'; ?></td>
                      <td class="text-center"><a href="javascript:void(0)" class="btn btn-sm btn-default" onclick="return product_details('<?php echo $records[$i]['bill_id']; ?>')" title="Product Details"><i class="fas fa-eye"></i></a></td>
                      <td><?php echo ($records[$i]['order_price'])?$records[$i]['order_price']:'--'; ?></td>
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


<div class="modal fade" id="modal-product-details">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Product Details</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Sl#</th>
              <th>Product</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Total Price</th>
            </tr>
          </thead>
          <tbody id="product-details">
          </tbody>
        </table>
      </div>
      <div class="modal-footer justify-content-between"></div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

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


 function product_details(bill_id){
    $.ajax({
       url     : appUrl+'index.php/ajax/product_details',
       type    : "POST",
       data    : {bill_id:bill_id}, 
       dataType: 'json',
       success : function(resp){
        console.log(resp);
         if(resp.status == 200){
            var htmlData = '';
            var sub_total = 0;
            if(resp.res.length > 0){
              $.each(resp.res, function (key, datares) {
                var cnt = Number(key) + 1;
                htmlData += `<tr><td>`+cnt+`</td><td><img width="100" src="`+appUrl+'uploads/product/'+datares.product_image+`" alt="`+datares.product_name+`"></td><td> ₹ `+datares.price+`</td><td>`+datares.quantity+`</td><td> ₹ `+datares.total_price+`</td></tr>`;

              sub_total = parseFloat(sub_total) + parseFloat(datares.total_price);
              });              
              htmlData += `<tr><th colspan="4" class="text-center">Sub Total</th><th> ₹ `+sub_total.toFixed(2)+`</th></tr>`;
            }else{
              htmlData += `<tr><td colspan="2" class="text-center">No record found...</td></tr>`;
            }
            $('#product-details').html(htmlData);
         }
       }
    });
    $('#modal-product-details').modal('show');
  } 

</script>
</body>
</html>
