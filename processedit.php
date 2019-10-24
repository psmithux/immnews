<?php

include("includes/fav.php");
include("includes/header.php");

$articleid = $_POST["articleid"];

$name = $_POST['name'];
$author = $_POST['author'];
//feature
$blurb = $_POST['blurb'];
//link
//thumbnail
//picture
$content = $_POST['content'];
//source

include("includes/dbconfig.php");

$stmt = $pdo->prepare("UPDATE `articles`
						SET `name` = '$name',
							`author` = '$author',
							`blurb` = '$blurb',
							`content` = '$content'
 					WHERE `articleid` = '$articleid';");
$stmt->execute();

header("location:testshowarticles.php");
?>
