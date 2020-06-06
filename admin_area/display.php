<?php
    $conn = new mysqli('localhost','root','','cms');
    if($conn->connect_error)
        {
            echo "connection failed".$conn->connect_error ;
        }
    
    else
        {
            echo "DATABASE connected successfully</br>";
        }
    $sql = "SELECT * FROM subjects";
    $results = $conn->query($sql);
    
    while($row = $results->fetch_assoc())
    {
        $project[] = $row;
    }
    foreach($project as $row)
        {
            print_r($row);?>
            <a href="create_page.php?id=<?php  echo $row['id']?>">create page</a><br><br>
            <?php
        }

?>