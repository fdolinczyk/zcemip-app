<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesja Logowania do panelu administratora</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="/../documents/css/a.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
  <br><br><br><br><br><br>
  <form action="login.php" method="post">
    <?php include('errors.php'); ?>
    <div class="login-page">
      <div class="form">
        <p class="message">Panel administracyjny ZCEMiP</p><br>
        <form class="login-form">
          <input type="text" name="username" placeholder="Nazwa użytkownika" maxlength="50"/>
          <input type="password" name="password" placeholder="Hasło" maxlength="50"/>
          <button type="submit" class="btn" name="login_user">Zaloguj się</button>
        </form>
      </div>
    </div>
  </form>
</body>
</html>
