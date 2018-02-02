<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.php" method="post">
      <input type="number" name="number" value="">
      <input type="submit" name="submit" value="send">
    </form>
    <?php
    if ($_POST) {
      $num = $_POST['number'];
      function factorial($n){
        if($n==0){
          return 1;
        }else{
          return $n*factorial($n-1);
        }
      }
      echo "Factorial: ".factorial($num);
    }
    ?>
  </body>
</html>
