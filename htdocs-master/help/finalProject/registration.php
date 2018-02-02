<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript">
         function register(){
         	var name = $("#name").val();
         	var surname = $("#surname").val();
         	var email = $("#email").val();
         	var password = $("#password").val();
         	$.ajax({
         		url: "register.php",
         		type: "POST",
         		data: "name="+name+"&surname="+surname+"&email="+email+"&password="+password,
         		success: function(data){
         			$("#result").html(data);
         		}
         	});
         }

    </script>
    </head>
<body>
     <div class="row">
         <div class="col-md-offset-3 col-md-4">
           <div class="form-horizontal">
           	   <div class="form-group">
           	   	   <label for="name" class="control-lable col-md-4">Name</label>
           	   	   <div class="col-md-8">
           	   	        <input type="text" name="name" id="name" class="form-control" placeholder="Name">
           	   	   </div>
           	   </div>
           	   <div class="form-group">
           	   	   <label for="surname" class="control-lable col-md-4">Surname</label>
           	   	   <div class="col-md-8">
           	   	        <input type="text" name="surname" id="surname" class="form-control" placeholder="Surname">
           	   	   </div>
           	   </div>
           	   <div class="form-group">
           	   	   <label for"email" class="control-lable col-md-4">Email</label>
           	   	   <div class="col-md-8">
           	   	        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
           	   	   </div>
           	   </div>
           	   <div class="form-group">
           	   	   <label for="password" class="control-lable col-md-4">Password</label>
           	   	   <div class="col-md-8">
           	   	        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
           	   	   </div>
           	   </div>
           	   <div class="form-group">
           	   	   <div class="col-md-offset-5 col-md-4">
           	   	   	   <input type="submit" class="btn btn-warning" value="Зарегистрироваться" onClick="register()">
           	   	   </div>
           	   </div>
            <p id="result"></p>

           </div>

         </div>

     </div>

</body>
</html>
