<?php
include("includes/fav.php");
include("includes/header.php");
include("includes/dbconfig.php");


?>
<form action="loginprocess.php" method="POST">
  Email: <input name="email" type="email" required/><br />
  Password: <input name="password" type="password" required/><br />
  <input type="submit" />

<?php
?>
