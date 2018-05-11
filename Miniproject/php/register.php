<?php
    session_start();
    $namesever = "localhost";
    $user = "root";
    $pass  ="";
    $dmname = "mydatabase";

    //ทำการเชื่อต่อเข้าระบบ
    $objcon = mysqli_connect($namesever , $user,$pass,$dmname);
    $starus = "USER";

    $strSQL= "INSERT INTO member(Username,Password , Name, Status)  VALUES 
    ('".trim($_POST['id'])."','".trim($_POST['pass'])."','".trim($_POST['id'])."','".trim($starus)."')";

	
    $objQuery = mysqli_query($objcon,$strSQL);
    
    {
        echo"เสร็จละไปหน้าลอกอินแล้วกรอกใหม่ละกัน<br>";
		echo "<br> Go to <a href='login.php'>User page</a>";
	}
	
	mysqli_close($objcon);
?>