<?php include("Layout/header.php"); ?>
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
	if(isset($_SESSION['current_user'])){
	if(isset($_GET['MADH']))
	{
		include("admin/config.php");
		$id = $_SESSION['current_user']['ID'];
		$MADH = $_GET['MADH'];
		$sql = "select donhang.MADH,donhang.Ngaydathang,donhang.DIACHI,chitietdonhang.MASP,sanpham.TENSP,sanpham.GIA,chitietdonhang.COUNT,donhang.TrangthaiDH,donhang.GiatriDH from donhang,chitietdonhang,sanpham where donhang.MADH = chitietdonhang.MADH and chitietdonhang.MASP = sanpham.MASP and chitietdonhang.MADH = $MADH and donhang.idkh = $id";
		$data = mysqli_query($conn,$sql);
		$data1 = mysqli_query($conn,$sql);
		$temp = mysqli_fetch_array($data);
	}
?>
<div class="container mb-sanpham" style="margin: 0 6%;">
	<div class="row">
		<div class="col-md-12">
			<h4 style="margin-top: 20px;">Thông tin đơn hàng</h4>
			<form>
				<table class="table table-bordered" style="text-align: center;">
				<tbody>
					<tr>
						<td colspan="2">Chi tiết đơn hàng</td>
					</tr>
					<tr>
						<td>
							<p><b>ID Đơn hàng </b>#<?php echo $temp['MADH']; ?></p>
							<p><b>Ngày tạo </b><?php echo $temp['Ngaydathang']; ?></p>
						</td>
						<td><p>Địa chỉ giao hàng <p>
							<p><?php echo $temp['DIACHI']; ?> </p>
						</td>
					</tr>
				</tbody>
				</table>

				<table class="table table-bordered" style="text-align: center;">
				<thead>
					<th>Mã Sản Phẩm</th>
					<th>Tên Sản Phẩm</th>
					<th>Số lượng</th>
					<th>Giá</th>
					<th>Tổng số</th>

				</thead>
				<tbody>
					<?php while ($loadsp= mysqli_fetch_array($data1)) {
					?>
					<tr>
						<td><?php echo $loadsp['MASP'] ?></td>
						<td><?php echo $loadsp['TENSP'] ?></td>
						<td><?php echo $loadsp['COUNT'] ?></td>
						<td><?php echo $loadsp['GIA'] ?>đ</td>
						<td><?php echo $loadsp = $loadsp['COUNT']*$loadsp['GIA']; ?>đ</td>
					</tr>
				<?php } ?>
					<tr>
						<td colspan="3"></td>
						<td>Thành tiền</td>
						<td><?php echo $tt=$temp['GiatriDH']-35000;?>đ</td>
					</tr>
					<tr>
						<td colspan="3"></td>
						<td>Phí vận chuyển toàn quốc</td>
						<td>35000đ</td>
					</tr>
					<tr>
						<td colspan="3"></td>
						<td>Tổng tiền</td>
						<td><?php echo $temp['GiatriDH'] ?>đ</td>
					</tr>
				</tbody>
				</table>

				<h5 style="margin-top: 20px;">Lịch sử đơn hàng</h5>
				<table class="table table-bordered" style="text-align: center;">
				<thead>
					<th>Ngày tạo</th>
					<th>Trạng thái</th>
					<th>Ghi chú</th>

				</thead>
				<tbody>
					<tr>
						<td><?php echo $temp['Ngaydathang'] ?> </td>
						<td><?php if($temp['TrangthaiDH']==0){
							echo "Đang xử lý";
						}else{
							echo "Đang giao hàng";
						} ?></td>
						<td> </td>
					</tr>
				</tbody>
				</table>

				<p style="width: 100%;margin-top: 20px;"><a href="index.php" style="background: #FF5C00; padding: 10px 30px; color:#fff; float: right;">Tiếp tục</a></p>
		</div>
	</div>
</div>
<?php }else{?> <script> window.location = "index.php"; </script>  <?php } ?>
<?php include("Layout/footer.php"); ?>