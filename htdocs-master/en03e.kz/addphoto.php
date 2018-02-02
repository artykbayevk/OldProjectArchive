<?php
if(isset($_POST['fname'])){
	$name = $_POST['fname'];
	$photo_path = "./images/";
	$photo_path = $photo_path . basename($_FILES['picture']['name']);


	// Create connection
	$conn = new mysqli("localhost", "root", "", "en03e");

	// Check connection
	if ($conn->connect_error) {
	    die("<h2 style=\"background:red; text-align:center;\">Error on adding</h2> " . $conn->connect_error);
	}

	if(move_uploaded_file($_FILES['picture']['tmp_name'], $photo_path)) {
		$sql = "INSERT INTO pictures(fname,picture) VALUES('$name','$photo_path')";
		if ($conn->query($sql) === TRUE) {
		    echo "<h2 style=\"background:red; text-align:center;\">Good</h2>";
		} else {
		    echo "<h2 style=\"background:red; text-align:center;\">Wrong</h2>" . $sql . "<br>" . $conn->error;
		}
	}
}
header("Location:photo.php")
?>