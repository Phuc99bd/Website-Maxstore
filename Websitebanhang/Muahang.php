<?php include("Layout/header.php"); ?>
	<style type="text/css">
		.notification-mh{
		color: #3c763d;
    	background-color: #dff0d8;
    	border-color: #d6e9c6;
    	margin:0;
    	padding: 10px 10px;
    	width: 100%;
    	font-size: 16px;
    	position: relative;
    	display: block;

		}
		.notification-mh span{
			position: absolute;
			content:"X";
			right: 10px;
		}
		.td-red{
			padding-top: 17px !important;
			color: red;
			font-size: 15px;
			font-weight: 600;
			text-align: center;

		}
		.fied-table{
			border: 1px solid silver;
			font-size: 17px; padding: 10px 10px;
			width: 100%;
			background-color: #f5f5f5
		}
		.fied-table .fa-info{
			width: 20px;
			height: 20px;
			border-radius: 50%;
			background: black;
			color:#fff;
			text-align: center;
		}
		.table-byp{
			border:1px solid silver;
			width: 100%;
			height: 100%;
			position: relative;
		}
		.table-byp td{
			padding: 10px 10px;
		}
	</style>
<?php if(isset($_SESSION['cart'])){?>
	<?php if(isset($_SESSION['current_user'])){ ?>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
            <div style="margin-left: 6%;" class="dieu-huong"><p> <ul class="breadcrumb">
            <li class="breadcrumb-item active"><a href="#"><i class="fa fa-home"></i> &emsp;Trang chủ</a></li>
            <li class="breadcrumb-item" aria-current="page">Mua hàng</li>
         </ul></p></div>
	</div>
</div>
</div>
<?php 
	include("admin/config.php");
	if(isset($_GET['id']))
{
	$MASP = $_GET['id'];
	$sql = "select * from sanpham where MASP= $MASP";
	$source = mysqli_query($conn,$sql);
	$temp = mysqli_fetch_array($source);
}
?>
<div class="container-fluid">
	<div class="row">
		<?php if(isset($_GET['id'])){ ?>
		<p class="notification-mh"><i class="fa fa-exclamation"></i>&emsp; Thành công. Bạn đã thêm <?php echo $temp["TENSP"]; ?> vào giỏ hàng<span><a href="#" onclick="Xclose();">X</a></span></p> <?php } ?>
	</div>
</div>
<div class="container mb-sanpham" style="margin: 0 6%;">
	<form method="post">
	<div class="row">
		<div class="col-md-8">
		<form >
			<table class="table table-bordered">
				<fieldset class="fied-table"><i class="fa fa-info"></i> Địa chỉ nhận hàng</fieldset>
				<tbody>
					<tr>
						<td class="td-red">Tên đầy đủ</td>
						<td colspan="3"><input type="text" placeholder="Ví du: Nguyễn Văn A" required="" name="name" class="form-control" value="<?php if(!empty($info['FULLLNAME']))
						{
							echo $info["FULLLNAME"];
						} ?>"></td>
					</tr>
					<tr>
						<td class="td-red">Email:</td>
						<td><input type="email" placeholder="Ví du: phuccog@gmail.com" required="" class="form-control" name="email" value="<?php if(!empty($info['EMAIL'])){ echo $info['EMAIL'];} ?>"></td>
						<td class="td-red">Điện thoại:</td>
						<td><input type="tel" placeholder="Ví du: 01234567890" name="sdt" required="" class="form-control" value="<?php if(!empty($info['SDT']))
						{
							echo $info["SDT"];
						} ?>"></td>
					</tr>
					<tr>
						<td class="td-red">Địa Chỉ Chi Tiết</td>
						<td colspan="3"><textarea class="form-control" rows="3" id="diachi" name="diachi" required=""><?php if(!empty($info['Diachi']))
						{
							echo $info["Diachi"];
						} ?></textarea></td>
					</tr>
					<tr><td class="td-red">Lời nhắn: </td>
						<td colspan="3"><textarea class="form-control" rows="3" id="comment" name="loinhan"></textarea></td>
					</tr>
				</tbody>
			</table>
		</form>
		</div>
		<div class="col-md-4">
			<div class="col-md-12">			<form>
				<table class="table-byp">
					<fieldset class="fied-table"><i class="fa fa-cart-arrow-down"></i>&emsp;Đơn hàng(<?php if(!isset($_SESSION['cart'])){ echo "0"; }else{  global $total;
                            $total=0;
                            $a=0;
                        foreach ($_SESSION['cart'] as $key => $value) {
                            $a = $a + $value['quantity'];
                            $total = $total + ($value['quantity']*$value['price']);
                             # code...
                         } echo $a; } ?> sản phẩm)</fieldset>
						<tbody>
							<?php foreach($_SESSION['cart'] as $key => $value){ ?>
							<tr>
								<td>
									<img src="admin/QL/Upload/<?php echo $value['Image'];?>" class="img-fluid" width="100" height="100">
								</td>
								<td>
									<?php echo $value["Name"];?>
								</td>
								<td>
									<?php echo $value["price"]; ?><br>
									x <?php echo $value["quantity"];?> <br>
									<?php $toprice = $value["price"] * $value["quantity"]; echo $toprice; ?>
								</td>
								
							</tr><?php } ?>
						</tbody>
				</table>
			</form>
		</div>
		<div class="col-md-12">
			<table class="table-byp">
				<fieldset class="fied-table" style="margin-top: 20px;"><i class="fa fa-truck"></i>&emsp;Vận Chuyển</fieldset>
				<tbody>
					<tr>
						<td>
						Phí giao hàng tận nơi</td>
					</tr>
					<tr>
						<td>
							<input type="radio" checked>&emsp;Phí vận chuyển Toàn Quốc - 35.000đ
						</td>
					</tr>

				</tbody>
			</table>
			</div>
			<div class="col-md-12">
				<table class="table table-bordered" style="margin-top: 20px;">
					<tbody>
						<tr>
							<td>
								Thành tiền
							</td>
							<td>
								<?php echo $total; ?>đ
							</td>
						</tr>
						<tr>
							<td>
								Phí vận chuyển toàn quốc
							</td>
							<td>
								35,000đ
							</td>
						</tr>
						<tr>
							<td>
								Tổng số
							</td>
							<td style="color:red;font-size: 16px; font-weight: 500;" name="total">
								<?php
									global $totalprice;
									$totalprice = $total + 35000;
									echo $totalprice;
								?>đ
							</td>
						</tr>
					</tbody>
				</table>
				<p style="width: 100%;"><a href="giohang.php"><i class="fa fa-reply-all"></i>&emsp;Quay lại giỏ hàng</a> <button type="submit" class="btn btn-danger" style="right: 20px; position: absolute;" name="dathang"> Đặt hàng</button></p>
			</div>
		</div>
</div> </form>
</div>
<?php
	if(isset($_POST['dathang']))
	{
		
		$id = $info['ID'];
		include("Modules/CSanpham.php");
		$dhs = new Sanpham();
		$dhs -> Dathang($_POST['name'],$_POST['email'],$_POST['sdt'],$_POST['diachi'],$_POST['loinhan'],$totalprice,$id);
		
	}
?>

<?php include("Layout/footer.php"); ?>

<?php }else{ ?> <script> window.location = "Login.php?checkinfo=1" </script><?php } }else {?> <script> window.location = "giohang.php" </script><?php } ?>