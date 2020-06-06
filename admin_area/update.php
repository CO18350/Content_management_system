
       <?php
                $id = $_POST['id'];
                $menu_name = $_POST['menu_name'];
                //echo $menu_name;
                $position = $_POST['position'];
                //echo $position;
                $visible = $_POST['visible'];
                if (empty($id)) {
                    echo "FILL out CORRECT information or EVERY INFORMATION IS NOT FILLED";
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

            
                $sql = "UPDATE subjects SET menu_name='$menu_name',position = '$position',visible='$visible' WHERE id ='$id'"; 
                 
                $results = $conn->query($sql);
                // $row = $results->fetch_assoc();
                // echo $row;
                    if($conn->query($sql)==TRUE)
                {
                    echo "<b>UPDATED successfully!!!</b>";
                }
                else{
                    header("Location: webcontentsdelete_form.php?message=Fill the form again!!!");
                }
            ?>
            <!DOCTYPE html>
            <html>
            <head>
            <body>
            <button onclick="document.location = 'update_form.php'" >RETURN BACK</button>
            </body>
            </head>
            </html>
