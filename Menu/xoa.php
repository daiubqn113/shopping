<?php 
	require('config.php');

		$xoa = "delete from category where id = ".$_GET["id"];
		$mysqli_X = mysqli_query($conn, $xoa);
		if($mysqli_X){
			header('location: infor_menu.php');
		}

	
 ?>