<?php
  setcookie('user', $_POST['email'], time() - 3600, "/");
  if (strpos($_SERVER['HTTP_REFERER'], '&') === false) {
    header("Location: " . $_SERVER['HTTP_REFERER']);
  }else {
    header("Location: " . substr($_SERVER['HTTP_REFERER'], 0, strpos($_SERVER['HTTP_REFERER'], "?&")));
  }
?>
