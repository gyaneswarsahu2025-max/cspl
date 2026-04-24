
 


  <style>
    /* ====== Custom Header (Reusable) ====== */
.ch-header { 
  background: #fff; 
  color: #fff; 
  position: sticky; 
  top: 0;                /* required */
  left: 0;               /* optional, keeps it aligned */
  right: 0;              /* optional */
  z-index: 1000;         /* stays above content */
}

    .ch-link { color:#fff !important; }
    .ch-brand { color:#fff !important; font-weight:700; letter-spacing:.5px; }

    /* Desktop Navbar */
    .ch-desktop { padding:.25rem 1rem; }
    .ch-desktop .nav-link { padding:.6rem 1rem; }
    .ch-desktop .dropdown-menu { background:#2a2a2a; border:0; margin-top:0; }
    .ch-desktop .dropdown-item { color:#fff; }
    .ch-desktop .dropdown-item:hover { background:#3a3a3a; }

    /* Hover dropdowns on desktop only */
    @media (min-width: 992px) {
      .ch-desktop .dropdown:hover > .dropdown-menu { display:block; }
    }

    /* Mobile top bar: menu icon → logo → login icon */
    .ch-mobile-bar {
      display:none; align-items:center; justify-content:space-between;
      padding:.5rem .75rem;
    }
    .ch-ico {
      display:inline-flex; align-items:center; background: none; justify-content:center;
        line-height:1; cursor:pointer;
       user-select:none;
    }
    .ch-logo { font-weight:700; font-size:18px; color:#fff; text-align:center; flex:1; }

    /* Mobile drawer + overlay */
    .ch-overlay {
      position:fixed; inset:0; background:rgba(0,0,0,.5); display:none; z-index:1030;
    }
    .ch-overlay.is-active { display:block; }

    .ch-drawer {
      position:fixed; top:0; left:0; height:100vh; width:86%; max-width:360px;
      background:#fff; transform:translateX(-100%); transition:transform .28s ease;
      z-index:1031; overflow-y:auto; -webkit-overflow-scrolling:touch;
      box-shadow:2px 0 24px rgba(0,0,0,.35);
    }
    .ch-drawer.is-open { transform:translateX(0); }
    .ch-drawer-header { display:flex; align-items:center; justify-content:space-between;
      padding:.9rem .9rem;   }
    .ch-drawer-title { margin:0; font-size:16px; font-weight:600; color:#fff; }

    .ch-mobile-menu { list-style:none; margin:0; padding:.25rem 0 1rem; }
    .ch-mobile-menu > li {   }
    .ch-mobile-link, .ch-sub-toggle {
      display:flex; align-items:center; justify-content:space-between;
      width:100%; padding:.5rem .5rem; color:var(--primary-green); text-decoration:none;
    }
    .ch-mobile-link:hover { background:#262626; text-decoration:none; }

    /* Submenus */
    .ch-submenu { display:none; list-style:none; margin:0; padding:0 0 .5rem; background:var(--primary-green); }
    .ch-submenu li a { display:block; padding:.4rem 1.25rem; color:#fff; text-decoration:none; font-weight:bold ; }
    .ch-submenu li a:hover { background:#000; color: var(--primary-green); text-decoration:none; }
    .ch-has-sub.open > .ch-submenu { display:block; }

    /* Utilities */
    .ch-no-scroll { overflow:hidden; }

    /* Breakpoint behavior */
    @media (max-width: 768px) {
      .ch-desktop { display:none !important; }
      .ch-mobile-bar { display:flex !important; }
    }
    .ch-sub-toggle ,.ch-mobile-link {
font-weight: bold;

    }

      .ch-mobile-link : hover {
color: #fff !important;

    }

    .js-ch-menu-toggle{


background: #fff !important;

    }
    .js-ch-menu-toggle, 
.js-ch-close {
  background: transparent !important;
  border: none !important;
  box-shadow: none !important;
  padding: 0;
}

  </style>
</head>
<body>

<header class="ch-header">

 

  <!-- Mobile top bar -->
  <div class="ch-mobile-bar">
    <button class="  js-ch-menu-toggle bg-0" aria-expanded="false" aria-controls="chDrawer" aria-label="Open menu">  <i class="fa-solid fa-bars fa-2x" style="color: #000;"></i></button>
    <div class="ch-logo"><a href="<?=site_url(' ') ?> ">
                                                <img alt="Aumaantrak.com" width="70%" height="45"   src="<?=base_url('website_assets/img/jubilax.png') ?>">
                                            </a></div>
     <?php if ($this->session->userdata('fullname')): ?>
        <a href="<?= site_url('Site/view_profile'); ?>" class=" " aria-label="login">
             <img src="<?= base_url('website_assets/img/icons/user.png'); ?>" alt=" " style="width: 30px;">
             <!--<?= $this->session->userdata('fullname'); ?>  -->
        </a>
    <?php else: ?>
        <a href="<?= site_url('Site/login') ?>" style="color:var(--primary-green); font-size: 18px;" class="  " aria-label="login">
           
          <img src="<?= base_url('website_assets/img/icons/user.png'); ?>" alt=" " style="width: 30px;">
        </a>
    <?php endif; ?>
  </div>

</header>

<!-- Mobile overlay + drawer -->
<div class="ch-overlay js-ch-overlay"></div>

<aside id="chDrawer" class="ch-drawer" aria-hidden="true">
  <div class="ch-drawer-header">
    <h6 class="ch-drawer-title"> <a href="<?=site_url(' ') ?> ">
                                                <img alt="Aumaantrak.com" width="80%" height="45"   src="<?=base_url('website_assets/img/logo.png') ?>">
                                            </a></h6>
    <button class="  js-ch-close" aria-label="Close menu"><i class="fa-solid fa-xmark fa-2xl" style="color: #000000;"></i></button>
  </div>

  <ul class="ch-mobile-menu">


     <li><a class="ch-mobile-link" href="<?=site_url(' ') ?>">Home</a></li>
    <li class="ch-has-sub">
      <a href="#" class="ch-sub-toggle">Products<span><i class="fa-solid fa-chevron-down"></i></span></a>
      <ul class="ch-submenu">


        <?php if ($this->category ) {  ?>
    <?php foreach ($this->category as $cat) { ?>
      
       <li><a href=" <?= site_url('site/category_products/' . $cat['category_id']) ?>" class=" "><?= $cat['category_name']?></a></li>

            <?php } ?>
<?php } else { ?>
    <p>No categories found.</p>
<?php } ?>
                                                         
        <!-- <li><a href="#">Submenu 1</a></li>
        <li><a href="#">Submenu 2</a></li> -->
      </ul>
    </li>

   <!--  <li class="ch-has-sub">
      <a href="#" class="ch-sub-toggle"> <span>&#x25BE;</span></a>
      <ul class="ch-submenu"> 
        <li><a href="#">Option A</a></li>
        <li><a href="#">Option B</a></li>
      </ul>
    </li> -->
      <li><a class="ch-mobile-link" href="<?=site_url('Site/contactus ') ?>">Contact Us</a></li>

           <li><a class="ch-mobile-link" href="#">Opportunity</a></li>

    <!-- <li><a class="ch-mobile-link" href="#">Login</a></li> -->
  </ul>
</aside>

<!-- jQuery (full), Popper, Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> -->



 
