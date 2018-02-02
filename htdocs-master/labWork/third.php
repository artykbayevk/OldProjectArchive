  <html>
  <body>
  <form action="third.php" method="post">
      <input type="text" name="text" />
      <input type="submit" name="submit" value="submit"/>
  </form>
  </body>
  </html>

  <?php
      if ($_POST) {
        # code...

      if($_POST['submit'])
      {
          $a = strtolower($_POST['text']);
          $b = array('a','e','i','o','u');
          $c = strlen($a);
          $n = 0;
          for($i=0; $i<$c; $i++){
              if(in_array($a[$i], $b))
              {
                  $n++;
              }
          }
          echo $n;
      }
}
  ?>
