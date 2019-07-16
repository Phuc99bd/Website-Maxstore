<?php include("Layout/header.php"); ?>
<?php if(isset($_SESSION['current_user'])){ ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
            <div style="margin-left: 6%;" class="dieu-huong">
				<p> <ul class="breadcrumb">
            <li class="breadcrumb-item active"><a href="#"><i class="fa fa-home"></i> &emsp;Trang chủ</a></li>
            <li class="breadcrumb-item" aria-current="page">Lịch sử đơn hàng</li>
         </ul></p>
            </div>
         </div>
      </div>
 </div>
<?php 
	include("admin/config.php");
	$id = $info['ID'];
	$sql ="select donhang.MADH,donhang.TENKH,SUM(chitietdonhang.COUNT),donhang.GiatriDH,donhang.Ngaydathang,donhang.TrangthaiDH from donhang,chitietdonhang where idkh = $id and donhang.MADH =chitietdonhang.MADH GROUP BY MADH";
	$data = mysqli_query($conn,$sql);
?>
 <div class="container mb-sanpham" style="margin: 0 6%;">
	<div class="row">
		<div class="col-md-12">
			<h2 style="margin-top: 50px; font-family: Time-new-roman;">Lịch sử đơn hàng</h2>

			<form>
				<table class="table table-bordered" style="text-align: center;">
				<thead>
					<th>ID Đơn hàng</th>
					<th>Khách hàng</th>
					<th>Số Sản Phẩm</th>
					<th>Trạng thái</th>
					<th>Tổng số</th>
					<th>Ngày tạo</th>
					<th>Xem</th>
				</thead>
				<tbody>
					<?php while ($temp = mysqli_fetch_array($data)){  ?>
					<tr>
						<td>#<?php echo $temp['MADH']; ?></td>
						<td><?php echo $temp['TENKH']; ?></td>
						<td><?php echo $temp['SUM(chitietdonhang.COUNT)']; ?></td>
						<td> <?php if($temp['TrangthaiDH']==0){
							echo "Đang xử lý";
						}else{ echo "Đang giao hàng"; } ?></td>
						<td><?php echo $temp['GiatriDH']; ?>đ</td>
						<td><?php echo $temp['Ngaydathang']; ?></td>
						<td><a href="Chitietdonhang.php?MADH=<?php echo $temp['MADH']; ?>" style="padding: 5px 30px; background: #FF5C00; "><i class="fa fa-eye" style="background:  #FF6349;"></i></a></td>
					</tr>
						<?php } ?>
				</tbody>
			</table>
			</form>
			<p style="width: 100%;"> <a href="index.php" style="float: right; padding: 10px 40px; background: #FF5C00; color: white;">Tiếp tục</a></p>
		</div>
	</div>
</div>
<?php }else { ?> <script>window.location = "index.php" </script><?php } ?>

<?php include("Layout/footer.php"); ?>