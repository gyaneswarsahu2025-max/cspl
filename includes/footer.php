

<style>
        footer {
            background-color:var(--secondary-green) ;
            color: white;
            padding: 40px 0 0 0;
        }
        
        .footer-title {
            font-weight: bold;
            margin-bottom: 20px;
            font-size: 1.2rem;

            color: white;
        }
        
        .contact-info {
            margin-bottom: 8px;
        }
        
   .contact-info p {
     color:white;
        }


        .contact-info i {
            margin-right: 10px;
            color: #ffffff;
        }
        
        .quick-links p {

            display: block;
            color: white;


            text-decoration: none;
            margin-bottom: 5px;
            transition: color 0.3s;
        }
        
        .quick-links a:hover {
            color: #00e0c6;
        }
        
    .social-icons-f a {
            color: white;
            margin-right: 15px;
            font-size: 18px;
            transition: color 0.3s;
        }
        
        .social-icons-f a:hover {
            color: var(--primary-green) ;
        }
        
        .gallery-img {
            margin-bottom: 15px;
            border-radius: 5px;
            overflow: hidden;
        }
        
        .gallery-img img {
            width: 100%;
            height: 70px;
            object-fit: cover;
            transition: transform 0.3s;
        }
        
        .gallery-img img:hover {
            transform: scale(1.05);
        }
        
        .newsletter-input {
            border-radius: 0;
            margin-bottom: 15px;
            border-radius: 12px !important;
        }
        
        .signup-btn {
            background-color:white ;
            border: none;
            color: var(--secondary-green) ;
            padding: 8px 20px;
            border-radius: 12px;
            transition: background-color 0.3s;

        }
        
        .signup-btn:hover {
            background-color: var(--primary-green) ;
            color: white;
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding: 15px 0;
            margin-top: 30px;
        }
        
        .copyright {
            font-size: 14px;
        }
        
        .designed-by a {
            color: #00e0c6;
            text-decoration: none;
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
    </style>



 



 

 
 



<footer>
        <div class="container">
            <div class="row">

                  <div class="col-md-4 col-sm-6 footer-section">
                    <h3 class="footer-title">Newsletter</h3>
                    <p class="text-light">Let’s stay connected. Get wellness tips in your inbox.</p>
                    <div class="input-group">
                        <input type="email" class="form-control newsletter-input" placeholder="Your email">
                    </div>
                      <div class="input-group">
                        <input type="text" class="form-control newsletter-input" placeholder="Your Name">
                    </div>
                    <button class="  signup-btn">SignUp</button>


                   
                </div>
                <!-- Get In Touch Section -->
                <div class="col-md-4 col-sm-6 footer-section">
                    <h3 class="footer-title">Quick Links</h3>
                    <div class="contact-info">
  <ul class="list-unstyled mb-0">
    <li class="mb-2">
      <a href="index.php" class="text-light">
       <i class="fa-solid fa-angles-right" style="color: #ffffff;"></i> <b>Home</b>
      </a>
    </li>
    <li class="mb-2">
      <a href="about.php" class="text-light">
       <i class="fa-solid fa-angles-right" style="color: #ffffff;"></i> <b>About</b>
      </a>  
    </li>
     <li class="mb-2">
      <a href="blog-list.php" class="text-light">
       <i class="fa-solid fa-angles-right" style="color: #ffffff;"></i> <b>Health</b>
      </a>
    </li>
     <li class="mb-2">
      <a href="blog-list.php" class="text-light">
       <i class="fa-solid fa-angles-right" style="color: #ffffff;"></i> <b>Fitness</b>
      </a>
    </li>
     <li class="mb-2">
      <a href="blog-list.php" class="text-light">
       <i class="fa-solid fa-angles-right" style="color: #ffffff;"></i> <b>Lifestyle</b>
      </a>
    </li>
     <li class="mb-2">
      <a href="blog-list.php" class="text-light">
        <i class="fa-solid fa-angles-right" style="color: #ffffff;"></i> <b>Self Improvement</b>
      </a>
    </li>
  </ul>
</div>

                    <!-- <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div> -->
                </div>

                <div class="col-md-4 col-sm-6 footer-section">
                    <h3 class="footer-title">Follow Us On </h3>
                   
                    <!-- <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div> -->


                     <div class="social-icons-f mt-3  ">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <!-- Quick Links Section -->
                 
                
                <!-- Photo Gallery Section -->
             <!--    <div class="col-md-2 col-sm-6 footer-section">
                    <h3 class="footer-title">Photo Gallery</h3>
                    <div class="row">
                        <div class="col-4 gallery-img">
                            <img src="/api/placeholder/150/100" alt="Property 1">
                        </div>
                        <div class="col-4 gallery-img">
                            <img src="/api/placeholder/150/100" alt="Property 2">
                        </div>
                        <div class="col-4 gallery-img">
                            <img src="/api/placeholder/150/100" alt="Property 3">
                        </div>
                        <div class="col-4 gallery-img">
                            <img src="/api/placeholder/150/100" alt="Property 4">
                        </div>
                        <div class="col-4 gallery-img">
                            <img src="/api/placeholder/150/100" alt="Property 5">
                        </div>
                        <div class="col-4 gallery-img">
                            <img src="/api/placeholder/150/100" alt="Property 6">
                        </div>
                    </div>
                </div>
                 -->
                <!-- Newsletter Section -->
              
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <!--<p class="copyright">  All Rights Reserved. Designed By <a href="https://cakiweb.com/" class="text-light">Cakiweb Solutions Pvt Ltd</a></p>-->
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Back to Top Button -->
        <div class="back-to-top">
            <i class="fas fa-arrow-up"></i>
        </div>
    </footer>


 

<!-- Vendor -->
<!-- <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->



<script src="<?= base_url('vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('vendor/jquery.appear/jquery.appear.min.js') ?>
"></script>
<script src="<?= base_url('vendor/jquery.easing/jquery.easing.min.js') ?>
"></script>
<script src="<?= base_url('vendor/jquery.cookie/jquery.cookie.min.js') ?>
"></script>
<script src="<?= base_url('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>
"></script>
<script src="<?= base_url('vendor/jquery.validation/jquery.validate.min.js') ?>
"></script>
<script src="<?= base_url('vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') ?>
"></script>
<script src="<?= base_url('vendor/jquery.gmap/jquery.gmap.min.js') ?>
"></script>
<script src="<?= base_url('vendor/lazysizes/lazysizes.min.js') ?>
"></script>
<script src="<?= base_url('vendor/isotope/jquery.isotope.min.js') ?>
"></script>
<script src="<?= base_url('vendor/owl.carousel/owl.carousel.min.js') ?>"></script>
<script src="<?= base_url('vendor/magnific-popup/jquery.magnific-popup.min.js') ?>
"></script>
<script src="<?= base_url('vendor/vide/jquery.vide.min.js') ?>
"></script>
<script src="<?= base_url('vendor/vivus/vivus.min.js') ?>
"></script>
   <script src="<?= base_url('js/demos/demo-real-estate.js') ?>
"></script>
<!-- Theme Base, Components and Settings -->
 
<!-- Current Page Vendor and Views -->
 
<!-- Demo -->
 


<!-- Theme Base, Components and Settings -->
      <script src="<?= base_url('js/theme.js') ?>
"></script>

      <!-- Current Page Vendor and Views -->
      <script src="<?= base_url('js/views/view.contact.js') ?>
"></script>

      <!-- Demo -->
      <script src="<?= base_url('js/demos/demo-real-estate.js') ?>
"></script>
        
<!-- Theme Initialization Files -->
<script src="<?= base_url('js/theme.init.js') ?>
"></script>
<script defer src="../../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"699d277a9ee30da4","version":"2021.9.0","r":1,"token":"03fa3b9eb60b49789931c4694c153f9b","si":100}'></script>

    <script>
        // Back to top button functionality
        document.querySelector('.back-to-top').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>


      <script type="text/javascript">
      $(document).ready(function () {
                  function checkScroll() {
                      let windowHeight = $(window).height();
                      let scrollTop = $(window).scrollTop();
      
                      $(".loading-animation").each(function () {
                          let elementTop = $(this).offset().top;
                          let animationType = $(this).data("animation");
      
                          if (scrollTop + windowHeight > elementTop + 50) {
                              $(this).addClass("visible");
                          } else {
                              $(this).removeClass("visible");
                          }
                      });
                  }
      
                  // Run on page load and scroll
                  $(window).on("scroll", checkScroll);
                  checkScroll();
              });

$(document).ready(function () {
    function checkScroll() {
        let windowHeight = $(window).height();
        let scrollTop = $(window).scrollTop();

        $(".serial-load").each(function () {
            let elementTop = $(this).offset().top;

            if (scrollTop + windowHeight > elementTop + 50) {
                let delay = $(this).data("delay") || 0;
                $(this)
                    .delay(delay)
                    .queue(function (next) {
                        $(this).addClass("visible").fadeIn(300); // Fade-in with 300ms duration
                        next();
                    });
            }
        });
    }

    // Run on page load and scroll
    $(window).on("scroll", checkScroll);
    checkScroll();
});


      
   </script>



   <script>
   $(document).ready(function () {
       $('.hamburger').click(function (e) {
           e.stopPropagation();
           toggleMobileMenu();
       });
   
       $('.overlay').click(function () {
           closeMobileMenu();
       });
   
       $('.nav-mobile a').click(function () {
           closeMobileMenu();
       });
   
       $(document).click(function (e) {
           if (!$(e.target).closest('.nav-mobile, .hamburger').length) {
               closeMobileMenu();
           }
       });
   
       $(document).keyup(function (e) {
           if (e.keyCode === 27) {
               closeMobileMenu();
           }
       });
   
       $(window).resize(function () {
           if ($(window).width() > 840) {
               closeMobileMenu();
           }
       });
   
       $('a[href^="#"]').click(function (e) {
           e.preventDefault();
           var target = $(this.hash);
           if (target.length) {
               $('html, body').animate({
                   scrollTop: target.offset().top - 80
               }, 800);
           }
       });
   
       $(window).scroll(function () {
           if ($(this).scrollTop() > 50) {
               $('.header').addClass('scrolled');
           } else {
               $('.header').removeClass('scrolled');
           }
       });
   
       function toggleMobileMenu() {
           $('.hamburger').toggleClass('active');
           $('.nav-mobile').toggleClass('active');
           $('.overlay').toggleClass('active');
           $('body').toggleClass('menu-open');
       }
   
       function closeMobileMenu() {
           $('.hamburger').removeClass('active');
           $('.nav-mobile').removeClass('active');
           $('.overlay').removeClass('active');
           $('body').removeClass('menu-open');
       }
   });





   function equalizeHeights(selector) {
    var maxHeight = 0;

    // Reset all heights first
    $(selector).css('height', 'auto');

    // Get max height
    $(selector).each(function() {
      var thisHeight = $(this).outerHeight();
      if (thisHeight > maxHeight) {
        maxHeight = thisHeight;
      }
    });

    // Set max height to all
    $(selector).css('height', maxHeight + 'px');
  }

  $(document).ready(function() {
    equalizeHeights('.equal-card');

    // Optional: re-run on window resize
    $(window).resize(function() {
      equalizeHeights('.equal-card');
    });
  });
</script>


</body>
</html>