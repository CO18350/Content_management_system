<!-- <!DOCTYPE html>
<html>

<head>
    <style>
        input[type=text]{
            border:2px solid black;
            width:50%;
            padding:3px;
        }
        </style>
       <body>
       <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <b>MENU NAME:</b><input type="text" name="menu_name"><br><br>
    <b>POSITION:</b><input type="text" name="position" ><br><br>
    <b>VISIBILITY :</b><input type="text" name="visible"><br><br>
    <b>SUBMIT:</b><input type="submit" name="submit"><br><br><br>
</form> -->
       <?php
                //include 'readsubject.php';
                $menu_name = $_POST['menu_name'];
                //echo $menu_name;
                $position = $_POST['position'];
                //echo $position;
                $visible = $_POST['visible'];
                if (empty($menu_name) || empty($position) || empty($visible)) {
                    echo "you need to fill out the whole form!";
                    exit();
                }       


                $conn = new mysqli('localhost','root','','cms');

                if($conn->connect_error)
                {
                    echo "connection failed".$conn->connect_error ;
                }
    
                else
                {
                    echo "DATABASE connected successfully</br>";
                }
                $sql = "INSERT INTO subjects(menu_name,position,visible)VALUES('$menu_name','$position','$visible')";
                 
                //$results = $conn->query($contents);

                //echo $results;
                
                if($conn->query($sql)==TRUE)
                {
                    echo "<b>ADDED successfully!!!</b>";
                }
                else{
                    header("Location: webcontentsform.php?message=Fill the form again!!!");
                }
            
            ?>
            <!DOCTYPE html>
            <html>
            <head>
            <body>
            <button onclick="document.location = 'webcontentsform.php'" >RETURN BACK</button>
            </body>
            </head>
            </html>
<!-- </body>
</head>

</html> -->
