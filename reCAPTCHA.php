<?php 
      if(isset($_POST['loginBtn'])){
           
           $username= $_POST['username'];
           $password= $_POST['password'];
           $secretKey= "6LfPSG8UAAAAABU6J4hyLnusBa-uMWOJgmq-wjBY";
           $responseKey = $_POST['g-recaptcha-response'];
           $userIP= $_SERVER['REMOTE_ADDR'];

           $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";

           $response = file_get_contents($url);
           
           $response = json_decode($response);
           if($response->success){
           	echo "verified.Your name Is $username";
           }else {
           	echo "Not verfied";
           }
      }

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
</head>
<body>
	<form action="" method="post">
	   <div class="container"  style="margin-top: 100px;">
	   	<div class="row justify-content-center">
	   		<div class="col-md-6">
	   			<label for="">Username:</label>
	   			<div class="form-group">
	   				<input type="text" class="form-control" name="username" />
	   			</div>
	   		</div>
	   	</div>
	   	<div class="row justify-content-center">
	   		<div class="col-md-6">
	   			<label for="">Password:</label>
	   			<div class="form-group">
	   				<input type="password" class="form-control" name="password" />
	   			</div>
	   		</div>
	   	</div>
	   	<div class="row justify-content-center">
	   		<div class="col-md-6">
	   			<div class="form-group">
	   				<input type="submit" name="loginBtn" class="btn btn-success">
	   			</div>
	   		</div>
	   	</div>
	   	<div class="row justify-content-center">
	   		<div class="col-md-6">
	   			<div class="g-recaptcha" data-sitekey="6LfPSG8UAAAAABWuGP0xTCIj-1KTcKiDWWC6crRi"></div> 
	   		</div>
	   	</div>
	 
	   </div>
    </form> 


 <!--<button class="btn btn-lg"> hey this is button</button> -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"  crossorigin="anonymous"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</body>


</html>