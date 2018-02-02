<?php session_start()?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Lab Example - Playground</title>
		<link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
	</head>
	<body>
		<?php if (!isset($_SESSION['name']) && !isset($_SESSION['surname'])) {

echo '<form class="" action="login.php" method="post" enctype="multipart/form-data">
			<label for="">
				Name:<input type="text" name="name" value=""></br>
			</label>
			<label for="">
				Surname:<input type="text" name="surname" value=""></br>
			</label>
			<label for="">
				Password:<input type="password" name="password" value=""></br>
			</label>
			<button type="submit" name="button">Submit</button>
		</form>';
		}
		else {
			echo 'Hello '.$_SESSION['name'].' '.$_SESSION['surname'];
		}?>
	</body>
</html>
