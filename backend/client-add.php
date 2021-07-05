<!DOCTYPE html>
<html lang="en">
 
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">


<style>

    th{
        padding-left : 40px;
    }
</style>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <h3>Lawyers Firm</h3>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                <ul class="list-unstyled navbar__list">
                    <li class="has-sub">
                            <a class="js-arrow" href="lawyer-view.php">
                                <i class="fas fa-tachometer-alt"></i>Lawyers</a>
                            
                        </li>
                        <li>
                            <a href="client-view.php">
                                <i class="fas fa-chart-bar"></i>Clients</a>
                        </li>
                        <li>
                            <a href="appointment.php">
                                <i class="fas fa-table"></i>Appointments</a>
                        </li>
                      
                        
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <h3>Lawyers Firm</h3>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="has-sub">
                            <a class="js-arrow" href="lawyer-view.php">
                                <i class="fas fa-tachometer-alt"></i>Lawyers</a>
                            
                        </li>
                        <li>
                            <a href="client-view.php">
                                <i class="fas fa-chart-bar"></i>Clients</a>
                        </li>
                        <li>
                            <a href="appointment.php">
                                <i class="fas fa-table"></i>Appointments</a>
                        </li>
                      
                        
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
            <br><br><br><br>

            <br><br><br>

<div class="container">
    <h2>Client Registration Form</h2>
<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" name="name" required>
  </div>
  
  <div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control" name="email" required>
  </div>
  
  <div class="form-group">
    <label >City</label>
    <input type="text" class="form-control" name="city" required>
  </div>
  
  <div class="form-group">
      <label >Contact</label>
      <input type="number" class="form-control" name="contact" required>
  </div>
  
  <div class="form-group">
    <label >Gender</label>
    <input type="text" class="form-control" name="gender" required>
  </div>
  

  
  <button type="submit" class="btn btn-primary" name = "sbt" >Submit</button>
</form>

</div>
   
    
        
   






           
 

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->


<?php  
    if(isset($_POST['sbt'])){
        $c_name = $_POST['name'];
        $c_email = $_POST['email'];
        $c_city = $_POST['city']; 
        $c_contact = $_POST['contact'];
        $c_gender = $_POST['gender'];
       

               
        $conn = mysqli_connect('sql105.epizy.com	
        ' , 'epiz_27432822' , 'MAXPLAMM9' , 'epiz_27432822_lawyers') or die ('Connect Failed');
        $sql = "INSERT INTO clients(c_name,Email,City , c_contact , Gender ) VALUES ('{$c_name}' , '{$c_email}' , '{$c_city}' , '{$c_contact}' , '{$c_gender}')";
        $result = mysqli_query($conn , $sql) or die ("Regsiter Failed");
        
        if($result)
        {
            echo "<script>alert('Data  Inserted....!!')</script>";
        }
        else {
           
            echo "<script>alert('Insert Failed')</script>";
        }
       
        // header ("location: http://localhost/project/client-view.php");
        } 

?>
