<?php
include("connection.php");
if(isset($_POST['input'])){
    $title = ($_POST['title']);
    $content = ($_POST['content']);
$query2 = mysql_query("INSERT INTO news VALUES('','$title','$content')") or die(mysql_error());
header("Location:education.php");
}
?>