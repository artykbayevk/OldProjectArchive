<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Upload</title>
  </head>
  <body>

    <form class="" action="upload.php" method="post" enctype="multipart/form-data">
      <label for="">Name: </label><input type="text" name="name" value=""></br>
      <label for="">Surname: </label><input type="text" name="surname" value=""></br>
      <label for="">Password: </label><input type="password" name="password" value=""></br>
      <label for="">File: </label><input type="file" name="fileToUpload" value=""></br>
      <input type="submit" name="submit" value="Upload">
    </form>


<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "task";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT id, name,surname,password,image FROM tasks";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Id: " . $row["id"]. " - Name:  " . $row["name"]. " - Surname: " . $row["surname"]. " - Password: ".$row['password']." - Our image: <img style='width:100px;height:100px;' src=uploads/".$row['image']."></br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>


  </body>
</html>
