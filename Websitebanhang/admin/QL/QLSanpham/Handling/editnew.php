<?php 
	include("../../../config.php");
	if(isset($_POST["btn-submit"])){
	$masp=$_GET["MASP"];
	$namesp = $_POST["tensp"];
	$gia = $_POST["gia"];
	$soluong= $_POST["soluong"];
	$filename=$_POST["urlimg"];
	$loaisp= $_POST["loaisp"];
	$test= "select * from loaisanpham where Nameloaisp='$loaisp'";
	$temp = mysqli_query($conn,$test);
	$data = mysqli_fetch_array($temp);
	$id = $data["idsp"];
	$sql = "Update sanpham set TENSP='$namesp',GIA=$gia,SOLUONG=$soluong,Image='$filename',idsp=$id where MASP=$masp";
	mysqli_query($conn,$sql);
	?><script> window.location = "../../../index.php?QL=sanpham"; </script>
					<?php
	}
?>