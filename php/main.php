<?php

session_start();

if (! isset($_SESSION['timestamp']))
{
    header("Location: ../index.php");
}

?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>HADES</title>
        <link rel="stylesheet" href="../css/main.css"/>
        <link rel="prefetch" href="../img/gate_open.png.png"/>

        <link rel="icon" type="image/png" sizes="32x32" href="./img/icon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="./img/icon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./img/icon/favicon-16x16.png">

        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src='http://127.0.0.1:9001/js/socket.js'></script>
    </head>

    <body>
    </body>
</html>
