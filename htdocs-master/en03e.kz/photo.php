<?php 
session_start();
	$conn = new mysqli("localhost", "root", "", "en03e");
	if ($conn->connect_error) {
	    die("<h2 style=\"background:black; text-align:center; color:white;\">Error on adding</h2> " . $conn->connect_error);
	}

if(!$_SESSION['logged']){
header("Location:check.php");
}?>
<html>
<head>
    <title>1EN03E</title>
    <link rel="stylesheet" type="text/css" href="style/style.css"/>
    <meta charset="utf-8">
	<header>
	
<table class="table1">
	<tr>
	<td width="72" ></td>
	<td rowspan="2"><img src="img/logo.png" width="140"></td>
  <td width="160" align="center"><a href="index.php" class="ssylka"> HOME </a></td>
  <td width="160" align="center"><a href="members.php" class="ssylka"> MEMBERS </a></td>
  <td width="160" align="center"><a href="education.php"><div class="ssylka"> EDUCATION </div></a></td>
  <td width="160" align="center"><a href="photo.php"><div class="ssylka"> PHOTO </div></a></td>
  <td width="160" align="center"><a href="contact.php"><div class="ssylka"> CONTACTS </div></a></td>
	<td width="50"><img src="img/magnifier2.ico" width="40"></td>
	<td width="200"><input  type="text" placeholder="Search" style="width:200px;"></td>
	</tr>
	<tr class="tr1">
	<td width="70"></td>
	<td width="160" align="center">Main information</td>
	<td width="160" align="center">Our members</td>
	<td width="160" align="center">Files for education</td>
	<td width="160" align="center">Our photo &amp; video</td>
	<td width="160" align="center">Our contacts</td>
	<td colspan="2">
	<table>
	<tr class="re">
  <td align="center"><a href="logout.php"><div align="center" style="width:130">LOGOUT</div></a></td>
	</tr>
	</table>
	</td>
	</tr>
</table>
	</header>
	<script type="text/javascript" src="js/jquery.js"></script>
<style type="text/css">

.accordion, .accordion * {
	-webkit-box-sizing:border-box; 
	-moz-box-sizing:border-box; 
	box-sizing:border-box;
}

.accordion {
	overflow:hidden;
	box-shadow:0px 1px 3px rgba(0,0,0,0.25);
	border-radius:3px;
	background:#f7f7f7;
}
.accordion-section-title {
	width:100%;
	padding:15px;
	display:inline-block;
	border-bottom:1px solid #1a1a1a;
	background:#333;
	transition:all linear 0.15s;
	font-size:1.200em;
	text-shadow:0px 1px 0px #1a1a1a;
	color:#fff;
}

.accordion-section-title.active, .accordion-section-title:hover {
	background:#4c4c4c;
	text-decoration:none;
}

.accordion-section:last-child .accordion-section-title {
	border-bottom:none;
}

.accordion-section-content {
	padding:15px;
	display:none;
}

</style>

</head>
<body>
	<?php 
	if(isset($_GET["delete"])){
	$del = $_GET["delete"];
	// sql to delete a record
	$sql = "DELETE FROM pictures WHERE id='".$del."'";
	if (mysqli_query($conn, $sql)) {
    	echo "<center><h2 style='background:black; color:white;	'>Was deleted</h2></center>";
	} else {
    	echo "Error deleting record: " . mysqli_error($conn);
	}
}?>

	<div class="accordion">
			<?php 
			if($_SESSION['id']==1){
				echo"<div class='accordion-section'>
				<a class='accordion-section-title' href='#accordion-0'>Admin's page for download</a>
				<div id='accordion-0' class='accordion-section-content'>
					<p><form method='post' action='addphoto.php' enctype='multipart/form-data'>
							<input type='text' name='fname'/>
							<input type='file' name='picture'/>
							<input type='submit' name='submit'/>
							</form>
							</p>
				</div>
			</div>";}
			?>
			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-1">Event #1: Fotoset in SDU</a>
				<div id="accordion-1" class="accordion-section-content">
					<p>
						<table border = "1" style="box-shadow:1px 1px 3px rgba(0,10,0,0.25);">
							<tr>
						<?php
						$sql = "SELECT * FROM pictures";
						$result = $conn->query($sql);
						$nums = 0;
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								?>
								<td><img width="180px" src="<?php echo $row['picture']?>"></td></tr>
								<tr><td align="center" style="background-color:black; color:white; font-family:Georgia, "Times New Roman", Times, serif;"><?php echo $row["fname"] ?></td></tr>
								<?php if($_SESSION['id']==1){?><tr><td align="center"><a href="photo.php?delete=<?php echo $row["id"] ?>">Delete</a></td></tr><?php }?>
								<?php
							    $nums++;
						    }
						} else {
						    echo "0 results";
						}
						?>

								</table>	</p>
				</div>
			</div>
		</div>
<script>
jQuery(document).ready(function() {
	function close_accordion_section() {
		jQuery('.accordion .accordion-section-title').removeClass('active');
		jQuery('.accordion .accordion-section-content').slideUp(300).removeClass('open');
	}

	jQuery('.accordion-section-title').click(function(e) {
		// Grab current anchor value
		var currentAttrValue = jQuery(this).attr('href');

		if(jQuery(e.target).is('.active')) {
			close_accordion_section();
		}else {
			close_accordion_section();

			// Add active class to section title
			jQuery(this).addClass('active');
			// Open up the hidden content panel
			jQuery('.accordion ' + currentAttrValue).slideDown(300).addClass('open'); 
		}

		e.preventDefault();
	});
});
</script>
</body>
<footer>
<table class="table3" >
<tr height="20px;"><td></td><td></td>
<td rowspan="3" width="200" align="center"><a href="index.php" class="ssylka"><div> ABOUT US </div></a></td>
<td rowspan="3" width="200" align="center"><a href="#" class="ssylka"><div>DEVELOPERS</div></a></td>
<td rowspan="3" width="200" align="center"><a href="contact.php" class="ssylka"><div>CONTACTS<div></a></td>
<td rowspan="3" width="200" align="center"><a href="#" class="ssylka"><div>HELP</div></a></td>
<td rowspan="3" width="60" align="center"><a href="http://vk.com/1en03e"><img src="img/vk5.png" style="width:50"></a></td>
<td rowspan="3" width="60" align="center"><a href="http://vk.com/away.php?to=http%3A%2F%2Finstagram.com%2F1en03e"><img src="img/inst1.png" style="width:50"></a></td>
</tr>
<tr><td width="100"></td><td><img src="img/logo.png" width="140"></td></tr>
<tr><td width="100"></td><td>We change the world</td></tr>
</table>
<p style="position:absolute; bottom:-10px; left:550px; color:#FFFFFF">Copyright � All Rights Reserved.</p>
</footer>
</html>