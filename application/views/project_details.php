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
<style>
 

    /* Lightbox */
    .luxury-lightbox {
      position: fixed; inset: 0; z-index: 9999;
      background: rgba(10, 10, 10, 0.95);
      display: flex; align-items: center; justify-content: center;
      opacity: 0; pointer-events: none; transition: opacity 0.4s ease;
    }
    .luxury-lightbox.active { opacity: 1; pointer-events: auto; }
    
    .lightbox-content {
      position: relative; max-width: 90vw; max-height: 85vh;
      display: flex; flex-direction: column; align-items: center;
      transform: scale(0.95); transition: transform 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    }
    .luxury-lightbox.active .lightbox-content { transform: scale(1); }

    .lightbox-img {
      max-width: 100%; max-height: 80vh; object-fit: contain;
      border-radius: 4px; box-shadow: 0 15px 40px rgba(0,0,0,0.4);
    }

    .lightbox-info {
      text-align: center; margin-top: 1.5rem; color: var(--white);
    }
    .lightbox-category { display: block; font-size: 0.7rem; letter-spacing: 3px; text-transform: uppercase; color: var(--gold); margin-bottom: 0.4rem; }
    .lightbox-title { font-family: 'Playfair Display', serif; font-size: 1.4rem; font-weight: 400; }

    .lightbox-counter {
      position: absolute; top: -40px; right: 0;
      font-size: 0.8rem; color: rgba(255,255,255,0.6); letter-spacing: 1px;
    }

    .lightbox-btn {
      position: absolute; top: 50%; transform: translateY(-50%);
      background: rgba(255,255,255,0.05); border: 1px solid var(--gold);
      color: var(--white); width: 48px; height: 48px; border-radius: 50%;
      cursor: pointer; display: flex; align-items: center; justify-content: center;
      transition: var(--transition); z-index: 10;
    }
    .lightbox-btn:hover { background: var(--gold); color: var(--black); transform: translateY(-50%) scale(1.1); }
    .lightbox-prev { left: -20px; }
    .lightbox-next { right: -20px; }

    .lightbox-close {
      position: absolute; top: 20px; right: 20px;
      background: transparent; border: 1px solid rgba(255,255,255,0.2);
      color: var(--white); width: 40px; height: 40px; border-radius: 50%;
      cursor: pointer; display: flex; align-items: center; justify-content: center;
      font-size: 1.2rem; transition: var(--transition); z-index: 10;
    }
    .lightbox-close:hover { background: var(--gold); color: var(--black); border-color: var(--gold); }

    /* Responsive */
    
      
      @media (hover: none) {
        .project-overlay { opacity: 1; transform: translateY(0); background: linear-gradient(to top, rgba(10,10,10,0.85) 0%, rgba(10,10,10,0.3) 60%, transparent 100%); }
        .project-overlay::before { transform: scaleX(1); }
      }
      .lightbox-btn { width: 40px; height: 40px; }
      .lightbox-prev { left: 10px; }
      .lightbox-next { right: 10px; }
      .lightbox-close { top: 10px; right: 10px; }
      .lightbox-counter { top: 15px; }
      .lightbox-info { margin-top: 1rem; padding: 0 1rem; }
      .lightbox-title { font-size: 1.2rem; }
    }
    @media (prefers-reduced-motion: reduce) { :root { --transition: none; } .project-card:hover { transform: none; } .project-card:hover img { transform: none; } }
    body.no-scroll { overflow: hidden; }
  </style>
 
    <section class="luxury-header-section">
  <div class="header-inner">
    <nav class="luxury-breadcrumb" aria-label="Breadcrumb">
      <ol>
        <li><a href="<?= site_url('Site/') ; ?>">Home</a></li>
        <li><a href="<?= site_url('Site/Projects') ; ?>"  >Portfolio</a></li>
        <li aria-current="page">  Ponna's Cafe</li>
      </ol>
    </nav>

    <h2 class="page-title">   Ponna's Cafe</h2>
    <p class="page-subtitle">Where architectural precision meets timeless elegance</p>
 
  </div>
</section>
<section class="story-section section-padding">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-6 reveal-left">
            <div class="story-image-wrapper">
               <img src="<?= base_url('website_assets/img/projects/w-p-1.jpeg') ?>" class="img-fluid"
                  alt="ÉLITE Interiors Studio" class="story-image">
            </div>
         </div>
         <div class="col-lg-6 reveal-right">
            <div class="story-text">
               <span class="section-label">About The Ponna's Cafe</span>
               <h2 class="section-title">A Legacy of <span class="gold">Refined</span> Living</h2>
               <div class="section-divider"></div>
               <p>This project focuses on creating a warm and functional living space that blends modern aesthetics with everyday comfort. Soft neutral tones, natural textures, and carefully selected furnishings enhance the overall ambiance. Each room is thoughtfully designed to maximize space, light, and usability while maintaining a cohesive and elegant look.</p>
               <p>Designed as the heart of the home, this living room combines style and comfort with a minimalist approach. Clean lines, layered lighting, and a balanced color palette create a welcoming environment perfect for relaxation and social gatherings. Custom furniture and décor elements add a unique personality to the space.</p>
               <p>This modern kitchen is crafted for both functionality and visual appeal. Featuring sleek cabinetry, efficient storage solutions, and high-quality finishes, the space ensures a seamless cooking experience. The design emphasizes openness and practicality while maintaining a sophisticated and contemporary feel.</p>
               <!-- <div class="signature"> Humshi Poonacha. </div>
               <div class="signature-title">Founder & Creative Director</div> -->
            </div>
         </div>
      </div>
   </div>
</section>
  <section class="luxury-projects">
    <div class="container">
      <div class="section-header">
<p class="section-subtitle">Project Showcase</p>
<h3 class="section-title">Visual Experience</h3>
      </div>

      <div class="masonry-grid">
        <article class="project-card" data-src="<?= base_url('website_assets/img/projects/w-p-1.jpeg') ?>" data-title="The Aurelia Penthouse" data-category="Residential">
          <img src="<?= base_url('website_assets/img/projects/w-p-1.jpeg') ?>" alt="Modern Penthouse Interior">
          <div class="project-overlay">
              <span class="project-category">Bedroom</span>
    <h3 class="project-name">Cozy Dream Space</h3>
            
          </div>
        </article>

        <article class="project-card" data-src="<?= base_url('website_assets/img/projects/w-p-2.jpeg') ?>" data-title="Grand Lobby & Lounge" data-category="Commercial">
          <img src="<?= base_url('website_assets/img/projects/w-p-2.jpeg') ?>" alt="Luxury Living Room">
          <div class="project-overlay">
             <span class="project-category">Bathroom</span>
    <h3 class="project-name">Luxury Refresh Area</h3>
           
          </div>
        </article>

        <article class="project-card" data-src="<?= base_url('website_assets/img/projects/w-p-3.jpeg') ?>" data-title="Cozy Dream Space" data-category="Bedroom">
          <img src="<?= base_url('website_assets/img/projects/w-p-3.jpeg') ?>" alt="Elegant Dining Room">
          <div class="project-overlay">
           <span class="project-category">Bedroom</span>
    <h3 class="project-name">Cozy Dream Space</h3>
             
          </div>
        </article>

        <article class="project-card" data-src="<?= base_url('website_assets/img/projects/w-p-4.jpeg') ?>" data-title="The Onyx Suite" data-category="Hospitality">
          <img src="<?= base_url('website_assets/img/projects/w-p-4.jpeg') ?>" alt="Minimalist Kitchen">
          <div class="project-overlay">
       <span class="project-category">Living Room</span>
    <h3 class="project-name">Family Comfort Zone</h3>
            
          </div>
        </article>

        <article class="project-card" data-src="<?= base_url('website_assets/img/projects/w-p-5.jpeg') ?>" data-title="Château Modern" data-category="Residential">
          <img src="<?= base_url('website_assets/img/projects/w-p-5.jpeg') ?>" alt="Luxury Bedroom">
          <div class="project-overlay">
          <span class="project-category">Bedroom</span>
    <h3 class="project-name">Cozy Dream Space</h3>
           
          </div>
        </article>

        <article class="project-card" data-src="<?= base_url('website_assets/img/projects/w-p-6.jpeg') ?>" data-title="Lumina Spa Retreat" data-category="Commercial">
          <img src="<?= base_url('website_assets/img/projects/w-p-6.jpeg') ?>" alt="Modern Bathroom">
          <div class="project-overlay">
      <span class="project-category">Kitchen</span>
    <h3 class="project-name">Modern Cooking Hub</h3>
           
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Lightbox -->
  <div id="luxury-lightbox" class="luxury-lightbox" aria-hidden="true">
    <button class="lightbox-close" aria-label="Close">&times;</button>
    <button class="lightbox-prev lightbox-btn" aria-label="Previous"><i class="fa-solid fa-chevron-left"></i></button>
    <button class="lightbox-next lightbox-btn" aria-label="Next"><i class="fa-solid fa-chevron-right"></i></button>
    <div class="lightbox-content">
      <span class="lightbox-counter">1 / 6</span>
      <img src="" alt="" class="lightbox-img">
      <div class="lightbox-info">
        <span class="lightbox-category"></span>
        <h3 class="lightbox-title text-light"></h3>
      </div>
    </div>
  </div>
<?php $this->load->view('includes/footer' ); ?>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const lightbox = document.getElementById('luxury-lightbox');
      const lbImg = lightbox.querySelector('.lightbox-img');
      const lbCategory = lightbox.querySelector('.lightbox-category');
      const lbTitle = lightbox.querySelector('.lightbox-title');
      const lbCounter = lightbox.querySelector('.lightbox-counter');
      const btnPrev = lightbox.querySelector('.lightbox-prev');
      const btnNext = lightbox.querySelector('.lightbox-next');
      const btnClose = lightbox.querySelector('.lightbox-close');
      const cards = document.querySelectorAll('.project-card');

      let currentIndex = 0;
      const galleryData = Array.from(cards).map(card => ({
        src: card.dataset.src,
        alt: card.querySelector('img').alt,
        category: card.dataset.category,
        title: card.dataset.title
      }));

      function openLightbox(index) {
        currentIndex = index;
        updateLightboxContent();
        lightbox.classList.add('active');
        lightbox.setAttribute('aria-hidden', 'false');
        document.body.classList.add('no-scroll');
      }

      function closeLightbox() {
        lightbox.classList.remove('active');
        lightbox.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('no-scroll');
      }

      function updateLightboxContent() {
        const item = galleryData[currentIndex];
        lbImg.src = item.src;
        lbImg.alt = item.alt;
        lbCategory.textContent = item.category;
        lbTitle.textContent = item.title;
        lbCounter.textContent = `${currentIndex + 1} / ${galleryData.length}`;
      }

      function navigate(direction) {
        currentIndex = (currentIndex + direction + galleryData.length) % galleryData.length;
        lbImg.style.opacity = 0.7;
        setTimeout(() => {
          updateLightboxContent();
          lbImg.style.opacity = 1;
        }, 150);
      }

      // Event Listeners
      cards.forEach((card, i) => {
        card.addEventListener('click', () => openLightbox(i));
      });

      btnPrev.addEventListener('click', (e) => { e.stopPropagation(); navigate(-1); });
      btnNext.addEventListener('click', (e) => { e.stopPropagation(); navigate(1); });
      btnClose.addEventListener('click', closeLightbox);
      
      lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox || e.target.classList.contains('lightbox-content')) closeLightbox();
      });

      document.addEventListener('keydown', (e) => {
        if (!lightbox.classList.contains('active')) return;
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowLeft') navigate(-1);
        if (e.key === 'ArrowRight') navigate(1);
      });

      lbImg.style.transition = 'opacity 0.25s ease';
    });
  </script>
 