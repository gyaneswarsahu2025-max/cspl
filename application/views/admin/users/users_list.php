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
              <li class="breadcrumb-item active"> User List</li>
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
                <h3 class="card-title">User Lists</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
           <table id="example1" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Sl No</th>
      <th>  Name</th>
      <th>Parent ID</th>
 
  
      <th>  Email Id</th>
      <th>Mobile</th>
            <th>Address</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php if($users_list){ for($i=0; $i<count($users_list); $i++){ ?>
<tr>
  <td><?= ($i + 1); ?></td>
  <td>
    <a href="<?= site_url('vendor/vendordetails/' . $users_list[$i]['user_id']); ?>">
      <?= ($users_list[$i]['fullname']) ? $users_list[$i]['fullname'] : '--'; ?>
    </a>
  </td>
  <td><?= ($users_list[$i]['parent_id']) ? $users_list[$i]['parent_id'] : '--'; ?></td>
  <td><?= ($users_list[$i]['email']) ? $users_list[$i]['email'] : '--'; ?></td>
  <td><?= ($users_list[$i]['mobile']) ? $users_list[$i]['mobile'] : '--'; ?></td>
  <td><?= ($users_list[$i]['address']) ? $users_list[$i]['address'] : '--'; ?></td>
   


   <td>
    <?php if($users_list[$i]['user_status'] == "Active"){ ?>
      <a href="<?= site_url('Users/disable_user/' . $users_list[$i]['user_id']); ?>" 
         class="btn btn-success btn-sm" 
         title="Click to Deactivate" 
         onclick="return confirm('Are you sure to deactivate this blog?');">
        Active
      </a>
    <?php } else { ?>
      <a href="<?= site_url('Users/enable_user/' . $users_list[$i]['user_id']); ?>" 
         class="btn btn-danger btn-sm" 
         title="Click to Activate" 
         onclick="return confirm('Are you sure to activate this blog?');">
        Inactive
      </a>
    <?php } ?>
  </td>
  <td >   <a href="<?= site_url('Users/view_profile/' . $users_list[$i]['user_id'] ); ?>" 
         class="btn btn-primary btn-sm" 
         title=" " 
         > <i class="fas fa-eye"></i>
View
      </a>  </td>
<!--   <td>
    <?php if($users_list[$i]['delete_status'] == 0){ ?>
      <a href="<?= site_url('Users/disable_user/' . $users_list[$i]['user_id']); ?>" 
         class="btn btn-success btn-sm" 
         title="Click to Deactivate" 
         onclick="return confirm('Are you sure to deactivate this blog?');">
        Active
      </a>
    <?php } else { ?>
      <a href="<?= site_url('Users/enable_user/' . $users_list[$i]['user_id']); ?>" 
         class="btn btn-danger btn-sm" 
         title="Click to Activate" 
         onclick="return confirm('Are you sure to activate this blog?');">
        Inactive
      </a>
    <?php } ?>
  </td> -->
</tr>

    <?php } } ?>
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

  function vendorActivation(id,status){
    if(confirm('Are you sure?')){
      $.ajax({
        url : '<?=site_url('users/userActivation');?>',
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

   function updateuserstatus(userid,userstatus){
    var user_status = 'Active' ;
    if(status){
      user_status = 'Deactive' ;
    }
    $.ajax({
      method:'post',
      url: appUrl+'index.php/ajax/updateuserstatus',
      dataType:'json',
      data:{product_id:pid,is_feature:is_feature},
      success:function(data){
      }
    });
  }
</script>
</body>
</html>