<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book a Demo | SaaS Section</title>
  
  <!-- Bootstrap 5 CSS & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  
  <style>
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

<section class="book-demo-section">
  <div class="container">
    <div class="row align-items-center g-4 g-lg-5">
      
      <!-- Left: Content -->
      <div class="col-lg-6">
        <div class="pe-lg-4">
          <span class="feature-badge animate-on-scroll">Live Demo</span>
          <h2 class="display-5 fw-bold mb-3 animate-on-scroll delay-1" style="color: #0f172a;">See It in Action</h2>
          <p class="lead mb-4 animate-on-scroll delay-2" style="color: #475569;">
            Discover how our platform streamlines your workflow, automates repetitive tasks, and delivers actionable insights in real time.
          </p>

          <ul class="feature-list list-unstyled mb-4">
            <li class="animate-on-scroll delay-2"><i class="bi bi-check-circle-fill"></i> Real-time data sync across teams</li>
            <li class="animate-on-scroll delay-2"><i class="bi bi-check-circle-fill"></i> AI-powered workflow automation</li>
            <li class="animate-on-scroll delay-2"><i class="bi bi-check-circle-fill"></i> Enterprise-grade security & compliance</li>
          </ul>

          <div class="d-flex flex-wrap gap-3 mb-4 animate-on-scroll delay-3">
            <a href="#book" class="btn-demo-primary">Book a Demo</a>
            <button class="btn-demo-secondary d-flex align-items-center gap-2" onclick="openVideo()">
              <i class="bi bi-play-fill"></i> Watch Video
            </button>
          </div>

          <div class="trust-badges d-flex flex-wrap align-items-center gap-3 animate-on-scroll delay-4">
            <span class="trust-text">Trusted by 2,000+ companies</span>
            <div class="d-flex gap-2">
              <span class="trust-badge">SOC 2</span>
              <span class="trust-badge">GDPR</span>
              <span class="trust-badge">ISO 27001</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Right: Mockup with YouTube Thumbnail -->
      <div class="col-lg-6 text-center animate-on-scroll delay-3">
        <div class="demo-mockup-wrapper" onclick="openVideo()">
          <img 
            src="https://img.youtube.com/vi/cAFb_7wUvPk/maxresdefault.jpg" 
            alt="Watch Demo Video" 
            loading="lazy"
            onerror="this.src='https://img.youtube.com/vi/cAFb_7wUvPk/hqdefault.jpg'"
          >
          <button class="play-btn" type="button" aria-label="Watch demo video">
            <i class="bi bi-play-fill"></i>
          </button>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Video Modal -->
<div class="video-modal" id="videoModal" onclick="closeVideoOnBackdrop(event)">
  <div class="video-container">
    <button class="video-close" onclick="closeVideo()" aria-label="Close video">&times;</button>
    <iframe 
      id="youtubeFrame"
      src="" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
      allowfullscreen>
    </iframe>
  </div>
</div>

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

</body>
</html>