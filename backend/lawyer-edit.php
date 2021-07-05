<?php
if(isset($_POST['sbt'])){
        $s_id = $_POST['id'];
        $l_name = $_POST['name'];
        $l_spec = $_POST['specialize'];
        $l_c_d = $_POST['cases_done']; 
        $l_s_c = $_POST['succes_case'];
        $l_cont = $_POST['contact'];
        $l_loc = $_POST['location'];
        $l_serv = $_POST['service']; 

        if($l_s_c > $l_c_d)
        {
            echo "<script>alert('Success Cases are greater than Cases Done')</script>";
        }
        else{
            $conn = mysqli_connect('sql105.epizy.com	
            ' , 'epiz_27432822' , 'MAXPLAMM9' , 'epiz_27432822_lawyers') or die ('Connect Failed');
    echo $check = "update lawyer set Name = '{$l_name}' , Specialization = '{$l_spec}', Cases_done = '{$l_c_d}' , Success_cases = '{$l_s_c}' , Contact = '{$l_cont}' , Location = '{$l_loc}' , Services = '{$l_serv}'   where LawyerID = '{$s_id}' ";
    

    $result1 = mysqli_query($conn , $check) or die("Querry Failed");
    
    if($result1)
    {
        echo "<script>alert('Updated....!!')</script>";
    }
    else {
       
        echo "<script>alert('Update Failed')</script>";
    }

    
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


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
</head>
<body>
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
                            <div class="header-button">
                              
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Admin</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Admin</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

<?php 
$s_id = $_GET['id'];

$conn = mysqli_connect('sql105.epizy.com	
    ' , 'epiz_27432822' , 'MAXPLAMM9' , 'epiz_27432822_lawyers') or die ('Connect Failed');
$check = "SELECT * FROM lawyer where LawyerID = '$s_id'";
$result1 = mysqli_query($conn , $check) or die("Querry Failed");
if (mysqli_num_rows($result1) > 0) 
{
    
    ?>
   
<br><br><br><br>

<div class="container">


    <h2>Lawyer Edit Form</h2>
<form action="" method="post" enctype="multipart/form-data">
<?php
 while($row = mysqli_fetch_assoc($result1)){
     ?>
  <div class="form-group">
  <input type="hidden" class="form-control" name="id" value = "<?php echo $row['LawyerID']; ?>" required>
    <label >Name</label>
    <input type="text" class="form-control" name="name" value = "<?php echo $row['Name']; ?>" required>
  </div>
  
  <div class="form-group">
  <label >Specialization</label><br>
  <select name="specialize" id="" required class="form-control">
  <?php
$conn = mysqli_connect('sql105.epizy.com	
' , 'epiz_27432822' , 'MAXPLAMM9' , 'epiz_27432822_lawyers') or die ('Connect Failed');
 $sql = "select * from services";
 $result = mysqli_query($conn , $sql) or die ("Querry Failed");
  ?>
    
    <?php
    while($row1 = mysqli_fetch_assoc($result))
    {
       
    ?>

<option  value="<?php echo $row1['service']?>"><?php echo $row1['service']?></option>


<?php
    }
 if($row['Services'] == $row1['service']){
     $select = "selected";
 }
 else{
     $select = "";
 }
    

    ?>
    <option selected value="<?php echo $row['Services']?>"><?php echo $row['Services']?></option>
   
  </select>
    
  </div>
  
  <div class="form-group">
    <label >Caases Done</label>
    <input type="number" class="form-control" name="cases_done" value = "<?php echo $row['Cases_done']; ?>" required>
  </div>
  
  <div class="form-group">
      <label >Success Cases</label>
      <input type="number" class="form-control" name="succes_case" value = "<?php echo $row['Success_cases']; ?>" required>
  </div>
  
  <div class="form-group">
    <label >Contact</label> 
    <input type="number" class="form-control" name="contact" value = "<?php echo $row['Contact']; ?>" required>
  </div>
  
  <div class="form-group">
  <label >Location</label><br>
  <select name="location" id="" required class="form-control">
  <?php
$conn = mysqli_connect('sql105.epizy.com	
' , 'epiz_27432822' , 'MAXPLAMM9' , 'epiz_27432822_lawyers') or die ('Connect Failed');
 $sql = "select * from location";
 $result = mysqli_query($conn , $sql) or die ("Querry Failed");
  ?>
    
    <?php
    while($row1 = mysqli_fetch_assoc($result))
    {
       
    ?>

<option  value="<?php echo $row1['location']?>"><?php echo $row1['location']?></option>


<?php
    }
 if($row['Location'] == $row1['location']){
     $select = "selected";
 }
 else{
     $select = "";
 }
    

    ?>
    <option selected value="<?php echo $row['Location']?>"><?php echo $row['Location']?></option>
   
  </select>
    
  </div>
  <div class="form-group">
  <label >Services</label><br>
  <select name="service" id="" required class="form-control">
  <?php
$conn = mysqli_connect('sql105.epizy.com	
' , 'epiz_27432822' , 'MAXPLAMM9' , 'epiz_27432822_lawyers') or die ('Connect Failed');
 $sql = "select * from services";
 $result = mysqli_query($conn , $sql) or die ("Querry Failed");
  ?>
    
    <?php
    while($row1 = mysqli_fetch_assoc($result))
    {
       
    ?>

<option  value="<?php echo $row1['service']?>"><?php echo $row1['service']?></option>


<?php
    }
 if($row['Services'] == $row1['service']){
     $select = "selected";
 }
 else{
     $select = "";
 }
    

    ?>
    <option selected value="<?php echo $row['Services']?>"><?php echo $row['Services']?></option>
   
  </select>
    
  </div>
  
  
 
    <?php
 }
 ?>

  <button type="submit" class="btn btn-primary" name = "sbt" >Update</button>
</form>

</div>

<?php
    
}
?>







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