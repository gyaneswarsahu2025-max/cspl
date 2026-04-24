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
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Masters</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=site_url('dashboard');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Masters</a></li>
              <li class="breadcrumb-item active">Category</li>
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
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Location</h3>
              </div>
              <div class="card-body p-0">
                 <form action="<?=site_url('masters/communication');?>" role="form" id="myForm" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="card-body">

                  <div class="form-group">
                    <label for="vendor_id">Select Vendor</label>
                    <select class="form-control" name="vendor_id">
                        <option>Select</option>
                        <?php if($vendors){ for($i=0;$i<count($vendors);$i++){?>
                            <option value="<?php echo $vendors[$i]['user_id'];?>"><?php echo $vendors[$i]['company_name'];?></option>
                        <?php }}?>
                    </select>
                  </div>

                   <div class="form-group">
                    <label for="msg">Message</label>
                    <textarea class="form-control form-control-sm" name="msg" id="msg" required=""></textarea>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submitBtn" value="Submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              </div>
              <div class="card-footer">
                <?php if($records){echo $sPages; }?>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Location</h3>
              </div>
              <div class="card-body p-0">
                <table class="table table-striped">
                  <tr>
                    <th>Sl No</th>
                    <th>Message</th>
                    <th>Date & Time</th>
                  </tr>
                  <?php if($records){ for($i=0;$i<count($records);$i++){?>
                    <tr>
                    <th><?=$i+1;?></th>
                    <th><?php if($records[$i]['to_id'] == 1){echo 'From :'.$records[$i]['vendor2'];}else{ echo 'To :'.$records[$i]['vendor'];}?> (<?=$records[$i]['msg'];?>)</th>
                    <th><?php echo isset($records[$i]['entry_dt_time'])?date('d-m-Y H:s:i', strtotime($records[$i]['entry_dt_time'])):'NA';?></th>
                  </tr>
                  <?php }}?>
                </table>
              </div>
              <div class="card-footer">
                <?php if($records){echo $sPages; }?>
              </div>
            </div>
          </div>
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

<div class="modal fade" id="modal-category-home-slider-img">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Category Home Slider Images</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table style="display: none;" id="tbl-category-slider-imgs" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Sl#</th>
              <th>Images</th>
              <th>Image URL</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="category-home-slider-imgs">
          </tbody>
        </table>
        <form id="form-category-slider-img" method="post" enctype="multipart/form-data">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Upload Image</th>
                <th>Image URL</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody class="addRow">
              <tr class="addRowTr">
                <td>
                  <div class="form-group">
                    <input type="file" class="form-control category_slider_img" id="category_slider_img1" name="category_slider_img[]">
                  </div>
                </td> 
                <td>
                  <div class="form-group">
                    <input type="text" placeholder="Please enter the image link here" class="form-control link" name="link[]" id="link1">
                  </div>
                </td>
                <td>
                  <a href="javascript:void(0)" class="btn btn-sm btn-default btn-addmore" title="Add More"><i class="fas fa-plus"></i></a>
                  <a href="javascript:void(0)" class="btn btn-sm btn-default btn-remove" title="Remove" style="display: none;"><i class="fas fa-minus"></i></a>
                </td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th colspan="2" class="text-center">
                  <input type="hidden" name="category_id" id="category_id">
                  <button type="submit" name="btnSave" id="btnSave" value="Submit" class="btn btn-primary">Save</button>
                </th>
              </tr>
            </tfoot>
          </table>
        </form>
      </div>
      <div class="modal-footer justify-content-between"></div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<?php $this->load->view('admin/common/script');?>
</body>
</html>