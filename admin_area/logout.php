<?php
     $conn = new mysqli('localhost','root','','cms');
     if($conn->connect_error)
     {
         echo "connection failed".$conn->connect_error ;
     }
 
     else
     {
         echo "DATABASE connected successfully</br><br>";
     } 
     header("Location: form.php");
?>