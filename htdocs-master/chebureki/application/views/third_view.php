<!DOCTYPE html>
<html>
<head>
	<title>Third view</title>
</head>
<body>
<h2>Third view</h2>
<a href="<?php echo base_url()?>index">First view</a><br>
<a href="<?php echo base_url()?>second">Second view</a>
<hr>
<form action="<?php echo base_url()?>mycontroller/login" method="POST">
	Login: <input type="text" name="login"><br>
	Password: <input type="password" name="password"><br>
	<button type="submit">Submit</button>
</form>
</body>
</html>