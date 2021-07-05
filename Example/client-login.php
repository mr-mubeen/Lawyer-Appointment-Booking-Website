<?php

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = mysqli_connect('sql105.epizy.com	
    ' , 'epiz_27432822' , 'MAXPLAMM9' , 'epiz_27432822_lawyers') or die ('Connect Failed');
    $sql = "select * from clients where c_name = '{$username}' AND password = '{$password}'";
    $result = mysqli_query($conn , $sql) or die ("Querry Failed");
    $a = mysqli_num_rows($result);
    echo '<script>alert($a)</script>';
    
    if($a > 0)
    {
       while($row = mysqli_fetch_assoc($result))
        {
            session_start();

            $_SESSION["username"] = $row['c_name'];
            $_SESSION["client_id"] = $row['ClientID'];
            $_SESSION["client_contact"] = $row['c_contact'];
            echo $_SESSION["client_id"];
            
            
        }
        echo '<script>alert("Login")</script>';
        header ("Location: index.php");

        
    }
    else
    {
        echo '<script>alert("Username and Password are not correct")</script>';
        // echo '<div class="alert alert-danger"> Username and Password are not correct </div>';
    }
    



}



?>

<?php include "header-file.php"; ?>
<br><br>
<div class="container">

<h1><ins> Customer Login Form </ins></h1>

<form action="" method ="POST">

   <div class="form-group">
    <label >Username</label>
    <input type="text" name="username" class="form-control"  required>
  </div>


  <div class="form-group">
    <label >Password</label>
    <input type="password" name="password" class="form-control"  required>
  </div>

  <button name="login" class="btn btn-primary" ><a href="index.php"></a> Login</button>
  <br><br>
</form>


<a href="client-register.php" class="btn btn-primary"> Register </a>
</div>



<br><br>






































<?php include "footer-file.php"; ?>

