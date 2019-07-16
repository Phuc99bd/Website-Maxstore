<?php
      require_once("../config.php");
       $search =isset($_POST["data"]) ? $_POST["data"] : '';
       $result = mysqli_query($conn, 'select count(USERNAME) as total from accout');
      $row = mysqli_fetch_array($result);
      $total_records = $row['total'];
       
      $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
      $limit = 7;
      $total_page = ceil($total_records / $limit);
      if ($current_page > $total_page){
          $current_page = $total_page;
      }
      else if ($current_page < 1){
          $current_page = 1;
      }
      $start = ($current_page - 1) * $limit;
      $sql="select * FROM accout where FULLNAME like '%$search%' order by USERNAME DESC LIMIT $start, $limit ";
      $data = mysqli_query($conn,$sql);
      if(mysqli_num_rows($data)!=0)
      {
      while($temp= mysqli_fetch_array($data)){
              ?>
            <tr>
              
              <td><?php echo $temp["USERNAME"]?></td>
              <td><?php echo $temp["PASSWORD"] ?></td>
              <td><?php echo $temp["FULLNAME"] ?></td>
              <td><?php echo $temp["ROLE"] ?></td>
              <td><a href="#" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Sửa"><i class="fa fa-pencil"></i> <span class="hidden-xs">Sửa</span></a>&emsp;
              <button type="button" data-toggle="tooltip" title="" class="btn btn-danger" onclick="confirm('Bạn có Chắc chắn?') ? $('#form-product').submit() : false;" data-original-title="Xóa"><i class="fa fa-trash-o"></i> Xóa</button>
           <?php }; }else{
             ?> <tr><td colspan="5">Không tìm thấy thành viên nào tương ứng</td></tr> <?php
           } ?>
