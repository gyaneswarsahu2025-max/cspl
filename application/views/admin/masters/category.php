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
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Location</h3>
                <a href="<?=site_url('masters/add_edit_category');?>" class="btn btn-primary btn-xs float-right">Add New</a>
              </div>
              <div class="card-body p-0">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>  
                  <tr>
                    <th>Sl No</th>
                    <th>Category</th>
                   
                    <th>Parent Category</th>
                    <th>Actve Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php if($records){ for($i=0;$i<count($records);$i++){?>
                  <tr>
                    <td><?=($i+1);?></td>
                    <th><?=$records[$i]['category_name'];?></th>
            
                    <th><?=($records[$i]['parent_category_name'])?$records[$i]['parent_category_name']:'--';?></th>
                    <th><?=($records[$i]['category_status'])?'Active':'In-Active';?></th>
                    <td>
                      <a href="<?=site_url('masters/add_edit_category/'.$records[$i]['category_id']);?>" class="btn btn-default btn-xs"><i class="fas fa-edit"></i></a>
                      <a href="<?=site_url('masters/delete_category/'.$records[$i]['category_id']);?>" class="btn btn-xs btn-default" onclick="return confirm('Are you sure to delete this?');"><i class="fas fa-trash"></i></a>
                      <?php if($records[$i]['parent_id'] == 0){ ?>
                      <a href="javascript:void(0)" class="btn btn-sm btn-default" onclick="add_category_home_slider('<?php echo $records[$i]['category_id']; ?>')" title="Add Category Home Slider"><i class="fas fa-plus"></i></a>
                      <?php if($records[$i]['status'] == 1){ ?>
                        <a href="disable/<?=$records[$i]['category_id'];?>" class="btn btn-primary btn-sm" title="Deliver Order" onclick="return confirm("Are you sure");"><i class="fa fa-lock-open" title="Lock Banner"></i></a>
                      <?php }?>
                      <?php if($records[$i]['status'] == 0){ ?>
                        <a href="enable/<?=$records[$i]['category_id'];?>" class="btn btn-primary btn-sm" title="Deliver Order" onclick="return confirm("Are you sure");"><i class="fa fa-lock"></i></a>
                      <?php }?>
  

                      </td>
                      <?php } ?>
                  </tr>
                  <?php } }else{ ?>
                    <tr><td colspan="7">No record found</td></tr>
                  <?php } ?>
                  </tbody>
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
<script type="text/javascript">
  $(document).ready(function () {

    $('.btn-addmore').on('click', function () {
      if(!validate_category_slider_img())
        return false; 
      var rowNo = $('.addRowTr').length;
      var cloneRow = $('.addRowTr:last').clone(true);
      cloneRow.find('.category_slider_img').val('');
      $(this).closest('.addRowTr').after(cloneRow);
      $.each($('.addRowTr'), function (e) {
          var rowNo = Number(e) + 1;
          $(this).find('.category_slider_img').attr("id", "category_slider_img" + rowNo);
      });
      $('.btn-remove').show();
    });

    $('.btn-remove').on('click', function () {
      $(this).closest('.addRowTr').remove();
      if ($('.btn-remove').length == 1)
        $('.btn-remove').hide();
      $.each($('.addRowTr'), function (e) {
          var rowNo = Number(e) + 1;
          $(this).find('.category_slider_img').attr("id", "category_slider_img" + rowNo);
      });
    });

    $("#form-category-slider-img").on('submit', function(e){
      e.preventDefault();
      if(!validate_category_slider_img())
        return false; 
      $.ajax({
         url     : appUrl+'index.php/ajax/save_category_slider_img',
         type    : "POST",
         data    : new FormData(this), 
         dataType: 'json',
         processData: false,
         contentType: false,
         success : function(resp){
           if(resp.status == 200){
              alert('Data saved successfully');
              location.reload();
           }else if(resp.status =='error'){
              alert('Something went wrong!!!');
              console.log(resp.msg);
           }
         }
      });
    });

  });

  function add_category_home_slider(category_id){
    $.ajax({
       url     : appUrl+'index.php/ajax/get_category_home_slider_img',
       type    : "POST",
       data    : {category_id:category_id}, 
       dataType: 'json',
       success : function(resp){
         if(resp.status == 200){
            var htmlData = '';
            if(resp.res.length > 0){
              $.each(resp.res, function (key, val) {
                var cnt = Number(key) + 1;
                htmlData += '<tr><td>'+cnt+'</td><td><img src="'+appUrl+'uploads/category/'+val.image+'" width="100" height="100"></td><td>'+val.link+'</td><td><a href="javascript:void(0)" class="btn btn-sm btn-danger" title="Remove"><i class="fas fa-times" onclick="delete_category_slider_image('+val.category_slider_image_id+','+val.category_id+')"></i></a></td></tr>';
              });    
              $('#tbl-category-slider-imgs').show();          
            }else{
              $('#tbl-category-slider-imgs').hide();
            }
            $('#category-home-slider-imgs').html(htmlData);
         }
       }
    });
    $('#modal-category-home-slider-img').modal('show');
    $('#category_id').val(category_id);
  }


  function delete_category_slider_image(category_slider_image_id,category_id){
    if(confirm('Are you sure to delete this ?')){
      $.ajax({
         url     : appUrl+'index.php/ajax/delete_category_slider_image',
         type    : "POST",
         data    : {category_slider_image_id:category_slider_image_id}, 
         dataType: 'json',
         success : function(resp){
            if(resp.status == 200){
              alert('Image deleted successfully');
              add_category_home_slider(category_id);
            }else if(resp.status =='error'){
              alert('Something went wrong!!!');
            }
         }
      });
    }
  } 

  function validate_category_slider_img(){
    var totRowNumber = $('.addRowTr').length;        
      for (var i = 1; i <= totRowNumber; i++){ 
         if($('#category_slider_img'+ Number(i)).val() == ''){
            alert('Slider image can not be blank.');
            $('#category_slider_img'+ Number(i)).focus();
            return false;
         }
         if($('#link'+ Number(i)).val() == ''){
            alert('Image url can not be blank.');
            $('#link'+ Number(i)).focus();
            return false;
         }
      } 
    return true;
  }

</script>
</body>
</html>