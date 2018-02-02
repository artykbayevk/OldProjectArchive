<?php 
session_start();
if(!$_SESSION['logged']){
header("Location:check.php");
}
?>
<html>
<head>
    <title>1EN03E</title>
    <link rel="stylesheet" type="text/css" href="style/style.css"/>
    <meta charset="utf-8">
    <style type="text/css">
.divka{
box-shadow: 0 0 20px rgba(0,0,0,0.4);
width:1000px;
height: 500px;
margin: auto;}
.divka1{
box-shadow: 0 0 20px rgba(0,0,0,0.4);
width: 220px;
float: left;
}
.divka2{
	float: left;
	width: 775px;
	height: 490px;
	border: solid black 1px;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-style: italic;
	font-weight: bold;
}

    </style>
    <header>
	
<table class="table1">
	<tr>
	<td width="72" ></td>
	<td rowspan="2"><img src="img/logo.png" width="140"></td>
	<td width="160" align="center"><a href="index.php" ><div class="ssylka"> HOME </div></a></td>
  <td width="160" align="center"><a href="members.php" ><div class="ssylka"> MEMBERS </div> </a></td>
	<td width="160" align="center"><a href="education.php"><div class="ssylka"> EDUCATION </div></a></td>
	<td width="160" align="center"><a href="photo.php"><div class="ssylka"> PHOTO </div></a></td>
	<td width="160" align="center"><a href="contact.php"><div class="ssylka"> CONTACTS </div></td>
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
		<?php
			if(!isset($_SESSION['logged'])){
				echo "	<td align='center'><a href='check.php' ><div align='center'>LOGIN</div></a></td>
						<td align='center'><a href='reg.php'><div align='center' style='width:130'>REGISTRATION</div></a></td>
					";
			}
			else{
				echo "<td align='center' style='font-size:15px;'>Welcome ".$_SESSION['name']." ".$_SESSION['surname']."</td>";
				echo "<td align='center'><a href='logout.php'><div align='center' style='width:130'>LOGOUT</div></a></td>";
			}	
		?>
	</tr>
	</table>
	</td>
	</tr>
</table>
	</header>
	<script type="text/javascript" src="js/jquery.js"></script>
	
</head>
<body>
<div class="divka" ><div class="divka1"><img src="img/47.jpg"  align="center" vspace="50" hspace="30" alt="" style="width:150px; "></div>
<div class="divka2">
<table border="1">
	<tr >
		<td align="center" style="width:380px; height:120px;" >Name & Surname:</td><td align="center" style="width:380px; height:120px;">Kamalkhan Artykbaev</td>
	</tr>
	<tr>
		<td align="center" style="width:120px; height:120px;">E-mail:</td><td align="center" style="width:100px; height:100px;">kamalkhan.sdu@gmail.com</td>
	</tr>
	<tr>
		<td align="center" style="width:120px; height:120px;">Telephone:</td><td align="center" style="width:100px; height:100px;">8-702-214-80-10</td>
	</tr>
	<tr>
		<td align="center" style="width:120px; height:120px;">Address</td><td align="center" style="width:100px; height:100px;">Almaty,Kaskelen,SDU</td>
	</tr>
</table>
</div>
</div>



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
<p style="position:absolute; bottom:-10px; left:550px; color:#FFFFFF">Copyright © All Rights Reserved.</p>
</footer>
</html>