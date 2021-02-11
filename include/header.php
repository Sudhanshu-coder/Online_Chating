
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
</style>

<div class="navbar navbar-inverse  navbar-fixed-top" style="border-radius: 0px;">
<div class="container-fluid">	
	<div class="navbar-header">
		<a href="index.php" class="navbar-brand"><span class="glyphicon glyphicon-globe"></span>Technicalhelpers</a>
		<button type="button" class="navbar-toggle" data-target="#mm" data-toggle="collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>

		</button>	
	</div>
	<div class="collapse navbar-collapse" id="mm">
		<ul class="nav navbar-nav nl">
			<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
			<?php
			if (isset($_SESSION['email']))
			{
				echo "<li><a href='profile.php?chatbox'><span class='glyphicon glyphicon-phone'></span>Chat</a></li>";
				
			}
			
			?>
			<li><a href="about.php"> About Us</a></li>
			<li><a href="https://5dfb1c1d29a65.site123.me/">Blogs</a></li>

		</ul>
		<ul class="nav navbar-nav navbar-right nr">
			<?php 
			if (isset($_SESSION['email']))
			{
				echo "<li><a href='profile.php?user'><span class='glyphicon glyphicon-user'></span>Profile</a></li>";
				echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Logout</a></li>";
				
			}
			else
			{
				echo "<li><a href='register.php'><span class='glyphicon glyphicon-user'></span>Register</a></li>";
				echo "<li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span>Login</a></li>";
				
			}

			?>

		</ul>
	</div>	
</div>
</div>
