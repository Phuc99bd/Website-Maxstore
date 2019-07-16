 <?php
      require_once("../config.php");
       $search =isset($_POST["data"]) ? $_POST["data"] : '';
       $result = mysqli_query($conn, 'select count(id) as total from danhgiasanpham');
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
      $sql="select danhgiasanpham.id,sanpham.MASP,sanpham.TENSP,khachhang.FULLLNAME,danhgiasanpham.Noidung,danhgiasanpham.idkh,danhgiasanpham.Ngaythem FROM danhgiasanpham,sanpham,khachhang where danhgiasanpham.MASP=sanpham.MASP and danhgiasanpham.idkh = khachhang.ID and sanpham.TENSP like '%$search%' order by id DESC LIMIT $start,$limit";
      $data = mysqli_query($conn,$sql);
      if(mysqli_num_rows($data)!=0)
      {
       while($temp= mysqli_fetch_array($data)){
              ?>
            <tr>
              
              <td><?php echo $temp["TENSP"]?></td>
              <td><?php echo $temp["Noidung"] ?></td>
              <td><?php echo $temp["FULLLNAME"] ?></td>
              <td><?php echo $temp["Ngaythem"] ?></td>
              <td><button type="button" data-toggle="dropdown" class="btn btn-info dropdown-toggle"><i class="fa fa-lock"></i>
              </button><ul class="dropdown-menu pull-right">
                        <li><a class="dropdown-item" href="index.php?QL=khachhang" > Xem đánh giá default</a></li>
                                              </ul>
             <a href="index.php?QL=sanpham&HD=editdanhgia&id=<?php echo $temp["id"] ?>"  class="btn btn-primary"><i class="fa fa-pencil"></i> <span class="hidden-xs">Sửa</span></a>
           </td></tr>
            <?php } }else
            {
               ?> <tr><td colspan="5">Không tìm thấy tên sản phẩm tương ứng</td></tr> <?php
            } ?>      
