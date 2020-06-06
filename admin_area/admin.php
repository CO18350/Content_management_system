<?php
    //echo password_hash('sonam',PASSWORD_BCRYPT);

    session_start();
    $username = $_POST['uname'];
    //echo "$username";
    $pass = $_POST['pass'];
    $conn  =  new mysqli('localhost','root','','cms');
    // if($_GET['message'])
    // {
    //     $message = $_GET['message'];
    //     echo $message;
    // }
    if($conn->connect_error)
    {
        echo "connection failed".$conn->connect_error ;
    }
    
    else
    {
        echo "Connected successfully</br>";
    }
    if (is_null($username)) {
        echo "you need to fill out the whole form!";
        exit();
    }

    $sql = "SELECT * FROM admins WHERE username = '$username'";
    $result = $conn->query($sql);
    // print_r($result);
    $row = $result->fetch_assoc();
    if(empty($row)){
        echo "username not found";
        exit();
    }
    
    $hash = $row['hashed_password'];

    // if($result->num_rows>0)
    // {
        //$check = password_verify('pass','hash');
        if(password_verify($pass,$hash))
        {
            //header ("Location: form.php");
                echo "<b>LOGIN SUCCESSFUL!!!!!</b>";
                echo "<br>";
            
        }
            else{
            echo "WRONG password!!";
            exit();
        }
    //}
    // print_r($row);
    // $hashed_password = $row['hashed_password'];
    // if (!empty($row)){
    //     $re = password_verify($pass, $hashed_password);
    //     //this returns 1 or 0 
	// 	// echo "$re"
	// 	if($re){
	// 		// we will start the session and save a variable then we will move to the other page
	// 		echo "Can continue to the next page!";
	// 	}
	// 	else{
	// 		echo "wrong pasword!";
	// 	}
	// }
    // echo "jhbjhv";

    mysqli_close($conn);
?>
 <!DOCTYPE html>
<html>
    <head>
    <h2><u>Admin Menu</u></h2>
<h3>Welcome to the Admin area</h3>
<a href="manage_contents.php">Manage Website contents</a><br><br>
<a href="display_admin.php">Manage Admin users</a><br><br>
<a href="logout.php">Logout</a>
    </body>
    </head>
    </html> 
    