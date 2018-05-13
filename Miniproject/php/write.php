<?php
session_start();
    $namesever = "localhost";
    $user = "root";
    $pass  ="";
    $dmname = "mydatabase";

    //ทำการเชื่อต่อเข้าระบบ
    $objcon = mysqli_connect($namesever , $user,$pass,$dmname);

	$str = "SELECT * FROM dairy WHERE id = '".$_SESSION['UserID']."' ";
    $objQuery = 	$objQuery = mysqli_query($objcon,$str);
    $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC) ;
    

    echo $objResult["dairy"];
    

    session_write_close();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    
</body>
</html>