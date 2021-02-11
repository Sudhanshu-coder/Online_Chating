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
			
}			

?>


<div id="container">
	<div id="chatbox">
		<div id="chat" class="pre-scrollable">
			
		</div>
		
	</div>
		<form action="" method="post">
			<textarea name="msg" placeholder="Enter Messages" class="form-control"></textarea><br/>
			<input type="submit" class="btn btn-success" name="submit"  value="Send" />

			
		</form>
		
		<?php
		if(isset($_POST['submit']))
		{
			
			$m=$_POST['msg'];


		$insert="INSERT INTO message (name,msg) VALUES('$n','$m')";
		echo "message sent";
		$run_insert=mysqli_query($con,$insert);
		if($run_insert)
		{
			echo"<embed loop='false' hidden='true' src='include/Fb.mp3' autoplay='true'>";
		}	

		}

		?>


</div>