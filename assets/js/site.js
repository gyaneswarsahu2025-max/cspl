$(document).ready(function(){
  updatecart();
});

function productquickview(encId){
  $.ajax({
    method:'post',
    url: appUrl+'index.php/ajax/productquickview',
    dataType:'json',
    data:{encId:encId},
    success:function(data){
      var bindData = '';
      if(data.status == 200){
        var datares = data.res.productdetails;
        var product_features_data = data.res.product_features_data;
        var bindImages = `<div class="item">
          <img height="613" width="603" src="`+appUrl+'uploads/product/'+datares.product_image+`" alt="`+datares.product_name+`">
        </div>`;
        $('#product-quickview').find('.ps-product__images').html(bindImages);         
        $('#product-quickview').find('.ps-product_name').html(datares.product_name);         
        $('#product-quickview').find('.ps-brand_name').html(datares.brand_name);         
        $('#product-quickview').find('.ps-product__price').html(' ₹ '+datares.product_price);
        $('#product-quickview').find('.ps-product__seller').html(datares.company_name); 
        $('#product-quickview').find('.ps-rkno').html(datares.rk_no);
        //$('#product-quickview').find('.ps-product__seller').attr('href',); 
        var bindData = '';   
        if(product_features_data.length > 0){
          $.each(product_features_data, function(index, fdata) {
            bindData += `<li>` +fdata.features+ `</li>`;
          });
          $('.product-quickview-feature').html(bindData);
        }     
      }
    }
  }); 
}


/*=====================
  Product page Quantity Counter
==========================*/
$('.qnty-up').on('click', function () {
    var qty = $('.qty-box');
    var currentVal = parseInt(qty.val(), 10);
    if (!isNaN(currentVal) && currentVal < 10) {
        qty.val(currentVal + 1);
    }
});
$('.qnty-down').on('click', function () {
    var qty = $('.qty-box');
    var currentVal = parseInt(qty.val(), 10);
    if (!isNaN(currentVal) && currentVal > 1) {
        qty.val(currentVal - 1);
    }
});

/*=====================
 Product Details page add to Cart
==========================*/
$('.btn-add-cart').on('click', function () {
  $('.attr-msg').hide();
  var err = 0;
  $(".hdnattr").each(function(){
    if($(this).val() == ''){
        err++;
        $(this).next('.attr-msg').show();
        return false;
    }
  });
  var qty = $('.qty-box').val();
  var pid = $('.cart-product-id').val();

  var attrVals = [];
  $(".hdnattr").each(function(){
    attrVals.push($(this).val());
  });

  if(err == 0){
    $.ajax({
      method:'post',
      url: appUrl+'index.php/ajax/addtocart',
      dataType:'json',
      data:{pid:pid,qty:qty,attrVals:attrVals},
      success:function(data){
        var bindData = '';
        if(data.status == 200){
           updatecart();   
        }
      }
    }); 
  }
});


/*=====================
  Product Details page buy now
==========================*/
$('.btn-buy-now').on('click', function () {
  $('.attr-msg').hide();
  var err = 0;
  $(".hdnattr").each(function(){
    if($(this).val() == ''){
        err++;
        $(this).next('.attr-msg').show();
        return false;
    }
  });
  var qty = $('.qty-box').val();
  var pid = $('.cart-product-id').val();

  var attrVals = [];
  $(".hdnattr").each(function(){
    attrVals.push($(this).val());
  });

  if(err == 0){
    $.ajax({
      method:'post',
      url: appUrl+'index.php/ajax/addtocart',
      dataType:'json',
      data:{pid:pid,qty:qty,attrVals:attrVals},
      success:function(data){
        var bindData = '';
        if(data.status == 200){
          window.location.href =  appUrl+'index.php/site/cart';
        }
      }
    }); 
  }
});

/*=====================
 Update Cart
==========================*/
function updatecart(){
  $.ajax({
    method:'post',
    url: appUrl+'index.php/ajax/updatecart',
    dataType:'json',
    success:function(data){
      var bindData = '';
      if(data.status == 200){
        var dataresult = data.res;
        $('.cart-count').text((dataresult.length)?dataresult.length:0);
          var sub_total = 0;
          if(dataresult.length > 0){
           bindData += `<div class="ps-cart__items">`;
            $.each(dataresult, function(index, datares) {
              bindData += `<div class="ps-product--cart-mobile">
                  <div class="ps-product__thumbnail"><a href="#"><img src="`+appUrl+'uploads/product/'+datares.product_image+`" alt="`+datares.product_name+`"></a></div>
                  <div class="ps-product__content"><a title="Remove From Cart" class="ps-product__remove" onclick="return deletecartitem(`+datares.cart_id+`)" href="#"><i class="icon-cross"></i></a><a href="product-default.html">`+datares.product_name+`</a>
                      <p><strong>Sold by:</strong> `+datares.company_name+`</p><small>`+datares.quantity+` x  ₹ `+datares.price+`</small>
                  </div>
              </div>`;
              sub_total = parseFloat(sub_total) + parseFloat(datares.total_price);
          }); 
          bindData += `</div>`;
          bindData += `<div class="ps-cart__footer">
              <h3>Sub Total:<strong> ₹ `+sub_total.toFixed(2)+`</strong></h3>
              <figure><a class="ps-btn" href="`+appUrl+`index.php/site/cart">View Cart</a><a class="ps-btn" href="`+appUrl+`index.php/site/checkout">Checkout</a></figure>
          </div>`;
        }else{
          bindData += `<div class="ps-cart__items text-center"><h4>Your cart is empty !!!</h4></div>`;
        }
        $('.cart-data').html(bindData);
      }
    }
  }); 
}

/*=====================
 Delete Cart Item
==========================*/
function deletecartitem(cart_id){
  $.ajax({
    method:'post',
    url: appUrl+'index.php/ajax/deletecartitem',
    dataType:'json',
    data:{cart_id:cart_id},
    success:function(data){
      var bindData = '';
      if(data.status == 200){
         updatecart();   
      }
    }
  }); 
}

/*=====================
 Delete Cart Item
==========================*/
function deletecartitems(cart_id){
  $.ajax({
    method:'post',
    url: appUrl+'index.php/ajax/deletecartitem',
    dataType:'json',
    data:{cart_id:cart_id},
    success:function(data){
      var bindData = '';
      if(data.status == 200){
         location.reload();   
      }
    }
  }); 
}


/*=====================
  Cart page Quantity Counter
==========================*/
$('.cqnty-up').on('click', function () {
    var qty = $(this).closest('.cqnty').find('.cqty-box');
    var currentVal = parseInt(qty.val(), 10);
    if (!isNaN(currentVal) && currentVal < 10) {
        qty.val(currentVal + 1); 
    }
    return false;
});
$('.cqnty-down').on('click', function () {
    var qty = $(this).closest('.cqnty').find('.cqty-box');
    var currentVal = parseInt(qty.val(), 10);
    if (!isNaN(currentVal) && currentVal > 1) {
        qty.val(currentVal - 1); 
    }
    return false;
});


/*=====================
 Cart page Update Cart
==========================*/
function updateCart(){
  $('#form-cart').submit();
}


/*=====================
 My order page order details
==========================*/
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
              htmlData += `<tr><td>`+cnt+`</td>`;
              htmlData += `<td><img width="100" src="`+appUrl+'uploads/product/'+datares.product_image+`" alt="`+datares.product_name+`">`;
              htmlData += `</td>`;
              htmlData += `<td> ₹ `+datares.price+`</td><td>`+datares.quantity+`</td><td> ₹ `+datares.total_price+`</td></tr>`;

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

/*=====================
 Catagory Page Product Filteration
==========================*/
function filterProducts(category_id){

  var filterSort = $('.filterSort').val();

  var filteredBrandIds = [];
  $(".filterbrand:checked").each(function(){
    filteredBrandIds.push($(this).val());
  });

  var minPrice = $('.ps-slider__min').text();
  var maxPrice = $('.ps-slider__max').text();
  
  var filteredAttrValIds = [];
  $(".filterattr:checked").each(function(){
    filteredAttrValIds.push($(this).val());
  });

  $.ajax({
       url     : appUrl+'index.php/ajax/filterProducts',
       type    : "POST",
       data    : {category_id:category_id,filterSort:filterSort,filteredBrandIds:filteredBrandIds,minPrice:minPrice,maxPrice:maxPrice,filteredAttrValIds:filteredAttrValIds}, 
       dataType: 'json',
       success : function(resp){
        //console.log(resp);
         if(resp.status == 200){
           loadCatagoryPageProducts(resp.res);
         }
      }
  });

}


function filterProductsvendor(category_id){

  var filterSort = $('.filterSort').val();

  var filteredBrandIds = [];
  $(".filterbrand:checked").each(function(){
    filteredBrandIds.push($(this).val());
  });

  var minPrice = $('.ps-slider__min').text();
  var maxPrice = $('.ps-slider__max').text();
  
  var filteredAttrValIds = [];
  $(".filterattr:checked").each(function(){
    filteredAttrValIds.push($(this).val());
  });

  $.ajax({
       url     : appUrl+'index.php/ajax/filterProductsvendor',
       type    : "POST",
       data    : {category_id:category_id,filterSort:filterSort,filteredBrandIds:filteredBrandIds,minPrice:minPrice,maxPrice:maxPrice,filteredAttrValIds:filteredAttrValIds}, 
       dataType: 'json',
       success : function(resp){
        //console.log(resp);
         if(resp.status == 200){
           loadCatagoryPageProducts(resp.res);
         }
      }
  });

}

/*=====================
 Catagory Page Product Binding After Filteration
==========================*/
function loadCatagoryPageProducts(data){
  var gridhtmlData = '';
  var listhtmlData = '';
  if(data.length > 0){
    $.each(data, function (key, datares) {
      gridhtmlData += 
      `<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 ">
          <div class="ps-product">
              <div class="ps-product__thumbnail">
                  <a href="`+appUrl+`index.php/site/productdetails/`+datares.product_encId+`">
                      <img src="`+appUrl+`uploads/product/`+datares.product_image+`" alt="`+datares.product_name+`">
                  </a>
                  <ul class="ps-product__actions">
                      <li>
                          <a href="`+appUrl+`index.php/site/productdetails/`+datares.product_encId+`" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a>
                      </li>
                      <li>
                          <a onclick="return productquickview('`+datares.product_encId+`');" href="javascript:void(0)" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a>
                      </li>
                      <!-- 
                      <li>
                          <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a>
                      </li>
                      <li>
                          <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a>
                      </li> 
                      -->
                  </ul>
              </div>
              <div class="ps-product__container"><a class="ps-product__vendor" href="`+appUrl+`index.php/site/seller/`+datares.vendor_encId+`">`+datares.company_name+`</a>
                  <div class="ps-product__content"><a class="ps-product__title" href="`+appUrl+`index.php/site/productdetails/`+datares.product_encId+`">`+datares.product_name+`</a>
                      <p class="ps-product__price"> ₹ `+datares.product_price+`</p>
                  </div>
                  <div class="ps-product__content hover"><a class="ps-product__title" href="`+appUrl+`index.php/site/productdetails/`+datares.product_encId+`">`+datares.product_name+`</a>
                      <p class="ps-product__price"> ₹ `+datares.product_price+`</p>
                  </div>
              </div>
          </div>
      </div>`;
      listhtmlData += 
      `<div class="ps-product ps-product--wide">
            <div class="ps-product__thumbnail"><a href="`+appUrl+`index.php/site/productdetails/`+datares.product_encId+`"><img src="`+appUrl+`uploads/product/`+datares.product_image+`" alt="`+datares.product_name+`"></a>
            </div>
            <div class="ps-product__container">
                <div class="ps-product__content"><a class="ps-product__title" href="`+appUrl+`index.php/site/productdetails/`+datares.product_encId+`">`+datares.product_name+`</a>
                    <p class="ps-product__vendor">Sold by:<a href="`+appUrl+`index.php/site/seller/`+datares.vendor_encId+`">`+datares.company_name+`</a></p>`;
                    if(datares.product_features_data > 0){
                    listhtmlData += `<ul class="ps-product__desc">`;
                        $.each(datares.product_features_data, function (fdkey, fddatares) {
                        listhtmlData += `<li> `+fddatares.features+`</li>`;
                        });
                    listhtmlData += `</ul>`;
                    }
                listhtmlData += `</div>
                <div class="ps-product__shopping">
                    <p class="ps-product__price"> ₹ `+datares.product_price+` </p><a class="ps-btn" href="`+appUrl+`index.php/site/productdetails/`+datares.product_encId+`">Add to cart</a>
                   <!--  <ul class="ps-product__actions">
                        <li><a href="#"><i class="icon-heart"></i> Wishlist</a></li>
                        <li><a href="#"><i class="icon-chart-bars"></i> Compare</a></li>
                    </ul> -->
                </div>
            </div>
        </div>`;
    });              
  }else{
    gridhtmlData += `<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <div class="ps-product">                                                   
                                        No products found
                                    </div>
                                </div>`;
    listhtmlData += `<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <div class="ps-product">                                                   
                                        No products found
                                    </div>
                                </div>`;
  }
  $('.grid-product-box').html(gridhtmlData);
  $('.list-product-box').html(listhtmlData);
  $('.filterProductCount').html(data.length);
}



/*=====================
 Header Search
==========================*/

$('#header_search').on('click', function () {
    var header_search_category = $('#header_search_category').val();
    var header_search_txt = $('#header_search_txt').val();
    if(header_search_category != '' && header_search_txt != ''){
        $.ajax({
           url     : appUrl+'index.php/ajax/headerSearch',
           type    : "POST",
           data    : {header_search_category:header_search_category,header_search_txt:header_search_txt}, 
           dataType: 'json',
           success : function(resp){
             if(resp.status == 200){
                window.location.href = appUrl+'index.php/site/category';
             }
          }
      });
    }
});

$('#header_search_txt').on('blur', function () { 
    var header_search_category = $('#header_search_category').val();
    var header_search_txt      = $('#header_search_txt').val();
    if(header_search_txt == ''){
        $.ajax({
           url     : appUrl+'index.php/ajax/headerSearch',
           type    : "POST",
           data    : {header_search_category:header_search_category,header_search_txt:header_search_txt}, 
           dataType: 'json',
           success : function(resp){
             if(resp.status == 200){
                if(header_search_category != '' && header_search_txt == ''){
                  window.location.href = appUrl+'index.php/site/category';
                }
             }
          }
      });
    }
});
