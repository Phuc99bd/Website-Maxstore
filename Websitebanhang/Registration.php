<?php include("Layout/header.php"); ?>
<style type="text/css">
		.main-dangki{
	min-height: 20px;
    padding: 19px;
    margin-bottom: 20px;
    background-color: #f5f5f5;
    border: 1px solid #e3e3e3;
    border-radius: 4px;

	}
	.dangki-label{
		font-size: 18px;
		font-weight: 600;
		color: #FF5C00;
	}
</style>
<?php 
	include("Modules/CKhachhang.php");
	if(isset($_POST['submit-form']))
	{
		$hoten= $_POST['hoten'];
		$email =  $_POST['email'];
		$sdt =  $_POST['sdt'];
		$diachi =  $_POST['diachi'];
		$username =  $_POST['username'];
		$password =  $_POST['password'];
		$confim = $_POST['XNpass'];
		$DB_khachhang= new Khachhang();
		$DB_khachhang->Dangki($hoten,$email,$sdt,$diachi,$username,$password,$confim);	

	}
?>
 <div class="container mb-sanpham" style="margin: 0 6%;">
	<div class="row">
		<div class="col-md-12">
		<h3 style="text-align: center; margin-top: 20px;">Đăng kí tài khoản</h3>
		
		<div class="main-dangki">
			<p style="font-size: 16px;"> Nếu bạn đã đăng ký tài khoản với chúng tôi, vui lòng<a href="Login.php" style="color:red;"> đăng nhập </a>.</p>
				<?php if(isset($submit)){?>
					<div class="alert alert-primary" role="alert">
				  	<?php echo $submit; ?>
					</div> <?php } ?>
			<form  method="post" >
				<div class="form-group">
					<label class="dangki-label">Họ và tên: </label>
					<input type="text" placeholder="Họ và tên" class="form-control" required="" name="hoten" value="<?php if(isset($_POST['submit-form'])&& $check==1) echo $hoten; ?>">
				</div>
				<div class="form-group">
					<label class="dangki-label">Email: </label>
					<input type="email" placeholder="Email" class="form-control" required="" name="email" value="<?php if(isset($_POST['submit-form'])&& $check==1) echo $email; ?>"> 
				</div>
				<div class="form-group">
					<label class="dangki-label">Số điện thoại: </label>
					<input type="tel" placeholder="Số điện thoại" class="form-control" required="" name="sdt" value="<?php if(isset($_POST['submit-form'])&& $check==1) echo $sdt; ?>">
				</div>
				<div class="form-group">
					<label class="dangki-label">Địa chỉ: </label>
					<input type="text" placeholder="Địa chỉ" class="form-control" required="" name="diachi" value="<?php if(isset($_POST['submit-form'])&& $check==1) echo $diachi; ?>">
				</div>
				<div class="form-group">
					<label class="dangki-label">UserName: </label>
					<input type="text" placeholder="Ten tai khoan" class="form-control" required="" name="username" value="<?php if(isset($_POST['submit-form'])&& $check==1) echo $username; ?>">
					<?php if(isset($error['checkuser'])) {?>
					<div class="alert alert-danger" role="alert">
				  	<?php echo $error['checkuser']; ?>
					</div> <?php } ?>
				</div>
				<div class="form-group">
					<label class="dangki-label">Mật khẩu:</label>
					<input type="password" placeholder="Password" class="form-control" required="" name="password" value="<?php if(isset($_POST['submit-form'])&& $check==1) echo $password; ?>">
				</div>
				<div class="form-group">
					<label class="dangki-label">Xác nhận Mật khẩu: </label>
					<input type="password" placeholder="Comfirm Password" class="form-control" required="" name="XNpass" value="<?php if(isset($_POST['submit-form'])&& $check==1) echo $confim; ?>">
					<?php if(isset($error['checkpass'])) {?>
					<div class="alert alert-danger" role="alert">
				  	<?php echo $error['checkpass']; ?>
					</div> <?php } ?>
				</div>
				<p style="text-align: center;"><input type="checkbox" required="">&emsp;Tôi đã đọc và đồng ý với <b>Chính sách bảo mật</b> </p>
				<p style="text-align: center;"><button type="submit" style="padding: 10px 40px; border: none; background: #FF5C00;color:#fff;" name="submit-form"> <i class="fa fa-unlock" style="background: #FF5C00;"></i> TIẾP TỤC</button></p>
			</form>
		</div>
	</div>
	</div>

</div>
<?php include("Layout/footer.php"); ?>