<?php 
		class Khachhang{
		function updateTT($hoten,$email,$sdt,$diachi,$idkh)
		{
			include("admin/config.php");
			$sql = "UPDATE `khachhang` SET `FULLLNAME`='$hoten',`EMAIL`='$email',`SDT`='$sdt',`Diachi`='$diachi' WHERE ID = $idkh";
			global $complete;
			$complete = "Update thành công. Trang sẽ refesh sau 2 giây ";
			mysqli_query($conn,$sql);
		}
		function Dangki($hoten,$email,$sdt,$diachi,$username,$password,$confim)
		{
			include("admin/config.php");
			global $error;
		
			$error = array();
			$sql2= "select USERNAME from khachhang where USERNAME= '$username'";
			$data = mysqli_query($conn,$sql2);
			global $check;
			$check=0;
			if(mysqli_num_rows($data) !=0)
			{
				$error['checkuser']="Username đã tồn tại";
				$check=1;
			}
			if("$password" != "$confim")
			{
				$error['checkpass'] = "Mật khẩu xác nhận không đúng với mật khẩu";
				$check=1;
			}
			if($check!=1){
				global $submit;
				$submit = "Add Success !";
				$sql = "insert into khachhang (`USERNAME`, `PASSWORD`, `FULLLNAME`, `EMAIL`, `SDT`, `Diachi`) values('$username','$password','$hoten','$email','$sdt','$diachi')";

				return mysqli_query($conn,$sql);
				}
			}
			function Login($Username,$password)
			{

				include("admin/config.php");
				$sql = "select * from khachhang where USERNAME='$Username' and PASSWORD ='$password'";
			
				$data = mysqli_query($conn,$sql);
				$count = mysqli_num_rows($data);
				if($count >0)
				{
					session_start();
					$ss = mysqli_fetch_array($data);
					$_SESSION["current_user"] = $ss;
					?><script> window.location = "index.php"; </script>
					<?php
				}
				else{
					global $error;
					$error = "Sai tài khoản hoặc mật khẩu";
				}
			}
		}
?>