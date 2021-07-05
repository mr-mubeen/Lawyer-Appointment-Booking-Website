<?php
$s_id = $_GET['id'];


        
        
        
$conn = mysqli_connect('sql105.epizy.com	
' , 'epiz_27432822' , 'MAXPLAMM9' , 'epiz_27432822_lawyers') or die ('Connect Failed');
    $check = "Delete from clients where ClientID = '{$s_id}' ";
    

    $result1 = mysqli_query($conn , $check) or die("Querry Failed");
    
    if($result1)
    {
        echo "<script>alert('Deleted....!!')</script>";
        
        
    }
    else {
       
        echo "<script>alert('Delete Failed')</script>";
    }

    



?>