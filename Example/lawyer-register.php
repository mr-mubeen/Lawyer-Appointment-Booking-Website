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

$conn = mysqli_connect('sql105.epizy.com	
    ' , 'epiz_27432822' , 'MAXPLAMM9' , 'epiz_27432822_lawyers') or die ('Connect Failed');


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

<br><br><br>

<div class="container">
    <h2>Lawyer Registeration Form</h2>
<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
    <label >CNIC</label>
    <input type="number" class="form-control" name="nic" maxlength="14" required>
  </div>


  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" name="name" required>
  </div>
  
  <div class="form-group">
  <label >Specialization</label><br>
  <select name="specialize" id="" required class="form-control">
  <?php

 $sql = "select * from services";
 $result = mysqli_query($conn , $sql) or die ("Querry Failed");
  ?>
    <option value="" selected disabled>Select Specialize</option>
    <?php
    while($row = mysqli_fetch_assoc($result))
    {
    ?>

      <option value="<?php echo $row['service']?>"><?php echo $row['service']?></option>
<?php

    }

    ?>
   
  </select>
    
  </div>

  

  <!-- <div class="form-group">
    <label >Specializee</label>
    <input type="text" class="form-control" name="cases_done" required>
  </div> -->
  
  <div class="form-group">
    <label >Cases Done</label>
    <input type="number" class="form-control" name="cases_done"  required>
  </div>
  
  <div class="form-group">
      <label >Success Cases</label>
      <input type="number" class="form-control" name="succes_case"  required>
  </div>
  
  <div class="form-group">
    <label >Contact</label>
    <input type="number" class="form-control" name="contact" required>
  </div>
  
  <div class="form-group">
  <label >Location</label><br>
  <select name="location" id="" required class="form-control">
  <?php

 $sql = "select * from location";
 $result = mysqli_query($conn , $sql) or die ("Querry Failed");
  ?>
    <option value="" selected disabled>Select Location</option>
    <?php
    while($row = mysqli_fetch_assoc($result))
    {
    ?>

      <option value="<?php echo $row['location']?>"><?php echo $row['location']?></option>
<?php

    }

    ?>
   
  </select>
    <!-- 
    <input type="text" class="form-control" name="location" required> -->
  </div>
  
  <div class="form-group">
  <label >Services</label><br>
  <select name="services" id="" required class="form-control">
  <?php

 $sql = "select * from services";
 $result = mysqli_query($conn , $sql) or die ("Querry Failed");
  ?>
    <option value="" selected disabled>Select Services</option>
    <?php
    while($row = mysqli_fetch_assoc($result))
    {
    ?>

      <option value="<?php echo $row['service']?>"><?php echo $row['service']?></option>
<?php

    }

    ?>
   
  </select>
    
  </div>
  
  <div class="form-group">
    <label >Image</label>
    <input type="file" name="image" class="form-control"  required>
  </div>
  
  <button type="submit" class="btn btn-primary" name = "sbt" >Register Lawyer</button>
  
</form>
<a href="index.php" class="btn btn-primary"> Cancel </a>
</div>

<?php

if(isset($_POST['sbt'])){
    $l_nic = $_POST['nic'];
      $l_name = $_POST['name'];
      $l_spec = $_POST['specialize'];
      $l_c_d = $_POST['cases_done']; 
      $l_s_c = $_POST['succes_case'];
      $l_cont = $_POST['contact'];
      $l_loc = $_POST['location'];
      $l_serv = $_POST['services']; 

      $filename = $_FILES['image']['name'];
      $filesize = $_FILES['image']['size'];
      $filetmp = $_FILES['image']['tmp_name'];
      $des = "../backend/images/".$filename;

      move_uploaded_file($filetmp , $des);
      $sql1 = "select * from lawyer where nic = '{$l_nic}'";
      $result1 = mysqli_query($conn , $sql1) or die ("Regsiter Failed");
      $a = mysqli_num_rows($result1);
      
     if($a == 0)
     {
          if($l_s_c > $l_c_d)
          {
              echo "<script>alert('Success Cases are greater than Cases Done')</script>";
          }
          else{
      
      $sql = "INSERT INTO lawyer(nic , Name,Specialization,Cases_done , Success_cases , Contact , Location , Services , image) VALUES ('{$l_nic}', '{$l_name}' , '{$l_spec}' , '{$l_c_d}' , '{$l_s_c}' , '{$l_cont}' , '{$l_loc}' , '{$l_serv}' , '{$filename}' )";
      $result = mysqli_query($conn , $sql) or die ("Regsiter Failed");
      
      if($result)
      {
          echo "<script>alert('Register Successfull....!!')</script>";
          
      }
      else {
         
          echo "<script>alert('Registration Failed')</script>";
      }

    }

  }
 else {
    echo "<script>alert('Already Registered')</script>";
 }    
       
      } 



?>
   
<br><br>


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
                            <li><a href="practice.php">Practice Area </a></li>
                            
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