<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="Law Firm Service Responsive HTML Website Template. Simple and clean layout built with bootstrap mobile framework. Its Free Download it.">
<meta name="keywords" content="law,legal services, business law, criminal, bankruptcy services,
  lawyer, immigration law, family law, civil litigations, real estate law, injury, taxation law, free website templates,responsive HTML website template">
<title>Law Firm Legal Service Responsive HTML Website Template</title>
<!-- Bootstrap -->
<link href="../css/bootstrap.min.css" rel="stylesheet">
<!-- Style CSS -->
<link href="../css/style.css" rel="stylesheet">
<!-- Google Fonts -->
<link href="../https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i" rel="stylesheet">
<link href="../https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<!-- FontAwesome CSS -->
<link rel="stylesheet" type="text/css" href="../css/fontello.css">
<link href="../css/font-awesome.min.css" rel="stylesheet">
<link href="../css/owl.carousel.min.css" rel="stylesheet">
<link href="../css/owl.theme.default.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <!-- header-start -->
<div class="header-wrapper">

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-2 col-sm-4 col-md-3 col-xs-12">
          <div class="logo"> <a href="index.php"><img src="../images/logo.png" class="img-responsive" alt=""></a> </div>
        </div>
        <div class="col-lg-7 col-md-9 col-sm-12 col-xs-12">
          <div class="navigation-wrapper">
            <div id="navigation">
              <ul>
                <li class="active"><a href="index.php" title="Home">Home</a></li>
                
                <li class=""><a href="practice.php" title="practice Area">Fields</a>
                  
                </li>
               
                <li><a href="lawyer.php" title="OurLawyer">Our Lawyers</a></li>
                 <li><a href="Contact.php" title="Contact Us">Contact Us</a> </li>
                 <li><a href="about.php" title="About us">About us</a> </li>
              </ul>
            </div>
          </div>
        </div>
       
        <div>
          
          <a href="lawyer-register.php" class="btn btn-primary">Lawyer Registration</a>
        
      <?php




      session_start();
      // echo $_SESSION["username"];
      if(!isset($_SESSION["username"]))
      {
        

        
    

?>  

<a href="client-login.php" class="btn btn-primary" name = "client_login_btn">Client Login</a>



<?php

      }
      else{?>

        <a href="logout.php" class="btn btn-primary" name = "client_logout_btn">LogOut</a>
      <?php }


$conn = mysqli_connect('sql105.epizy.com	
    ' , 'epiz_27432822' , 'MAXPLAMM9' , 'epiz_27432822_lawyers') or die ('Connect Failed');
 $sql = "select * from services";
 $result = mysqli_query($conn , $sql) or die ("Querry Failed");
if(mysqli_num_rows($result))
{
  



?>
</div>
      </div>
    </div>
  
</div>

<!-- header-close --> 

<!-- page-header-start -->
<div class="page-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="page-section"> <span class="page-text">Practice Area</span>
          <h1 class="page-title">Get Expert Legal Solution</h1>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- page-header-close --> 
<!-- practice-list-start -->
<div class="space-medium">
  <div class="container">
    
    <div class="row"> 
      <!-- list-1-start -->
      <?php
 while($row = mysqli_fetch_assoc($result))
 {
      ?>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="service-block">
          <div class="service-icon"><i class="icon-jury"></i></div>
          <div class="service-content">
            <h3><?php echo $row['service'] ?> Law</h3>
            <p><?php echo $row['details'] ?></p>
             </div>
        </div>
      </div>

      <?php
 }
}
      ?>
     
</div>
</div>
<!-- practice-list-close --> 
<!-- cta-start -->
<div class="bg-default">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="cta-section">
          <h1 class="cta-title ">Want To Free Legal Advice?</h1>
          <p class="cta-text">( Call Us: + 800-123-4567 )</p>
          <p class="mb20">or</p>
          <div class=""> <a href="#" class="btn btn-default">Request Free Consultation</a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- cta-close --> 

<!-- footer start -->
<div class="footer">
        <div class="container">
            <div class="row">
                <!-- footer-about-start -->
                <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-widget">
                        <div class="logo mb30">
                            <a href="index.php"><img src="images/ft-logo.png" class="img-responsive" alt=""></a>
                        </div>
                        <a href="#" class="btn btn-default btn-sm">contact us</a></div>
                </div>
                <!-- footer-about-close -->
                <!-- footer-useful links-start -->
                <div class=" col-lg-2 col-md-2 col-sm-3 col-xs-12">
                    <div class="footer-widget">
                        <h3 class="footer-title">Quick Links</h3>
                        <ul>
                            <li><a href="index.php">Home </a></li>
                            <li><a href="about.php">About us </a></li>
                            <li><a href="#">Practice Area </a></li>
                            <li><a href="Casees.php">Cases </a></li>
                            <li><a href="#">News </a></li>
                            <li> <a href="Contact.php">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <!-- footer-useful links-close -->
                <!-- footer-timing-start -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 ">
                    <div class="footer-widget">
                        <h3 class="footer-title">Opening Hours</h3>
                        <div class="footer-timing">
                            <ul>
                                <li> Mon-Thu: 9:30am - 09:00pm</li>
                                <li>Fri: 6:00pm - 09:00pm </li>
                                <li>Sat: 10:00am - 03:00pm</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- footer-timing-close -->
                <!-- footer-address-start -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 ">
                    <div class="footer-widget">
                        <h3 class="footer-title">Contact Info</h3>
                        <div class="contact-info">
                            <ul>
                                <li>4096 N Highland St, Arlington VA 32101, USA</li>
                                <li>800-123-4567</li>
                                <li>info@demolink.org</li>
                            </ul>
                        </div>
                        <div class="footer-social"> <span><a href="#"><i class="fa fa-facebook"></i></a></span> <span><a href="#"><i class="fa fa-google-plus"></i></a></span> <span><a href="#"><i class="fa fa-twitter"></i></a> </span> </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-address-close -->
    </div>
    <!-- tiny-footer-start -->
    <div class="tiny-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Law Firm 2017 © All Rights Reserved | Privacy Policy</p>
                </div>
            </div>
        </div>
        <!-- tiny-footer-start -->
    </div>
    <!-- footer close -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery.min.js" type="text/javascript"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../js/menumaker.js" type="text/javascript"></script>
    <script type="text/javascript" src="../js/jquery.sticky.js"></script>
    <script type="text/javascript" src="../js/sticky-header.js"></script>
    <script type="text/javascript" src="../js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="../js/slider.js"></script>


</body>
</html>