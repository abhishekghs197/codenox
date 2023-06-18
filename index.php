<?php 
session_start();
ob_start();
include 'config.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Laralink" />
    <!-- Favicon Icon -->
    <link rel="icon" href="assets/img/favicon1.png" />
    <!-- Site Title -->
    <title>It Development Services</title>
    <link rel="stylesheet" href="<?=$dir_loc?>assets/css/plugins/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=$dir_loc?>assets/css/plugins/lightgallery.min.css" />
    <link rel="stylesheet" href="<?=$dir_loc?>assets/css/plugins/slick.css" />
    <link rel="stylesheet" href="<?=$dir_loc?>assets/css/plugins/lightgallery.min.css" />
    <link rel="stylesheet" href="<?=$dir_loc?>assets/css/plugins/animate.css" />
    <link rel="stylesheet" href="<?=$dir_loc?>assets/css/style.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    
    <script src="<?=$dir_loc?>assets/js/plugins/jquery-3.6.0.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    
   
  </head>
  <body>
    
    <!-- Start Header Section -->
    <header class="cs-site_header cs-style1 text-uppercase cs-sticky_header">
      <div class="cs-main_header">
        <div class="container">
          <div class="cs-main_header_in">
            <div class="cs-main_header_left">
              <!--<a class="cs-site_branding" href="#">
                <img src="assets/img/logo-b2b.png" alt="Logo" />
                <img src="assets/img/logo-google.jpg" alt="Logo" />
              </a>-->
              <a href="https://www.brands2be.com/" class="cs-site_branding">
              <img src="https://www.brands2be.com/assets/img/logo-b2b.png" alt="Logo">
              </a>
                &nbsp;
              <a target="_blank" href="https://www.google.com/partners/agency?id=4930783339" class="cs-site_branding">
              <img src="https://www.brands2be.com/assets/img/logo-google.jpg" alt="Logo">
              </a>
            
            </div>
            <div class="cs-main_header_center">
              <div class="cs-nav cs-primary_font cs-medium">
                <ul class="cs-nav_list">
                  <li class="cs-mega_menu">
                    <a href="#">Home</a>
                    
                  </li>
                  <li>
                    <a href="#about_us">About US</a>
                  </li>
                  <li>
                    <a href="#our_service">Our Services</a>
                    
                  </li>
                  <li>
                    <a href="#our_service">Why Us?</a>
                    
                  </li>
                  <li>
                    <a href="#testimonial_04">Testimonials</a>
                    
                  </li>
                  <li>
                    <a href="#Contact_us">Contact Us</a>
                    
                  </li>
                </ul>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </header>
    
    <!-- End Header Section -->
    <!-- Start Hero -->
    <div class="cs-hero cs-style1 cs-bg cs-fixed_bg cs-shape_wrap_1" data-src="assets/img/hero_bg.jpg" id="home">
      <div class="cs-shape_1"></div>
      <div class="cs-shape_1"></div>
      <div class="cs-shape_1"></div>
      <div class="container">
        <div class="cs-hero_text">
          <h1 class="cs-hero_title wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.2s"> Revolutionary App & <br />Website Development </h1>
          <div class="cs-hero_info">
            <div>
              <a href="#" class="cs-text_btn">
              </a>
            </div>
            <div>
              <div class="cs-hero_subtitle">  Accelerate the growth of your business exponentially by leveraging the power of a strategically designed website or mobile app that embraces modern trends and technologies. </div>
              </br>
               <button type="button" class="thm-btn cta-one__btn" data-bs-toggle="modal" data-bs-target="#letstalk1">Enquire Now</button>
            </div>
            
          </div>
          
        </div>
      </div>
      
      <a href="#service" class="cs-down_btn"></a>
    </div>
    <!-- End Hero -->
    <!-- Start FunFact -->
    <section>
      <div class="container mt-3">
        <div class="cs-funfact_wrap cs-type1">
          <div class="cs-funfact_shape" data-src="assets/img/funfact_shape_bg.svg"></div>
          <div class="cs-funfact_left">
            <div class="cs-funfact_heading">
              <h2>You've Landed The Best!</h2>
              <p> If unparalled service and extraordinary results are what you are looking for, you're in safe hands! </p>
            </div>
          </div>
          <div class="cs-funfact_right">
            <div class="cs-funfacts">
              <div class="cs-funfact cs-style1">
                <div class="cs-funfact_number cs-primary_font cs-semi_bold cs-primary_color">
                  <span data-count-to="25" class="odometer"></span>+
                </div>
                <div class="cs-funfact_text">
                  <span class="cs-accent_color">+</span>
                  <p>Years of Experience</p>
                </div>
              </div>
              <div class="cs-funfact cs-style1">
                <div class="cs-funfact_number cs-primary_font cs-semi_bold cs-primary_color">
                  <span data-count-to="150" class="odometer"></span>+
                </div>
                <div class="cs-funfact_text">
                  <span class="cs-accent_color">+</span>
                  <p>Experts Onboard
                  </p>
                </div>
              </div>
              <div class="cs-funfact cs-style1">
                <div class="cs-funfact_number cs-primary_font cs-semi_bold cs-primary_color">
                  <span data-count-to="15" class="odometer"></span>+
                </div>
                <div class="cs-funfact_text">
                  <span class="cs-accent_color">+</span>
                  <p>Countries Served</p>
                </div>
              </div>
              <div class="cs-funfact cs-style1">
                <div class="cs-funfact_number cs-primary_font cs-semi_bold cs-primary_color">
                  <span data-count-to="500" class="odometer"></span>+
                </div>
                <div class="cs-funfact_text">
                  <span class="cs-accent_color">+</span>
                  <p>Apps Developed</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End FunFact -->
    <!-- Start Service Section -->
    <section id="service">
      <div class="cs-height_150 cs-height_lg_80"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-4">
            <div class="cs-section_heading cs-style1">
              <h3 class="cs-section_subtitle">What Can We Do</h3>
              <h2 class="cs-section_title">Services we can help you with</h2>
              <div class="cs-height_45 cs-height_lg_20"></div>
              <a href="#" class="cs-text_btn wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s" data-bs-toggle="modal" data-bs-target="#letstalk1">
                <span>At Your Service! </span>
                <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor"></path>
                </svg>
              </a>
            </div>
            <div class="cs-height_90 cs-height_lg_45"></div>
          </div>
          <div class="col-xl-8">
            <div class="row">
              <div class="col-lg-2 col-sm-6 cs-hidden_mobile"></div>
              <div class="col-lg-4 col-sm-6">
                <div class="cs-hobble">
                  <a href="#" class="cs-card cs-style1 cs-hover_layer1">
                    <img src="assets/img/Website_Development2.jpg" alt="Service" />
                    <div class="cs-card_overlay"></div>
                    <div class="cs-card_info">
                      <span class="cs-hover_layer3 cs-accent_bg"></span>
                      <h2 class="cs-card_title text-center">Website </br>Development</h2>
                    </div>
                  </a>
                </div>
                <div class="cs-height_0 cs-height_lg_30"></div>
              </div>
              <div class="col-lg-3 col-sm-6 cs-hidden_mobile"></div>
              <div class="col-lg-3 col-sm-6">
                <div class="cs-hobble">
                  
                </div>
                <div class="cs-height_0 cs-height_lg_30"></div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="cs-hobble">
                  
                </div>
                <div class="cs-height_0 cs-height_lg_30"></div>
              </div>
              <div class="col-lg-5 col-sm-6 cs-hidden_mobile"></div>
              <div class="col-lg-4 col-sm-6">
                <div class="cs-hobble">
                  <a href="service-details.html" class="cs-card cs-style1 cs-hover_layer1">
                    <img src="assets/img/App_Development2.jpg" alt="Service" />
                    <div class="cs-card_overlay"></div>
                    <div class="cs-card_info">
                      <span class="cs-hover_layer3 cs-accent_bg"></span>
                      <h2 class="cs-card_title text-center">App </br>Development</h2>
                    </div>
                  </a>
                </div>
                <div class="cs-height_0 cs-height_lg_30"></div>
              </div>
              <div class="col-lg-3 col-sm-6 cs-hidden_mobile"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- End about Section -->
   
    <div id="about_us" class="cs-height_150 cs-height_lg_80"></div>
    <section>
      <div  class="container">
        <div class="row">
          <div class="col-xl-5 col-lg-7">
            <div class="cs-section_heading cs-style1">
              <h3 class="cs-section_subtitle">About Our Agency</h3>
              <h2 class="cs-section_title">We’re Your Best Choice, Here’s Why! </h2>
              <div class="cs-height_30 cs-height_lg_20"></div>
              <p class="cs-m0">With a combined experience of over 25 years, our squad of expert professionals is on a mission to deliver mind-blowing services across diverse sectors. We specialize in conjuring up tailor-made solutions and out-of-the-box strategies that leaves no stone unturned in crafting exceptional apps and websites for you. Through detailed research, a thorough understanding of your target audience and a meticulous storyboarding,  we immerse ourselves in your brand's essence, creating a seamless user experience, ensuring every pixel tells your story! </p>
              <div class="cs-height_30 cs-height_lg_30"></div>
              <a href="#" class="cs-text_btn wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s" data-bs-toggle="modal" data-bs-target="#letstalk1">
                <span>Connect With Us! </span>
                <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor"></path>
                </svg>
              </a>
              <div class="cs-height_25 cs-height_lg_40"></div>
            </div>
          </div>
          <div class="col-lg-5 offset-xl-2">
            <img src="<?=$dir_loc?>assets/img/about_img2.jpg" alt="" class="w-100 cs-radius_15">
            <div class="cs-height_25 cs-height_lg_25"></div>
          </div>
          
        </div>
      </div>
    </section>
    
   
<div class="cs-height_110 cs-height_lg_40"></div>   
<!-- Start Related Service -->
<div id="our_service" class="container">
  <div class="row align-items-center">
    <div class="col-xl-5 col-lg-6">
      <div class="cs-radius_15 cs-shine_hover_1">
        <img class="cs-radius_15 w-100" src="assets/img/service_img_2.jpg" alt="Service Image">
      </div>
      <div class="cs-height_0 cs-height_lg_40"></div>
    </div>
    <div class="col-lg-6 offset-xl-1">
      <h2 class="cs-font_50 cs-m0">Our Technology, Your Growth Engine! </h2>
      <div class="cs-height_50 cs-height_lg_30"></div>
      <div class="row">
        <div class="col-lg-10">
          <ul class="cs-list cs-style1 cs-mp0">
            <li>
              <a href="#" class="cs-text_btn cs-type2">
                <svg width="100" height="16" viewBox="0 0 26 16" fill="none" xmlns="#">
                  <path d="M25.7071 8.70711C26.0976 8.31658 26.0976 7.68342 25.7071 7.29289L19.3431 0.928932C18.9526 0.538408 18.3195 0.538408 17.9289 0.928932C17.5384 1.31946 17.5384 1.95262 17.9289 2.34315L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.70711ZM0 9H25V7H0V9Z" fill="#FF4A17"/>
                </svg>                    
                <span>A website/app helps in creating brand awareness and showcasing your brand products or services to your prospective customers.  </span>              
              </a>
            </li>
            <li>
              <a href="#" class="cs-text_btn cs-type2">
                <svg width="100" height="16" viewBox="0 0 26 16" fill="none" xmlns="#">
                  <path d="M25.7071 8.70711C26.0976 8.31658 26.0976 7.68342 25.7071 7.29289L19.3431 0.928932C18.9526 0.538408 18.3195 0.538408 17.9289 0.928932C17.5384 1.31946 17.5384 1.95262 17.9289 2.34315L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.70711ZM0 9H25V7H0V9Z" fill="#FF4A17"/>
                </svg>                    
                <span>Having a well-designed website/app for your business is crucial as it enhances your organization's credibility and builds trust amongst people.</span>              
              </a>
            </li>
            <li>
              <a href="#" class="cs-text_btn cs-type2">
                <svg width="100" height="16" viewBox="0 0 26 16" fill="none" xmlns="#">
                  <path d="M25.7071 8.70711C26.0976 8.31658 26.0976 7.68342 25.7071 7.29289L19.3431 0.928932C18.9526 0.538408 18.3195 0.538408 17.9289 0.928932C17.5384 1.31946 17.5384 1.95262 17.9289 2.34315L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.70711ZM0 9H25V7H0V9Z" fill="#FF4A17"/>
                </svg>                    
                <span>A strategically designed website/app greatly enhances the global reach of a business, enabling it to reach customers and boost sales.</span>              
              </a>
            </li>
              
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Related Service -->

<div  class="cs-height_150 cs-height_lg_80"></div>
    <!-- Start Testimonial Section -->
    <section id="testimonial_04" class="cs-gradient_bg_1 cs-shape_wrap_3 cs-parallax">
      <div class="cs-shape_3 cs-to_up">
        <svg width="162" height="181" viewBox="0 0 162 181" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M156.833 178.434C156.833 177.053 157.954 175.932 159.335 175.932C160.716 175.932 161.837 177.053 161.837 178.434C161.837 179.814 160.716 180.935 159.335 180.935C157.954 180.935 156.833 179.814 156.833 178.434Z" fill="#FF4A17" />
          <path d="M117.65 178.434C117.65 177.053 118.771 175.932 120.152 175.932C121.533 175.932 122.653 177.053 122.653 178.434C122.653 179.814 121.533 180.935 120.152 180.935C118.771 180.935 117.65 179.814 117.65 178.434Z" fill="#FF4A17" />
          <path d="M78.4694 178.434C78.4694 177.053 79.5902 175.932 80.971 175.932C82.3517 175.932 83.4726 177.053 83.4726 178.434C83.4726 179.814 82.3517 180.935 80.971 180.935C79.5876 180.935 78.4694 179.814 78.4694 178.434Z" fill="#FF4A17" />
          <path d="M39.286 178.434C39.286 177.053 40.4069 175.932 41.7876 175.932C43.1684 175.932 44.2893 177.053 44.2893 178.434C44.2893 179.814 43.1684 180.935 41.7876 180.935C40.4069 180.935 39.286 179.814 39.286 178.434Z" fill="#FF4A17" />
          <path d="M0.102661 178.434C0.102661 177.053 1.22354 175.932 2.60429 175.932C3.98504 175.932 5.10591 177.053 5.10591 178.434C5.10591 179.814 3.98504 180.935 2.60429 180.935C1.22091 180.935 0.102661 179.814 0.102661 178.434Z" fill="#FF4A17" />
          <path d="M156.833 143.419C156.833 142.038 157.954 140.917 159.335 140.917C160.716 140.917 161.837 142.038 161.837 143.419C161.837 144.799 160.716 145.92 159.335 145.92C157.954 145.92 156.833 144.799 156.833 143.419Z" fill="#FF4A17" />
          <path d="M117.65 143.419C117.65 142.038 118.771 140.917 120.152 140.917C121.533 140.917 122.653 142.038 122.653 143.419C122.653 144.799 121.533 145.92 120.152 145.92C118.771 145.92 117.65 144.799 117.65 143.419Z" fill="#FF4A17" />
          <path d="M78.4694 143.419C78.4694 142.038 79.5902 140.917 80.971 140.917C82.3517 140.917 83.4726 142.038 83.4726 143.419C83.4726 144.799 82.3517 145.92 80.971 145.92C79.5876 145.92 78.4694 144.799 78.4694 143.419Z" fill="#FF4A17" />
          <path d="M39.286 143.419C39.286 142.038 40.4069 140.917 41.7876 140.917C43.1684 140.917 44.2893 142.038 44.2893 143.419C44.2893 144.799 43.1684 145.92 41.7876 145.92C40.4069 145.92 39.286 144.799 39.286 143.419Z" fill="#FF4A17" />
          <path d="M0.102661 143.419C0.102661 142.038 1.22354 140.917 2.60429 140.917C3.98504 140.917 5.10591 142.038 5.10591 143.419C5.10591 144.799 3.98504 145.92 2.60429 145.92C1.22091 145.92 0.102661 144.799 0.102661 143.419Z" fill="#FF4A17" />
          <path d="M156.833 108.404C156.833 107.023 157.954 105.902 159.335 105.902C160.716 105.902 161.837 107.023 161.837 108.404C161.837 109.785 160.716 110.906 159.335 110.906C157.954 110.906 156.833 109.787 156.833 108.404Z" fill="#FF4A17" />
          <path d="M120.152 110.906C121.533 110.906 122.653 109.786 122.653 108.404C122.653 107.022 121.533 105.902 120.152 105.902C118.77 105.902 117.65 107.022 117.65 108.404C117.65 109.786 118.77 110.906 120.152 110.906Z" fill="#FF4A17" />
          <path d="M80.9684 110.906C82.35 110.906 83.47 109.786 83.47 108.404C83.47 107.022 82.35 105.902 80.9684 105.902C79.5868 105.902 78.4668 107.022 78.4668 108.404C78.4668 109.786 79.5868 110.906 80.9684 110.906Z" fill="#FF4A17" />
          <path d="M39.286 108.404C39.286 107.023 40.4069 105.902 41.7876 105.902C43.1684 105.902 44.2893 107.023 44.2893 108.404C44.2893 109.785 43.1684 110.906 41.7876 110.906C40.4069 110.906 39.286 109.787 39.286 108.404Z" fill="#FF4A17" />
          <path d="M0.102661 108.404C0.102661 107.023 1.22354 105.902 2.60429 105.902C3.98504 105.902 5.10591 107.023 5.10591 108.404C5.10591 109.785 3.98504 110.906 2.60429 110.906C1.22091 110.906 0.102661 109.787 0.102661 108.404Z" fill="#FF4A17" />
          <path d="M156.833 73.3918C156.833 72.011 157.954 70.8901 159.335 70.8901C160.716 70.8901 161.837 72.011 161.837 73.3918C161.837 74.7725 160.716 75.8934 159.335 75.8934C157.954 75.8908 156.833 74.7725 156.833 73.3918Z" fill="#FF4A17" />
          <path d="M120.152 75.8934C121.533 75.8934 122.653 74.7734 122.653 73.3918C122.653 72.0102 121.533 70.8901 120.152 70.8901C118.77 70.8901 117.65 72.0102 117.65 73.3918C117.65 74.7734 118.77 75.8934 120.152 75.8934Z" fill="#FF4A17" />
          <path d="M80.9684 75.8934C82.35 75.8934 83.47 74.7734 83.47 73.3918C83.47 72.0102 82.35 70.8901 80.9684 70.8901C79.5868 70.8901 78.4668 72.0102 78.4668 73.3918C78.4668 74.7734 79.5868 75.8934 80.9684 75.8934Z" fill="#FF4A17" />
          <path d="M39.286 73.3918C39.286 72.011 40.4069 70.8901 41.7876 70.8901C43.1684 70.8901 44.2893 72.011 44.2893 73.3918C44.2893 74.7725 43.1684 75.8934 41.7876 75.8934C40.4069 75.8934 39.286 74.7725 39.286 73.3918Z" fill="#FF4A17" />
          <path d="M0.102661 73.3918C0.102661 72.011 1.22354 70.8901 2.60429 70.8901C3.98504 70.8901 5.10591 72.011 5.10591 73.3918C5.10591 74.7725 3.98504 75.8934 2.60429 75.8934C1.22091 75.8908 0.102661 74.7725 0.102661 73.3918Z" fill="#FF4A17" />
          <path d="M156.833 38.3766C156.833 36.9959 157.954 35.875 159.335 35.875C160.716 35.875 161.837 36.9959 161.837 38.3766C161.837 39.7574 160.716 40.8782 159.335 40.8782C157.954 40.8756 156.833 39.7574 156.833 38.3766Z" fill="#FF4A17" />
          <path d="M120.152 40.8782C121.533 40.8782 122.653 39.7582 122.653 38.3766C122.653 36.995 121.533 35.875 120.152 35.875C118.77 35.875 117.65 36.995 117.65 38.3766C117.65 39.7582 118.77 40.8782 120.152 40.8782Z" fill="#FF4A17" />
          <path d="M80.9684 40.8782C82.35 40.8782 83.47 39.7582 83.47 38.3766C83.47 36.995 82.35 35.875 80.9684 35.875C79.5868 35.875 78.4668 36.995 78.4668 38.3766C78.4668 39.7582 79.5868 40.8782 80.9684 40.8782Z" fill="#FF4A17" />
          <path d="M39.286 38.3766C39.286 36.9959 40.4069 35.875 41.7876 35.875C43.1684 35.875 44.2893 36.9959 44.2893 38.3766C44.2893 39.7574 43.1684 40.8782 41.7876 40.8782C40.4069 40.8782 39.286 39.7574 39.286 38.3766Z" fill="#FF4A17" />
          <path d="M0.102661 38.3766C0.102661 36.9959 1.22354 35.875 2.60429 35.875C3.98504 35.875 5.10591 36.9959 5.10591 38.3766C5.10591 39.7574 3.98504 40.8782 2.60429 40.8782C1.22091 40.8756 0.102661 39.7574 0.102661 38.3766Z" fill="#FF4A17" />
          <path d="M156.833 3.36198C156.833 1.98123 157.954 0.860352 159.335 0.860352C160.716 0.860352 161.837 1.98123 161.837 3.36198C161.837 4.74273 160.716 5.8636 159.335 5.8636C157.954 5.8636 156.833 4.74273 156.833 3.36198Z" fill="#FF4A17" />
          <path d="M117.65 3.36198C117.65 1.98123 118.771 0.860352 120.152 0.860352C121.533 0.860352 122.653 1.98123 122.653 3.36198C122.653 4.74273 121.533 5.8636 120.152 5.8636C118.771 5.8636 117.65 4.74273 117.65 3.36198Z" fill="#FF4A17" />
          <path d="M78.4694 3.36198C78.4694 1.98123 79.5902 0.860352 80.971 0.860352C82.3517 0.860352 83.4726 1.98123 83.4726 3.36198C83.4726 4.74273 82.3517 5.8636 80.971 5.8636C79.5876 5.8636 78.4694 4.74273 78.4694 3.36198Z" fill="#FF4A17" />
          <path d="M39.286 3.36198C39.286 1.98123 40.4069 0.860352 41.7876 0.860352C43.1684 0.860352 44.2893 1.98123 44.2893 3.36198C44.2893 4.74273 43.1684 5.8636 41.7876 5.8636C40.4069 5.8636 39.286 4.74273 39.286 3.36198Z" fill="#FF4A17" />
          <path d="M0.102661 3.36198C0.102661 1.98123 1.22354 0.860352 2.60429 0.860352C3.98504 0.860352 5.10591 1.98123 5.10591 3.36198C5.10591 4.74273 3.98504 5.8636 2.60429 5.8636C1.22091 5.8636 0.102661 4.74273 0.102661 3.36198Z" fill="#FF4A17" />
        </svg>
      </div>
      <div class="cs-height_130 cs-height_lg_80"></div>
      <div class="container">
        <div class="cs-testimonial_slider">
          <div class="cs-testimonial_slider_left">
            <div class="slider-nav cs-style1">
              <div class="slider-for_item item-nav">
                <div class="slider-nav_item">
                  <div class="cs-rotate_img">
                    <div class="cs-rotate_img_in">
                      <img src="assets/img/testimonial_1.jpg" alt="Nav Image" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="slider-for_item item-nav">
                <div class="slider-nav_item">
                  <div class="cs-rotate_img">
                    <div class="cs-rotate_img_in">
                      <img src="assets/img/testimonial_02.jpg" alt="Nav Image" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="slider-for_item item-nav">
                <div class="slider-nav_item">
                  <div class="cs-rotate_img">
                    <div class="cs-rotate_img_in">
                      <img src="assets/img/testimonial_03.jpg" alt="Nav Image" />
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          <div class="cs-testimonial_slider_right">
            <div class="slider-for cs-style1">
              <div class="slider-for_item">
                <div class="cs-testimonial cs-style1">
                  <div class="cs-testimonial_quote">
                    <svg width="42" height="38" viewBox="0 0 42 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M37.928 18.9982H31.4175V13.7899C31.4175 10.9172 33.7532 8.58154 36.6259 8.58154H37.2769C38.3593 8.58154 39.23 7.71077 39.23 6.62842V2.72217C39.23 1.63981 38.3593 0.769043 37.2769 0.769043H36.6259C29.4319 0.769043 23.605 6.59587 23.605 13.7899V33.3211C23.605 35.4777 25.3547 37.2274 27.5113 37.2274H37.928C40.0845 37.2274 41.8342 35.4777 41.8342 33.3211V22.9045C41.8342 20.7479 40.0845 18.9982 37.928 18.9982ZM14.4905 18.9982H7.98004V13.7899C7.98004 10.9172 10.3157 8.58154 13.1884 8.58154H13.8394C14.9218 8.58154 15.7925 7.71077 15.7925 6.62842V2.72217C15.7925 1.63981 14.9218 0.769043 13.8394 0.769043H13.1884C5.99436 0.769043 0.167542 6.59587 0.167542 13.7899V33.3211C0.167542 35.4777 1.91722 37.2274 4.07379 37.2274H14.4905C16.647 37.2274 18.3967 35.4777 18.3967 33.3211V22.9045C18.3967 20.7479 16.647 18.9982 14.4905 18.9982Z" fill="white" />
                    </svg>
                  </div>
                  <div class="cs-testimonial_text"> I can't thank your team enough for the outstanding website development. Our website now showcases our properties in the most captivating and user-friendly way. The attention to detail, intuitive navigation, and smooth functionality have made a significant impact on our online presence. The website has undoubtedly boosted our credibility in the market!  </div>
                  <div class="cs-rating" data-rating="4">
                    <div class="cs-rating_bg" data-src="assets/img/rating.svg"></div>
                    <div class="cs-rating_percentage" data-src="assets/img/rating.svg"></div>
                  </div>
                  <h2 class="cs-testimonial_avatar_name">Manish Sharma</h2>
                  <div class="cs-testimonial_avatar_designation text-uppercase"> Real Estate Agent  </div>
                </div>
              </div>
              <div class="slider-for_item">
                <div class="cs-testimonial cs-style1">
                  <div class="cs-testimonial_quote">
                    <svg width="42" height="38" viewBox="0 0 42 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M37.928 18.9982H31.4175V13.7899C31.4175 10.9172 33.7532 8.58154 36.6259 8.58154H37.2769C38.3593 8.58154 39.23 7.71077 39.23 6.62842V2.72217C39.23 1.63981 38.3593 0.769043 37.2769 0.769043H36.6259C29.4319 0.769043 23.605 6.59587 23.605 13.7899V33.3211C23.605 35.4777 25.3547 37.2274 27.5113 37.2274H37.928C40.0845 37.2274 41.8342 35.4777 41.8342 33.3211V22.9045C41.8342 20.7479 40.0845 18.9982 37.928 18.9982ZM14.4905 18.9982H7.98004V13.7899C7.98004 10.9172 10.3157 8.58154 13.1884 8.58154H13.8394C14.9218 8.58154 15.7925 7.71077 15.7925 6.62842V2.72217C15.7925 1.63981 14.9218 0.769043 13.8394 0.769043H13.1884C5.99436 0.769043 0.167542 6.59587 0.167542 13.7899V33.3211C0.167542 35.4777 1.91722 37.2274 4.07379 37.2274H14.4905C16.647 37.2274 18.3967 35.4777 18.3967 33.3211V22.9045C18.3967 20.7479 16.647 18.9982 14.4905 18.9982Z" fill="white" />
                    </svg>
                  </div>
                  <div class="cs-testimonial_text"> The app you developed for us has enhanced the way we engage with students and deliver educational content. Its intuitive interface, interactive features, and seamless performance have captivated our students and made learning enjoyable. Thank you for creating an app that has transformed our educational approach and empowered our students to thrive!  </div>
                  <div class="cs-rating" data-rating="4">
                    <div class="cs-rating_bg" data-src="assets/img/rating.svg"></div>
                    <div class="cs-rating_percentage" data-src="assets/img/rating.svg"></div>
                  </div>
                  <h2 class="cs-testimonial_avatar_name">Rajith Kaur</h2>
                  <div class="cs-testimonial_avatar_designation text-uppercase"> Educational Institute Owner  </div>
                </div>
              </div>
              <div class="slider-for_item">
                <div class="cs-testimonial cs-style1">
                  <div class="cs-testimonial_quote">
                    <svg width="42" height="38" viewBox="0 0 42 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M37.928 18.9982H31.4175V13.7899C31.4175 10.9172 33.7532 8.58154 36.6259 8.58154H37.2769C38.3593 8.58154 39.23 7.71077 39.23 6.62842V2.72217C39.23 1.63981 38.3593 0.769043 37.2769 0.769043H36.6259C29.4319 0.769043 23.605 6.59587 23.605 13.7899V33.3211C23.605 35.4777 25.3547 37.2274 27.5113 37.2274H37.928C40.0845 37.2274 41.8342 35.4777 41.8342 33.3211V22.9045C41.8342 20.7479 40.0845 18.9982 37.928 18.9982ZM14.4905 18.9982H7.98004V13.7899C7.98004 10.9172 10.3157 8.58154 13.1884 8.58154H13.8394C14.9218 8.58154 15.7925 7.71077 15.7925 6.62842V2.72217C15.7925 1.63981 14.9218 0.769043 13.8394 0.769043H13.1884C5.99436 0.769043 0.167542 6.59587 0.167542 13.7899V33.3211C0.167542 35.4777 1.91722 37.2274 4.07379 37.2274H14.4905C16.647 37.2274 18.3967 35.4777 18.3967 33.3211V22.9045C18.3967 20.7479 16.647 18.9982 14.4905 18.9982Z" fill="white" />
                    </svg>
                  </div>
                  <div class="cs-testimonial_text"> I am beyond impressed with the website development. You have transformed our online presence and elevated our brand to new heights. The website design perfectly captures our fashion offerings, and the user experience is seamless. Thank you for delivering an exceptional website that has exceeded our expectations!  </div>
                  <div class="cs-rating" data-rating="4">
                    <div class="cs-rating_bg" data-src="assets/img/rating.svg"></div>
                    <div class="cs-rating_percentage" data-src="assets/img/rating.svg"></div>
                  </div>
                  <h2 class="cs-testimonial_avatar_name">Payal Shah</h2>
                  <div class="cs-testimonial_avatar_designation text-uppercase">  Apparel Store Owner </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
      <div class="cs-height_130 cs-height_lg_80"></div>
    </section>
    <!-- end Testimonial -->
    <div class="cs-height_130 cs-height_lg_70"></div>
    <!-- Start CTA -->
    <section>
      <div class="container-fluid">
        <div class="cs-cta cs-style1 cs-bg text-center cs-shape_wrap_1 cs-position_1" data-src="assets/img/cta_bg.jpeg">
          <div class="cs-shape_1"></div>
          <div class="cs-shape_1"></div>
          <div class="cs-shape_1"></div>
          <div class="cs-cta_in">
            <h2 class="cs-cta_title cs-semi_bold cs-m0"> Let’s Catch Up!  </h2>
            <p class="cs-m0 mt-4">The Coffee and a Seamless Service is On Us! </p>
            <div class="cs-height_70 cs-height_lg_30"></div>
            
             
             <button type="button" class="thm-btn cta-one__btn" data-bs-toggle="modal" data-bs-target="#letstalk1">
 Get Started
</button>

          </div>
        </div>
      </div>
    </section>
    <!-- End CTA -->


    
    
    <!-- Start Footer -->
    <footer id="Contact_us" class="cs-fooer">
      <div class="cs-fooer_main">
        <div class="container">
          <div class="row">
            <div class="col-lg-5 col-sm-6">
              <div class="cs-footer_item">
                <div class="cs-text_widget">
                  <!--<img src="assets/img/logo-b2b.png" alt="" />
                  <img src="assets/img/logo-google.jpg" alt="" />-->
              <a href="https://www.brands2be.com/" class="cs-site_branding">
              <img src="https://www.brands2be.com/assets/img/logo-b2b.png" alt="Logo">
              </a>
                &nbsp;
              <a target="_blank" href="https://www.google.com/partners/agency?id=4930783339" class="cs-site_branding">
              <img src="https://www.brands2be.com/assets/img/logo-google.jpg" alt="Logo">
              </a>
              <p>&nbsp;</p>
                  <p> We excel in crafting exceptional websites and apps, combining cutting-edge technology with intuitive design, ensuring seamless user experiences that captivate and engage.  </p>
                </div>
                
              </div>
            </div>
            <div class="col-lg-2 col-sm-6">
              <div class="cs-footer_item ">
                <h2 class="cs-widget_title">Quick Links</h2>
                <ul class="cs-menu_widget cs-mp0">
                  <li>
                    <a href="#about_us">About Us</a>
                  </li>
                  <li>
                    <a href="#our_service">Our Services</a>
                  </li>
                  <li>
                    <a href="#">Why Us?</a>
                  </li>
                  <li>
                    <a href="#testimonial_04">Testimonials</a>
                  </li>
                  <li>
                    <a href="#Contact_us">Contact Us</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6">
              <div class="cs-footer_item ">
                <h2 class="cs-widget_title">Contact & Address</h2>
                <ul class="cs-menu_widget cs-mp0">
                  <li>Call Us :   +91 9007476419</li>
                  <li>Address: </li>
                  <li>Kolkata, West Bengal, India  
                    16C, Ashutosh Mukherjee Rd, near Homeland Mall, Kolkata - 700020 </br></br> Bengaluru, Karnataka, India
                    25th Main Road 9th Block, Jayanagar West Point Building, Bengaluru, Karnataka - 560069 </br></br> Indore, Madya Pradesh, India
                    4 Joy Builder Colony
                    Patrakar Square
                    Saket - 452001</li>
                </ul>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      
     <div class="container">
      <div class="cs-bottom_footer">
        <div class="cs-bottom_footer_left">
          <div class="cs-copyright">Copyright © 2023 Brands2be.</div>
        </div>
        <div class="cs-bottom_footer_right">
          <ul class="cs-footer_links cs-mp0">
            <li><a href="https://www.brands2be.com/privacy-policy">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
    </div>

      <a href="tel:919007476419" class="getin" target="_blank">
        <i class="fa fa-phone getin-call"></i>
        </a>
      

        <a href="https://wa.me/message/PM6IZEYCBRA2D1" class="float" target="_blank">
          <i class="fab fa-whatsapp my-float"></i>
          </a>

          





    </footer>
    


    <!-- End Footer -->
    <span class="cs-scrollup">
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 10L1.7625 11.7625L8.75 4.7875V20H11.25V4.7875L18.225 11.775L20 10L10 0L0 10Z" fill="currentColor" />
      </svg>
    </span>
    <!-- Start Video Popup -->
    <div class="cs-video_popup">
      <div class="cs-video_popup_overlay"></div>
      <div class="cs-video_popup_content">
        <div class="cs-video_popup_layer"></div>
        <div class="cs-video_popup_container">
          <div class="cs-video_popup_align">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="about:blank"></iframe>
            </div>
          </div>
          <div class="cs-video_popup_close"></div>
        </div>
      </div>
    </div>
    <!-- End Video Popup -->
    <!-- Script -->
    <!--
    <script src="<?=$dir_loc?>assets/js/plugins/isotope.pkg.min.js"></script>
    <script src="<?=$dir_loc?>assets/js/plugins/jquery.slick.min.js"></script>
    <script src="<?=$dir_loc?>assets/js/plugins/jquery.counter.min.js"></script>
    <script src="<?=$dir_loc?>assets/js/plugins/lightgallery.min.js"></script>
    <script src="<?=$dir_loc?>assets/js/plugins/wow.min.js"></script>
    <script src="<?=$dir_loc?>assets/js/plugins/gsap.min.js"></script>
    <script src="<?=$dir_loc?>assets/js/main.js"></script>-->
    
    
  
  <script src="https://www.brands2be.com/assets/js/plugins/isotope.pkg.min.js"></script>
  <script src="https://www.brands2be.com/assets/js/plugins/jquery.slick.min.js"></script>
  <script src="https://www.brands2be.com/assets/js/main.js"></script>
  <script src="assets/js/script-carrusal.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  
  
  
  


    <script src="https://www.brands2be.com/assets/js/plugins/lightgallery.min.js"></script>
    <script src="https://www.brands2be.com/assets/js/plugins/wow.min.js"></script>
    <script src="https://www.brands2be.com/assets/js/plugins/gsap.min.js"></script>
    
    <script>

	$(document).ready(function(){
   setTimeout(function(){
       $('#letstalk1').modal('show');
   }, 5000);
});

</script>


 <div class="modal fade" id="letstalk1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Your Dream Website/App is a Click Away!</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
          <span class="mandate">* required field</span>
        <form class="text-center" method="post" action="enquiry-process.php" id="contact-form" enctype="multipart/form-data" >
          <input type="text" name="name" required="required"  class="username form-control" placeholder="Name*"/>
            <input type="text" name="phone" required="required"  class="username form-control" placeholder="Phone Number*" pattern="[1-9]{1}[0-9]{9}" minlength="10" maxlength="10"/>
          <input type="email" name="email" required="required"  class="username form-control" placeholder="Email ID*"/>
           <!--<input type="text" required="required" name="company_name" class="username form-control" placeholder="Company Name*"/>
           <input type="text" required="required" name="designation" class="username form-control" placeholder="Designation*"/>-->
		    <input type="text" required="required" name="solution_discuss" class="username form-control" placeholder="Message*"/>
		    <div class="input g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LdtnuMgAAAAADjCyZMQlcMBQUPblyrFOfbdJEFB" required="required" ></div>
          <input class="btn login" type="submit" value="Request Call Back!" />
          </form>
      </div>
      
    </div>
  </div>
</div>

  </body>


</html>