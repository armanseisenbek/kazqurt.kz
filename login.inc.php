<?php

$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];

if (strpos($_SERVER['HTTP_REFERER'], '&') === false) {
  $redirect = $_SERVER['HTTP_REFERER'];
}else {
  $redirect = substr($_SERVER['HTTP_REFERER'], 0, strpos($_SERVER['HTTP_REFERER'], "?&"));
}


if (isset($_POST['signup'])) {
  if ($password == $confirm) {

    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "kazqurtkz";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    $mysql = new mysqli('localhost', 'root', '', 'kazqurtkz');
    $result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email'");
    $user = $result->fetch_assoc();

    if ($user['email'] != $email) {

      $hash = password_hash($password, PASSWORD_DEFAULT);

      $sql = "insert into users(email, password) values ('$email', '$hash')";
      mysqli_query($conn, $sql);

      setcookie('user', $_POST['email'], time() + 3600, "/");

      // отрезаю еррорные сообщения с адресной строки
      header("Location: " . $redirect);
    }else {
      header("Location: " . $redirect . "?&message=User with this email already exists&display=block");
    }
  }else {
    header("Location: " . $redirect . "?&message=Разные пароли&display=block");
  } 
}

if (isset($_POST['login'])) {

  $mysql = new mysqli('localhost', 'root', '', 'kazqurtkz');
  $result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email'");
  $user = $result->fetch_assoc();

  $hashPassword = $user['password'];

  if (password_verify($password, $hashPassword)) {

    setcookie('user', $_POST['email'], time() + 3600, "/");

    // отрезаю еррорные сообщения с адресной строки
    header("Location: " . $redirect);
  }else {
    header("Location: " . $redirect . "?&message=Invalid Password&display=block");
  }
}

?>
