<?php
session_start();
include('include/db.php');

?>


<html>
<head>
<title>Technicalhelpers</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-state=1" />
<link href="css/bootstrap.css" rel="stylesheet"/>
<script src="js/jquery-3.2.1.min.js"></script>	
<script src="js/bootstrap.js"></script>	
<style>

#i:hover{
	transition: linear all 0.2s;
	transform:scale(1.1,1.1); 
}	

.bg{background:url(image/logbg5.jpg) no-repeat;}

#log{
	padding: 60px 40px;
	margin-top: 80px;
	margin-bottom: 50px;
	-webkit-box-shadow:-5px 2px 62px 8px rgba(0,0,0,0.75);
	-moz-box-shadow:-5px 2px 62px 8px rgba(0,0,0,0.75);
	box-shadow:-5px 2px 62px 8px rgba(0,0,0,0.75); 	


}

#img_b{ width: 150px;
	margin: auto;

}

h1{
color: white;
text-align: center;
font-weight: bolder;
margin-top: -20px;
}

label{font-size: 20px; color: white; }

button{

-webkit-box-shadow:-5px 2px 62px 8px rgba(0,0,0,0.75);
-moz-box-shadow:-5px 2px 62px 8px rgba(0,0,0,0.75);
box-shadow:-5px 2px 62px 8px rgba(0,0,0,0.75); 	
}

</style>

</head>
<body>

<!-----------Navbar Start------------------------------------------------------------------------------------------->
<?php
	include('include/header.php'); 

 ?>
<!--------------Navbar End----------------------------------------------------------------------------------->

<br>
<br>
<div class="container-fluid bg">
	<div class="row">
		<div class="col-md-4 col-sm-4 col-xs-12"></div>
		<div class="col-md-4 col-sm-4 col-xs-12">
			<form id="log" action="login.php" method="post" media="all">
				<h1> Login Form </h1>
				<img id="img_b" class="img img-responsive img-circle" src="image/log.gif">
					<div class="form-group">
						<label> Email </label>
						<input type="email" name="email" class="form-control" placeholder="Email Id">
					</div>
					<div class="form-group">
						<label> Password </label>
						<input type="password" name="password" class="form-control" placeholder=" Created Password">
					</div>
					<div class="checkbox">
						<label><input type="checkbox" >Remember me </label>
					</div>
					<button type="submit" class="btn btn-success btn-block" name="login"> Login</button>
			</form>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-12"></div>
	</div>
</div>

<!--------------Footer Start---------->
<?php
	include('include/footer.php');
?>
</body>
</html>
<?php

if(isset($_REQUEST['login']))
{

	$check_login=$_REQUEST['email'];
	$pass=$_REQUEST['password'];
	$check_query="select * from users where email='$check_login' AND password='$pass'";
	$run_check=mysqli_query($con,$check_query);
	$chk_row=mysqli_num_rows($run_check);
	$check_array=mysqli_fetch_array($run_check);
		if(!$chk_row==0)
		{
			$_SESSION['email']=$check_login;
			echo "<script>alert('login Successfully ....!!!')</script>";
			echo "<script>window.open('profile.php?user','_self')</script>";
		}
		else
		{
			echo "<script>alert('User and password mot exsist Please try again....!!!')</script>";
			echo "<script>window.open('login.php','_self')</script>";
		
		}

}
?>