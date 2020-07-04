<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="bootstrap-3.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap-3.4.1-dist/css/style.css">
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container">
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="#">Home</a>
				</li>
				<li>
					<a href="Menu/infor_menu.php">Menu</a>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="active">
					<a href="#">Login</a>
				</li>
				<li>
					<a href="#">Logout</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container">
		<div id="carousel-id" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel-id" data-slide-to="0" class=""></li>
				<li data-target="#carousel-id" data-slide-to="1" class=""></li>
				<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item">
					<img src="img/banner.jpg">
					
				</div>
				<div class="item">
					<img src="img/banner.jpg">
				</div>
				<div class="item active">
					<img src="img/banner.jpg">
					
				</div>
			</div>
			<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
	</div>
	
	<script src="bootstrap-3.4.1-dist/js/jquery.min.js" type="text/javascript"></script>
	<script src="bootstrap-3.4.1-dist/js/bootstrap.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$('banner').carousel({
			interval:1000;
		});
	</script>
</body>
</html>