<?php include("Layout/header.php"); ?>
<style type="text/css">
	.editlabel{
		font-size: 17px;

	}
</style>
<?php if(isset($_SESSION['current_user'])){ ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
            <div style="margin-left: 6%;" class="dieu-huong">
				<p> <ul class="breadcrumb">
            <li class="breadcrumb-item active"><a href="#"><i class="fa fa-home"></i> &emsp;Trang chủ</a></li>
            <li class="breadcrumb-item" aria-current="page">Chi tiết đơn hàng</li>
         </ul></p>
            </div>
         </div>
      </div>
 </div>
 <?php 
 	include("Modules/CKhachhang.php");
 	$DB_update = new Khachhang();
 	if(isset($_POST['submit'])){
 		$id = $info['ID'];
 		$fullname = $_POST['fullname'];
 		$email =$_POST['email'];
 		$sdt = $_POST['sdt'];
 		$diachi = $_POST['diachi'];
 		$DB_update -> updateTT($fullname,$email,$sdt,$diachi,$id);
 		$_SESSION['current_user']['FULLLNAME']= $fullname;
 		$_SESSION['current_user']['EMAIL']= $email;
 		$_SESSION['current_user']['SDT']= $sdt;
 		$_SESSION['current_user']['Diachi']= $diachi;
 		?> <script type="text/javascript">window.location = "index.php"</script> <?php
 	}
 ?>

 <div class="container mb-sanpham" style="margin: 0 6%;">
	<div class="row">
		<div class="col-md-12">
			<h3 style="margin-top: 30px;margin-bottom: 10px;">Thông tin tài khoản</h3>
			<form method="post">
			<div class="form-group">
				<label class="editlabel">Họ & tên</label>
				<input type="text" name="fullname" required="" class="form-control" value="<?php echo $info[
				'FULLLNAME']; ?>">
			</div>
			<div class="form-group">
				<label class="editlabel">Email</label>
				<input type="email" name="email" required="" class="form-control" value="<?php echo $info[
				'EMAIL']; ?>" <?php if(empty($_SESSION['current_user']['USERNAME'])){ echo "readonly"}; ?>>
			</div>
			<div class="form-group">
				<label class="editlabel">SĐT</label>
				<input type="tel" name="sdt" required="" class="form-control" value="<?php if(!empty($info['SDT'])){ echo $info[
				'SDT'];} ?>">
			</div>
			<div class="form-group">
				<label class="editlabel">Địa chỉ</label>
				<textarea class="form-control" rows="5" id="comment" required="" name="diachi"><?php if(!empty($info['Diachi'])){ echo $info[
				'Diachi'];} ?></textarea>
			</div>
			<p style="width: 100%; margin-top: 3%;"><a href="index.php" style="padding: 10px 30px; background: #FF5C00; color:#fff;">Quay lại</a><button type="submit" name="submit" style="padding: 10px 30px; background: #FF5C00; color:#fff; float: right; border:none;"><a >Update</a></button></p>
			</form>
		</div>
	</div>
</div>
<?php }else{ ?> <script>window.location="index.php";</script> <?php } ?> 

<?php include("Layout/footer.php"); ?>