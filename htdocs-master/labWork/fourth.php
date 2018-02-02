<html>
<body>
    <form action="" method="post">
        <input type="text" name="text" />
        <input type="text" name="word" />
        <input type="submit" />
    </form>
</body>
</html>

<?php

    if($_POST)
    {
        //get the input value and convert string to lowercase
        $text = strtolower($_POST['text']);
        $word = strtolower($_POST['word']);
        $len = strlen($text);
        $temp = explode($word,$text);
        echo sizeof($temp)-1;
    }

?>
