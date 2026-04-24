<!DOCTYPE html>
<meta charset="utf-8">

<title>HARV ATELIER – Premium Interior Design Studio</title>

<!-- Primary Meta Tags -->
<meta name="title" content="HARV ATELIER | Interior Design Studio">
<meta name="description"
   content="HARV ATELIER is a premium interior design studio specializing in modern, luxury, and functional spaces. We create bespoke residential and commercial interiors with a focus on aesthetics, comfort, and innovation.">
<meta name="keywords"
   content="HARV ATELIER, interior design studio, luxury interiors, home interior design, commercial interior design, modern interiors, space planning, interior decorators India">
<meta name="author" content="HARV ATELIER">
<meta name="robots" content="index, follow">
<meta name="language" content="English">

<!-- Mobile Responsive -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="HARV ATELIER">
<meta property="og:title" content="HARV ATELIER | Interior Design Studio">
<meta property="og:description"
   content="Transforming spaces into timeless interiors. HARV ATELIER delivers bespoke design solutions for residential and commercial projects with elegance and precision.">
<meta property="og:url" content="https://www.harvatelier.com">
<meta property="og:image" content="https://www.harvatelier.com/assets/images/og-banner.jpg">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="HARV ATELIER | Interior Design Studio">
<meta name="twitter:description"
   content="Luxury interior design studio crafting unique, modern, and functional living and workspaces.">
<meta name="twitter:image" content="https://www.harvatelier.com/assets/images/og-banner.jpg">
<?php $this->load->view('includes/header' ); ?>
<section class="luxury-header-section">
  <div class="header-inner">
    <nav class="luxury-breadcrumb" aria-label="Breadcrumb">
      <ol>
        <li><a href="<?= site_url('Site/') ; ?>">Home</a></li>
        <li><a href="/projects" aria-current="page">Portfolio</a></li>
        <!-- <li aria-current="page">Residential Spaces</li> -->
      </ol>
    </nav>

    <h2 class="page-title">Curated Portfolio</h2>
    <p class="page-subtitle">Where architectural precision meets timeless elegance</p>
 
  </div>
</section>

  <section class="luxury-projects ">
    <div class="container">
         <!-- <div class="row justify-content-center mb-5">
      <div class="col-12 text-left">
        <div class="lux-label luxury-text-dark">
            <span class="lux-label-line"></span>
            <span class="lux-label-text  ">Selected Works </span>
          </div>
          
          <h2 class="lux-heading luxury-text-dark">Curated <span class="text-gold">Interiors</span>  </h2>
 
      </div>
    </div> -->

     <div class="masonry-grid">
        <!-- Project 1 -->
        <article class="project-card">
          <img src="<?= base_url('website_assets/img/projects/w-p-1.jpeg') ?>" alt="Modern Penthouse Interior">
          <div class="project-overlay">
            <span class="project-category">Cafe</span>
            <h3 class="project-name">Ponna's Cafe</h3>
            <a href="<?= site_url('Site/Project_details') ; ?>" class="view-more">View More  </a>
          </div>
        </article>
 
        <!-- Project 2 -->
        <!--<article class="project-card">-->
        <!--  <img src="<?= base_url('website_assets/img/projects/w-p-2.jpeg') ?>" alt="Luxury Living Room">-->
        <!--  <div class="project-overlay">-->
        <!--    <span class="project-category">Commercial</span>-->
        <!--    <h3 class="project-name">Grand Lobby & Lounge</h3>-->
        <!--     <a href="<?= site_url('Site/Project_details') ; ?>" class="view-more">View More  </a>-->
        <!--  </div>-->
        <!--</article>-->

        <!-- Project 3 -->
        <!--<article class="project-card">-->
        <!--  <img src="<?= base_url('website_assets/img/projects/w-p-3.jpeg') ?>" alt="Elegant Dining Room">-->
        <!--  <div class="project-overlay">-->
        <!--    <span class="project-category">Residential</span>-->
        <!--    <h3 class="project-name">Villa Serenità</h3>-->
        <!--    <a href="<?= site_url('Site/Project_details') ; ?>" class="view-more">View More  </a>-->
        <!--  </div>-->
        <!--</article>-->

        <!-- Project 4 -->
        <!--<article class="project-card">-->
        <!--  <img src="<?= base_url('website_assets/img/projects/w-p-4.jpeg') ?>" alt="Minimalist Kitchen">-->
        <!--  <div class="project-overlay">-->
        <!--    <span class="project-category">Hospitality</span>-->
        <!--    <h3 class="project-name">The Onyx Suite</h3>-->
        <!--       <a href="<?= site_url('Site/Project_details') ; ?>" class="view-more">View More  </a>-->
        <!--  </div>-->
        <!--</article>-->

        <!-- Project 5 -->
        <!--<article class="project-card">-->
        <!--  <img src="<?= base_url('website_assets/img/projects/w-p-5.jpeg') ?>" alt="Luxury Bedroom">-->
        <!--  <div class="project-overlay">-->
        <!--    <span class="project-category">Residential</span>-->
        <!--    <h3 class="project-name">Château Modern</h3>-->
        <!--      <a href="<?= site_url('Site/Project_details') ; ?>" class="view-more">View More  </a>-->
        <!--  </div>-->
        <!--</article>-->

        <!-- Project 6 -->
        <!--<article class="project-card">-->
        <!--  <img src="<?= base_url('website_assets/img/projects/w-p-6.jpeg') ?>" alt="Modern Bathroom">-->
        <!--  <div class="project-overlay">-->
        <!--    <span class="project-category">Commercial</span>-->
        <!--    <h3 class="project-name">Lumina Spa Retreat</h3>-->
        <!--    <a href="<?= site_url('Site/Project_details') ; ?>" class="view-more">View More  </a>-->
        <!--  </div>-->
        <!--</article>-->
      </div>




 
    </div>
  </section>


























<?php $this->load->view('includes/footer' ); ?>