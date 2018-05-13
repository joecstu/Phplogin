<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
    <div>
    <form method="post" action="check.php">
        <?php
            $a = "Hello World U can login";
            echo "$a";
        ?>
        <br>
        <div>
        <table align="center">
            <tr>
            <td> ID</td>
            <td>
                <input id = "id" name="id" type="text">
            </td>
            </tr>
            <tr>
            <td> Password</td>
            <td>
                <input id = "pass" name="pass" type="text">
            </td>
            </tr>
        </table>
        <div>
        <br>
        <input class="button button3" type="submit" name="Submit" value="Login">
    </form>
    <form action="register.html">
    <input class="button button3" action="register.html" type="submit" name="Register" value="Register">
    </form>
    
    </div>

</body>
</html>