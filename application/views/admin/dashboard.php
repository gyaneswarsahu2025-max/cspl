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
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        

        <!-- Main row -->
        <div class="row d-flex align-items-center justify-content-center">
          <!-- Left col -->
          <div class="col-md-8">
            
            <!-- TABLE: LATEST ORDERS -->
                         <h2>Welcome Admin </h2>
             <img alt="Celtic Life Science – Trusted Pharmaceutical Company in India" width="100%" height="120"    style="border-radius:12px;"  src="<?=base_url('website_assets/img/celtic.png') ?>">

            <!-- /.card -->
          </div>
          <!-- /.col -->

       
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
  <!-- Main Footer -->
  <?php $this->load->view('admin/common/footer');?>
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
</div>
<?php $this->load->view('admin/common/script');?>

<script src="<?=base_url();?>assets/admin/plugins/chart.js/Chart.min.js"></script>
<script type="text/javascript">
  $(function () {

  'use strict'

  /* ChartJS
   * -------
   * Here we will create a few charts using ChartJS
   */

  //-----------------------
  //- MONTHLY SALES CHART -
  //-----------------------

  // Get context with jQuery - using jQuery's .get() method.
  var salesChartCanvas = $('#salesChart').get(0).getContext('2d')

  var salesChartData = {
    labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [
      {
        label               : 'Digital Goods',
        backgroundColor     : 'rgba(60,141,188,0.9)',
        borderColor         : 'rgba(60,141,188,0.8)',
        pointRadius          : false,
        pointColor          : '#3b8bba',
        pointStrokeColor    : 'rgba(60,141,188,1)',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data                : [28, 48, 40, 19, 86, 27, 90]
      },
      {
        label               : 'Electronics',
        backgroundColor     : 'rgba(210, 214, 222, 1)',
        borderColor         : 'rgba(210, 214, 222, 1)',
        pointRadius         : false,
        pointColor          : 'rgba(210, 214, 222, 1)',
        pointStrokeColor    : '#c1c7d1',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(220,220,220,1)',
        data                : [65, 59, 80, 81, 56, 55, 40]
      },
    ]
  }

  var salesChartOptions = {
    maintainAspectRatio : false,
    responsive : true,
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        gridLines : {
          display : false,
        }
      }],
      yAxes: [{
        gridLines : {
          display : false,
        }
      }]
    }
  }

  // This will get the first returned node in the jQuery collection.
  var salesChart = new Chart(salesChartCanvas, { 
      type: 'line', 
      data: salesChartData, 
      options: salesChartOptions
    }
  )

  //---------------------------
  //- END MONTHLY SALES CHART -
  //---------------------------

  //-------------
  //- PIE CHART -
  //-------------
  // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = {
      labels: [
          'Chrome', 
          'IE',
          'FireFox', 
          'Safari', 
          'Opera', 
          'Navigator', 
      ],
      datasets: [
        {
          data: [700,500,400,600,300,100],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var pieOptions     = {
      legend: {
        display: false
      }
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'doughnut',
      data: pieData,
      options: pieOptions      
    })

  //-----------------
  //- END PIE CHART -
  //-----------------

  /* jVector Maps
   * ------------
   * Create a world map with markers
   */
  $('#world-map-markers').mapael({
      map: {
        name : "usa_states",
        zoom: {
          enabled: true,
          maxLevel: 10
        },
      },
    }
  );

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