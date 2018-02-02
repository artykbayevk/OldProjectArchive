<!DOCTYPE html>
<html>
<head>
	<title>Fivth view - Update form</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css">
</head>
<body>
<?php 
	foreach ($user as $i ) {?>
	<form action="<?php echo base_url()?>update" method="POST">
		<input type="hidden" name="id" value="<?php echo $i['id']?>">
		Name:<input type="text" name="name" value="<?php echo $i['name']?>"><br>
		Surname:<input type="text" name="surname" value="<?php echo $i['surname']?>"><br>
		Login:<input type="text" name="login" value="<?php echo $i['login']?>"><br>
		<button type="submit">Save</button>
	</form>
	<?php }
?>
</body>
</html>