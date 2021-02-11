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

<form action="" method="post" enctype="multipart/form-data">
			<br><center>
			<h2>Change Your Image</h2>
			<h4>Select Your Image here.....</h4>
			<div class="input-group input-group-lg">
				<span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
				<input type="file" class="form-control " name="im" required />
			</div><br>
			
			<center>
			<input type="Submit" class="btn btn-success btn-lg" name="im_u" value="Update"/>	
			</form>
		</center>

<?php

if(isset($_REQUEST['im_u']))
{
			$update_id=$i;
			$img=$_FILES['im']['name'];
			$tmp_img=$_FILES['im']['tmp_name'];
			
			$query1="UPDATE  `data2`.`users` SET `image`='$img' WHERE `users`.`u_id`='$update_id'";
			$run1=mysqli_query($con,$query1);
			move_uploaded_file($tmp_img,"users_images/$img");
			if($run1>0)
				{
					echo "<script>alert('Image Updated Successfully ....!!!')</script>";
					echo "<script>window.open('profile.php?pic','_self')</script>";
				}
			else
				{
					echo "<script>alert('not Udated Successful Please try again....!!!')</script>";
					echo "<script>window.open('profile.php?pic','_self')</script>";					
				}	

		

}
?>			
