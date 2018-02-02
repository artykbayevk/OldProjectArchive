<html>


<head>
  <style>
body{

  background-image: url(<?php echo base_url()?>img/4.jpg);
}

.img{

  width:50%;
  height: 100px;
}
/*!
 * Start Bootstrap - Half Slider HTML Template (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */
#mainp{

    border: solid black 1px;
    width: 1200px;
    height: 500px;
    margin: 0px auto;
    border-radius: 3%;
    margin-bottom: 0px;
     background-color: F8F8F8;
}
html,
body {
    height: 20%;
}

footer {
    margin: 50px 0;
}
.form-control{

    width: 50%;
}
.lcol{
    width: 340px;
    margin: 0px auto;
}
.well{
  margin: 0px auto;
  position: absolute;
  left: 1px;
}
.panel{
  width: 100%;
  position: absolute;
  top: 80px;
}
.panel-login {
  border-color: #ccc;
  -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
  -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
  box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
  color: #00415d;
  background-color: #fff;
  border-color: #fff;
  text-align:center;
}
.panel-login>.panel-heading a{
  text-decoration: none;
  color: #666;
  font-weight: bold;
  font-size: 15px;
  -webkit-transition: all 0.1s linear;
  -moz-transition: all 0.1s linear;
  transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
  color: #029f5b;
  font-size: 18px;
}
.panel-login>.panel-heading hr{
  margin-top: 10px;
  margin-bottom: 0px;
  clear: both;
  border: 0;
  height: 1px;
  background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
  background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
  background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
  background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
  height: 45px;
  border: 1px solid #ddd;
  font-size: 16px;
  -webkit-transition: all 0.1s linear;
  -moz-transition: all 0.1s linear;
  transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
  outline:none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  border-color: #ccc;
}
.btn-login {
  background-color: #59B2E0;
  outline: none;
  color: #fff;
  font-size: 14px;
  height: auto;
  font-weight: normal;
  padding: 14px 0;
  text-transform: uppercase;
  border-color: #59B2E6;
}
.btn-login:hover,
.btn-login:focus {
  color: #fff;
  background-color: #53A3CD;
  border-color: #53A3CD;
}
.forgot-password {
  text-decoration: underline;
  color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
  text-decoration: underline;
  color: #666;
}

.btn-register {
  background-color: #1CB94E;
  outline: none;
  color: #fff;
  font-size: 14px;
  height: auto;
  font-weight: normal;
  padding: 14px 0;
  text-transform: uppercase;
  border-color: #1CB94A;
}
.btn-register:hover,
.btn-register:focus {
  color: #fff;
  background-color: #1CA347;
  border-color: #1CA347;
}
.row{
  width: 100%;
}
  </style>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.css">
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
<a class="navbar-brand" href="<?php echo base_url()?>index.php">iPortal</a>
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
    <div id="mainp">
      <div class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <a href="#" class="active" id="login-form-link">Login</a>
              </div>
              <div class="col-xs-6">
                <a href="#" id="register-form-link">Register</a>
              </div>
            </div>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <form id="login-form" action="<?php echo base_url();?>index.php/user/login" method="post" role="form" style="display: block;">
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group text-center">
                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                    <label for="remember"> Remember Me</label>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="text-center">
                          <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                <form id="register-form" action="<?php echo base_url();?>index.php/user/registration" method="post" role="form" style="display: none;">
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
        
    </div>
  </div>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/bootstrap.js"></script>
<script type="text/javascript">
$(function() {

    $('#login-form-link').click(function(e) {
    $("#login-form").delay(100).fadeIn(100);
    $("#register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });
  $('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
    $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });

});

</script>
<div id="footer">
        <div class="container">
            <p class="text-muted credit">Copyright © All Rights Reserved.</p>
        </div>
    </div>
</body> 
</html>