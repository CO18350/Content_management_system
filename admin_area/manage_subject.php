<h2>MANAGE SUBJECT</h2>
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
     if(!empty($_GET['id'])) {
        $subject_id = $_GET['id'];}
    //echo "$subject_id";
    $sql = "SELECT * FROM subjects WHERE id='$subject_id'";
        $results = $conn->query($sql);

        if($results->num_rows>0)
        {
            // print_r($result3);
            while($rows = $results->fetch_assoc())
            {
                echo "<b>Menu name :</b>".$rows['menu_name']."<br><b>Position:</b>".$rows['position']."<br><b>Visibility:</b>".$rows['visible']."<br><br><br>";
                // print_r($content3);
            }
        }
        
?>
<a href="update_form.php">Edit subject</a><br><br>
<a href="create_page.php">+ Add a new page</a><br>
<a href="update_page.php">Edit page</a><br>
<a href="delete_page.php">Delete page</a>
