<footer id="contact" class="site-footer  ">
    <div class="container  ">
        <div class="footer-shell reveal-on-scroll">
            <div class="footer-top">
                <div class="footer-brand">
                    <a class="brand-mark-2 mx-auto" href="#home" aria-label="Interior Atelier home">
                        <div class="logo-2">
                            <img src="<?= base_url('website_assets/img/logo-n.png') ?>" alt="Logo">
                        </div>
                    </a>
                    <div>
                        <!-- <p class="footer-kicker"> INTERIOR DESIGN STUDIO </p> -->
                        <h2 class="text-gold">Designing layered interiors with calm luxury and lasting character.</h2>
                        <p class="footer-blurb">
                          HARV Atelier Interior Design Studio for residential, hospitality, and styling projects crafted
                            with
                            timeless materials, soft contrast, and editorial restraint.
                        </p>
                    </div>
                </div>

                <a href="humshi@harvatelier.com" class="footer-cta text-lowercase">humshi@harvatelier.com</a>
            </div>

            <div class="footer-grid">
                <div class="footer-card">
                    <span class="footer-label">Studio</span>
                    <p><b class="  text-no-style "> HARV ATELIER  </b>   <br>  (INTERIOR DESIGN STUDIO) </p>
                    <p>Koramangala, Bangalore</p>
                    <!-- <p>Mumbai, Maharashtra 400005</p> -->
                    <p>India</p>
                </div>

                <div class="footer-card">
                    <span class="footer-label">Contact</span>
                    <a href="tel:+919876543210" class="text-gold fw-bold">+91  94495-46202</a>
                    <a href="humshi@harvatelier.com"  class="text-gold fw-bold">humshi@harvatelier.com</a>
                    <a href="#projects">Recent Portfolio</a>
                    <a href="#services">Design Services</a>
                </div>


                <div class="footer-card">
                    <span class="footer-label">Hours</span>
                    <p>Monday - Sunday</p>
                    <p>10:00 AM - 7:00 PM</p>
                    <!-- <p>Saturday</p>
                    <p>11:00 AM - 4:00 PM</p> -->
                </div>

                <div class="footer-card">
                    <span class="footer-label">Follow</span>
                    <a href="#home"><i class="fab fa-instagram"></i> Instagram</a>

                    <a href="#projects"><i class="fab fa-pinterest"></i> Pinterest</a>

                    <a href="#about"><i class="fas fa-book-open"></i> Design Journal</a>

                    <a href="#contact"><i class="fas fa-calendar-check"></i> Book Consultation</a>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; <?php echo date("Y"); ?> <a  href="https://harvatelier.com/" class="text-gold fw-bold">  HARV Atelier Interior Design </a>. Crafted for elevated living. <br>
                 Design By 
                <a href="https://cakiweb.com"  class="text-gold fw-bold" target="__blank">Cakiweb Solutions Private Limited </a> </p>
                <div class="footer-bottom-links">
                    <a href="<?= site_url('Site/aboutus') ; ?>">About</a>
                    <a href="<?= site_url('Site/Projects') ; ?>">Projects</a>
                    <a href="<?= site_url('Site/Contact') ; ?>">Contact</a>
                      <a href="<?= site_url('Site/Blog') ; ?>">Blogs</a>
                </div>
            </div>
        </div>
    </div>
</footer>






<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/all.min.js"></script>
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="<?= base_url('') ; ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('') ; ?>vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="<?= base_url('') ; ?>vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?= base_url('') ; ?>vendor/jquery.cookie/jquery.cookie.min.js"></script>
<script src="<?= base_url('') ; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('') ; ?>vendor/jquery.validation/jquery.validate.min.js"></script>
<script src="<?= base_url('') ; ?>vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="<?= base_url('') ; ?>vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="<?= base_url('') ; ?>vendor/lazysizes/lazysizes.min.js"></script>
<script src="<?= base_url('') ; ?>vendor/isotope/jquery.isotope.min.js"></script>
<script src="<?= base_url('') ; ?>vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?= base_url('') ; ?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url('') ; ?>vendor/vide/jquery.vide.min.js"></script>
<script src="<?= base_url('') ; ?>vendor/vivus/vivus.min.js"></script>
<script src="<?= base_url('') ; ?>js/demos/demo-real-estate.js"></script>
<!-- Theme Base, Components and Settings -->

<!-- Current Page Vendor and Views -->

<!-- Demo -->



<!-- Theme Base, Components and Settings -->
<script src="<?= base_url('') ; ?>js/theme.js"></script>

<!-- Current Page Vendor and Views -->
<script src="<?= base_url('') ; ?>js/views/view.contact.js"></script>

<!-- Demo -->
<script src="<?= base_url('') ; ?>js/demos/demo-real-estate.js"></script>

<!-- Theme Initialization Files -->
<script src="<?= base_url('') ; ?>js/theme.init.js"></script>
<!-- Theme Initialization Files -->
<script src="<?= base_url('') ; ?>js/theme.init.js"></script>
<script defer src="../../../../static.cloudflareinsights.com/beacon.min.js"
    data-cf-beacon='{"rayId":"699d277a9ee30da4","version":"2021.9.0","r":1,"token":"03fa3b9eb60b49789931c4694c153f9b","si":100}'></script>
<!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
<script>
 
  gsap.registerPlugin(TextPlugin);

  const texts = [
    "Luxury Interior Design",
    "Elegant Living Spaces",
    "Timeless Aesthetics"
  ];

  let index = 0;

  function typeLoop() {
    // Type text
    gsap.to(".typing-text", {
      duration: 2,
      text: texts[index],
      ease: "none",
      onComplete: () => {
        
        // Pause after typing
        setTimeout(() => {

          // Delete text
          gsap.to(".typing-text", {
            duration: 1,
            text: "",
            ease: "none",
            onComplete: () => {
              index = (index + 1) % texts.length;
              typeLoop(); // loop again
            }
          });

        }, 1200);

      }
    });
  }

  typeLoop();
 











    $(document).ready(function () {
        const $slider = $('.luxury-slider');
        const $slides = $('.slide');
        const $dotsContainer = $('.slider-dots');
        let currentSlide = 0;
        let autoPlayTimer;
        const delay = 6000; // 6 seconds per slide

        // Generate dots
        $slides.each(function (i) {
            $dotsContainer.append(`<div class="dot${i === 0 ? ' active' : ''}" data-index="${i}"></div>`);
        });
        const $dots = $('.dot');

        // Navigation logic
        function goToSlide(index) {
            if (index < 0) index = $slides.length - 1;
            if (index >= $slides.length) index = 0;

            $slides.removeClass('active');
            $slides.eq(index).addClass('active');

            $dots.removeClass('active');
            $dots.eq(index).addClass('active');

            currentSlide = index;
        }

        function nextSlide() { goToSlide(currentSlide + 1); }
        function prevSlide() { goToSlide(currentSlide - 1); }

        // Auto-play
        function startAutoPlay() {
            stopAutoPlay();
            autoPlayTimer = setInterval(nextSlide, delay);
        }

        function stopAutoPlay() { clearInterval(autoPlayTimer); }

        // Event Listeners
        $('.nav-btn.next').on('click', () => { nextSlide(); startAutoPlay(); });
        $('.nav-btn.prev').on('click', () => { prevSlide(); startAutoPlay(); });
        $dots.on('click', function () { goToSlide($(this).data('index')); startAutoPlay(); });

        // Keyboard navigation
        $(document).on('keydown', (e) => {
            if (e.key === 'ArrowRight') { nextSlide(); startAutoPlay(); }
            if (e.key === 'ArrowLeft') { prevSlide(); startAutoPlay(); }
        });

        // Pause on hover / touch
        $slider.on('mouseenter', stopAutoPlay).on('mouseleave', startAutoPlay);

        // Basic swipe support
        let touchStartX = 0;
        $slider.on('touchstart', e => {
            touchStartX = e.originalEvent.changedTouches[0].screenX;
            stopAutoPlay();
        });

        $slider.on('touchend', e => {
            const touchEndX = e.originalEvent.changedTouches[0].screenX;
            const diff = touchStartX - touchEndX;
            if (Math.abs(diff) > 50) diff > 0 ? nextSlide() : prevSlide();
            startAutoPlay();
        });

        // Initialize
        startAutoPlay();
    });

    $(document).ready(function () {
        // ─── Scroll Reveal Animation ───
        const revealElements = document.querySelectorAll('.reveal');

        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const delay = parseInt(entry.target.getAttribute('data-delay')) || 0;
                    setTimeout(() => {
                        entry.target.classList.add('is-visible');

                        // Animate counters if it's a stat number
                        const counters = entry.target.querySelectorAll('.stat-number');
                        counters.forEach(counter => {
                            animateCounter(counter);
                        });
                    }, delay);

                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15, rootMargin: '0px 0px -50px 0px' });

        revealElements.forEach(el => revealObserver.observe(el));

        // ─── Counter Animation ───
        function animateCounter(el) {
            const target = parseInt(el.getAttribute('data-count'));
            const duration = 1500;
            const step = target / (duration / 16);
            let current = 0;

            const update = () => {
                current += step;
                if (current >= target) {
                    el.textContent = target;
                    return;
                }
                el.textContent = Math.floor(current);
                requestAnimationFrame(update);
            };
            requestAnimationFrame(update);
        }
    });




















    $(function () {
        const $nav = $(".glass-nav");
        const $toggle = $(".menu-toggle");
        const $collapse = $("#mainNav");
        const $slides = $(".slide-item");
        const $dots = $(".slider-dot");
        const $next = $(".slider-next");
        const $prev = $(".slider-prev");
        const $testimonials = $(".testimonial-card");
        const $testimonialDots = $(".testimonial-dot");
        const $testimonialNext = $(".testimonial-next");
        const $testimonialPrev = $(".testimonial-prev");
        const $revealItems = $(".reveal-on-scroll, .reveal-delay-1, .reveal-delay-2, .reveal-delay-3");
        let currentSlide = 0;
        let sliderTimer;
        let currentTestimonial = 0;
        let testimonialTimer;

        function syncNavbarState() {
            $nav.toggleClass("scrolled", $(window).scrollTop() > 20);
        }

        function handleReveal() {
            const triggerBottom = $(window).scrollTop() + $(window).height() * 0.88;

            $revealItems.each(function () {
                const $item = $(this);

                if ($item.offset().top < triggerBottom) {
                    $item.addClass("is-visible");
                }
            });
        }

        function showSlide(index) {
            currentSlide = (index + $slides.length) % $slides.length;
            $slides.removeClass("is-active").eq(currentSlide).addClass("is-active");
            $dots.removeClass("is-active").eq(currentSlide).addClass("is-active");
        }

        function startSlider() {
            clearInterval(sliderTimer);
            sliderTimer = setInterval(function () {
                showSlide(currentSlide + 1);
            }, 4200);
        }

        function showTestimonial(index) {
            currentTestimonial = (index + $testimonials.length) % $testimonials.length;
            $testimonials.removeClass("is-active").eq(currentTestimonial).addClass("is-active");
            $testimonialDots.removeClass("is-active").eq(currentTestimonial).addClass("is-active");
        }

        function startTestimonialSlider() {
            clearInterval(testimonialTimer);
            testimonialTimer = setInterval(function () {
                showTestimonial(currentTestimonial + 1);
            }, 5200);
        }

        $toggle.on("click", function () {
            $(this).toggleClass("is-open");
        });

        $collapse.on("hidden.bs.collapse shown.bs.collapse", function () {
            $toggle.toggleClass("is-open", $collapse.hasClass("show"));
        });

        $next.on("click", function () {
            showSlide(currentSlide + 1);
            startSlider();
        });

        $prev.on("click", function () {
            showSlide(currentSlide - 1);
            startSlider();
        });

        $dots.on("click", function () {
            showSlide(Number($(this).data("slide")));
            startSlider();
        });

        $(".banner-slider").on("mouseenter", function () {
            clearInterval(sliderTimer);
        }).on("mouseleave", function () {
            startSlider();
        });

        $testimonialNext.on("click", function () {
            showTestimonial(currentTestimonial + 1);
            startTestimonialSlider();
        });

        $testimonialPrev.on("click", function () {
            showTestimonial(currentTestimonial - 1);
            startTestimonialSlider();
        });

        $testimonialDots.on("click", function () {
            showTestimonial(Number($(this).data("testimonial")));
            startTestimonialSlider();
        });

        $(".testimonial-slider").on("mouseenter", function () {
            clearInterval(testimonialTimer);
        }).on("mouseleave", function () {
            startTestimonialSlider();
        });

        $(window).on("scroll", function () {
            syncNavbarState();
            handleReveal();
        });

        syncNavbarState();
        handleReveal();
        showSlide(0);
        startSlider();
        showTestimonial(0);
        startTestimonialSlider();
    });



    $(document).ready(function () {
        // Testimonial Slider
        const $slider = $('#testimonialSlider');
        const $slides = $('.testimonial-slide');
        const $dotsContainer = $('.tl-dots');
        let currentSlide = 0;
        let autoPlayTimer;
        const delay = 7000; // 7 seconds

        // Generate dots
        $slides.each(function (i) {
            $dotsContainer.append(`<button class="tl-dot${i === 0 ? ' active' : ''}" data-index="${i}" aria-label="Go to testimonial ${i + 1}"></button>`);
        });
        const $dots = $('.tl-dot');

        // Navigation functions
        function goToSlide(index) {
            if (index < 0) index = $slides.length - 1;
            if (index >= $slides.length) index = 0;

            $slides.removeClass('active');
            $slides.eq(index).addClass('active');

            $dots.removeClass('active');
            $dots.eq(index).addClass('active');

            currentSlide = index;
        }

        function nextSlide() { goToSlide(currentSlide + 1); }
        function prevSlide() { goToSlide(currentSlide - 1); }

        // Auto-play
        function startAutoPlay() {
            stopAutoPlay();
            autoPlayTimer = setInterval(nextSlide, delay);
        }

        function stopAutoPlay() { clearInterval(autoPlayTimer); }

        // Event listeners
        $('.tl-next').on('click', function () {
            nextSlide();
            startAutoPlay();
        });

        $('.tl-prev').on('click', function () {
            prevSlide();
            startAutoPlay();
        });

        $dots.on('click', function () {
            const index = $(this).data('index');
            goToSlide(index);
            startAutoPlay();
        });

        // Keyboard navigation
        $(document).on('keydown', function (e) {
            if (e.key === 'ArrowRight') { nextSlide(); startAutoPlay(); }
            if (e.key === 'ArrowLeft') { prevSlide(); startAutoPlay(); }
        });

        // Pause on hover
        $('.testimonial-slider-wrapper').on('mouseenter', stopAutoPlay).on('mouseleave', startAutoPlay);

        // Touch/swipe support
        let touchStartX = 0;
        let touchEndX = 0;

        $slider.on('touchstart', function (e) {
            touchStartX = e.originalEvent.changedTouches[0].screenX;
            stopAutoPlay();
        });

        $slider.on('touchend', function (e) {
            touchEndX = e.originalEvent.changedTouches[0].screenX;
            const diff = touchStartX - touchEndX;
            if (Math.abs(diff) > 50) {
                if (diff > 0) {
                    nextSlide();
                } else {
                    prevSlide();
                }
            }
            startAutoPlay();
        });

        // Initialize
        startAutoPlay();
    });



</script>

<script>
   $(document).ready(function () {

      // ==========================================
      // PRELOADER
      // ==========================================
      $(window).on('load', function () {
         setTimeout(function () {
            $('#preloader').addClass('loaded');
            animateHero();
         }, 1500);
      });

      // Fallback: if load event already fired
      if (document.readyState === 'complete') {
         setTimeout(function () {
            $('#preloader').addClass('loaded');
            animateHero();
         }, 1500);
      }

      // ==========================================
      // HERO ANIMATION
      // ==========================================
      function animateHero() {
         $('.hero-subtitle').css({
            'opacity': '1',
            'transform': 'translateY(0)',
            'transition': 'all 0.1s ease 0.2s'
         });
         $('.hero-title').css({
            'opacity': '1',
            'transform': 'translateY(0)',
            'transition': 'all 0.4s ease 0.3s'
         });
         $('.hero-divider').css({
            'opacity': '1',
            'transform': 'scaleX(1)',
            'transition': 'all 0.4s ease 0.4s'
         });
         $('.hero-description').css({
            'opacity': '1',
            'transform': 'translateY(0)',
            'transition': 'all 0.4s ease 0.5s'
         });
      }

      // ==========================================
      // NAVBAR SCROLL EFFECT
      // ==========================================
      $(window).on('scroll', function () {
         var scroll = $(window).scrollTop();

         if (scroll > 80) {
            $('#mainNav').addClass('scrolled');
         } else {
            $('#mainNav').removeClass('scrolled');
         }
      });

      // ==========================================
      // REVEAL ON SCROLL
      // ==========================================
      function revealOnScroll() {
         var windowHeight = $(window).height();
         var scrollTop = $(window).scrollTop();

         $('.reveal, .reveal-left, .reveal-right, .reveal-scale').each(function () {
            var elementTop = $(this).offset().top;
            var revealPoint = 120;

            if (scrollTop + windowHeight - revealPoint > elementTop) {
               $(this).addClass('active');
            }
         });
      }

      $(window).on('scroll', revealOnScroll);
      revealOnScroll(); // Initial check

      // ==========================================
      // COUNTER ANIMATION
      // ==========================================
  
      // ==========================================
      // PARALLAX EFFECT
      // ==========================================
      $(window).on('scroll', function () {
         var scrolled = $(window).scrollTop();
         var parallaxImg = $('#parallaxImg');

         if (parallaxImg.length) {
            var parentTop = parallaxImg.parent().offset().top;
            var parentHeight = parallaxImg.parent().outerHeight();

            if (scrolled + $(window).height() > parentTop && scrolled < parentTop + parentHeight) {
               var yPos = (scrolled - parentTop) * 0.3;
               parallaxImg.css('transform', 'translateY(' + yPos + 'px)');
            }
         }
      });

      // ==========================================
      // SMOOTH SCROLL FOR ANCHOR LINKS
      // ==========================================
      $('a[href^="#"]').on('click', function (e) {
         e.preventDefault();
         var target = $(this.getAttribute('href'));
         if (target.length) {
            $('html, body').animate({
               scrollTop: target.offset().top - 80
            }, 800, 'swing');
         }
      });

      // ==========================================
      // MOBILE MENU TOGGLE
      // ==========================================
      $('#mobileToggle').on('click', function () {
         $(this).toggleClass('active');
         // You can add a mobile menu overlay here
      });

      // ==========================================
      // MAGNETIC BUTTON EFFECT
      // ==========================================
      $('.btn-luxury').on('mousemove', function (e) {
         var rect = this.getBoundingClientRect();
         var x = e.clientX - rect.left - rect.width / 2;
         var y = e.clientY - rect.top - rect.height / 2;

         $(this).css('transform', 'translate(' + (x * 0.15) + 'px, ' + (y * 0.15) + 'px)');
      }).on('mouseleave', function () {
         $(this).css('transform', 'translate(0, 0)');
      });

      // ==========================================
      // CURSOR GLOW EFFECT (Desktop Only)
      // ==========================================
      if (window.innerWidth > 991) {
         var $cursor = $('<div class="cursor-glow"></div>').css({
            'position': 'fixed',
            'width': '300px',
            'height': '300px',
            'borderRadius': '50%',
            'background': 'radial-gradient(circle, rgba(198,169,108,0.06) 0%, transparent 70%)',
            'pointer-events': 'none',
            'z-index': '9998',
            'transform': 'translate(-50%, -50%)',
            'transition': 'opacity 0.3s ease'
         });

         $('body').append($cursor);

         $(document).on('mousemove', function (e) {
            $cursor.css({
               'left': e.clientX + 'px',
               'top': e.clientY + 'px'
            });
         });
      }

   });
</script> 




</body>

</html>