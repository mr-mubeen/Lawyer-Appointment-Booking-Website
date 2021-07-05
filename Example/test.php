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
                <li><a href="about.php" title="About us">About us</a> </li>
                <li class="has-sub"><a href="#" title="practice Area">Practice Area</a>
                  <ul>
                    <li><a href="practice.php" title="Practice Area">Practice Area</a></li>
                    <li><a href="practice2.php" title="Practice Single">Practice Single </a></li>
                  </ul>
                </li>
                <li class="has-sub"><a href="Cases.php" title="Cases">Cases</a>
                  <ul>
                    <li><a href="Cases.php" title="Case List">Case List</a></li>
                    <li><a href="Casesingle.php" title="Case Single">Case Single</a></li>
                  </ul>
                </li>
                <li class="has-sub"><a href="Blog.php" title="Blog ">Blog</a>
                  <ul>
                    <li><a href="Blog.php" title="Blog">Blog Default</a></li>
                    <li><a href="Blog2.php" title="Blog Single ">Blog Single</a></li>
                  </ul>
                </li>
                <li><a href="lawyer.php" title="OurLawyer">Our Lawyers</a></li>
                <li><a href="Contact.php" title="Contact Us">Contact Us</a> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-2 hidden-md hidden-sm hidden-xs">
          <div class="call-info">
            <p class="call-text">( +800-123-4567 )</p>
          </div>
        </div>
        <div class="col-lg-1 hidden-md hidden-sm hidden-xs">
          <div class="social ">
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  
</div>

<!-- header-close --> 

<br><br>
<div class="container">


<input type="radio" name="search" value="Location"> Location
<input type="radio" name="search" value="Service"> Service<br>
<input type="text" name="search_input" id=""><br>

<a href="" name="srch_btn">Search</a>

</div>


<?php


$conn = mysqli_connect('localhost' , 'root' , '' , 'lawyers') or die ('Connect Failed');
  
    
    if(isset($_POST['srch_btn']))
    {
      
      $search = $_POST['search'];
     
      $search_input = $_POST['search_input'];
      echo "<script>alert('$search_input')</script>";
      
    if($search == "Location")
    {
    $check = "SELECT * FROM lawyer where Location = '{$search_input}'";
        
    $result1 = mysqli_query($conn , $check) or die("Querry Failed");
    echo $b = mysqli_num_rows($result1);
    if ( $b> 0) 
  {
   while($a = mysqli_fetch_assoc($result1))
   {
     
   

?>
<div class="col-md-3">
<div class="card">
<div class="card-body">
<img src="../backend/images/<?php echo $a['image']; ?>" class="card-img-top" alt="lawyer images">
<h2 class="card-title">Name:<?php echo $a['Name'];?></h2>
<h3 class="card-title">Specialization: <?php echo $a['Specialization'];?></h3>
<h4 class="card-title">Cases Done: </t><?php echo $a['Success_cases'];?></h4>
<h4 class="card-title">Contact Number:  </t><?php echo $a['Contact'];?></h4>
<h4 class="card-title">Address: </t><?php echo $a['Location'];?></h4>
<h4 class="card-title">Services : </t><?php echo $a['Services'];?></h4>
<a href="#" class="btn btn-primary stretched-link">View Profile</a>

<p class="card-text"></p>
                    </div>
               </div>
         </div>

         <?php
   }
  }
}
else if($search == "Service")
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
<img src="../backend/images/<?php echo $a['image']; ?>" class="card-img-top" alt="lawyer images">
<h2 class="card-title">Name:<?php echo $a['Name'];?></h2>
<h3 class="card-title">Specialization: <?php echo $a['Specialization'];?></h3>
<h4 class="card-title">Cases Done: </t><?php echo $a['Success_cases'];?></h4>
<h4 class="card-title">Contact Number:  </t><?php echo $a['Contact'];?></h4>
<h4 class="card-title">Address: </t><?php echo $a['Location'];?></h4>
<h4 class="card-title">Services : </t><?php echo $a['Services'];?></h4>
<a href="#" class="btn btn-primary stretched-link">View Profile</a>

<p class="card-text"></p>
                    </div>
               </div>
         </div>
  <?php
          }
       }
      }
     
    }
else
{
  

  $conn = mysqli_connect('localhost' , 'root' , '' , 'lawyers') or die ('Connect Failed');
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
<img src="../backend/images/<?php echo $a['image']; ?>" class="card-img-top" alt="lawyer images">
<h2 class="card-title">Name:<?php echo $a['Name'];?></h2>
<h3 class="card-title">Specialization: <?php echo $a['Specialization'];?></h3>
<h4 class="card-title">Cases Done: </t><?php echo $a['Success_cases'];?></h4>
<h4 class="card-title">Contact Number:  </t><?php echo $a['Contact'];?></h4>
<h4 class="card-title">Address: </t><?php echo $a['Location'];?></h4>
<h4 class="card-title">Services : </t><?php echo $a['Services'];?></h4>
<a href="#" class="btn btn-primary stretched-link">View Profile</a>

<p class="card-text"></p>
                    </div>
               </div>
         </div>


  <?php
         }
        }
        
      }
    
     

         ?>






       
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
</html>*/