<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="login.css">
    <body>
    <!-- <script type="text/javascript">
		function run(subjects_id) {
			// we have to make a function to display the undeline text
			// alert(subject_id)
			// we are getting the element we need to hid by using this!!
			var x =document.getElementById(subjects_id)
			// alert(x)
			// var x = document.getElementById("myDIV");
			  if (x.style.display === "none") {
			    x.style.display = "block";
			  } else {
			    x.style.display = "none";
			  }
		}
	</script> -->
           <div class="header"><p><b>Widget Corp Admin</b></p></div>

           <div class="container">
               <!-- <a href="form.php" target="iframe_a"><h2 style="color: white;">LOGIN</h2></a> -->
            <!-- <div class="dropdownmenu">
                <li>
                    <a  href="#"><span class="about">About Widget Corp</span></a>
                </li>     
                <br>
                <ul class="dropdownitems">
                    <li><a href="form.php" target="iframe_a"><span class="items">Our Mission</span></a></li>
                    <li><a href="history.html" target="iframe_a"><span class="items">Our history</span></a></li>
                </ul>
            </div>
            <div class="dropdownmenu">
                <li>
                    <a  href="#"><span class="about">Products</span></a>
                </li>     
                <ul class="dropdownitems">
                    <li><a href="large_widget.html" target="iframe_a"><span class="items">Large Widgets</span></a></li>
                    <li><a href="small_widget.html" target="iframe_a"><span class="items">Small Widgets</span></a></li>
                </ul>
            </div> -->
            <?php
                $conn = new mysqli('localhost','root','','cms');
                // if($conn->connect_error)
                // {
                //     echo "connection failed".$conn->connect_error ;
                // }
    
                // else
                // {
                //     echo "DATABASE connected successfully</br>";
                // } 

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
                            echo "<h2>CONTENT</h2>".$content3['content'];
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
                <div class="links">
                <a href="#"><h3 onclick="run(<?php echo $subject['id'];?>)"><?php echo $subject["menu_name"]?></h3></a>
                <ul id="<?php echo $subject['id']?>" display="none"></div>
                <?php
                foreach($array1 as $pages)
                {
                    if($subject['id']==$pages['subject_id']){
                        
                ?>
                <div class="sub">
                <a href="pages.php?id=<?php  echo $pages['id']?>" target="iframe_a"><li><?php echo $pages['menu_name']; ?></li></a></div>
                <!-- <a href="manage_subject.php?id=<?php  echo $subject['id']?>">MANAGE SUBJECT</a> -->
                <!-- <?php echo $pages['content'];?> -->
             <?php
                    }
                }
            }
            ?><div class="new"><br><a href="webcontentsform.php" target="iframe_a">+ Add a new subject</a></div>
            <?php
			// this is to close the ul tag and make a list of the pages under the given 
			// subeject
            echo "</ul>";
	// mysqli_close()
            ?>
           </div>

           <iframe src="demo_iframe.htm" name="iframe_a" width="75%" height="600px" style=" margin-left: 390px; margin-top:
            -1000px; margin-bottom: 12px; background-color: palegoldenrod;"></iframe></span>

           <div class="info"></div>
</body>
</head>
</html>