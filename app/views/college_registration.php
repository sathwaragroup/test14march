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
                        College Registration</h1>
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
                            <h2 class="title">College Registration Form</h2>
                        </div>
                        <div class="form-wrapper">
                            <div id="form-messages"></div>



    <form id="contact-form" action="#" method="post">
        <div class="row">
        <div class="col-md-4">
        <input type="text" name="college_name" placeholder="Enter College Name" required="">
        </div>
        <div class="col-md-4">
        <input type="text" name="university_name" placeholder="Enter University Name" required="" autocomplete="off">
        </div>
        <div class="col-md-4">
        <select class="select-drop-down"name="collage_type" id="collage_type">
                <option value="">College Type</option>
                <option class="" value="1">Inter college</option>
                <option class="" value="2">Engineering college</option>
                <option class="" value="3">Medical college</option>
                <option class="" value="4">Degree</option>
                <option class="" value="4">MCA</option>
                <option class="" value="5">MBA</option>
                <option class="" value="6">High School</option>
                </select>
        </div>
        <div class="col-md-4">
        <input type="text" name="collage_code" placeholder="College Code" required="">
        </div>
        <div class="col-md-4">
        <input type="text" name="website" placeholder="Web Site" required="">
        </div>
        <div class="col-md-4">
        <input type="text" name="Courses" placeholder="Courses Offered" required=""> 
        </div>
        <div class="col-md-3">
        <input type="text" name="departments" placeholder="Departments" required="">
        </div>

        <div class="col-md-3">
            <select name="country" id="country" class="country">
                
            </select>
        </div>

        <div class="col-md-3">
            <select name="state" id="state" class="state" >
                <option value="">Select State</option>
            </select>
        </div>
        <div class="col-md-3">
            <select name="city" id="city"  >
                <option value="">Select City</option>
            </select> 
        </div>


    </div>   
        <button type="submit" class="rts-btn btn-primary">Submit</button>
    </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
<?php  require_once 'template/footer.php';  ?>




<script>
$(document).ready(function(){



   
    $.ajax({
            url: 'country', // Replace with your API endpoint
            type: 'POST',
            dataType: 'json',
            success: function(data) {
                
            var country = '';

                country += '<option value="">Select Country</option>';
                $.each(data, function (key, val) {
                    country += '<option value="' + val.country_id + '">' + val.country_name + '</option>';
                });
                $('#country').html(country);
            }
    });


    $(document).on('change', '#country', function() {
    var country_id = $(this).val();
            $.ajax({
            url: 'state', // Replace with your API endpoint
            type: 'POST',
            dataType: 'json',
            data: {country_id:country_id},
            success: function(data) {
                
                    var state = '';

                    state += '<option value="">Select State</option>';
                    $.each(data, function (key, val) {
                        
                        state += '<option value="' + val.state_id + '">' + val.state_name + '</option>';
                    });
                    $('#state').html(state);
            }
            });  
    });

    $(document).on('change', '#state', function() {
    var state_id = $(this).val();
            $.ajax({
            url: 'city', // Replace with your API endpoint
            type: 'POST',
            dataType: 'json',
            data: {state_id:state_id},
            success: function(data) {
                
                    var city = '';

                    city += '<option value="">Select State</option>';
                    $.each(data, function (key, val) {
                        
                        city += '<option value="' + val.city_id + '">' + val.city_name + '</option>';
                    });
                    $('#city').html(city);
            }
            });  
    });





});
</script>


<?php  require_once 'template/end.php';  ?>