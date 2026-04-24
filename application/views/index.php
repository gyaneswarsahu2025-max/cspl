<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP Software Company - Header</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Google Fonts - Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
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


    <section class="hero-section">
        <!-- Background Decorations -->
        <div class="hero-bg-decoration"></div>
        <div class="floating-shape shape-1"></div>
        <div class="floating-shape shape-2"></div>

        <div class="container">
            <div class="row align-items-center hero-content">
                
                <!-- Left Content -->
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <h1 class="hero-title fade-up">
                        Put <span class="underline-text">people</span> first
                    </h1>
                    
                    <p class="hero-subtitle fade-up delay-100">
                        Fast, user-friendly and engaging - turn HR into people and culture and streamline your daily operations with your own branded app.
                    </p>

                    <!-- Email Form -->
                    <div class="email-form-wrapper fade-up delay-200">
                        <form class="email-form" onsubmit="event.preventDefault();">
                            <input 
                                type="email" 
                                class="form-control-custom" 
                                placeholder="Enter work email"
                                required
                            >
                           <a href="#" class="btn-header btn-primary-custom">
                    <i class="fas fa-calendar-check"></i>
                    Book Demo
                </a>
                
                        </form>
                    </div>

                    <!-- Statistics -->
                    <div class="stats-container fade-up delay-300">
                        <div class="stat-item">
                            <div class="stat-value">75.2%</div>
                            <div class="stat-label">Average daily activity</div>
                        </div>
                        <div class="stat-divider"></div>
                        <div class="stat-item">
                            <div class="stat-value">~20k</div>
                            <div class="stat-label">Average daily users</div>
                        </div>
                    </div>

                    <!-- Rating -->
                    <div class="rating-container fade-up delay-400">
                        <div class="stars-wrapper">
                            <span class="star filled">★</span>
                            <span class="star filled">★</span>
                            <span class="star filled">★</span>
                            <span class="star filled">★</span>
                            <span class="star half">★</span>
                        </div>
                        <div class="rating-text">
                            <span class="rating-number">4.5</span>
                            Average user rating
                        </div>
                    </div>
                </div>

                <!-- Right Illustration -->
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <div class="illustration-wrapper">


                     <img src="<?= base_url('website_assets/img/cspl_hero.png') ?>" 
                 alt="Humshi Poonacha" class="lux-img img-fluid">
                        <!-- Isometric Illustration SVG -->
                        <svg class=" d-none isometric-illustration illustration-svg" viewBox="0 0 800 700" xmlns="http://www.w3.org/2000/svg">
                            <!-- Background Grid -->
                            <defs>
                                <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                                    <path d="M 40 0 L 0 0 0 40" fill="none" stroke="#e5e7eb" stroke-width="0.5"/>
                                </pattern>
                                <linearGradient id="phoneGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#ffffff;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#f9fafb;stop-opacity:1" />
                                </linearGradient>
                                <linearGradient id="greenGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#1F51FF;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#FFAC1C;stop-opacity:1" />
                                </linearGradient>
                                <filter id="shadow" x="-20%" y="-20%" width="140%" height="140%">
                                    <feDropShadow dx="0" dy="10" stdDeviation="20" flood-opacity="0.1"/>
                                </filter>
                            </defs>
                            
                            <rect width="800" height="700" fill="url(#grid)" opacity="0.3"/>

                            <!-- Main Phone Device -->
                            <g class="floating-card" transform="translate(250, 150) rotate(-5)">
                                <rect x="0" y="0" width="300" height="500" rx="30" fill="url(#phoneGradient)" stroke="#e5e7eb" stroke-width="2" filter="url(#shadow)"/>
                                <rect x="10" y="10" width="280" height="480" rx="25" fill="#ffffff"/>
                                
                                <!-- Phone Notch -->
                                <rect x="100" y="15" width="100" height="25" rx="12" fill="#f3f4f6"/>
                                
                                <!-- Screen Content -->
                                <rect x="30" y="60" width="240" height="40" rx="8" fill="#f3f4f6"/>
                                <rect x="30" y="110" width="240" height="120" rx="12" fill="#f9fafb" stroke="#e5e7eb"/>
                                <rect x="45" y="125" width="60" height="60" rx="30" fill="url(#greenGradient)" opacity="0.1"/>
                                <circle cx="75" cy="155" r="15" fill="url(#greenGradient)"/>
                                <rect x="120" y="130" width="100" height="12" rx="6" fill="#e5e7eb"/>
                                <rect x="120" y="150" width="80" height="10" rx="5" fill="#f3f4f6"/>
                                
                                <!-- Chart -->
                                <rect x="30" y="250" width="240" height="150" rx="12" fill="#f9fafb" stroke="#e5e7eb"/>
                                <rect x="50" y="270" width="30" height="80" rx="4" fill="url(#greenGradient)" opacity="0.8"/>
                                <rect x="95" y="290" width="30" height="60" rx="4" fill="url(#greenGradient)" opacity="0.6"/>
                                <rect x="140" y="260" width="30" height="90" rx="4" fill="url(#greenGradient)"/>
                                <rect x="185" y="280" width="30" height="70" rx="4" fill="url(#greenGradient)" opacity="0.7"/>
                                
                                <!-- Bottom Nav -->
                                <rect x="30" y="420" width="240" height="60" rx="12" fill="#ffffff" stroke="#e5e7eb"/>
                                <circle cx="75" cy="450" r="12" fill="#1F51FF"/>
                                <circle cx="150" cy="450" r="12" fill="#e5e7eb"/>
                                <circle cx="225" cy="450" r="12" fill="#e5e7eb"/>
                            </g>

                            <!-- Floating Card 1 - Chat -->
                            <g class="floating-card" transform="translate(50, 200) rotate(8)">
                                <rect x="0" y="0" width="220" height="140" rx="16" fill="#ffffff" stroke="#e5e7eb" stroke-width="1.5" filter="url(#shadow)"/>
                                <rect x="20" y="20" width="80" height="20" rx="6" fill="#f3f4f6"/>
                                <rect x="20" y="55" width="180" height="30" rx="8" fill="#f9fafb"/>
                                <rect x="20" y="95" width="120" height="25" rx="8" fill="url(#greenGradient)" opacity="0.1"/>
                                <circle cx="190" cy="30" r="12" fill="url(#greenGradient)"/>
                                <text x="190" y="34" text-anchor="middle" fill="white" font-size="12" font-weight="600">42</text>
                            </g>

                            <!-- Floating Card 2 - Task List -->
                            <g class="floating-card" transform="translate(520, 350) rotate(-8)">
                                <rect x="0" y="0" width="240" height="160" rx="16" fill="#ffffff" stroke="#e5e7eb" stroke-width="1.5" filter="url(#shadow)"/>
                                <rect x="20" y="20" width="100" height="24" rx="8" fill="#f3f4f6"/>
                                
                                <!-- Task Items -->
                                <g transform="translate(20, 60)">
                                    <circle cx="12" cy="12" r="12" fill="url(#greenGradient)"/>
                                    <path d="M 7 12 L 11 16 L 17 8" stroke="white" stroke-width="2" fill="none" stroke-linecap="round"/>
                                    <rect x="35" y="4" width="120" height="16" rx="4" fill="#f9fafb"/>
                                </g>
                                
                                <g transform="translate(20, 95)">
                                    <circle cx="12" cy="12" r="12" fill="#e5e7eb"/>
                                    <rect x="35" y="4" width="140" height="16" rx="4" fill="#f9fafb"/>
                                </g>
                                
                                <g transform="translate(20, 130)">
                                    <circle cx="12" cy="12" r="12" fill="#e5e7eb"/>
                                    <rect x="35" y="4" width="100" height="16" rx="4" fill="#f9fafb"/>
                                </g>
                            </g>

                            <!-- Floating Card 3 - Performance -->
                            <g class="floating-card" transform="translate(480, 50) rotate(5)">
                                <rect x="0" y="0" width="200" height="120" rx="16" fill="#ffffff" stroke="#e5e7eb" stroke-width="1.5" filter="url(#shadow)"/>
                                <rect x="20" y="20" width="90" height="20" rx="6" fill="#f3f4f6"/>
                                <text x="160" y="34" text-anchor="end" fill="#1F51FF" font-size="16" font-weight="700">95.3%</text>
                                
                                <!-- Mini Chart -->
                                <path d="M 20 70 L 60 60 L 100 75 L 140 50 L 180 65" stroke="url(#greenGradient)" stroke-width="3" fill="none" stroke-linecap="round"/>
                                <circle cx="140" cy="50" r="5" fill="#1F51FF"/>
                            </g>

                            <!-- Floating Card 4 - Notification -->
                            <g class="floating-card" transform="translate(100, 520) rotate(-3)">
                                <rect x="0" y="0" width="260" height="80" rx="16" fill="#ffffff" stroke="#e5e7eb" stroke-width="1.5" filter="url(#shadow)"/>
                                <circle cx="40" cy="40" r="20" fill="#fef3c7"/>
                                <text x="40" y="46" text-anchor="middle" font-size="20">🔔</text>
                                <rect x="75" y="20" width="140" height="16" rx="6" fill="#f3f4f6"/>
                                <rect x="75" y="44" width="100" height="12" rx="4" fill="#f9fafb"/>
                            </g>

                            <!-- Connection Lines -->
                            <path d="M 400 200 Q 450 250 500 220" stroke="#1F51FF" stroke-width="2" fill="none" stroke-dasharray="5,5" opacity="0.4"/>
                            <path d="M 300 450 Q 350 480 400 460" stroke="#1F51FF" stroke-width="2" fill="none" stroke-dasharray="5,5" opacity="0.4"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>


 <section class="service-slider-section" id="serviceSlider">
  <div class="container">
    <div class="row align-items-center g-5">
      
      <!-- Left: Slider -->
      <div class="col-lg-6 service-slider-wrapper scroll-animate">
        <div class="service-carousel" id="serviceCarousel">
          <div class="service-slide active">
            <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=800" alt="Slide 1">
          </div>
          <div class="service-slide">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=800" alt="Slide 2">
          </div>
          <div class="service-slide">
            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=800" alt="Slide 3">
          </div>
        </div>
        <button class="slider-prev" id="sliderPrev"><i class="fas fa-arrow-left"></i></button>
        <button class="slider-next" id="sliderNext"><i class="fas fa-arrow-right"></i></button>
        <div class="slider-dots" id="sliderDots"></div>
      </div>

      <!-- Right: Content -->
      <div class="col-lg-6 service-content-wrapper scroll-animate">
        <span class="service-tag">Our Services</span>
        <h2 class="service-title" id="serviceTitle">Financial Management</h2>
        <p class="service-desc" id="serviceDesc">Transform your workflow with our integrated ERP modules. From finance to HR, we streamline operations so you can focus on growth.</p>
        <ul class="service-list" id="serviceList">
          <li><i class="fas fa-check-circle"></i> Real-time analytics & reporting</li>
          <li><i class="fas fa-check-circle"></i> Automated workflow management</li>
          <li><i class="fas fa-check-circle"></i> Secure cloud infrastructure</li>
        </ul>
        <a href="#" class="btn-explore" id="serviceBtn">Explore <i class="fas fa-arrow-right"></i></a>
      </div>

    </div>
  </div>
</section>


<section class="ai-copilots-section" id="aiCopilots">
  <div class="container">
    
    <!-- Section Header -->
    <div class="section-header text-center mb-5 scroll-animate">
      <span class="section-tag">AI-Powered</span>
      <h2 class="section-title">Meet Your Super AI Co-Pilots</h2>
      <p class="section-subtitle">Intelligent assistants that work alongside your team to automate, analyze, and accelerate your business operations.</p>
    </div>

    <!-- AI Co-Pilots Grid -->
    <div class="row g-4">
      
      <!-- Card 1 -->
      <div class="col-lg-4 col-md-6 scroll-animate">
        <div class="ai-card">
          <div class="ai-icon-wrapper">
            <div class="ai-icon">
              <i class="fas fa-brain"></i>
            </div>
          </div>
          <h3 class="ai-card-title">Intelligent Automation</h3>
          <p class="ai-card-desc">Automate repetitive tasks and workflows with AI that learns from your processes and suggests optimizations.</p>
          <ul class="ai-features">
            <li><i class="fas fa-check"></i> Smart workflow automation</li>
            <li><i class="fas fa-check"></i> Process optimization</li>
            <li><i class="fas fa-check"></i> Error reduction</li>
          </ul>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-lg-4 col-md-6 scroll-animate">
        <div class="ai-card">
          <div class="ai-icon-wrapper">
            <div class="ai-icon">
              <i class="fas fa-chart-line"></i>
            </div>
          </div>
          <h3 class="ai-card-title">Predictive Analytics</h3>
          <p class="ai-card-desc">Get ahead with AI-powered forecasts and insights that help you make data-driven decisions confidently.</p>
          <ul class="ai-features">
            <li><i class="fas fa-check"></i> Demand forecasting</li>
            <li><i class="fas fa-check"></i> Trend analysis</li>
            <li><i class="fas fa-check"></i> Risk assessment</li>
          </ul>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-lg-4 col-md-6 scroll-animate">
        <div class="ai-card">
          <div class="ai-icon-wrapper">
            <div class="ai-icon">
              <i class="fas fa-comments"></i>
            </div>
          </div>
          <h3 class="ai-card-title">Natural Language Processing</h3>
          <p class="ai-card-desc">Interact with your data using conversational AI. Ask questions in plain English and get instant answers.</p>
          <ul class="ai-features">
            <li><i class="fas fa-check"></i> Voice commands</li>
            <li><i class="fas fa-check"></i> Smart search</li>
            <li><i class="fas fa-check"></i> Document analysis</li>
          </ul>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-lg-4 col-md-6 scroll-animate">
        <div class="ai-card">
          <div class="ai-icon-wrapper">
            <div class="ai-icon">
              <i class="fas fa-shield-alt"></i>
            </div>
          </div>
          <h3 class="ai-card-title">Smart Compliance</h3>
          <p class="ai-card-desc">Stay compliant automatically with AI that monitors regulations and flags potential issues in real-time.</p>
          <ul class="ai-features">
            <li><i class="fas fa-check"></i> Auto-compliance checks</li>
            <li><i class="fas fa-check"></i> Audit trails</li>
            <li><i class="fas fa-check"></i> Risk alerts</li>
          </ul>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col-lg-4 col-md-6 scroll-animate">
        <div class="ai-card">
          <div class="ai-icon-wrapper">
            <div class="ai-icon">
              <i class="fas fa-users"></i>
            </div>
          </div>
          <h3 class="ai-card-title">HR Intelligence</h3>
          <p class="ai-card-desc">Enhance HR operations with AI that helps with recruitment, performance tracking, and employee engagement.</p>
          <ul class="ai-features">
            <li><i class="fas fa-check"></i> Smart candidate screening</li>
            <li><i class="fas fa-check"></i> Performance insights</li>
            <li><i class="fas fa-check"></i> Sentiment analysis</li>
          </ul>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="col-lg-4 col-md-6 scroll-animate">
        <div class="ai-card">
          <div class="ai-icon-wrapper">
            <div class="ai-icon">
              <i class="fas fa-robot"></i>
            </div>
          </div>
          <h3 class="ai-card-title">Conversational AI</h3>
          <p class="ai-card-desc">24/7 AI chatbots and virtual assistants that handle customer queries and internal support seamlessly.</p>
          <ul class="ai-features">
            <li><i class="fas fa-check"></i> 24/7 availability</li>
            <li><i class="fas fa-check"></i> Multi-language support</li>
            <li><i class="fas fa-check"></i> Context awareness</li>
          </ul>
        </div>
      </div>

    </div>

  </div>
</section>





    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
       <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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
</body>
</html> 
