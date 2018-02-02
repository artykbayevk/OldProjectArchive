<!DOCTYPE html>
<html>
<head>
	<title>Index page for checking Codeigniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css">
</head>
<body>
<h2>First view</h2>

<a href="second">Second view</a><br>
<a href="<?php echo base_url()?>third">Third view</a>

<hr>

<form action="<?php echo base_url()?>add" method="POST">
	Name:<input type="text" name="name"><br>
	Surname:<input type="text" name="surname"><br>
	Login:<input type="text" name="login"><br>
	Password:<input type="password" name="password"><br>
	<input type="submit" name="submit">
</form>


</body>
</html>
