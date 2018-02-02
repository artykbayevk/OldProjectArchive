<?php
session_start();
if (isset($_POST))
{
  $name = strval($_POST['name']);
  $surname = strval($_POST['surname']);
  $password = strval($_POST['password']);

  if ($name && $surname && $password) {
    //save to DB
    $_SESSION['name'] = $name;
    $_SESSION['surname'] = $surname;
  }
}
header('Location: index.php');
?>
