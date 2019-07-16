
	<?php
	include("../../../config.php");
	if(isset($_POST["btn-submit"])){
	$user = $_POST["user"];
	$check = "select USERNAME from accout where USERNAME='$user'";
	$data = mysqli_query($conn,$check);
	if(mysqli_num_rows($data)==0)
	{
	$pass = $_POST["pass"];
	$name= $_POST["name"];
	$role=$_POST["role"];
	$sql = "INSERT INTO `accout`(`USERNAME`, `PASSWORD`, `FULLNAME`, `ROLE`) VALUES('$user','$pass','$name','$role')";
	mysqli_query($conn,$sql);
	?><script> window.location = "../../../index.php?QL=thanhvien"; </script>
					<?php
	}
	else{
		?><script> window.location = "../../../index.php?QL=thanhvien&HD=add&check=1"; </script>
					<?php

	}
	}
?>
	