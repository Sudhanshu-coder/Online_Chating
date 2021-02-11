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

</style>

</head>
<body>
<!-----------Navbar Start------------------------------------------------------------------------------------------->

<?php
	include('include/header.php'); 

 ?>

<!--------------Navbar End----------------------------------------------------------------------------------->
<br><br><br>

<div class="container-fluid new" style="margin-top: -20px;">
	<div class="row" style="font-family: time new roman;">
		<center>
		<div class="carousel slide" data-ride="carousel" data-interval="3000" id="c">
			<div class="carousel-inner">

				<ol class="carousel-indicators">
				<li data-target="#c" data-slide-to="0" class="active" ></li>
				<li data-target="#c" data-slide-to="1" ></li>
				<li data-target="#c" data-slide-to="2" ></li>

				</ol>
		
				<div class="item active">
					<img src="image/b2.jpg" style="width: 100%; height: 50%;" />
					<div class="carousel-caption">
						<h2>Focus On One thing</h2>
					</div>
				</div>

				<div class="item">
					<img src="image/b5.jpg" style="width: 100%; height: 50%;" />
					<div class="carousel-caption">
						<h2>Importance of Time</h2>
					</div>
				</div>

				<div class="item">
					<img src="image/v1.jpg" style="width: 100%; height: 50%;" />
					<div class="carousel-caption">
						<h2>Learn From Books</h2>
					</div>
				</div>

				<a href="#c" class="carousel-control left" data-slide="prev"><span class="icon-prev"></span></a>
				
				<a href="#c" class="carousel-control right" data-slide="next"><span class="icon-next"></span></a>
				
			</div>

		</div>
		</center>
	</div>
	<div class="row" style="font-family: time new roman;background: lightgray;">
		<center>
		<h1 style="background: green; color:white;width: 95%"> You Can Learn Here So Much </h1>	
		
		</center>
	</div>
	<div class="row container-fluid"  style="margin-left:10px;margin-bottom:20px;margin-top:20px;"  >
	<center>
		<div class="col-md-4" style="padding-bottom:10px;"><img src="image/g1.gif" class="img img-responsive img-thumbnail" width="360px;" /></div>
		<div class="col-md-4" style="padding-bottom:10px;"><img src="image/g2.gif" class="img img-responsive img-thumbnail" width="360px;" /></div>
		<div class="col-md-4" style="padding-bottom:10px;"><img src="image/g4.gif" class="img img-responsive img-thumbnail" width="360px;" />
		</div>	
	</center>
				
	</div>
</div>
<!----Block 2nd Start----------------------->
<div class="container-fluid" >
<div class="row">
	<div style="margin-top: 50px;">
	<div class="col-sm-8" style="text-align: justify;">
		
	<h2>My Story</h2>
	<img src="image/p1.png" class="img img-responsive" style="width:220px;margin:10px;float: left;border: 2px; solid gray " />
	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
	Why do we use it?
	industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. 
	<br><br>
	Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
	It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

	</p>	
	</div>
	<div class="col-md-4">
		<div class="panel panel-primary">
			<div class="panel-heading">
				My Post
			</div>
			<div class="panel-body" style="text-align: justify;">
				<img src="image/p1.png" class="img img-responsive" style="width:100px;margin:8px;float: left;border: 2px solid gray; " />
				<p>Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum is that it packages and web page editors now.
				</p>
			</div>
			<div class="panel-body" style="text-align: justify;">
				<img src="image/p1.png" class="img img-responsive" style="width:100px;margin:8px;float: left;border: 2px solid gray; " />
				<p>Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum is that it packages and web page editors now.
				</p>
			</div>
			<div class="panel-body" style="text-align: justify;">
				<img src="image/p1.png" class="img img-responsive" style="width:100px;margin:8px;float: left;border: 2px solid gray; " />
				<p>Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum is that it packages and web page editors now.
				</p>
			</div>

		</div>
		
	</div>
	</div>
</div>
</div>
<!------3rd Block Start-------->
<div class="container">
	<div class="col-md-4">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2>Facebook</h2>
			</div>
			<div class="panel-body" style="text-align: justify;">
				<img src="image/fb1.png" class="img img-responsive img-thumbnails" style="width:100px;margin:8px;float: left; " />
				<p>Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum is that it packages and web page editors now.layout.Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum is that it packages and web page editors now. Lorem Ipsum is that it packages and web page editors now.
				</p>
			</div>
			
		</div>
		
	</div><div class="col-md-4">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h2>Instagram</h2>
			</div>
			<div class="panel-body" style="text-align: justify;">
				<img src="image/in.png" class="img img-responsive img-thumbnail" style="width:100px;margin:8px;float: left; " />
				<p>Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking Why do we Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum is that it packages and web page editors now.use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum is that it packages and web page editors now.at its layout. Lorem Ipsum is that it packages and web page editors now.
				</p>
			</div>
			
			
		</div>
		
	</div><div class="col-md-4">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h2>Youtube</h2>
			</div>
			<div class="panel-body" style="text-align: justify;">
				<img src="image/yt.png" class="img img-responsive img-thumbnail" style="width:100px;margin:8px;float: left; " />
				<p>Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum is that it packages and web page editors now. Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum is that it packages and web page editors now.Lorem Ipsum is that it packages and web page editors now.
				</p>
			</div>
		
		</div>
		
	</div>
</div>
<!--------4th Block--------->
<div class="container-fluid new">
	<div class="row" style="margin-top:10px;">
		<div class="col-sm-8" style="text-align: justify;">
			<h2>About Us</h2>
			<p>Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum is that it packages and web page editors now. Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum is that it package</p>
		</div>
		
		<div class="col-sm-4">
		<center>
			<img src="image/icon.jpeg" class="img img-responsive " style="width:100px; " />
			<br>
			<button class="btn btn-danger"><a href="https://5dfb1c1d29a65.site123.me/"><span style="color: white;"> Blogs </span></a></button>
			<br><br>
		</center>
		</div>
	</div>
</div>
<!--------------Footer Start---------->
<?php
	include('include/footer.php');
?>
</body>
</html>