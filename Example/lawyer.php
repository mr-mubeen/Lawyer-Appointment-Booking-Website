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
</head>

<!-- header-start -->
<body>
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



?>
</div>
      </div>
    </div>
  
</div>

<!-- header-close --> 

<br><br>
<div class="container">
<form action="lawyer.php" method="POST">

<input type="radio" name="search" value="Location" style= "margin-left:20px;" required > Location
<input type="radio" name="search" value="Service" style= "margin-left:20px;"> Service
<input type="text" name="search_input" placeholder="Search By Location Or Services" id="" style= "margin-left:20px; width:300px;"  required>

<button name="srch_btn">Search</button>

</form>


</div>

<div class="container">

<br><br><br>

<?php

$conn = mysqli_connect('sql105.epizy.com	
    ' , 'epiz_27432822' , 'MAXPLAMM9' , 'epiz_27432822_lawyers') or die ('Connect Failed');
  
    
    if(isset($_POST['srch_btn']))
    {
      
      $search_var = $_POST['search'];
     
      $search_input = $_POST['search_input'];
      
      
    if($search_var == "Location")
    {
    $check = "SELECT * FROM lawyer where Location = '{$search_input}'";
        
    $result1 = mysqli_query($conn , $check) or die("Querry Failed");
    $b = mysqli_num_rows($result1);
    
    if ($b> 0) 
  {
   while($a = mysqli_fetch_assoc($result1))
   {
     
   

?>
<div class="col-md-3">
<div class="card">
<div class="card-body">
<img style="width:300px; height:250px;" src="../backend/images/<?php echo $a['image']; ?>" class="card-img-top" alt="lawyer images">
<input type="hidden" class="form-control" name="id" value = "<?php echo $a['LawyerID']; ?>" required>
<br><br><br>
<h2 class="card-title">Name:<?php echo $a['Name'];?></h2>
<h3 class="card-title">Specialization: <?php echo $a['Specialization'];?></h3>
<br><br>
<h4 class="card-title">Cases Done: </t><?php echo $a['Success_cases'];?></h4>
<h4 class="card-title">Contact Number:  </t><?php echo $a['Contact'];?></h4>
<h4 class="card-title">Address: </t><?php echo $a['Location'];?></h4>
<h4 class="card-title">Services : </t><?php echo $a['Services'];?></h4>
<a href="lawyer-profile.php?id=<?php echo $a['LawyerID'] ?>" class="btn btn-primary stretched-link">View Profile</a>
<!-- <a href="appointment.php?id=<?php echo $a['LawyerID']; ?>" class="btn btn-primary stretched-link">Book An Appointment</a> -->

<p class="card-text"></p>
                    </div>
               </div>
               <br><br>
         </div>

         <?php
   }
  }
  else{
    echo "<h2> NO RECORDS FOUND </h2>";
  }
}
else if($search_var == "Service")
    {
    $check = "SELECT * FROM lawyer where Services = '{$search_input}'";
        
    $result1 = mysqli_query($conn , $check) or die("Querry Failed");
    if (mysqli_num_rows($result1) > 0) 
  {
   while($a = mysqli_fetch_assoc($result1))
   {

  ?>
  <div class="col-md-3">
<div class="card">
<div class="card-body">
<img style="width:300px; height:250px;" src="../backend/images/<?php echo $a['image']; ?>" class="card-img-top" alt="lawyer images">
<input type="hidden" class="form-control" name="id" value = "<?php echo $a['LawyerID']; ?>" required>
<br><br><br>
<h2 class="card-title">Name:<?php echo $a['Name'];?></h2>
<h3 class="card-title">Specialization: <?php echo $a['Specialization'];?></h3>
<br><br>
<h4 class="card-title">Cases Done: </t><?php echo $a['Success_cases'];?></h4>
<h4 class="card-title">Contact Number:  </t><?php echo $a['Contact'];?></h4>
<h4 class="card-title">Address: </t><?php echo $a['Location'];?></h4>
<h4 class="card-title">Services : </t><?php echo $a['Services'];?></h4>
<a href="lawyer-profile.php?id=<?php echo $a['LawyerID'] ?>" class="btn btn-primary stretched-link">View Profile</a>
<!-- <a href="appointment.php?id=<?php echo $a['LawyerID']; ?>" class="btn btn-primary stretched-link">Book An Appointment</a> -->

<p class="card-text"></p>
                    </div>
               </div>
               <br><br>
         </div>
  <?php
          }
       }
       else{
        echo "<h2> NO RECORDS FOUND </h2>";
      }
      }
     
    }
else
{
  

  $conn = mysqli_connect('sql105.epizy.com	
    ' , 'epiz_27432822' , 'MAXPLAMM9' , 'epiz_27432822_lawyers') or die ('Connect Failed');
 $query = "SELECT * FROM lawyer";
 $run = mysqli_query($conn , $query);
 $check_lawyer = mysqli_num_rows($run) > 0;
 if($check_lawyer)

       {
         while($a = mysqli_fetch_assoc($run))
         {

  ?>
<div class="col-md-3">
<div class="card">
<div class="card-body">
<img style="width:300px; height:250px;" src="../backend/images/<?php echo $a['image']; ?>" class="card-img-top" alt="lawyer images">
<input type="hidden" class="form-control" name="id" value = "<?php echo $a['LawyerID']; ?>" required>
<br><br><br>
<h2 class="card-title">Name:<?php echo $a['Name'];?></h2>
<h3 class="card-title">Specialization: <?php echo $a['Specialization'];?></h3>
<br><br>
<h4 class="card-title">Cases Done: </t><?php echo $a['Success_cases'];?></h4>
<h4 class="card-title">Contact Number:  </t><?php echo $a['Contact'];?></h4>
<h4 class="card-title">Address: </t><?php echo $a['Location'];?></h4>
<h4 class="card-title">Services : </t><?php echo $a['Services'];?></h4>
<a href="lawyer-profile.php?id=<?php echo $a['LawyerID'] ?>" class="btn btn-primary stretched-link">View Profile</a>
<!-- <a href="appointment.php?id=<?php echo $a['LawyerID']; ?>" class="btn btn-primary stretched-link">Book An Appointment</a> -->

<p class="card-text"></p>
                    </div>
               </div>
               <br><br>
         </div>


  <?php
         }
        }
        
      }
    
     

         ?>

         <br><br><br>

</div>

<br><br><br>








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
                                <li> Mon-Thu: 9:00am - 09:00pm</li>
                                <li>Fri: 06:00pm - 09:00pm </li>
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