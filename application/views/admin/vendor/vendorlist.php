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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Vendor Lists</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Sl No</th>
                      <th>Company Name</th>
                      <th>Owner Name</th>
                      <th>Company Contact No</th>
                      <th>Owner Contact No</th>
                      <th>Owner Email Id</th>
                      <th>Vendor Code</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if($records){ for($i=0;$i<count($records);$i++){ ?>
                    <tr>
                      <td><?php echo ($i+1);?></td>
                      <td><a href="<?=site_url('vendor/vendordetails/'.$records[$i]['user_id']);?>"><?php echo ($records[$i]['company_name'])?$records[$i]['company_name']:'--'; ?></a></td>
                      <td><?php echo ($records[$i]['owner_name'])?$records[$i]['owner_name']:'--'; ?></td>
                      <td><?php echo ($records[$i]['company_contact_no'])?$records[$i]['company_contact_no']:'--'; ?></td>
                      <td><?php echo ($records[$i]['owner_contact_no'])?$records[$i]['owner_contact_no']:'--'; ?></td>
                      <td><?php echo ($records[$i]['owner_email'])?$records[$i]['owner_email']:'--'; ?></td>
                      <td><?php echo ($records[$i]['vendor_code'])?$records[$i]['vendor_code']:'--'; ?></td>
                      <td><?php echo ($records[$i]['user_status'])?$records[$i]['user_status']:'--'; ?></td>
                      <td>
                        <?php if($records[$i]['user_status'] != 'Active'){ ?>
                          <a href="javascript:void(0)" class="btn btn-sm btn-primary" onclick="vendorActivation('<?php echo $records[$i]['user_id']; ?>','Active')">Activate</a>
                        <?php }else{ ?>
                          <a href="javascript:void(0)" class="btn btn-sm btn-warning" onclick="vendorActivation('<?php echo $records[$i]['user_id']; ?>','In-Active')">In-activate</a>
                        <?php } ?>                          
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

  function vendorActivation(id,status){
    if(confirm('Are you sure?')){
      $.ajax({
        url : '<?=site_url('vendor/vendorActivation');?>',
        data : {id : id,status : status},
        dataType: 'json',
        type:"POST",
        success: function(data){
          if(data.status == 200){
            alert(data.msg);
            location.reload();
          }
        }
      });
    }
  }
</script>
</body>
</html>