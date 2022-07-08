<?php 
include('include/config.php');
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
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/aboutus.webp)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title" style="color:#ffb600;">About US</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">company</a></li>
                      <li class="breadcrumb-item active" aria-current="page">About Us</li>
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
  <?php
            $sql=mysqli_query($conn,"Select * from  testimonials where page_name= 'instructor2'");
               while($arr=mysqli_fetch_array($sql)){
             ?>
    <div class="row">
        <div class="col-lg-6">
          <h3 class="column-title"><?php echo $arr['name']?></h3>
          <p><?php echo $arr['description']?>
          </p>
          <blockquote><p><?php echo $arr['content']?></p></blockquote>
          <p><?php echo $arr['d_name']?></p>

        </div><!-- Col end -->

        <div class="col-lg-6 mt-5 mt-lg-0">
          
          <div id="page-slider" class="page-slider small-bg">

              <div class="item" style="background-image:url(images/slider-pages/leadership.webp)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title">Leadership</h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->

              <div class="item" style="background-image:url(images/slider-pages/relationship.webp)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title">Relationships</h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->

              <div class="item" style="background-image:url(images/slider-pages/performance.webp)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title">Performance</h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->
          </div><!-- Page slider end-->          
        

        </div><!-- Col end -->
    </div><!-- Content row end -->
<?php } ?>
  </div><!-- Container end -->
</section><!-- Main container end -->


<section id="facts" class="facts-area dark-bg">
  <div class="container">
    <div class="facts-wrapper">
        <div class="row">
          <div class="col-md-3 col-sm-6 ts-facts">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/fact1.webp" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="2">0</span></h2>
                <h3 class="ts-facts-title">Total Projects</h3>
              </div>
          </div><!-- Col end -->

          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/fact2.webp" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="7">0</span></h2>
                <h3 class="ts-facts-title">Staff Members</h3>
              </div>
          </div><!-- Col end -->

          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/fact3.webp" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="4">0</span></h2>
                <h3 class="ts-facts-title">Hours of Work</h3>
              </div>
          </div><!-- Col end -->

          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/fact4.webp" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="2">0</span></h2>
                <h3 class="ts-facts-title">Countries Experience</h3>
              </div>
          </div><!-- Col end -->

        </div> <!-- Facts end -->
    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Facts end -->

<!--<section id="ts-team" class="ts-team">-->
<!--  <div class="container">-->
<!--    <div class="row text-center">-->
<!--        <div class="col-lg-12">-->
<!--          <h2 class="section-title">Quality Service</h2>-->
<!--          <h3 class="section-sub-title">Professional Team</h3>-->
<!--        </div>-->
<!--    </div><!--/ Title row end -->

<!--    <div class="row">-->
<!--        <div class="col-lg-12">-->
<!--          <div id="team-slide" class="team-slide">-->
<!--              <div class="item">-->
<!--                <div class="ts-team-wrapper">-->
<!--                    <div class="team-img-wrapper">-->
<!--                      <img loading="lazy" class="w-100" src="images/team/team1.webp" alt="team-img">-->
<!--                    </div>-->
<!--                    <div class="ts-team-content">-->
<!--                      <h3 class="ts-name">Stenman scre</h3>-->
<!--                      <p class="ts-designation">Operating</p>-->
<!--                      <p class="ts-description">Stenman began his career in construction with boots on the ground</p>-->
<!--                      <div class="team-social-icons">-->
<!--                          <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>-->
<!--                          <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>-->
<!--                          <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>-->
<!--                          <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>-->
<!--                      </div><!--/ social-icons-->
<!--                    </div>-->
<!--                </div><!--/ Team wrapper end -->
<!--              </div><!-- Team 1 end -->

<!--              <div class="item">-->
<!--                <div class="ts-team-wrapper">-->
<!--                    <div class="team-img-wrapper">-->
<!--                      <img loading="lazy" class="w-100" src="images/team/team2.webp" alt="team-img">
<!--                    </div>-->
<!--                    <div class="ts-team-content">-->
<!--                      <h3 class="ts-name">Angela loqu</h3>-->
<!--                      <p class="ts-designation">Innovation Officer</p>-->
<!--                      <p class="ts-description">Angela began his career in construction with boots on the ground</p>-->
<!--                      <div class="team-social-icons">-->
<!--                          <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>-->
<!--                          <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>-->
<!--                          <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>-->
<!--                      </div><!--/ social-icons-->
<!--                    </div>-->
<!--                </div><!--/ Team wrapper end -->
<!--              </div><!-- Team 2 end -->

<!--              <div class="item">-->
<!--                <div class="ts-team-wrapper">-->
<!--                    <div class="team-img-wrapper">-->
<!--                      <img loading="lazy" class="w-100" src="images/team/team3.webp" alt="team-img">-->
<!--                    </div>-->
<!--                    <div class="ts-team-content">-->
<!--                      <h3 class="ts-name">Mark Stev</h3>-->
<!--                      <p class="ts-designation">Safety Officer</p>-->
<!--                      <p class="ts-description">Stev began his career in construction with boots on the ground</p>-->
<!--                      <div class="team-social-icons">-->
<!--                          <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>-->
<!--                          <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>-->
<!--                          <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>-->
<!--                      </div><!--/ social-icons-->
<!--                    </div>-->
<!--                </div><!--/ Team wrapper end -->
<!--              </div><!-- Team 3 end -->

<!--              <div class="item">-->
<!--                <div class="ts-team-wrapper">-->
<!--                    <div class="team-img-wrapper">-->
<!--                      <img loading="lazy" class="w-100" src="images/team/team4.webp" alt="team-img">-->
<!--                    </div>-->
<!--                    <div class="ts-team-content">-->
<!--                      <h3 class="ts-name">Ayesha Stenk</h3>-->
<!--                      <p class="ts-designation">Finance Officer</p>-->
<!--                      <p class="ts-description">Ayesha began his career in construction with boots on the ground</p>-->
<!--                      <div class="team-social-icons">-->
<!--                          <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>-->
<!--                          <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>-->
<!--                          <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>-->
<!--                          <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>-->
<!--                      </div><!--/ social-icons-->
<!--                    </div>-->
<!--                </div><!--/ Team wrapper end -->
<!--              </div><!-- Team 4 end -->

<!--              <div class="item">-->
<!--                <div class="ts-team-wrapper">-->
<!--                    <div class="team-img-wrapper">-->
<!--                      <img loading="lazy" class="w-100" src="images/team/team5.webp" alt="team-img">-->
<!--                    </div>-->
<!--                    <div class="ts-team-content">-->
<!--                      <h3 class="ts-name">Dave Clark</h3>-->
<!--                      <p class="ts-designation">Civil Engineer</p>-->
<!--                      <p class="ts-description">Clark began his career in construction with boots on the ground</p>-->
<!--                      <div class="team-social-icons">-->
<!--                          <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>-->
<!--                          <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>-->
<!--                          <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>-->
<!--                      </div><!--/ social-icons-->
<!--                    </div>-->
<!--                </div><!--/ Team wrapper end -->
<!--              </div><!-- Team 5 end -->

<!--              <div class="item">-->
<!--                <div class="ts-team-wrapper">-->
<!--                    <div class="team-img-wrapper">-->
<!--                      <img loading="lazy" class="w-100" src="images/team/team6.webp" alt="team-img">-->
<!--                    </div>-->
<!--                    <div class="ts-team-content">-->
<!--                      <h3 class="ts-name">Elton Joe</h3>-->
<!--                      <p class="ts-designation">Site operator</p>-->
<!--                      <p class="ts-description">joe began his career in construction with boots on the ground</p>-->
<!--                      <div class="team-social-icons">-->
<!--                          <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>-->
<!--                          <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>-->
<!--                          <a target="_blank" href="#"><i class="fab fa-google-plus"></i></a>-->
<!--                          <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>-->
<!--                      </div><!--/ social-icons-->
<!--                    </div>-->
<!--                </div><!--/ Team wrapper end -->
<!--              </div><!-- Team 6 end -->

<!--          </div><!-- Team slide end -->
<!--        </div>-->
<!--    </div><!--/ Content row end -->
<!--  </div><!--/ Container end -->
<!--</section><!--/ Team end -->

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