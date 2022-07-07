<!DOCTYPE html>
<html lang="en">

<head>

   <!-- Basic Page Needs
================================================== -->
   <meta charset="utf-8">
   <title>PP Consultancy</title>

   <!-- Mobile Specific Metas
================================================== -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="description" content="Construction Html5 Template">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

   <!-- Favicon
================================================== -->
   <link rel="icon" type="image/webp" href="images/pp.webp">

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

</head>

<body>
   <div class="body-inner">

      <div id="top-bar" class="top-bar">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-md-8">
                  <ul class="top-info text-center text-md-left">
                     <li><i class="fas fa-map-marker-alt"></i>
                        <p class="info-text">Shop no 61, Haware Nirmiti CHS, sector 22,plot no 15, Kamothe, Navi Mumbai,
                           410206</p>
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
      <div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner1.webp)">
         <div class="banner-text">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="banner-heading">
                        <h1 class="banner-title" style="color:#ffb600;">Documentation / Registration</h1>
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb justify-content-center">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item"><a href="#">Company</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Documentation / Registration</li>
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
            <div class="col-lg-12">
               <h3 class="column-title" style="margin-top:5%">Documentation / Registration</h3>
               <p>Consultants tend to be individuals with at least a few years of experience under their belts in a
                  particular field or focus. It’s this insight that they then sell as a service to other companies.
               </p>
               <p>a Consultant is a person who provides expert advice professionally – usually, an experienced
                  professional in a specific field who possesses a comprehensive knowledge of the subject matter and
                  uses it to help solve a client's problem.</p>

            </div>
         </div>
      </section>


      <section id="main-container" class="main-container">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h3 class="column-title">Enquiry Details</h3>
                  <!-- contact form works with formspree.io  -->
                  <!-- contact form activation doc: https://docs.themefisher.com/PP Consultancy/contact-form/ -->
                  <form id="contact-form" action="contact.php" method="post" role="form">
                     <div class="error-container"></div>


                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <input class="form-control form-control-email" name="name" id="name"
                                 placeholder=" Your Name" type="email" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <input class="form-control form-control-mobile" name="text" id="company"
                                 placeholder="Company Name" required>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <textarea class="form-control form-control-message" name="address" id="address"
                           placeholder="Address" rows="3" required></textarea>
                     </div>
                     <div class="form-group">
                           <input class="form-control form-control-email" name="city" id="city" placeholder=" City"
                              type="text" required>
                        </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <input class="form-control form-control-email" name="email" id="email" placeholder="Email"
                                 type="email" required>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <input class="form-control form-control-mobile" minlength="10" maxlength="10"
                                 name="mobile" id="mobile" placeholder="mobile" required>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <textarea class="form-control form-control-message" name="description" id="description"
                           placeholder="Description" rows="5" required></textarea>
                     </div>
                     <div class="text-center"><br>
                        <button class="btn btn-primary solid blank checkValidationBtn" type="submit"
                           id="button_submit">Submit</button>

                     </div>
                  </form>
               </div>

            </div>
         </div>
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

      <!-- Template custom -->
      <script src="js/script.js"></script>

   </div><!-- Body inner end -->
</body>

</html>