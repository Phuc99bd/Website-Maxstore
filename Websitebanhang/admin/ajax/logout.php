<?php
	session_start();
	if(isset($_SESSION["fullname"])){
		unset($_SESSION["fullname"]);
		header("Location: ../Dangnhap.php");
	}
?>