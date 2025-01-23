<?php
session_start();

$username = "";
$email = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'zcemip');

if (isset($_POST['reg_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $grupa = mysqli_real_escape_string($db, $_POST['grupa']);

  if (empty($username)) { array_push($errors, "Wprowadź nazwe użytkownika!"); }
  if (empty($email)) { array_push($errors, "Wprowadź email!"); }
  if (empty($password_1)) { array_push($errors, "Wprowadź hasło!"); }
  if ($password_1 != $password_2) {
	   array_push($errors, "Hasła się od siebie różnią!");
  }

  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) {
    if ($user['username'] === $username) {
      array_push($errors, "Użytkownik już istnieje!");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email już istnieje!");
    }
  }

  if (count($errors) == 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO users (username, email, password, grupa)
    VALUES ('$username', '$email', '$password', '$grupa')";
  	mysqli_query($db, $query);
  }
}

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Wprowadź nazwe użytkownika!");
  }
  if (empty($password)) {
  	array_push($errors, "Wprowadź email!");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "Zalogowałeś się";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Nieprawidłowa nazwa użytkownika lub hasło!");
  	}
  }
}

?>
