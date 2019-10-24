<?php

include("includes/fav.php");
include("includes/header.php");

$articleid = $_GET["articleid"];

?> <h1> Edit User Data? </h1>
<?php

include("includes/dbconfig.php");

$stmt = $pdo->prepare("SELECT * FROM `articles` WHERE `articleid`=$articleid");

$stmt->execute();

$row = $stmt->fetch();

?>
<form action="processedit.php" method="POST">
	Name: <input name="name" type="text" value="<?php echo($row["name"]);?>" /> <br /><br />
	Author: <input name="author" type="text" value="<?php echo($row["author"]);?>" /><br /><br />
	Blurb: <input name="blurb" type="text" value="<?php echo($row["blurb"]);?>" /><br /><br />
	Content: <input name="content" type="text" value="<?php echo($row["content"]);?>" /><br /><br />
	<input type="hidden" name="articleid" value="<?php echo($row["articleid"]);?>" >
	<input type="submit" value="CONFIRM EDIT" />
</form>
