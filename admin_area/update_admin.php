<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id = $_POST['id'];
    $username = $_POST['username'];
    // if(empty($username))
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
    $sql = "UPDATE admins SET username='$username',hashed_password='$pass' WHERE id = '$id'";
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
    <h3>EDIT THE ADMIN</h3>
    ID: <input type="text" name="id"><br><br>
    USERNAME: <input type="text" name="username"><br><br>
    PASSWORD: <input type="text" name="pass"><br><br>
    <input type="submit">
</form>