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
    
     
    /* Contact Section */
    .contact-section { padding: 5rem 0; }
    .contact-grid {
      display: grid;
      grid-template-columns: 1fr 1.2fr;
      gap: 4rem;
      margin-bottom: 5rem;
    }

    /* Contact Info Cards */
    .contact-info { display: flex; flex-direction: column; gap: 2rem; }
    .info-card {
      background: var(--white);
      padding: 2.5rem;
      border-radius: 4px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.06);
      transition: var(--transition);
      border-left: 3px solid transparent;
    }
    .info-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
      border-left-color: var(--gold);
    }
    .info-icon {
      width: 50px; height: 50px;
      background: var(--gold-gradient);
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      margin-bottom: 1.25rem;
      color: var(--black);
      font-size: 1.2rem;
    }
    .info-title {
      font-family: 'Playfair Display', serif;
      font-size: 1.3rem;
      color: var(--black);
      margin-bottom: 0.75rem;
      font-weight: 400;
    }
    .info-text {
      color: rgba(10, 10, 10, 0.7);
      font-size: 0.95rem;
      line-height: 1.7;
      margin-bottom: 0.5rem;
    }
    .info-text a {
      color: var(--black);
      text-decoration: none;
      transition: var(--transition);
    }
    .info-text a:hover { color: var(--black); }

    /* Contact Form */
    .contact-form-wrapper {
      background: var(--white);
      padding: 3rem;
      border-radius: 4px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    }
    .form-title {
      font-family: 'Playfair Display', serif;
      font-size: 2rem;
      color: var(--black);
      margin-bottom: 0.5rem;
      font-weight: 400;
    }
    .form-subtitle {
      color: rgba(10, 10, 10, 0.6);
      margin-bottom: 2.5rem;
      font-size: 0.95rem;
    }
    .form-group { margin-bottom: 1.75rem; }
    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1.5rem;
    }
    .form-label {
      display: block;
      font-size: 0.8rem;
      font-weight: 500;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      color: var(--black);
      margin-bottom: 0.6rem;
    }
    .form-input, .form-textarea {
      width: 100%;
      padding: 1rem 1.25rem;
      border: 1px solid rgba(10, 10, 10, 0.15);
      background: #faf9f6;
      font-family: 'Montserrat', sans-serif;
      font-size: 0.95rem;
      color: var(--black);
      transition: var(--transition);
      border-radius: 2px;
    }
    .form-input:focus, .form-textarea:focus {
      outline: none;
      border-color: var(--gold);
      background: var(--white);
      box-shadow: 0 0 0 3px rgba(198, 169, 108, 0.1);
    }
    .form-textarea {
      min-height: 150px;
      resize: vertical;
    }
    .btn-submit {
      display: inline-flex;
      align-items: center;
      gap: 0.75rem;
      background: var(--gold-gradient);
      color: var(--black);
      border: none;
      padding: 1rem 2.5rem;
      font-family: 'Montserrat', sans-serif;
      font-size: 0.85rem;
      font-weight: 600;
      letter-spacing: 2px;
      text-transform: uppercase;
      cursor: pointer;
      border-radius: 2px;
      transition: var(--transition);
      position: relative;
      overflow: hidden;
    }
    .btn-submit::before {
      content: '';
      position: absolute;
      top: 0; left: 0; width: 100%; height: 100%;
      background: var(--black);
      transform: scaleX(0);
      transform-origin: left;
      transition: transform 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
      z-index: 0;
    }
    .btn-submit span {
      position: relative;
      z-index: 1;
      transition: color 0.4s ease;
    }
    .btn-submit i {
      position: relative;
      z-index: 1;
      transition: transform 0.3s ease;
    }
    .btn-submit:hover::before { transform: scaleX(1); }
    .btn-submit:hover { color: var(--white); }
    .btn-submit:hover i { transform: translateX(4px); }

    /* Map Section */
    .map-section {
      position: relative;
      height: 500px;
      background: var(--black);
      border-radius: 4px;
      overflow: hidden;
      box-shadow: 0 10px 40px rgba(0,0,0,0.15);
    }
    .map-container {
      width: 100%;
      height: 100%;
      filter: grayscale(20%) contrast(1.1);
      transition: var(--transition);
    }
    .map-section:hover .map-container { filter: grayscale(0%) contrast(1); }
    .map-overlay {
      position: absolute;
      bottom: 2rem;
      left: 2rem;
      background: var(--white);
      padding: 1.5rem 2rem;
      border-radius: 4px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.15);
      z-index: 10;
    }
    .map-location-title {
      font-family: 'Playfair Display', serif;
      font-size: 1.2rem;
      color: var(--black);
      margin-bottom: 0.25rem;
    }
    .map-location-text {
      font-size: 0.9rem;
      color: rgba(10, 10, 10, 0.7);
    }

    /* Responsive */
    @media (max-width: 1024px) {
      .contact-grid { grid-template-columns: 1fr; gap: 3rem; }
      .contact-form-wrapper { padding: 2.5rem; }
    }
    @media (max-width: 768px) {
      .luxury-header-section { padding-top: calc(var(--nav-height, 60px) + 2.5rem); padding-bottom: 3rem; }
      .contact-section { padding: 3rem 0; }
      .info-card { padding: 2rem; }
      .contact-form-wrapper { padding: 2rem; }
      .form-row { grid-template-columns: 1fr; gap: 0; }
      .form-title { font-size: 1.75rem; }
      .map-section { height: 400px; }
      .map-overlay {
        bottom: 1rem; left: 1rem; right: 1rem;
        padding: 1.25rem;
      }
    }
    @media (prefers-reduced-motion: reduce) {
      :root { --transition: none; }
      .info-card:hover { transform: none; }
    }
  </style>
 

  <!-- Header -->
  <section class="luxury-header-section">
    <div class="container">
      <nav class="luxury-breadcrumb" aria-label="Breadcrumb">
        <ol>
          <li><a href="<?= site_url('Site/') ; ?>">Home</a></li>
          <li aria-current="page">Contact Us</li>
        </ol>
      </nav>
      <h2 class="page-title">Get In Touch</h2>
      <p class="page-subtitle">Let's create your dream space together</p>
    
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact-section">
    <div class="container">
      <div class="contact-grid">
        <!-- Contact Info -->
        <div class="contact-info">
          <div class="info-card">
            <div class="info-icon">
              <i class="fa-solid fa-location-dot"></i>
            </div>
            <h3 class="info-title">Visit Our Studio</h3>
            <p class="info-text">
              Koramangala, Bangalore

India
            </p>
          </div>

          <div class="info-card">
            <div class="info-icon">
              <i class="fa-solid fa-phone"></i>
            </div>
            <h3 class="info-title">Call Us</h3>
            <p class="info-text">
               <a href="+91 94495-46202">+91 94495-46202</a><br>
              <!-- Mobile: <a href="tel:+19175559876">+1 (917) 555-9876</a> -->
            </p>
          </div>

          <div class="info-card">
            <div class="info-icon">
              <i class="fa-solid fa-envelope"></i>
            </div>
            <h3 class="info-title">Email Us</h3>
            <p class="info-text">
               <a href="humshi@harvatelier.com">humshi@harvatelier.com</a><br>
             
            </p>
          </div>

          <div class="info-card">
            <div class="info-icon">
              <i class="fa-solid fa-clock"></i>
            </div>
            <h3 class="info-title">Business Hours</h3>
            <p class="info-text">
              Monday - Friday: 10:00 AM - 7:00 PM<br>
              <!-- Saturday: 10:00 AM - 5:00 PM<br>
              Sunday: By Appointment -->
            </p>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="contact-form-wrapper">
          <h2 class="form-title">Send Us a Message</h2>
          <p class="form-subtitle">Tell us about your project and we'll get back to you within 24 hours.</p>
          
          <form id="contactForm" action="#" method="POST">
            <div class="form-row">
              <div class="form-group">
                <label class="form-label" for="firstName">First Name *</label>
                <input type="text" id="firstName" name="firstName" class="form-input" required>
              </div>
              <div class="form-group">
                <label class="form-label" for="lastName">Last Name *</label>
                <input type="text" id="lastName" name="lastName" class="form-input" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label class="form-label" for="email">Email Address *</label>
                <input type="email" id="email" name="email" class="form-input" required>
              </div>
              <div class="form-group">
                <label class="form-label" for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" class="form-input">
              </div>
            </div>

            <div class="form-group">
              <label class="form-label" for="subject">Subject *</label>
              <input type="text" id="subject" name="subject" class="form-input" required>
            </div>

            <div class="form-group">
              <label class="form-label" for="message">Your Message *</label>
              <textarea id="message" name="message" class="form-textarea" required></textarea>
            </div>

            <button type="submit" class="btn-submit">
              <span>Send Message</span>
              <i class="fa-solid fa-arrow-right"></i>
            </button>
          </form>
        </div>
      </div>

      <!-- Google Map -->
      <div class="map-section">
        <iframe 
          class="map-container"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51280.309426976564!2d77.5909926235668!3d12.936344668039363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae144ed898fc2d%3A0x1681f38e8c00ae56!2sKoramangala%2C%20Bengaluru%2C%20Karnataka!5e1!3m2!1sen!2sin!4v1776252174529!5m2!1sen!2sin"
          width="100%" 
          height="100%" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        <div class="map-overlay">
          <!-- <div class="map-location-title">Lusxury Styling Studio</div>
          <div class="map-location-text">245 Park Avenue, New York, NY 10167</div> -->
        </div>
      </div>
    </div>
  </section>
<?php $this->load->view('includes/footer' ); ?>
  <script>
    // Form Submission Handler
    document.getElementById('contactForm').addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Get form data
      const formData = new FormData(this);
      const data = Object.fromEntries(formData);
      
      // Here you would normally send the data to your server
      console.log('Form submitted:', data);
      
      // Show success message (you can customize this)
      alert('Thank you for your message! We will get back to you within 24 hours.');
      this.reset();
    });

    // Smooth scroll for any anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      });
    });
  </script>

 