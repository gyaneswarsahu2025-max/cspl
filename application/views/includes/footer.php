 
<style>
        footer {
          
        }
        
      .footer {
  background: url('https://images.pexels.com/photos/7078630/pexels-photo-7078630.jpeg')
              center center / cover no-repeat fixed;
  position: relative;
  padding: 100px 0;
  color: #fff;
}

.footer::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
 background: #000;
 opacity: 0.5;
  z-index: 1;
}

.footer .container {
  position: relative;
  z-index: 2;
}
        
        /*      */
        .footer h5 {
            color: #fff;
            font-weight: bold;
            margin-bottom: 1.5rem;
            position: relative;
        }
        
        .footer h5::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -8px;
            width: 50px;
            height: 2px;
            background: #fff;
        }
        
        .footer ul {
            list-style: none;
            padding: 0;
        }
        
        .footer ul li {
            margin-bottom: 0.8rem;
        }
        
        .footer ul li a {
            color: #fff;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
        }
        
        .footer ul li a:hover {
            color: #fff;
            text-decoration: none;
            transform: translateX(5px);
        }
        
        .footer ul li a i {
            margin-right: 8px;
            width: 16px;
        }
        
        .social-links {
            margin-top: 1.5rem;
        }
        
        .social-links a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background: var(--primary-blue);
            color: #ecf0f1;
            text-align: center;
            line-height: 40px;
            margin-right: 10px;
            border-radius: 50%;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .social-links a:hover {
            background:    var(--primary-orange)  ;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
            text-decoration: none;
            color: white;
        }
        
        .contact-info-footer {
          
            margin-top: 0;
            padding-top: 0;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        
        .contact-info-footer p {
            margin-bottom: 0.8rem;
            color: #fff;
        }
        
        .contact-info-footer i {
            color: #fff;
            margin-right: 10px;
            width: 20px;
        }
        
        .footer-bottom {
            background: #1a252f;
            padding: 1.5rem 0;
            margin-top: 2rem;
            border-top: 1px solid #34495e;
        }
        
        .footer-bottom p {
            margin: 0;
            color: #95a5a6;
            text-align: center;
        }
        
        .newsletter-form {
            margin-top: 1rem;
        }
        
        .newsletter-form .input-group {
            margin-bottom: 1rem;
        }
        
        .newsletter-form .form-control {
            background: #34495e;
            border: 1px solid #34495e;
            color: #fff;
        }
        
        .newsletter-form .form-control:focus {
            background: #34495e;
            border-color: #fff;
            color: #fff;
            box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
        }
        
        .newsletter-form .form-control::placeholder {
            color: #fff;
        }
        
        .btn-newsletter {
            background: #fff;
            border: 1px solid #fff;
            color: white;
            padding: 0.5rem 1.5rem;
            transition: all 0.3s ease;
        }
        
        .btn-newsletter:hover {
            background: #2980b9;
            border-color: #2980b9;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
        }
        
        @media (max-width: 768px) {

            .footer h5::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -8px;
            width: 100%;
            height: 2px;
            background: #fff;
        }
            .footer {
                text-align: left;
            }
            
            .footer h5::after {
                left: 50%;
                transform: translateX(-50%);
            }
            
            .social-links {
                text-align: left;
            }
            
            .footer ul li a:hover {
                transform: none;
            }
        }
        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 40px;
            height: 40px;
            background-color: #00e0c6;
            color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .back-to-top:hover {
            background-color: #00c4ad;
        }
        
        @media (max-width: 767px) {
            .footer-section {
                margin-bottom: 30px;
            }
        }

    .arrow-list{
    list-style:none;
    padding:0;
    margin:0;
}

.arrow-list li{
    margin-bottom:12px;
}

.arrow-list li a{
    color:#fff;
    font-size:18px;
    text-decoration:none;
    position:relative;
    padding-left:28px;
    transition:.3s ease;
}

/* dynamic arrow */
.arrow-list li a::before{
    content:"»";
    position:absolute;
    left:0;
    top:0;
    font-size:22px;
    transition:transform .3s ease;
}

/* animate on hover */
.arrow-list li:hover a::before{
    transform:translateX(6px);
}

.arrow-list li:hover a{
    color:#00c4f4;
}

.subscribe-box{
    max-width:420px;
}

.subscribe-input{
    width:100%;
    padding:14px 18px;
    border-radius:12px;
    border:none;
    outline:none;
    font-size:16px;
    margin-bottom:14px;
}

.subscribe-row{
    display:flex;
    gap:12px;
    margin-bottom:14px;
}

.subscribe-input.small{
    flex:1;
}

.captcha-box{
    padding:10px 10px;
   
    background:#fff;
    border-radius:12px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:20px;
    font-weight:700;
    color:#1db6ff;
    font-family:cursive;
}

.subscribe-btn{
    background:#00bfff;
    border:none;
    color:#fff;
    padding:14px 20px;
    border-radius:12px;
    font-size:16px;
    font-weight:600;
    cursor:pointer;
    transition:.3s ease;
}

.subscribe-btn:hover{
    background:#009edc;
}

    </style>


    </div>  </div>
  

  <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- Company Info -->
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 ">
                    <div class=" contact-info-footer  ">
                        <a href="index.php">
                        <img alt="Porto" width="100%" height="80px"  src="<?= base_url('website_assets/img/cspl-logo.png') ?>" class="my-4">
                        </a>
                   

                    <p><i class="fas fa-map"></i>

Ward 45 Flat no-21,  Metro Cottage, Chintamaniswar Temple Road, Chintamaniswar, Laxmisagar,
 Bhubaneswar -751006 , INDIA






</p>
          <p><i class="fas fa-phone "></i>+91-8480701080  |  +91-9437368484   </p>


           <p><i class="fas fa-envelope"></i>cakiweb.com@gmail.com    </p>                
<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119874.00528825134!2d85.48242124335935!3d20.13143310000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19addb58b2b4a9%3A0x5270b2b623a9b536!2sSwami%20Vivekananda%20Institute%20of%20Management!5e0!3m2!1sen!2sin!4v1756467511231!5m2!1sen!2sin" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                            </div>
                    <div class="social-links">
                        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" title="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0 col-6 ">
                    <h5>Quick Links</h5>
                    <ul class="arrow-list">
    <li><a href="#">Home</a></li>
    <li><a href="#">Contact Us</a></li>
     <li><a href="#">About Us</a></li>
      <li><a href="#">Pricing</a></li>
    <li><a href="#">Blogs</a></li>
    
</ul>

                </div>

                <!-- Services -->
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 col-6">
                    <h5>Policies</h5>
                     <ul class="arrow-list"> 
                        <li><a href="#">Term & Conditions</a></li>
    <li><a href="#">Privacy Policy</a></li>
    <li><a href="#">Refund Return Policy</a></li>

    <li><a href="#">Sitemap</a></li>
                        
                    </ul> 
                </div>

                <!-- Contact & Newsletter -->
                <div class="col-lg-3 col-md-6">
                    <h5>Our Newsletter</h5>
                    <div class="contact-info-footer ">
                      
                        <p class="fw-normal"> 

Our latest news, articles, and offers, we will sent to your inbox weekly.





</p>

                      <div class="subscribe-box">
    <input type="email" class="subscribe-input" placeholder="Enter Your Email">

    <div class="subscribe-row">
        <input type="text" class="subscribe-input small" placeholder="Enter Captcha">

        <input type="text" class="subscribe-input small" placeholder="123456" readonly>
    </div>

    <button class="subscribe-btn">
        SUBSCRIBE <i class="fas fa-paper-plane ml-2"></i>
    </button>
</div>

                         
                    </div>
                    
                    <!--<h5 class="mt-4">Newsletter</h5>-->
                    <!--<p class="text-light">Subscribe to get updates on our latest offers and news.</p>-->
                    <!--<form class="newsletter-form">-->
                    <!--    <div class="input-group">-->
                    <!--        <input type="email" class="form-control" placeholder="Your email address" required>-->
                    <!--        <div class="input-group-append">-->
                    <!--            <button class="btn btn-newsletter" type="submit">-->
                    <!--                <i class="fas fa-paper-plane"></i>-->
                    <!--            </button>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</form>-->
                </div>
            </div>




<div class="row my-3 ">
    <div class="col-12 my-3 ">

        <div class="trusted-heading-wrap">
   <h2 class="trusted-heading glow-animate">
      Our Modules 
   </h2>
</div>

    </div>
               <!-- Footer Links -->

<!-- Column 1 -->
<div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
  <ul class="arrow-list">
    <li><a href="#">HRMS & Payroll</a></li>
    <li><a href="#">CRM</a></li>
    <li><a href="#">Financial Accounting</a></li>
    <li><a href="#">Task Management</a></li>
    <li><a href="#">Tender Management</a></li>
  </ul>
</div>

<!-- Column 2 -->
<div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
  <ul class="arrow-list">
    <li><a href="#">Inventory Management</a></li>
    <li><a href="#">Asset Management</a></li>
    <li><a href="#">Vehicle Management</a></li>
    <li><a href="#">Project Management</a></li>
    <li><a href="#">Purchase Management</a></li>
  </ul>
</div>

<!-- Column 3 -->
<div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
  <ul class="arrow-list">
    <li><a href="#">Location Tracking</a></li>
    <li><a href="#">Document Management</a></li>
    <li><a href="#">Documentation</a></li>
    <li><a href="#">Vendor Portal</a></li>
    <li><a href="#">Client Portal</a></li>
  </ul>
</div>

<!-- Column 4 -->
<div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
  <ul class="arrow-list">
    <li><a href="#">Support Ticketing System</a></li>
  
    <li><a href="#">Pricing</a></li>
    
  </ul>
</div>

               
            </div>


<div class="row my-3 ">
    <div class="col-12 my-3 ">

        <div class="trusted-heading-wrap">
   <h2 class="trusted-heading glow-animate">
     Areas We Serve
   </h2>
</div>

    </div>
               <!-- Footer Links -->

<!-- Column 1 -->
<div class="col-lg-3 col-md-6 mb-4 mb-lg-0 col-6 ">
  <ul class="arrow-list">
    <li><a href="#">Mumbai</a></li>
    <li><a href="#">Delhi</a></li>
    <li><a href="#">Bengaluru</a></li>
    <li><a href="#">Kolkata</a></li>
    <li><a href="#">Chennai</a></li>
  </ul>
</div>

<!-- Column 2 -->
<div class="col-lg-3 col-md-6 mb-4 mb-lg-0 col-6">
  <ul class="arrow-list">
    <li><a href="#">Hyderabad</a></li>
    <li><a href="#">Pune</a></li>
    <li><a href="#">Ahmedabad</a></li>
    <li><a href="#">Jaipur</a></li>
    <li><a href="#">Lucknow</a></li>
  </ul>
</div>

<!-- Column 3 -->
<div class="col-lg-3 col-md-6 mb-4 mb-lg-0 col-6 ">
  <ul class="arrow-list">
    <li><a href="#">Kanpur</a></li>
    <li><a href="#">Nagpur</a></li>
    <li><a href="#">Indore</a></li>
    <li><a href="#">Thane</a></li>
    <li><a href="#">Bhopal</a></li>
  </ul>
</div>

<!-- Column 4 -->
<div class="col-lg-3 col-md-6 mb-4 mb-lg-0 col-6">
  <ul class="arrow-list">
    <li><a href="#">Visakhapatnam</a></li>
    <li><a href="#">Patna</a></li>
    <li><a href="#">Vadodara</a></li>
    <li><a href="#">Ghaziabad</a></li>
    <li><a href="#">Ludhiana</a></li>
  </ul>
</div>


               
            </div>

        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <p>&copy;<?php echo date("Y"); ?> © All rights reserved by CSPL ERP ,<a href="https://cakiweb.com/" target="__blank"> (Unit of Cakiweb Solution)</a></p>
                    </div>
                    <div class="col-md-6 d-none ">
                        <p class="text-md-right">
                            <a href="#" class="text-muted mr-3">Privacy Policy</a>
                            <a href="#" class="text-muted mr-3">Terms of Service</a>
                            <a href="#" class="text-muted">Sitemap</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back to Top Button -->
       <!--  <div class="back-to-top">
            <i class="fas fa-arrow-up"></i>
        </div> -->
    </footer>
 


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
       <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
  // Your YouTube Video ID
  const YOUTUBE_VIDEO_ID = 'cAFb_7wUvPk';
  
  // Entrance animation on scroll
  document.addEventListener("DOMContentLoaded", () => {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15, rootMargin: "0px 0px -50px 0px" });

    document.querySelectorAll(".animate-on-scroll").forEach(el => observer.observe(el));
  });

  // Open Video Modal
  function openVideo() {
    const modal = document.getElementById('videoModal');
    const iframe = document.getElementById('youtubeFrame');
    
    // Set YouTube embed URL with autoplay and your video ID
    iframe.src = `https://www.youtube.com/embed/${YOUTUBE_VIDEO_ID}?autoplay=1&rel=0&modestbranding=1&enablejsapi=1`;
    
    modal.classList.add('active');
    document.body.style.overflow = 'hidden'; // Prevent background scrolling
  }

  // Close Video Modal
  function closeVideo() {
    const modal = document.getElementById('videoModal');
    const iframe = document.getElementById('youtubeFrame');
    
    modal.classList.remove('active');
    setTimeout(() => {
      iframe.src = ''; // Stop video after animation
    }, 300);
    document.body.style.overflow = ''; // Restore scrolling
  }

  // Close on backdrop click
  function closeVideoOnBackdrop(event) {
    if (event.target === event.currentTarget) {
      closeVideo();
    }
  }

  // Close on Escape key
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      closeVideo();
    }
  });
</script>
    <script>
        $(document).ready(function() {
            
            // Sticky header shadow on scroll
            $(window).on('scroll', function() {
                if ($(window).scrollTop() > 10) {
                    $('#mainHeader').addClass('scrolled');
                } else {
                    $('#mainHeader').removeClass('scrolled');
                }
            });

            // Mobile menu toggle
            $('#mobileMenuToggle').on('click', function() {
                $('#mobileOffcanvas').addClass('active');
                $('#mobileOverlay').addClass('active');
                $('body').css('overflow', 'hidden');
            });

            // Close mobile menu
            function closeMobileMenu() {
                $('#mobileOffcanvas').removeClass('active');
                $('#mobileOverlay').removeClass('active');
                $('body').css('overflow', 'auto');
            }

            $('#mobileCloseBtn').on('click', closeMobileMenu);
            $('#mobileOverlay').on('click', closeMobileMenu);

            // Mobile dropdown toggles
            $('#mobileProductsToggle').on('click', function() {
                $('#mobileProductsDropdown').toggleClass('show');
                $(this).find('i.fa-chevron-down').toggleClass('fa-rotate-180');
            });

            $('#mobileSolutionsToggle').on('click', function() {
                $('#mobileSolutionsDropdown').toggleClass('show');
                $(this).find('i.fa-chevron-down').toggleClass('fa-rotate-180');
            });

            $('#mobileResourcesToggle').on('click', function() {
                $('#mobileResourcesDropdown').toggleClass('show');
                $(this).find('i.fa-chevron-down').toggleClass('fa-rotate-180');
            });

            // Close mobile menu when clicking a link
            $('.mobile-nav-link').on('click', function() {
                if (!$(this).parent().hasClass('mobile-nav-item') || !$(this).hasClass('mobile-nav-link') || !$(this).next('.mobile-dropdown').length) {
                    setTimeout(closeMobileMenu, 200);
                }
            });

            // Smooth scroll for anchor links
            $('a[href^="#"]').on('click', function(e) {
                const href = $(this).attr('href');
                if (href !== '#' && $(href).length) {
                    e.preventDefault();
                    $('html, body').animate({
                        scrollTop: $(href).offset().top - 80
                    }, 400);
                }
            });

        });
    </script>
     <script>
        // Initialize AOS Animation Library
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 50
        });

        // Custom Scroll Animations
        $(document).ready(function() {
            
            // Observe elements for fade-up animation
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Observe all fade-up elements
            document.querySelectorAll('.fade-up').forEach((el) => observer.observe(el));

            // Form submission handler
            $('.email-form').on('submit', function(e) {
                e.preventDefault();
                const email = $(this).find('.form-control-custom').val();
                
                // Add loading state
                const $btn = $(this).find('.btn-book-demo');
                const originalText = $btn.text();
                $btn.text('Submitting...').prop('disabled', true);
                
                // Simulate API call
                setTimeout(() => {
                    $btn.html('<i class="fas fa-check"></i> Demo Requested!').css('background', '#FFAC1C');
                    
                    // Reset after 3 seconds
                    setTimeout(() => {
                        $btn.text(originalText).prop('disabled', false).css('background', '');
                        $(this).find('.form-control-custom').val('');
                    }, 3000);
                }, 1500);
            });

            // Parallax effect on mouse move for illustration
            $(document).on('mousemove', function(e) {
                const mouseX = e.clientX / window.innerWidth - 0.5;
                const mouseY = e.clientY / window.innerHeight - 0.5;
                
                $('.isometric-illustration').css({
                    transform: `translateY(-10px) rotateY(${-15 + mouseX * 10}deg) rotateX(${5 - mouseY * 10}deg)`
                });
            });

            // Smooth scroll behavior for anchor links
            $('a[href^="#"]').on('click', function(e) {
                e.preventDefault();
                const target = $(this.getAttribute('href'));
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top - 80
                    }, 800);
                }
            });

            // Add active class to current nav item
            $(window).on('scroll', function() {
                let current = '';
                $('section').each(function() {
                    const sectionTop = $(this).offset().top;
                    const sectionHeight = $(this).height();
                    if (pageYOffset >= (sectionTop - 200)) {
                        current = $(this).attr('id');
                    }
                });
            });
        });

        // Counter animation for statistics
        function animateValue(element, start, end, duration, prefix = '', suffix = '') {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                const value = Math.floor(progress * (end - start) + start);
                element.text(prefix + value + suffix);
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }

        // Trigger counter animation when stats are visible
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const statValue = entry.target.querySelector('.stat-value');
                    const text = statValue.text();
                    if (text.includes('%')) {
                        animateValue(statValue, 0, 75.2, 2000, '', '%');
                    } else if (text.includes('k')) {
                        animateValue(statValue, 0, 20, 2000, '~', 'k');
                    }
                    statsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        document.querySelectorAll('.stat-item').forEach((el) => statsObserver.observe(el));

        $(function() {
  // 1. SCROLL REVEAL (Left-to-Right)
  const scrollObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        scrollObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

  document.querySelectorAll('.scroll-animate').forEach(el => scrollObserver.observe(el));

  // 2. SLIDER DATA & STATE
  const services = [
    { title: "Financial Management", desc: "Transform your workflow with integrated ERP modules. Streamline operations so you can focus on growth.", features: ["Real-time analytics", "Automated workflows", "Secure cloud infrastructure"], btn: "Explore Finance" },
    { title: "HR Management", desc: "Empower your workforce with intelligent HR solutions. Manage payroll, attendance, and performance in one place.", features: ["Automated payroll", "Performance tracking", "Employee self-service"], btn: "Explore HR" },
    { title: "Business Analytics", desc: "Make data-driven decisions with powerful analytics. Get insights that optimize operations and drive growth.", features: ["Custom dashboards", "Predictive analytics", "Real-time KPIs"], btn: "Explore Analytics" }
  ];

  let current = 0;
  const $slides = $('.service-slide');
  const total = $slides.length;
  let autoPlayTimer;
  let wheelCooldown = false;

  // Build dots
  for(let i=0; i<total; i++) $('#sliderDots').append(`<div class="slider-dot ${i===0?'active':''}" data-i="${i}"></div>`);

  // Core slide switcher
  function updateSlide(idx) {
    if(idx<0) idx=total-1; 
    if(idx>=total) idx=0;
    
    $slides.removeClass('active').eq(idx).addClass('active');
    $('.slider-dot').removeClass('active').eq(idx).addClass('active');
    current = idx;

    const s = services[idx];
    $('.service-title, .service-desc, .service-list, .btn-explore').css('opacity','0');
    setTimeout(() => {
      $('#serviceTitle').text(s.title);
      $('#serviceDesc').text(s.desc);
      $('#serviceBtn').html(`${s.btn} <i class="fas fa-arrow-right"></i>`);
      $('#serviceList').html(s.features.map(f => `<li><i class="fas fa-check-circle"></i> ${f}</li>`).join(''));
      $('.service-title, .service-desc, .service-list, .btn-explore').css('opacity','1');
    }, 250);

    // Reset auto-play on any interaction
    clearInterval(autoPlayTimer);
    startAutoPlay();
  }

  function startAutoPlay() {
    autoPlayTimer = setInterval(() => updateSlide(current + 1), 5000);
  }
  startAutoPlay();

  // 3. CLICK CONTROLS
  $('#sliderNext').click(() => updateSlide(current + 1));
  $('#sliderPrev').click(() => updateSlide(current - 1));
  $(document).on('click', '.slider-dot', function(){ updateSlide($(this).data('i')); });

  // 4. SCROLL/WHEEL TRIGGER (Desktop & Trackpad)
  $('.service-carousel').on('wheel', function(e) {
    if (wheelCooldown) return;
    
    const delta = e.originalEvent.deltaY || e.originalEvent.detail;
    if (Math.abs(delta) < 20) return; // Ignore tiny scrolls

    wheelCooldown = true;
    if (delta > 0) updateSlide(current + 1); // Scroll down → next
    else updateSlide(current - 1);           // Scroll up → prev

    setTimeout(() => { wheelCooldown = false; }, 600); // 600ms cooldown
  });
});




    </script>

    <script>
  // Feature Data
  const features = [
    {
      title: "Automated Workflows",
      img: "https://images.pexels.com/photos/32399732/pexels-photo-32399732.jpeg",
      bullets: ["Trigger actions based on user behavior", "No-code visual builder", "Real-time sync across platforms"]
    },
    {
      title: "Smart Analytics",
      img: "https://placehold.co/720x900/dcfce7/166534?text=Analytics",
      bullets: ["Track engagement in real-time", "Customizable dashboards", "Predictive insights & reporting"]
    },
    {
      title: "Team Collaboration",
      img: "https://placehold.co/720x900/fef3c7/92400e?text=Collaboration",
      bullets: ["Shared workspaces & permissions", "Inline comments & approvals", "Role-based access control"]
    },
    {
      title: "Enterprise Security",
      img: "https://placehold.co/720x900/fee2e2/991b1b?text=Security",
      bullets: ["SOC 2 Type II compliant", "End-to-end encryption", "Automated audit logs"]
    },
    {
      title: "Seamless Integrations",
      img: "https://placehold.co/720x900/e0f2fe/0369a1?text=Integrations",
      bullets: ["500+ native app connectors", "REST & GraphQL APIs", "Webhook & Zapier support"]
    }
  ];

  // Render Cards
  const track = document.getElementById('scrollTrack');
  track.innerHTML = features.map(f => `
    <article class="feature-card">
      <div class="card-image">
        <img src="${f.img}" alt="${f.title}" loading="lazy">
      </div>
      <div class="card-content">
        <h3 class="card-title">${f.title}</h3>
        <ul class="feature-list">
          ${f.bullets.map(b => `<li><span class="check-icon">✓</span> ${b}</li>`).join('')}
        </ul>
        <button class="card-btn">Learn More</button>
      </div>
    </article>
  `).join('');

  // GSAP Setup
  gsap.registerPlugin(ScrollTrigger);

  const totalCards = features.length;
  const getScrollEnd = () => {
    // Calculate exact distance to move so last card centers in viewport
    const trackWidth = track.scrollWidth;
    const wrapperWidth = track.parentElement.offsetWidth;
    return -(trackWidth - wrapperWidth);
  };

  ScrollTrigger.create({
    trigger: ".scroll-section",
    start: "top top",
    end: "bottom top",
    scrub: 1,
    anticipatePin: 1,
    snap: {
      snapTo: 1 / (totalCards - 1),
      duration: { min: 0.25, max: 0.5 },
      ease: "power2.inOut",
      inertia: false
    },
    invalidateOnRefresh: true,
    animation: gsap.to(track, {
      x: getScrollEnd,
      ease: "none"
    })
  });

  // Refresh on load & resize
  window.addEventListener('load', () => ScrollTrigger.refresh());
  window.addEventListener('resize', () => ScrollTrigger.refresh());
</script>
</body>
</html> 
