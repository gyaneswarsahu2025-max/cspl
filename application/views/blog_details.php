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
    
 

    h1, h2, h3, h4, h5, h6 {
      font-family: 'Playfair Display', serif;
      font-weight: 400;
      color: var(--black);
      letter-spacing: 0.02em;
    }

    a { color: var(--gold); text-decoration: none; transition: var(--transition); }
    a:hover { color: var(--black); }

    /* Reading Progress Bar */
    #progress-bar {
      position: fixed; top: 0; left: 0; height: 3px; background: var(--gold-gradient);
      width: 0%; z-index: 1000; transition: width 0.1s linear;
    }

    /* Blog Hero / Header */
    .blog-hero {
      background: var(--black);
      padding-top: calc(var(--nav-height) + 3rem);
      padding-bottom: 3.5rem;
      text-align: center;
      position: relative;
      overflow: hidden;
    }
    .blog-hero::before {
      content: ''; position: absolute; inset: 0;
      background: radial-gradient(circle at 50% 30%, rgba(198, 169, 108, 0.06) 0%, transparent 65%);
    }
    .breadcrumb-item a { color: rgba(255,255,255,0.6); font-size: 0.75rem; letter-spacing: 2px; text-transform: uppercase; }
    .breadcrumb-item.active { color: var(--white); }
    .breadcrumb-item + .breadcrumb-item::before { color: var(--gold); opacity: 0.6; }
    .post-hero-title {
      font-size: clamp(2rem, 4.5vw, 3.5rem);
      color: var(--white);
      margin: 1.5rem 0 1rem;
      line-height: 1.2;
    }
    .post-meta {
      display: flex; flex-wrap: wrap; justify-content: center; gap: 1.5rem;
      color: rgba(255,255,255,0.7); font-size: 0.85rem; letter-spacing: 1px;
    }
    .post-meta i { color: var(--gold); margin-right: 0.5rem; }
    .gold-divider { width: 60px; height: 2px; background: var(--gold-gradient); margin: 1.5rem auto 0; }

    /* Featured Image */
    .featured-image-wrapper {
      position: relative;
      margin-top: 2.5rem;
      border-radius: 4px;
      overflow: hidden;
      box-shadow: 0 8px 30px rgba(0,0,0,0.12);
    }
    .featured-image-wrapper img {
      width: 100%; height: auto; display: block; transition: transform 0.8s ease;
    }
    .featured-image-wrapper:hover img { transform: scale(1.02); }

    /* Article Content */
    .article-content {
      background: var(--white);
      padding: 3.5rem;
      border-radius: 4px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.05);
      margin-bottom: 3rem;
    }
    .article-content p { margin-bottom: 1.5rem; color: #333; font-weight: 300; }
    .article-content h2 { font-size: 2rem; margin: 3rem 0 1.5rem; position: relative; padding-bottom: 0.75rem; }
    .article-content h2::after {
      content: ''; position: absolute; bottom: 0; left: 0;
      width: 50px; height: 2px; background: var(--gold-gradient);
    }
    .article-content img { max-width: 100%; border-radius: 3px; margin: 1.5rem 0; }

    /* Pull Quote */
    blockquote.pull-quote {
      position: relative;
      padding: 2rem 0 2rem 2.5rem;
      margin: 2.5rem 0;
      border-left: 4px solid var(--gold);
      font-family: 'Playfair Display', serif;
      font-size: 1.5rem;
      font-style: italic;
      color: var(--black);
      line-height: 1.4;
    }
    blockquote.pull-quote::before {
      content: '\201C'; position: absolute; top: -10px; left: 10px;
      font-size: 5rem; color: rgba(198, 169, 108, 0.15); font-weight: 700;
    }

    /* Tags & Share */
    .tags-share {
      display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 1.5rem;
      margin-top: 2.5rem; padding-top: 2rem; border-top: 1px solid rgba(0,0,0,0.08);
    }
    .tag-pill {
      display: inline-block; padding: 0.4rem 1rem; border: 1px solid var(--gold);
      border-radius: 50px; font-size: 0.75rem; letter-spacing: 1.5px; text-transform: uppercase;
      color: var(--gold); margin-right: 0.5rem; margin-bottom: 0.5rem; transition: var(--transition);
    }
    .tag-pill:hover { background: var(--gold); color: var(--black); }
    .share-icons a {
      width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center;
      border: 1px solid rgba(0,0,0,0.1); border-radius: 50%; color: var(--text-muted); margin-left: 0.5rem;
      transition: var(--transition);
    }
    .share-icons a:hover { background: var(--gold); border-color: var(--gold); color: var(--white); }

    /* Post Navigation */
    .post-nav {
      display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-bottom: 4rem;
    }
    .post-nav-item {
      background: var(--white); padding: 1.5rem; border-radius: 4px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.05); transition: var(--transition);
      border-left: 3px solid transparent;
    }
    .post-nav-item:hover { border-left-color: var(--gold); transform: translateY(-3px); }
    .post-nav-label { font-size: 0.7rem; letter-spacing: 2px; text-transform: uppercase; color: var(--text-muted); margin-bottom: 0.5rem; }
    .post-nav-title { font-size: 1.1rem; margin: 0; line-height: 1.3; }
    .post-nav-next { text-align: right; border-left: none; border-right: 3px solid transparent; }
    .post-nav-next:hover { border-right-color: var(--gold); }

    /* Comments */
    .comments-section { background: var(--white); padding: 2.5rem; border-radius: 4px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); }
    .comment-item { border-bottom: 1px solid rgba(0,0,0,0.06); padding-bottom: 1.5rem; margin-bottom: 1.5rem; }
    .comment-item:last-child { border-bottom: none; margin-bottom: 0; }
    .comment-avatar { width: 50px; height: 50px; border-radius: 50%; object-fit: cover; border: 2px solid var(--gold); }
    .comment-meta { font-size: 0.8rem; color: var(--text-muted); }
    .comment-author { font-weight: 500; color: var(--black); }
    .comment-reply { font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1px; color: var(--gold); cursor: pointer; }
    .comment-reply:hover { text-decoration: underline; }
    .form-control:focus { border-color: var(--gold); box-shadow: 0 0 0 0.2rem rgba(198, 169, 108, 0.2); }
    .btn-luxury-submit {
      background: var(--gold-gradient); color: var(--black); border: none;
      padding: 0.85rem 2rem; font-weight: 500; letter-spacing: 1.5px; text-transform: uppercase;
      transition: var(--transition);
    }
    .btn-luxury-submit:hover { transform: translateY(-2px); box-shadow: 0 5px 15px rgba(198, 169, 108, 0.4); }

    /* Sidebar */
    .sidebar-card {
      background: var(--white); padding: 2rem; border-radius: 4px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.05); margin-bottom: 2.5rem;
    }
    .sidebar-title { font-size: 1.25rem; margin-bottom: 1.5rem; padding-bottom: 0.75rem; border-bottom: 2px solid var(--gold-gradient); }
    .author-img { width: 90px; height: 90px; border-radius: 50%; object-fit: cover; margin-bottom: 1rem; border: 3px solid var(--gold); }
    .recent-post-item { display: flex; gap: 1rem; margin-bottom: 1.25rem; align-items: center; }
    .recent-post-item:last-child { margin-bottom: 0; }
    .recent-thumb { width: 70px; height: 70px; object-fit: cover; border-radius: 3px; flex-shrink: 0; }
    .recent-title { font-size: 0.95rem; margin: 0; line-height: 1.3; font-weight: 400; }
    .recent-date { font-size: 0.75rem; color: var(--text-muted); }
    .newsletter-input { background: #f8f7f5; border: 1px solid rgba(0,0,0,0.1); padding: 0.8rem; }
    .newsletter-input:focus { background: var(--white); border-color: var(--gold); box-shadow: none; }

    /* Responsive */
    @media (max-width: 992px) {
      .article-content { padding: 2.5rem 1.5rem; }
      .sidebar-sticky { position: relative !important; top: auto !important; }
    }
    @media (max-width: 768px) {
      .blog-hero { padding-top: calc(var(--nav-height, 60px) + 2rem); padding-bottom: 2.5rem; }
      .post-hero-title { font-size: 1.8rem; }
      .post-nav { grid-template-columns: 1fr; }
      .tags-share { flex-direction: column; align-items: flex-start; }
    }
    @media (prefers-reduced-motion: reduce) {
      :root { --transition: none; }
      .featured-image-wrapper:hover img, .post-nav-item:hover { transform: none; }
    }
  </style>
<section class="luxury-header-section">
  <div class="header-inner">
    <nav class="luxury-breadcrumb" aria-label="Breadcrumb">

      <ol>
         <li class=" "><a href="<?= site_url('Site/') ; ?>">Home</a></li>
          <li class=" "><a href="<?= site_url('Site/Blogs') ; ?>">Journal</a></li>
          <li class=" " aria-current="page">Design Insights</li>
         
        <!-- <li aria-current="page">Residential Spaces</li> -->
      </ol>
    </nav>

    <h2 class="page-title">The Art of Minimalist Luxury in Modern Interiors</h2>
 
       <div class="post-meta">
        <span><i class="fa-regular fa-calendar"></i> April 12, 2026</span>
        <span><i class="fa-regular fa-clock"></i> 6 min read</span>
        <span><i class="fa-regular fa-user"></i> Humshi Poonacha</span>
      </div>
  </div>
</section>
 <!-- Reading Progress Bar -->
  <div id="progress-bar"></div>

 

  <main class="py-5">
    <div class="container">
      <div class="row g-5">
        <!-- Main Content -->
        <article class="col-lg-8">
          <!-- Featured Image -->
          <div class="featured-image-wrapper">
            <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=1200&q=90" alt="Minimalist Luxury Interior">
          </div>

          <!-- Content -->
          <div class="article-content my-3">
            <p class="">True luxury isn't about excess. It's about intention. In contemporary interior design, the shift toward refined minimalism has redefined what it means to live beautifully.</p>
            
            <p>For years, opulence was measured in layers: heavy drapery, ornate moldings, and gilded accents. Today's high-end clients seek something quieter yet profoundly impactful. They want spaces that breathe, materials that age gracefully, and layouts that prioritize wellbeing over spectacle.</p>

            <h2>Curating Space Through Restraint</h2>
            <p>The foundation of minimalist luxury lies in spatial clarity. Every element must earn its place. When fewer pieces occupy a room, each one demands exceptional quality. This philosophy transforms interior design from decoration into architecture of experience.</p>
            
            <blockquote class="pull-quote">
              Luxury is the absence of noise. It's the quiet confidence of a perfectly balanced room.
            </blockquote>

            <p>Material selection becomes the primary driver of sophistication. We're seeing a return to honest finishes: raw marble, brushed brass, aged oak, and hand-woven linens. These textures create depth without visual clutter, allowing light and shadow to become active design elements.</p>

            <h2>Light as an Architectural Material</h2>
            <p>In premium residential projects, lighting is no longer an afterthought—it's structural. Layered illumination replaces single-source chandeliers. Recessed cove lighting, hidden LED strips, and sculptural floor lamps work together to paint spaces throughout the day. The result is an environment that evolves with natural rhythms rather than fighting them.</p>
            
            <p>This approach requires meticulous planning. Every fixture placement, beam angle, and color temperature is calibrated to complement the materials it touches. Gold accents catch warm light differently than they do in daylight, and that interplay is where the magic happens.</p>

            <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?auto=format&fit=crop&w=1000&q=90" alt="Elegant Lighting Design" class="img-fluid rounded">
            <p class="text-center   my-3">Lighting transforms texture and space in unexpected ways.</p>

            <h2>The Human Scale of Elegance</h2>
            <p>Ultimately, luxury design serves human comfort. Scale, proportion, and ergonomics dictate success more than any trend. A sofa should invite lingering. A dining table should facilitate conversation. A bedroom should feel like a sanctuary.</p>
            
            <p>When restraint meets craftsmanship, the result isn't empty. It's expansive. Rooms feel larger, acoustics soften, and inhabitants breathe easier. This is the new standard of premium living: less decoration, more intention.</p>
          </div>

          <!-- Tags & Share -->
          <div class="tags-share">
            <div class="post-tags">
              <a href="#" class="tag-pill">Minimalism</a>
              <a href="#" class="tag-pill">Luxury Design</a>
              <a href="#" class="tag-pill">Materials</a>
              <a href="#" class="tag-pill">Lighting</a>
            </div>
            <div class="share-icons">
              <a href="#" aria-label="Share on Facebook"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#" aria-label="Share on Twitter"><i class="fa-brands fa-x-twitter"></i></a>
              <a href="#" aria-label="Share on Pinterest"><i class="fa-brands fa-pinterest-p"></i></a>
              <a href="#" aria-label="Copy Link"><i class="fa-solid fa-link"></i></a>
            </div>
          </div>

          <!-- Post Navigation -->
          <!-- <div class="post-nav mt-5">
            <a href="#" class="post-nav-item">
              <div class="post-nav-label"><i class="fa-solid fa-arrow-left"></i> Previous</div>
              <h3 class="post-nav-title">Sustainable Materials in High-End Residential Design</h3>
            </a>
            <a href="#" class="post-nav-item post-nav-next">
              <div class="post-nav-label">Next <i class="fa-solid fa-arrow-right"></i></div>
              <h3 class="post-nav-title">The Psychology of Color in Luxury Hospitality</h3>
            </a>
          </div> -->

          <!-- Comments -->
          <!-- <section class="comments-section">
            <h2 class="sidebar-title">Discussion <span class="text-muted fs-6">(3)</span></h2>
            
            <div class="comment-item">
              <div class="d-flex gap-3">
                <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=100&q=80" alt="User" class="comment-avatar">
                <div>
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <span class="comment-author">Sarah Jenkins</span>
                    <span class="comment-meta">April 10, 2026 • 2:15 PM</span>
                  </div>
                  <p class="mb-2">Beautifully articulated. The section on lighting resonated deeply with our recent renovation. We removed 40% of our fixtures and the room feels infinitely more luxurious now.</p>
                  <span class="comment-reply">Reply</span>
                </div>
              </div>
            </div>

            <div class="comment-item ms-4 ps-3 border-start">
              <div class="d-flex gap-3">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=100&q=80" alt="User" class="comment-avatar">
                <div>
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <span class="comment-author">Marcus Lin</span>
                    <span class="comment-meta">April 11, 2026 • 9:42 AM</span>
                  </div>
                  <p class="mb-2">"Luxury is the absence of noise" – I'll be using this in my next client presentation. Thank you for this perspective shift.</p>
                  <span class="comment-reply">Reply</span>
                </div>
              </div>
            </div>

            <div class="mt-5">
              <h3 class="fs-4 mb-4">Leave a Comment</h3>
              <form>
                <div class="row g-3 mb-4">
                  <div class="col-md-6">
                    <input type="text" class="form-control newsletter-input" placeholder="Your Name" required>
                  </div>
                  <div class="col-md-6">
                    <input type="email" class="form-control newsletter-input" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="mb-4">
                  <textarea class="form-control newsletter-input" rows="5" placeholder="Your thoughts..." required></textarea>
                </div>
                <div class="form-check mb-4">
                  <input class="form-check-input" type="checkbox" id="saveInfo">
                  <label class="form-check-label text-muted small" for="saveInfo">Save my name and email for next time.</label>
                </div>
                <button type="submit" class="btn btn-luxury-submit">Post Comment</button>
              </form>
            </div>
          </section> -->
        </article>

        <!-- Sidebar -->
        <aside class="col-lg-4">
          <div class="sidebar-sticky position-sticky" style="top: 100px;">
            <!-- Author Card -->
            <div class="sidebar-card text-center">
              <img src="<?= base_url('website_assets/img/banner/about-banner.jpg') ?>" alt="Elena Vance" class="author-img">
              <h3 class="fs-5 mb-2">Humshi Poonacha</h3>
              <p class=" text-dark  mb-3 line-height-2">Lead Designer & Interior Architect at Lusxury Styling. Specializing in minimalist luxury and sustainable high-end spaces.</p>
              <div class="d-flex justify-content-center gap-3">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
              </div>
            </div>

            <!-- Recent Posts -->
            <div class="sidebar-card">
              <h3 class="sidebar-title">Latest Insights</h3>
              <div class="recent-post-item">
                <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=200&q=80" alt="Post" class="recent-thumb">
                <div>
                  <a href="<?= site_url('Site/Blog_details') ; ?>" class="recent-title">Sustainable Materials in High-End Residential Design</a>
                  <div class="recent-date">April 5, 2026</div>
                </div>
              </div>
              <div class="recent-post-item">
                <img src="https://images.pexels.com/photos/271618/pexels-photo-271618.jpeg" alt="Post" class="recent-thumb">
                <div>
                  <a href="<?= site_url('Site/Blog_details') ; ?>" class="recent-title">The Psychology of Color in Luxury Hospitality</a>
                  <div class="recent-date">March 28, 2026</div>
                </div>
              </div>
              <div class="recent-post-item">
                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=200&q=80" alt="Post" class="recent-thumb">
                <div>
                  <a href="<?= site_url('Site/Blog_details') ; ?>" class="recent-title">Curating Art for Modern Penthouse Spaces</a>
                  <div class="recent-date">March 15, 2026</div>
                </div>
              </div>
            </div>

            <!-- Newsletter -->
            <!-- <div class="sidebar-card text-center">
              <h3 class="sidebar-title">Join the Journal</h3>
              <p class="text-muted small mb-3">Receive weekly design insights, material spotlights, and exclusive studio updates.</p>
              <input type="email" class="form-control newsletter-input mb-3" placeholder="Your email address">
              <button class="btn btn-luxury-submit w-100">Subscribe</button>
            </div> -->
          </div>
        </aside>
      </div>
    </div>
  </main>

  <script>
    // Reading Progress Bar
    window.addEventListener('scroll', () => {
      const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
      const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      const scrolled = (winScroll / height) * 100;
      document.getElementById('progress-bar').style.width = scrolled + "%";
    });

    // Bootstrap Init (if using JS components)
    document.addEventListener('DOMContentLoaded', function() {
      // Optional: Smooth scroll for anchor links
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
          e.preventDefault();
          const target = document.querySelector(this.getAttribute('href'));
          if (target) {
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
          }
        });
      });
    });
  </script>
























<?php $this->load->view('includes/footer' ); ?> 