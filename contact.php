<?php

$name= $_POST['name'];
$mobile = $_POST['mobile'];
$email= $_POST['email'];
$message= $_POST['message'];

// configure
$from = 'PP Consultancy Website<pravin.pawar@ppconser.com>';
$sendTo = 'PP Consultancy <pravin.pawar@ppconser.com>';
$mobile = 'PP Consultancy Form';
$fields = array('name' => 'name', 'mobile' => 'mobile',  'email' => 'email', 'message' => 'message'); // array variable name => Text to appear in email
$okMessage = '';
$errorMessage = 'There was an error while submitting the form. Please try again later';

// let's do the sending

try
{
    $emailText = "You have new message from contact form\n=============================\n";

    foreach ($_POST as $key => $value) {

        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }

    mail($sendTo, $mobile, $emailText, "From: " . $from);

    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);
    
    header('Content-Type: application/json');
    
    echo $encoded;
}
else {
    echo $responseArray['message'];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>PP Consultancy </title>

  <!-- mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="images/pp.jpg">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="css/style.css">
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	






</head>
<body>
  <div class="body-inner">

    <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li><i class="fas fa-map-marker-alt"></i> <p class="info-text">Shop no 61, Haware Nirmiti CHS, sector 22,plot no 15, Kamothe, Navi Mumbai, 410206</p>
                    </li>
                </ul>
              </div>
              <!--/ Top info end -->
  
              <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <ul class="list-unstyled">
                    <li>
                      <a title="Facebook" href="https://facebbok.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                      </a>
                      <a title="Twitter" href="https://twitter.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-twitter"></i></span>
                      </a>
                      <a title="Instagram" href="https://instagram.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-instagram"></i></span>
                      </a>
                      <a title="Linkdin" href="https://github.com/themefisher.com">
                          <span class="social-icon"><i class="fab fa-github"></i></span>
                      </a>
                    </li>
                </ul>
              </div>
              <!--/ Top social end -->
          </div>
          <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </div>
    <!--/ Topbar end -->
<!-- Header start -->
<?php include("include/header.php");?>
<!--/ Header end -->
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/contactus.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title" style="color:#ffb600;">Contact Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center" >
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Company</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container">
  <div class="container">

    <div class="row text-center">
      <div class="col-12">
        <h2 class="section-title">Reaching our Office</h2>
        <h3 class="section-sub-title">Find Our Location</h3>
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fas fa-map-marker-alt mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Visit Our Office</h4>
            <p>Shop no. 61, Haware Nirmiti CHS  8-12, Sector 22, Plot No.15, Kamothe, Navi Mumbai -410206</p>
          </div>
        </div>
      </div><!-- Col 1 end -->

      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-envelope mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Email Us</h4>
            <p>pravin.pawar@ppconser.com</p>
          </div>
        </div>
      </div><!-- Col 2 end -->

      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="fa fa-phone-square mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4>Call Us</h4>
            <p>+91 9594617333</p>
            <p>+91 8291397897</p>
          </div>
        </div>
      </div><!-- Col 3 end -->

    </div><!-- 1st row end -->
 <div class="gap-60"></div>
    <div class="row text-center">
      <div class="col-12">
       
        <h3 class="section-sub-title">Map Location</h3>
      </div>
    </div>

    <div class="gap-5"></div>

    <div class="google-map">
      <iframe id="map" class="map"style="width:100%;" data-marker-name="PP Consultancy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.127548140075!2d73.10040851421175!3d19.014100458857854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7e83322251e19%3A0xd4f13e10f505bcb9!2sHaware%20Nirmiti!5e0!3m2!1sen!2sin!4v1648213072284!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <!-- <div id="map" class="map" data-latitude="40.712776" data-longitude="-74.005974" data-marker="images/marker.png" data-marker-name="PP Consultancy"></div> -->
    </div>

    <div class="gap-40"></div>

    <div class="row">
      <div class="col-md-12">
        <h3 class="column-title">We love to hear</h3>
        <!-- contact form works with formspree.io  -->
        <!-- contact form activation doc: https://docs.themefisher.com/PP Consultancy/contact-form/ -->
        <form id="contact-form" action="contact.php" method="post" role="form">
          <div class="error-container"></div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
             
                <input class="form-control form-control-name" name="name" id="name" placeholder="Name" type="text" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <input class="form-control form-control-email" name="email" id="email" placeholder="Email" type="email"
                  required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <input class="form-control form-control-mobile" minlength="10" maxlength="10" name="mobile" id="mobile" placeholder="mobile" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea class="form-control form-control-message" name="message" id="message" placeholder="Message" rows="5"
              required></textarea>
          </div>
          <div class="text-center" ><br>
            <button class="btn btn-primary solid blank checkValidationBtn" type="submit" id="button_submit" >Send Message</button>
            
          </div>
        </form>
      </div>

    </div><!-- Content row -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->

<?php include("include/footer.php");?>
<!-- Footer end -->


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="plugins/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="plugins/shuffle/shuffle.min.js" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="plugins/google-map/map.js" defer></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- Template custom -->
  <script src="js/script.js"></script>

  </div><!-- Body inner end -->
  
  
  <script>
            $(function (e) {
                $('#enquiryForm').validate({
                    rules: {
                        visitorName:{
                            required: true,
                        },
                        visitorEmail:{
                            required: true,
                            email: true,
                        },
                        visitorPhone:{
                            required: true,
                            maxlength: 10,
                            number: true,
                            minlength: 10,
                        },
                        visitorBranch:{
                            required: true,
                        },
                        visitorDate:{
                            required: true,
                        },
                        visitorMsg:{
                            required: true,
                        }
                    },
                    messages: {
                        visitorName:{
                            required: "Please Enter Name",
                        },
                        visitorEmail:{
                            required: "Please Enter Email Id",
                            email: "Please Enter Valid Email Id",
                        },
                        visitorPhone:{
                            required: "Please Enter Contact Number",
                            maxlength: "Please Enter Atmost 10 Digits",
                            number: "Please Enter Only Numbers",
                            minlength: "Please Enter Only 10 Digits",
                        },
                        visitorBranch:{
                            required: "Please Enter Branch",
                        },
                        visitorDate:{
                            required: "Please Enter Appointment Date",
                        },
                        visitorMsg:{
                            required: "Please Enter your Message",
                        }
                    },
                    submitHandler: function (form) {
                      var formData = $('#enquiryForm').serialize();
                      $.ajax({
                        url: 'https://www.mokashidentalclinic.com/contact-us.php',
                        method:'POST',
                        dataType:'json',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },    
                        data:formData,
                        success:function(data){
                            swal({
                              type:"success",
                              title:"Success",
                              text:"Thank You. We will respond you as early as possible. For Quick Confirmation, Call us on 7264889986 and take instant appointment on Call",
                              closeModal:false,
                              button:"Ok",
                            },function(){
                              window.location.href="https://www.mokashidentalclinic.com/thank-you.php";
                            })
                        },error:function(error){
                         
                        }
                      })    
                  }
                });
              });
        </script>
  
  <script>
let button_submit = document.getElementById("button_submit");
button_submit.addEventListener("click", function(){
let name = document.getElementById("name").value;
let email = document.getElementById("email").value;
let mobile = document.getElementById("mobile").value;
let message = document.getElementById("message").value;

if(name == "" || email == "" || mobile == "" || message == "" ){
    swal("Oops...", "Please fill all the fields", "error");
}
    else{
        swal("Saved!", " Save", "success");
    }
});
</script>
  
  
  </body>

  </html>