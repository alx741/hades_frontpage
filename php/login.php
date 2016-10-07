<?php

$pass = $_POST['password'];
$pass = trim($pass);
$pass = strtolower($pass);
$pass_md5 = md5($pass);

$pass_file = "../pass";
$md5_file = fopen($pass_file, "r") or die("Unable to read password file");

$read_md5 = trim(fread($md5_file, filesize($pass_file)));
if ($pass_md5 == $read_md5)
{
    session_start();
}
else
{
    header("Location: ../index.html");
}

?>
