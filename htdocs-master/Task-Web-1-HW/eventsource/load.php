<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
echo "data: ".rand(1,4)."\n\n";
flush();
?>