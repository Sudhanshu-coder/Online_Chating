<div>
<h1 style="background:lightgray;width:100%;border-radius: 40px;text-align:center;font-weight: bold;font-family: time new roman;color:#600;font-size: 30px; ">Messages Show Area 	</h1>
		
</div>	
<?php


	include('include/db.php');
	@session_start();

	$query="SELECT * FROM `message` ORDER BY `m_id` DESC";
	$run=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($run))
	{
		$name=$row['name'];
		$msg=$row['msg'];
		$time=$row['date'];

?>
		
		<div id="chat" style="margin-top:0px;">
			<span style="color:red; font-weight: bold; font-size: 15px;"> <?php echo $name; ?> </span>
			<span style="color:black; font-weight: bold; font-size: 15px;">---------------------> </span>
			<span  style="color:black; font-weight: bold; font-size: 15px;"><span style="color: #FFF;">: </span> <?php echo $msg; ?> </span>	
			<span style="text-align: right; color:pink;font-size: 15px;"> <?php echo date($time);  ?> </span>
			
		</div>

<?php } ?>
