<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $conn = new mysqli('localhost','root','','cms');
    if($conn->connect_error)
    {
        echo "connection failed".$conn->connect_error ;
    }

    else
    {
        echo "DATABASE connected successfully</br><br>";
    } 
    // if(!empty($_GET['id'])) {
    //     $sub_id = $_GET['id'];}
    //     echo $sub_id;
    $subject_id = $_POST['subject_id'];
    $menu_name = $_POST['menu_name'];
    $position = $_POST['position'];
    $visible = $_POST['visible'];
    $content = $_POST['content'];
    $sql = "INSERT INTO pages(subject_id,menu_name,position,visible,content)VALUES('$subject_id','$menu_name','$position','$visible','$content')";
            if($conn->query($sql)==TRUE)
                {
                    echo "<b>ADDED successfully!!!</b>";
                }
                else{
                    header("Location: webcontentsform.php?message=Fill the form again!!!");
                }
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
    #pos{
        width:200px;
        height:200px;
    }
</style>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    SUBJECT ID: <input type="text" name="subject_id"><br><br>
    MENU NAME: <input type="text" name="menu_name"><br><br>
    POSITION: <input type="text" name="position"><br><br>
    VISIBILITY: Yes <input type="radio" name="visible">
    No<input type="radio" name="visible"><br><br>
    CONTENT: <input id="pos" type="text" name="position"><br><br>
    CREATE<input type="submit"><br><br>
    <a href="delete_page.php">delete page</a>
</form>
</body>
</head>
</html>