<!-- <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="login.css">
    <body>
           <div class="header"><p><b>Widget Corp Admin</b></p></div>

           <div class="container"> -->
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
?>
<!-- </div>

<iframe src="demo_iframe.htm" name="iframe_a" width="75%" height="600px" style=" margin-left: 390px; margin-top:
 -1000px; margin-bottom: 12px; background-color: palegoldenrod;"></iframe></span>

<div class="info"></div>
</body>
</head>
</html> -->