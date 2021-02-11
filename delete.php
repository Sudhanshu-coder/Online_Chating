
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
			
}			

?>



<form action="" method="post" >
	<center>
		<h2 style="font-family:'Times New Roman',Times,serif; color: #FFF; background: #000; font-size: 35px;">Do you really want to delete your account</h2>
		<input type="submit" class="btn btn-success" name="yes" value="Yes, I want to Delete">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="no" value="No" class="btn btn-warning">
	</center>
		
</form>

<?php

if(isset($_REQUEST['yes']))
{
			$update_id=$i;
			
			$query1="DELETE FROM `data2`.`users`  WHERE `users`.`u_id`='$update_id'";
			$run1=mysqli_query($con,$query1);
			if($run1)
				{
					session_destroy();
					echo "<script>alert('Your Account has been Deleted Good Byee..!!!')</script>";
					echo "<script>window.open('index.php','_self')</script>";
				}
			
		

}

if(isset($_REQUEST['no']))
{
	echo "<script>window.open('profile.php?user','_self')</script>";			
		

}

?>			
