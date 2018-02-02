<html>
<head>
	 <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.css">
<style type="text/css">
table tr td{
	padding: 10px 30px 10px 30px;
}
.form-control{
	width: 50%;
}
body{
  background-image: url(<?php echo base_url();?>img/4.jpg);

}
#mainp{

    width: 1203px;
    height: 1000px;
    margin: 0px auto;
    border-radius: 3%;
    background-color: F8F8F8;
}
.form-horizontal{
    margin-top: 20px;
    margin: 0px auto;
    width: 600px;
   
}
.container{
    margin: 0px auto;
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
<?php if($this->session->userdata('uid')!=null){?><li class="dropdown">
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
    <div id = "mainp"><div class="page-header" style="text-align:center">
   <?php if($this->session->userdata('uid')==1){?><h1>Add new credit
      <small>List of credits</small>
   </h1><?php }else{ ?>

<h1>View new credit
      <small>List of credits</small>
   </h1>
   <?php }?>
</div>
	 <?php if($this->session->userdata('uid')==1){?><div class="container">
    <div class="row">
        <form role="form" method = "post" action="<?php echo base_url();?>index.php/credit/addcredit">
            <div class="col-lg-6">
               
                <div class="form-group">
                    <label for="InputName">Subject's name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="subject" id="InputName" placeholder="Enter Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Sum of Credit</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputName" name="credit" placeholder="Enter Sum" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Cost of all credits</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
        </form>
        
    </div>
</div><?php }?>
<div class="container">
  <h2>CREDIT</h2>
  <p>Each student have ability for view own grades for this discipline</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Subject</th>
        <th>Credit</th>
        <th>Price</th>
        <?php if($this->session->userdata('uid')==1){ ?>
        <th>Delete</th>
        <th>Update</th>
        <?php }?>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($credit as $i) {?>
             <tr>
                <td><?php echo $i['id']?></td>
                <td><?php echo $i['subject']?></td>
                <td><?php echo $i['credit']?></td>
                <td><?php echo $i['price']?></td>
<?php if($this->session->userdata('uid')==1){ ?>
            <td><a href="<?php echo base_url()?>index.php/credit/delete?id=<?php echo $i['id']?>">Delete</a></td>
            <td><a href="<?php echo base_url()?>index.php/credit/update?id=<?php echo $i['id']?>">Update</abs(number)></td></tr>
        <?php }?>
        <?php }?>
    </tbody>
  </table>
</div>


	</table>
</div>
    <script type="text/javascript" src="<?php echo base_url()?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/bootstrap.js"></script>
<div id="footer">
        <div class="container">
            <p class="text-muted credit">Copyright © All Rights Reserved.</p>
        </div>
    </div>
</body>
</html>