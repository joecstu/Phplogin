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
    $a =  strcasecmp( $_POST['pass'], $_POST['pass1']);
    echo $a;

    if($_POST['id']&&$_POST['pass'] &&$a==0)
    {
        $strSQL= "INSERT INTO member(Username,Password , Name, Status,img)  VALUES 
        ('".trim($_POST['id'])."','".trim($_POST['pass'])."','".trim($_POST['name'])."','".trim($starus)."','1')";
        $objQuery = mysqli_query($objcon,$strSQL);
        

        $str = "SELECT * FROM member WHERE Username = '".mysqli_real_escape_string($objcon,$_POST['id'])."' ";
        $objQuery = 	$objQuery = mysqli_query($objcon,$str);
        $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
        
        echo $objResult["UserID"];

        $str = "INSERT INTO `dairy`(`id`) VALUES ('".trim($objResult["UserID"])."')";
        $objQuery = mysqli_query($objcon,$str);

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
