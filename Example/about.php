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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">




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

    
    <style>
        .bs-example{
            margin: 20px;
        }
    </style>



</head>
<body>

    <!-- header-start -->
  

<<div class="header-wrapper">

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



?>
</div>
  </div>
</div>

</div>

<!-- header-close --> 

   <!-- about-start -->
   <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-lg-12 text-center">
                    <div class="section-title"> <span class="small-title">About Our Law Firm</span>
                        <h1>Law Firm </h1>
                        <p class="lead">PLD Law Publishers, founded in 1947, is one of the oldest and most prominent legal publishing houses in the country, </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="feature-block">
                        <div class="feature-content">
                            <h2 class="mb30">Why Choose us?</h2>
                            <p>Pakistan law site was launched in the year 2002 with the aim to meet the specific requirements of legal and law practitioners, plus increasingly, those of the wider business and academic community</p>
                            <a href="#" class="btn-link"> read more</a> </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="feature-block">
                        <div class="feature-content">
                            <h2 class="mb30">Legal Fees</h2>
                            <p>Interestingly, there is absolutely no official fee on instituting a criminal case right from the district courts and appealing to the high courts and the Supreme Court..</p>
                            <a href="#" class="btn-link">View Our Fees</a> </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="feature-block">
                        <div class="feature-content">
                            <h2 class="mb30">Our Recent Result</h2>
                            <div class="feature-icon feature-text">
                                <ul>
                                    <li><i class="fa fa-check-square-o "></i>1.4 Million Forkl Wrongful Death Case</li>
                                    <li><i class="fa fa-check-square-o "></i>1.2 Million Head-On Collision Case </li>
                                    <li><i class="fa fa-check-square-o "></i>750,000.00 Truck Accident Case</li>
                                </ul>
                            </div>
                            <a href="#" class="btn-link">About us</a> </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="mt30">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><img src="../images/about-img.jpg" alt="" class="img-responsive"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> <span class="small-title mb30">About Our Law Firm </span>
                        <p class="lead">Legal Fraternity of Pakistan </p>
                        <p>It make a contribution towards the cause of dispensation of justice and adhere to the principle of Rule of Law. To this end, we strive to make legal </p>
                        <p>research straightforward, time-effective and comprehensive. It is our endeavor to remain the principal online resource for legal research in Pakistan.</p>
                        <p> it is hoped that in years to come, we can continue serving the legal fraternity of Pakistan.</p>
                        <a href="#" class="btn btn-primary btn-lg">contact us</a> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about-close -->
    <!-- counter-start -->
    <div class="space-medium bg-default">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <div class="counter-block">
                        <div class="counter-icon"><i class="icon-student"></i></div>
                        <div class="counter-content">
                            <h1 class="counter-title">1500 +</h1>
                            <span class="counter-text">Happy Clients</span> </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <div class="counter-block">
                        <div class="counter-icon"><i class="icon-libra"></i></div>
                        <div class="counter-content">
                            <h1 class="counter-title">20 +</h1>
                            <span class="counter-text">Years Of Experience</span> </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <div class="counter-block">
                        <div class="counter-icon"><i class="icon-agreement"></i></div>
                        <div class="counter-content">
                            <h1 class="counter-title">1750 +</h1>
                            <span class="counter-text">Successfull Cases</span> </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <div class="mt80"><a href="#" class="btn btn-default btn-lg">Request Free Consultation</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter-close -->
        <!-- footer start -->
 <div class="footer">
        <div class="container">
            <div class="row">
                <!-- footer-about-start -->
                <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-widget">
                        <div class="logo mb30">
                            <a href="index.html"><img src="../images/ft-logo.png" class="img-responsive" alt=""></a>
                        </div>
                        <a href="#" class="btn btn-default btn-sm">Contact us</a></div>
                </div>
                <!-- footer-about-close -->
                <!-- footer-useful links-start -->
                <div class=" col-lg-2 col-md-2 col-sm-3 col-xs-12">
                    <div class="footer-widget">
                        <h3 class="footer-title">Quick Links</h3>
                        <ul>
                            <li><a href="#">Home </a></li>
                            <li><a href="#">About us </a></li>
                            <li><a href="#">Practice Area </a></li>
                            <li><a href="#">Cases </a></li>
                            <li><a href="#">News </a></li>
                            <li> <a href="#">Contacts</a></li>
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
                                <li>Mon-Thu: 9:00am - 09:00pm</li>
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