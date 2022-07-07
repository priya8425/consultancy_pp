<?php
include("include/config.php");
if(isset($_POST["submit"])){

    $name=$_POST['name'];
    $content=$_POST['content'];
    $description=$_POST['description'];
    $image=$_FILES['image']['name'];   
    $filedet=$_FILES['image']['tmp_name'];
    $loc="images/dist/".$image;
    move_uploaded_file($filedet,$loc);
   
    
    $sql = "UPDATE services SET name = '$name', content = '$content', description = '$description', file = '$image' WHERE page_name = 'cctv'";
    $result=mysqli_query($conn, $sql);
    
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

<!--/ Header end -->
<!-- Banner area end --> 

<section class="content">
      <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">cctv</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data">
                <div class="card-body">
                <div class="row">
          <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" id="example1" placeholder="Enter Title">
                  </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Content</label>
                         <textarea type="text" class="form-control" name="content" id="example2" placeholder="Enter Description"></textarea>
                  </div>
                  </div>
                  </div>
                  <div class="row">
          <div class="col-md-6">
          <div class="form-group">
                          <label for="exampleInputFile1">Image</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="image"
                                id="exampleInputFile1">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                          </div>
                        </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                         <textarea type="text" class="form-control" name="description" id="example2" placeholder="Enter Description"></textarea>
                  </div>
                  </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit">update</button>
                </div>
              </form>
            </div> 

          </div>
          
                
                  <!-- input states -->
                 
              
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
      </div>
      <div class="row">
          <div class="col-md-12">
            <div class="card">

              <!-- /.card-header -->
              <div class="card-body">
                <div style="overflow-x:auto;">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Sr.No</th>
                        <th>Name</th>
                        <th>Content</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php     
                        $sql=mysqli_query($conn,"select * from services");
                        $count=1;
                        while($arr=mysqli_fetch_array($sql)){
                        ?>
                      <tr>
                        <td><?php echo $count;?></td>
                        <td><?php echo $arr['name'];?></td>
                        <td><?php echo $arr['content'];?></td>
                        <td><img src="../images/dist/<?php echo $arr['image'];?>"
                            style="height:150px; width:150px;"></td>
                        <td><?php echo $arr['description'];?></td>
                        <td> 
                        <a href="#"><button type="button"
                              class="btn btn-danger btn-md" style="color: aliceblue"> <i
                                class="fas fa-pen"></i></button></a>

                                <a href="#"><button type="button"
                              class="btn btn-danger btn-md" style="color: aliceblue"> <i
                                class="fas fa-trash"></i></button></a>
                      </tr>
                      <?php $count++; }  ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix" style="background:white">
                  <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>

                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                  </ul>
                </div>


               
            </div>
            <!-- /.card -->


            <!-- /.card -->
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <!--/.col (right) -->



        </div>
      <!-- /.container-fluid -->
    </section>
<!-- Main container end -->

<?php include("include/header.php");?>
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