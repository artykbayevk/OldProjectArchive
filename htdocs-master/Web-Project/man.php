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
          <a href="#" class="customize">
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





    <!--MAIN CONTENT-->
    <div ng-app="App" ng-controller="Ctrl">
      <div class="content">
        <div class="opacity1" ng-click="hide()">
        </div>
        <div class="popup">
          <div class="customize">
            <a href="#">Customize good</a>
          </div>
          <div class="buy" ng-click="secondPopUp()">
            <a href="#">Buy good</a>
          </div>
        </div>
        <div class="ordPopup">
          <p class="titleOfOrd">
            <span>Your cash - </span>{{money|currency}}||Your Purchase:
          </p>
          <p ng-model="color" class="titleOne">
            {{"Color: " + " " + color}}
          </p>
          <p ng-model="price" class="titleTwo">
            {{price|currency}}
          </p>
          <p ng-model="size" class="titleThree">
            {{"Size: " + " " + size }}
          </p>
          <hr>
          <p class="label">
            <span>{{currentQuantity}} футболок</span> - <span>{{currentQuantity*price|currency}}</span>
          </p>
          <ul class="quantity">
            <li ng-repeat="x in quantities" ng-class="{active: x.checked, disabled: x.disabled}" ng-click="toggle(x)">{{ x.quantity }}</li>
          </ul>
          <div class="buyFunc" ng-click="buy()">
              Buy
          </div>
        </div>
        <div class="end" ng-model="purchase">
            <p class="titleOfOrd">
              Your Purchase:
            </p>
            <table class="table">
              <tr>
                <td>
                  Quantity
                </td>
                <td>
                  {{currentQuantity}}
                </td>
              </tr>
              <tr>
                <td>
                  Price
                </td>
                <td>
                  {{price|currency}}
                </td>
              </tr>
              <tr>
                <td>
                  Purchase
                </td>
                <td>
                  {{purchase|currency}}
                </td>
              </tr>
              <tr>
                <td>
                  Size
                </td>
                <td>
                  {{size}}
                </td>
              </tr>
              <tr>
                <td>
                  Color
                </td>
                <td>
                  {{color}}
                </td>
              </tr>
            </table>
            <div class="buyFunc" ng-click="hide()">
                Finish Your Purchase
            </div>
        </div>
        <div class="title">
          <h4>Choose Good</h4>
        </div>
        <div class="selector">
          <div class="selector-one">
          <p>
            By Color
          </p>
          <hr>
          <div class="button" style="font-weight:bold;border:solid 1px black; width:65px;text-align:center ;line-height:50px;;background-color:black;color:white;cursor:pointer;border-radius:5px;" ng-click="black()">
            BLACK
          </div>
          <div class="button" style="font-weight:bold;border:solid 1px black; width:65px;text-align:center; line-height:50px;background-color:blue;color:white;cursor:pointer;border-radius:5px;" ng-click="blue()">
            BLUE
          </div>
          <div class="button" style="font-weight:bold;border:solid 1px black; width:65px;text-align:center; line-height:50px;;background-color:green;color:white;cursor:pointer;border-radius:5px;" ng-click="green()">
            GREEN
          </div>
          <div class="button" style="font-weight:bold;border:solid 1px black; width:65px;text-align:center ;line-height:50px;;background-color:red;color:white;cursor:pointer;border-radius:5px;" ng-click="red()">
            RED
          </div>
          <div class="button" style="font-weight:bold;border:solid 1px black; width:65px;text-align:center ;line-height:50px;;background-color:white;color:black;cursor:pointer;border-radius:5px;" ng-click="white()">
            WHITE
          </div>
          <div class="button" style="font-weight:bold;border:solid 1px black; width:65px;text-align:center; line-height:50px;;background-color:yellow;color:black;cursor:pointer;border-radius:5px;" ng-click="yellow()">
            YELLOW
          </div>
        </div>
        <div class="selector-two">
          <p>
            By Size
          </p>
          <hr>
          <div class="button" style="font-weight:bold;border:solid 1px black; width:65px;text-align:center ;line-height:50px;;background-color:white;color:black;cursor:pointer;border-radius:5px;" ng-click="xsmall()">
            XS Size
          </div>
          <div class="button" style="font-weight:bold;border:solid 1px black; width:65px;text-align:center ;line-height:50px;;background-color:white;color:black;cursor:pointer;border-radius:5px;" ng-click="small()">
            S Size
          </div>
          <div class="button" style="font-weight:bold;border:solid 1px black; width:65px;text-align:center ;line-height:50px;;background-color:white;color:black;cursor:pointer;border-radius:5px;" ng-click="medium()">
            M Size
          </div>
          <div class="button" style="font-weight:bold;border:solid 1px black; width:65px;text-align:center ;line-height:50px;;background-color:white;color:black;cursor:pointer;border-radius:5px;" ng-click="xmedium()">
            XM Size
          </div>
          <div class="button" style="font-weight:bold;border:solid 1px black; width:65px;text-align:center ;line-height:50px;;background-color:white;color:black;cursor:pointer;border-radius:5px;" ng-click="large()">
            L Size
          </div>
          <div class="button" style="font-weight:bold;border:solid 1px black; width:65px;text-align:center ;line-height:50px;;background-color:white;color:black;cursor:pointer;border-radius:5px;" ng-click="xlarge()">
            XL Size
          </div>
        </br>
        <button type="button" name="button" ng-click="clear()">ALL</button>
        </div>
      </div>
        <div class="goods">
          <div class="item" ng-repeat="x in names | filter:test|filter:test1 | orderBy:'Name'" ng-click="show(x.Name,x.Price,x.Size)">
            <img ng-src="{{ x.Img }}" alt="" />
          </br>
          <p class="price">
            {{x.Price|currency}}
          </p>
            <p>
              <div class="Namesize">
              {{ x.Name + " T-Shirt"}}
            </p></br>
            <p>
              {{"Size"+""+" "+x.Size}}
            </p>
          </div>
          </div>
        </div>
      </div>
    </div>
<script type="text/javascript">

</script>
<script type="text/javascript">
var app = angular.module('App', []);
app.controller('Ctrl', function($scope, $http){
$http.get("list1.php").success(function (response){
  $scope.names = response.groups;
  $scope.black = function(){
    $scope.test="Black";
  }
  $scope.blue=function(){
    $scope.test="Blue";
  }
  $scope.white=function(){
    $scope.test="White";
  }
  $scope.red=function(){
    $scope.test="Red";
  }
  $scope.green=function(){
    $scope.test="Green";
  }
  $scope.yellow=function(){
    $scope.test="Yellow";
  }
  $scope.small=function(){
    $scope.test1="41";
  }
  $scope.xsmall=function(){
    $scope.test1="36";
  }
  $scope.medium=function(){
    $scope.test1="48";
  }
  $scope.xmedium=function(){
    $scope.test1="53";
  }
  $scope.large=function(){
    $scope.test1="56";
  }
  $scope.xlarge=function(){
    $scope.test1="63";
  }
  $scope.clear=function(){
    $scope.test="";
    $scope.test1="";
  }
}).then(function(){

  $scope.quantities = [
    {quantity:1,checked:false,disabled:false},
    {quantity:2,checked:false,disabled:false},
    {quantity:3,checked:false,disabled:false},
    {quantity:4,checked:false,disabled:false},
    {quantity:5,checked:false,disabled:false}
  ]
  if (!localStorage.getItem('money'))localStorage.setItem('money', 500000);

	$scope.money = parseInt(localStorage.getItem('money'));
	$scope.price = 250;
	$scope.currentQuantity = 0;

	function checkDisableds()
	{
		for (i in $scope.quantities)
			if ($scope.money < $scope.price * $scope.quantities[i].quantity)
				$scope.quantities[i].disabled = true;
	}
	checkDisableds();

	$scope.toggle = function(item)
	{
		if (!item.disabled)
		{
			for (i in $scope.quantities)
				if ($scope.quantities[i].quantity != item.quantity)
				$scope.quantities[i].checked = false;

			item.checked = !item.checked;

			if (item.checked)
				$scope.currentQuantity = item.quantity;
			else
				$scope.currentQuantity = 0;
		}
	}

	$scope.buy = function()
	{
		$scope.money -= $scope.currentQuantity * $scope.price;
		localStorage.setItem('money', $scope.money);
    $scope.purchase=$scope.currentQuantity * $scope.price;
		for (i in $scope.quantities) $scope.quantities[i].checked = false;
		checkDisableds();
    showEndOfPurchase();
	}
  function showEndOfPurchase(){
    $('.ordPopup').fadeIn(250);
    $('.ordPopup').css({"visibility":"hidden","display":"none"});
    $('.end').css({"visibility":"visible","display":"block"})

  }

  $scope.show=function(itemOne,itemTwo,itemThree){
    showPopUp();
    $scope.color=itemOne;
    $scope.price=itemTwo;
    $scope.size=itemThree;
  }
  function showPopUp(){
    $('.popup').fadeIn();
    $('.popup').css({"visibility":"visible","display":"block"});
    $('.opacity1').css({"visibility":"visible","display":"block"});
  }
  $scope.hide=function(){
    hidePopUp();
  }
  function hidePopUp(){
    $('.popup').fadeOut();
    $('.popup').css({"visibility":"hidden","display":"none"});
    $('.opacity1').css({"visibility":"hidden","display":"none"});
    $('.ordPopup').css({"visibility":"hidden","display":"none"});
    $('.end').css({"visibility":"hidden","display":"none"})
  }
  $scope.secondPopUp = function () {
    hidePopUp2();
  }
  function hidePopUp2(){
    $('.popup').fadeIn();
    $('.popup').css({"visibility":"hidden","display":"none"});
    $('.ordPopup').css({"visibility":"visible","display":"block"})
  }
});
});
</script>


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
    <script src="js/less.min.js" charset="utf-8"></script>
    <script src="js/mainsc.js" charset="utf-8"></script>
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
  </body>
</html>
