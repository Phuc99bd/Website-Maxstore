<?php 
	include("../../../config.php");
	if(isset($_POST["btn-submit"])){
	$user=$_POST["user"];
	$pass = $_POST["pass"];
	$name = $_POST["name"];
	$role= $_POST["role"];;
	$sql = "Update accout set PASSWORD='$pass',FULLNAME='$name',ROLE='$role' where USERNAME='$user'";
	mysqli_query($conn,$sql);
	?><script> window.location = "../../../index.php?QL=thanhvien"; </script>
					<?php
	}
?>