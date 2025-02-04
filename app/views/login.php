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

    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title"> Login / SignUp </h1>
                </div> 
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

    <div class="rts-pricing-plane rts-section-gap bg-pricing-bg-h2 margin-dec-padding-con">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pricing-tab-button-area title-area pricing-h2">  
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Login</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"> Sign Up </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-3 mb-5">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row align-items-center g-0"> 
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="contact-form-area-one"> 
                        <div id="login-messages"></div>
                        <form id="login"  method="post">
                            <div class="name-email">
                                <input type="email" placeholder="Email" name="email" required> 
                            </div>
                            <div class="name-email">
                                <input type="password" placeholder="Password" name="password" required> 
                            </div> 
                            <button type="submit" class="rts-btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row align-items-center g-0"> 
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="contact-form-area-one">
                          
                        <div id="register-messages"></div>
                        <form id="register" action="#" method="post">
                            <div class="name-email">
                                <input type="text" placeholder="Full Name" name="name" required> 
                            </div>
                            <div class="name-email">
                                <input type="text" placeholder="Email" name="name" required> 
                            </div>
                            <div class="name-email">
                                <input type="text" placeholder="Mobile Number" name="name" required> 
                            </div>
                            <div class="name-email">
                                <input type="text" placeholder="Studying In" name="name" required> 
                            </div> 
                            <button type="submit" class="rts-btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
   
<?php  require_once 'template/footer.php';  ?>

<script type="text/javascript">
    

$("#login").submit(function(e) {
    e.preventDefault();

    var formData = new FormData(this);

    $.ajax({
        url: newUrl + '/login_post',
        method: 'POST',
        data: formData,
        dataType: 'json',
        processData: false, 
        contentType: false, 
        success: function(res) {
            if (res.status == 200) {

                window.location.href = newUrl+"/";
            }
        },
        error: function(error) {
            console.log(error);
        }
    });
});


</script>

<?php  require_once 'template/end.php';  ?>