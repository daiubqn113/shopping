<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="../bootstrap-3.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../bootstrap-3.4.1-dist/css/style.css">

</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container">
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="../index.php">Home</a>
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
		<div class="row">
			<div class="col-md-4 col-lg-offset-4">
				<form action="xulythem.php" method="POST" class="form">		
					<div class="panel panel-primary ">
							<!-- Default panel contents -->
							<div class="panel-heading text-center">	Thêm sản phẩm </div>
							<div class="panel-body">
								<div class="form-group">
									<label for ='_id'>ID:</label>
									<input type="text" name="_id" id="_id" class="form-control" placeholder="Vui lòng nhập ID">
								</div>
								<div class="form-group">
									<label for ='_name'>Name:</label>
									<input type="text" name="_name" id="_name" class="form-control" placeholder="Vui lòng nhập tên danh mục">
								</div>
								<div class="form-group">
									<input type="submit" name="btn_them" class="btn-success" value="Thêm" />
								</div>
							</div>
						</div>
				</form>
			</div>
		</div>
	</div>


	<script src="../bootstrap-3.4.1-dist/js/jquery.min.js" type="text/javascript"></script>
	<script src="../bootstrap-3.4.1-dist/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>