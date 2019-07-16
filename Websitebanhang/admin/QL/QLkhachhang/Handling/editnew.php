<?php 
	include("../../../config.php");
	if(isset($_POST["btn-submit"])){
	$id =$_GET["id"];
	$fullname=$_POST["fullname"];
	$email = $_POST["email"];
	$sdt = $_POST["sdt"];
	$diachi = $_POST["diachi"];
	$sql = "Update khachhang set FULLLNAME='$fullname',EMAIL='$email',SDT='$sdt',Diachi='$diachi' where ID=$id";
	mysqli_query($conn,$sql);
	?><script> window.location = "../../../index.php?QL=khachhang"; </script>
					<?php
}
?>