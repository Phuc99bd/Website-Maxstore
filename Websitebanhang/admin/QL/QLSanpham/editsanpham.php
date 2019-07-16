 	 <?php 
     require_once("config.php");
  ?>
    <?php 
      $sql2 = "select * from loaisanpham";
      $data2 = mysqli_query($conn,$sql2);
  ?>
 <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div> <p><ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Home</a></li>
    <li class="breadcrumb-item"><a href="index.php?QL=sanpham">Sản phẩm</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit product</li>
  	</ol></p>
     	</div>
          </div>
        </div>
 </div>
<?php 
    $masp = $_GET["MASP"];
    $sql = "select * from sanpham,loaisanpham where MASP=$masp and sanpham.idsp = loaisanpham.idsp";
    $data = mysqli_query($conn,$sql);
    $temp = mysqli_fetch_array($data);
?>
 <div class="container">
 	<div class="row">
 		<div class="col-md-12"><h3 style="padding: 5px 10px; color: black; font-weight: 200; border: 1px solid silver; border-top:2px solid silver; margin-bottom: 5%;"><i class="fa fa-pencil"></i>&emsp; Edit sản phẩm </h3></div>
 	<div class="col-md-6"> 
 		<form action="QL/QLsanpham/Handling/editnew.php?MASP=<?php echo $masp ?>" method="post">
 		<table class="table">
 			<tr>
 				<td>
 					<p class="btn btn-primary">Tên sản phẩm</p>
 				</td>
 				<td>
 					<input type="text" class="form-control" name="tensp" required="" value="<?php echo $temp["TENSP"] ?>">
 				</td>
 				
 			</tr>
 			<tr>
 				<td>
 					<p class="btn btn-primary">Giá</p>
 				</td>
 				<td>
 					<input type="tel" class="form-control" name="gia"  pattern="[0-9]{1,}" required="" value="<?php echo $temp["GIA"] ?>">
 				</td>
 			</tr>
 			<tr>
 				<td>
 					<p class="btn btn-primary">Số lượng</p>
 				</td>
 				<td>
 					<input type="tel"  class="form-control" name="soluong" pattern="[0-9]{1,}" required="" value="<?php echo $temp["SOLUONG"] ?>">
 				</td>
 			</tr>
 			<tr>
 				<td>
 					<p class="btn btn-primary">Tên File Image</p>
 				</td>
 				<td>
 					<input type="text" class="form-control" name="urlimg" required="" value="<?php echo $temp["Image"] ?>">
 				</td>
 			</tr>
      <tr>
        <td>
          <p class="btn btn-primary">Tên loại</p>
        </td>
        <td>
          <select class="form-control" name="loaisp" value="<?php echo $temp["Nameloaisp"] ?>">
            <option value="<?php echo $temp["Nameloaisp"]?>"><?php echo $temp["Nameloaisp"] ?></option>
            <?php while($temp2 = mysqli_fetch_array($data2)){ if($temp["Nameloaisp"]!=$temp2["Nameloaisp"]) { ?>
            <option value="<?php echo $temp2["Nameloaisp"] ?>"><?php echo $temp2["Nameloaisp"]?></option>
            <?php }} ?>
        </select>
        </td>
      </tr>
 			<tr><td colspan="2">
 			<button type="submit" name="btn-submit" class="btn btn-danger" style="padding: 20px;">Update</button></td></tr>
 		</table>
 		
 	</form>
 </div>


 </div>
</div>