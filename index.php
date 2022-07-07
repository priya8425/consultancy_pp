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
  <link rel="icon" type="image/webp" style="border: radius 50%;" href="images/pp.webp">

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
                <p class="info-text">Shop no 61, Haware Nirmiti CHS LTD, sector 22,plot no 15, Kamothe, Navi Mumbai,
                  410206</p>
              </li>
            </ul>
          </div>
          <!--/ Top info end -->

          <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
            <ul class="list-unstyled">
              <li>
                <a title="Facebook" href="">
                  <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                </a>
                <a title="Twitter" href="">
                  <span class="social-icon"><i class="fab fa-twitter"></i></span>
                </a>
                <a title="Instagram" href="">
                  <span class="social-icon"><i class="fab fa-instagram"></i></span>
                </a>
                <a title="Linkdin" href="">
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

    <div class="banner-carousel banner-carousel-2 mb-0">
      <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg6.webp)">
        <div class="container">
          <div class="box-slider-content">
            <div class="box-slider-text">
              <h1 class="box-slide-title">We offer a range of editorial solutions</h1>
              <h4 class="box-slide-sub-title">to advance your marketing programs</h4>
              <p class="box-slide-description">Our end-to-end services support your organization at all stages of the
                content creation process.</p>
              <p>
                <a href="services.html" class="slider btn btn-primary">Our Service</a>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg7.webp)">
        <div class="slider-content text-left">
          <div class="container">
            <div class="box-slider-content">
              <div class="box-slider-text">
                <h2 class="box-slide-title">When Services Matters</h2>
                <h3 class="box-slide-sub-title">Your Choice is Simple</h3>
                <p class="box-slide-description">You have ideas, goals, and dreams. We have a culturally diverse,
                  forward
                  thinking team looking for talent like.</p>
                <p><a href="about.html" class="slider btn btn-primary" aria-label="about-us">Know Us</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="call-to-action no-padding">
      <div class="container">
        <div class="action-style-box">
          <div class="row">
            <div class="col-md-8 text-center text-md-left">
              <div class="call-to-action-text">
                <h3 class="action-title">We understand your needs we are here to help you out.</h3>
              </div>
            </div><!-- Col end -->
            <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
              <div class="call-to-action-btn">
                <a class="btn btn-primary" href="contact.php">Request Quote</a>
              </div>
            </div><!-- col end -->
          </div><!-- row end -->
        </div><!-- Action style box -->
      </div><!-- Container end -->
    </section><!-- Action end -->

    <section id="ts-features" class="ts-features pb-2">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="ts-service-box">
              <div class="ts-service-image-wrapper">
                <img loading="lazy" class="w-100" src="images/services/homeloan.webp" alt="service-image"
                  style="height:200px ">
              </div>
              <div class="d-flex">
                <div class="ts-service-box-img">

                  <img loading="lazy" src="images/icon-image/loan.webp" alt="service-icon" style="width:65px " />
                </div>
                <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="service-single.html">Home Loan</a></h3>
                  <p>A home loan is a secured loan taken from a financial institution for the purpose of buying a
                    residential property.Home loans can be availed from both banks and Non Banking Financial Companies
                    (NBFCs).</p>
                  <a class="learn-more d-inline-block" href="service-single.html" aria-label="service-details"><i
                      class="fa fa-caret-right"></i> Learn more</a>
                </div>
              </div>
            </div><!-- Service1 end -->
          </div><!-- Col 1 end -->

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="ts-service-box">
              <div class="ts-service-image-wrapper">
                <img loading="lazy" class="w-100" src="images/services/civil.webp" alt="service-image"
                  style="height:200px ">
              </div>
              <div class="d-flex">
                <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/architect.webp" alt="service-icon" style="width:65px " />
                </div>
                <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="service-single.html">Civil Contractor</a></h3>
                  <p>Civil construction is the creation of infrastructure anything to do with water, earth, or transport
                    & construction of the individuals and companies involved in the planning, creation, & designing of
                    our infrastructure.</p>
                  <a class="learn-more d-inline-block" href="service-single.html" aria-label="service-details"><i
                      class="fa fa-caret-right"></i> Learn more</a>
                </div>
              </div>
            </div><!-- Service2 end -->
          </div><!-- Col 2 end -->

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="ts-service-box">
              <div class="ts-service-image-wrapper">
                <img loading="lazy" class="w-100" src="images/services/medical.webp" alt="service-image"
                  style="height:200px ">
              </div>
              <div class="d-flex">
                <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/healthcare.webp" alt="service-icon" style="width:65px " />
                </div>
                <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="service-single.html">Medical Health Check-up</a></h3>
                  <p> health check package which helps in the overall assessment of all the organs and systems of the
                    body such as Heart, Liver, Kidneys, Thyroid, Urinary track infections, Diabetes, etc....</p>
                  <a class="learn-more d-inline-block" href="service-single.html" aria-label="service-details"><i
                      class="fa fa-caret-right"></i> Learn more</a>
                </div>
              </div>
            </div><!-- Service3 end -->
          </div><!-- Col 3 end -->
        </div><!-- Content row end -->
      </div><!-- Container end -->
    </section><!-- Feature are end -->

    <section id="facts" class="facts-area dark-bg">
      <div class="container">
        <div class="facts-wrapper">
          <div class="row">
            <div class="col-md-3 col-sm-6 ts-facts">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/fact1.webp" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="0">0</span></h2>
                <h3 class="ts-facts-title">Total Projects</h3>
              </div>
            </div><!-- Col end -->

            <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/fact2.webp" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="0">0</span></h2>
                <h3 class="ts-facts-title">Staff Members</h3>
              </div>
            </div><!-- Col end -->

            <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/fact3.webp" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="0">0</span></h2>
                <h3 class="ts-facts-title">Hours of Work</h3>
              </div>
            </div><!-- Col end -->

            <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/icon-image/fact4.webp" alt="facts-img">
              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="0">0</span></h2>
                <h3 class="ts-facts-title">Countries Experience</h3>
              </div>
            </div><!-- Col end -->

          </div> <!-- Facts end -->
        </div>
        <!--/ Content row end -->
      </div>
      <!--/ Container end -->
    </section><!-- Facts end -->




    <section id="ts-service-area" class="ts-service-area pb-0">
      <div class="container">
        <div class="row text-center">
          <div class="col-12">
            <h2 class="section-title">We Are Specialists In</h2>
            <h3 class="section-sub-title">What We Do</h3>
          </div>
        </div>
        <!--/ Title row end -->

        <div class="row">
          <div class="col-lg-4">
            <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/vendor.webp" alt="service-icon" style="width:65px ">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Government e-Marketplace Vendor</a></h3>
                <p>As expert we provides advice and further purposeful activities in an area of specialization.</p>
              </div>
            </div><!-- Service 1 end -->

            <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/realestate.webp" alt="service-icon" style="width:65px ">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Real E-state</a></h3>
                <p>Real estate is property consisting of land and the buildings on it, along with its natural resources
                  such as crops, water etc..</p>
              </div>
            </div><!-- Service 2 end -->

            <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">

                <img loading="lazy" src="images/icon-image/loan.webp" alt="service-icon" style="width:65px ">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Home Loan</a></h3>
                <p>A home loan is a secured loan taken from a financial institution for the purpose of buying a
                  residential property.</p>
              </div>
            </div><!-- Service 3 end -->
            <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/registration.webp" alt="service-icon" style="width:65px ">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">Registration</a></h3>
                <p>Registering documents related to property you purchased, you should pay stamp duty.</p>
              </div>
            </div>

          </div><!-- Col end -->

          <div class="col-lg-4 text-center">
            <img loading="lazy" class="img-fluid" src="images/services/service8.webp" alt="service-avater-image"
              style="margin-top: 20px">
          </div><!-- Col end -->

          <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
            <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/engineer.webp" alt="service-icon" style="width:65px ">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">ARCHITECTURAL SERVICES</a></h3>
                <p>Taking Client's instructions and preparation of design brief, Site evaluation, etc..</p>
              </div>
            </div><!-- Service 4 end -->

            <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/architect.webp" alt="service-icon" style="width:65px ">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">CIVIL CONTRACTOR</a></h3>
                <p>Civil construction is the creation of infrastructure involving anything to do with water, earth, or
                  transport.</p>
              </div>
            </div><!-- Service 5 end -->

            <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/certificate.webp" alt="service-icon" style="width:65px ">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">ISO CERTIFICATION</a></h3>
                <p>ISO certification is a seal of approval from a third party that a company runs to one of the
                  international standards developed and published.</p>
              </div>
            </div><!-- Service 6 end -->
            <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/icon-image/healthcare.webp" alt="service-icon" style="width:65px ">
              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="#">MEDICAL HEALTH CHECK-UP</a></h3>
                <p> Health CHECK-UP helps in the overall assessment of all the organs and systems of the body such as
                  Heart, Kidneys, Diabetes, etc...</p>
              </div>
            </div>
          </div><!-- Col end -->
        </div><!-- Content row end -->

      </div>
      <!--/ Container end -->
    </section><!-- Service end -->




    <section id="project-area" class="project-area solid-bg">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-12">
            <h2 class="section-title">Work of Excellence</h2>
            <h3 class="section-sub-title">Recent Projects</h3>
          </div>
        </div>
        <!--/ Title row end -->

        <div class="row ">
          <div class="col-12">
            <div class="shuffle-btn-group">
              <label class="active" for="all">
                <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Show All
              </label>
              <label for="commercial">
                <input type="radio" name="shuffle-filter" id="commercial" value="E-MARKETING">E-MARKETING
              </label>
              <label for="education">
                <input type="radio" name="shuffle-filter" id="education" value="REAL ESTATE">REAL ESTATE
              </label>
              <label for="government">
                <input type="radio" name="shuffle-filter" id="government" value="CCTV">CCTV Installation
              </label>
              <label for="infrastructure">
                <input type="radio" name="shuffle-filter" id="infrastructure" value="ISO">ISO CERTIFICATION
              </label>
              <label for="residential">
                <input type="radio" name="shuffle-filter" id="residential" value="MEDICAL">MEDICAL CHECK-UP
              </label>

            </div><!-- project filter end -->




            <div class="row shuffle-wrapper">
              <div class="col-1 shuffle-sizer"></div>

              <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;E-MARKETING&quot;]">
                <div class="project-img-container">
                  <a class="gallery-popup" href="images/projects/emarketing.webp" aria-label="project-img">
                    <img class="img-fluid" src="images/projects/emarketing.webp" alt="project-img"
                      style="height: 305px;">
                    <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                  </a>
                  <div class="project-item-info">
                    <div class="project-item-info-content">
                      <h3 class="project-item-title">
                        <a href="projects-single.html">GOVERNMENT E-MARKET PLACE VENDOR</a>
                      </h3>
                      <p class="project-cat">E-MARKET</p>
                    </div>
                  </div>
                </div>
              </div><!-- shuffle item 1 end -->


              <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;ISO&quot;]">
                <div class="project-img-container">
                  <a class="gallery-popup" href="images/projects/iso2.webp" aria-label="project-img">
                    <img class="img-fluid" src="images/projects/iso2.webp" alt="project-img" style="height: 305px;">
                    <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                  </a>
                  <div class="project-item-info">
                    <div class="project-item-info-content">
                      <h3 class="project-item-title">
                        <a href="projects-single.html">ISO CERTIFICATE</a>
                      </h3>
                      <p class="project-cat">Government</p>
                    </div>
                  </div>
                </div>
              </div><!-- shuffle item 6 end -->

              <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;REAL ESTATE&quot;]">
                <div class="project-img-container">
                  <a class="gallery-popup" href="images/projects/realestate1 (1).webp" aria-label="project-img">
                    <img class="img-fluid" src="images/projects/realestate1 (1).webp" alt="project-img"
                      style="height: 305px;">
                    <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                  </a>
                  <div class="project-item-info">
                    <div class="project-item-info-content">
                      <h3 class="project-item-title">
                        <a href="projects-single.html">REAL ESTATE</a>
                      </h3>
                      <p class="project-cat">Government</p>
                    </div>
                  </div>
                </div>
              </div><!-- shuffle item 2 end -->


              <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;MEDICAL&quot;]">
                <div class="project-img-container">
                  <a class="gallery-popup" href="images/projects/eye.webp" aria-label="project-img">
                    <img class="img-fluid" src="images/projects/eye.webp" alt="project-img" style="height: 305px;">
                    <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                  </a>
                  <div class="project-item-info">
                    <div class="project-item-info-content">
                      <h3 class="project-item-title">
                        <a href="projects-single.html">EYE CHECK-UP</a>
                      </h3>
                      <p class="project-cat">Government</p>
                    </div>
                  </div>
                </div>
              </div><!-- shuffle item 3 end -->

              <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;CCTV&quot;]">
                <div class="project-img-container">
                  <a class="gallery-popup" href="images/projects/cctv2.webp" aria-label="project-img">
                    <img class="img-fluid" src="images/projects/cctv2.webp" alt="project-img" style="height: 305px;">
                    <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                  </a>
                  <div class="project-item-info">
                    <div class="project-item-info-content">
                      <h3 class="project-item-title">
                        <a href="projects-single.html">CCTV</a>
                      </h3>
                      <p class="project-cat">Government</p>
                    </div>
                  </div>
                </div>
              </div><!-- shuffle item 5 end -->


              <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;MEDICAL&quot;]">
                <div class="project-img-container">
                  <a class="gallery-popup" href="images/projects/heart.webp" aria-label="project-img">
                    <img class="img-fluid" src="images/projects/heart.webp" alt="project-img" style="height: 305px;">
                    <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                  </a>
                  <div class="project-item-info">
                    <div class="project-item-info-content">
                      <h3 class="project-item-title">
                        <a href="projects-single.html">HEART CHECK-UP</a>
                      </h3>
                      <p class="project-cat">Private</p>
                    </div>
                  </div>
                </div>
              </div><!-- shuffle item 3 end -->

              <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;CCTV&quot;]">
                <div class="project-img-container">
                  <a class="gallery-popup" href="images/projects/cctv1.webp" aria-label="project-img">
                    <img class="img-fluid" src="images/projects/cctv1.webp" alt="project-img" style="height: 305px;">
                    <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                  </a>
                  <div class="project-item-info">
                    <div class="project-item-info-content">
                      <h3 class="project-item-title">
                        <a href="projects-single.html">CCTV</a>
                      </h3>
                      <p class="project-cat">Private</p>
                    </div>
                  </div>
                </div>
              </div><!-- shuffle item 4 end -->


              <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;REAL ESTATE&quot;]">
                <div class="project-img-container">
                  <a class="gallery-popup" href="images/projects/realestate1 (2).webp" aria-label="project-img">
                    <img class="img-fluid" src="images/projects/realestate1 (2).webp" alt="project-img"
                      style="height: 305px;">
                    <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                  </a>
                  <div class="project-item-info">
                    <div class="project-item-info-content">
                      <h3 class="project-item-title">
                        <a href="projects-single.html">REAL ESTATE</a>
                      </h3>
                      <p class="project-cat">Private</p>
                    </div>
                  </div>
                </div>
              </div><!-- shuffle item 3 end -->



              <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;ISO&quot;]">
                <div class="project-img-container">
                  <a class="gallery-popup" href="images/projects/iso1.webp" aria-label="project-img">
                    <img class="img-fluid" src="images/projects/iso1.webp" alt="project-img" style="height: 305px;">
                    <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                  </a>
                  <div class="project-item-info">
                    <div class="project-item-info-content">
                      <h3 class="project-item-title">
                        <a href="projects-single.html">ISO CERTIFICATE</a>
                      </h3>
                      <p class="project-cat">Government</p>
                    </div>
                  </div>
                </div>
              </div><!-- shuffle item 6 end -->
            </div><!-- shuffle end -->
          </div>

          <div class="col-12">
            <div class="general-btn text-center">
              <a class="btn btn-primary" href="">View All Projects</a>
            </div>
          </div>

        </div><!-- Content row end -->
      </div>
      <!--/ Container end -->
    </section><!-- Project area end -->

    <section class="content">
      <div class="container">

        <div class="col-lg-12" style="text-align:center">
          <h3 class="column-title">Testimonials</h3>

          <div id="testimonial-slide" class="testimonial-slide">
            <?php
            $sql=mysqli_query($conn,"Select * from  testimonials where page_name= 'instructor'");
               while($arr=mysqli_fetch_array($sql)){
             ?>
            <div class="item">
              <div class="quote-item">
                <span class="quote-text">
                  <?php echo $arr['description']?>
                </span>

                <div class="quote-item-footer" style="margin-left:25%">
                  <img loading="lazy" class="testimonial-thumb" src="admin/dist/img/credit/<?php echo $arr['image'];?>"
                    alt="testimonial">
                  <div class="quote-item-info">
                    <h3 class="quote-author"><?php echo $arr['name']?></h3>
                    <span class="quote-subtext"><?php echo $arr['about']?></span>
                  </div>
                </div>
              </div><!-- Quote item end -->
            </div>
            <?php } ?>
            <!--/ Item 1 end -->
            <?php
            $sql=mysqli_query($conn,"Select * from  testimonials where page_name= 'instructor2'");
               while($arr=mysqli_fetch_array($sql)){
             ?>
            <div class="item">
              <div class="quote-item">
                <span class="quote-text">
                  <?php echo $arr['description']?>
                </span>

                <div class="quote-item-footer" style="margin-left:25%">
                  <img loading="lazy" class="testimonial-thumb" src="admin/dist/img/credit/<?php echo $arr['image'];?>"
                    alt="testimonial">
                  <div class="quote-item-info">
                    <h3 class="quote-author"><?php echo $arr['name']?></h3>
                    <span class="quote-subtext"><?php echo $arr['about']?></span>
                  </div>
                </div>
              </div><!-- Quote item end -->
            </div>
            <?php } ?>
            <!--/ Item 2 end -->
            <?php
            $sql=mysqli_query($conn,"Select * from  testimonials where page_name= 'instructor3'");
               while($arr=mysqli_fetch_array($sql)){
             ?>
            <div class="item">
              <div class="quote-item">
                <span class="quote-text">
                  <?php echo $arr['description']?>
                </span>

                <div class="quote-item-footer" style="margin-left:25%">
                  <img loading="lazy" class="testimonial-thumb" src="admin/dist/img/credit/<?php echo $arr['image'];?>"
                    alt="testimonial">
                  <div class="quote-item-info">
                    <h3 class="quote-author"><?php echo $arr['name']?></h3>
                    <span class="quote-subtext"><?php echo $arr['about']?></span>
                  </div>
                </div>
              </div><!-- Quote item end -->
            </div>
            <?php } ?>
            <!--/ Item 3 end -->



          </div>
          <!--/ Testimonial carousel end-->
        </div>

        <div class="col-lg-12 " style=" margin-top:8%" >

          <h3 class="column-title " style="text-align:center">Preffered Channel partner</h3>

          <div class="row all-clients">
            <?php
            $sql=mysqli_query($conn,"Select * from  partner where page_name= 'partner1'");
               while($arr=mysqli_fetch_array($sql)){
             ?>
            <div class="col-sm-4 col-6">
              <figure class="clients-logo">
                <a href="#!"><img loading="lazy" class="img-fluid"
                    src="admin/dist/img/credit/<?php echo $arr['icon'];?>" alt="clients-logo" /></a>
              </figure>
            </div><!-- Client 1 end -->
            <?php } ?>
            <?php
            $sql=mysqli_query($conn,"Select * from  partner where page_name= 'partner2'");
               while($arr=mysqli_fetch_array($sql)){
             ?>
            <div class="col-sm-4 col-6">
              <figure class="clients-logo">
                <a href="#!"><img loading="lazy" class="img-fluid"
                    src="admin/dist/img/credit/<?php echo $arr['icon'];?>" alt="clients-logo" /></a>
              </figure>
            </div><!-- Client 2 end -->
            <?php } ?>
            <?php
            $sql=mysqli_query($conn,"Select * from  partner where page_name= 'partner3'");
               while($arr=mysqli_fetch_array($sql)){
             ?>
            <div class="col-sm-4 col-6">
              <figure class="clients-logo">
                <a href="#!"><img loading="lazy" class="img-fluid"
                    src="admin/dist/img/credit/<?php echo $arr['icon'];?>" alt="clients-logo" /></a>
              </figure>
            </div><!-- Client 3 end -->
            <?php } ?>
            <?php
            $sql=mysqli_query($conn,"Select * from  partner where page_name= 'partner4'");
               while($arr=mysqli_fetch_array($sql)){
             ?>
            <div class="col-sm-4 col-6">
              <figure class="clients-logo">
                <a href="#!"><img loading="lazy" class="img-fluid"
                    src="admin/dist/img/credit/<?php echo $arr['icon'];?>" alt="clients-logo" /></a>
              </figure>
            </div><!-- Client 4 end -->
            <?php } ?>
            <?php
            $sql=mysqli_query($conn,"Select * from  partner where page_name= 'partner5'");
               while($arr=mysqli_fetch_array($sql)){
             ?>
            <div class="col-sm-4 col-6">
              <figure class="clients-logo">
                <a href="#!"><img loading="lazy" class="img-fluid"
                    src="admin/dist/img/credit/<?php echo $arr['icon'];?>" alt="clients-logo" /></a>
              </figure>
            </div><!-- Client 5 end -->
            <?php } ?>
            <?php
            $sql=mysqli_query($conn,"Select * from  partner where page_name= 'partner6'");
               while($arr=mysqli_fetch_array($sql)){
             ?>
            <div class="col-sm-4 col-6">
              <figure class="clients-logo">
                <a href="#!"><img loading="lazy" class="img-fluid"
                    src="admin/dist/img/credit/<?php echo $arr['icon'];?>" alt="clients-logo" /></a>
              </figure>
            </div><!-- Client 6 end -->
            <?php } ?>
          </div><!-- Clients row end -->

        </div>
      </div>
      <!--/ Container end -->
    </section><!-- Content end -->

    <section class="subscribe no-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="subscribe-call-to-acton">
              <h3>Can We Help?</h3>
              <h4>(+91) 9594617333</h4>

            </div>
          </div><!-- Col end -->

          <div class="col-md-8">
            <div class="ts-newsletter row align-items-center">
              <div class="col-md-5 newsletter-introtext">
                <h4 class="text-white mb-0">News letter Sign-up</h4>
                <p class="text-white">Latest updates and news</p>
              </div>

              <div class="col-md-7 newsletter-form">
                <form class="row" action="#" method="post">
                  <div class="form-group ">
                    <label for="newsletter-email" class="content-hidden">Newsletter Email</label>
                    <input type="email" name="email" id="newsletter-email" class="form-control form-control-lg"
                      placeholder="Your your email" autocomplete="off">
                  </div>
                  <div class="form-group" style="margin-left:10%">
                    <button style="border-radius:10%" class="btn btn-primary solid blank checkValidationBtn"
                      type="submit" id="button_submit">Submit</button>
                  </div>
                </form>
              </div>
            </div><!-- Newsletter end -->
          </div><!-- Col end -->

        </div><!-- Content row end -->
      </div>
      <!--/ Container end -->
    </section>
    <!--/ subscribe end -->

    <!--<section id="news" class="news">-->
    <!--  <div class="container">-->
    <!--    <div class="row text-center">-->
    <!--        <div class="col-12">-->
    <!--          <h2 class="section-title">Work of Excellence</h2>-->
    <!--          <h3 class="section-sub-title">Recent Consultant</h3>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--/ Title row end -->

    <!--    <div class="row">-->
    <!--        <div class="col-lg-4 col-md-6 mb-4">-->
    <!--          <div class="latest-post">-->
    <!--              <div class="latest-post-media">-->
    <!--                <a href="news-single.html" class="latest-post-img">-->
    <!--                    <img loading="lazy" class="img-fluid" src="images/news/development.webp" alt="img">-->
    <!--                </a>-->
    <!--              </div>-->
    <!--              <div class="post-body">-->
    <!--                <h4 class="post-title">-->
    <!--                    <a href="news-single.html" class="d-inline-block">We Develop Website According to your Expectations.</a>-->
    <!--                </h4>-->
    <!--                <div class="latest-post-meta">-->
    <!--                    <span class="post-item-date">-->
    <!--                      <i class="fa fa-clock-o"></i> April 1, 2022-->
    <!--                    </span>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--          </div><!-- Latest post end -->
    <!--        </div><!-- 1st post col end -->

    <!--        <div class="col-lg-4 col-md-6 mb-4">-->
    <!--          <div class="latest-post">-->
    <!--              <div class="latest-post-media">-->
    <!--                <a href="news-single.html" class="latest-post-img">-->
    <!--                    <img loading="lazy" class="img-fluid" src="images/news/cctv.webp" alt="img">-->
    <!--                </a>-->
    <!--              </div>-->
    <!--              <div class="post-body">-->
    <!--                <h4 class="post-title">-->
    <!--                    <a href="news-single.html" class="d-inline-block">CCTV Installation in Complex buildings</a>-->
    <!--                </h4>-->
    <!--                <div class="latest-post-meta">-->
    <!--                    <span class="post-item-date">-->
    <!--                      <i class="fa fa-clock-o"></i> May 28, 2022-->
    <!--                    </span>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--          </div><!-- Latest post end -->
    <!--        </div><!-- 2nd post col end -->

    <!--        <div class="col-lg-4 col-md-6 mb-4">-->
    <!--          <div class="latest-post">-->
    <!--              <div class="latest-post-media">-->
    <!--                <a href="news-single.html" class="latest-post-img">-->
    <!--                    <img loading="lazy" class="img-fluid" src="images/news/realestate.webp" alt="img" style="height: 233px;">-->
    <!--                </a>-->
    <!--              </div>-->
    <!--              <div class="post-body">-->
    <!--                <h4 class="post-title">-->
    <!--                    <a href="news-single.html" class="d-inline-block">Bulding an House with Perfect Master Peice</a>-->
    <!--                </h4>-->
    <!--                <div class="latest-post-meta">-->
    <!--                    <span class="post-item-date">-->
    <!--                      <i class="fa fa-clock-o"></i> March 18, 2022-->
    <!--                    </span>-->
    <!--                </div>-->
    <!--              </div>-->
    <!--          </div><!-- Latest post end -->
    <!--        </div><!-- 3rd post col end -->
    <!--    </div>-->
    <!--/ Content row end -->

    <!--    <div class="general-btn text-center mt-4">-->
    <!--        <a class="btn btn-primary" href="news-left-sidebar.html">See All Posts</a>-->
    <!--    </div>-->

    <!--  </div>-->
    <!--/ Container end -->
    <!--</section>-->
    <!--/ News end -->
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