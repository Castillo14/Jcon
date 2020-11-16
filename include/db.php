<?php
	$con = mysqli_connect("localhost","ycmsoms2019","ycmsoms2019","db_ycmsoms");

	if(mysqli_connect_errno()){

		echo "Failed to connect to MYSQL: " . mysqli_connect_error();
		
	}
?>