<?php
	include("../admin/config.php");
	session_start();
	$passcuu = $_POST['txtpass'];
	$passnew= $_POST['txtnew'];
	$passxn = $_POST['txtxn'];
	$passofid= $_SESSION['current_user']['PASSWORD'];
	$id = $_SESSION['current_user']['ID'];
	if($_POST['txtpass']=="" || $_POST['txtnew']=="" || $_POST['txtxn']=="" )
	{
		echo "Vui lòng nhập đầy đủ thông tin !";
	}
	else{
		if("$passcuu" != "$passofid")
		{
			echo "Mật khẩu không đúng !";
		}else
			if("$passnew" != "$passxn")
			{
				echo "2 Mật khẩu không trùng nhau !";
			}
			else
			{
				$sql= "UPDATE `khachhang` SET `PASSWORD`='$passnew' WHERE ID=$id";
				mysqli_query($conn,$sql);
				echo "Change password thành công ";
				$_SESSION['current_user']['PASSWORD']=$passnew;
				?> <script> setTimeout(function(){ location.reload(); }, 2000);</script> <?php
			}
	}
?>