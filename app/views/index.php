<?php
require_once 'template/header.php';
require_once 'template/sidebar.php';
?>



    <div class="search-input-area">
        <div class="container">
            <div class="search-input-inner">
                <div class="input-div">
                    <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                    <button><i class="far fa-search"></i></button>
                </div>
            </div>
        </div>
        <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
    </div>

    <div id="anywhere-home">
    </div>
    <!-- ENd Header Area -->

 

    <div class="rts-banner-area rts-banner-one">
        <div class="swiper mySwiper banner-one banner-one-5">
            <div class="swiper-wrapper swiper-wrapper-5">
          <div class="swiper-slide swiper-slide-5"> 
              <div class="row">
                <div class="col-md-4">
              
                </div>
                <div class="col-md-8">
                <h1 class="title slider-text-styles-2"> Tired of reaching colleges for admission ? </h1> 
                <p class="main-slider-text">Let colleges approach you</p>
                </div>
              </div> 
            </div>      
            <!-- <div class="swiper-slide two"> 
              <div class="row">
                <div class="col-md-6"> 
                    <img src="<?php echo ASSETS_URL; ?>images/slider-cap-image.png" alt="">
                </div>
                <div class="col-md-6">
                <h1 class="title slider-text-styles-2"> Let colleges approach you  </h1> 
                </div>
              </div> 
            </div>   -->
            <div class="swiper-pagination"></div>
        </div> 
    </div>

    
    <!-- <div class="rts-banner-area rts-banner-one">
        <div class="swiper mySwiper banner-one">
            <div class="swiper-wrapper">
                <div class="swiper-slide"> 
                    <div class="banner-one-inner text-start"> 
                        <h1 class="title ">Your compass for a personalised educational journey! </h1> 
                    </div> 
                </div>
                 <div class="swiper-slide two"> 
                    <div class="banner-one-inner text-start"> 
                        <h1 class="title">Say goodbye to uncertainty and hello to a tailored academic adventure with My College Seat!</h1> 
                    </div> 
                </div>     
            </div>
            <div class="swiper-pagination"></div>
        </div> 
    </div> -->
    

    <div class="rts-customer-feedback-area-six rts-section-gap-2 bg-feedback-seven">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-area text-center">
                        <p class="pre-title" style="font-size: 20px;">
                        We're transforming college selection with MyCollegeSeat. Our platform helps students find the perfect college match by comparing options and aligning with their aspirations and goals.
                        </p> 
                    </div>
                </div>
            </div> 
        </div>
    </div>


    <div class="rts-contact-form-area mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rts-title-area team text-center"> 
                        <h2 class="title">Sign up now! Your preferred colleges will reach you directly within 24 to 48 hours.</h2>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col-md-12">
                    <div class="rts-contact-fluid"> 
                        <div class="form-wrapper">
                            <div id="form-messages"></div>
                            <form id="contact-form" action="#" method="post">
                                <div class="row">
                                <p style="margin: 0px 10px;">Student Details</p>
                                     <div class="col-md-3">
                                     <input type="text" name="name" placeholder="Your Name" required="">
                                     </div>
                                     <div class="col-md-3">
                                     <input type="email" name="email" placeholder="Email Address" required="">
                                     </div>
                                     <div class="col-md-3">
                                     <input type="text" name="name" placeholder="Your Name" required="">
                                     </div>
                                     <div class="col-md-3">
                                     <input type="email" name="email" placeholder="Email Address" required="">
                                     </div>
                                </div>

                                <div class="row"> 
                                <hr/>
                                <p style="margin: 0px 10px;">Preferred Course Details</p>
                                     <div class="col-md-6">
                                     <input type="text" name="name" placeholder="Select Course" required="">
                                     </div>
                                     <div class="col-md-6">
                                     <input type="email" name="email" placeholder="Select Departmet" required=""> 
                                     </div>
                                     </div> 

                                     <div class="row"> 
                                     <hr/>
                                     <p style="margin: 0px 10px;">Preferred College Details (Max. 5 Preferences)</p>
                                     <div class="col-md-4">
                                     <input type="text" name="name" placeholder="Enter State" required="">
                                     </div>
                                     <div class="col-md-4">
                                     <input type="email" name="email" placeholder="Enter Location" required=""> 
                                     </div>
                                     <div class="col-md-4">
                                     <input type="text" name="name" placeholder="Preferred College" required="">
                                     </div>
                                     </div>  

                                     <div class="row"> 
                                     <div class="col-md-12">
                                     <button type="submit" class="rts-btn btn-primary add-more-colleges-btn pull-right"><i class="fa fa-plus"></i></button>
                                     </div>  
                                     </div>   
                                <button type="submit" class="rts-btn btn-primary">Submit</button> <br/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <div class="rts-about-area rts-section-gap rts-section-gap-2 bg-about-sm-shape">
        <div class="container">
            <div class="row g-5 align-items-center">
                <!-- about left -->
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 order-md-2 order-sm-2 order-2 mt_md--50 mt_sm--50">
                    <div class="rts-title-area"> 
                        <h2 class="title"> Your Personalised College Journey Starts Here! </h2>
                    </div>
                    <div class="about-inner">
                        <p class="disc">
                        <strong>Personalised Guidance: </strong> My College Seat offers personalised guidance tailored to each student's unique needs and aspirations, ensuring they find the college that best fits their goals and preferences. 
                        </p> 
                        <p class="disc">
                       <strong> Comprehensive Resources: </strong> My College Seat provides access to a wealth of insightful resources, including detailed information about colleges, academic programs, campus life, and extracurricular activities, empowering students to make informed decisions. 
                        </p> 
                        <p class="disc">
                        <strong>Future-Focused Approach: </strong> Gain access to resources and guidance that prepare you for success in college and beyond. 
                        </p> 
                        <p class="disc">
                        <strong>Accessible Anytime, Anywhere: </strong> Take control of your college search anytime, anywhere, with our mobile-friendly platform.
                        </p>   
                    </div>
                </div>
                <!-- about right -->

                <!-- about-right Start-->
                <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-2 order-md-1 order-sm-1 order-1">
                    <div class="about-one-thumbnail">
                        <img src="<?php echo ASSETS_URL; ?>images/about-01.jpg" alt="about-finbiz"> 
                        <br><br>
                    </div> 
                </div>
                <!-- about-right end -->
            </div>
        </div>
    </div>
    <!-- rts about us section end -->


    <!-- rts features area start -->
    <div class="rts-feature-area rts-section-gap">
        <div class="container-fluid padding-controler plr--120">
            <div class="row bg-white-feature  pt--120 pb--50">
                <div class="col-xl-6 col-lg-12">
                    <div class="feature-left-area">
                        <img src="<?php echo ASSETS_URL; ?>images/circle-image-good.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="rts-title-area feature text-start pl--30 pl_sm--0">
                        <!-- <p class="pre-title">
                        About us
                        </p> -->
                        <h2 class="title feature-title"> About Us </h2>
                        <p class="about-home-text mb-0">  Step into a new era of college admissions with My College Seat. Founded by passionate advocates of education, our team of experts and tech enthusiasts strives to democratise access.   </p> 
                        <p class="about-home-text mb-0">  We navigate a dynamic and intuitive space designed to help you explore diverse academic opportunities.  </p> 

                        <div class="row about-founder-wrapper align-items-center mt--40">  
                            <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                                <a href="about-us.php" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn  quote-btn">Read More</a>
                            </div>
                            <!-- left founder area -->
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <!-- rts features area end -->

   


    <div class="working-process-area rts-section-gap-3 working-process-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rts-title-area team text-center"> 
                        <h2 class="title">Your Study Goal</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20 align-items-center">
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12"> 
                    <div class="rts-working-process-1 text-center">
                        <div class="inner">
                            <div class="icon icon-images">
                                <img src="<?php echo ASSETS_URL; ?>images/engineering.png" alt="Working_process">
                            </div>
                        </div>
                        <div class="content">
                            <h6 class="title">Engineering</h6> 
                        </div>
                    </div> 
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12"> 
                    <div class="rts-working-process-1 text-center">
                        <div class="inner">
                            <div class="icon icon-images">
                                <img src="<?php echo ASSETS_URL; ?>images/management.png" alt="Working_process">
                            </div>
                        </div>
                        <div class="content">
                            <h6 class="title">Management</h6> 
                        </div>
                    </div> 
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12"> 
                    <div class="rts-working-process-1 text-center">
                        <div class="inner">
                            <div class="icon icon-images">
                                <img src="<?php echo ASSETS_URL; ?>images/commerce.png" alt="Working_process">
                            </div>
                        </div>
                        <div class="content">
                            <h6 class="title">Commerce</h6> 
                        </div>
                    </div> 
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12"> 
                    <div class="rts-working-process-1 text-center">
                        <div class="inner">
                            <div class="icon icon-images">
                                <img src="<?php echo ASSETS_URL; ?>images/arts.png" alt="Working_process">
                            </div>
                        </div>
                        <div class="content">
                            <h6 class="title">Arts</h6> 
                        </div>
                    </div> 
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12"> 
                    <div class="rts-working-process-1 text-center">
                        <div class="inner">
                            <div class="icon icon-images">
                                <img src="<?php echo ASSETS_URL; ?>images/medical.png" alt="Working_process">
                            </div>
                        </div>
                        <div class="content">
                            <h6 class="title">Medical</h6> 
                        </div>
                    </div> 
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 col-12"> 
                    <div class="rts-working-process-1 text-center">
                        <div class="inner">
                            <div class="icon icon-images">
                                <img src="<?php echo ASSETS_URL; ?>images/design.png" alt="Working_process">
                            </div>
                        </div>
                        <div class="content">
                            <h6 class="title">Design</h6> 
                        </div>
                    </div> 
                </div>
                
              
               
            </div>
        </div>
    </div>

 
    <!-- start team section -->
    <div class="rts-team-area rts-section-gap-4 partner-colleges">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rts-title-area team text-center"> 
                        <h2 class="title">Our Partner Colleges</h2>
                    </div>
                </div>
            </div>
            <div class="row g-3 mt--0 mb-3"> 
                <div class="swiper mySwiperh1_team">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="team-single-one-start">
                                <div class="team-image-area">
                                    <a href="#">
                                        <img src="<?php echo ASSETS_URL; ?>images/client/ref-client-1.jpg" alt="Business_Team_single"> 
                                    </a>
                                </div> 
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-single-one-start">
                                <div class="team-image-area">
                                    <a href="#">
                                        <img src="<?php echo ASSETS_URL; ?>images/client/ref-client-2.jpg" alt="Business_Team_single"> 
                                    </a>
                                </div> 
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-single-one-start">
                                <div class="team-image-area">
                                    <a href="#">
                                        <img src="<?php echo ASSETS_URL; ?>images/client/ref-client-3.jpg" alt="Business_Team_single"> 
                                    </a>
                                </div> 
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-single-one-start">
                                <div class="team-image-area">
                                    <a href="#">
                                        <img src="<?php echo ASSETS_URL; ?>images/client/ref-client-4.jpg" alt="Business_Team_single"> 
                                    </a>
                                </div> 
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-single-one-start">
                                <div class="team-image-area">
                                    <a href="#">
                                        <img src="<?php echo ASSETS_URL; ?>images/client/ref-client-5.jpg" alt="Business_Team_single"> 
                                    </a>
                                </div> 
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-single-one-start">
                                <div class="team-image-area">
                                    <a href="#">
                                        <img src="<?php echo ASSETS_URL; ?>images/client/ref-client-6.jpg" alt="Business_Team_single"> 
                                    </a>
                                </div> 
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-single-one-start">
                                <div class="team-image-area">
                                    <a href="#">
                                        <img src="<?php echo ASSETS_URL; ?>images/client/ref-client-7.jpg" alt="Business_Team_single"> 
                                    </a>
                                </div> 
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-single-one-start">
                                <div class="team-image-area">
                                    <a href="#">
                                        <img src="<?php echo ASSETS_URL; ?>images/client/ref-client-8.jpg" alt="Business_Team_single"> 
                                    </a>
                                </div> 
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-single-one-start">
                                <div class="team-image-area">
                                    <a href="#">
                                        <img src="<?php echo ASSETS_URL; ?>images/client/ref-client-9.jpg" alt="Business_Team_single"> 
                                    </a>
                                </div> 
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-single-one-start">
                                <div class="team-image-area">
                                    <a href="#">
                                        <img src="<?php echo ASSETS_URL; ?>images/client/ref-client-10.jpg" alt="Business_Team_single"> 
                                    </a>
                                </div> 
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-single-one-start">
                                <div class="team-image-area">
                                    <a href="#">
                                        <img src="<?php echo ASSETS_URL; ?>images/client/ref-client-11.jpg" alt="Business_Team_single"> 
                                    </a>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end team section -->
 

<?php  require_once 'template/footer.php';  ?>

<script type="text/javascript">
    


</script>

<?php  require_once 'template/end.php';  ?>