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
                        <h1 class="banner-title" style="color:#ffb600;">EMI Calculator</h1>
                        <nav aria-label="breadcrumb">
                           <ol class="breadcrumb justify-content-center">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                            
                              <li class="breadcrumb-item active" aria-current="page">EMI Calculator</li>
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
                  <h3 class="section-sub-title mb-4">EMI Calculator</h3>
               </div>
            </div>
            <?php 
               error_reporting(0); 
               $rate = $_POST['interest']/100/12;
               $principle = $_POST['principal'];
               $time = $_POST['years']*12;// in month
               $x= pow(1+$rate,$time);
               //echo $x;
               $monthly = ($principle*$x*$rate)/($x-1);  
               $monthly = round($monthly);
               $k= $time;
               $arr= array();
               function getNextMonth($date){
               global $arr;
               global $k;
               if($k==0){
               return 0;	
               }
               $date = new DateTime($date);
               $interval = new DateInterval('P1M');
               $date->add($interval);
               $nextMonth= $date->format('Y-m-d') . "\n";	
               $arr[]= $nextMonth;
               $k--;
               return getNextMonth($nextMonth);
               }
               getNextMonth($_POST['start_date']);
               // simple chart display here
               $date = "";
               $upto = $time;
               $i = 0;
               $totalint = 0;
               $payment_date = date("Y m,d");
               $tp =0;
               function getEmi($t){
               global $i,$upto, $totalint, $rate,$monthly,$payment_date, $arr,$_SESSION,$tp;
               $i++;
               if($upto<=0){
               return 0;
               }
               $r = $t*$rate;
               $p = round($monthly-$r);
               $e= round($t-$p);
               if($upto==2){
               $_SESSION['tl']= $e;
               }
               if($upto==1){
               $p= $_SESSION['tl'];	
               $e= round($t-$p);
               $monthly= round($p+$r);
               }
               $totalint = $totalint + $r;
               $tp = $tp+$monthly;
               $upto--;
            ?>
            <tr>
               <td>
                  <?php echo $i; ?></td>
               <td>
                  <?php
                  $arrDate1 = explode('-',$arr[$i-1]);
                  echo date("M j, Y",mktime(0,0,0,$arrDate1[1],$arrDate1[2],$arrDate1[0]));
                  ?>
               </td>
               <td>
                  $<?php echo number_format(round($r)); ?>.00
               </td>
               <td>
                  $<?php  echo number_format($t); ?>.00
               </td>
               <td>
                  $<?php echo number_format($p);  ?>.00
               </td>
               <td>
                  $<?php echo number_format($monthly); ?>.00
               </td>
               <td>
                  $<?php echo number_format(round($e));  ?>.00
               </td>
            </tr>
            <?php
               return getEmi($e);
               }
               ?>
            <style type="text/css">
               table#emi {
                 
                  margin: 0 auto;
                  font-family: 'Cantora One', sans-serif;
                  font-size: 14px;
               }

               table#emi td {
                  padding: 1%;
                  
               }

               table#emi tr:nth-child(even) {
                 
                  border: 1px solid ;
                  border-left: 0;
                  border-right: 0;
               }

               table#emi tr td:nth-last-child(1) {
                  background: white;
               }

               table#emi input {
                  margin: 3%;
               }

               #result td {
                  padding: 5px;
               }

               table#result {
                  width: 477px;
                 
                  margin: 0 auto;
                  margin-top: 10px;
                  display: none;
                  font-family: 'Cantora One', sans-serif;
                  font-size: 14px;
               }

               table#result tr:nth-child(even) {
                  background: #D7E4FF;
                  border: 1px solid #D4D4D4;
               }

               table#result tr td:nth-last-child(1) {
                  width: 213px;
               }
            </style>
            <form name="loandata" method="post" action="">
               <table id="emi" width="100%">
                  <tr>
                     <td colspan="3">
                        <h4>
                           Enter Loan Information:
                           </h4>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        &nbsp;
                     </td>
                     <td width="48%">
                        Amount of the loan (any currency):
                        <span class="err">*</span>
                     </td>
                     <td>
                        <input type="text" name="principal" size="20">
                     </td>
                  </tr>
                  <tr>
                     <td>
                        &nbsp;
                     </td>
                     <td>
                        Annual percentage rate of interest:
                        <span class="err">*</span>
                     </td>
                     <td>
                        <input type="text" name="interest" size="20">
                     </td>
                  </tr>
                  <tr>
                     <td>
                        &nbsp;
                     </td>
                     <td>
                        Repayment period in years:
                        <span class="err">*</span>
                     </td>
                     <td>
                        <input type="text" name="years" size="20">
                     </td>
                  </tr>
                  <tr>
                     <td>
                        &nbsp;
                     </td>
                     <td>
                        Start Date of Loan:
                     </td>
                     <td>
                        <input type="text" name="start_date" size="20" id="start_date">
                     </td>
                  </tr>
                  <tr>
                     <td colspan="3">
                        <input type="submit" value="Calculate" name="EMI_submit" class="btn btn-primary col-sm-3">
                     </td>
                  </tr>
               </table>
            </form>
            <style type="text/css">
               .eni_list {
                
               }

               .eni_list tr:nth-child(2) {
                  font-family: 'Cantora One', sans-serif;
                  font-size: 14px;
               }

               .eni_list td {
                  padding: 5px;
                
                  text-align: center;
               }

               .eni_list tr:nth-child(even) {
                  background: #D7E4FF;
               }

               span.err {
                  color: #F00;
                  font-weight: bold;
               }
            </style>
            <table cellpadding="0" cellspacing="0" width="100%" class="eni_list">
               <?php 
               if(!empty($_POST['principal']) || !empty($_POST['interest']) || !empty($_POST['years'])){
               if(empty($_POST['principal'])){
               $error = "Amount of the loan Cant't Be Empty.<br />";
               }
               else if(empty($_POST['interest'])){
               $error= "Annual percentage rate of interest Cant't Be Empty. <br />";
               }
               else if(empty($_POST['years'])){
               $error= "Repayment period in years Cant't Be Empty. <br />";
               }
               else {
                  //simple chart dispaly here 
               ?>
               <tr>
                  <td colspan="7">
                     <table id="result" width="100%">
                        <tr>
                           <td colspan="3">
                              <b>
                                 Payment Information:
                              </b>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              &nbsp;
                           </td>
                           <td>
                              Your monthly payment will be:
                           </td>
                           <td>
                              <span id="monthly">$<?php echo round($monthly); ?>.00</span>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              &nbsp;
                           </td>
                           <td>
                              Your total payment will be:
                           </td>
                           <td>
                              <span id="total"></span>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              &nbsp;
                           </td>
                           <td>
                              Your total interest payments will be:
                           </td>
                           <td>
                              <span id="interest"></span>
                           </td>
                        </tr>
                     </table>
                  </td>
               </tr>
               <tr>
                  <td>
                     S.N
                  </td>
                  <td>
                     Payment Date
                  </td>
                  <td>
                     Interest
                  </td>
                  <td>
                     Beginning Balance
                  </td>
                  <td>
                     Principle
                  </td>
                  <td>
                     Total Payment
                  </td>
                  <td>
                     Ending Balance
                  </td>
               </tr>
               <?php
               getEmi($_POST['principal']); 
               ?>
               <script type="text/ecmascript">
                  document.getElementById("interest").innerHTML = "$" + < ? php echo round($totalint); ? > +".00";
                  document.getElementById("total").innerHTML = "$" + < ? php echo round($tp); ? > +".00";
               </script>
               <?php
               }}
               else {
               $error= "Plese Fill Up All Required Fields.";	
               }
               ?>
               <?php if(!empty($error)) : ?>
               <tr>
                  <td colspan="6" style="color:#F00; font-size:18px;">
                     <?php echo $error; ?></td>
               </tr>
               <?php endif; ?>
            </table>
            <?php if(isset($_POST['EMI_submit'])){ ?>
            <script language="JavaScript">
               document.getElementById('result').style.display = 'block';
            </script>
            <?php } ?>
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <script type="text/javascript">
               var j = jQuery.noConflict();
               j(function () {
                  // Datepicker
                  j('#start_date').datepicker({
                     inline: true,
                     minDate: "today"
                  })
               });
            </script>

         </div>
      </section>




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