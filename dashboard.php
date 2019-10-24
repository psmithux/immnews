<?php

include("includes/fav.php");
include("includes/header.php");
?>

<h1> Contacts form Submissions</h1>
<?php
include("includes/dbconfig.php");

$stmt = $pdo->prepare("SELECT * FROM `contacts`");

$stmt->execute();

?>
<?php
while($row = $stmt->fetch()) {

  echo("<div> ");
  echo($row["contactid"]);
  echo(" ");
  echo($row["name"]);
	echo(" ");
	echo($row["email"]);
  echo(" ");
  // echo($row["industry"]);
  // echo(" ");
  // echo($row["technical"]);
	// echo(" ");
  // echo($row["career"]);
  echo(" ");
  echo($row["role"]);
	echo("</div>");
}

$stmt = $pdo->prepare("SELECT * FROM `articles`");

$stmt->execute();


?><h1>Articles</h1>
<?php
while($row = $stmt->fetch()) {

  echo("<div>");
  ?>

  <?php
  echo("<div>");
  echo($row["name"]);

  ?>
    <a href="edit.php?articleid=<?php echo($row["articleid"]); ?>">Edit</a>&nbsp;
    <a href="delete.php?articleid=<?php echo($row["articleid"]); ?>">Delete</a>
  <?php

	echo("</div> ");

}
?>
<a href="/immnews/addarticle.php">Add New Article</a>
