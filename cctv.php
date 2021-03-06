<?php
include('include/config.php');
if(isset($_POST['submit'])){
   $name=$_POST['name'];
   $mobile=$_POST['mobile'];
   $email=$_POST['email'];
   $description=$_POST['description']; 
   $page_name='cctv';
   $sql="INSERT INTO `get_a_qoute`(`name`, `mobile`, `email`, `description`, `page_name`) VALUES ('$name','$mobile','$email','$description','$page_name')";
   if(mysqli_query($conn,$sql)){
      echo"<script> alert ('new record has been added succesfully!'); </script>";
   }
   else{
      echo"<script> alert ('connection failed!'); </script>";
   }
}
?>
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

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
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
                <p class="info-text">Shop no 61, Haware Nirmiti CHS, sector 22,plot no 15, Kamothe, Navi Mumbai, 410206
                </p>
              </li>
            </ul>
          </div>
          <!--/ Top info end -->

          <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
            <ul class="list-unstyled">
              <li>
                <a title="Facebook" href="https://facebbok.com">
                  <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                </a>
                <a title="Twitter" href="https://twitter.com">
                  <span class="social-icon"><i class="fab fa-twitter"></i></span>
                </a>
                <a title="Instagram" href="https://instagram.com">
                  <span class="social-icon"><i class="fab fa-instagram"></i></span>
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
                <h1 class="banner-title" style="color:#ffb600">CCTV Installation</h1>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="services.php">Services</a></li>
                    <li class="breadcrumb-item active" aria-current="page">CCTV Installation</li>
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
        <div class="row">

          <div class="col-xl-3 col-lg-4">
            <div class="sidebar sidebar-left">
              <div class="widget">
                <h3 class="widget-title">Solutions</h3>
                <ul class="nav service-menu">
                  <li><a href="e-marketing.php">E-Marketing Vendor</a></li>
                  <li><a href="real-estate.php">Real Estate</a></li>
                  <li><a href="home-loan.php">Home Loan</a></li>
                  <li><a href="registration.php">Registration</a></li>
                  <li><a href="architect-service.php">Architect Services- Drawing & Planning</a></li>
                  <li><a href="civil-constructor.php">Civil Constructor</a></li>
                  <li><a href="iso-certificate.php">ISO Certification</a></li>
                  <li><a href="medical-checkup.php">Medical Health Checkup</a></li>
                  <li class="active"><a href="cctv.php">CCTV Installation</a></li>
                  <li><a href="web-development.php">Web Development</a></li>

                </ul>
              </div><!-- Widget end -->

              <!-- Widget end -->

            </div><!-- Sidebar end -->
          </div><!-- Sidebar Col end -->

          <div class="col-xl-8 col-lg-8">
            <?php
            $sql=mysqli_query($conn,"Select * from  services where page_name= 'cctv'");
               while($arr=mysqli_fetch_array($sql)){
             ?>
            <div class="content-inner-page">

              <h2 class="column-title mrt-0"><?php echo $arr['name']?></h2>

              <div class="row">
                <div class="col-md-12">
                  <p><?php echo $arr['content']?></p>

                </div><!-- col end -->
              </div><!-- 1st row end-->

              <div class="gap-40"></div>


              <div class="course-img">
                <img src="admin/dist/img/credit/<?php echo $arr['image'];?>" style="height: 400px; width: 722px; ">
              </div>

            </div><!-- Page slider end -->

            <div class="gap-40"></div>

            <div class="row">
              <div class="col-md-12">
                <h3><?php echo $arr['description_name']?></h3>
                <p><?php echo $arr['description']?></p>

              </div>


            </div>
            <?php } ?>
            <!--2nd row end -->

            <div class="gap-40"></div>

            <div class="call-to-action classic">
              <div class="row align-items-center">
                <div class="col-md-8 text-center text-md-left">
                  <div class="call-to-action-text">
                    <h3 class="action-title">Interested with this service.</h3>
                  </div>
                </div><!-- Col end -->
                <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                  <div class="call-to-action-btn">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" href="#">Get a
                      Quote</button>
                  </div>
                </div><!-- col end -->
              </div><!-- row end -->
            </div><!-- Action end -->

          </div><!-- Content inner end -->
        </div><!-- Content Col end -->


      </div><!-- Main row end -->
  </div><!-- Conatiner end -->
  </section><!-- Main container end -->


  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content " style="margin-top:14%;">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">CCTV Installation Form</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <div class="container mt-3">
            <form action="" method="post">
              <div class="row">
                <div class=" col-sm-6 mb-3 ">
                  <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                </div>
                <div class="col-sm-6 mb-3 ">
                  <input type="number" class="form-control" id="number" placeholder="Enter Mobile" name="mobile"
                   >
                </div>
              </div>
              <div class="row">
              <div class="mb-3 mt-3">
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
              </div>
              <div class="mb-3 mt-3">
                <textarea class="form-control" rows="5" id="comment" placeholder="Comments" name="description"></textarea>
              </div>
              </div>
              <button type="submit" name="submit" style ="width:100%" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
        <!-- Modal footer -->

      </div>
    </div>
  </div>


  <?php include("include/footer.php");?>
  <!-- Footer end -->

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