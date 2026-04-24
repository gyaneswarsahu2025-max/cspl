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
              <li class="breadcrumb-item"><a href="#">Report</a></li>
              <li class="breadcrumb-item active">Customer Lists</li>
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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Product Stock Report</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="col-md-6">
              <form method="post" enctype="multipart/form-data" autocomplete="off" action="<?=base_url();?>index.php/report/sale_report">
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                  <div class="card-header">
                    <h3 class="card-title">Product Stock Report</h3>
                  </div>
                  <!-- /.card-header -->
                    <div class="card-body box-profile">
                        <div class="form-group">
                          <label for="from_date">From Date <span class="text-danger">*</span></label>
                          <input type="date" name="from_date" class="form-control" id="from_date" placeholder="Product Name">
                        </div>

                        <div class="form-group">
                          <label for="to_date">To Date <span class="text-danger">*</span></label>
                          <input type="date" name="to_date" class="form-control" id="from_date" placeholder="Product Name">
                        </div>
                        
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer text-center">
                        <button type="submit" name="btnSubmit" value="Submit" onclick="return validate();" class="btn btn-primary">Submit</button>
                    </div>
                </div>
              </form>
              <!-- /.card -->
            </div>
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

</body>
</html>