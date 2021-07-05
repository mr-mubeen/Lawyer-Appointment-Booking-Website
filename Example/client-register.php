<?php  
    if(isset($_POST['sbt'])){
        $c_name = $_POST['name'];
        $c_email = $_POST['email'];
        $c_city = $_POST['city']; 
        $c_contact = $_POST['contact'];
        $c_gender = $_POST['gender'];
        $c_pass = $_POST['pasword'];
       

               
        $conn = mysqli_connect('sql105.epizy.com	
        ' , 'epiz_27432822' , 'MAXPLAMM9' , 'epiz_27432822_lawyers') or die ('Connect Failed');
        $sql = "INSERT INTO clients(c_name,Email,City , c_contact , Gender ,password ) VALUES ('{$c_name}' , '{$c_email}' , '{$c_city}' , '{$c_contact}' , '{$c_gender}' , '{$c_pass}' )";
        $result = mysqli_query($conn , $sql) or die ("Regsiter Failed");
        
        if($result)
        {
            echo "<script>alert('You are Register')</script>";
        }
        else {
           
            echo "<script>alert('Register Failed')</script>";
        }
       
        // header ("location: http://localhost/project/client-view.php");
        } 

?>
<?php include "header-file.php"; ?>


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
  
  <div class="form-group">
    <label >Password</label>
    <input type="password" class="form-control" name="pasword" required>
  </div>
  

  
  <button type="submit" class="btn btn-primary" name = "sbt" >Register</button>
  <br><br>
</form>

</div>
   
<?php include "footer-file.php"; ?>