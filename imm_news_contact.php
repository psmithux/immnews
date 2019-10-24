<?php

?>
<html>
  <head>
    <title>
      IMM News Network
    </title>
    <meta charset="utf-8">
    <meta name="News" content="Latest News">
    <meta name="keywords" content="news, career, articles">
    <?php
      include("includes/fav.php")
    ?>
  </head>
  <body>
    <header>
      <?php
        include("includes/header.php")
      ?>
    </header>
    <main>
      <h1>
        Contact Us
      </h1>
      <form action="process-contact.php" method="POST">
        Name: <input name="name" type="text" required/><br /><br />
        Email: <input name="email" type="email" required/><br />
        <p>What are your categories of interest? (Select as many as you'd like below)</p>
        <input name="industry" type="checkbox" value="industry" />Industry<br />
        <input name="technical" type="checkbox" value="technical" />Technical<br />
        <input name="career" type="checkbox" value="career" />Career<br />
        <p>What is your role</p>
        <select name="role">
          <option value="writer">Writer</option>
          <option value="Contributor">Contributor</option>
          <option value="administrator">Administrator</option>
        </select><br /><br />
        <input type="submit" />
      </form>
    </main>
    <footer>
      <p>We use cookies to ensure that we give you the best experience on our website. If you continue without changing your settings, we'll assume that you are happy to receive all cookies on the IMM News Network website. However, if you would like to, you can change your cookie settings at any time. <a href="#">Click Here to accept cookies</a></p>
    </footer>
  </body>
</html>

<?php
?>
