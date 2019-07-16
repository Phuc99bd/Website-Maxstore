<?php
      require_once("../config.php");
       $search =isset($_POST["data"]) ? $_POST["data"] : '';
       $result = mysqli_query($conn, 'select count(id) as total from khachhang');
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
      $sql="select * FROM khachhang where FULLLNAME like '%$search%' order by id DESC LIMIT $start, $limit ";
      $data = mysqli_query($conn,$sql);
      if(mysqli_num_rows($data)!=0)
      {
       while($temp= mysqli_fetch_array($data)){
              ?>
            <tr>
              
              <td><?php echo $temp["FULLLNAME"]?></td>
              <td><?php echo $temp["EMAIL"] ?></td>
              <td><?php echo $temp["SDT"] ?></td>
              <td><?php echo $temp["IP"] ?></td>
              <td><button type="button" data-toggle="dropdown" class="btn btn-info dropdown-toggle"><i class="fa fa-lock"></i>
              </button><ul class="dropdown-menu pull-right">
                        <li><a class="dropdown-item" href="index.php?QL=khachhang" > Đăng nhập Default</a></li>
                                              </ul>
             <a href="index.php?QL=khachhang&HD=edit&id=<?php echo $temp["ID"];?>"  class="btn btn-primary"><i class="fa fa-pencil"></i> <span class="hidden-xs">Sửa</span></a>
           </td></tr>
            <?php }}
            else{
               ?> <tr><td colspan="5">Không tìm thấy khách hàng nào tương ứng</td></tr> <?php
            }


            ; ?>      
