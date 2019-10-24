<?php

include("includes/fav.php");
include("includes/header.php");

$articleid = $_POST["articleid"];

include("includes/dbconfig.php");

$stmt = $pdo->prepare("DELETE FROM `articles`
						WHERE `articleid` = '$articleid';");
$stmt->execute();

header("location:testshowarticles.php");
?>
