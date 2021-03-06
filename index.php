<?php

$pass = $_POST['password'];
$pass = trim($pass);
$pass = strtolower($pass);
$pass_md5 = md5($pass);

$pass_file = "./pass";
$md5_file = fopen($pass_file, "r") or die("Unable to read password file");
$read_md5 = trim(fread($md5_file, filesize($pass_file)));

$password_check = false;

if ($pass_md5 == $read_md5)
{
    session_start();
    $_SESSION['timestamp'] = time();
    $password_check = true;
    header("Location: ./php/main.php");
}
else
{
    $password_check = false;
}

?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>HADES</title>
        <link rel="stylesheet" href="./css/index.css"/>
        <link rel="prefetch" href="./img/gate_open.png.png"/>

        <link rel="icon" type="image/png" sizes="32x32" href="./img/icon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="./img/icon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./img/icon/favicon-16x16.png">
    </head>

    <?php if ($pass == "")
    {
        print '<body>';
    }
    else if ($password_check == false)
    {
        print '<body style="background-color: #ff9191">';
    }
    ?>
        <div id='password_form'>
            <form action="" method="post">
                <input type="password" name="password" id="password_input"
                    autocomplete="off" autofocus>
                <input type="submit" style="position: absolute; left: -9999px;
                    bottom: 50%;">
            </form>
        </div>
    </body>
</html>
