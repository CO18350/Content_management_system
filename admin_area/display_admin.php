<h2>MANAGE ADMINS</h2>
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
    $sql = "SELECT * FROM admins";
    $results = $conn->query($sql);
    if($results->num_rows>0)
    {
        while($rows = $results->fetch_assoc())
        {
            echo "<h4>Username :</h4>".$rows['username']."<br>";?>
            <h4>Actions</h4><br><a href="update_admin.php">1. Edit</a><br><a href="delete_admin.php">2. Delete</a><br><br>
            <?php
        }
    }?>
    <a href="add_admin.php">+ Add new admin</a>
    <?php
?>