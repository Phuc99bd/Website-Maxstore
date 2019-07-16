 	 <?php 
     require_once("config.php");
  ?>
 <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div> <p><ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Home</a></li>
    <li class="breadcrumb-item"><a href="index.php?QL=sanpham&HD=danhgia">Đánh giá</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit đánh gia</li>
  	</ol></p>
     	</div>
          </div>
        </div>
 </div>
<?php 
    $id = $_GET["id"];
    $sql = "select danhgiasanpham.id,sanpham.MASP,sanpham.TENSP,khachhang.FULLLNAME,danhgiasanpham.Noidung,danhgiasanpham.idkh,danhgiasanpham.Ngaythem FROM danhgiasanpham,sanpham,khachhang where danhgiasanpham.MASP=sanpham.MASP and danhgiasanpham.idkh = khachhang.ID and danhgiasanpham.id =$id";
    $data = mysqli_query($conn,$sql);
    $temp = mysqli_fetch_array($data);
    if(isset($_POST["btn-submit"]))
    {
    	$nd=$_POST["noidung"];
    	$Ngaythem=$_POST["ngaythem"];
    	$sql= "update danhgiasanpham set Noidung='$nd',Ngaythem='$Ngaythem' where id = $id";
    	mysqli_query($conn,$sql);
      ?><script> window.location = "index.php?QL=sanpham&Hd=danhgia"; </script>
          <?php

    }
?>
 <div class="container">
 	<div class="row">
 		<div class="col-md-12"><h3 style="padding: 5px 10px; color: black; font-weight: 200; border: 1px solid silver; border-top:2px solid silver; margin-bottom: 5%;"><i class="fa fa-pencil"></i>&emsp; Edit sản phẩm </h3></div>
 	<div class="col-md-6"> 
 		<form action="QL/QLsanpham/Handling/editdanhgia.php?id=<?php echo $id ?>" method="post">
 		<table class="table">
 			<tr>
 				<td width="30%;">
 					<p class="btn btn-primary">Tên sản phẩm</p>
 				</td>
 				<td>
 					<input type="text" class="form-control" name="tensp" required="" value="<?php echo $temp["TENSP"] ?>" readonly>
 				</td>
 				
 			</tr>
 			<tr>
 				<td>
 					<p class="btn btn-primary">Nội dung</p>
 				</td>
 				<td>
 					<textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10" name="noidung"><?php echo $temp["Noidung"] ?></textarea>
 				</td>
 			</tr>
 			<tr>
 				<td>
 					<p class="btn btn-primary">Tên khách hàng</p>
 				</td>
 				<td>
 					<input type="text"  class="form-control" name="soluong" required="" value="<?php echo $temp["FULLLNAME"] ?>" readonly>
 				</td>
 			</tr>
 			<tr>
 				<td>
 					<p class="btn btn-primary">Ngày thêm</p>
 				</td>
 				<td>
 					<input type="date" class="form-control" name="ngaythem" required="" value="<?php echo $temp["Ngaythem"] ?>">
 				</td>
 			</tr>

 			<tr><td colspan="2">
 			<button type="submit" name="btn-submit" class="btn btn-danger" style="padding: 20px;">Update</button></td></tr>
 		</table>
 		
 	</form>
 </div>


 </div>
</div>