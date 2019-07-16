 <?php 
      require_once("../config.php");
      $search =isset($_POST["data"]) ? $_POST["data"] : '';
      $result = mysqli_query($conn, 'select count(idsp) as total from loaisanpham');
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
      $sql="select * FROM loaisanpham where Nameloaisp like '%$search%' order by idsp DESC LIMIT $start, $limit ";
      $data = mysqli_query($conn,$sql);
      ?>
      <?php 
      if(mysqli_num_rows($data)!=0){
        while($temp= mysqli_fetch_array($data)){
              ?>
            <tr>
              

              <td><?php echo $temp["Nameloaisp"] ?></td>
              <td><a href="index.php?QL=loaisanpham&HD=edit&idsp=<?php echo $temp["idsp"] ?>" class="btn btn-primary"><i class="fa fa-pencil"></i> <span class="hidden-xs">Sửa</span></a>&emsp;
              <a href="QL/QLloaisanpham/Handling/deletenew.php?idsp=<?php echo $temp["idsp"]?>" onclick="return confirm('Bạn có chắc chắn không?');" class="btn btn-danger" ><i class="fa fa-trash-o"></i> Xóa</span></a>&emsp;</td></tr>
           <?php };
         }else{
            ?> <tr><td colspan="2">Không tìm thấy loại sản phẩm nào phù hợp</td></tr> <?php
           }; ?> 
