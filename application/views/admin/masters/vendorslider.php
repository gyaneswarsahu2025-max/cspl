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
              <li class="breadcrumb-item active">Home Slider</li>
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
          
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Vendor Image</h3>
              </div>
              <div class="card-body">
                <form role="form" id="validatevicon" method="post" enctype="multipart/form-data" autocomplete="off">

                  <label>Uploaded Vendor Icon Image</label>
                  <div class="filter-container p-3 row">
                 
                  </div>
                  <div class="clearfix"></div>
                  <div class="form-group pimg-div">
                    <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="product_image" id="product_image">
                              <label class="custom-file-label" for="product_image">Choose file</label>
                            </div>
                                                      </div>
                  </div>

                  
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                      <button type="submit" name="validatevicon" value="validatevicon" onclick="return validatevicon();" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Catalogue </h3>
              </div>
              <div class="card-body">
                <form role="form" id="promSliderForm" method="post" enctype="multipart/form-data" autocomplete="off">

                  <label>Uploaded Catalogue Image</label>
                  <div class="filter-container p-3 row">
                    <?php
                     if(!empty($t_catalouge)){ ?>
                      <?php  
                        foreach ($t_catalouge as $key => $pimg) {
                      ?>
                      <div class="filtr-item col-sm-2 text-center" data-category="2, 4" data-sort="Shopping Bell">

                        <a <?php if(!empty($pimg['link'])){ ?> target="_blank" href="<?php echo $pimg['link']; ?>" <?php } ?> >
                          <img src="<?php echo base_url().'uploads/home/'.$pimg['image']; ?>" class="img-fluid mb-1" alt="Shopping Bell"/>
                        </a>
                       <a href="javascript:void(0)" class="btn btn-sm btn-danger" title="Delete Image" onclick="delete_catalogue(<?php echo $pimg['id']; ?>)">Delete Image &nbsp; <i class="fas fa-times"></i></a>

                       <!-- <a href="javascript:void(0)" class="btn btn-sm btn-primary" title="Edit URL" onclick="edit_link(<?php echo $pimg['id']; ?>)">Edit &nbsp; <i class="fas fa-pen"></i></a>  -->                      
                      </div>
                      <?php
                        }
                      } 
                    ?>
                  </div>
                  <div class="clearfix"></div>
                  <div class="form-group pimg-div">
                    <div class="input-group">
                      <div class="col-sm-5">
                        <label>Upload Image <small class="text-danger">(Image size should be 770 X 330 px)</small></label>
                          <input type="file" class="form-control product_images" name="product_images[]" id="product_images1">
                      </div>
                      <div class="col-sm-5">
                        <label>URL</label>
                          <input type="text" class="form-control link" name="link[]" id="link1">
                      </div>
                      <div class="col-sm-2 mt-4 p-2">
                        <a href="javascript:void(0)" class="btn btn-sm btn-default mr-2 btn-pimg-addmore" title="Add More"><i class="fas fa-plus"></i></a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-default btn-pimg-remove" title="Remove" style="display: none;"><i class="fas fa-times"></i></a>
                      </div>
                    </div>
                  </div>

                  
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                      <button type="submit" name="btnCatlogSubmit" value="btnPimgSubmit" onclick="return validateProm();" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
         
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Promotional Image Slider</h3>
              </div>
              <div class="card-body">
                <form role="form" id="promSliderForm" method="post" enctype="multipart/form-data" autocomplete="off">

                  <label>Uploaded Promotional Image</label>
                  <div class="filter-container p-3 row">
                    <?php
                     if(!empty($t_promotional)){ ?>
                      <?php  
                        foreach ($t_promotional as $key => $pimg) {
                      ?>
                      <div class="filtr-item col-sm-2 text-center" data-category="2, 4" data-sort="Shopping Bell">

                        <a <?php if(!empty($pimg['link'])){ ?> target="_blank" href="<?php echo $pimg['link']; ?>" <?php } ?> >
                          <img src="<?php echo base_url().'uploads/home/'.$pimg['image']; ?>" class="img-fluid mb-1" alt="Shopping Bell"/>
                        </a>
                       <a href="javascript:void(0)" class="btn btn-sm btn-danger" title="Delete Image" onclick="delete_promotional(<?php echo $pimg['id']; ?>)">Delete Image &nbsp; <i class="fas fa-times"></i></a>

                       <!-- <a href="javascript:void(0)" class="btn btn-sm btn-primary" title="Edit URL" onclick="edit_link(<?php echo $pimg['id']; ?>)">Edit &nbsp; <i class="fas fa-pen"></i></a>  -->                      
                      </div>
                      <?php
                        }
                      } 
                    ?>
                  </div>
                  <div class="clearfix"></div>
                  <div class="form-group pimg-div">
                    <div class="input-group">
                      <div class="col-sm-5">
                        <label>Upload Image <small class="text-danger">(Image size should be 770 X 330 px)</small></label>
                          <input type="file" class="form-control product_images" name="product_images[]" id="product_images1">
                      </div>
                      <div class="col-sm-5">
                        <label>URL</label>
                          <input type="text" class="form-control link" name="link[]" id="link1">
                      </div>
                      <div class="col-sm-2 mt-4 p-2">
                        <a href="javascript:void(0)" class="btn btn-sm btn-default mr-2 btn-pimg-addmore" title="Add More"><i class="fas fa-plus"></i></a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-default btn-pimg-remove" title="Remove" style="display: none;"><i class="fas fa-times"></i></a>
                      </div>
                    </div>
                  </div>

                  
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                      <button type="submit" name="btnPromSubmit" value="btnPimgSubmit" onclick="return validateProm();" class="btn btn-primary">Submit</button>
                  </div>
                </form>
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
<?php $this->load->view('admin/common/script');?>

<!-- Ekko Lightbox -->
<script src="<?=base_url();?>assets/admin/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<link rel="stylesheet" href="<?=base_url();?>assets/admin/plugins/ekko-lightbox/ekko-lightbox.css">
<!-- Filterizr-->
<script src="<?=base_url();?>assets/admin/plugins/filterizr/jquery.filterizr.min.js"></script>
<script>

  $(function(){

      $('.btn-pimg-addmore').on('click', function () {
        var rowNo = $('.pimg-div').length;
        var cloneRow = $('.pimg-div:last').clone(true);
        cloneRow.find('.product_images').val('');
        $(this).closest('.pimg-div').after(cloneRow);
        $.each($('.pimg-div'), function (e) {
            var rowNo = Number(e) + 1;
            $(this).find('.product_images').attr("id", "product_images" + rowNo);
        });
        $('.btn-pimg-remove').show();
      });

      $('.btn-pimg-remove').on('click', function () {
        $(this).closest('.pimg-div').remove();
        if ($('.btn-pimg-remove').length == 1)
          $('.btn-pimg-remove').hide();
        $.each($('.pimg-div'), function (e) {
            var rowNo = Number(e) + 1;
            $(this).find('.product_images').attr("id", "product_images" + rowNo);
        });
      });

  });

  function validatePimg(){
    $('#homeSliderForm').submit();
  }
  
  function validatevicon(){
    $('#validatevicon').submit();
  }
  
  function validateProm(){
    $('#promSliderForm').submit();
  }

  function validateSideimg(){
    $('#homeSliderSideForm').submit();
  }

  function delete_catalogue(id){
    if(confirm('Are you sure about to delete this ?')){
      $.ajax({
        method:'post',
        url: appUrl+'index.php/ajax/delete_catalogue',
        dataType:'json',
        data:{id:id},
        success:function(data){
          var bindData = '';
          if(data.status == 200){ 
            alert('Image deleted successfully');
            location.reload();
          }else{
            alert('Something went wrong!!!');
          }
        }
      });
    }
  }
  
  function delete_promotional(id){
    if(confirm('Are you sure about to delete this ?')){
      $.ajax({
        method:'post',
        url: appUrl+'index.php/ajax/delete_promotional',
        dataType:'json',
        data:{id:id},
        success:function(data){
          var bindData = '';
          if(data.status == 200){ 
            alert('Image deleted successfully');
            location.reload();
          }else{
            alert('Something went wrong!!!');
          }
        }
      });
    }
  }

</script>
</body>
</html>