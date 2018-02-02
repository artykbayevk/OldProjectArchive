<html>
<TITLE>iPortal</TITLE>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.css">
<head>
  <?php
        $this->load->library('session');
      ?>
  <style>

body{
  background-image: url(<?php echo base_url();?>img/4.jpg);

}
.img{

  width:50%;
  height: 100px;
}
#carousel-inner{

  width:50%;
}
/*!
 * Start Bootstrap - Half Slider HTML Template (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */
#mainp{

    width: 1203px;
    height: 600px;
    margin: 0px auto;
    border-radius: 3%;
    background-color: F8F8F8;
}
html,
body {
    height: 20%;
}

/* You can change the height of the carousel by changing the height in the class below. It is set to 50% by default, but can be any height! */

.carousel {
      height: 2000%;
    border-radius: 10%;
}


.item,
.active,
.carousel-inner {
    height: 100%;
}

/* Background images are set within the HTML using inline CSS, not here */

.fill {
    width: 50%;
    height: 90%;
    background-position: center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
    margin: 0px auto;
}

footer {
    margin: 0px auto;
}
.jumbotron{
    width: 300px; 
    text-align: center;
    height: 319px;
    float: left;
    border-radius: 7%;
    margin-bottom: 0;
}
.container{
  width: 500px;
}

  </style>
  <nav class="navbar navbar-default">
<div class="container-fluid">
<!— Brand and toggle get grouped for better mobile display —>
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button> 
<a class=" active navbar-brand "  href="<?php echo base_url();?>index.php/welcome" >iPortal</a>
</div>

<!— Collect the nav links, forms, and other content for toggling —>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
<li ><a href="<?php echo base_url();?>index.php/news">MyGrades<span class="sr-only">(current)</span></a></li>
<li><a href="<?php echo base_url();?>index.php/credit">Credits</a></li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Disciplines <span class="caret"></span></a>
<ul class="dropdown-menu" role="menu">
<li><a href="<?php echo base_url();?>index.php/discipline/math">Mathematics</a></li>
<li><a href="<?php echo base_url();?>index.php/discipline/software">Software</a></li>
<li><a href="<?php echo base_url();?>index.php/discipline/hardware">Hardware Control</a></li>
<li><a href="<?php echo base_url();?>index.php/discipline/programming">Programming</a></li>
<li class="divider"></li>
<li><a href="<?php echo base_url();?>index.php/discipline/lang">Languages</a></li>

</ul>
</li>
</ul>
<form class="navbar-form navbar-left" role="search">
<div class="form-group">
<input type="text" class="form-control" placeholder="Search">
</div>
<button type="submit" class="btn btn-default">Search</button>
</form>
<ul class="nav navbar-nav navbar-right">
<?php if($this->session->userdata('uid')==null){?><li><a href="<?php echo base_url();?>index.php/welcome1"><button class="btn btn-default btn-m"><span class="glyphicon glyphicon-log-in"> LogIn</span></button></a></li><?php };?>
<?php if($this->session->userdata('uid')!=null){?>
<li><a href="#">Welcome <?php echo $this->session->userdata('username');?></a></li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Other<span class="caret"></span></a>
<ul class="dropdown-menu" role="menu">
<li><a href="<?php echo base_url()?>index.php/admin"><span class="glyphicon glyphicon-user"> MyCabinet</span></a></li>
<li><a href="#"><span class="glyphicon glyphicon-thumbs-down"> Retakes</span></a></li>
<li class="divider"></li>
<li><a href="<?php echo base_url()?>index.php/user/logout"><span class="glyphicon glyphicon-log-out"> LogOut</span></a></li>
</ul>
</li><?php }?>
</ul>
</div><!— /.navbar-collapse —>
</div><!— /.container-fluid —>
</nav>
<!--
SLIDER

-->


</head>
<body>
    <div id="mainp">
      <div class="container">
  <h2>Computer Programming </h2>           
  <img src="<?php echo base_url()?>img/programming.jpg" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
  <p class="muted">Computer programming (often shortened to programming) is a process that leads from an original formulation of a computing problem to executable computer programs. Programming involves activities such as analysis, developing understanding, generating algorithms, verification of requirements of algorithms including their correctness and resources consumption, and implementation (commonly referred to as coding[1][2]) of algorithms in a target programming language. Source code is written in one or more programming languages (such as C, Fortran, JavaScript, Lisp, Python, Ruby, Smalltalk, etc.). The purpose of programming is to find a sequence of instructions that will automate performing a specific task or solving a given problem. The process of programming thus often requires expertise in many different subjects, including knowledge of the application domain, specialized algorithms and formal logic.</p>
</div>
    
</div>

    <div id="footer">
        <div class="container">
            <p class="text-info credit">Copyright © All Rights Reserved.</p>
        </div>
    </div>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/bootstrap.js"></script>
</body>
</html>