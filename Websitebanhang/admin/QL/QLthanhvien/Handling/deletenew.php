<?php 
	include("../../../config.php");
	$id = $_GET["user"];
	$sql="delete from accout where USERNAME='$id'";
	mysqli_query($conn,$sql);
	?><script> window.location = "../../../index.php?QL=thanhvien"; </script>
					<?php

?>