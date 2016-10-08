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
    </head>

    <body>
        <div id='banner'></div>

        <div id='main'>

            <div id='taskw'>
                <img id='chronos' src='../img/chronos.png'>
            </div>

            <div id='cam'>
                <img id='athena' src='../img/athena.png'>
            </div>

        </div>
    </body>
</html>
