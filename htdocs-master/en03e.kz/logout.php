<?php
session_start()
?>
<?php
session_destroy();
$_SESSION['logged']=false;
header("Location:index.php");
?>
