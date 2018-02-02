<html>
	<head>

	</head>
	<body>
		<form action="upload.php" method="post" enctype="multipart/form-data">
			Our file: <input type="file" name="filename" size="9"/>
			<input type="submit" value ="download"/> 
		</form>
	<?php
if($_FILES)
{
	$name =  $_FILES['filename']['name'];
	move_uploaded_file($_FILES['filename']['tmp_name'], $name);
	echo "image:$name<br> <img src=$name>";

}


	?>
	</body>

</html>