<?php 
	include("../../../config.php");
	if(isset($_POST["btn-submit"])){
		if(isset($_FILES["urlimg"])){

	 $file_name = $_FILES['urlimg']['name'];
	 $file_tmp = $_FILES['urlimg']['tmp_name'];
	 move_uploaded_file($file_tmp,"../../Upload/".$file_name);
	$namesp = $_POST["tensp"];
	$gia = $_POST["gia"];
	$soluong= $_POST["soluong"];
	$filename=$_POST["urlimg"];
	$loaisp= $_POST["loaisp"];
	$test= "select * from loaisanpham where Nameloaisp='$loaisp'";
	$temp = mysqli_query($conn,$test);
	$data = mysqli_fetch_array($temp);
	$id = $data["idsp"];
	$sql = "INSERT INTO `sanpham`(`TENSP`, `GIA`, `SOLUONG`, `Image`, `idsp`) VALUES('$namesp',$gia,$soluong,'$file_name',$id)";
	mysqli_query($conn,$sql);
	?><script> window.location = "../../../index.php?QL=sanpham"; </script>
					<?php
		}
	}
	else{
		echo "Đéo được rồi";
	}
?>
