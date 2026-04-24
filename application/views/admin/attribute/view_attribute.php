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
              <li class="breadcrumb-item active">Attribute</li>
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
            <?php } ?>
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
                <h3 class="card-title">Attribute Lists</h3>
                <a href="<?=site_url('attribute/add');?>" class="btn btn-primary btn-xs float-right"> <i class="fas fa-plus mr-1"></i> Add Attribute</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Sl No</th>
                      <th>Category Name</th>
                      <th>Attribute Name</th>
                      <th>Attribute Value</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if($records){ for($i=0;$i<count($records);$i++){ ?>
                    <tr>
                      <td><?php echo ($i+1);?></td>
                      <td><?php echo ($records[$i]['category_name'])?$records[$i]['category_name']:'--'; ?></td>
                      <td><?php echo ($records[$i]['attribute_name'])?$records[$i]['attribute_name']:'--'; ?></td>
                      <td><a href="javascript:void(0)" class="btn btn-sm btn-default" title="View Attribute Value" onclick="get_attribute_values(<?php echo $records[$i]['attribute_id']; ?>)"><i class="fas fa-eye"></i></a></td>
                      <td>
                        <a href="<?=site_url('attribute/edit/'.$records[$i]['attribute_id']);?>" class="btn btn-sm btn-default" title="Edit"><i class="fas fa-edit"></i></a>
                        <a href="<?=site_url('attribute/delete/'.$records[$i]['attribute_id']);?>" class="btn btn-sm btn-default" title="Delete"><i class="fas fa-trash" onclick="return confirm('Are you sure to delete this?');"></i></a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-default" onclick="add_attribute_values('<?php echo $records[$i]['attribute_id']; ?>')" title="Add Attribute Values"><i class="fas fa-plus"></i></a>
                      </td>
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

<div class="modal fade" id="modal-attribute-value">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add Attribute Value</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table style="display: none;" id="tbl-attribute-value" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Sl#</th>
              <th>Attribute Value</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="attribute-value-data">
          </tbody>
        </table>
        <form id="form-attribute-value" method="post">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Attribute Value</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody class="addRow">
              <tr class="addRowTr">
                <td>
                  <div class="form-group">
                    <input type="text" class="form-control attribute_value" id="attribute_value1" name="attribute_value[]" placeholder="Enter Attribute Value">
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
                  <input type="hidden" name="attribute_id" id="attribute_id">
                  <button type="button" name="btnSave" id="btnSave" value="Submit" class="btn btn-primary" onclick="save_attribute_value()">Save</button>
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

<div class="modal fade" id="modal-view-attribute-value">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Attribute Value List</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Sl#</th>
              <th>Attribute Value</th>
            </tr>
          </thead>
          <tbody id="attribute-value-list">
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
  $(document).ready(function () {

    $('.btn-addmore').on('click', function () {
      if(!validate_attribute_values())
        return false; 
      var rowNo = $('.addRowTr').length;
      var cloneRow = $('.addRowTr:last').clone(true);
      cloneRow.find('.attribute_value').val('');
      $(this).closest('.addRowTr').after(cloneRow);
      $.each($('.addRowTr'), function (e) {
          var rowNo = Number(e) + 1;
          $(this).find('.attribute_value').attr("id", "attribute_value" + rowNo);
      });
      $('.btn-remove').show();
    });

    $('.btn-remove').on('click', function () {
      $(this).closest('.addRowTr').remove();
      if ($('.btn-remove').length == 1)
        $('.btn-remove').hide();
      $.each($('.addRowTr'), function (e) {
          var rowNo = Number(e) + 1;
          $(this).find('.attribute_value').attr("id", "attribute_value" + rowNo);
      });
    });

    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });

  });
  function add_attribute_values(attribute_id){
    $.ajax({
       url     : appUrl+'index.php/ajax/get_attribute_values',
       type    : "POST",
       data    : {attribute_id:attribute_id}, 
       dataType: 'json',
       success : function(resp){
         if(resp.status == 200){
            var htmlData = '';
            if(resp.res.length > 0){
              $.each(resp.res, function (key, val) {
                var cnt = Number(key) + 1;
                htmlData += '<tr><td>'+cnt+'</td><td>'+val.attribute_value+'</td><td><a href="javascript:void(0)" class="btn btn-sm btn-danger" title="Remove"><i class="fas fa-times" onclick="delete_attribute_value('+val.attribute_value_id+','+attribute_id+')"></i></a></td></tr>';
              });    
              $('#tbl-attribute-value').show();          
            }else{
              $('#tbl-attribute-value').hide();
            }
            $('#attribute-value-data').html(htmlData);
         }
       }
    });
    $('#modal-attribute-value').modal('show');
    $('#attribute_id').val(attribute_id);
  }

  function validate_attribute_values(){
    var totRowNumber = $('.addRowTr').length;        
      for (var i = 1; i <= totRowNumber; i++){ 
         if($('#attribute_value'+ Number(i)).val() == ''){
            alert('Attribute value can not be blank.');
            $('#attribute_value'+ Number(i)).focus();
            return false;
         }
      } 
    return true;
  }

  function save_attribute_value(){
    if(!validate_attribute_values())
      return false; 
    $.ajax({
       url     : appUrl+'index.php/ajax/save_attribute_value',
       type    : "POST",
       data    : $('#form-attribute-value').serialize(), 
       dataType: 'json',
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
  } 

  function get_attribute_values(attribute_id){
    $.ajax({
       url     : appUrl+'index.php/ajax/get_attribute_values',
       type    : "POST",
       data    : {attribute_id:attribute_id}, 
       dataType: 'json',
       success : function(resp){
         if(resp.status == 200){
            var htmlData = '';
            if(resp.res.length > 0){
              $.each(resp.res, function (key, val) {
                var cnt = Number(key) + 1;
                htmlData += '<tr><td>'+cnt+'</td><td>'+val.attribute_value+'</td></tr>';
              });              
            }else{
              htmlData += '<tr><td colspan="2" class="text-center">No record found...</td></tr>';
            }
            $('#attribute-value-list').html(htmlData);
         }
       }
    });
    $('#modal-view-attribute-value').modal('show');
  } 

  function delete_attribute_value(attribute_value_id,attribute_id){
    if(confirm('Are you sure to delete this ?')){
      $.ajax({
         url     : appUrl+'index.php/ajax/delete_attribute_value',
         type    : "POST",
         data    : {attribute_value_id:attribute_value_id}, 
         dataType: 'json',
         success : function(resp){
            if(resp.status == 200){
              alert('Record deleted successfully');
              add_attribute_values(attribute_id);
            }else if(resp.status =='error'){
              alert('Something went wrong!!!');
            }
         }
      });
    }
  } 
</script>
</body>
</html>