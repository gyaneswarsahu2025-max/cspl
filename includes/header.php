 


<?php session_start(); ?>
  
 
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
    
      <meta name="author" content=" ">
      <!-- Favicon -->
      <link rel="shortcut icon" href="img/logo-icon.png" type="image/logo-icon.png" />
      <link rel="apple-touch-icon" href="img/clogo-icon.png">
  
 
      <!-- Web Fonts  -->
      <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&amp;display=swap" rel="stylesheet" type="text/css">
      <!-- Vendor CSS -->
      <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="vendor/animate/animate.compat.css">
      <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
      <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
      <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">
      <!-- Theme CSS -->
        <link rel="stylesheet" href="css/demos/demo-auto-services.css">
      <link rel="stylesheet" href="css/theme.css">
      <link rel="stylesheet" href="css/theme-elements.css">
      <link rel="stylesheet" href="css/theme-blog.css">
      <link rel="stylesheet" href="css/theme-shop.css">
      <!-- Demo CSS -->
      <!-- <link rel="stylesheet" href="css/demos/demo-real-estate.css"> -->
      <!-- <link id="skinCSS" rel="stylesheet" href="css/skins/skin-corporate-3.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@400..700&display=swap" rel="stylesheet">
      <!-- Theme Custom CSS -->
      <link rel="stylesheet" href="css/custom.css">
        <link rel="stylesheet" href="css/blogs.css">

<!-- Demo CSS -->
      <link rel="stylesheet" href="css/demos/demo-real-estate.css">

      <!-- Skin CSS -->
      <link id="skinCSS" rel="stylesheet" href="css/skins/skin-real-estate.css">

<link rel="stylesheet" href="css/theme-blog.css">


      <!-- font-awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!-- Head Libs -->
      <script src="vendor/modernizr/modernizr.min.js"></script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-SEP1T05Z5V"></script>
      
      
      

      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&display=swap" rel="stylesheet">
      <!--  <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());
         
         gtag('config', 'G-SEP1T05Z5V');
         </script> -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
         new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
         j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
         'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
         })(window,document,'script','dataLayer','GTM-PPXLPR2X');
      </script>
          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   </head>










 

 

 



   <style type="text/css">
   
   
   
   
   
   
   
    .page-heading{

  

   font-family: "Merriweather", serif !important;
   color: var(--secondary-green);
   font-weight: 500;
   text-align: center;
   padding-bottom: 12px ;
     padding-top: 12px ;
   margin: 0 0  0 !important;
  



}
.text-primary-green {
  color: var(--secondary-green) !important; /* Use it like this */
}
 /*.decor-card {
            width: 100%;
            height: 350px;
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            /* Replace with your image path */
           /* background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            }

            .decor-card  img{
            width: 100%;
            height: 100%;
            
            }
            .decor-card::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.6);  
            }*/


            .decor-card {
      max-width: 280px;
      margin: auto;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
      border: 4px solid var(--secondary-green);
    }

    .decor-img-wrapper {
      min-height: 320px;
 
      position: relative;
      background: var(--secondary-green);
      z-index: 2000;
    }

    .decor-img-wrapper img {
      display: block;
   min-width: 280px;
      min-height: 320px;
      margin: auto;
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
    }

    .decor-img-wrapper::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.4);
      z-index: 1;
    }

    .decor-card-title {
      position: absolute;
      top: 20%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
     font-family: "Merriweather", serif !important;
      font-weight: bold;
      z-index: 2;
      text-align: center;
      text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);
    }

    .decor-card-body {
      padding: 20px;
      text-align: center;
      background-color:var(--secondary-green);
    }
            .decor-card h3 {
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translateX(-50%);
            color: white !important;
            font-weight: bold;
            z-index: 2;
            text-align: center;
            font-family: 'Georgia', serif;
            }
            .dual-bg-section {
            height: auto;
            background: linear-gradient(to bottom, white 35%, #a8c3a0 65%);
            }
            .card-container {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            overflow: hidden;
            }

            .card-image {
            width: 100%;
            height: 320px;
         object-fit: fill;
        
            }  .card-image img{
            width: 100%;
            height: 100%;
            
            }
            
            .card-content {
            padding: 20px;
            }
            .card-title {
            font-size: 24px;
            margin: 0 0 10px;
            color: #2c3e50;
            }
            .card-para {
            font-size: 16px;
            color: #000;
            margin-bottom: 20px;
            line-height: 1.2;
            }
            .card-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: var(--primary-green);
            color: var(--secondary-green);
            font-weight: bold;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s ease;
            }
            .card-button:hover {
            background-color: var(--secondary-green);
            color: white;
            }
            .blog-section h3{
            color: var(--secondary-green);
            }
            .cross-button {
            position: relative;
            display: inline-block;
            padding: 12px 24px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            font-weight: 500;
            overflow: hidden;
            border-radius: 5px;
            transition: color 0.3s ease;
            z-index: 1;
            }
            .cross-button::before,
            .cross-button::after {
            content: "";
            position: absolute;
            background-color: #0056b3; /* hover color */
            transition: transform 0.4s ease;
            z-index: -1;
            }
            /* Vertical bar */
            .cross-button::before {
            top: 0;
            left: 50%;
            width: 2px;
            height: 100%;
            transform: scaleY(0);
            transform-origin: center;
            }
            /* Horizontal bar */
            .cross-button::after {
            left: 0;
            top: 50%;
            width: 100%;
            height: 2px;
            transform: scaleX(0);
            transform-origin: center;
            }
            .cross-button:hover::before {
            transform: scaleY(1);
            }
            .cross-button:hover::after {
            transform: scaleX(1);
            }
            .cross-button:hover {
            color: #fff;
            background-color: #0056b3;
            } 
            /* Diagonal Wipe */
            .diagonal-button {
            position: relative;
            background-color:var(--secondary-green);
            color: white;
            overflow: hidden;
            transition: color 0.3s ease;
            z-index: 1;
            display: inline-block;
            padding: 8px 16px;
            text-decoration: none;
            font-weight: 500;
            border-radius: 5px;
            cursor: pointer;
            }
            .diagonal-button::before {
            content: "";
            position: absolute;
            background-color: var(--primary-green);
            width: 120%;
            height: 120%;
            top: 100%;
            left: -100%;
            transform: rotate(45deg);
            transition: all 0.5s ease;
            z-index: -1;
            color: var(--secondary-green);
            }
            .diagonal-button:hover::before {
            top: -10%;
            left: -10%;
            }
            .diagonal-button:hover {
            color: white;
            }


                .hero-section {
      position: relative;
      background: url('img/lifestyle.avif') no-repeat center center;
      background-size: cover;
      min-height: 100vh;
      display: flex;
      align-items: center;
      color: #2f4f4f;
    }

    .overlay {
      background-color: rgba(255, 255, 255, 0.8);
      padding: 40px;
      border-radius: 10px;
    }
  .hero-overlay {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background-color: rgba(255, 255,255, 0.8); /* dark overlay */
  
    }
    .left-arrow {
      position: absolute;
      left: 15px;
      top: 50%;
      transform: translateY(-50%);
      font-size: 2rem;
      color: #2f4f4f;
      cursor: pointer;
    }

    .btn-read-more {
      background-color: #3a5f3a;
      color: white;
      border: none;
    }

    .btn-read-more:hover {
      background-color: #2f4f4f;
    }
 
   
      .social-icons {
            position: fixed;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding: 10px;
            
            z-index:1000;
        }
        .social-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            background: #333;
            color: white;
            text-decoration: none;
            font-size: 24px;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .social-icons a:hover {
            background: #555;
        }

         * {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
         }
         :root {
         /* Primary Colors */
         --primary-green: #A0B3A0;
         --secondary-green: #456951;
         --light-green: #a8c8a8;
         --lighter-green: #d2e3d2;
         /* Text Colors */
         --text-dark: #2c5530;
         --text-light: #ffffff;
         --text-muted: #9bb89b;
         /* Background Colors */
         --background-main: linear-gradient(135deg, #a8c8a8 0%, #9bb89b 100%);
         --background-blur: rgba(168, 200, 168, 0.95);
         --background-overlay: rgba(0, 0, 0, 0.5);
         /* Border/Shadow */
         --shadow-default: rgba(0, 0, 0, 0.1);
         --border-light: rgba(44, 85, 48, 0.1);
         }
         body {
         font-family: 'Arial', sans-serif;
         }
         .header {
         background: var(--primary-green);
         backdrop-filter: blur(10px);
         box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
         position: relative;
         top: 0;
         left: 0;
         right: 0;
         transition: all 0.3s ease;
         height: auto;
         }
         .header-container {
         background: var(--primary-green);
         max-width: 1200px;
         margin: 0 auto;
         padding: 0 20px;
         display: flex;
         align-items: center;
         justify-content: center;
         min-height: 80px;
         }
         .logo {
             
                  width: 100%;
                      height: 100%;
       
        
         align-items: center;
   
         color: #2c5530;
         transition: transform 0.3s ease;
      
         }
        
         .logo-icon {
         width: 40px;
         height: 40px;
         margin-bottom: 8px;
         fill: none;
         stroke: #2c5530;
         stroke-width: 2;
         stroke-linecap: round;
         stroke-linejoin: round;
         }
         .logo-text {
         font-size: 28px;
         font-weight: 300;
         letter-spacing: 1px;
         line-height: 1.2;
         text-align: center;
         }
         .logo-text .highlight {
         color: #5a7c5a;
         font-weight: 400;
         }
         .nav-desktop {
         display: flex;
         list-style: none;
         gap: 40px;
         justify-content: center;
         background: var(--primary-green);
         }
         .nav-desktop li a {
               font-family: "Merriweather", serif !important;
         color: #fff;
         text-decoration: none !important;
         font-size: 22px;
         font-weight: bold;
         
         letter-spacing: 0.5px;
         padding: 10px 0;
         position: relative;
         transition: all 0.3s ease;
         background: var(--primary-green);
         }
         .nav-desktop li a:hover {
         color: #5a7c5a;
         transform: translateY(-1px);
         }
         .nav-desktop li a::after {
         content: '';
         position: absolute;
         bottom: 0;
         left: 0;
         width: 0;
         height: 2px;
         background: #fff;
         transition: width 0.3s ease;
         }
         .nav-desktop li a:hover::after {
         width: 100%;
         }
         .hamburger {
         display: none;
         flex-direction: column;
         cursor: pointer;
         padding: 10px;
         z-index: 1001;
         }
         .hamburger span {
         width: 25px;
         height: 3px;
         background: #2c5530;
         margin: 3px 0;
         transition: all 0.3s ease;
         border-radius: 2px;
         }
         .hamburger.active span:nth-child(1) {
         transform: rotate(45deg) translate(5px, 5px);
         }
         .hamburger.active span:nth-child(2) {
         opacity: 0;
         }
         .hamburger.active span:nth-child(3) {
         transform: rotate(-45deg) translate(7px, -6px);
         }
         .nav-mobile {
         position: fixed;
         top: 0;
         right: -100%;
         width: 300px;
         height: 100vh;
         background: linear-gradient(135deg, #a8c8a8 0%, #9bb89b 100%);
         backdrop-filter: blur(15px);
         box-shadow: -5px 0 20px rgba(0, 0, 0, 0.2);
         transition: right 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
         z-index: 999;
         padding-top: 100px;
         }
         .nav-mobile.active {
         right: 0;
         }
         .nav-mobile ul {
         list-style: none;
         padding: 0;
         }
         .nav-mobile li {
         opacity: 0;
         transform: translateX(50px);
         transition: all 0.3s ease;
         }
         .nav-mobile.active li {
         opacity: 1;
         transform: translateX(0); 
         }
         .nav-mobile li:nth-child(1) { transition-delay: 0.1s; }
         .nav-mobile li:nth-child(2) { transition-delay: 0.2s; }
         .nav-mobile li:nth-child(3) { transition-delay: 0.3s; }
         .nav-mobile li:nth-child(4) { transition-delay: 0.4s; }
         .nav-mobile li:nth-child(5) { transition-delay: 0.5s; }
         .nav-mobile li:nth-child(6) { transition-delay: 0.6s; }
         .nav-mobile a {
         display: block;
         color: #fff;
         text-decoration: none;
         font-size: 18px;
         font-weight:bold;
         padding: 20px 30px;
         border-bottom: 1px solid rgba(44, 85, 48, 0.1);
         transition: all 0.3s ease;
         letter-spacing: 0.5px;
         }
         .nav-mobile a:hover {
         background: rgba(255, 255, 255, 0.1);
         color: #5a7c5a;
         padding-left: 40px;
         }
         .overlay {
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background: rgba(0, 0, 0, 0.5);
         z-index: 998;
         opacity: 0;
         visibility: hidden;
         transition: all 0.3s ease;
         }
         .overlay.active {
         opacity: 1;
         visibility: visible;
         }
         .content {
         margin-top: 120px;
         padding: 40px 20px;
         text-align: center;
         color: #2c5530;
         }
         .content h1 {
         font-size: 48px;
         font-weight: 300;
         margin-bottom: 20px;
         letter-spacing: 2px;
         }
         .content p {
         font-size: 18px;
         max-width: 600px;
         margin: 0 auto;
         line-height: 1.6;
         }
         .logo-n2{
         height:220px;
         width:350px;
         z-index:  100;
         }
         /* Responsive */
         @media (max-width: 768px) {
         .header-container {
         justify-content: center;
         position: relative;
         padding: 15px 20px;
         }
         .logo {
         position: absolute;
         left: 50%;
         transform: translateX(-50%);
         }
         .logo-text {
         font-size: 24px;
         }
         .logo-icon {
         width: 35px;
         height: 35px;
         }
         .nav-desktop {
         display: none;
         }
         .hamburger {
         display: flex;
         position: absolute;
         right: 20px;
         }
         .content h1 {
         font-size: 36px;
         }
         .nav-mobile {
         width: 280px;
         }
         .logo-n2{
         height:80px;
         width: 110px;
         z-index:  100;
         }

            .decor-card {
      max-width: 200px;
      margin: auto;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
      border: 4px solid #000;
    }

    .decor-img-wrapper {
      min-height: 280px;
 
      position: relative;
      background-color: #000;
      z-index: 2000;
    }

    .decor-img-wrapper img {
      display: block;
    min-width: 200px;
      min-height: 280px;
      margin: auto;
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
    }

         /*.decor-card {
            width: 100%;
            height: 280px;
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            /* Replace with your image path */
            /*background-size: contain;
            background-position:  absolute;
            background-repeat: no-repeat;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            }*/
         }
         @media (max-width: 480px) {
         .logo-text {
         font-size: 20px;
         }
         .logo-icon {
         width: 30px;
         height: 30px;
         }
         .nav-mobile {
         width: 100%;
         right: -100%;
         }
         .nav-mobile a {
         font-size: 20px;
         padding: 18px 25px;
         }
         .content h1 {
         font-size: 28px;
         }
         .content p {
         font-size: 16px;
         }
         }
         .divider{
         height: 220px;
         }
         
         .hero-text {
         max-width: 100%;
         padding: 20px;
         }
         .hero-text h1 {
         font-size: 2.5rem;
         font-weight: bold;
         color: #052c65;
         }



 

         @media (max-width: 576px) {
    h2 {
        font-size: 1.5rem;
    }
     h3 {
        font-size: 1rem;
    }
      h4 {
        font-size: 0.7rem;
    }

}

@media (min-width: 768px) {
    h2 {
        font-size: 2rem;
    }
     h3 {
        font-size: 1.5rem;
    }
      h4 {
        font-size: 1rem;
    }

}

@media (min-width: 992px) {
    h2 {
        font-size: 3.2rem;
    }
     h3 {
        font-size: 1.7rem;
    }
      h4 {
        font-size: 1.3rem;
    }


}

h2{

line-height: 1;


}
   /* Post Cards */
        .post-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border: none;
            margin-bottom: 2rem;
        }

        .post-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .post-image {
            height: 200px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .post-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .post-card:hover .post-image img {
            transform: scale(1.1);
        }

        .post-category {
            background:var(--primary-green);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: bold;
            display: inline-block;
            margin-bottom: 1rem;
        }

        .post-title {
            font-size: 1.3rem;
            margin-bottom: 0.8rem;
            color: #333;
            line-height: 1.4;
        }

        .post-preview {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .btn-outline-primary-custom {
            color: #667eea;
            border: 2px solid #667eea;
            border-radius: 25px;
            padding: 0.7rem 1.5rem;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }

        .btn-outline-primary-custom:hover {
            background: #667eea;
            border-color: #667eea;
            color: white;
            transform: translateY(-2px);
            text-decoration: none;
        }

/*
   .post-category {
   
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            padding: 0.3rem 0.6rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: bold;
       
          position: relative;
         z-index:3000;
            top: 10%;
            left: 10%;
        }*/



        .owl-carousel:not(.nav-arrows-1):not(.show-nav-title) .owl-nav button[class*="owl-"] {
  background-color: var(--primary-green) !important;
  
  color: #000;
}
   </style>
   <body>
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PPXLPR2X"
         height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
 <header class="header" style="z-index: 3000;">
         <center>
            <a href="index.php" class="logo d-none  d-md-block ">
            <img alt="Porto"   class="pt-1 logo-n2"    src="./img/logo.png">
            </a>  
            <div class="header-container">
               <nav>
                  <ul class="nav-desktop">
                    <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="blog-list.php">Health</a></li>
            <li><a href="blog-list.php">Fitness</a></li>
            <li><a href="blog-list.php">Lifestyle</a></li>
            <li><a href="blog-list.php">Self Improvement</a></li>
             
                  </ul>
               </nav>
               <a href="#" class="logo d-block  d-md-none" style="align:left;">
               <img alt="Porto"   class="pt-1 logo-n2"    src="./img/logo.png">
               </a>  
               <div class="hamburger" >
                  <span></span>
                  <span></span>
                  <span></span>
               </div>
            </div>
         </center>
      </header>
      <nav class="nav-mobile" style="z-index: 2000;">
         <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="blog-list.php">Health</a></li>
            <li><a href="blog-list.php">Fitness</a></li>
            <li><a href="blog-list.php">Lifestyle</a></li>
            <li><a href="blog-list.php">Self Improvement</a></li>
             
         </ul>
      </nav>
      <div class="overlay"></div>