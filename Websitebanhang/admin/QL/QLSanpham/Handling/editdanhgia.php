<?php 
	include("../../../config.php");
	$id=$_GET["id"];
	if(isset($_POST["btn-submit"]))
    {
    	$nd=$_POST["noidung"];
    	$Ngaythem=$_POST["ngaythem"];
    	$sql= "update danhgiasanpham set Noidung='$nd',Ngaythem='$Ngaythem' where id = $id";
    	mysqli_query($conn,$sql);
    	?><script> window.location = "../../../index.php?QL=sanpham&HD=danhgia"; </script>
					<?php
	}
?>