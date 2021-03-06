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





  <style>
    .listing-badges {
      position: absolute;
      top: 0;
      z-index: 1010;
      right: 0;
      width: 105%;
      display: block;
      font-size: -5px;
      padding: 0;
      overflow: hidden;
      height: 99px;
    }


    .listing-badges .featured {
      float: left;
      transform: rotate(-45deg);
      left: -51px;
      top: 17px;
      position: relative;
      text-align: center;
      width: 200px;
      font-size: 12px;
      margin: 0;
      padding: 7px 10px;
      font-weight: 600;
      color: #fff;
      box-shadow: 1px 2px 3px 0 rgb(2 0 0 / 20%);
      background-color: rgba(255 0 0 / 87%);
    }


    .price-box {
      color: #fff;
      text-align: right;
      font-size: 15px;
      position: absolute;
      bottom: 15px;
      right: 15px;
      z-index: 20;
    }

    .price-box span {
      color: #fec211;
      font-weight: 700;
      background: #111111bf;
      padding: 5px 20px;
    }
  </style>




  <!-- Google Tag Manager -->
  <script>
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'www.googletagmanager.com/gtm54455445.html?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-PTNPV7L');
  </script>
  <!-- End Google Tag Manager -->
  <title>Aristo Real Estate Consultants</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">

  <!-- External CSS libraries -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-submenu.css">

  <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
  <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/leaflet.css" type="text/css">
  <link rel="stylesheet" href="css/map.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" type="text/css" href="fonts/linearicons/style.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.css">
  <link rel="stylesheet" type="text/css" href="css/dropzone.css">
  <link rel="stylesheet" type="text/css" href="css/slick.css">
  <link rel="stylesheet" type="text/css" href="css/summernote-bs4.css">

  <!-- Custom stylesheet -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" id="style_sheet" href="css/skins/default.css">

  <!-- Favicon icon -->
  <link rel="shortcut icon" href="img/favicon.png">

  <!-- Google fonts -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,300,700">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="js/ie-emulation-modes-warning.js"></script>



  <style>
    .btn-white {
      background: #00000008;
      border: 0;
      border-radius: 3px;
      padding: 12px 20px 10px;
      font-weight: 700;
      text-transform: uppercase;
      color: #000;
      font-family: "Montserrat", sans-serif;
      transition: 350ms;
      font-size: 14px;
    }

    .widget {
      margin-bottom: 20px;
      padding: 20px;
      border-bottom: solid 1px #f7f7f7;
    }

    .posts-by-category ul li {
      padding-bottom: 7px;
      margin-bottom: 7px;
      border-bottom: dashed 1.5px #fec20d;
    }

    .our-agent-sidebar {
      margin-bottom: 20px;
    }

    .our-agent-sidebar .p-20 {
      padding: 20px 20px 0;
    }

    .sidebar-title {
      font-size: 21px;
      position: relative;
      margin: 0 0 7px;
      font-weight: 600;
    }

    .team-1 .team-details {
      text-align: center;
      padding: 30px 20px 30px;
    }
  </style>
</head>

<body>
  <div class="">

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
                <a title="Facebook" href="https://facebbok.com/themefisher.com">
                  <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                </a>
                <a title="Twitter" href="https://twitter.com/themefisher.com">
                  <span class="social-icon"><i class="fab fa-twitter"></i></span>
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
                <h1 class="banner-title" style="color:#ffb600;">Residential</h1>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    
                    <li class="breadcrumb-item active" aria-current="page">Residential</li>
                  </ol>
                </nav>
              </div>
            </div><!-- Col end -->
          </div><!-- Row end -->
        </div><!-- Container end -->
      </div><!-- Banner text end -->
    </div><!-- Banner area end -->


    <div class=" container" style="margin-top:3%">

      <div class="row">

        <section id="" class="col-sm-8" style="" id="myTable">
          <div class="">
            <div class="shadow p-3 mb-5 bg-white rounded">

              <?php
              $sql=mysqli_query($conn,"Select * from  residental where page_name= '1'");
               while($arr=mysqli_fetch_array($sql)){
              ?>
              <div class="row">

                <div class="col-lg-6">

                  <div id="page-slider" class="page-slider small-bg">
                    <div class="item" href="contact.php" style="background-image:url(admin/dist/img/credit/<?php echo $arr['image'];?>)">
                      <div class="container">
                        <div class="listing-badges">
                          <span style="" class="featured">Featured</span>
                        </div>
                        <div class="price-box" ><span href="contact.php" class="rent">Contact For Price</span>
                        </div>

                      </div>
                    </div><!-- Item 1 end -->
                  </div><!-- Page slider end-->


                </div>
                <div class="col-lg-6">
                  <h3 class="column-title"><?php echo $arr['name']?></h3>
                  <p><?php echo $arr['content']?>
                  </p>

                </div>
              </div><!-- Content row end -->
              <?php } ?>
            </div>

          </div>
          <div class="shadow p-3 mb-5 bg-white rounded">
            <?php
              $sql=mysqli_query($conn,"Select * from  residental where page_name= '2'");
               while($arr=mysqli_fetch_array($sql)){
            ?>
            <div class="row">

              <div class="col-lg-6 col-md-12">

                <div id="page-slider" class="page-slider small-bg">

                  <div class="item" style="background-image:url(admin/dist/img/credit/<?php echo $arr['image'];?>)">
                    <div class="container">
                      <div class="listing-badges">
                        <span style="" class="featured">Featured</span>
                      </div>
                      <div class="price-box" href="contact.php"><span class="rent">Contact For Price</span>
                      </div>

                    </div>
                  </div><!-- Item 1 end -->

                </div><!-- Page slider end-->


              </div>
              <div class="col-lg-6 col-md-12">
                <h3 class="column-title"><?php echo $arr['name']?></h3>
                <p><?php echo $arr['content']?>
                </p>

              </div>
            </div><!-- Content row end -->
            <?php } ?>
          </div>
          <div class="shadow p-3 mb-5 bg-white rounded">
            <?php
              $sql=mysqli_query($conn,"Select * from  residental where page_name= '3'");
               while($arr=mysqli_fetch_array($sql)){
            ?>
            <div class="row">

              <div class="col-lg-6 col-md-12">

                <div id="page-slider" class="page-slider small-bg">

                  <div class="item" style="background-image:url(admin/dist/img/credit/<?php echo $arr['image'];?>)">
                    <div class="container">
                      <div class="listing-badges">
                        <span style="" class="featured">Featured</span>
                      </div>
                      <div class="price-box" href="contact.php"><span class="rent">Contact For Price</span>
                      </div>

                    </div>
                  </div><!-- Item 1 end -->
                </div><!-- Page slider end-->


              </div>
              <div class="col-lg-6 col-md-12">
                <h3 class="column-title"><?php echo $arr['name']?></h3>
                <p><?php echo $arr['content']?>
                </p>

              </div>
            </div><!-- Content row end -->
            <?php } ?>
          </div>
          <div class="shadow p-3 mb-5 bg-white rounded">
            <?php
              $sql=mysqli_query($conn,"Select * from  residental where page_name= '4'");
               while($arr=mysqli_fetch_array($sql)){
            ?>
            <div class="row">

              <div class="col-lg-6 col-md-12">

                <div id="page-slider" class="page-slider small-bg">

                  <div class="item" style="background-image:url(admin/dist/img/credit/<?php echo $arr['image'];?>)">
                    <div class="container">
                      <div class="listing-badges">
                        <span style="" class="featured">Featured</span>
                      </div>
                      <div class="price-box" href="contact.php"><span class="rent">Contact For Price</span>
                      </div>

                    </div>
                  </div><!-- Item 1 end -->

                </div><!-- Page slider end-->


              </div>
              <div class="col-lg-6 col-md-12">
                <h3 class="column-title"><?php echo $arr['name']?></h3>
                <p><?php echo $arr['content']?>
                </p>

              </div>
            </div><!-- Content row end -->
            <?php } ?>
          </div>
          <div class="shadow p-3 mb-5 bg-white rounded">
            <?php
              $sql=mysqli_query($conn,"Select * from  residental where page_name= '5'");
               while($arr=mysqli_fetch_array($sql)){
            ?>
            <div class="row">

              <div class="col-lg-6 col-md-12">

                <div id="page-slider" class="page-slider small-bg">

                  <div class="item" style="background-image:url(admin/dist/img/credit/<?php echo $arr['image'];?>)">
                    <div class="container">
                      <div class="listing-badges">
                        <span style="" class="featured">Featured</span>
                      </div>
                      <div class="price-box" href="contact.php"><span class="rent">Contact For Price</span>
                      </div>

                    </div>
                  </div><!-- Item 1 end -->

                </div><!-- Page slider end-->


              </div>
              <div class="col-lg-6 col-md-12">
                <h3 class="column-title"><?php echo $arr['name']?></h3>
                <p><?php echo $arr['content']?>
                </p>

              </div>
            </div><!-- Content row end -->
            <?php } ?>
          </div>
        </section>
        <section id="" class="col-sm-3">
          
          <div class="widget recent-properties container  shadow p-3 mb-5 bg-white rounded" style="width: 400px;"  >
            <h3 class="sidebar-title" style="font-size:20px;text-align:center; margin-bottom: 10%;">Recent Properties
            </h3>
            <div class="s-border"></div>
            <div class="media mb-4">
              <a class="pr-3" href="images/slider-pages/5.webp">
                <img class="media-object" style="width: 100px;height: 61px;" src="images/slider-pages/1.webp"
                  alt="small-properties">
              </a>
              <div class="media-body align-self-center">
                <h5>
                  <a href="properties-details.php?prop_id=61a0c91q9o27c">SAI WORLD DREAMS</a>
                </h5>
                <div class="listing-post-meta">
                  <span class="rent">Contact For Price</span> | <a href="contact.php"><i class="fa fa-calendar"></i> </a>
                </div>
              </div>
            </div>
            <div class="media mb-4">
              <a class="pr-3" href="properties-details.php?prop_id=61a0a91r9b27a">
                <img class="media-object" style="width: 100px; height: 61px;" src="images/slider-pages/2.webp"
                  alt="small-properties">
              </a>
              <div class="media-body align-self-center">
                <h5>
                  <a href="properties-details.php?prop_id=61a0a91r9b27a">KAMDHENU VOGUE</a>
                </h5>
                <div class="listing-post-meta">
                  <span class="rent">Contact For Price</span> | <a href="contact.php"><i class="fa fa-calendar"></i> </a>
                </div>
              </div>
            </div>
            <div class="media mb-4">
              <a class="pr-3" href="properties-details.php?prop_id=61a0a91a9b27b">
                <img class="media-object" style="width: 100px;height: 61px;" src="images/slider-pages/3.webp"
                  alt="small-properties">
              </a>
              <div class="media-body align-self-center">
                <h5>
                  <a href="properties-details.php?prop_id=61a0a91a9b27b">PARADISE SAI SUN CITY</a>
                </h5>
                <div class="listing-post-meta">
                  <span class="rent">Contact For Price</span> | <a href="contact.php"><i class="fa fa-calendar"></i> </a>
                </div>
              </div>
            </div>
            <div class="media mb-4">
              <a class="pr-3" href="properties-details.php?prop_id=61a0a89a9b67b">
                <img class="media-object" style="width: 100px;height: 61px;" src="images/slider-pages/4.webp"
                  alt="small-properties">
              </a>
              <div class="media-body align-self-center">
                <h5>
                  <a href="properties-details.php?prop_id=61a0a89a9b67b">SATYAM KHARGHAR CENTRAL</a>
                </h5>
                <div class="listing-post-meta">
                  <span class="rent">Contact For Price</span> | <a href="contact.php"><i class="fa fa-calendar"></i> </a>
                </div>
              </div>
            </div>
          </div>
          <div class="posts-by-category widget container shadow p-3 mb-5 bg-white rounded" style=" width:400px;">
            <h3 class="sidebar-title" style="font-size:20px;text-align:center;margin-bottom: 10%;">Category</h3>
            <div class="s-border"></div>
            <ul class="list-unstyled list-cat">
              <li><a href="properties-list.php?p_type=Apartment">Apartment</a></li>
              <li><a href="properties-list.php?p_type=Shop">Shop</a></li>
              <li><a href="properties-list.php?p_type=Restaruant">Restaruant</a></li>
              <li><a href="properties-list.php?p_type=Villa">Villa</a></li>
            </ul>
          </div>
          <div class="container shadow p-3 mb-5 bg-white rounded" style=" width: 400px;">
            <div class="p-20">
              <h3 class="sidebar-title" style="text-align:center;margin-bottom:10%">Our Offices</h3>
              <div class="s-border"></div>
            </div>
            <div id="carouselExampleIndicators5" class="carousel slide text-center" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators5" data-slide-to="0" class="active"></li>

                <li data-target="#carouselExampleIndicators5" data-slide-to="3" class=""></li>

              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="team-1">
                    <div class="team-photo">
                      <a href="#">
                        <img src="images/pp.webp" alt="" style=" width:40% ; border-radius:50%">
                      </a>
                    </div>
                    <div class="team-details">
                      <h4><a href="agent-detail.html">Kamothe Office</a></h4>
                      <h6>
                        <p><span
                            style="color: rgb(139, 146, 147); font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 13px;">
                            Shop no. 61, Haware Nirmiti CHS 8-12, Sector 22, Plot No.15, Kamothe, Navi Mumbai -410206&nbsp;</span><br></p>
                      </h6>
                      <div class="row">
                        <div class="col" ><h6>9594617333</h6></div>
                        <div class="col"><h6>8291397897</h6></div>
                      </div>
                      <div class=""style="margin:5%;margin-left: -4%;"><h6>pravin.pawar@ppconser.com</h6></div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </section>
      </div>
    </div>

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