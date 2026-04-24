 
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
    
 
 


 

 <div class="hh">
   <section class="inner-header">
      <div class="container">
         <div class="row align-items-center">
            <!-- Page Title -->
            <div class="col-md-8">
               <h1 class="page-title"> <?= $products[0]['category_name'] ?></h1>
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
               <strong>       <?= $products[0]['category_name'] ?>  </strong>
               </a>
            </li>
         </ol>
      </nav>
   </div>
</div>



                    <section class="shop   border-0 m-0 my-4">

                      <!--   <div class="row justify-content-center my-4">
                        <div class="col text-center">
                           <h2 class="font-weight-bold text-custom-primary text-capitalize line-height-1 mb-0"><?= $products[0]['category_name'] ?></h2>
                           
                            <p class="font-weight-bold text-3-5 mb-1">New Arrivals Products at Aumaantrak</p> -->
                          
                    <!--     </div>
                     </div> -->  
                        <div class="container">
                           
                            <div class="products row row-gutter-sm mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">

                                <?php if (!empty($products)) : ?>
 
        <?php foreach ($products as $product): ?>
                                <div class="col-sm-6 col-6 col-lg-3 mb-4 mb-lg-0">
                                    
                                    <a href="<?= site_url('Site/products_details/' . $product['product_id']) ?>" 
           class="text-decoration-none align-items-center">

  <div class="product-card">

    <!-- Image Area -->
    <div class="product-img">
      <img src="<?= base_url('uploads/product/' . $product['product_image']) ?>" alt="Methyduc-80">
    </div>

    <!-- Content -->
    <div class="product-body">
      <span class="category"><?= $product['category_name'] ?></span>

      <h5 class="product-name m-0 p-0 "><?= $product['product_name'] ?></h5>

      <div class="price-row">
        <span class="price">₹<?= $product['product_price'] ?> /-</span>
       <div class="nav-arrow-2">
                <i class="fas fa-chevron-right"></i>
            </div>
      </div>
    </div>

  </div>
</a>
                                   
                                    
                                </div>


                                        <?php endforeach; ?>
 
<?php else : ?>
    <p>No products found in this category.</p>
<?php endif; ?>
                                 
                            </div>
                            <!--<div class="row">-->
                            <!--    <div class="col text-center">-->
                            <!--        <a href="demo-auto-services-products.html" class="btn btn-primary custom-btn-border-radius font-weight-bold text-3 btn-px-5 btn-py-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800">VIEW ALL PRODUCTS</a>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                    </section>


 
<?php $this->load->view('includes/footer');?>
<script src="<?php echo base_url()?>assets/admin/plugins/jquery-validation/jquery.validate.min.js"></script>