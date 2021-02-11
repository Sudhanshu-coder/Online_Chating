<?php
session_start();
include('include/db.php');
if(isset($_SESSION['email']))
{
	$e=$_SESSION['email'];
	$check_query="select * from users where email='$e'";
	$run_check=mysqli_query($con,$check_query);
	$check_array=mysqli_fetch_array($run_check);
			$u_id=$check_array['u_id'];
			$name=$check_array['name'];
			$email=$check_array['email'];
			$password=$check_array['password'];
			$city=$check_array['city'];
			$contact=$check_array['contact'];
			$address=$check_array['address'];
			$img=$check_array['image'];

}
?>


<html>
<head>
<title>Technicalhelpers</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-state=1" />
<link href="css/bootstrap.css" rel="stylesheet"/>
<script >
function ajax()
{
	var req=new XMLHttpRequest();
	req.onreadystatechange = function()
	{

	if(req.readystate==4 && req.status==200)
	{
		document.getElementById('chat').innerHTML=req.responseText;
	}
}
req.open('GET','chat.php',true);
req.send();
}

setInterval(function() {ajax() },1000);

</script>


<script src="js/jquery-3.2.1.min.js"></script>	
<script src="js/bootstrap.js"></script>	
<style>

#i:hover{
	transition: linear all 0.5s;
	transform:scale(1.1,1.1); 
}	

.bg{background:url(image/bg1.jpg) no-repeat;}

#img{
	padding: 50px 40px;
	margin-top: -10px;
	margin-bottom:-10px;
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

.li a:hover {
	background: black;
	color: green;
	transition: linear all 0.5s;
	margin-left: 15px;
}

</style>
</head>
<body onload="ajax();">


<!-----------Navbar Start------------------------------------------------------------------------------------------->
<?php
	include('include/header.php'); 

 ?>
<!--------------Navbar End----------------------------------------------------------------------------------->

<br>
<br>
<div class="container-fluid bg">
	<div class="row">
		<div class="col-md-3" style="margin: -12px;">
			<div class="jumbotron" style="margin: 0px; padding: 0px; margin-bottom: -20px;">
				<div class="list-group  li">
					<br>
					<br>
					<center><img src="users_images/<?php echo $img; ?>" class="img img-responsive" style="width:250px;" />
					<h2 style="background: black; color: white; font-size: 20px; width: 100%; margin-left: -20px; margin-right: -20px;"><?php echo $name;?></h2>
					<a href="profile.php?user" class="btn btn-lg list-group-item "><i class="glyphicon glyphicon-user"></i> Profile</a>	
					<a href="profile.php?update" class="btn btn-lg list-group-item "><i class="glyphicon glyphicon-list"></i> Update</a>	
					<a href="profile.php?pic" class="btn btn-lg list-group-item "><i class="glyphicon glyphicon-picture"></i> Image</a>	
					<a href="profile.php?chatbox" class="btn btn-lg list-group-item "><i class="glyphicon glyphicon-envelope"></i> Chat</a>	
					<a href="profile.php?delete" class="btn btn-lg list-group-item "><i class="glyphicon glyphicon-trash"></i> Delete</a>
					<a href="profile.php?chat" class="btn btn-lg list-group-item "><i class="glyphicon glyphicon-eye-open"></i> Show message</a>
						
					<br>
					</center>
					
				</div>
			</div>

		</div>
		<div class="col-md-9">
			<div class="well" style="margin-top:30px;">

			<?php
				if(isset($_GET['user']))
				{
					include('user.php');
				}
				if(isset($_GET['update']))
				{
					include('update.php');
				}
				if(isset($_GET['pic']))
				{
					include('pic.php');
				}
				if(isset($_GET['delete']))
				{
					include('delete.php');
				}
				if(isset($_GET['chatbox']))
				{
					include('chat_layout.php');
				}
				if(isset($_GET['chat']))
				{
					include('chat.php');
				}
				


			?>
			</div>

		</div>
	</div>
</div>

<!--------------Footer Start---------->
<?php

	include('include/footer.php');
?>
</body>
</html>
