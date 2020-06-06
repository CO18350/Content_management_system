
       <?php
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
                $sql = "DELETE FROM subjects WHERE menu_name = '$menu_name' OR position = '$position' OR visible = '$visible'";
                 
                $results = $conn->query($sql);
                // $row = $results->fetch_assoc();
                // echo $row;
                    if($conn->query($sql)==TRUE)
                {
                    echo "<b>DELETED successfully!!!</b>";
                }
                else{
                    header("Location: webcontentsdelete_form.php?message=Fill the form again!!!");
                }
            
            ?>
