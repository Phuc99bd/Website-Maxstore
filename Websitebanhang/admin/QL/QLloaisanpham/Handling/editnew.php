<?php 
	include("../../../config.php");
	if(isset($_POST["btn-submit"])){
	$masp=$_GET["idsp"];
	$namesp = $_POST["tensp"];
	$sql = "Update loaisanpham set Nameloaisp ='$namesp' where idsp=$masp";
	mysqli_query($conn,$sql);
	?><script> window.location = "../../../index.php?QL=loaisanpham"; </script>
					<?php
	}
?>