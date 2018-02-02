<?php
    $head=$_POST['head'];
    $content=$_POST['cont'];
    $date=date("l, d F Y g:iA");
    $con=mysql_connect("localhost","root","");
    mysql_select_db("site");
    mysql_query("INSERT INTO `content`( `head`, `cont`, `date`) VALUES ('$head','$content','$date')");
    header("Location:blog.php");
?>
