<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>jubilax.com</title>
    <meta name="title" content="jubilax.com">
    <meta name="description" content="jubilax.com">
    <meta name="keywords" content="jubilax.com">
    <meta name="author" content="jubilax.com">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <?php $this->load->view('includes/header'); ?>
</head>

<body>

<!-- PAGE HEADER -->
<section class="page-header-section py-5">
    <div class="container">

        <div class="row">
            <div class="col-lg-8">
                <h1 class="page-title mb-2">Our Banners</h1>
            </div>

            <div class="col-lg-4">
                <p class="page-sub-title">
                    <span>
                        <a href="<?= site_url('Site/index') ?>">Home <i class="fa-solid fa-angles-right"></i></a>
                    </span>
                    <span>
                        <a class="active" href="#">Banners</a>
                    </span>
                </p>
            </div>
        </div>

    </div>
</section>


<!-- BANNER SECTION -->
<section class="shop section section-height-4 border-0 m-0">
    <div class="container">

        <div class="row justify-content-center pb-3 mb-4">
            <div class="col-lg-8 text-center">
                <div class="overflow-hidden">
                    <h2 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation"
                        data-appear-animation="maskUp" data-appear-animation-delay="250">
                        Website Banners
                    </h2>
                </div>

                <div class="d-inline-block custom-divider divider divider-primary divider-small my-3">
                    <hr class="my-0 appear-animation" data-appear-animation="customLineProgressAnim"
                        data-appear-animation-delay="600">
                </div>
            </div>
        </div>


        <div class="products row row-gutter-sm mb-4 appear-animation"
             data-appear-animation="fadeInUpShorter"
             data-appear-animation-delay="750">

            <?php if (!empty($banners)) : ?>

                <?php foreach ($banners as $banner): ?>
                    <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="product mb-0">

                            <div class="product-thumb-info border-0 mb-3">

                                <div class="product-thumb-info-image bg-light">
                                    <img alt="Banner"
                                         class="img-fluid"
                                         src="<?= base_url('uploads/banner/' . $banner['banner_image']); ?>">
                                </div>
                            </div>

                            <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 text-center">
                                <?= $banner['banner_title']; ?>
                            </h3>

                        </div>
                    </div>
                <?php endforeach; ?>

            <?php else : ?>

                <p class="text-center">No banners available.</p>

            <?php endif; ?>

        </div>
    </div>
</section>


<?php $this->load->view('includes/footer'); ?>

<script src="<?= base_url('assets/admin/plugins/jquery-validation/jquery.validate.min.js') ?>"></script>

</body>
</html>
