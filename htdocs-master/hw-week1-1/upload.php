<?php
$con = mysql_connect('localhost','root','');
mysql_select_db('task');
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$name = $_POST['name'];
$surname = $_POST['surname'];
$pass = $_POST['password'];
$file = basename( $_FILES["fileToUpload"]["name"]);
$sql = "INSERT INTO tasks (name,surname,password,image) VALUES ('$name', '$surname', '$pass','$file')";
mysql_query($sql);

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
header("Location:index.php");
?>
