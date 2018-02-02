<?php
    $con = new mysqli("localhost","root","","second");
    if(!$con){
    	die($con->error);
    }
    if ($_POST['name']=="" || $_POST['surname']=="" || $_POST['email']=="" || $_POST['password']==""){
    	echo "Заполните все данные";
    } else{
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $query = "INSERT INTO users VALUES (null, '$name', '$surname', '$email', '$password')";
    if($con->query($query)){
        echo "Регистрация прошла успешно";
    }
  }
 ?>
