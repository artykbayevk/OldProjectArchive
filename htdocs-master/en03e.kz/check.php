<?php 
session_start();
?>
<html>
<head>
    <title>1EN03E</title>
    <link rel="stylesheet" type="text/css" href="style/style.css"/>
    <meta charset="utf-8">
  <style>
  
.register-title {
  width: 270px;
  line-height: 43px;
  margin: 50px auto 20px;
  font-size: 19px;
  font-weight: 500;
  color: white;
  color: rgba(white, .95);
  text-align: center;
  text-shadow: 0 1px rgba(black, .3);
  background:#999999;
  border-radius: 3px;
  @include linear-gradient(top, #dc745e, #d45742);
  @include box-shadow(inset 0 1px rgba(white, .1),
                      inset 0 0 0 1px rgba(white, .05),
                      0 0 1px 1px rgba(black, .1),
                      0 1px 3px rgba(black, .3));
}

.register {
  margin: 0 auto;
  width: 230px;
  padding: 20px;
  background: #f4f4f4;
  border-radius: 3px;
  @include box-shadow(0 0 1px 1px rgba(black, .1),
                      0 1px 3px rgba(black, .3));
}

input {
  font-family: inherit;
  font-size: inherit;
  color: inherit;
  @include box-sizing(border-box);
}

.register-input {
  display: block;
  width: 100%;
  height: 38px;
  margin-top: 2px;
  font-weight: 500;
  background: none;
  border: 0;
  border-bottom: 1px solid #d8d8d8;

  &:focus {
    border-color: #1e9ce6;
    outline: 0;
  }
}

.register-button {
  display: block;
  width: 100%;
  height: 42px;
  margin-top: 25px;
  font-size: 16px;
  font-weight: bold;
  color: #494d59;
  text-align: center;
  text-shadow: 0 1px rgba(white, .5);
  background: #fcfcfc;
  border: 1px solid;
  border-color: #d8d8d8 #d1d1d1 #c3c3c3;
  border-radius: 2px;
  cursor: pointer;
  @include linear-gradient(top, #fefefe, #eee);
  @include box-shadow(inset 0 -1px rgba(black, .03),
                      0 1px rgba(black, .04));

  &:active {
    background: #eee;
    border-color: #c3c3c3 #d1d1d1 #d8d8d8;
    @include linear-gradient(top, #eee, #fcfcfc);
    @include box-shadow(inset 0 1px rgba(black, .03));
  }

  &:focus { outline: 0; }
}
.registration{

margin:auto;
width:500px;
height:500px;}  
  
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
	<td align="center"><a href="check.php" ><div align="center">LOGIN</div></a></td>
	<td align="center"><a href="reg.php"><div align="center" style="width:130">REGISTRATION</div></a></td>
	</tr>
	</table>
	</td>
	</tr>
</table>
	</header>
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<?php 
include('connection.php');
if(!isset($_SESSION['logged'] )){
  if(isset($_POST['submit']))
  {
  	$login = $_POST['login'];
  	$password = $_POST['password'];
  	
  	$query = mysql_query("SELECT * FROM users where login ='$login'");
  	while($row=mysql_fetch_array($query))
  	{
    if( $login==$row['login']&&$password==$row['password'])
        {
  			$_SESSION['logged']=true;
        $_SESSION['name']=$row['name'];
        $_SESSION['surname']=$row['surname'];
        $_SESSION['id']=$row['id'];

  			header('Location:index.php');
        }else{

          echo"<h2 style=\"background:black; text-align:center; color:white\">Password or login is wrong</h2>";
          break;
        }
  	}
  }
}
else{
  session_destroy();
  $_SESSION['logged']=false;
}
?>
<body>
<div class="registration"> 
<h1 class="register-title">Welcome</h1>
  <form class="register" method="post" action="check.php">
    <input type="text" class="register-input"  name="login"placeholder="|Login">
    <input type="password" class="register-input"  name="password"placeholder="|Password">

	<input type="submit" value="Log in" class="register-button" name="submit">
  </form>
  
  </div>
</body>
<footer>
<table class="table3" >
<tr height="20px;"><td></td><td></td><td rowspan="3" width="200" align="center"><a href="index.php" class="ssylka"><div> ABOUT US </div></a></td>
<td rowspan="3" width="200" align="center"><a href="#" class="ssylka"><div>DEVELOPERS</div></a></td>
<td rowspan="3" width="200" align="center"><a href="contact.php" class="ssylka"><div>CONTACTS<div></a></td>
<td rowspan="3" width="200" align="center"><a href="#" class="ssylka"><div>HELP</div></a></td>
<td rowspan="3" width="60" align="center"><a href="http://vk.com/1en03e"><img src="img/vk5.png" style="width:50"></a></td>
<td rowspan="3" width="60" align="center"><a href="http://vk.com/away.php?to=http%3A%2F%2Finstagram.com%2F1en03e"><img src="img/inst1.png" style="width:50"></a></td>
</tr>
<tr><td width="100"></td><td><img src="img/logo.png" width="140"></td></tr>
<tr><td width="100"></td><td>We change the world</td></tr>
</table>
<p style="position:absolute; bottom:-10px; left:550px; color:#FFFFFF">Copyright  All Rights Reserved.</p>
</footer>
</html>