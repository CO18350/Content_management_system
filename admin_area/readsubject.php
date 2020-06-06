
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

                if(!empty($_GET['id'])) {
                    $id = $_GET['id'];
                    // echo htmlspecialchars($id);
                    $content = "SELECT * FROM pages WHERE id = '$id'";
                    $result3 = $conn->query($content);
                    if($result3->num_rows>0)
                    {
                        // print_r($result3);
                        while($content3 = $result3->fetch_assoc())
                        {
                            echo "content<br>".$content3['content'];
                            // print_r($content3);
                        }
                        exit();
                    }

                }

                //$id = $_POST['id'];
                // $menu_name = $_POST['menu_name'];
                //echo $menu_name;
                //$position = $_POST['position'];
                //echo $position;
                //$visible = $_POST['visible'];
                // if (empty($id)) {
                //     echo "FILL out CORRECT information or EVERY INFORMATION IS NOT FILLED";
                //     exit();
                // }       
                //require_once('webcontents.php');
                //include 'webcontents.php';
               

            
                $sql = "SELECT * FROM subjects"; 
                 
                $results = $conn->query($sql);
                while($row = $results->fetch_assoc())
                {
                    $array2[] = $row;
                }
                foreach($array2 as $row)
                {
                    // print_r($row);
                }
                $page = "SELECT * FROM pages";
                $result = $conn->query($page);
                while($rows = $result->fetch_assoc())
                {
                    // echo $rows;
                    // print_r($rows);
                    // echo "<br><br>";
                    $array1[] = $rows;
                }
                
                // print_r($array1);
                // $ans2 = mysqli_fetch_all($result2,MYSQLI_ASSOC);
                // foreach($array1 as $rows)
                //     {
                //         print_r($rows);
                //     }
            ?>
            <?php
            foreach($array2 as $subject){
            ?>

                <a href="#"><h2 onclick="run(<?php echo $subject['id'];?>)"><?php echo $subject["menu_name"]?></h2></a><br>
                <ul id="<?php echo $subject['id']?>" display="none">
                <?php
                foreach($array1 as $pages)
                {
                    if($subject['id']==$pages['subject_id']){
                        
                ?>
                <a href="?id=<?php  echo $pages['id']?>"><li><?php echo $pages['menu_name']; ?></li></a>
                <a href="manage_subject.php?id=<?php  echo $subject['id']?>">MANAGE SUBJECT</a>
                <!-- <?php echo $pages['content'];?> -->
             <?php
                    }
                }
            }
            ?>
            <?php
			// this is to close the ul tag and make a list of the pages under the given 
			// subeject
            echo "</ul>";
	// mysqli_close()
            ?>


