<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <input type="number" name="number" value="">
      <input type="submit" name="submit" value="send">
    </form>
    <?php
    if ($_POST) {
      $num = $_POST['number'];
      function fibo($n){
        if($n==0||$n==1||$n==2){
          return 1;
        }else{
          return fibo($n-1) + fibo($n-2);
        }
      }
      $i=0;
      while($i<=$num) {
        echo fibo($i)." ";
        $i=$i+1;
      }
    }
    ?>
  </body>
</html>
