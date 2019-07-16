 	<?php 
      include("config.php");
      $sql = "select * from loaisanpham";
      $data = mysqli_query($conn,$sql);
  ?>
 <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div> <p><ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Home</a></li>
    <li class="breadcrumb-item"><a href="index.php?QL=sanpham">Sản phẩm</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add product</li>
  	</ol></p>
     	</div>
          </div>
        </div>
 </div>
 <div class="container">
 	<div class="row">
 		<div class="col-md-12">
 		<h3 style="padding: 5px 10px; color: black; font-weight: 200; border: 1px solid silver; border-top:2px solid silver; margin-bottom: 5%;"><i class="fa fa-pencil"></i>&emsp; Thêm sản phẩm </h3></div>
 	<div class="col-md-6"> 
 		<form action="QL/QLsanpham/Handling/addnew.php" method="post" enctype="multipart/form-data"> 
 		<table class="table">
 			<tr>
 				<td>
 					<p class="btn btn-primary">Tên sản phẩm</p>
 				</td>
 				<td>
 					<input type="text" class="form-control" name="tensp" required="">
 				</td>
 				
 			</tr>
 			<tr>
 				<td>
 					<p class="btn btn-primary">Giá</p>
 				</td>
 				<td>
 					<input type="tel" class="form-control" name="gia"  pattern="[0-9]{1,}" required="">
 				</td>
 			</tr>
 			<tr>
 				<td>
 					<p class="btn btn-primary">Số lượng</p>
 				</td>
 				<td>
 					<input type="tel"  class="form-control" name="soluong" pattern="[0-9]{1,}" required="">
 				</td>
 			</tr>
 			<tr>
 				<td>
 					<p class="btn btn-primary">Tên File Image</p>
 				</td>
 				<td>
 					<input type="file" class="form-control" name="urlimg" required="">
 				</td>
 			</tr>
          <tr>
        <td>
          <p class="btn btn-primary">Tên loại</p>
        </td>
        <td>
          <select class="form-control" name="loaisp">
            <?php while($temp = mysqli_fetch_array($data)){ ?>
            <option value="<?php echo $temp["Nameloaisp"] ?>"><?php echo $temp["Nameloaisp"]?></option>
            <?php } ?>
        </select>
        </td>
      </tr>
 			<tr><td colspan="2">
 			<button type="submit" name="btn-submit" class="btn btn-danger" style="padding: 20px;">Create</button></td></tr>
 		</table>
 		
 	</form>
 </div>

</div>
 </div>