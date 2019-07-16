<?php 
      require_once("../config.php"); 
      $search =isset($_POST["data"]) ? $_POST["data"] : '';
      $result = mysqli_query($conn, "select count(MASP) as total from sanpham where TENSP like '%$search%' ");
      $row = mysqli_fetch_array($result);
      $total_records = $row['total'];

      $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
      $limit = 5;
      $total_page = ceil($total_records / $limit);
      if ($current_page > $total_page){
          $current_page = $total_page;
      }
      else if ($current_page < 1){
          $current_page = 1;
      }
      $start = ($current_page - 1) * $limit;
      $sql="select * FROM sanpham where TENSP like '%$search%' order by MASP DESC LIMIT $start, $limit ";
      $data = mysqli_query($conn,$sql);
      if(!empty($data))
      {
     	 while($temp= mysqli_fetch_array($data)){
              ?>
            <tr>
              <td><img src="QL/Upload/<?php echo $temp["Image"] ?>"></td>
              <td><?php echo $temp["TENSP"] ?></td>
              <td><?php echo $temp["GIA"] ?></td>
              <td><?php echo $temp["SOLUONG"] ?></td>
              <td><a href="index.php?QL=sanpham&HD=edit&MASP=<?php echo $temp["MASP"] ?>" class="btn btn-primary"><i class="fa fa-pencil"></i> <span class="hidden-xs">Sửa</span></a>&emsp;
              <a href="QL/QLSanpham/Handling/deletenew.php?masp=<?php echo $temp["MASP"]?>" onclick="return confirm('Bạn có chắc chắn không?');" class="btn btn-danger" ><i class="fa fa-trash-o"></i> Xóa</span></a>&emsp;</td></tr>
           <?php }; ?>
		<?php }else{
			?> <tr><td colspan="5">Không tìm thấy sản phẩm nào phù hợp</td></tr> <?php
		} ?>
