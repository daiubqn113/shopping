<?php 
	require('config.php');

		$Id = $_POST['_id'];
		$Name = $_POST['_name'];
		
		$Add  = "insert into category(id, name) values ('$Id', '$Name')";
		$query_A = mysqli_query($conn, $Add);
		if($query_A){
			header('location:infor_menu.php');
		}else {
			echo "lỗi";
		}
 ?>