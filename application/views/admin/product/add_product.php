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
            <!-- <h1 class="m-0 text-dark"> Product </h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard');?>">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Vendor</a></li>
              <li class="breadcrumb-item active"><?php echo $strAction; ?> Product</li>
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

          <!-- form start -->
          
            <div class="col-md-6">
              <form role="form" id="myForm" method="post" enctype="multipart/form-data" autocomplete="off">
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                  <div class="card-header">
                    <h3 class="card-title"><?php echo $strAction; ?> Product</h3>
                    <a href="<?=site_url('product');?>" class="btn btn-primary btn-xs float-right"> <i class="fas fa-list mr-1"></i> View Product</a>
                  </div>
                   <!--.card-header -->
                    <div class="card-body box-profile">

                        <div class="form-group">
                          <label for="category_id">Category <span class="text-danger">*</span></label>
                          <select class="form-control category_id" name="category_id" id="category_id" onchange="loadBrand('brand_id',this.value,0)">
                            <option value="">-Select-</option>
                           <?php if (!empty($category_list)) {
    foreach ($category_list as $key => $value) {

        if ($value['parent_id'] == 0) { ?>
            
            <option 
                value="<?= $value['category_id']; ?>"
                <?= (!empty($product_data) && $product_data[0]['category_id'] == $value['category_id']) ? 'selected' : ''; ?>>
                <?= $value['category_name']; ?>
            </option>

<?php   }
    }
} ?>

                          </select>
                        </div>

                        <div class="form-group">
                          <label for="product_name">Product Name <span class="text-danger">*</span></label>
                          <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Product Name" value="<?php echo (!empty($product_data[0]['product_name']))?$product_data[0]['product_name']:''; ?>">
                        </div>

                        <div class="form-group">
                          <label for="product_slug">Product Slug <span class="text-danger">*</span></label>
                          <input type="text" name="product_slug" class="form-control" id="product_slug" placeholder="Product Slug" value="<?php echo (!empty($product_data[0]['product_slug']))?$product_data[0]['product_slug']:''; ?>">
                        </div>
                        
                        <div class="form-group d-none">
                          <label for="product_price">RK No. <span class="text-danger">*</span></label>
                          <input type="text" name="rk_no" class="form-control" id="rk_no" placeholder="Enter RK NO." value="<?php echo (!empty($product_data[0]['rk_no']))?$product_data[0]['rk_no']:''; ?>">
                        </div>

                        <div class="form-group">
                          <label for="product_desc">Product Description</label>
                            <textarea name="product_desc"  class="form-control textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo (!empty($product_data[0]['product_desc']))?$product_data[0]['product_desc']:''; ?></textarea>
                        </div>
                        
                       <!--  <div class="form-group">
                          <label for="regular_price">Regular Price <span class="text-danger">*</span></label>
                          <input type="text" name="regular_price" class="form-control" id="regular_price" placeholder="Price" onkeypress="return isDecimal(event);" value="<?php echo (!empty($product_data[0]['actual_price']))?$product_data[0]['actual_price']:''; ?>">
                        </div> -->

                        <div class="form-group">
                          <label for="product_price">Actual Price <span class="text-danger">*</span></label>
                          <input type="text" name="product_price" class="form-control" id="product_price" placeholder="Price" onkeypress="return isDecimal(event);" value="<?php echo (!empty($product_data[0]['product_price']))?$product_data[0]['product_price']:''; ?>">
                        </div>

                        <div class="form-group">
                          <label for="brand_id">Brand</label>
                          <select class="form-control brand_id" name="brand_id" id="brand_id">
                            <option value="">-Select-</option>
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="product_image">Image</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="product_image" id="product_image">
                              <label class="custom-file-label" for="product_image">Choose file</label>
                            </div>
                            <?php if(!empty($product_data)) { ?>
                            <input type="hidden" name="old_product_image" id="old_product_image" value="<?php echo (!empty($product_data))?$product_data[0]['product_image']:'';?>">
                            <?php if(!empty($product_data[0]['product_image'])){ ?>
                            <div class="input-group-append">
                              <span class="input-group-text"><a class="text-primary" download href="<?php echo base_url().'uploads/product/'.$product_data[0]['product_image']; ?>" title="Product Image"><i class="fa fa-download"></i></a></span>
                            </div>
                            <?php } } ?>
                          </div>
                        </div>

                        <div class="form-group d-none">
                          <label for="product_seo_meta_tag">Product SEO Meta Tags</label>
                          <textarea name="product_seo_meta_tag" class="form-control" id="product_seo_meta_tag" placeholder="Product SEO Meta Tags"><?php echo (!empty($product_data[0]['product_seo_meta_tag']))?$product_data[0]['product_seo_meta_tag']:''; ?></textarea>                          
                        </div>
                        
                        <div class="form-group  d-none">
                          <label for="product_seo_meta_tag  ">Code No.</label>
                          <input type="text" name="code_no" class="form-control" value="<?php echo (!empty($product_data[0]['code_no']))?$product_data[0]['code_no']:''; ?>" placeholder="Enter Code No">
                        </div>
                        
                        <div class="form-group d-none">
                          <label for="description ">Description</label>
                          <textarea name="description" class="form-control" id="description" placeholder="Description"><?php echo (!empty($product_data[0]['description']))?$product_data[0]['description']:''; ?></textarea>                          
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
            <!-- /.col -->
            <?php if($product_id > 0){ ?>
            <div class="col-md-6">
              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title">Add More Product Images</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <div class="card-body box-profile">
                  <form role="form" id="productImgForm" method="post" enctype="multipart/form-data" autocomplete="off">
                    <div class="filter-container p-0 row">

                      <?php if(!empty($product_data[0]['product_image'])){ ?>

                      <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                        <a href="<?php echo base_url().'uploads/product/'.$product_data[0]['product_image']; ?>" data-toggle="lightbox" data-title="sample 2 - black">
                          <img src="<?php echo base_url().'uploads/product/'.$product_data[0]['product_image']; ?>" class="img-fluid mb-2" alt="<?php echo $product_data[0]['product_name']?>"/>
                        </a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-primary">Primary Image</a>
                      </div>

                      <?php }
                       if(!empty($product_images_data)){
                          foreach ($product_images_data as $key => $pimg) {
                        ?>
                      <!--   <div class="filtr-item col-sm-2 text-center" data-category="2, 4" data-sort="<?php echo $product_data[0]['product_name']; ?>">

                          <a href="<?php echo base_url().'uploads/product/'.$pimg['product_image']; ?>" data-toggle="lightbox" data-title="sample 2 - black">
                            <img src="<?php echo base_url().'uploads/product/'.$pimg['product_image']; ?>" class="img-fluid mb-2" alt="<?php echo $product_data[0]['product_name']; ?>"/>
                          </a>
                         <a href="javascript:void(0)" class="btn btn-sm btn-danger" title="Remove" onclick="delete_product_image(<?php echo $pimg['product_image_id']; ?>)">Delete Image <i class="fas fa-times"></i></a>
                        </div> -->
                        <?php
                          }
                        } 
                      ?>
                    </div>
                   <!--  <div class="form-group pimg-div">
                      <label for="product_images1">Image</label>
                      <div class="input-group">
                        <div class="col-sm-10">
                            <input type="file" accept="video/*" class="form-control product_images" name="product_images[]" id="product_images1">
                        <div class="custom-file">
                              <input type="file" class="custom-file-input product_images" name="product_images[]" id="product_images1">
                              <label class="custom-file-label" for="product_image1">Choose file</label>
                            </div>  
                        </div>
                        <div class="col-sm-2">
                          <a href="javascript:void(0)" class="btn btn-sm btn-default mr-2 btn-pimg-addmore" title="Add More"><i class="fas fa-plus"></i></a>
                          <a href="javascript:void(0)" class="btn btn-sm btn-default btn-pimg-remove" title="Remove" style="display: none;"><i class="fas fa-times"></i></a>
                        </div>
                      </div>
                    </div> -->
                    <!-- /.card-body -->
                    <!-- <div class="card-footer text-center">
                        <button type="submit" name="btnPimgSubmit" value="btnPimgSubmit" onclick="return validatePimg();" class="btn btn-primary">Submit</button>
                    </div> -->
                  </form>
                </div>
              <!--   <div class="card card-primary card-outline">
                  <div class="card-header">
                    <h3 class="card-title">Add Product Attributes</h3>
                  </div>
                 
                  <form role="form" id="productAttrForm" method="post" enctype="multipart/form-data" autocomplete="off">
                    <div class="card-body box-profile">

                        <div class="row">
                          <?php 
                            if(!empty($product_attr_data)){
                          ?>
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>SL#</th>
                                <th>Attribute</th>
                                <th>Attribute Value</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($product_attr_data as $pakey => $paval) {  ?>
                              <tr>
                                <td><?php echo $pakey+1; ?></td>
                                <td><?php echo $paval['attribute_name']; ?></td>
                                <td><?php echo $paval['attribute_value']; ?></td>
                                <td> <a href="javascript:void(0)" class="btn btn-sm btn-danger" title="Delete Product Attribute" onclick="delete_product_attribute(<?php echo $paval['product_attribute_id']; ?>)"> <i class="fas fa-times"></i></a> </td>
                              </tr>
                              <?php } ?>
                            </tbody>                            
                          </table>
                          <?php } ?>
                        </div>
                        <div class="row pattr-div">
                          <div class="col-sm-5">
                            <div class="form-group">
                              <label for="attribute_id">Product Attribute</label>
                              <select class="form-control attribute_id" name="attribute_id[]" id="attribute_id1">
                                <option value="">-Select-</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-group">
                              <label for="attribute_value">Product Attribute Value</label>
                              <select class="form-control attribute_value" name="attribute_value[]" id="attribute_value1">
                                <option value="">-Select-</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-2 mt-4">
                            <a href="javascript:void(0)" class="btn  btn-default mr-2 btn-pattr-addmore" title="Add More"><i class="fas fa-plus"></i></a>
                            <a href="javascript:void(0)" class="btn  btn-default btn-pattr-remove" title="Remove" style="display: none;"><i class="fas fa-times"></i></a>
                          </div>
                        </div>   
                                          
                    </div>
               
                    <div class="card-footer text-center">
                        <button type="submit" name="btnProductAttribute" value="btnProductAttribute" onclick="return validateProductAttribute();" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div> -->
                <!-- /.card -->
                <!-- <div class="card card-primary card-outline">
                  <div class="card-header">
                    <h3 class="card-title">Add Product Specification</h3>
                  </div>
              
                  <form role="form" id="productSpcForm" method="post" enctype="multipart/form-data" autocomplete="off">
                    <div class="card-body box-profile">

                        <div class="row">
                          <?php 
                            if(!empty($product_specif_data)){
                          ?>
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>SL#</th>
                                <th>Specification Head</th>
                                <th>Specification Value</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($product_specif_data as $pskey => $psval) {  ?>
                              <tr>
                                <td><?php echo $pskey+1; ?></td>
                                <td><?php echo $psval['specification_head']; ?></td>
                                <td><?php echo $psval['specification_value']; ?></td>
                                <td> <a href="javascript:void(0)" class="btn btn-sm btn-danger" title="Delete Product Specification" onclick="delete_product_specification(<?php echo $psval['product_specification_id']; ?>)"> <i class="fas fa-times"></i></a> </td>
                              </tr>
                              <?php } ?>
                            </tbody>                            
                          </table>
                          <?php } ?>
                        </div>
                        <div class="row pspc-div">
                          <div class="col-sm-5">
                            <div class="form-group">
                              <label for="specification_head">Specification Head</label>
                              <input type="text" class="form-control specification_head" name="specification_head[]" id="specification_head1">
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-group">
                              <label for="specification_value">Specification Value</label>
                              <input type="text" class="form-control specification_value" name="specification_value[]" id="specification_value1">
                            </div>
                          </div>
                          <div class="col-sm-2 mt-4">
                            <a href="javascript:void(0)" class="btn  btn-default mr-2 btn-pspc-addmore" title="Add More"><i class="fas fa-plus"></i></a>
                            <a href="javascript:void(0)" class="btn  btn-default btn-pspc-remove" title="Remove" style="display: none;"><i class="fas fa-times"></i></a>
                          </div>
                        </div>   
                                          
                    </div>
                   
                    <div class="card-footer text-center">
                        <button type="submit" name="btnProductSpecification" value="btnProductSpecification" onclick="return validateProductSpecification();" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div> -->
                <!-- /.card -->
               <!--  <div class="card card-primary card-outline">
                  <div class="card-header">
                    <h3 class="card-title">Add Product Features</h3>
                  </div>
               
              
                  <form role="form" id="productFtrForm" method="post" enctype="multipart/form-data" autocomplete="off">
                    <div class="card-body box-profile">

                        <div class="row">
                          <?php 
                            if(!empty($product_features_data)){
                          ?>
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>SL#</th>
                                <th>Product Features</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach ($product_features_data as $pfkey => $pfval) {  ?>
                              <tr>
                                <td><?php echo $pfkey+1; ?></td>
                                <td><?php echo $pfval['features']; ?></td>
                                <td> <a href="javascript:void(0)" class="btn btn-sm btn-danger" title="Delete Product Specification" onclick="delete_product_features(<?php echo $pfval['product_features_id']; ?>)"> <i class="fas fa-times"></i></a> </td>
                              </tr>
                              <?php } ?>
                            </tbody>                            
                          </table>
                          <?php } ?>
                        </div>
                        <div class="row ftr-div">
                          <div class="col-sm-10">
                            <div class="form-group">
                              <label for="specification_head">Features</label>
                              <input type="text" class="form-control features" name="features[]" id="features1">
                            </div>
                          </div>
                          <div class="col-sm-2 mt-4">
                            <a href="javascript:void(0)" class="btn  btn-default mr-2 btn-ftr-addmore" title="Add More"><i class="fas fa-plus"></i></a>
                            <a href="javascript:void(0)" class="btn  btn-default btn-ftr-remove" title="Remove" style="display: none;"><i class="fas fa-times"></i></a>
                          </div>
                        </div>   
                                          
                    </div>
         
                    <div class="card-footer text-center">
                        <button type="submit" name="btnProductFeatures" value="btnProductFeatures" onclick="return validateProductFeatures();" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div> -->
                <!-- /.card -->
              </div>
              <?php } ?>
              <!-- /.col -->
            </div>
        <!-- /.row -->
        <!-- /. form end -->
      </div><!-- /.container-fluid -->
    </section>
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

    $('.btn-pattr-addmore').on('click', function () {
      var rowNo = $('.pattr-div').length;
      var cloneRow = $('.pattr-div:last').clone(true);
      cloneRow.find('.attribute_id').val('');
      cloneRow.find('.attribute_value').val('');
      $(this).closest('.pattr-div').after(cloneRow);
      $.each($('.pattr-div'), function (e) {
          var rowNo = Number(e) + 1;
          $(this).find('.attribute_id').attr("id", "attribute_id" + rowNo);
          $(this).find('.attribute_value').attr("id", "attribute_value" + rowNo);          
      });
      //alert('attribute_value'+(Number(rowNo) + 1));
      $('.btn-pattr-remove').show();
    });

    $('.btn-pattr-remove').on('click', function () {
      $(this).closest('.pattr-div').remove();
      if ($('.btn-pattr-remove').length == 1)
        $('.btn-pattr-remove').hide();
      $.each($('.pattr-div'), function (e) {
          var rowNo = Number(e) + 1;
          $(this).find('.attribute_id').attr("id", "attribute_id" + rowNo);
          $(this).find('.attribute_value').attr("id", "attribute_value" + rowNo);
      });
    });

    $('.btn-pspc-addmore').on('click', function () {
      var rowNo = $('.pspc-div').length;
      var cloneRow = $('.pspc-div:last').clone(true);
      cloneRow.find('.specification_head').val('');
      cloneRow.find('.specification_value').val('');
      $(this).closest('.pspc-div').after(cloneRow);
      $.each($('.pspc-div'), function (e) {
          var rowNo = Number(e) + 1;
          $(this).find('.specification_head').attr("id", "specification_head" + rowNo);
          $(this).find('.specification_value').attr("id", "specification_value" + rowNo);          
      });
      //alert('attribute_value'+(Number(rowNo) + 1));
      $('.btn-pspc-remove').show();
    });

    $('.btn-pspc-remove').on('click', function () {
      $(this).closest('.pspc-div').remove();
      if ($('.btn-pspc-remove').length == 1)
        $('.btn-pspc-remove').hide();
      $.each($('.pspc-div'), function (e) {
          var rowNo = Number(e) + 1;
          $(this).find('.specification_head').attr("id", "specification_head" + rowNo);
          $(this).find('.specification_value').attr("id", "specification_value" + rowNo);
      });
    });

    $('.btn-ftr-addmore').on('click', function () {
      var rowNo = $('.ftr-div').length;
      var cloneRow = $('.ftr-div:last').clone(true);
      cloneRow.find('.features').val('');
      $(this).closest('.ftr-div').after(cloneRow);
      $.each($('.ftr-div'), function (e) {
          var rowNo = Number(e) + 1;
          $(this).find('.features').attr("id", "features" + rowNo);         
      });
      //alert('attribute_value'+(Number(rowNo) + 1));
      $('.btn-ftr-remove').show();
    });

    $('.btn-ftr-remove').on('click', function () {
      $(this).closest('.ftr-div').remove();
      if ($('.btn-ftr-remove').length == 1)
        $('.btn-ftr-remove').hide();
      $.each($('.ftr-div'), function (e) {
          var rowNo = Number(e) + 1;
          $(this).find('.features').attr("id", "features" + rowNo);
      });
    });

    $(document).on('change', '.attribute_id', function(event) {
      var idtxt = $(this).attr('id');
      idtxt = idtxt.replace("attribute_id", "attribute_value");
      loadAttributeValue(idtxt,$(this).val(),0);
      //alert(idtxt);
    });

    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    //$('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });

    loadBrand('brand_id',<?php echo (!empty($product_data[0]['category_id']))?$product_data[0]['category_id']:0;?>,<?php echo (!empty($product_data[0]['brand_id']))?$product_data[0]['brand_id']:0;?>);
    loadAttributes('attribute_id1',<?php echo (!empty($product_data[0]['category_id']))?$product_data[0]['category_id']:0;?>,0);
    bsCustomFileInput.init();
    // Summernote
    $('.textarea').summernote();

  });

  function loadBrand(controllerId,category_id=0,sel_val=0){
    $.ajax({
      method:'post',
      url: appUrl+'index.php/ajax/loadBrand',
      dataType:'json',
      data:{category_id:category_id},
      success:function(data){
        var bindData = '';
        if(data.status == 200){
          var datares = data.res;
          bindData += '<option value="">-Select-</option>';
          $.each(datares, function(i){
             var selected = (sel_val > 0 && datares[i].brand_id == sel_val)?'selected':'';         
            bindData += '<option value="'+datares[i].brand_id+'" '+selected+'>'+datares[i].brand_name+'</option>';
          });          
        }else{
          bindData += '<option value="">-Select-</option>';
        }
        $('#'+controllerId).html(bindData);
      }
    }); 
  }

  function loadAttributes(controllerId,category_id=0,sel_val=0){
    $.ajax({
      method:'post',
      url: appUrl+'index.php/ajax/loadAttributes',
      dataType:'json',
      data:{category_id:category_id},
      success:function(data){
        var bindData = '';
        if(data.status == 200){
          var datares = data.res;
          bindData += '<option value="">-Select-</option>';
          $.each(datares, function(i){
             var selected = (sel_val > 0 && datares[i].attribute_id == sel_val)?'selected':'';         
            bindData += '<option value="'+datares[i].attribute_id+'" '+selected+'>'+datares[i].attribute_name+'</option>';
          });          
        }else{
          bindData += '<option value="">-Select-</option>';
        }
        $('#'+controllerId).html(bindData);
      }
    }); 
  }

  function loadAttributeValue(controllerId,attribute_id=0,sel_val=0){
    $.ajax({
      method:'post',
      url: appUrl+'index.php/ajax/loadAttributeValue',
      dataType:'json',
      data:{attribute_id:attribute_id},
      success:function(data){
        var bindData = '';
        if(data.status == 200){
          var datares = data.res;
          bindData += '<option value="">-Select-</option>';
          $.each(datares, function(i){
             var selected = (sel_val > 0 && datares[i].attribute_value_id == sel_val)?'selected':'';         
            bindData += '<option value="'+datares[i].attribute_value_id+'" '+selected+'>'+datares[i].attribute_value+'</option>';
          });          
        }else{
          bindData += '<option value="">-Select-</option>';
        }
        $('#'+controllerId).html(bindData);
      }
    }); 
  }

  function validate(){
    $('#myForm').validate({
      rules: {
        category_id: {
          required: true,
        },
        product_name: {
          required: true,
        }, 
        product_slug: {
          required: true,
        }, 
        product_price: {
          required: true,
        }, 
      },
      messages: {
        category_id: {
          required: "Please select a category",
        },
        product_name: {
          required: "Please enter the product name",
        },
        product_slug: {
          required: "Please enter the product slug",
        },
        product_price: {
          required: "Please enter the product price",
        },
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  }

  function validatePimg(){
    $('#productImgForm').submit();
  }

  function delete_product_image(product_image_id){
    if(confirm('Are you sure about to delete this ?')){
      $.ajax({
        method:'post',
        url: appUrl+'index.php/ajax/delete_product_image',
        dataType:'json',
        data:{product_image_id:product_image_id},
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


  function validateProductAttribute(){
    $('#productAttrForm').submit();
  }

  function delete_product_attribute(product_attribute_id){
    if(confirm('Are you sure about to delete this ?')){
      $.ajax({
        method:'post',
        url: appUrl+'index.php/ajax/delete_product_attribute',
        dataType:'json',
        data:{product_attribute_id:product_attribute_id},
        success:function(data){
          var bindData = '';
          if(data.status == 200){ 
            alert('Product attribute deleted successfully');
            location.reload();
          }else{
            alert('Something went wrong!!!');
          }
        }
      });
    }
  }

  function validateProductSpecification(){
    $('#productSpcForm').submit();
  }

  function delete_product_specification(product_specification_id){
    if(confirm('Are you sure about to delete this ?')){
      $.ajax({
        method:'post',
        url: appUrl+'index.php/ajax/delete_product_specification',
        dataType:'json',
        data:{product_specification_id:product_specification_id},
        success:function(data){
          var bindData = '';
          if(data.status == 200){ 
            alert('Product specification deleted successfully');
            location.reload();
          }else{
            alert('Something went wrong!!!');
          }
        }
      });
    }
  }

  function validateProductFeatures(){
    $('#productFtrForm').submit();
  }

  function delete_product_features(product_features_id){
    if(confirm('Are you sure about to delete this ?')){
      $.ajax({
        method:'post',
        url: appUrl+'index.php/ajax/delete_product_features',
        dataType:'json',
        data:{product_features_id:product_features_id},
        success:function(data){
          var bindData = '';
          if(data.status == 200){ 
            alert('Product specification deleted successfully');
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