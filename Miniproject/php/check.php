<?php
    session_start();
    $namesever = "localhost";
    $user = "root";
    $pass  ="";
    $dmname = "mydatabase";

    //ทำการเชื่อต่อเข้าระบบ
    $objcon = mysqli_connect($namesever , $user,$pass,$dmname);

    //ทำการสร้างชุดคำสั่ง SQl โดยที่จะทำแบบที่ป้องกันการเกิด hack จากการป้อนข้อมูลจากผู้ใช้
    //โดยการคิวรีจะใช้เงื่อนไขว่าไอดีนี้ต้องคู่กับพาสนี้เท่านั้น
    $str = "SELECT * FROM member WHERE Username = '".mysqli_real_escape_string($objcon,$_POST['id'])."' 
    and Password = '".mysqli_real_escape_string($objcon,$_POST['pass'])."'";
    
    $objQuery = 	$objQuery = mysqli_query($objcon,$str);
    $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
    if(!$objResult)
	{
         $message = "รหัสผ่านผิดอีผีพิมพ์วนไปจนกว่าจะเจอ จำไม่ได้สมัครใหม่เอา";
			echo "<script type='text/javascript'>alert('$message');</script>";
			echo "<br> Go to <a href='login.php'>Login Page</a>";

	}
	else
	{
			$_SESSION["UserID"] = $objResult["UserID"];
			$_SESSION["Status"] = $objResult["Status"];

			session_write_close();
			
			if($objResult["Status"] == "ADMIN")
			{
				header("location:status.php");
			}
			else
			{
				header("location:status.php");
			}
	}
	mysqli_close($objcon);
?>