<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    $namesever = "localhost";
    $user = "root";
    $pass  ="";
    $dmname = "mydatabase";

    //ทำการเชื่อต่อเข้าระบบ
    $objcon = mysqli_connect($namesever , $user,$pass,$dmname);
    $starus = "USER";



    if($_POST['id']&&$_POST['pass'])
    {
        $strSQL= "INSERT INTO member(Username,Password , Name, Status,img)  VALUES 
        ('".trim($_POST['id'])."','".trim($_POST['pass'])."','".trim($_POST['id'])."','".trim($starus)."','1')";
        $objQuery = mysqli_query($objcon,$strSQL);
        echo"เสร็จละไปหน้าลอกอินแล้วกรอกใหม่ละกัน<br>";
        echo "<br> Go to <a href='login.php'>User page</a>";
        
	}else{
        echo '<script language="javascript">';
        echo 'alert("กรอกไม่ครบอีผี")';
        echo '</script>';
        echo "<br> Go to <a href='register.html'>หน้าสมัคร</a>";
    }
	
	mysqli_close($objcon);
?>
</body>
</html>
