<?php

$con=mysqli_connect('localhost','root','','data2');
if($con)
{
	echo"connected"; 
}
else
{
	echo "not connected";
}
?>