<?php
	$servername = 'localhost';
	$database = 'websitebanhang';
	$pass = '';
	$taikhoan = 'root';
	$conn = mysqli_connect($servername,$taikhoan,$pass,$database) ;
	mysqli_query($conn,"SET NAMES 'UTF8'");
	if(!$conn){
		die("0 ket noi :" .mysqli_connect_error());
		exit();
	}
?>