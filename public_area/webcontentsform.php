<!DOCTYPE html>
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
<form action="webcontents.php" method="post">
    <b>MENU NAME:</b><input type="text" name="menu_name"><br><br>
    <b>POSITION:</b><input type="text" name="position" ><br><br>
    <b>VISIBILITY :</b><input type="text" name="visible"><br><br>
    <b>SUBMIT:</b><input type="submit" name="submit">
</form>
<button onclick="document.location = 'admin.php'" >RETURN BACK</button>
</body>
</head>

</html>