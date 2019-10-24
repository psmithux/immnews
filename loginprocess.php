<?php session_start();

$email = $_POST["email"];
$password = $_POST["password"];

include("includes/dbconfig.php");

$stmt = $pdo->prepare("SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");

$stmt->execute();

$row = $stmt->fetch();
  if($row){
       header("location:imm_news_home.php");
       $_SESSION['userid'] = $row['userid'];
  }else{
      echo ("please try again");
  }





?>
