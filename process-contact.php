<?php



$name = $_POST["name"];
$email = $_POST["email"];

//$industry = false;
if(! isset($_POST["industry"]))
{$industry = "notchecked";

}else{
$industry = $_POST["industry"];}
// {
//  $industry = true;
// }

//$technical = false;
if(!isset($_POST["technical"]))
{$technical = "notchecked";

}else{
$industry = $_POST["technical"];}
// {
//  $technical = true;
// }

//$career = false;
if(!isset($_POST["career"]))
{$career = "notchecked";

}else{
$career = $_POST["industry"];}
// {
//  $career = true;
// }

// $industry = $_POST["industry"];
// $technical = $_POST["technical"];
// $career = $_POST["career"];
$role = $_POST["role"];

include("includes/dbconfig.php");

$stmt = $pdo->prepare("INSERT INTO `contacts` (`contactid`, `name`, `email`, `industry`, `technical`, `career`, `role`) VALUES (NULL, '$name', '$email', '$industry', '$technical', '$career', '$role')");

$stmt->execute();

var_dump('$name', '$email', '$industry', '$technical', '$career', '$role');
//header("location:contactthankyou.php");



?>
