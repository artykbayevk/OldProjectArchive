<html>
<head>
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.css">
<style type="text/css">
table tr td{
    padding: 10px 30px 10px 30px;
}
.form-control{
    width: 60%;
}
#mainp{

    width: 1203px;
    height: 640px;
    margin: 0px auto;
    border-radius: 3%;
    background-color: F8F8F8;
}
body{
  background-image: url(<?php echo base_url();?>img/4.jpg);

}
.form-horizontal{
    position: absolute;
    left: 450px;
    top: 300px;
    width: 600px;
   
}
.page-header{
    position: absolute;
    left: 450px;
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
<?php  if($this->session->userdata('uid')!=1){?>
<li><a href="#"><span class="glyphicon glyphicon-thumbs-down"> Retakes</span></a></li>
<?php }?>
<li class="divider"></li>
<li><a href="<?php echo base_url()?>index.php/user/logout"><span class="glyphicon glyphicon-log-out"> LogOut</span></a></li>
</ul>
</li><?php }?>
</ul>
</div><!— /.navbar-collapse —>
</div><!— /.container-fluid —>
</nav>
</head>
<body>

    <div id = "mainp">
        <div class="page-header" style="text-align:center">
   <h1>Update this Grade
      <small>Grade for smth</small>
   </h1>
</div>
    <form class="form-horizontal" role="form" method="post" action="<?php echo base_url();?>index.php/news/updateNews?id=<?php echo $_GET['id']; ?>">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="NAME OF STUDENT" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Surname</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="email" name="surname" placeholder="SURNAME OF STUDENT" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Grade</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="email" name="grade" placeholder="GRADES FOR SMTH" value="">
        </div>
    </div>
     <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Subject</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="email" name="subject" placeholder="SUBJECT" value="">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <! Will be used to display an alert to the user>
        </div>
    </div>
</form>
    </div>
    <div id="footer">
        <div class="container">
            <p class="text-muted credit">Copyright © All Rights Reserved.</p>
        </div>
    </div>
</body>
</html>