<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <?php $this->load->view('admin/common/meta');?>
</head>
<body>
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
            <h1 class="m-0 text-dark">Banner List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Master</a></li>
              <li class="breadcrumb-item active">Banner</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row mb-2">
          <div class="col-md-12 text-right">
            <a href="<?= site_url('Masters/add_banner'); ?>" class="btn btn-primary btn-xs"><i class="fas fa-plus"></i> Add Banner</a>
          </div>
        </div>

        <div class="row">
          <div class="col-12">

            <?php if($this->session->flashdata('success')){ ?>
            <div class="alert alert-success alert-dismissible fade show">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <?= $this->session->flashdata('success') ?>
            </div>
            <?php }?>

            <?php if($this->session->flashdata('error')){ ?>
            <div class="alert alert-danger alert-dismissible fade show">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <?= $this->session->flashdata('error') ?>
            </div>
            <?php }?>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Banners</h3>
              </div>
              <div class="card-body">
                <table id="bannerTable" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Sl No</th>
                      <th>Title</th>
                      <th>Image</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if(!empty($banner_list)) { 
                      $i=1;
                      foreach($banner_list as $row){ ?>
                      <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $row['title'] ?></td>
                        <td>
                          <?php if($row['banner_image']){ ?>
                          <img src="<?= base_url('uploads/banner/'.$row['banner_image']) ?>" width="60" height="40">
                          <?php } else { echo "No Image"; } ?>
                        </td>
                        <td>
                          <input type="checkbox" <?= ($row['status']==1)?'checked':'' ?> data-toggle="toggle" data-on="Active" data-off="Inactive" onchange="updateStatus(<?= $row['banner_id'] ?>, $(this).prop('checked'))">
                        </td>
                        <td>
                          <a href="<?= site_url('banner/edit/'.$row['banner_id']) ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                          <a href="<?= site_url('banner/delete/'.$row['banner_id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this banner?');"><i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                    <?php } } else { ?>
                      <tr>
                        <td colspan="5" class="text-center">No banners found</td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>
    <!-- /.content -->
    
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  <?php $this->load->view('admin/common/footer');?>

</div>

<?php $this->load->view('admin/common/script');?>

<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script>
  $(function () {
    $('#bannerTable').DataTable({
      "responsive": true,
      "autoWidth": false
    });
  });

  function updateStatus(id, status){
    var newStatus = status ? 1 : 0;
    $.ajax({
      url: '<?= site_url("ajax/update_banner_status") ?>',
      type: 'POST',
      data: {banner_id: id, status: newStatus},
      success: function(response){
        // optional: show notification
      }
    });
  }
</script>

</body>
</html>
