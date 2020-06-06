<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['username'];
    // if(empty($username))
    $conn = new mysqli('localhost','root','','cms');
        if($conn->connect_error)
    {
        echo "connection failed".$conn->connect_error ;
    }

    else
    {
        echo "DATABASE connected successfully</br><br>";
    }
    $sql = "DELETE FROM admins WHERE username='$username'";
    if($conn->query($sql)==TRUE)
    {
        echo "Deleted successfully!!";
    }
    else{
        echo "try again!!";
    }
    }
    
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <h3>DELETE THE ADMIN</h3>
    USERNAME: <input type="text" name="username"><br><br>
    <!-- PASSWORD: <input type="text" name="pass"><br><br> -->
    <input type="submit">
</form>