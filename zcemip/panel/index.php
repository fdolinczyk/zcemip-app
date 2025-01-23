<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Musisz sie najpierw zalogowac!";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administratora</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="/../documents/css/b.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>
  <script language="JavaScript">
    window.onload = function () {
        document.addEventListener("contextmenu", function (e) {
            e.preventDefault();
        }, false);
        document.addEventListener("keydown", function (e) {
            if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
                disabledEvent(e);
            }
            if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
                disabledEvent(e);
            }
            if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
                disabledEvent(e);
            }
            if (e.ctrlKey && e.keyCode == 85) {
                disabledEvent(e);
            }
            if (event.keyCode == 123) {
                disabledEvent(e);
            }
        }, false);
        function disabledEvent(e) {
            if (e.stopPropagation) {
                e.stopPropagation();
            } else if (window.event) {
                window.event.cancelBubble = true;
            }
            e.preventDefault();
            return false;
        }
    }
  </script>
  <body>
  	<?php  if (isset($_SESSION['username'])) : ?>
      <br>
      <div class="form">
        <p class="message">Panel administracyjny ZCEMiP</p>
        <p class="message">Zalogowany na: <?php echo $_SESSION['username'];?></p><br>
        <hr>
        <a href="frame.php"><button type="button" name="button">Podgląd strony głównej</button></a>
        <a href="register.php"><button type="button" name="button">Dodaj użytkownika</button></a>
        <button type="button" name="button">Lista użytkowników</button>
        <button type="button" name="button">Wiadomości</button>
        <button type="button" name="button">Logi</button>
        <a target="_blank" href="http://zcemip.test/phpmyadmin"><button type="button" name="button">Panel MYSQL</button></a>
        <a href="password.php"><button type="button" name="button">Zmień Hasło</button></a>
        <button type="button" name="button">Projekt</button>
        <hr>
      	<p> <a href="index.php?logout='1'" style="color: red; text-decoration: none;" class="fa fa-exclamation-triangle"> Wyloguj się!</a> </p>
      </div>
    <?php endif ?>
  </body>
</html>
