<?php

include('include/db.php');
@session_start();
if(isset($_SESSION['email']))
{

	$e=$_SESSION['email'];
	$check_query="select * from users where email='$e'";
	$run_check=mysqli_query($con,$check_query);
	$check_array=mysqli_fetch_array($run_check);
			$i=$check_array['u_id'];
			$n=$check_array['name'];
			$e=$check_array['email'];
			$p=$check_array['password'];
			$c=$check_array['city'];
			$cont=$check_array['contact'];
			$a=$check_array['address'];
			$im=$check_array['image'];
}			

?>

<form action="update.php" method="post" enctype="multipart/form-data">
			<div class="input-group input-group-lg">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input type="text" class="form-control input-group-item" name="name" value="<?php echo $n; ?>" required />
			</div><br>
			<div class="input-group input-group-lg">
				<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				<input type="email" class="form-control input-group-item" name="email" value="<?php echo $e; ?>" required />
			</div><br>
			<div class="input-group input-group-lg">
				<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
				<input type="text" class="form-control input-group-item" name="pass" value="<?php echo $p; ?>" required />
			</div><br>
			<div class="input-group input-group-lg">
				<span class="input-group-addon"><i class="glyphicon glyphicon-random"></i></span>
				<select name="city" class="form-control">
					<option><?php echo $c; ?></option>
					<option>Delhi</option>
					<option>Ranchi</option>
					<option>Dehradun</option>
				</select>
			</div><br>
			<div class="input-group input-group-lg">
				<span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
				<input type="text" class="form-control input-group-item" name="contact" value="<?php echo $cont; ?>" required />
			</div><br>
			<div class="input-group input-group-lg">
				<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
				<input type="text" class="form-control input-group-item" name="address" value="<?php echo $a; ?>" required />
			</div><br>
			
			<center>
			<input type="Submit" class="btn btn-success btn-lg" name="up" value="Update"/>	
			</form>

<?php

if(isset($_REQUEST['up']))
{
			$update_id=$i;
			$name1=$_REQUEST['name'];
			$email1=$_REQUEST['email'];
			$password1=$_REQUEST['pass'];
			$city1=$_REQUEST['city'];
			$contact1=$_REQUEST['contact'];
			$address1=$_REQUEST['address'];
			$query1="UPDATE  `data2`.`users` SET  `name`='$name1', `email`='$email1', `password`='$password1', `city`='$city1', `contact`='$contact1', `address`='$address1' WHERE `users`.`u_id`='$update_id'";
			$run1=mysqli_query($con,$query1);
			if($run1>0)
				{
					echo "<script>alert('Updated Successfully ....!!!')</script>";
					echo "<script>window.open('profile.php?update','_self')</script>";
				}
			else
				{
					echo "<script>alert('not Udated Successful Please try again....!!!')</script>";
					echo "<script>window.open('profile.php?update','_self')</script>";					
				}	

		

}
?>			
