<!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #ffffff;
            overflow-x: hidden;
        }

        /* ===== MAIN HEADER ===== */
        .main-header {
            background: #ffffff;
            border-bottom: 1px solid #e5e7eb;
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .main-header.scrolled {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
        }

        .header-container {
            max-width: 1440px;
            margin: 0 auto;
            padding: 0 2rem;
            height: 72px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* ===== LOGO SECTION ===== */
        .logo-section {
            display: flex;
            align-items: center;
            gap: 3rem;
        }

        .brand-logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
            transition: opacity 0.2s;
        }

        .brand-logo:hover {
            opacity: 0.8;
        }

        .logo-icon {
            width: 36px;
            height: 36px;
            background: linear-gradient(135deg, #1F51FF 0%, #FFAC1C 100%);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.25rem;
            font-weight: 700;
        }

        .logo-text {
            font-size: 1.5rem;
            font-weight: 700;
            color: #111827;
            letter-spacing: -0.025em;
        }

        /* ===== NAVIGATION MENU ===== */
        .main-navigation {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 0.25rem;
            margin: 0;
            padding: 0;
        }

        .nav-item {
            position: relative;
        }

        .nav-item-products {
            position: static;
        }

        .nav-link {
            display: flex;
            align-items: center;
            gap: 0.25rem;
            padding: 0.625rem 1rem;
            color: #374151;
            text-decoration: none;
            font-size: 0.9375rem;
            font-weight: 500;
            border-radius: 0.5rem;
            transition: all 0.2s ease;
            background: transparent;
            border: none;
            cursor: pointer;
        }

        .nav-link:hover {
            color: #111827;
            background-color: #f3f4f6;
        }

        .nav-link.active {
            color: #111827;
            background-color: #f3f4f6;
        }

        .nav-link i.fa-chevron-down {
            font-size: 0.625rem;
            transition: transform 0.2s ease;
            color: #6b7280;
        }

        .nav-item:hover .nav-link i.fa-chevron-down {
            transform: rotate(180deg);
        }

        /* ===== DROPDOWN MENU ===== */
        .dropdown-menu-custom {
            position: absolute;
            top: calc(100% + 0.5rem);
            left: 0;
            min-width: 280px;
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 0.75rem;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            padding: 0.5rem;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-0.5rem);
            transition: all 0.2s ease;
            z-index: 1000;
        }

        .nav-item:hover .dropdown-menu-custom {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .dropdown-item-custom {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            padding: 0.75rem 1rem;
            color: #374151;
            text-decoration: none;
            border-radius: 0.5rem;
            transition: all 0.2s ease;
        }

        .dropdown-item-custom:hover {
            background-color: #f9fafb;
            color: #111827;
        }

        .dropdown-icon {
            width: 40px;
            height: 40px;
            background: #f3f4f6;
            border-radius: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #1F51FF;
            font-size: 1.125rem;
            flex-shrink: 0;
        }

        .dropdown-item-custom:hover .dropdown-icon {
            background: #1F51FF;
            color: #ffffff;
        }

        .dropdown-content h4 {
            font-size: 0.9375rem;
            font-weight: 600;
            color: #111827;
            margin: 0 0 0.25rem 0;
        }

        .dropdown-content p {
            font-size: 0.8125rem;
            color: #6b7280;
            margin: 0;
            line-height: 1.4;
        }

        .dropdown-divider {
            height: 1px;
            background: #e5e7eb;
            margin: 0.5rem 0;
        }

        .dropdown-header-custom {
            padding: 0.5rem 1rem;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #9ca3af;
        }

        /* ===== HEADER ACTIONS ===== */
        .header-actions {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .btn-header {
            padding: 0.625rem 1.25rem;
            font-size: 0.9375rem;
            font-weight: 600;
            border-radius: 0.5rem;
            text-decoration: none;
            transition: all 0.2s ease;
            border: none;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-ghost {
            color: #374151;
            background: transparent;
        }

        .btn-ghost:hover {
            color: #111827;
            background-color: #f3f4f6;
        }

        .btn-primary-custom {
            color: #ffffff;
            background: linear-gradient(135deg, #1F51FF 0%, #FFAC1C 100%);
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        }

        .btn-primary-custom:hover {
            background: linear-gradient(135deg, #FFAC1C 0%, #047857 100%);
            box-shadow: 0 4px 6px -1px rgba(16, 185, 129, 0.2), 0 2px 4px -1px rgba(16, 185, 129, 0.1);
            transform: translateY(-1px);
            color: #ffffff;
        }

        /* ===== MOBILE MENU TOGGLE ===== */
        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            padding: 0.5rem;
            cursor: pointer;
            color: #374151;
        }

        .mobile-menu-toggle span {
            display: block;
            width: 24px;
            height: 2px;
            background: currentColor;
            margin: 5px 0;
            transition: all 0.3s ease;
        }

        /* ===== MOBILE OFFCANVAS MENU ===== */
        .mobile-offcanvas {
            position: fixed;
            top: 0;
            right: -100%;
            width: 320px;
            height: 100vh;
            background: #ffffff;
            box-shadow: -4px 0 12px rgba(0, 0, 0, 0.1);
            z-index: 10000;
            transition: right 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .mobile-offcanvas.active {
            right: 0;
        }

        .mobile-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 9999;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .mobile-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .mobile-header {
            padding: 1.5rem;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .mobile-close-btn {
            background: none;
            border: none;
            font-size: 1.5rem;
            color: #6b7280;
            cursor: pointer;
            width: 40px;
            height: 40px;
            border-radius: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s;
        }

        .mobile-close-btn:hover {
            background: #f3f4f6;
            color: #111827;
        }

        .mobile-nav-content {
            padding: 1.5rem;
            overflow-y: auto;
            flex: 1;
        }

        .mobile-nav-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .mobile-nav-item {
            margin-bottom: 0.5rem;
        }

        .mobile-nav-link {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0.875rem 1rem;
            color: #374151;
            text-decoration: none;
            font-size: 1rem;
            font-weight: 500;
            border-radius: 0.5rem;
            transition: all 0.2s;
            background: none;
            border: none;
            width: 100%;
            cursor: pointer;
        }

        .mobile-nav-link:hover {
            background: #f3f4f6;
            color: #111827;
        }

        .mobile-dropdown {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            padding-left: 1rem;
        }

        .mobile-dropdown.show {
            max-height: 500px;
        }

        .mobile-dropdown .mobile-nav-link {
            padding: 0.75rem 1rem;
            font-size: 0.9375rem;
        }

        .mobile-cta-section {
            padding: 1.5rem;
            border-top: 1px solid #e5e7eb;
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        /* ===== RESPONSIVE DESIGN ===== */
        @media (max-width: 1024px) {
            .header-container {
                padding: 0 1.5rem;
            }

            .main-navigation {
                display: none;
            }

            .mobile-menu-toggle {
                display: block;
            }

            .header-actions .btn-ghost {
                display: none;
            }
        }

        @media (max-width: 640px) {
            .header-container {
                padding: 0 1rem;
                height: 64px;
            }

            .logo-section {
                gap: 1.5rem;
            }

            .logo-text {
                font-size: 1.25rem;
            }

            .header-actions .btn-primary-custom {
                padding: 0.5rem 1rem;
                font-size: 0.875rem;
            }
        }

        /* Demo Content Styling */
        .demo-section {
            padding: 4rem 2rem;
            text-align: center;
            background: #f9fafb;
            min-height: 100vh;
        }

        .demo-section h1 {
            font-size: 2.5rem;
            font-weight: 800;
            color: #111827;
            margin-bottom: 1rem;
        }

        .demo-section p {
            font-size: 1.125rem;
            color: #6b7280;
            max-width: 600px;
            margin: 0 auto 2rem;
        }
/* Megamenu Styles */
.megamenu {
    position: absolute;
    top: 100%;
    left: 50%;
    right: auto;
    width: min(1100px, calc(100% - 3rem));
    transform: translateX(-50%) translateY(10px);
    background: #ffffff;
    border: 1px solid #e5e7eb;
    border-radius: 12px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    padding: 1rem;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
    z-index: 1000;
    margin-top: 0.5rem;
    overflow: hidden;
}

.nav-item:hover .megamenu {
    opacity: 1;
    visibility: visible;
    transform: translateX(-50%) translateY(0);
}

.megamenu .container {
    max-width: none;
    padding: 0;
}

.megamenu-content {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
    background: #ffffff;
    border-radius: 10px;
    padding: 1rem;
}

.megamenu-column {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.megamenu-title {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    color: #9ca3af;
    margin-bottom: 0.5rem;
    padding: 0 1rem;
}

.megamenu-item {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    padding: 0.75rem 1rem;
    color: #374151;
    text-decoration: none;
    border-radius: 8px;
    transition: all 0.2s ease;
}

.megamenu-item:hover {
    background: #f9fafb;
    color: #111827;
}

.megamenu-icon {
    width: 40px;
    height: 40px;
    background: #f3f4f6;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #1F51FF;
    font-size: 1.125rem;
    flex-shrink: 0;
    transition: all 0.2s;
}

.megamenu-item:hover .megamenu-icon {
    background: #1F51FF;
    color: #ffffff;
}

.megamenu-text h5 {
    font-size: 0.9375rem;
    font-weight: 600;
    color: #111827;
    margin: 0 0 0.25rem 0;
}

.megamenu-text p {
    font-size: 0.8125rem;
    color: #6b7280;
    margin: 0;
    line-height: 1.4;
}

/* Featured Column */
.megamenu-featured {
    background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
    border-radius: 12px;
    padding: 1.5rem;
    display: flex;
    align-items: center;
}

.megamenu-featured-content h4 {
    font-size: 0.875rem;
    color: #1F51FF;
    font-weight: 700;
    margin: 0 0 0.5rem 0;
}

.megamenu-featured-content h5 {
    font-size: 1.125rem;
    font-weight: 700;
    color: #111827;
    margin: 0 0 0.5rem 0;
}

.megamenu-featured-content p {
    font-size: 0.875rem;
    color: #374151;
    margin: 0 0 1rem 0;
    line-height: 1.5;
}

/* Responsive Megamenu */
@media (max-width: 1024px) {
    .megamenu {
        position: static;
        width: 100%;
        opacity: 1;
        visibility: visible;
        transform: none;
        box-shadow: none;
        border: none;
        border-top: 1px solid #e5e7eb;
        margin-top: 0;
        padding: 1rem 0;
        display: none;
    }
    
    .megamenu.show {
        display: block;
    }
    
    .megamenu-content {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
    
    .megamenu-column {
        border-bottom: 1px solid #e5e7eb;
        padding-bottom: 1rem;
    }
    
    .megamenu-column:last-child {
        border-bottom: none;
    }
    
    .megamenu-featured {
        display: none;
    }
}

        
        /* Hero Section */
        .hero-section {
            min-height: 100vh;
            padding: 120px 0 80px;
            position: relative;
            background: linear-gradient(180deg, #ffffff 0%, #f9fafb 100%);
            overflow: hidden;
        }

        /* Background Decorative Elements */
        .hero-bg-decoration {
            position: absolute;
            top: 0;
            right: 0;
            width: 50%;
            height: 100%;
            background: radial-gradient(circle at 70% 50%, rgba(16, 185, 129, 0.03) 0%, transparent 50%);
            pointer-events: none;
        }

        .floating-shape {
            position: absolute;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.05), rgba(5, 150, 105, 0.02));
            pointer-events: none;
        }

        .shape-1 {
            width: 400px;
            height: 400px;
            top: -100px;
            right: -100px;
        }

        .shape-2 {
            width: 300px;
            height: 300px;
            bottom: 10%;
            right: 10%;
        }

        /* Main Content */
        .hero-content {
            position: relative;
            z-index: 2;
        }

        /* Typography */
        .hero-title {
            font-size: 4rem;
            font-weight: 800;
            color: var(--text-dark);
            line-height: 1.1;
            margin-bottom: 1.5rem;
            letter-spacing: -0.02em;
        }

        .hero-title .underline-text {
            position: relative;
            display: inline-block;
        }

        .hero-title .underline-text::after {
            content: '';
            position: absolute;
            bottom: 8px;
            left: 0;
            width: 100%;
            height: 12px;
            background: rgba(16, 185, 129, 0.2);
            z-index: -1;
            border-radius: 4px;
        }

        .hero-subtitle {
            font-size: 1.25rem;
            color: var(--text-gray);
            line-height: 1.7;
            margin-bottom: 2.5rem;
            max-width: 540px;
            font-weight: 400;
        }

        /* Email Form */
        .email-form-wrapper {
            background: white;
            padding: 2rem;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.06);
            margin-bottom: 3rem;
            max-width: 540px;
        }

        .email-form {
            display: flex;
            gap: 0.75rem;
        }

        .form-control-custom {
            flex: 1;
            padding: 1rem 1.25rem;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            font-family: 'Inter', sans-serif;
        }

        .form-control-custom:focus {
            outline: none;
            border-color: var(--primary-green);
            box-shadow: 0 0 0 4px rgba(16, 185, 129, 0.1);
        }

        .form-control-custom::placeholder {
            color: #9ca3af;
        }

        .btn-book-demo {
            padding: 1rem 2rem;
            background: var(--primary-green);
            color: white;
            border: none;
            border-radius: 12px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            white-space: nowrap;
            font-family: 'Inter', sans-serif;
        }

        .btn-book-demo:hover {
            background: var(--primary-green-hover);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(16, 185, 129, 0.3);
        }

        .btn-book-demo:active {
            transform: translateY(0);
        }

        /* Statistics Section */
        .stats-container {
            display: flex;
            gap: 3rem;
            margin-bottom: 2.5rem;
            padding-bottom: 2.5rem;
            border-bottom: 1px solid #e5e7eb;
        }

        .stat-item {
            display: flex;
            flex-direction: column;
        }

        .stat-value {
            font-size: 2rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 0.9375rem;
            color: var(--text-gray);
            font-weight: 500;
        }

        .stat-divider {
            width: 1px;
            background: #e5e7eb;
            margin: 0 1rem;
        }

        /* Rating Section */
        .rating-container {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .stars-wrapper {
            display: flex;
            gap: 0.25rem;
        }

        .star {
            color: var(--text-dark);
            font-size: 1.25rem;
        }

        .star.filled {
            color: var(--text-dark);
        }

        .star.half {
            position: relative;
            color: #e5e7eb;
        }

        .star.half::before {
            content: '★';
            position: absolute;
            left: 0;
            top: 0;
            width: 50%;
            overflow: hidden;
            color: var(--text-dark);
        }

        .rating-text {
            font-size: 0.9375rem;
            color: var(--text-gray);
            font-weight: 500;
        }

        .rating-number {
            font-weight: 600;
            color: var(--text-dark);
            margin-right: 0.25rem;
        }

        /* Illustration Section */
        .illustration-wrapper {
            position: relative;
            height: 100%;
            min-height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .isometric-illustration {
            width: 100%;
            max-width: 650px;
            height: auto;
            position: relative;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px) rotateY(-15deg) rotateX(5deg);
            }
            50% {
                transform: translateY(-20px) rotateY(-15deg) rotateX(5deg);
            }
        }

        /* SVG Illustration Styles */
        .illustration-svg {
            width: 100%;
            height: auto;
            filter: drop-shadow(0 20px 40px rgba(0, 0, 0, 0.08));
        }

        /* Floating Cards Animation */
        .floating-card {
            animation: floatCard 8s ease-in-out infinite;
        }

        .floating-card:nth-child(2) {
            animation-delay: 1s;
        }

        .floating-card:nth-child(3) {
            animation-delay: 2s;
        }

        @keyframes floatCard {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            33% {
                transform: translateY(-15px) rotate(2deg);
            }
            66% {
                transform: translateY(-8px) rotate(-2deg);
            }
        }

        /* Responsive Design */
        @media (max-width: 991px) {
            .hero-title {
                font-size: 3rem;
            }

            .illustration-wrapper {
                margin-top: 4rem;
                min-height: 400px;
            }

            .isometric-illustration {
                max-width: 500px;
            }
        }

        @media (max-width: 768px) {
            .hero-section {
                padding: 100px 0 60px;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.125rem;
            }

            .email-form-wrapper {
                padding: 1.5rem;
            }

            .email-form {
                flex-direction: column;
            }

            .btn-book-demo {
                width: 100%;
            }

            .stats-container {
                flex-direction: column;
                gap: 1.5rem;
            }

            .stat-divider {
                width: 100%;
                height: 1px;
                margin: 0.5rem 0;
            }

            .isometric-illustration {
                max-width: 400px;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 2rem;
            }

            .stat-value {
                font-size: 1.5rem;
            }

            .email-form-wrapper {
                padding: 1.25rem;
            }
        }

        /* Scroll Animation Classes */
        .fade-up {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .fade-up.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .delay-100 {
            transition-delay: 0.1s;
        }

        .delay-200 {
            transition-delay: 0.2s;
        }

        .delay-300 {
            transition-delay: 0.3s;
        }

        .delay-400 {
            transition-delay: 0.4s;
        }

.service-slider-section {
  padding: 100px 0;
  background: #fff;
  overflow: hidden; /* Prevents horizontal scroll during animation */
}

/* LEFT-TO-RIGHT SCROLL TRIGGER */
.scroll-animate {
  opacity: 0;
  transform: translateX(-120px);
  transition: opacity 0.9s cubic-bezier(0.22, 1, 0.36, 1),
              transform 0.9s cubic-bezier(0.22, 1, 0.36, 1);
  will-change: transform, opacity;
}

.scroll-animate.is-visible {
  opacity: 1;
  transform: translateX(0);
}

/* Stagger: Slider appears first, content follows */
.service-slider-wrapper { transition-delay: 0.1s; }
.service-content-wrapper { transition-delay: 0.3s; }

/* Carousel & Controls (keep as before) */
.service-carousel { position: relative; border-radius: 16px; overflow: hidden; height: 450px; box-shadow: 0 20px 40px rgba(0,0,0,0.08); }
.service-slide { position: absolute; inset: 0; opacity: 0; transition: opacity 0.6s ease; }
.service-slide.active { opacity: 1; }
.service-slide img { width: 100%; height: 100%; object-fit: cover; }
.slider-prev, .slider-next { position: absolute; top: 50%; transform: translateY(-50%); width: 48px; height: 48px; background: #fff; border: none; border-radius: 50%; cursor: pointer; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 12px rgba(0,0,0,0.15); transition: 0.3s; z-index: 10; }
.slider-prev:hover, .slider-next:hover { background: #1F51FF; color: #fff; transform: translateY(-50%) scale(1.05); }
.slider-prev { left: 16px; } .slider-next { right: 16px; }
.slider-dots { display: flex; justify-content: center; gap: 8px; margin-top: 16px; }
.slider-dot { width: 8px; height: 8px; border-radius: 50%; background: #d1d5db; cursor: pointer; transition: 0.3s; }
.slider-dot.active { background: #1F51FF; width: 28px; border-radius: 4px; }

/* Content Styling (keep as before) */
.service-tag { display: inline-block; background: rgba(16,185,129,0.1); color: #1F51FF; font-size: 0.875rem; font-weight: 600; padding: 6px 16px; border-radius: 20px; margin-bottom: 1rem; }
.service-title { font-size: 2.5rem; font-weight: 800; color: #111827; margin-bottom: 1rem; line-height: 1.2; }
.service-desc { font-size: 1.125rem; color: #6b7280; line-height: 1.7; margin-bottom: 1.5rem; }
.service-list { list-style: none; padding: 0; margin: 0 0 2rem 0; }
.service-list li { display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem; color: #374151; font-weight: 500; }
.service-list li i { color: #1F51FF; }
.btn-explore { display: inline-flex; align-items: center; gap: 0.5rem; padding: 14px 28px; background: #1F51FF; color: #fff; font-weight: 600; border-radius: 10px; text-decoration: none; transition: 0.3s; }
.btn-explore:hover { background: #FFAC1C; transform: translateY(-2px); box-shadow: 0 8px 20px rgba(16,185,129,0.3); color: #fff; }
.btn-explore i { transition: transform 0.3s; }
.btn-explore:hover i { transform: translateX(4px); }

@media (max-width: 991px) {
  .service-carousel { height: 320px; margin-bottom: 2rem; }
  .service-title { font-size: 2rem; }
  .scroll-animate { transform: translateX(-60px); }
}
     /* AI Co-Pilots Section */
.ai-copilots-section {
  /* padding: 120px 0; */
  background: linear-gradient(180deg, #ffffff 0%, #f9fafb 100%);
  overflow: hidden;
}

/* Section Header */
.section-header {
  max-width: 700px;
  margin: 0 auto 4rem;
}

.section-tag {
  display: inline-block;
  background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(5, 150, 105, 0.1));
  color: #1F51FF;
  font-size: 0.875rem;
  font-weight: 700;
  padding: 8px 20px;
  border-radius: 30px;
  margin-bottom: 1rem;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.section-title {
  font-size: 3rem;
  font-weight: 800;
  color: #111827;
  margin-bottom: 1rem;
  line-height: 1.2;
  letter-spacing: -0.02em;
}

.section-subtitle {
  font-size: 1.25rem;
  color: #6b7280;
  line-height: 1.7;
  margin: 0;
}

/* Scroll Animation */
.scroll-animate {
  opacity: 0;
  transform: translateY(40px);
  transition: all 0.8s cubic-bezier(0.22, 1, 0.36, 1);
}

.scroll-animate.is-visible {
  opacity: 1;
  transform: translateY(0);
}

/* Stagger delays for cards */
.scroll-animate:nth-child(1) { transition-delay: 0.1s; }
.scroll-animate:nth-child(2) { transition-delay: 0.2s; }
.scroll-animate:nth-child(3) { transition-delay: 0.3s; }
.scroll-animate:nth-child(4) { transition-delay: 0.4s; }
.scroll-animate:nth-child(5) { transition-delay: 0.5s; }
.scroll-animate:nth-child(6) { transition-delay: 0.6s; }

/* AI Card */
.ai-card {
  background: #ffffff;
  border: 1px solid #e5e7eb;
  border-radius: 20px;
  padding: 2.5rem;
  height: 100%;
  transition: all 0.4s cubic-bezier(0.22, 1, 0.36, 1);
  position: relative;
  overflow: hidden;
}

.ai-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: linear-gradient(90deg, #1F51FF, #FFAC1C);
  transform: scaleX(0);
  transition: transform 0.4s ease;
}

.ai-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
  border-color: transparent;
}

.ai-card:hover::before {
  transform: scaleX(1);
}

/* Icon Wrapper */
.ai-icon-wrapper {
  margin-bottom: 1.5rem;
}

.ai-icon {
  width: 70px;
  height: 70px;
  background: linear-gradient(135deg, rgba(16, 185, 129, 0.1), rgba(5, 150, 105, 0.1));
  border-radius: 16px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 2rem;
  color: #1F51FF;
  transition: all 0.3s ease;
}

.ai-card:hover .ai-icon {
  background: linear-gradient(135deg, #1F51FF, #FFAC1C);
  color: #ffffff;
  transform: scale(1.1) rotate(5deg);
}

/* Card Content */
.ai-card-title {
  font-size: 1.5rem;
  font-weight: 700;
  color: #111827;
  margin-bottom: 1rem;
  line-height: 1.3;
}

.ai-card-desc {
  font-size: 1rem;
  color: #6b7280;
  line-height: 1.6;
  margin-bottom: 1.5rem;
}

/* Features List */
.ai-features {
  list-style: none;
  padding: 0;
  margin: 0;
}

.ai-features li {
  display: flex;
  align-items: center;
  gap: 0.75rem;
  margin-bottom: 0.75rem;
  font-size: 0.9375rem;
  color: #374151;
  font-weight: 500;
}

.ai-features li i {
  color: #1F51FF;
  font-size: 0.875rem;
  width: 20px;
  height: 20px;
  background: rgba(16, 185, 129, 0.1);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* Responsive */
@media (max-width: 991px) {
  .ai-copilots-section { padding: 30px 0; }
  .section-title { font-size: 2.25rem; }
  .section-subtitle { font-size: 1.125rem; }
  .ai-card { padding: 2rem; }
}

@media (max-width: 576px) {
  .section-title { font-size: 2rem; }
  .ai-card { padding: 1.75rem; }
  .ai-card-title { font-size: 1.25rem; }
}   


/* Tablet */
@media (max-width: 992px) {
  .logo img {
    width: 140px;
  }
  .logo-2 img {
    width: 160px;
  }
}

/* Mobile */
@media (max-width: 576px) {
  .logo img {
    width: 110px;
  }
  .logo-2 img {
    width: 170px;
  }
}
.logo img {
  width: 100%;
  max-width:200px;
  height: auto;
  object-fit: contain;
}

:root {
      --bg-section: #f8fafc;
      --bg-card: #ffffff;
      --text-primary: #0f172a;
      --text-secondary: #475569;
      --accent: #2563eb;
      --accent-hover: #1d4ed8;
      --border: #e2e8f0;
      --shadow-sm: 0 4px 12px rgba(0,0,0,0.04);
      --shadow-md: 0 12px 28px rgba(0,0,0,0.08);
      --radius: 20px;
      --card-gap: 4rem;
    }

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      font-family: 'Inter', system-ui, -apple-system, sans-serif;
      background: #ffffff;
      color: var(--text-primary);
      -webkit-font-smoothing: antialiased;
      overflow-x: hidden;
    }

    /* Extended Scroll Container */
    .scroll-section {
      position: relative;
      height: 450vh;
      background: var(--bg-section);
    }

    /* Sticky Viewport */
    .sticky-container {
      position: sticky;
      top: 0;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      overflow: hidden;
      will-change: transform;
    }

    .section-header {
      text-align: center;
      padding: 0 1.5rem 3.5rem;
      max-width: 750px;
      margin: 0 auto;
    }
    .section-header h2 {
      font-size: clamp(2rem, 4vw, 3.2rem);
      font-weight: 800;
      letter-spacing: -0.02em;
      margin-bottom: 1rem;
    }
    .section-header p {
      font-size: 1.15rem;
      color: var(--text-secondary);
      line-height: 1.6;
    }

    /* Track Wrapper (Clips to show exactly 1 card) */
    .track-wrapper {
      width: 100%;
      overflow: hidden;
      padding: 0 14vw; /* Creates side margins so card is centered */
    }

    .scroll-track {
      display: flex;
      gap: var(--card-gap);
      will-change: transform;
      transform: translate3d(0,0,0);
    }

    /* Single Card */
    .feature-card {
      flex: 0 0 auto;
      width: min(900px, 82vw);
      display: flex;
      background: var(--bg-card);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      box-shadow: var(--shadow-sm);
      overflow: hidden;
      transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.4s ease;
    }

    .feature-card:hover {
      transform: translateY(-5px) scale(1.005);
      box-shadow: var(--shadow-md);
    }

    .card-image {
      flex: 0 0 360px;
      background: #f1f5f9;
      overflow: hidden;
    }
    .card-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .feature-card:hover .card-image img { transform: scale(1.04); }

    .card-content {
      flex: 1;
      padding: 2.75rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .card-title {
      font-size: 1.65rem;
      font-weight: 700;
      margin-bottom: 1.25rem;
      line-height: 1.25;
    }

    .feature-list {
      list-style: none;
      padding: 0;
      margin: 0 0 2rem;
      display: flex;
      flex-direction: column;
      gap: 0.85rem;
    }
    .feature-list li {
      display: flex;
      align-items: flex-start;
      gap: 0.75rem;
      font-size: 1.05rem;
      color: var(--text-secondary);
      line-height: 1.5;
    }
    .check-icon {
      flex-shrink: 0;
      width: 22px;
      height: 22px;
      background: #dbeafe;
      color: var(--accent);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.8rem;
      font-weight: 700;
      margin-top: 3px;
    }

    .card-btn {
      align-self: flex-start;
      padding: 0.85rem 1.75rem;
      font-size: 0.95rem;
      font-weight: 600;
      color: #ffffff;
      background: var(--accent);
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: all 0.2s ease;
    }
    .card-btn:hover {
      background: var(--accent-hover);
      transform: translateX(4px);
    }

    /* Responsive */
    @media (max-width: 768px) {
      :root { --card-gap: 2rem; }
      .track-wrapper { padding: 0 5vw; }
      .feature-card { flex-direction: column; width: min(95vw, 520px); }
      .card-image { flex: 0 0 260px; height: auto; }
      .card-content { padding: 2rem; }
      .card-title { font-size: 1.35rem; }
      .feature-list li { font-size: 0.95rem; }
      .scroll-section { height: 350vh; }
    }

   :root {
      --bs-primary: #4f46e5;
      --bs-primary-hover: #4338ca;
      --bg-gradient: linear-gradient(135deg, #f8fafc 0%, #eef2ff 100%);
      --shadow-soft: 0 10px 40px -10px rgba(0, 0, 0, 0.08);
      --shadow-hover: 0 20px 50px -10px rgba(0, 0, 0, 0.12);
      --radius-lg: 16px;
      --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    body { font-family: 'Inter', system-ui, -apple-system, sans-serif; }

    /* Section Base */
    .book-demo-section {
      background: var(--bg-gradient);
      padding: 6rem 0;
      position: relative;
      overflow: hidden;
    }

    /* Entrance Animations */
    .animate-on-scroll {
      opacity: 0;
      transform: translateY(24px);
      transition: opacity 0.8s cubic-bezier(0.2, 0.8, 0.2, 1), transform 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
    }
    .animate-on-scroll.is-visible {
      opacity: 1;
      transform: translateY(0);
    }
    .delay-1 { transition-delay: 0.1s; }
    .delay-2 { transition-delay: 0.2s; }
    .delay-3 { transition-delay: 0.3s; }
    .delay-4 { transition-delay: 0.4s; }

    /* Typography & List */
    .feature-badge {
      background: rgba(79, 70, 229, 0.1);
      color: var(--bs-primary);
      font-weight: 600;
      font-size: 0.85rem;
      padding: 0.35rem 0.85rem;
      border-radius: 100px;
      display: inline-block;
      margin-bottom: 1.25rem;
    }
    .feature-list li {
      font-size: 1.05rem;
      margin-bottom: 0.85rem;
      color: #334155;
      display: flex;
      align-items: center;
    }
    .feature-list i {
      color: var(--bs-primary);
      margin-right: 0.75rem;
      font-size: 1.1rem;
    }

    /* Buttons */
    .btn-demo-primary {
      background: var(--bs-primary);
      border: none;
      color: #fff;
      padding: 0.75rem 1.75rem;
      border-radius: 10px;
      font-weight: 600;
      transition: var(--transition);
    }
    .btn-demo-primary:hover {
      background: var(--bs-primary-hover);
      transform: translateY(-2px);
      box-shadow: 0 8px 16px rgba(79, 70, 229, 0.25);
      color: #fff;
    }

    .btn-demo-secondary {
      background: transparent;
      border: 1px solid #cbd5e1;
      color: #475569;
      padding: 0.75rem 1.5rem;
      border-radius: 10px;
      font-weight: 500;
      transition: var(--transition);
      cursor: pointer;
    }
    .btn-demo-secondary:hover {
      background: #f1f5f9;
      border-color: #94a3b8;
      transform: translateY(-2px);
      color: #334155;
    }

    /* Trust Badges */
    .trust-text { font-size: 0.9rem; color: #64748b; }
    .trust-badge {
      background: #fff;
      border: 1px solid #e2e8f0;
      color: #475569;
      font-size: 0.75rem;
      font-weight: 500;
      padding: 0.3rem 0.6rem;
      border-radius: 6px;
    }

    /* Mockup & Play Overlay */
    .demo-mockup-wrapper {
      background: #ffffff;
      padding: 10px;
      border-radius: var(--radius-lg);
      box-shadow: var(--shadow-soft);
      transition: var(--transition);
      position: relative;
      cursor: pointer;
    }
    .demo-mockup-wrapper:hover {
      transform: translateY(-6px);
      box-shadow: var(--shadow-hover);
    }
    .demo-mockup-wrapper img {
      border-radius: calc(var(--radius-lg) - 4px);
      width: 100%;
      height: auto;
      display: block;
    }

    .play-btn {
      position: absolute;
      top: 50%; left: 50%;
      transform: translate(-50%, -50%);
      width: 64px; height: 64px;
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(4px);
      border: none;
      border-radius: 50%;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
      cursor: pointer;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      display: flex; align-items: center; justify-content: center;
      z-index: 2;
    }
    .play-btn i { color: var(--bs-primary); font-size: 1.5rem; margin-left: 2px; }
    .play-btn:hover { transform: translate(-50%, -50%) scale(1.1); box-shadow: 0 8px 20px rgba(0,0,0,0.2); }

    /* Pulse Ring Animation */
    .play-btn::before {
      content: '';
      position: absolute;
      inset: -8px;
      border-radius: 50%;
      border: 2px solid rgba(79, 70, 229, 0.4);
      animation: pulse-ring 2s infinite ease-out;
    }
    @keyframes pulse-ring {
      0% { transform: scale(0.8); opacity: 1; }
      100% { transform: scale(1.5); opacity: 0; }
    }

    /* Video Modal */
    .video-modal {
      display: none;
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.9);
      z-index: 9999;
      align-items: center;
      justify-content: center;
      padding: 20px;
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    .video-modal.active { 
      display: flex; 
      opacity: 1;
    }
    
    .video-container {
      position: relative;
      width: 100%;
      max-width: 1000px;
      aspect-ratio: 16/9;
      background: #000;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
      transform: scale(0.95);
      transition: transform 0.3s ease;
    }
    
    .video-modal.active .video-container {
      transform: scale(1);
    }
    
    .video-container iframe {
      width: 100%;
      height: 100%;
      border: none;
    }
    
    .video-close {
      position: absolute;
      top: -40px;
      right: 0;
      background: none;
      border: none;
      color: #fff;
      font-size: 2rem;
      cursor: pointer;
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.2s;
      z-index: 10;
    }
    .video-close:hover { transform: rotate(90deg); }

    /* Responsive Tweaks */
    @media (max-width: 991px) {
      .book-demo-section { padding: 4rem 0; }
      .demo-mockup-wrapper { max-width: 85%; margin: 2rem auto 0; }
      .play-btn { width: 52px; height: 52px; }
      .play-btn i { font-size: 1.2rem; }
    }
    
    @media (max-width: 768px) {
      .video-container { aspect-ratio: 16/9; }
      .video-close { top: -35px; font-size: 1.5rem; }
    }



    </style>
</head>
<body>

    <!-- Main Header -->
    <header class="main-header" id="mainHeader">
        <div class="header-container">
            
            <!-- Logo Section -->
            <div class="logo-section">
                <a href="#" class="brand-logo">
                  <div class="logo">  
                   <img src="<?= base_url('website_assets/img/cspl-logo.png') ?>" alt=""> </div>
                </a>

                <!-- Main Navigation -->
                <nav class="main-navigation">
                    <ul class="nav-menu">
                        
                        <!-- Products Dropdown -->
                      <!-- Products Megamenu -->
<li class="nav-item nav-item-products">
    <a href="#" class="nav-link" id="productsMegamenuToggle">
        Products
        <i class="fas fa-chevron-down"></i>
    </a>
    <div class="megamenu" id="productsMegamenu">
        <div class="container">
            <div class="megamenu-content">
                <div class="megamenu-column">
                    <h4 class="megamenu-title">Core Modules</h4>
                    <a href="#" class="megamenu-item">
                        <div class="megamenu-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="megamenu-text">
                            <h5>Financial Management</h5>
                            <p>Accounting, Budgeting & Reporting</p>
                        </div>
                    </a>
                    <a href="#" class="megamenu-item">
                        <div class="megamenu-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="megamenu-text">
                            <h5>Human Resources</h5>
                            <p>Payroll, Attendance & Performance</p>
                        </div>
                    </a>
                    <a href="#" class="megamenu-item">
                        <div class="megamenu-icon">
                            <i class="fas fa-boxes"></i>
                        </div>
                        <div class="megamenu-text">
                            <h5>Inventory</h5>
                            <p>Stock Management & Procurement</p>
                        </div>
                    </a>
                </div>
                
                <div class="megamenu-column">
                    <h4 class="megamenu-title">Advanced Features</h4>
                    <a href="#" class="megamenu-item">
                        <div class="megamenu-icon">
                            <i class="fas fa-industry"></i>
                        </div>
                        <div class="megamenu-text">
                            <h5>Manufacturing</h5>
                            <p>Production Planning & Control</p>
                        </div>
                    </a>
                    <a href="#" class="megamenu-item">
                        <div class="megamenu-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <div class="megamenu-text">
                            <h5>Supply Chain</h5>
                            <p>Logistics & Distribution</p>
                        </div>
                    </a>
                    <a href="#" class="megamenu-item">
                        <div class="megamenu-icon">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <div class="megamenu-text">
                            <h5>Analytics</h5>
                            <p>Business Intelligence & Reports</p>
                        </div>
                    </a>
                </div>
                
                <div class="megamenu-column">
                    <h4 class="megamenu-title">AI & Automation</h4>
                    <a href="#" class="megamenu-item">
                        <div class="megamenu-icon">
                            <i class="fas fa-robot"></i>
                        </div>
                        <div class="megamenu-text">
                            <h5>AI Copilot</h5>
                            <p>Intelligent Insights & Automation</p>
                        </div>
                    </a>
                    <a href="#" class="megamenu-item">
                        <div class="megamenu-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <div class="megamenu-text">
                            <h5>Predictive Analytics</h5>
                            <p>Forecasting & Trend Analysis</p>
                        </div>
                    </a>
                    <a href="#" class="megamenu-item">
                        <div class="megamenu-icon">
                            <i class="fas fa-magic"></i>
                        </div>
                        <div class="megamenu-text">
                            <h5>Workflow Automation</h5>
                            <p>Automate repetitive tasks</p>
                        </div>
                    </a>
                </div>
                
                <!-- <div class="megamenu-column megamenu-featured">
                    <div class="megamenu-featured-content">
                        <h4> New Feature</h4>
                        <h5>AI Copilot is now live!</h5>
                        <p>Get instant insights and automate your workflows with our new AI-powered assistant.</p>
                        <a href="#" class="btn btn-sm btn-primary-custom">Learn More</a>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</li>

                        <!-- Solutions Dropdown -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Solutions
                                <i class="fas fa-chevron-down"></i>
                            </a>
                            <div class="dropdown-menu-custom">
                                <a href="#" class="dropdown-item-custom">
                                    <div class="dropdown-icon">
                                        <i class="fas fa-industry"></i>
                                    </div>
                                    <div class="dropdown-content">
                                        <h4>Manufacturing</h4>
                                        <p>Streamline production workflows</p>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item-custom">
                                    <div class="dropdown-icon">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>
                                    <div class="dropdown-content">
                                        <h4>Retail & Distribution</h4>
                                        <p>Omnichannel inventory management</p>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item-custom">
                                    <div class="dropdown-icon">
                                        <i class="fas fa-briefcase"></i>
                                    </div>
                                    <div class="dropdown-content">
                                        <h4>Professional Services</h4>
                                        <p>Project & resource management</p>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item-custom">
                                    <div class="dropdown-icon">
                                        <i class="fas fa-hospital"></i>
                                    </div>
                                    <div class="dropdown-content">
                                        <h4>Healthcare</h4>
                                        <p>Hospital & clinic management</p>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <!-- Static Links -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">Pricing</a>
                        </li>

                        <!-- Resources Dropdown -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Resources
                                <i class="fas fa-chevron-down"></i>
                            </a>
                            <div class="dropdown-menu-custom">
                                <a href="#" class="dropdown-item-custom">
                                    <div class="dropdown-icon">
                                        <i class="fas fa-book"></i>
                                    </div>
                                    <div class="dropdown-content">
                                        <h4>Documentation</h4>
                                        <p>Guides and API reference</p>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item-custom">
                                    <div class="dropdown-icon">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                    <div class="dropdown-content">
                                        <h4>Tutorials</h4>
                                        <p>Learn step by step</p>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item-custom">
                                    <div class="dropdown-icon">
                                        <i class="fas fa-blog"></i>
                                    </div>
                                    <div class="dropdown-content">
                                        <h4>Blog</h4>
                                        <p>Latest updates and insights</p>
                                    </div>
                                </a>
                                <a href="#" class="dropdown-item-custom">
                                    <div class="dropdown-icon">
                                        <i class="fas fa-headset"></i>
                                    </div>
                                    <div class="dropdown-content">
                                        <h4>Support Center</h4>
                                        <p>Get help anytime</p>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">Company</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Header Actions -->
            <div class="header-actions">
                <a href="#" class="btn-header btn-ghost">
                    <i class="fas fa-user"></i>
                    Sign In
                </a>
                <a href="#" class="btn-header btn-primary-custom">
                    <i class="fas fa-calendar-check"></i>
                    Book Demo
                </a>
                
                <!-- Mobile Menu Toggle -->
                <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle Menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Overlay -->
    <div class="mobile-overlay" id="mobileOverlay"></div>

    <!-- Mobile Offcanvas Menu -->
    <div class="mobile-offcanvas" id="mobileOffcanvas">
        <div class="mobile-header">
            <a href="#" class="brand-logo">
               
                  <div class="logo">  
                   <img src="<?= base_url('website_assets/img/cspl-logo.png') ?>" alt=""> </div>
                
            </a>
            <button class="mobile-close-btn" id="mobileCloseBtn" aria-label="Close Menu">
                <i class="fas fa-times"></i>
            </button>
        </div>
        
        <div class="mobile-nav-content">
            <ul class="mobile-nav-list">
                <li class="mobile-nav-item">
                    <a href="#" class="mobile-nav-link">
                        <span>Home</span>
                    </a>
                </li>
                
                <li class="mobile-nav-item">
                    <button class="mobile-nav-link" id="mobileProductsToggle">
                        <span>Products</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="mobile-dropdown" id="mobileProductsDropdown">
                        <a href="#" class="mobile-nav-link">Financial Management</a>
                        <a href="#" class="mobile-nav-link">Human Resources</a>
                        <a href="#" class="mobile-nav-link">Inventory & Supply Chain</a>
                        <a href="#" class="mobile-nav-link">AI Copilot</a>
                    </div>
                </li>
                
                <li class="mobile-nav-item">
                    <button class="mobile-nav-link" id="mobileSolutionsToggle">
                        <span>Solutions</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="mobile-dropdown" id="mobileSolutionsDropdown">
                        <a href="#" class="mobile-nav-link">Manufacturing</a>
                        <a href="#" class="mobile-nav-link">Retail & Distribution</a>
                        <a href="#" class="mobile-nav-link">Professional Services</a>
                        <a href="#" class="mobile-nav-link">Healthcare</a>
                    </div>
                </li>
                
                <li class="mobile-nav-item">
                    <a href="#" class="mobile-nav-link">Pricing</a>
                </li>
                
                <li class="mobile-nav-item">
                    <button class="mobile-nav-link" id="mobileResourcesToggle">
                        <span>Resources</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="mobile-dropdown" id="mobileResourcesDropdown">
                        <a href="#" class="mobile-nav-link">Documentation</a>
                        <a href="#" class="mobile-nav-link">Tutorials</a>
                        <a href="#" class="mobile-nav-link">Blog</a>
                        <a href="#" class="mobile-nav-link">Support Center</a>
                    </div>
                </li>
                
                <li class="mobile-nav-item">
                    <a href="#" class="mobile-nav-link">Company</a>
                </li>
            </ul>
        </div>
        
        <div class="mobile-cta-section">
            <a href="#" class="btn-header btn-ghost w-100 justify-content-center">
                <i class="fas fa-user"></i>
                Sign In
            </a>
            <a href="#" class="btn-header btn-primary-custom w-100 justify-content-center">
                <i class="fas fa-calendar-check"></i>
                Book Demo
            </a>
        </div>
    </div>
