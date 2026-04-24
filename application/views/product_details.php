<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
 
   ?>

  <!DOCTYPE html>
<meta charset="utf-8">

<title>Celtic Life Science – Trusted Pharmaceutical Company in India</title>

<!-- Primary Meta Tags -->
<meta name="title" content="Celtic Life Science | Quality Pharmaceutical Solutions">
<meta name="description" content="Celtic Life Science is a trusted pharmaceutical company offering high-quality tablets, capsules, syrups, injectables, nutraceuticals, APIs, and speciality medicines with global quality standards.">
<meta name="keywords" content="Celtic Life Science, pharmaceutical company in India, pharmaceutical manufacturer, tablets capsules syrups injections, nutraceuticals, APIs, speciality medicines, healthcare solutions">
<meta name="author" content="Celtic Life Science">
<meta name="robots" content="index, follow">
<meta name="language" content="English">

<!-- Mobile Responsive -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="Celtic Life Science">
<meta property="og:title" content="Celtic Life Science | Quality Pharmaceutical Solutions">
<meta property="og:description" content="Delivering safe, effective, and affordable pharmaceutical products across multiple therapeutic segments. Committed to innovation and global quality standards.">
<meta property="og:url" content="https://www.celticlifescience.com">
<meta property="og:image" content="https://www.celticlifescience.com/assets/images/og-banner.jpg">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Celtic Life Science | Pharmaceutical Company">
<meta name="twitter:description" content="Trusted pharmaceutical company providing quality medicines, nutraceuticals, APIs, and speciality healthcare solutions.">
<meta name="twitter:image" content="https://www.celticlifescience.com/assets/images/og-banner.jpg">

<!-- Canonical -->
<link rel="canonical" href="https://www.celticlifescience.com">


<?php $this->load->view('includes/header');?>

<style>   .main-img-box {
    border: 1px solid #ddd;
    padding: 5px;
    border-radius: 6px;
}

.thumb-img {
    width: 70px;
    height: 70px;
    border: 1px solid #ddd;
    margin-right: 10px;
    border-radius: 5px;
    object-fit: cover;
    cursor: pointer;
    transition: 0.3s;
}

.thumb-img:hover {
    border-color: #007bff;
    transform: scale(1.05);
}

.icon {
    width: 30px;
    margin-right: 10px;
    cursor: pointer;
}

.product-content .title {
    font-weight: 600;
    text-transform:capitalize;
}

.price-old {
    text-decoration: line-through;
    color: gray;
}

.discount {
    color: green;
    font-weight: 600;
}
/* Main box */
.replica-box {
    width: 240px;
    height: 240px;
    background: #fff;
    border-radius: 12px;
    position: relative;
    padding: 15px;
    overflow: visible; /* important */
}

 

/* Image frame */
.img-holder {
    width: 100%;
    height: 100%;
    background: #f8f8f8;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Prevent image stretching */
.product-img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}
 .desc h1,
.desc h2,
.desc h3,
.desc h4,
.desc h5,
.desc h6,
.desc li,
.desc a {
    color: #000 !important;
}
/* Flipkart style price */
.fk-selling-price {
    font-size: 28px;
    font-weight: 700;
    color: #212121;
}

/* MRP Cut */
.fk-mrp {
    font-size: 18px;
    color: #878787;
    text-decoration: line-through;
    margin-left: 10px;
}

/* Discount green text */
.fk-discount {
    font-size: 18px;
    color: #388e3c; /* Flipkart green */
    font-weight:bold;
    margin-left: 10px;
}


</style>
    
 <div class="hh">
   <section class="inner-header">
      <div class="container">
         <div class="row align-items-center">
            <!-- Page Title -->
            <div class="col-md-8">
               <h1 class="page-title"><?= $products[0]['product_name'] ?></h1>
               <!-- <p class="page-subtitle">
                  High-quality pharmaceutical solutions you can trust
                  </p> -->
            </div>
         </div>
      </div>
   </section>
   <div class="container">
      <nav aria-label="breadcrumb  ">
         <ol class="breadcrumb bg-white pl-0">
            <li class="breadcrumb-item-2"><a href="<?= site_url('Site/index') ?>">Home</a></li>
            <li class="breadcrumb-item-2 fw-bold text-danger">
               <a href="">
               <strong>        <?= $products[0]['category_name'] ?> </strong>
               </a>
            </li>
            <li class="breadcrumb-item-2 fw-bold text-danger">
               <a href="">
               <strong>          <?= $products[0]['product_name']; ?>  </strong>
               </a>
            </li>
         </ol>
      </nav>
   </div>
</div>
 


    <div class="container product-detail my-5">
    <div class="row">

        <!-- Left Product Image -->
        <div class="col-md-4">
            
           <div class="replica-box mx-auto">
        <div class="img-holder">
            <img src="<?= base_url('uploads/product/' . $products[0]['product_image']) ?>" alt="" class="img-fluid product-img">
        </div>
    </div>

            <!-- Thumbnail Images -->
            <!--<div class="thumb-row mt-3 d-flex">-->
            <!--    <img src="<?= base_url('uploads/product/' . $products[0]['product_image']) ?>" -->
            <!--         class="thumb-img" onclick="changeImage(this.src)" alt="">-->
            <!--    <img src="<?= base_url('uploads/product/' . $products[0]['product_image']) ?>" -->
            <!--         class="thumb-img" onclick="changeImage(this.src)" alt="">-->
            <!--    <img src="<?= base_url('uploads/product/' . $products[0]['product_image']) ?>" -->
            <!--         class="thumb-img" onclick="changeImage(this.src)" alt="">-->
            <!--    <img src="<?= base_url('uploads/product/' . $products[0]['product_image']) ?>" -->
            <!--         class="thumb-img" onclick="changeImage(this.src)" alt="">-->
            <!--</div>-->
        </div>

        <!-- Right Content -->
        <div class="col-md-8 product-content">
            
            
            
            
            <h4 class="title"><?= $products[0]['product_name']; ?></h4>
            <p class="product-code">Product Code : <strong><?= $products[0]['product_code']; ?></strong></p>
            <hr>
   <div class="row align-items-end fk-price-row">

        <!-- <div class="col-auto">
            <span class="fk-mrp"><?= $products[0]['product_price']; ?></span>
        </div> -->

        <div class="col-auto">
            <span class=" fk-selling-price"><?= $products[0]['product_price']; ?></span>
        </div>

       <!--  <div class="col-auto">
            <span class="fk-discount"><?= $products[0]['discount_percentage']; ?>% off</span>
        </div>
 -->
    </div>
 

            <div class="text-dark desc"><strong>Description:</strong><br>
                <?= $products[0]['product_desc']; ?>
            </div >

            

            <!-- Share Icons -->
           <div class="share-box mt-4">
    <strong>Share Product :</strong>

    <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" class="icon" alt="" onclick="shareProduct('whatsapp')">
    <img src="https://cdn-icons-png.flaticon.com/512/5968/5968764.png" class="icon" alt="" onclick="shareProduct('facebook')">
    <!--<img src="https://cdn-icons-png.flaticon.com/512/5968/5968764.png" class="icon" alt="" onclick="shareProduct('twitter')">-->
    <!--<img src="https://cdn-icons-png.flaticon.com/512/145/145802.png" class="icon" alt="" onclick="shareProduct('linkedin')">-->
    <!--<img src="https://cdn-icons-png.flaticon.com/512/2111/2111646.png" class="icon" alt="" onclick="shareProduct('telegram')">-->
</div>

        </div>
    </div>
</div>
<div class="container"><div class="row justify-content-center my-3">
                        <div class="col text-center">
                           <h3 class="font-weight-bold text-dark text-capitalize line-height-1 mb-0">Related  Products </h3>
                           
                           <!-- <p class="font-weight-bold text-3-5 mb-1">New Arrivals Products at Aumaantrak</p> -->
                          
                        </div>
                     </div>  <?php if(!empty($related_products)): ?>
<div class="row">
<?php foreach($related_products as $rp): ?>
    <div class="col-md-3">
        





        <a href="<?= site_url('Site/products_details/' . $rp['product_id']) ?>" 
           class="text-decoration-none align-items-center">

  <div class="product-card">

    <!-- Image Area -->
    <div class="product-img">
      <img src="<?= base_url('uploads/product/' . $rp['product_image']) ?>" alt=" <?= $rp['product_name'] ?> ">
    </div>

    <!-- Content -->
    <div class="product-body">
      <span class="category"><?= $rp['category_name'] ?></span>

      <h5 class="product-name m-0 p-0 "><?= $rp['product_name'] ?></h5>

      <div class="price-row">
        <span class="price">₹<?= $rp['product_price'] ?> /-</span>
       <div class="nav-arrow-2">
                <i class="fas fa-chevron-right"></i>
            </div>
      </div>
    </div>

  </div>
</a>
       
         
    </div>
<?php endforeach; ?>
</div>
<?php endif; ?> </div>


 

<?php $this->load->view('includes/footer');?>


<script src="<?php echo base_url()?>assets/admin/plugins/jquery-validation/jquery.validate.min.js"></script>
<script type="text/javascript">
function validate(){
  $('#myForm').validate({
    rules: {
      rate: {
        required: true,
        digits: true
      },
      remarks: {
        required: true,
      },
      name: {
        required: true,
      },
      email: {
        required: true,
        email: true,
      },
    },
    messages: {
      rate: {
        required: "Please select the rating",
      },   
      remarks: {
        required: "Please enter your review",
      },
      name: {
        required: "Please enter your name",
      },
      email: {
        required: "Please enter your valid email id",
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

$('.choose-attr').on('click', function(){
    if($('#hdnattr'+$(this).attr('data-id')).val() == ''){
        $(this).addClass('attr-selected');
        $('#hdnattr'+$(this).attr('data-id')).val($(this).attr('data-val'));
    }else{ 
        $('.sectionattr'+$(this).attr('data-id')).find('.attr-selected').removeClass('attr-selected');
        if($('#hdnattr'+$(this).attr('data-id')).val() == $(this).attr('data-val')){  
            $(this).removeClass('attr-selected');
            $('#hdnattr'+$(this).attr('data-id')).val('');
        }else{
            $(this).addClass('attr-selected');
            $('#hdnattr'+$(this).attr('data-id')).val($(this).attr('data-val'));
        }
    }
});
</script>
<style type="text/css">
.attr-selected {
    border: 2px solid #f1b41a !important;
}
</style>
<script> const tabButtons = document.querySelectorAll('.custom-tab-button');
  const tabContents = document.querySelectorAll('.custom-tab-content');

  tabButtons.forEach(button => {
    button.addEventListener('click', () => {
      // Remove active class from all buttons and contents
      tabButtons.forEach(btn => btn.classList.remove('active'));
      tabContents.forEach(content => content.classList.remove('active'));

      // Activate the clicked button and corresponding tab
      button.classList.add('active');
      document.getElementById(button.getAttribute('data-target')).classList.add('active');
    });
  });
  
  
  
  
  
  function shareProduct(platform) {
    let url = window.location.href; // product link auto-detected
    let text = "Check this product:";

    let shareUrl = "";

    switch (platform) {

        case 'facebook':
            shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`;
            break;

        case 'whatsapp':
            shareUrl = `https://wa.me/?text=${encodeURIComponent(text + " " + url)}`;
            break;

        case 'twitter':
            shareUrl = `https://twitter.com/intent/tweet?url=${encodeURIComponent(url)}&text=${encodeURIComponent(text)}`;
            break;

        case 'linkedin':
            shareUrl = `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(url)}`;
            break;

        case 'telegram':
            shareUrl = `https://t.me/share/url?url=${encodeURIComponent(url)}&text=${encodeURIComponent(text)}`;
            break;
    }

    window.open(shareUrl, "_blank");
}

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  </script>
  
<script src="<?php echo base_url()?>assets/js/social-share.min.js"></script>
<script src="<?php echo base_url()?>assets/js/a076d05399.js"></script>
<style type="text/css">
.ss-btn{
    background: none !important;
    font-size: 30px !important;
    margin-right: 10px !important;
}
</style>