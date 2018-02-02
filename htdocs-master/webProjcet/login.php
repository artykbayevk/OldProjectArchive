<?php
//connection
session_start();
define('DB_HOST', 'localhost');
define('DB_NAME', 'web-project');
define('DB_USER','root');
define('DB_PASSWORD','');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
//auth
if (strlen($_POST['name'])>=6) {
  $login = $_POST['name'];
  $sql = "INSERT INTO users (id, login, status) VALUES ('', '$login', '1')";
  if (mysql_query($sql,$con) === TRUE) {
    echo "New record created successfully";
    $_SESSION['login'] = $login;
    header("Location:index2.php");
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}else{
  header("Location:index.php");
}
 ?>
