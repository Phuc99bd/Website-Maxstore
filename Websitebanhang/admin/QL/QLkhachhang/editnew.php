 	 <?php 
     require_once("config.php");
  ?>
 <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div> <p><ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Home</a></li>
    <li class="breadcrumb-item"><a href="index.php?QL=khachhang">Thành viên</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit khách hàng</li>
  	</ol></p>
     	</div>
          </div>
        </div>
 </div>
<?php 
    $user = $_GET["id"];
    $sql = "select * from khachhang where id='$user'";
    $data = mysqli_query($conn,$sql);
    $temp = mysqli_fetch_array($data);
?>
 <div class="container">
 	<div class="row">
 		<div class="col-md-12"><h3 style="padding: 5px 10px; color: black; font-weight: 200; border: 1px solid silver; border-top:2px solid silver; margin-bottom: 5%;"><i class="fa fa-pencil"></i>&emsp; Edit sản phẩm </h3></div>
 	<div class="col-md-6"> 
 		<form action="QL/QLkhachhang/Handling/editnew.php?id=<?php echo $user ?>" method="post">
 		<table class="table">
 		<tr>
        <td>
          <p class="btn btn-primary">Tên khách hàng</p>
        </td>
        <td>
          <input type="text" class="form-control" name="fullname" required="" value="<?php echo $temp["FULLLNAME"] ?>">
        </td>
        
      </tr>
      <tr>
        <td>
          <p class="btn btn-primary">Email</p>
        </td>
        <td>
          <input type="text" class="form-control" name="email"  required="" value="<?php echo $temp["EMAIL"] ?>">
        </td>
      </tr>
      <tr>
        <td>
          <p class="btn btn-primary">Số điện thoại</p>
        </td>
        <td>
          <input type="tel"  class="form-control" name="sdt" required=""
          value="<?php echo $temp["SDT"] ?>">
        </td>
      </tr>
          <tr>
        <td>
          <p class="btn btn-primary">IP</p>
        </td>
        <td>
           <input type="tel"  class="form-control" name="ip" required=""
          value="<?php echo $temp["IP"] ?>">
        </td>

      </tr>
      <tr>
        <td>
          <p class="btn btn-primary">Địa chỉ</p>
        </td>
        <td>
          <input type="tel"  class="form-control" name="diachi" required=""
          value="<?php echo $temp["Diachi"] ?>">
        </td>
      </tr>
 			<tr><td colspan="2">
 			<button type="submit" name="btn-submit" class="btn btn-danger" style="padding: 20px;">Update</button></td></tr>
 		</table>
 		
 	</form>
 </div>


 </div>
</div>