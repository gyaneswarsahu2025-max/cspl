 
      <!-- Favicon -->
      <link rel="shortcut icon" href="<?=base_url('website_assets/img/favicon.png') ?>" type="image/x-icon" />
      <link rel="apple-touch-icon" href="<?=base_url('website_assets/img/favicon.png') ?>">

      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
  
      <!-- Web Fonts  -->
      <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&amp;display=swap" rel="stylesheet" type="text/css">
 
      <!-- Vendor CSS -->
      <link rel="stylesheet" href="<?= base_url ('') ?>website_assets/vendor/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?= base_url ('') ?>website_assets/vendor/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="<?= base_url ('') ?>website_assets/vendor/animate/animate.compat.css">
      <link rel="stylesheet" href="<?= base_url ('') ?>website_assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
      <link rel="stylesheet" href="<?= base_url ('') ?>website_assets/vendor/owl.carousel/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="<?= base_url ('') ?>website_assets/vendor/owl.carousel/assets/owl.theme.default.min.css">
      <link rel="stylesheet" href="<?= base_url ('') ?>website_assets/vendor/magnific-popup/magnific-popup.min.css">
      <link rel="stylesheet" href="<?= base_url ('') ?>website_assets/vendor/bootstrap-star-rating/css/star-rating.min.css">
      <link rel="stylesheet" href="<?= base_url ('') ?>website_assets/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.css">

      <!-- Theme CSS -->
      <link rel="stylesheet" href="<?= base_url ('') ?>website_assets/css/theme.css">
      <link rel="stylesheet" href="<?= base_url ('') ?>website_assets/css/theme-elements.css">
      <link rel="stylesheet" href="<?= base_url ('') ?>website_assets/css/theme-blog.css">
      <link rel="stylesheet" href="<?= base_url ('') ?>website_assets/css/theme-shop.css">

      <!-- Demo CSS -->
      <link rel="stylesheet" href="<?= base_url ('') ?>website_assets/css/demos/demo-auto-services.css">
      <link rel="stylesheet" href="<?= base_url ('') ?>website_assets/css/demos/demo-auto-services.css">
      

      <!-- Skin CSS -->
      <link id="skinCSS" rel="stylesheet" href="<?= base_url ('') ?>website_assets/css/skins/skin-auto-services.css">

      <!-- Theme Custom CSS -->
      <link rel="stylesheet" href="<?= base_url ('') ?>website_assets/css/custom.css">

      <!-- Head Libs -->
      <script src="<?= base_url ('') ?>website_assets/vendor/modernizr/modernizr.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Bootstrap 4 CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">







      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-SEP1T05Z5V"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-SEP1T05Z5V');
      </script>

   </head>
   <style> 


.header-top{

background: #909090;




}
  .service-card-img {
      
    
        object-fit: cover;
      width: 100%;
      height: 100%;
    }

      :root {
            --primary-green: #2e8b0d;
            --dark-green: #347928;
            --navy-medium: #2a3441;
            --text-light: #ffffff;
            --text-muted: #b0c4de;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
.btn-custom{
color: #fff;
background: var(--primary-green);


}

.text-custom{
 
color: var(--primary-green) !important;


}
.post-meta span  {



color: var(--primary-green) !important;





}

.post-meta  a {



color: var(--primary-green) !important;





}
.post-content  a {



color: var(--primary-green) !important;





}
nav a{

color: var(--primary-green) !important;



}

/*
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--dark-green);
            color: var(--text-light);
            overflow-x: hidden;
        }*/
        
        .hero-section {
            background: #56ab2f;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #a8e063, #56ab2f);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #a8e063, #56ab2f); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            min-height: 100vh;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 30% 50%, rgba(0, 180, 216, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            padding: 80px 0;
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1.1;
            margin-bottom: 10px;
            color: var(--text-light);
        }
        
        .hero-subtitle {
            font-size: 4rem;
            font-weight: 800;
            background: #fff;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 20px;
            text-transform: lowercase;
            font-style: italic;
            line-height: 1;
        }
        
        .hero-tagline {
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1.1;
            margin-bottom: 30px;
            color: var(--text-light);
        }
        
        .availability-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 1.1rem;
            font-weight: 500;
            color: #fff;
            margin-bottom: 40px;
        }
        
        .availability-badge i {
            font-size: 1.2rem;
        }
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 40px;
        }
        
        .service-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            padding: 30px 20px;
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .service-card::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 4px;
            background: #fff;
            border-radius: 2px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .service-card:hover {
           
            background: rgba(255, 255, 255, 0.08);
            border: 2px solid #fff;
        }
        
        .service-card:hover::before {
            opacity: 1;
        }
        
        .service-icon {
            font-size: 2.5rem;
            color: var(--text-light);
            margin-bottom: 15px;
        }
        
        .service-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-light);
            margin: 0;
        }
        
        .ratings-section {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .ratings-text {
            font-size: 1rem;
            font-weight: 500;
            color: var(--text-light);
        }
        
        .rating-badges {
            display: flex;
            gap: 10px;
        }
        
        .rating-badge {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: white;
            transition: transform 0.3s ease;
        }
        
        .rating-badge:hover {
            transform: scale(1.1);
        }
        
        .rating-badge.google {
            background: #4285f4;
        }
        
        .rating-badge.facebook {
            background: #1877f2;
        }
        
        .rating-badge.other {
            background: #0066cc;
        }
        
        .hero-image {
            position: relative;
            z-index: 1;
        }
        
        .team-image {
            width: 100%;
            height: auto;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }
        
        .floating-circles {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: 0;
        }
        
        .circle {
            position: absolute;
            border-radius: 50%;
            background: var(--primary-green);
            opacity: 0.1;
        }
        
        .circle-1 {
            width: 150px;
            height: 150px;
            top: 10%;
            right: 10%;
            animation: float 6s ease-in-out infinite;
        }
        
        .circle-2 {
            width: 100px;
            height: 100px;
            top: 60%;
            right: 5%;
            animation: float 8s ease-in-out infinite reverse;
        }
        
        .circle-3 {
            width: 80px;
            height: 80px;
            top: 30%;
            right: 25%;
            animation: float 7s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        /* Responsive Design */
        @media (max-width: 1200px) {
            .hero-title {
                font-size: 3rem;
            }
            
            .hero-subtitle {
                font-size: 3.5rem;
            }
            
            .hero-tagline {
                font-size: 3rem;
            }
        }
        
        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 3rem;
            }
            
            .hero-tagline {
                font-size: 2.5rem;
            }
            
            .services-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (max-width: 768px) {
            .hero-content {
                padding: 40px 0;
            }
            
            .hero-title {
                font-size: 2rem;
            }
            
            .hero-subtitle {
                font-size: 2.5rem;
            }
            
            .hero-tagline {
                font-size: 2rem;
            }
            
            .services-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }
            
            .service-card {
                padding: 25px 15px;
            }
            
            .ratings-section {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
        }
        
        @media (max-width: 576px) {
            .hero-title {
                font-size: 1.8rem;
            }
            
            .hero-subtitle {
                font-size: 2.2rem;
            }
            
            .hero-tagline {
                font-size: 1.8rem;
            }
        }


        #services .card img {
  filter: grayscale(100%);
  transition: 0.3s ease;
}
#services .card:hover img {
  filter: none;
  transform: scale(1.1);
}
.cta-bg {


background: #52c234 !important;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #061700, #52c234) !important;  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #061700, #52c234) !important; /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


}


.about-image{
    
    
    object-fit: cover;
      width: 100%;
      height: 100%;
    
}
/*h1 , h2 , h3 , h4 , h5 , h6 {

line-height: 1;

}
*/
.marquee-wrapper {
      display: flex;
      align-items: center;
       
      overflow: hidden;
      
   background: var(--primary-green);
    }

    .marquee-title {
      background:   #008000;
      color: #fff;
      padding: 10px 15px;
      white-space: nowrap;
      font-weight: bold;
      height: 100%;
      display: flex;
      border-top-left-radius:12px ;
        border-bottom-left-radius:12px ;
      align-items: center;
    }

    .marquee-body {
      position: relative;
      overflow: hidden;
      white-space: nowrap;
     background: #909090;
      flex-grow: 1;
    }

    .marquee-text {
        background: #909090;
        color: #fff;
      display: inline-block;
      padding-left: 100%;
      font-size: 15px;
      font-weight: bold;
      animation: marquee 30s linear infinite;
    }

    .marquee-wrapper:hover .marquee-text {
      animation-play-state: paused;
      background:#909090;
    }

    @keyframes marquee {
      0% { transform: translateX(0); }
      100% { transform: translateX(-100%); }
    }

    .custom-bg {


background: var(--primary-green);


}

.page-header-section {
  background: linear-gradient(to right, var(--primary-green),   #CC5500);
     position: relative;
}

.page-header-section .page-title {
 
  font-weight: 700;
  color:  #fff;
}

.breadcrumb {
  background: transparent;
  padding: 0;
  margin-top: 5px;
}

.breadcrumb a {
  color: #fff;
  text-decoration: none;
}
/*
.breadcrumb a:hover {
  color: var(--primary-yellow);
  text-decoration: underline;
}*/

.breadcrumb-item .active {
  color: #fff !important;
  font-weight: 600;
}

.page-sub-title a{
color: #fff;


}
.page-sub-title .active {
color:#fff  !important;
font-weight: bold;
font-size: 18px;
 

}

.page-sub-title i{
color:#fff  !important;
 margin-left:5px ;
 margin-right: 5px;
 

}


 .header-body{
   background: orange;
   }
   .thumb-info-wrapper img  {
   border-radius: 12px  !important;
   }
   .info-box {
   display: flex;
   align-items: center;
   margin-bottom: 15px;
   }
   .info-icon {
   width: 80px;
   height: 80px;
   border: 2px solid white;
   border-radius: 50%;
   display: flex;
   align-items: center;
   justify-content: center;
   margin-right: 15px;
   font-size: 20px;
   }
   .info-icon  :hover{
   border: 2px do white;
   border-radius: 50%;
   }
   .info-text h6 {
   font-weight: bold;
   margin: 0;
   color: #fff;
   }
   .info-text p {
   margin: 0;
   font-size: 14px;
   color: #fff;
   }
   .custom-card {
   margin-bottom:15px ;
   color: white;
   text-align: left;
   border-radius: 6px;
   display: flex;
   align-items: center;
   justify-content: start;
   height: 100%;
   transition: all 0.3s ease;
   }
   .icon-circle {
   width: 80px;
   height: 80px;
   border: 2px solid white;
   border-radius: 50%;
   display: flex;
   align-items: center;
   justify-content: center;
   font-size: 24px;
   margin-right: 15px;
   flex-shrink: 0;
   transition: all 0.5s ease-in-out;
   }
   .custom-card:hover .icon-circle {
   border: 2px dotted white;
   transform: rotate(360deg);
   }
   @media (max-width: 576px) {
   .custom-card {
   flex-direction: column;
   text-align: center;
   }
   .icon-circle {
   margin: 0 auto 10px auto;
   }
   .icon-circle {
   width: 50px;
   height: 50px;
   border: 2px solid white;
   border-radius: 50%;
   display: flex;
   align-items: center;
   justify-content: center;
   font-size: 20px;
   margin-right: 15px;
   flex-shrink: 0;
   transition: all 0.5s ease-in-out;
   }
   }
   .text-section h6 {
   font-weight: bold;
   margin: 0;
   color: white;
   }
   .text-section p {
   margin: 0;
   font-size: 14px;
   color: white;
   }
   @media (max-width: 576px) {
   .custom-card {
   flex-direction: column;
   text-align: center;
   }
   .icon-circle {
   margin: 0 auto 10px auto;
   }
   }
   .whatsapp-card {
   color: white;
   text-align: center;
   border-radius: 8px;
   max-width: 100%;
   margin: auto;
   font-family: 'Segoe UI', sans-serif;
   transition: all 0.3s ease;
   }
   .whatsapp-icon {
   font-size: 30px;
   margin-bottom: 15px;
   }
   .whatsapp-text {
   font-weight: 600;
   font-size: 16px;
   color: white !important;
   margin: 0;
   }
   .whatsapp-card:hover .whatsapp-icon {
   animation: shake 0.5s;
   }
   @keyframes shake {
   0% { transform: translate(0px, 0px) rotate(0deg); }
   20% { transform: translate(-2px, 0px) rotate(-5deg); }
   40% { transform: translate(2px, 0px) rotate(5deg); }
   60% { transform: translate(-2px, 0px) rotate(-5deg); }
   80% { transform: translate(2px, 0px) rotate(5deg); }
   100% { transform: translate(0px, 0px) rotate(0deg); }
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


    .team-list img{

height:280px;




    }


    .popular-section img {

height: 250px;



    }




    .submit-btn {
      display: block;
      width: 110px;
      padding: 10px;
      margin: 0 auto;
      background-color: #4caf50;
      color: #fff;
      border: none;
      font-size: 15px;
      border-radius: 5px;
      cursor: pointer;
      transition: all 0.2s ease;
    }

    /* Shake animation */
    .submit-btn:hover {
      animation: shake 0.3s ease-in-out;
    }

    @keyframes shake {
      0% { transform: translateX(0); }
      25% { transform: translateX(-4px); }
      50% { transform: translateX(4px); }
      75% { transform: translateX(-4px); }
      100% { transform: translateX(0); }
    }

#header .header-btn-collapse-nav {

background:#fff;
color: #000;
font-size: 25px;
margin-right: 10px;



}







.course-card {
      position: relative;
      overflow: hidden;
      border-radius: 5px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out;
      cursor: pointer;
      margin-bottom: 20px;
      padding-bottom: 30px ;
      border: 1px solid #000;
      }
      .course-card:hover {
      transform: scale(1.03);
      }
      .course-img {
      width: 100%;
      height:400px;
      object-fit: cover;
/*      border-radius: 15px 15px 0 0;*/
      }


      .course-card h5 {

margin-top: 10px;
text-transform: capitalize;


      }
      
      .f-img{
          
          
      width: 100%;
      height: 300px;
      object-fit: cover;
      border-radius: 15px 15px 0 0;    
      }
     
      .course-hover {
      position: absolute;
      top: 100%;
      left: 0;
      width: 100%;
      background: #f8f9fa;
      padding: 20px;
      height: 100%;
      transition: top 0.4s ease;
      z-index: 10;
      }
      .course-card:hover .course-hover {
      top: 0;
      }
      .course-hover h5 {
      font-weight: bold;
      }
      .enroll-btn {
      margin-top: 10px;
      background-color: #28a745 !important;
      color: white;
      border-radius: 20px;
      padding: 6px 16px;
      text-decoration: none;
      display: inline-block;
      }
      .enroll-btn:hover {
      background-color: #218838;
      }
      /* Base Button Style */
    .btn-diagonal {
      position: relative;
      overflow: hidden;
      padding: 12px 28px;
      color: #fff;
      font-weight: 600;
      border-radius: 50px !important;
      border: none;
      z-index: 1;
      transition: color 0.3s ease;
    }

     .btn-diagonal::before {
      content: '';
      position: absolute;
      top: 100%;
      left: -100%;
      width: 200%;
      height: 200%;
      transform: rotate(-45deg);
      z-index: -1;
      transition: all 0.4s ease;
    }

    /* Variant 1: Classic Blue Slide */
    .btn-diagonal.blue {
      background: orange;
    }
    .btn-diagonal.blue::before {
      background: #00a5e8;
    }
    .btn-diagonal.blue:hover::before {
      top: -100%;
      left: 0%;
    }
        .btn-diagonal.blue:hover  {
  color: #fff;
    }

@media(max-width:768px){
 .course-img {
      width: 100%;
      height:350px;
      object-fit: cover;
 
      }

.f-img { 
    
    
     width: 100%;
      height:250px;
      object-fit: cover;
      border-radius: 15px 15px 0 0;
    
    
}




}


   .pdf-iframe {
      width: 100%;
      height: 80vh;
      border: none;
    }

    /* Hide iframe on small screens */
    @media (max-width: 768px) {
      .pdf-iframe {
        display: none;
      }
      .pdf-download {
        display: block;
      }
    }

    /* Hide button on larger screens */
    @media (min-width: 769px) {
      .pdf-download {
        display: none;
      }
    }


/* PRODUCT CARD */
.product-card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.15);
    padding: 15px;
    text-align: center;
    position: relative;
    transition: .3s;
}

.product-card:hover {
    transform: translateY(-4px);
}

/* SALE BADGE */
.sale-badge {
    position: absolute;
    top: 10px;
    right: 10px;
    background: #ff3b30;
    color: #fff;
    font-size: 12px;
    padding: 3px 8px;
    border-radius: 4px;
    font-weight: bold;
}

/* PRODUCT IMAGE – clean & centered */
.product-img {
    width: 80%;
    height: 200px;
    object-fit: contain;     /* keeps object clean like your sample */
    display: block;
    margin: 0 auto 10px auto;
}

/* TITLE */
.product-content h5 {
    font-size: 16px;
    margin: 0 0 5px 0;
}

/* PRICE */
.price {
    font-size: 18px;
    font-weight: bold;
    color: #000;
}

.old-price {
    font-size: 14px;
    text-decoration: line-through;
    color: #888;
    margin-left: 5px;
}

/* RESPONSIVE MEDIA QUERIES */
@media (max-width: 768px) {
    .product-img {
        height: 160px;
        width: 75%;
    }
}

@media (max-width: 480px) {
    .product-img {
        height: 140px;
        width: 70%;
    }

    .product-card {
        padding: 10px;
    }

    .product-content h5 {
        font-size: 14px;
    }
}

.fancy-card {
    position: relative;
    width: 280px;
    height: 280px;
    margin: auto;
    background: #f5f5f7;
    border-radius: 15px;
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Dark blue corners */
.corner {
    width: 70px;
    height: 70px;
    border: 8px solid #004a8f; /* Dark blue */
    position: absolute;
    border-radius: 12px;
}

.corner-top-right {
    top: -10px;
    right: -10px;
    border-left: none;
    border-bottom: none;
}

.corner-bottom-left {
    bottom: -10px;
    left: -10px;
    border-right: none;
    border-top: none;
}

/* Product image */
.fancy-img {
    width: 80%;
    height: auto;
    object-fit: contain;
}

   </style>
   <body>

    <?php
// Get CI instance
$CI =& get_instance();

// Load model once (safe even if already loaded)
$CI->load->model('Common_Model');

// Fetch all active categories for header
$category_list = $CI->Common_Model->FetchData(
    'mstr_category',
    "*",
    "deleted_status = 0 AND status = 1"
);
?>


      <div class="body">
          
    <div class="notice-top-bar bg-light " data-sticky-start-at="100">
                    <button class="hamburguer-btn hamburguer-btn-light notice-top-bar-close m-0 active" data-set-active="false">
                        <span class="close">
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                    <div class="container d-none">
                        <div class="row justify-content-center py-2">
                            <div class="col-9 col-md-12 text-center">
                                <p class="text-color-light mb-0"><strong>DEAL OF THE WEEK</strong> - Free Diagnosis & Break Checks - <strong><a href="#" class="text-color-light text-decoration-none custom-text-underline-1">Make an Appointment</a></strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <header id="header" class="" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile':true, 'stickyStartAt': 54, 'stickySetTop': '-54px', 'stickyChangeLogo': false}">
                    <div class="header-body header-body-bottom-border-fixed box-shadow-none border-top-0">
                        <div class="header-top header-top-small-minheight header-top-simple-border-bottom ">
                            <div class="container py-2">
                                <div class="header-row justify-content-between">
                                    <div class="header-column col-auto px-0">
                                        <div class="header-row">
                                            <div class="header-nav-top">
                                                <ul class="nav nav-pills position-relative">
                                                   <!--  <li class="nav-item d-none d-sm-block">
                                                        <span class="d-flex align-items-center font-weight-medium ws-nowrap text-3 ps-0"><a href="https://www.okler.net/cdn-cgi/l/email-protection#1f6f706d6b705f7b70727e7671317c7072" class="text-decoration-none text-color-dark text-color-hover-primary"><i class="icons icon-envelope font-weight-bold position-relative text-4 top-3 me-1"></i> <span class="__cf_email__" data-cfemail="24544b56504b64404b49454d4a0a474b49">[email&#160;protected]</span></a></span>
                                                    </li> -->
                                                    
                                                       <li class="nav-item nav-item-left-border nav-item-left-border-remove nav-item-left-border-sm-show">
                                                <div class="header-extra-info-icon">
                                                    <!-- <i class="icons icon-phone text-3 text-color-light position-relative top-3"></i> -->
                                                </div>
                                                <div class="header-extra-info-text line-height-2">
                                                    <div class="marquee-wrapper">
    <!--<div class="marquee-title">-->
    <!--  🔔 Announcements:-->
    <!--</div>-->
    <div class="marquee-body">
      <div class="marquee-text">
        JubiLax ONLINE SHOPPE PRIVATE
LIMITED , Official Website : www.jubilax.com , Contact : +91 958 399 9596 , E-Mail : jubilax@gmail.com .
      </div>
    </div>
  </div>
                                                </div>
                                            
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header-column justify-content-end col-auto px-0 d-none d-md-flex">
                                        <div class="header-row d-none">
                                            <nav class="header-nav-top">
                                                <ul class="header-social-icons social-icons social-icons-clean social-icons-icon-gray social-icons-medium custom-social-icons-divider">
                                                    <li class="social-icons-facebook">
                                                        <a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                                    </li>
                                                    <li class="social-icons-twitter">
                                                        <a href="https://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
                                                    </li>
                                                    <li class="social-icons-linkedin">
                                                        <a href="https://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-container container d-none d-md-block ">
                            <div class="header-row">
                                <div class="header-column w-100">

                                    <div class="header-row justify-content-center">
                                        <button class="btn header-btn-collapse-nav ms-4" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                            <img src="<?= base_url('website_assets/img/icons/menu.png'); ?>" alt=" " style="width: 40px; margin-right:20px !important ;">
                                        </button>
                                        
                                        <div class="header-logo z-index-2 col-lg-2 px-0">
                                            <a href="<?=site_url(' ') ?> ">
                                                <img alt="jubilax.com" width="120%" height="65"   src="<?=base_url('website_assets/img/jubilax.png') ?>">
                                            </a>
                                        </div>



                                        <div class="header-nav header-nav-links justify-content-end pe-lg-4 me-lg-3">
                                            <div class="header-nav-main header-nav-main-arrows header-nav-main-dropdown-no-borders header-nav-main-effect-3 header-nav-main-sub-effect-1">
                                                <nav class="collapse">
                                                    <ul class="nav nav-pills" id="mainNav">
                                                        <li><a href="<?=site_url(' ') ?>" class="nav-link ">Home</a></li>
                                                        <li><a href="<?=site_url('Site/aboutus ') ?> ">About us</a></li>
                                                         

<!-- 
<?php
$parents = [];
$children = [];

// organize data
foreach ($category_list as $cat) {

    // parent category
    if ($cat['parent_id'] == 0) {
        $cat['children'] = []; // prepare child array
        $parents[$cat['category_id']] = $cat;

    } else {
        // child category
        $children[$cat['parent_id']][] = $cat;
    }
}

// attach children to their parent
foreach ($children as $pid => $child_list) {
    if (isset($parents[$pid])) {
        $parents[$pid]['children'] = $child_list;
    }
}
?>

<?php foreach ($parents as $p): ?>
<li class="dropdown">
    <a class="nav-link dropdown-toggle"><?= $p['category_name']; ?></a>
    
    <ul class="dropdown-menu">

        <?php foreach ($p['children'] as $child): ?>
        <li>
            <a href="<?= base_url('products?category='.$child['category_id']); ?>"
               class="dropdown-item">
               <?= $child['category_name']; ?>
            </a>
        </li>
        <?php endforeach; ?>

    </ul>
</li>
<?php endforeach; ?>
 -->

  
<?php
$parents = [];
$children = [];

// Organize categories
foreach ($category_list as $cat) {

    if ($cat['parent_id'] == 0) {
        $cat['children'] = [];
        $parents[$cat['category_id']] = $cat;

    } else {
        $children[$cat['parent_id']][] = $cat;
    }
}

// Attach children to parents
foreach ($children as $pid => $child_list) {
    if (isset($parents[$pid])) {
        $parents[$pid]['children'] = $child_list;
    }
}

// LIMIT parent categories to 2
$parents = array_slice($parents, 0, 2, true);
?>

<?php foreach ($parents as $p): ?>
<li class="nav-item dropdown">

    <a class="nav-link dropdown-toggle" href="#" role="button"
       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?= htmlspecialchars($p['category_name']); ?>
    </a>

    <ul class="dropdown-menu">
        <?php foreach ($p['children'] as $child): ?>
        <li>
            <a href="<?= site_url('site/category_products/' . $child['category_id']); ?>"
               class="dropdown-item">
                <?= htmlspecialchars($child['category_name']); ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>

</li>
<?php endforeach; ?>








                                                        <!--  <li><a href="# ">Bathware</a></li>
                                                        <li><a href="" class="nav-link">  Opportunity</a></li>-->
                                                        <!-- <li><a href="<?=site_url('Site/brands ') ?>" class="nav-link">Contact Us</a></li> -->
<!-- 
       <form action="<?= site_url('site/search_product'); ?>" method="get" class="d-flex">
    <input type="text" name="keyword" class="form-control" 
           placeholder="Search products..." required>
    <button type="submit" class="btn btn-primary ms-2 mt-3">Search</button>
</form> -->




 <form class="d-none d-md-block mt-4" 
      action="<?= site_url('site/search_product'); ?>" 
      method="get">

    <div class="input-group input-group-sm" style="max-width: 220px;">
        <input type="text" name="keyword" class="form-control" 
           placeholder="Search products..." required>

        <button class="btn btn-primary" type="submit">
            Search
        </button>
    </div>

</form>






                                                        
                                                    </ul>

                                                </nav>
                                            </div>
                                        </div>
                               
                                        <div class="d-flex col-auto pe-0 ps-0  ">
                                            <div class="header-nav-features ps-0 ms-1">
                                               
                                                <div class="header-nav-feature header-nav-features-cart header-nav-features-cart-big d-inline-flex top-2 ms-2">
                                                     <?php if ($this->session->userdata('fullname')): ?>
        <a href="<?= site_url('Site/view_profile'); ?>" class="nav-link">
             <img src="<?= base_url('website_assets/img/icons/user.png'); ?>" alt=" " style="width: 30px;">
             <!--<?= $this->session->userdata('fullname'); ?>  -->
        </a>
    <?php else: ?>
        <!-- <a href="<?= site_url('Site/login') ?>" style="color:var(--primary-green); font-size: 18px;" class="nav-link fw-bold">
           
          <img src="<?= base_url('website_assets/img/icons/user.png'); ?>" alt=" " style="width: 30px;">
        </a> -->
    <?php endif; ?>
                                                 
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <?php $this->load->view('includes/user_menu');?>