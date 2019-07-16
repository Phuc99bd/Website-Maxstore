<?php 
	include("../../../config.php");
	$id = $_GET["masp"];
	$sql="delete from sanpham where MASP=$id";
	mysqli_query($conn,$sql);
	?><script> window.location = "../../../index.php?QL=sanpham"; </script>
					<?php

?>