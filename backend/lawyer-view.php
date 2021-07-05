<?php 

$conn = mysqli_connect('sql105.epizy.com	
    ' , 'epiz_27432822' , 'MAXPLAMM9' , 'epiz_27432822_lawyers') or die ('Connect Failed');
$check = "SELECT * FROM lawyer join services , location where lawyer.Services = services.service and lawyer.Location = location.location";

$result1 = mysqli_query($conn , $check) or die("Querry Failed");
if (mysqli_num_rows($result1) > 0) 
{

   ?>


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
    background-color: gray;
    color: white;
    font-size: 20px;
    font-weight: bold;
    border: 1px solid black;
    text-align: center;
}

    th , td{
        text-align: center;
        padding: 10px;
        border:1px solid black;
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
            <br><br><br><br>
            
            <div class="container">
            


  
  <?php
  }
  ?>

<h2>Lawyer Registration Form</h2>
<br><br>
          
   
    <table style="text-align:center;  font-size:20px; border: 2px solid black;" class="">
        <tr>
            <th>Lawyer Id </th>
            <th>NIC</th>
            <th>Name </th>
            <th>Specialization </th>
            <th>Cases Done </th>
            <th>Success Cases </th>
            <th>Contact </th>
            <th>Location </th>
            <th>Services </th>
            <th>Image </th>
            <th>Edit </th>
            <th>Delete </th>
        </tr>
        <?php 
       while($row = mysqli_fetch_assoc($result1)){ ?>
       
                        <tr>
                            <td><?php echo $row['LawyerID']; ?></td>
                            <td><?php echo $row['nic']; ?></td>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['Specialization']; ?></td>
                            <td><?php echo $row['Cases_done']; ?></td>
                            <td><?php echo $row['Success_cases']; ?></td>
                            <td><?php echo $row['Contact']; ?></td>
                            <td><?php echo $row['location']; ?></td>
                            <td><?php echo $row['service']; ?></td>
                            <td>
                            <?php echo "<img src='images/".$row["image"]."' width='200px' height='200px'>"; ?>
                            </td>
                           
                            <td>
                           <a name="edit" href="lawyer-edit.php?id=<?php echo $row['LawyerID']; ?>">Edit</a>  
                                                           
                            </td>
                            <td>
                            <a name="delete" href="lawyer-delete.php?id=<?php echo $row['LawyerID']; ?>">Delete</a>  
                                                           
                            </td>
                            <!-- <td>
                            <a name="appoint" href="appointment.php?id=<?php echo $row['LawyerID']; ?>">Book appointment</a>  
                                                           
                            </td> -->
                        </tr>
       <?php } ?>
                       
                       
                    </tbody>
                </table>
        
   





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
