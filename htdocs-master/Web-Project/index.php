<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>IMake</title>
    <link rel="stylesheet" href="css/bootstrap.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet/less" href="css/template.less" media="screen" title="no title" charset="utf-8">
    <script src="js/jquery-1.10.2.min.js" charset="utf-8"></script>
    <script src="js/angular.min.js" charset="utf-8"></script>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link rel="icon" href="files/logo.png" type="image/png">
  </head>
  <body>
    <!--Navigation Bar-->
    <div class="nav">
      <!--1 part of Header-->
      <div class="up">
        <div class="left">
          <p>
            <a href="index.php" style="color:#7E7E7E;text-decoration:none;"><span>I</span><span>Make</span></a>
          </p>

          <p class="Make">
            Make Your Own Good
          </p>
        </div>
        <div class="right">
          <a href="#" class="show_login">
            Join / Log In
          </a>
          <a href="#">
            Site Feedback
          </a>
          <a href="#">
            Help
          </a>
          <a href="#">
          <span class="glyphicon glyphicon-shopping-cart"></span>
        </a>
          <a href="#">
            <img src="files/us_sml.png" alt="" />
          </a>
        </div>
      </div>

      <!--2 part of Header-->
      <div class="down">
        <div class="navbar">
          <ul>
            <li><a href="man.php">MAN</a></li>
            <li><a href="#">WOMAN</a></li>
            <li><a href="#">SMOCK</a></li>
            <li><a href="#">HEADDRESS</a></li>
            <li><a href="#">3D PRINT</a></li>
          </ul>
        </div>
        <div class="search">
          <input type="input" name="name" class="form-control" value="" placeholder="Search">
        </div>
      </div>
    </div>

    <div class="opacity"></div>
    <!--Slider-->
    <div class="wrapper">
      <div id="slider">
        <a href="#" class="control_next">>></a>
        <a href="#" class="control_prev"><<</a>
        <ul>
          <li><img src="files/bg2.jpg" alt="" /></li>
          <li><img src="files/bg1.jpg" alt="" /></li>
          <li><img src="files/bg3.jpg" alt="" /></li>
          <li><img src="files/bg4.jpg" alt="" /></li>
          <li><img src="files/bg5.jpg" alt="" /></li>
        </ul>
      </div>
    </div>
<!--LOGIN FORM-->


<!--END -->


    <!--ORDER-->
    <div class="order">
      <div class="orderList">
        <p>CHOOSE GOOD</p>
        <p>SELECT COLOR</p>
        <p>MAKE LOGO</p>
        <p>PURCHASE GOOD</p>
      </div>
      <img src="files/Order_cursor.png" alt="" />
      <img src="files/Order_fill.png" alt="" />
      <img src="files/Order_logo1.png" alt="" />
      <img src="files/order1.png" alt="" />
    </div>
    <!--FOOTER-->
    <div class="footer">
      <div class="first">
        <img  class="img" src="files/log.png" alt="" />
        <div class="list">
          <a href="#"><img src="files/foot1.png" alt="" /></a>
          <a href="#"><img src="files/foot2.png" alt="" /></a>
          <a href="#"><img src="files/foot3.png" alt="" /></a>
          <a href="#"><img src="files/foot4.png" alt="" /></a>
        </div>
      </div>
      <div class="second">
        <div class="title">
          INFORMATION
        </div>
        <ul>
          <li>Delivery</li>
          <li>FAQ</li>
          <li>Purchase</li>
          <li>Production</li>
          <li>Partners</li>
          <li>Comments</li>
          <li>Swap and Refund</li>
          <li>Where is my order?</li>
        </ul>
      </div>
      <div class="third">
        <div class="title">
          COMPANY
        </div>
        <ul>
          <li>About us</li>
          <li>Contacts</li>
          <li>LogIn <span class="glyphicon glyphicon-log-in"></span></li>
          <li>Registration</li>
        </ul>
      </div>
      <div class="fourth">
        <div class="number">
          +7 702 214 80 10</br>
          +7 775 332 14 42
        </div>
        <div class="email">
          iMake@gmail.com
        </div>
        <div class="address">
          Kazakhstan,</br>
          Almaty region,</br>
          Kaskelen,</br>
          Abylaykhan 1/1
        </div>
      </div>
      <div class="fifth">
        <div class="titleFive">
          Subscribe to our news
        </div>
        <div class="submit">
          <input type="text" name="email" value="" placeholder="Input Your Email">
          <input type="submit" name="sub" value="Subscribe" class="sub">
        </div>
      </div>
    </div>



    <div ng-app="App" ng-controller="Ctrl">
      <div class="succesfull">
	       <p>Succesfull Authorization</p>
       </div>
      <div id = "loginform">
        <form name="f1">
            <p>LogIn</p>
            <input type = "text" id = "login" placeholder = "Логин" name = "name" ng-model="email">
            <input type = "password" id = "password" name = "password" placeholder = "Пароль" ng-model="password"><br>
            <p type="submit" id = "dologin" value = "Login" ng-click="check()">LOG IN</p>
            <span id="message"></span>
        </form>
      </div>
    </div>

    //Angular JS for LogIn
    <script type="text/javascript">
    var app = angular.module('App', []);
    app.controller('Ctrl', function ($scope, $http) {
    $scope.check = function () {
      document.getElementById("message").textContent = "";
      var request = $http({
              method: "POST",
              url:"server.php",
              data:{
                email:  $scope.email,
                pass:   $scope.password
              },
              headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
      }).success(function (data) {
    	   if(data==$scope.email){
        	  document.getElementById("message").textContent = "Succesfull";
            showpopup3();
            }else{
        	document.getElementById("message").textContent = "Incorrect,try again";
        }});
    };
    });
    </script>
    <script src="js/less.min.js" charset="utf-8"></script>
    <script src="js/mainsc.js" charset="utf-8"></script>
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
  </body>
</html>
