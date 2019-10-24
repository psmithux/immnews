<?php //session_start();

//if(isset($_SESSION['UserId'])){
include("includes/fav.php");
include("includes/dbconfig.php");
include("includes/header.php");

$stmt = $pdo->prepare("SELECT * FROM `articles`");

$stmt->execute();


?>
<?php
while($row = $stmt->fetch()) {

  echo("<div><h3>");
  ?>
  <img src=" <?php echo($row["thumbnail"]) ?> " />
  <?php
  echo("<br /><br /> ");
  echo($row["name"]);
	echo("</h3> <p>");
	echo($row["blurb"]);
  ?> <a href=" <?php echo($row["link"]) ?> "/> Read More</a> <?php
	echo("</p><h4> ");
  echo($row["author"]);
	echo("</h4> ");

	?>
		<a href="edit.php?articleid=<?php echo($row["articleid"]); ?>">Edit</a>&nbsp;
		<a href="delete.php?articleid=<?php echo($row["articleid"]); ?>">Delete</a>
	<?php
	echo("</div>");
}
