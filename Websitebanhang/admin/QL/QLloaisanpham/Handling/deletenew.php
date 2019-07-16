<?php 
	include("../../../config.php");
	$id = $_GET["idsp"];
	$sql="delete from loaisanpham where idsp=$id";
	mysqli_query($conn,$sql);
	?><script> window.location = "../../../index.php?QL=loaisanpham"; </script>
					<?php
?>