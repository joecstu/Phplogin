<?php
session_start();
    $namesever = "localhost";
    $user = "root";
    $pass  ="";
    $dmname = "mydatabase";

    //ทำการเชื่อต่อเข้าระบบ
    $objcon = mysqli_connect($namesever , $user,$pass,$dmname);

	$str = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
    $objQuery = 	$objQuery = mysqli_query($objcon,$str);
    $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC) ;
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
</head>
<body>

<form action="logout.php">

<?php
    echo 'สวัสดี';
    echo $objResult["Name"]."<br>";
 echo $objResult["img"];
    $img = $objResult["img"];
 if($img==1){
    echo '<ul class="dropdown-menu">';
     echo 
     '    <div>
     <img src="../img/user.jpg" alt=""> 
            </div>';
 }else{
    echo 
    '    <div>
    <img src="../img/admin.jpg" alt=""> 
           </div>';
 }


?>

<button class="button button3">ลอกเอ๊า</button>

</form>
<input class="button button3" type="button" value="บันทึกเรื่องราว" onclick="window.location.href='dairy.php'" />

<input class="button button3" type="button" value="เรื่องที่เคยบันทึกไว้" onclick="window.location.href='write.php'" />
<input class="button button3" type="button" value="ลบเรื่องที่เคยบันทึกไว้" onclick="window.location.href='delete.php'" />


</body>
</html>