<?php
    session_start();
    $namesever = "localhost";
    $user = "root";
    $pass  ="";
    $dmname = "mydatabase";

    //ทำการเชื่อต่อเข้าระบบ
    $objcon = mysqli_connect($namesever , $user,$pass,$dmname);

    $s = $_POST['story'];
    $str=    "UPDATE dairy SET dairy= '$s' WHERE id='".$_SESSION['UserID']."'";

    $objQuery = mysqli_query($objcon,$str);

    echo"เสร็จละไปหน้าเมนูหลักละกัน<br>";
    echo "<br> Go to <a href='status.php'>User page</a>";

?>