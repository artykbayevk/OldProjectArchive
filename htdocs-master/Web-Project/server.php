<?php
$postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    @$email = $request->email;
    @$pass = $request->pass;
    if ($email=="kama" && $pass=="123") {
      echo "kama";
    }else{
      echo "ne kama";
    }

 ?>
