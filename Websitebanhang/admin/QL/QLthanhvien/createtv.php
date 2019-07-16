 	<?php 
      include("config.php");
      $sql = "select * from accout";
      $data = mysqli_query($conn,$sql);
  ?>
 <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div> <p><ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Home</a></li>
    <li class="breadcrumb-item"><a href="index.php?QL=thanhvien">Thành viên</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create thành viên</li>
  	</ol></p>
     	</div>
          </div>
        </div>
 </div>
 <div class="container">
 	<div class="row">
 		<div class="col-md-12">
 		<h3 style="padding: 5px 10px; color: black; font-weight: 200; border: 1px solid silver; border-top:2px solid silver; margin-bottom: 5%;"><i class="fa fa-pencil"></i>&emsp; Thêm thành viên </h3></div>

 	<div class="col-md-6"> 
 		<form action="QL/QLthanhvien/Handling/createnew.php" method="post">
       <?php 
      if(isset($_GET["check"])){
        ?> <p class="btn btn-danger">Đã tồn tại Username này</p> <?php
      }else{}
    ?>
 		<table class="table">
 			<tr>
 				<td>
 					<p class="btn btn-primary">USERNAME</p>
 				</td>
 				<td>
 					<input type="text" class="form-control" name="user" required="">
 				</td>
 				
 			</tr>
 			<tr>
 				<td>
 					<p class="btn btn-primary">PASSWORD</p>
 				</td>
 				<td>
 					<input type="text" class="form-control" name="pass"  required="">
 				</td>
 			</tr>
 			<tr>
 				<td>
 					<p class="btn btn-primary">FULLNAME</p>
 				</td>
 				<td>
 					<input type="text"  class="form-control" name="name" required="">
 				</td>
 			</tr>
          <tr>
        <td>
          <p class="btn btn-primary">ROLE</p>
        </td>
        <td>
          <select class="form-control" name="role">
            <option value="admin">admin</option>
            <option value="admin">user</option>
        </select>
        </td>
      </tr>
 			<tr><td colspan="2">
 			<button type="submit" name="btn-submit" id="btn-submit" class="btn btn-danger" style="padding: 20px;">Create</button></td></tr>
 		</table>
 		
 	</form>
 </div>

</div>
 </div>