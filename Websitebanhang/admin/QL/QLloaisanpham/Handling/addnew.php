<?php 
	include("../../../config.php");
	if(isset($_POST["btn-submit"])){
	$namesp = $_POST["tensp"];
	$sql = "INSERT INTO `loaisanpham`(`Nameloaisp`) VALUES('$namesp')";
	mysqli_query($conn,$sql);
	?><script> window.location = "../../../index.php?QL=loaisanpham"; </script>
					<?php
	}
?>
