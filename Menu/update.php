<?php 
	require('config.php');

	if (isset($_GET['btn_sua'])) {
		$Id = $_GET['_id'];
		$Name = $_GET['_name'];

		$Edit = "update category set id = '$Id', name = '$Name' where id = '$Id' " or die("lỗi vc");
		$mysqli_E = mysqli_query($conn, $Edit);
		if($mysqli_E){
			header('location:infor_menu.php');
		}else{
			echo "lỗi";
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="../bootstrap-3.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../bootstrap-3.4.1-dist/css/style.css">

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
		<form action="update.php" method="GET">
			<div class="form-group">
				<label for ='_id'><p>ID:</p></label>
				<input type="text" name="_id" id="_id" placeholder="Vui lòng nhập ID">
			</div>
			<div class="form-group">
				<label for ='_name'><p>Name</p></label>
				<input type="text" name="_name" id="_name" placeholder="Vui lòng nhập tên danh mục">
			</div>
			<div class="form-group">
				<input type="submit" name="btn_sua" value="Sửa" />
			</div>		
		</form>
	</div>


	<script src="../bootstrap-3.4.1-dist/js/jquery.min.js" type="text/javascript"></script>
	<script src="../bootstrap-3.4.1-dist/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>