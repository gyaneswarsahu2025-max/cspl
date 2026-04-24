<!-- Favicon -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<!-- Web Fonts  -->
<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&amp;display=swap"
    rel="stylesheet" type="text/css">
<!-- Vendor CSS -->
<link rel="stylesheet" href="<?= base_url('website_assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('website_assets/vendor/fontawesome-free/css/all.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('website_assets/vendor/animate/animate.compat.css') ?>">
<link rel="stylesheet" href="<?= base_url('website_assets/vendor/simple-line-icons/css/simple-line-icons.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('website_assets/vendor/owl.carousel/assets/owl.carousel.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('website_assets/vendor/owl.carousel/assets/owl.theme.default.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('website_assets/vendor/magnific-popup/magnific-popup.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('website_assets/vendor/bootstrap-star-rating/css/star-rating.min.css') ?>">
<link rel="stylesheet"
    href="<?= base_url('website_assets/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.css') ?>">
<!-- Theme CSS -->
<link rel="stylesheet" href="<?= base_url('website_assets/css/theme.css') ?>">
<link rel="stylesheet" href="<?= base_url('website_assets/css/theme-elements.css') ?>">
<link rel="stylesheet" href="<?= base_url('website_assets/css/theme-blog.css') ?>">
<link rel="stylesheet" href="<?= base_url('website_assets/css/theme-shop.css') ?>">
<!-- Demo CSS -->
<link rel="stylesheet" href="<?= base_url('website_assets/css/demos/demo-auto-services.css') ?>">
<link rel="stylesheet" href="<?= base_url('website_assets/css/demos/demo-auto-services.css') ?>">
<!-- Skin CSS -->
<link id="skinCSS" rel="stylesheet" href="<?= base_url('website_assets/css/skins/skin-auto-services.css') ?>">
<!-- Theme Custom CSS -->
<link rel="stylesheet" href="<?= base_url('website_assets/css/custom.css') ?>">
<link rel="stylesheet" href="<?= base_url('website_assets/css/theme-blog.css') ?>">
<!-- Head Libs -->
<script src="<?= base_url('website_assets/vendor/modernizr/modernizr.min.js') ?>"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
    rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Luxurious+Roman&display=swap" rel="stylesheet">
</head>
<style>

</style>

<body>
    <div class="body">
        <?php
        // Get CI instance
        $CI =& get_instance();

        // Load model once (safe even if already loaded)
        $CI->load->model('Common_Model');

        // Fetch all active categories for header
        $category_list = $CI->Common_Model->FetchData(
            'mstr_category',
            "*",
            "deleted_status = 0 AND status = 1"
        );

        $current = $this->uri->segment(2);
        ?>

  <div class="hero-shell">
    <nav class="navbar navbar-expand-lg glass-nav fixed-top">
      <div class="container">
     

        <a class="brand-mark mx-auto" href="<?= site_url('Site/') ; ?>" aria-label="Interior Atelier home">
       <div class="logo">
  <img src="<?= base_url('website_assets/img/logo-n.png') ?>" alt="Logo">
</div>
        </a>

        <button class="navbar-toggler menu-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="mainNav">
          <ul class="navbar-nav align-items-lg-center gap-lg-2 ms-auto">
<li class="nav-item">
    <a class="nav-link nav-link-set <?= ($current == '' ? 'active' : '') ?>" href="<?= site_url('Site/') ; ?>">Home</a>
</li>

<li class="nav-item">
    <a class="nav-link nav-link-set <?= ($current == 'aboutus' ? 'active' : '') ?>" href="<?= site_url('Site/aboutus') ; ?>">About</a>
</li>

<li class="nav-item">
    <a class="nav-link nav-link-set <?= ($current == 'Projects' ? 'active' : '') ?>" href="<?= site_url('Site/Projects') ; ?>">Projects</a>
</li>

<li class="nav-item">
    <a class="nav-link nav-link-set <?= ($current == 'Contact' ? 'active' : '') ?>" href="<?= site_url('Site/Contact') ; ?>">Contact</a>
</li>
            <li class="nav-item ms-lg-3">
                <a href="<?= site_url('Site/Contact') ; ?> " class="btn-lux fw-bold">
       Book Consultation
            <i class="fa-solid fa-arrow-down fa-rotate-270 fa-2x mx-3"></i>
          </a>
              <!-- <a class="btn consult-btn" href="#contact"></a> -->
            </li>
          </ul>
        </div>
      </div>
    </nav>

 
  </div>
  
<!--   -->
