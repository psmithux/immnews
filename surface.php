<?php
include("../includes/fav.php");
include("../includes/dbconfig.php");

$stmt = $pdo->prepare("SELECT * FROM `articles` WHERE `articleid`=1");

$stmt->execute();

$row = $stmt->fetch();
?>
  <head>
    <meta charset="utf-8">
    <meta name="News" content="Latest News">
    <meta name="keywords" content="news, career, articles, freelance, money, work">
<title>
      <?php echo($row ["name"]); ?>
    </title>
  </head>
  <header>
    <?php include("../includes/header.php"); ?>
  </header>
  <body>
  <main>
    <article>
    <img src=" <?php echo($row["picture"]); ?> " />
    <?php
    echo("<br /><br /> ");
    echo("<div><h1>");
    echo($row["name"]);
  	echo("</h1> <p>");
    echo($row["content"]);
  	echo("</p><h3> ");
    echo($row["author"]);
  	echo("</h3> ");
    ?>
    </article>
    <a href="<?php echo($row["source"])?> " />Read original article here </a><div><br />
    <a href="../imm_news_home.php">Go Back to IMM News Network Homepage</a>
  <main>
  </body>
    <footer>
      <?php include("../includes/footer.php"); ?>
    </footer>
<?php
?>
