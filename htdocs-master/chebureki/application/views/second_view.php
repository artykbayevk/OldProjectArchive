<!DOCTYPE html>
<html>
<head>
	<title>Second view</title>
</head>
<body>
<h2>Second view</h2>
<a href="<?php echo base_url()?>index">First view</a><br>
<a href="<?php echo base_url()?>third">Third view</a>
<hr>
<?php
	foreach($user as $i){?>
		<h2>
		<?php echo 'Name: '.$i['name'].' Surname: '.$i['surname']?>
		<form action="<?php echo base_url()?>delete" method="POST">
		<input type="hidden" name="id" value="<?echo $i['id']?>">
		<button type="submit">Delete</button>
		</form>
		<form action="<?php echo base_url()?>toupdate" method="POST">
		<input type="hidden" name="id" value="<?echo $i['id']?>">
		<button type="submit">Update</button>
		</form>
		</h2>
	<?php }
?>
</body>
</html>
