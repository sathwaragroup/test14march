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
                    <h1 class="title">
                        Student Registration</h1>
                </div> 
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->

  
 
    <div class="rts-contact-form-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="rts-contact-fluid rts-section-gap">
                        <div class="rts-title-area contact-fluid text-center mb--20"> 
                            <h2 class="title">Register now to start your journey towards finding your ideal college seat.</h2>
                        </div>
                        <div class="form-wrapper">
                            <div id="form-messages"></div>
                            <form  action="#" method="post" id="studentForm">
                                <div class="row">
                        <input type="hidden" name="user_type" value="student" >
                                    <div class="col-md-4">
                                    <input type="text" name="first_name" placeholder="First Name" >
                                    </div>
                                    <div class="col-md-4">
                                    <input type="text" name="last_name" placeholder="Last Name" >
                                    </div>
                                    <div class="col-md-4">
                                    <input type="text" name="mobile" placeholder="Mobile" >
                                    </div>

                                    <div class="col-md-4">
                                    <input type="text" name="username" placeholder="User Name"  autocomplete="off">
                                    </div>
                                    <div class="col-md-4">
                                    <input type="email" name="email" placeholder="Email" autocomplete="off">
                                    </div>
                                    <div class="col-md-4">
                                    <input type="password" name="password" placeholder="Mobile"  autocomplete="off">
                                    </div>

                                    <div class="col-md-4">
                                    <select class="select-drop-down"name="courses" id="courses">
                                    <option value="">Courses</option>
                                    <option class="" value="1">B.Tech</option>
                                    <option class="" value="2">MBA</option>
                                    <option class="" value="3">MCA</option> 
                                    </select>
                                    </div>
                                    <div class="col-md-4">
                                    <select class="select-drop-down"name="department" id="department">
                                    <option value="">Department Type</option>
                                    <option class="" value="1">ECE</option>
                                    <option class="" value="2">CSE</option>
                                    <option class="" value="3">IOT</option>
                                    <option class="" value="4">CSE</option>
                                    <option class="" value="4">Data Science</option> 
                                    </select>
                                    </div>
                                    <div class="col-md-4">
                                    <input type="text" name="location" placeholder="Current Location" > 
                                    </div>
                                </div>   
                                <button type="submit" class="rts-btn btn-primary">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 


<?php  require_once 'template/footer.php';  ?>




<script type="text/javascript">
    

$("#studentForm").submit(function(e) {
    e.preventDefault();

    var formData = new FormData(this);

    $.ajax({
        url: newUrl + '/register_post',
        method: 'POST',
        data: formData,
        dataType: 'json',
        processData: false, 
        contentType: false, 
        success: function(res) {
            console.log(res);
        },
        error: function(error) {
            console.log(error);
        }
    });
});


</script>


<?php  require_once 'template/end.php';  ?>

