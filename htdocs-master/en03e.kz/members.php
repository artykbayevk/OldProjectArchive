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
	
<style>
footer{
bottom:-890px;}
	</style>
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
    
	</head>
<body>
<div class="members">
<p align="center" class="members1">OUR MEMBERS</p>
<div class="accordion">
	<h3>ADMIN OF THIS GROUP: Artykbaev</h3>
	<p><table border="1"><tr>
	<td><img src="img/47.jpg" class="img4"></td>
	<td width="300" align="center"><h4 style=" font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">NAME:</h4>Kamalkhan</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">HOME TOWN:</h4>From Astana</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">DATE OF BIRTH:</h4>19.10.1996</td>
	</tr></table></p>
	<h3>Abenova</h3>
	<p>
	<table border="1"><tr>
	<td><img src="img/17.jpg" class="img4"></td>
	<td width="300" align="center"><h4 style=" font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">NAME:</h4>Samal</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">HOME TOWN:</h4>From Shamalgan</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">DATE OF BIRTH:</h4>01.08.1997</td>
	</tr></table></p>
	<h3>Abubakirova</h3>
	<p>
	<table border="1"><tr>
	<td><img src="img/16.jpg" class="img4"></td>
	<td width="300" align="center"><h4 style=" font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">NAME:</h4>Aigerim</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">HOME TOWN:</h4>From Shymkent</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">DATE OF BIRTH:</h4>05.06.1997</td>
	</tr></table></p>
	<h3>Alimova</h3>
	<p>
	<table border="1"><tr>
	<td><img src="img/20.jpg" class="img4"></td>
	<td width="300" align="center"><h4 style=" font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">NAME:</h4>Aida</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">HOME TOWN:</h4>From Taraz</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">DATE OF BIRTH:</h4>30.05.1997</td>
	</tr></table></p>
	<h3>Amaniyazov</h3>
	<p>
	<table border="1"><tr>
	<td><img src="img/33.jpg" class="img4"></td>
	<td width="300" align="center"><h4 style=" font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">NAME:</h4>Azamat</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">HOME TOWN:</h4>From Atyrau</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">DATE OF BIRTH:</h4>26.12.1996</td>
	</tr></table></p>
	<h3>Aner</h3>
	<p><table border="1"><tr>
	<td><img src="img/40.jpg" class="img4"></td>
	<td width="300" align="center"><h4 style=" font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">NAME:</h4>Dias</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">HOME TOWN:</h4>From Semey</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">DATE OF BIRTH:</h4>18.10.1996</td>
	</tr></table></p>
	<h3>Aniyat</h3>
	<p>
	<table border="1"><tr>
	<td><img src="img/31.jpg" class="img4"></td>
	<td width="300" align="center"><h4 style=" font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">NAME:</h4>Daurkhan</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">HOME TOWN:</h4>From Astana</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">DATE OF BIRTH:</h4>10.12.1996</td>
	</tr></table></p>
	<h3>Aukenova</h3>
	<p>
	<table border="1"><tr>
	<td><img src="img/15.jpg" class="img4"></td>
	<td width="300" align="center"><h4 style=" font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">NAME:</h4>Zhadyra</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">HOME TOWN:</h4>From Semey</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">DATE OF BIRTH:</h4>28.03.1996</td>
	</tr></table></p>
	<h3>Balgabai</h3>
	<p>
	<table border="1"><tr>
	<td><img src="img/45.jpg" class="img4"></td>
	<td width="300" align="center"><h4 style=" font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">NAME:</h4>Orynbasar</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">HOME TOWN:</h4>From Kyzylorda</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">DATE OF BIRTH:</h4>14.07.1997</td>
	</tr></table></p>
	<h3>Kabyl</h3>
	<p>
	<table border="1"><tr>
	<td><img src="img/42.jpg" class="img4"></td>
	<td width="300" align="center"><h4 style=" font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">NAME:</h4>Yerbolat</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">HOME TOWN:</h4>From Aktobe</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">DATE OF BIRTH:</h4>21.11.1996</td>
	</tr></table></p>
	<h3>Karabazar</h3>
	<p>
	<table border="1"><tr>
	<td><img src="img/43.jpg" class="img4"></td>
	<td width="300" align="center"><h4 style=" font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">NAME:</h4>Bakhtiyar</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">HOME TOWN:</h4>From Kaskelen</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">DATE OF BIRTH:</h4>14.01.1996</td>
	</tr></table></p>
	<h3>Klyshbek</h3>
	<p>
	<table border="1"><tr>
	<td><img src="img/34.jpg" class="img4"></td>
	<td width="300" align="center"><h4 style=" font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">NAME:</h4>Maxat</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">HOME TOWN:</h4>From Aktau</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">DATE OF BIRTH:</h4>11.09.1996</td>
	</tr></table></p>
	<h3>Kulikeshov</h3>
	<p>
	<table border="1"><tr>
	<td><img src="img/32.jpg" class="img4"></td>
	<td width="300" align="center"><h4 style=" font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">NAME:</h4>Dinislam</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">HOME TOWN:</h4>From Kyzylorda</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">DATE OF BIRTH:</h4>29.02.1991</td>
	</tr></table></p>
	<h3>Kuzhambetova</h3>
	<p>
	<table border="1"><tr>
	<td><img src="img/18.jpg" class="img4"></td>
	<td width="300" align="center"><h4 style=" font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">NAME:</h4>Kymbat</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">HOME TOWN:</h4>From Oskemen</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">DATE OF BIRTH:</h4>27.09.1996</td>
	</tr></table></p>
	<h3>Nabigazinova</h3>
	<p>
	<table border="1"><tr>
	<td><img src="img/19.jpg" class="img4"></td>
	<td width="300" align="center"><h4 style=" font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">NAME:</h4>Elnura</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">HOME TOWN:</h4>From Semey</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">DATE OF BIRTH:</h4>11.09.1996</td>
	</tr></table></p>
	<h3>Rakhmet</h3>
	<p>
	<table border="1"><tr>
	<td><img src="img/36.jpg" class="img4"></td>
	<td width="300" align="center"><h4 style=" font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">NAME:</h4>Zhanat</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">HOME TOWN:</h4>From Almaty</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">DATE OF BIRTH:</h4>05.08.1996</td>
	</tr></table></p>
	<h3>Rustembek</h3>
	<p>
	<table border="1"><tr>
	<td><img src="img/37.jpg" class="img4"></td>
	<td width="300" align="center"><h4 style=" font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">NAME:</h4>Sayatbek</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">HOME TOWN:</h4>From Taraz</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">DATE OF BIRTH:</h4>21.09.1996</td>
	</tr></table></p>
	<h3>Serik</h3>
	<p>
	<table border="1"><tr>
	<td><img src="img/14.jpg" class="img4"></td>
	<td width="300" align="center"><h4 style=" font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">NAME:</h4>Meruyert</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">HOME TOWN:</h4>From Almaty</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">DATE OF BIRTH:</h4>22.12.1996</td>
	</tr></table></p>
	<h3>Taizhan</h3>
	<p>
	<table border="1"><tr>
	<td><img src="img/48.jpg" class="img4"></td>
	<td width="300" align="center"><h4 style=" font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">NAME:</h4>Azamat</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">HOME TOWN:</h4>From Saryagash</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">DATE OF BIRTH:</h4>24.12.1996</td>
	</tr></table></p>
	<h3>Tolegen</h3>
	<p>
	<table border="1"><tr>
	<td><img src="img/44.jpg" class="img4"></td>
	<td width="300" align="center"><h4 style=" font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">NAME:</h4>Aidos</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">HOME TOWN:</h4>From Shymkent</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">DATE OF BIRTH:</h4>20.02.1996</td>
	</tr></table></p>
	<h3>Tugelbek</h3>
	<p>
	<table border="1"><tr>
	<td><img src="img/38.jpg" class="img4"></td>
	<td width="300" align="center"><h4 style=" font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">NAME:</h4>Talgar</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">HOME TOWN:</h4>From Shymkent</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">DATE OF BIRTH:</h4>04.03.1997</td>
	</tr></table></p>
	<h3>Yakupbayev</h3>
	<p>
	<table border="1"><tr>
	<td><img src="img/35.jpg" class="img4"></td>
	<td width="300" align="center"><h4 style=" font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">NAME:</h4>Arman</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">HOME TOWN:</h4>From Almaty</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">DATE OF BIRTH:</h4>31.07.1996</td>
	</tr></table></p>
	<h3>Yeldisbayev</h3>
	<p>
	<table border="1"><tr>
	<td><img src="img/46.jpg" class="img4"></td>
	<td width="300" align="center"><h4 style=" font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">NAME:</h4>Duisen</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">HOME TOWN:</h4>From Aktau</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">DATE OF BIRTH:</h4>12.06.1996</td>
	</tr></table></p>
	<h3>Yermekbai</h3>
	<p>
	<table border="1"><tr>
	<td><img src="img/41.jpg" class="img4"></td>
	<td width="300" align="center"><h4 style=" font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">NAME:</h4>Abdulmalik</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">HOME TOWN:</h4>From Saryagash</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">DATE OF BIRTH:</h4>09.03.1996</td>
	</tr></table></p>
	<h3>Yrzamberdi</h3>
	<p>
	<table border="1"><tr>
	<td><img src="img/39.jpg" class="img4"></td>
	<td width="300" align="center"><h4 style=" font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">NAME:</h4>Yerbolat</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">HOME TOWN:</h4>From Shymkent</td>
	<td width="300" align="center"><h4 style="font-family:Verdana, Arial, Helvetica, sans-serif;font-style:italic">DATE OF BIRTH:</h4>05.10.1996</td>
	</tr></table></p>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	
	$(".accordion h3:first").addClass("active");
	$(".accordion p:not(:first)").hide();

	$(".accordion h3").click(function(){
		$(this).next("p").slideToggle("slow")
		.siblings("p:visible").slideUp("slow");
		$(this).toggleClass("active");
		$(this).siblings("h3").removeClass("active");
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