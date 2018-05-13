<?php
    session_start();
    $namesever = "localhost";
    $user = "root";
    $pass  ="";
    $dmname = "mydatabase";
    $objcon = mysqli_connect($namesever , $user,$pass,$dmname);


	$str = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
    $objQuery = 	$objQuery = mysqli_query($objcon,$str);
    $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC) ;
    session_write_close();
	mysqli_close($objcon);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
    
    <div>
       <?php
       echo 'คุณ '.$objResult["Name"].' อยากจะบันทึกเรื่องราวอะไรไหม';
        ?>
        

<form method="post"  action="save.php">
<textarea name="story" id="story" cols="30" rows="10" type = "text"></textarea>
<input type="submit" value="Submit">
</form>
    </div>
</body>
</html>