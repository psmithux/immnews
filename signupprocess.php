<?php

$email = $_POST["email"];
$password = $_POST["password"];

include("includes/dbconfig.php");

$stmt = $pdo->prepare("INSERT INTO `users` (`userid`,`email`,`password`) VALUES (NULL, '$email', '$password');");

$stmt->execute();

header("location:contactthankyou.php");









?>
