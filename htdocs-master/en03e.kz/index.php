<?php 
session_start();
?>
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
	<td width="160" align="center"><a href="index.php" ><div class="ssylka"> HOME </div></a></td>
  <td width="160" align="center"><a href="members.php" ><div class="ssylka"> MEMBERS </div> </a></td>
	<td width="160" align="center"><a href="education.php"><div class="ssylka"> EDUCATION </div></a></td>
	<td width="160" align="center"><a href="photo.php"><div class="ssylka"> PHOTO </div></a></td>
	<td width="160" align="center"><a href="contact.php"><div class="ssylka"> CONTACTS </div</a></td>
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

<div id="slideshow">
   <div>
     <img src="img/3.jpg" class="img">
   </div>
   <div>
     <img src="img/7.jpg" class="img">
   </div>
   <div>
   <img src="img/11.jpg" class="img">
   </div>	
   <div>
   <img src="img/21.jpg" class="img">
   </div>
   <div>
   <img src="img/24.jpg" class="img">
   </div>
   <div>
   	<img src="img/IMG_6677.jpg" class="img">
   </div>
   <div>
   	<img src="img/IMG_7388.jpg" class="img">
   </div>
   <div>
   	<img src="img/IMG_7389.jpg" class="img">
   </div>
</div>
<script>
$("#slideshow > div:gt(0)").hide();
setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);
</script>
<div class="main">
<div class="log">WHAT ABOUT THIS SITE?</div>
<div>
<table class="table2" border="2">
<tr>
<td align="center" width="200" height="40" class="td1">EDUCATION</td>
<td align="center" width="200" height="40" class="td1">ACTIVITY</td>
<td align="center" width="200" height="40" class="td1">EVENTS</td>
</tr>
<tr>
<td align="center"><img src="img/activity.jpg" class="img2"></td>
<td align="center"><img src="img/IMG_6674.JPG" class="img3"></td>
<td align="center"><img src="img/activity1.jpg" class="img1"></td>
</tr>
<tr class="tr2">
<td>Everytime our group prepare for midterms,exams and lab works. You have ability for download files for education</td>
<td>Our group participate on activities, that are organize by our university administration. You have ability for watching our photos and videos</td>
<td>We are not pass all events in university. Each one in our group very outgoing and active</td>
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