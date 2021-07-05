</php session_start();?>
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
                <!-- <li class="has-sub"><a href="Cases.php" title="Cases">Cases</a>
                  <ul>
                    <li><a href="Cases.php" title="Case List">Case List</a></li>
                    <li><a href="Casesingle.php" title="Case Single">Case Single</a></li>
                  </ul>
                </li> -->
                <!-- <li class="has-sub"><a href="Blog.php" title="Blog ">Blog</a>
                  <ul>
                    <li><a href="Blog.php" title="Blog">Blog Default</a></li>
                    <li><a href="Blog2.php" title="Blog Single ">Blog Single</a></li>
                  </ul>
                </li> -->
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
  
</div>

<?php

?>