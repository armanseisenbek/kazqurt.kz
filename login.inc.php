<?php

  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm = $_POST['confirm'];



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

          header("Location: ../pages/products.php?id=" . $_GET['id'] . "&message=successful registration&display=block");
      }else {
          header("Location: ../pages/products.php?id=" . $_GET['id'] . "&message=User with this email already exists&display=block");
      }
    }else {
        header("Location: ../pages/products.php?id=" . $_GET['id'] . "&message=Разные пароли&display=block");
    }
  }

  if (isset($_POST['login'])) {

      $mysql = new mysqli('localhost', 'root', '', 'kazqurtkz');
  		$result = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email'");
      $user = $result->fetch_assoc();

      $hashPassword = $user['password'];

      if (password_verify($password, $hashPassword)) {
          header("Location: ../pages/products.php?id=" . $_GET['id'] . "&message=Logged in&display=block");
      }else {
        header("Location: ../pages/products.php?id=" . $_GET['id'] . "&message=Invalid Password&display=block");
      }
  }

?>
