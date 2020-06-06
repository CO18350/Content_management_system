<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $conn = new mysqli('localhost','root','','cms');
        if($conn->connect_error)
    {
        echo "connection failed".$conn->connect_error ;
    }

    else
    {
        echo "DATABASE connected successfully</br><br>";
    }
    $sql = "INSERT INTO admins(username,hashed_password)VALUES('$username','$pass')";
    if($conn->query($sql)==TRUE)
    {
        echo "Added successfully!!";
    }
    else{
        echo "try again!!";
    }
    }
    
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <h3>ADD NEW ADMIN</h3>
    USERNAME: <input type="text" name="username"><br><br>
    PASSWORD: <input type="text" name="pass"><br><br>
    <input type="submit">
</form>