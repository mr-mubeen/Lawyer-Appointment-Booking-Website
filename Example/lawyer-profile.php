<?php include "header-file.php"; 

$id = $_GET['id'];


$conn = mysqli_connect('sql105.epizy.com	
    ' , 'epiz_27432822' , 'MAXPLAMM9' , 'epiz_27432822_lawyers') or die ('Connect Failed');
 $query = "SELECT * FROM lawyer where LawyerID ='{$id}'";
 $run = mysqli_query($conn , $query);
 $check_lawyer = mysqli_num_rows($run) > 0;
 if($check_lawyer)

       {
         while($a = mysqli_fetch_assoc($run))
         {
         
 

?>


<div class="container">
      <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">
                  
            <img style="width:300px; height:400px; border:2px solid black; margin:30px;" src="../backend/images/<?php echo $a['image']; ?>" class="card-img-top" alt="lawyer images">
            <br><br><br>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-8">
                  
            <input type="hidden" class="form-control" name="id" value = "<?php echo $a['LawyerID']; ?>" required>
<br><br><br>
<h2 class="card-title">Name:<?php echo $a['Name'];?></h2>
<h3 class="card-title">Specialization: <?php echo $a['Specialization'];?></h3>
<br><br>
<h4 class="card-title">Cases Done: </t><?php echo $a['Success_cases'];?></h4>
<h4 class="card-title">Contact Number:  </t><?php echo $a['Contact'];?></h4>
<h4 class="card-title">Address: </t><?php echo $a['Location'];?></h4>
<h4 class="card-title">Services : </t><?php echo $a['Services'];?></h4>
<br><br>

<a href="appointment.php?id=<?php echo $a['LawyerID']; ?>" class="btn btn-primary stretched-link">Book An Appointment</a>
                  </div>
      </div>

          

            
         </div>

</div>




<?php

         }
      }


      include "footer-file.php"; 
?>