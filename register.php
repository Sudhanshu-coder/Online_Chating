<?php

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
.nl li:hover{
	color: white;
	background-color: red;
	transition: linear all 0.3s;
	}
.nr li:hover{
	color: white;
	background-color: green;
	transition: linear all 0.3s;
	border-radius: 20px;
	}
	.new{
		background:url(image/bg1.jpg) ;
		}
	*{margin:0px;padding:0px;}
#i:hover{
	transition: linear all 0.2s;
	transform:scale(1.1,1.1); 
}	
.bg{background:url(image/bg8.jpg) no-repeat;}

h1{
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
	<div class="row" style="margin-left:20px;margin-right: 20px;">
	<center>	
		<br>
		<br>
	<h1 style="background: lightgray;width:70%;  border-radius: 20px;text-align:center;font-weight: bold;font-family: time new roman;color:#600;font-size: 40px; ">Create an Account	</h1>
	<br><br>
	</center>	
		<div class="col-md-3">
			
		</div>
		<div class="col-md-6">
			<form action="register.php" method="post" enctype="multipart/form-data">
			<div class="input-group input-group-lg">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input type="text" class="form-control input-group-item" name="name" placeholder="Enter Name..." required />
			</div><br>
			<div class="input-group input-group-lg">
				<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				<input type="email" class="form-control input-group-item" name="email" placeholder="Enter Email..." required />
			</div><br>
			<div class="input-group input-group-lg">
				<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				<input type="password" class="form-control input-group-item" name="pass" placeholder="Password" required />
			</div><br>
			<div class="input-group input-group-lg">
				<span class="input-group-addon"><i class="glyphicon glyphicon-random"></i></span>
				<select name="city" class="form-control">
					<option>Select city</option>
					<option>Delhi</option>
					<option>Ranchi</option>
					<option>Dehradun</option>
				</select>
			</div><br>
			<div class="input-group input-group-lg">
				<span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
				<input type="text" class="form-control input-group-item" name="contact" placeholder="Enter contact number..." required />
			</div><br>
			<div class="input-group input-group-lg">
				<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
				<input type="text" class="form-control input-group-item" name="address" placeholder="Enter Address..." required />
			</div><br>
			<div class="input-group input-group-lg">
				<span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
				<input type="file" class="form-control input-group-item" name="img"  required />
			</div><br>
			<center>
			<input type="Submit" class="btn btn-success btn-lg" name="reg" value="Register"/>	
			</form>
			<br>
			<br>
			<br>
			</center>
		</div>
		<div class="col-md-3">
			
		</div>

		
	</div>
</div>	



<!--------------Footer Start---------->
<?php
	include('include/footer.php');
?>
</body>
</html>

<?php

if(isset($_REQUEST['reg']))
{
	$check_reg=$_REQUEST['email'];
	$check_query="select * from users where email='$check_reg'";
	$run_check=mysqli_query($con,$check_query);
	$check_row=mysqli_num_rows($run_check);
	$check_array=mysqli_fetch_array($run_check);
		if(!$check_row==0)
		{
			echo "<script>alert('Email is already exist please use another email ....!!!')</script>";
		}
		else
		{
			$name=$_REQUEST['name'];
			$email=$_REQUEST['email'];
			$password=$_REQUEST['pass'];
			$city=$_REQUEST['city'];
			$contact=$_REQUEST['contact'];
			$address=$_REQUEST['address'];
			$img=$_FILES['img']['name'];
			$tmp_img=$_FILES['img']['tmp_name'];
			$query="INSERT INTO `data2`.`users` (`u_id`, `name`, `email`, `password`, `city`, `contact`, `address`, `image`) VALUES (NULL, '$name', '$email', '$password', '$city', '$contact', '$address', '$img')";
			move_uploaded_file($tmp_img,"users_images/$img");
			$run=mysqli_query($con,$query);
			if($run>0)
				{
					echo "<script>alert('You Registered Successfully Please login....!!!')</script>";
					echo "<script>window.open('login.php','_self')</script>";
				}
			else
				{
					echo "<script>alert('You Registration not Successful Please try again....!!!')</script>";
					echo "<script>window.open('register.php','_self')</script>";					
				}	

		}

}
?>