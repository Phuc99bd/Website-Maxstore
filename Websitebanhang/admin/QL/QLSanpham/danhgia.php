
  <style type="text/css">
    .table{
      font-size: 14px;
    }

  </style>
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div><p> <ul class="breadcrumb">
            <li class="breadcrumb-item active"><a href="#">Home</a></li>
            <li class="breadcrumb-item" aria-current="page">Đánh giá</li>
         </ul></p></div>
      </div>
          
        </div>
        
        <div class="search-box" id="load-box">  
          <form class="search-form" action="index.php?QL=sanpham&HD=search" method="post"> <input class="form-control timkiem" placeholder="Tìm kiếm tên sản phẩm" type="text" name="search" id="tim-kiem"> 
           <button class="btn btn-link search-btn" type="submit"> <i class="fa fa-search"></i> </button>
           </a> 
          </form> 
          </div>
    </div>   
         <script type="text/javascript">
            $('.timkiem').keyup(function(){
              var txt = $('.timkiem').val(); 
              $.post('ajax/searchdanhgia.php',{data: txt },function(data){
                $('.danhsach2').html(data);
              });
            })
        </script>   
    <?php
      require_once("../config.php");
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
      $sql="select danhgiasanpham.id,sanpham.MASP,sanpham.TENSP,khachhang.FULLLNAME,danhgiasanpham.Noidung,danhgiasanpham.idkh,danhgiasanpham.Ngaythem FROM danhgiasanpham,sanpham,khachhang where danhgiasanpham.MASP=sanpham.MASP and danhgiasanpham.idkh = khachhang.ID order by id DESC LIMIT $start,$limit";
      $data = mysqli_query($conn,$sql);
      ?>
    
    <div class="container-fluid">
        <form action="chinh-sua-thanh-vien" method="POST">
          <div class="table-reponsive">
        <table class="table table-striped table-bordered">
         
          <thead>
            <tr>
              <th>Sản phẩm</th>
              <th>Nội dụng đánh giá</th>
              <th>Tên khách hàng</th>
              <th>Ngày thêm</th>
              <th width="200">Hành động</th>
            </tr>
          </thead>
          <tbody class="danhsach2">
            <?php while($temp= mysqli_fetch_array($data)){
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
            <?php }; ?>
          </tbody>

</table>
<ul class="pagination"> <?php
 if ($current_page > 1 && $total_page > 1){ 
   ?> <li class="page-item"><a class="page-link" href="index.php?QL=thanhvien&page=<?php echo ($current_page-1) ?>">Previous</a></li> <?php } ?>
<?php 
    for ($i = 1; $i <= $total_page; $i++){
    // Nếu là trang hiện tại thì hiển thị thẻ span
    // ngược lại hiển thị thẻ a
    if ($i == $current_page){ 
        ?> <li class="page-item active"><a class="page-link" href="index.php?QL=thanhvien&page=<?php echo $i ?>"><?php echo $i ?></a> </li> <?php
    }
    else{
      ?> <li class="page-item"><a class="page-link" href="index.php?QL=thanhvien&page=<?php echo $i ?>"><?php echo $i ?></a> </li> <?php
    }

     ?>
    <?php 
} ?>
<?php 
if ($current_page < $total_page && $total_page > 1){ 
   ?> <li class="page-item"><a class="page-link" href="index.php?QL=thanhvien&page=<?php echo ($current_page+1) ?>">Next</a></li> <?php } ?>
</ul></div></form></div>