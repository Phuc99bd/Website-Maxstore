<?php include("Layout/header.php");?>
<style type="text/css">

</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
            <div style="margin-left: 6%;" class="dieu-huong"><p> <ul class="breadcrumb">
            <li class="breadcrumb-item active"><a href="#"><i class="fa fa-home"></i> &emsp;Trang chủ</a></li>
            <li class="breadcrumb-item" aria-current="page">Giỏ hàng</li>
         </ul></p></div>
	</div>
</div>
</div>
<div class="container mb-sanpham" style="margin: 0 6%;">
	<div class="row">
		<div class="col-md-12">
			<h4 style="margin-bottom: 20px;">Giỏ hàng</h4>
			<table class="table table-bordered" style="text-align: center;">
				<thead>
					<th>Ảnh</th>
					<th>Sản phẩm</th>
					<th>Đơn giá</th>
					<th>Số lượng</th>
					<th>Tổng</th>
					<th>Xóa</th>
				</thead>
				<form method="post">
				<tbody>
					<?php 

						if(!isset($_SESSION['cart'])){ ?><tr><td colspan="6">Giỏ hàng của bạn đang trống</td></tr> <?php }else{
							foreach ($_SESSION['cart'] as $key => $value) { 
						
                        
						
					?>
					<tr>
						<td>
							<img src="admin/QL/Upload/<?php echo $value["Image"] ?>" class="img-fluid" width="100" height="100">
						</td>
						<td>
							<?php echo $value["Name"]; ?>
						</td>
						<td>
							<?php echo $value["price"]; ?>
						</td>
					
						<td>
							<input type="text" name="sl_<?php echo $key ?>" value="<?php echo $value["quantity"] ?>">
							
							<button type="submit" style="color: white;background:#FF5C00;border:none; " name="editsl"><i class="fa fa-refresh" style="background:#FF5C00;"></i></button>
						</td>
						<td>
							<?php $toprice = $value["price"]*$value["quantity"]; echo $toprice; ?>đ
						</td>
						<td>
							<a style="color: white;background:#FF5C00;border:none; padding: 5px 20px;" href="Modules/unsetsp.php?key=<?php echo $key ?>"><i class="fa fa-times" style="background:#FF5C00;"></i></a>
						</td>
					</tr>
				<?php } }?>
				</tbody>
				</form>
			</table>
			<?php 
				if(isset($_POST['editsl']))
				{
					include("Modules/CSanpham.php");
					$db = new Sanpham();
					$db ->editsoluong();
				}
			?>

			
				<table class="table table-bordered" style="width: 40%;float: right;">
					<tbody>
						<tr>
							<td>Thành tiền:</td>
							<td><?php if(isset($_SESSION['cart'])){ echo $total; }else{ echo "0"; } ?>đ</td>
						</tr>
						<tr>
							<td>Phí vận chuyển Toàn Quốc</td>
							<td>35,000đ</td>
						</tr>
						<tr>
							<td>Tổng số:</td>
							<td><?php if(isset($_SESSION['cart'])){
								$Sumtotal= $total + 35000;
								echo $Sumtotal;
							}else{
								echo "35000";
							}  ?> đ
						</td>
						</tr>
					</tbody>
				</table>
			
		</div>
		<div class="col-md-12">
			<p style="width: 100%"><button type="button" style="padding: 10px 10px; background:#FF5C00; border:none; border-radius: 40px;"><a href="Sanpham.php" style="color: white;">Tiếp tuc Mua hàng</a></button>
				<button style="right: 0px; position: absolute;
				padding: 10px 10px;border-radius: 40px; border:none; background:#FF5C00; "><a href="Muahang.php" style="color:white;">Tiến hành Thanh toán</a></button>
			</p>
		</div>
	</div>
</div>


<?php include("Layout/footer.php")?>