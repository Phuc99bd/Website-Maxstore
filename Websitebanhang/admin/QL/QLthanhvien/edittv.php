 	 <?php 
     require_once("config.php");
  ?>
 <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div> <p><ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Home</a></li>
    <li class="breadcrumb-item"><a href="index.php?QL=thanhvien">Thành viên</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit thành viên</li>
  	</ol></p>
     	</div>
          </div>
        </div>
 </div>
<?php 
    $user = $_GET["user"];
    $sql = "select * from accout where USERNAME='$user'";
    $data = mysqli_query($conn,$sql);
    $temp = mysqli_fetch_array($data);
?>
 <div class="container">
 	<div class="row">
 		<div class="col-md-12"><h3 style="padding: 5px 10px; color: black; font-weight: 200; border: 1px solid silver; border-top:2px solid silver; margin-bottom: 5%;"><i class="fa fa-pencil"></i>&emsp; Edit sản phẩm </h3></div>
 	<div class="col-md-6"> 
 		<form action="QL/QLthanhvien/Handling/editnew.php?user=<?php echo $user ?>" method="post">
 		<table class="table">
 		<tr>
        <td>
          <p class="btn btn-primary">USERNAME</p>
        </td>
        <td>
          <input type="text" class="form-control" name="user" required="" value="<?php echo $temp["USERNAME"] ?>" readonly>
        </td>
        
      </tr>
      <tr>
        <td>
          <p class="btn btn-primary">PASSWORD</p>
        </td>
        <td>
          <input type="text" class="form-control" name="pass"  required="" value="<?php echo $temp["PASSWORD"] ?>">
        </td>
      </tr>
      <tr>
        <td>
          <p class="btn btn-primary">FULLNAME</p>
        </td>
        <td>
          <input type="text"  class="form-control" name="name" required=""
          value="<?php echo $temp["FULLNAME"] ?>">
        </td>
      </tr>
          <tr>
        <td>
          <p class="btn btn-primary">ROLE</p>
        </td>
        <td>
          <select class="form-control" name="role">
            <?php 
              if($temp["ROLE"]=="admin")
              {
                ?><option value="admin">admin</option>
                <option value="user">user</option><?php
              }else{
                 ?><option value="user">user</option>
                <option value="admin">admin</option><?php
              }
            ?>
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