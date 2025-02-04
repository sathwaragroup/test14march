    <!-- start header area -->
    <!-- start header area -->
    <header class="header--sticky header-one ">
        <div class="header-top header-top-one bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-xl-block d-none">
                        <div class="left">
                            <div class="mail">
                                <a href="mailto:webmaster@example.com"><i class="fal fa-envelope"></i> info@mycollegeseat.com</a>
                            </div>
                            <div class="working-time">
                                <p><i class="fa fa-phone"></i> +91 7997 998567 </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-xl-block d-none">
                        <div class="right">
                            <ul class="top-nav">
                                <li><a href="#"> &nbsp; </a></li>
                                <li><a href="#"> &nbsp; </a></li>
                                <li><a href="#"> &nbsp; </a></li>
                            </ul>
                            <ul class="social-wrapper-one">
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/my_college_seat/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/my-college-seat/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCDmT_ZeQkVwB4KMQWBqx-8A" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-main-one bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4">
                        <div class="thumbnail thumbnail-logo">
                            <a href="<?php echo BASE_URL;?>">
                                <img src="../assets/images/logo.png" alt=" ">
                            </a>
                        </div>
                    </div>
                    <div class=" col-xl-9 col-lg-8 col-md-8 col-sm-8 col-8">
                        <div class="main-header">
                            <nav class="nav-main mainmenu-nav d-none d-xl-block">
                                <ul class="mainmenu">   
                                    <li><a class="nav-item" href="<?php echo BASE_URL;?>index">Student</a></li>
                                    <li><a class="nav-item" href="<?php echo BASE_URL;?>about">About Us</a></li>
                                    <li><a class="nav-item" href="<?php echo BASE_URL;?>college">College</a></li>
                                    <li><a class="nav-item" href="<?php echo BASE_URL;?>student_registration">Student Registration</a></li>
                                    <li><a class="nav-item" href="<?php echo BASE_URL;?>college_registration">College Registration</a></li>
                                </ul>
                            </nav>

<?php
if (isset($_SESSION['userData']) && !empty($_SESSION['userData'])) { ?>

                        
                       

                            <div class="button-area">  
                            <a href="logout" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn">Logout</a> 
                                <button id="menu-btn" class="menu rts-btn btn-primary-alta ml--20 ml_sm--5">
                                    <img class="menu-dark" src="../assets/images/icon/menu.png" alt="Menu-icon">
                                    <img class="menu-light" src="../assets/images/icon/menu-light.png" alt="Menu-icon">
                                </button>
                            </div>
                  

<?php   }else{    ?>   

                        <div class="button-area">  
                            <a href="login" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn">Login</a> 
                                <button id="menu-btn" class="menu rts-btn btn-primary-alta ml--20 ml_sm--5">
                                    <img class="menu-dark" src="../assets/images/icon/menu.png" alt="Menu-icon">
                                    <img class="menu-light" src="../assets/images/icon/menu-light.png" alt="Menu-icon">
                                </button>
                            </div>

<?php   }    ?>                     


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End header area -->

    <div id="side-bar" class="side-bar">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="rts-sidebar-menu-desktop">
            <a class="logo-1" href="index"><img class="logo" src="../assets/images/logo.png" alt=""></a> 
            <div class="body d-none d-xl-block">
                <p class="disc">
                    We are revolutionising the college selection process by connecting students with their ideal institution. MyCollegeSeat empowers aspiring minds to discover, compare, and choose the perfect college that aligns with their aspirations and goals.
                </p>
                <div class="get-in-touch">
                    <!-- title -->
                    <div class="h6 title">Get In Touch</div>
                    <!-- title End -->
                    <div class="wrapper">
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-phone-alt"></i>
                            <a href="tel"+91 7997 998567">+91 7997 998567</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto: mycollegeseat2024@gmail.com"> mycollegeseat2024@gmail.com</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-globe"></i>
                            <a href="www.referenceglobe.com" target="_blank">www.referenceglobe.com</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-map-marker-alt"></i>
                            <a href="#">Swathi Plaza,3rd Floor, Opp lane to Indo-US Hospital, Shyam Karan Road, Near Lal Bungalow, Begumpet, Hyderabad 500016.</a>
                        </div>
                        <!-- single ENd -->
                    </div>
                    <div class="social-wrapper-two menu"> 
                        <a href="https://www.instagram.com/my_college_seat/" target="_blank"><i class="fab fa-instagram"></i></a> 
                        <a href="www.linkedin.com/in/my-college-seat-undefined-ba164a2b3" target="_blank"><i class="fab fa-linkedin"></i></a>  
                        <a href="https://www.youtube.com/channel/UCDmT_ZeQkVwB4KMQWBqx-8A" target="_blank"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="body-mobile d-block d-xl-none">
                <nav class="nav-main mainmenu-nav">
                    <ul class="mainmenu"> 
                        <li class="menu-item"><a class="menu-link" href="index"> Student </a></li> 
                        <li class="menu-item"><a class="menu-link" href="about-us"> About Us </a></li> 
                        <li class="menu-item"><a class="menu-link" href="college"> College </a></li> 
                        <li class="menu-item"><a class="menu-link" href="student-registration"> Student Registration </a></li> 
                        <li class="menu-item"><a class="menu-link" href="college-registration"> College Registration </a></li> 
                    </ul>
                </nav>
                <div class="social-wrapper-two menu mobile-menu">
                    <a href="#"><i class="fab fa-facebook-f"></i></a> 
                    <a href="https://www.instagram.com/my_college_seat/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCDmT_ZeQkVwB4KMQWBqx-8A" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="www.linkedin.com/in/my-college-seat-undefined-ba164a2b3" target="_blank"><i class="fab fa-linkedin"></i></a> 
                </div> 
            </div>
        </div>
        <!-- inner menu area desktop End -->
    </div>