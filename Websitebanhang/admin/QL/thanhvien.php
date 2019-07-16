
  <style type="text/css">
    .table{
      font-size: 14px;
    }

  </style>
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div><p> <ul class="breadcrumb">
            <li class="breadcrumb-item active"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item" aria-current="page">Thành viên</li>
         </ul></p></div>
          </div>
          
        </div>
        <a href="index.php?QL=thanhvien&HD=add" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Thêm mới" style="float: right;margin-bottom: 1%;"><i class="fa fa-plus"></i> Thêm mới</a>
        <div class="search-box" id="load-box">  
          <form class="search-form" action="index.php?QL=sanpham&HD=search" method="post"> <input class="form-control timkiem" placeholder="Tìm kiếm Tên thành viên" type="text" name="search" id="tim-kiem"> 
           <button class="btn btn-link search-btn" type="submit"> <i class="fa fa-search"></i> </button>
           </a> 
          </form> 
          </div>
    </div>   
         <script type="text/javascript">
            $('.timkiem').keyup(function(){
              var txt = $('.timkiem').val(); 
              $.post('ajax/searchthanhvien.php',{data: txt },function(data){
                $('.danhsach2').html(data);
              });
            })
        </script>   
    <?php
      require_once("../config.php");
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
      $sql="select * FROM accout order by USERNAME DESC LIMIT $start, $limit ";
      $data = mysqli_query($conn,$sql);
      ?>
    
    <div class="container-fluid">
        <form action="chinh-sua-thanh-vien" method="POST">
          <div class="table-reponsive">
        <table class="table table-striped table-bordered">
         
          <thead>
            <tr>
              <th width="100">USERNAME</th>
              <th>PASSWORD</th>
              <th>FULLNAME</th>
              <th>ROLE</th>
              <th width="200">Hành động</th>
            </tr>
          </thead>
          <tbody class="danhsach2">
            <?php while($temp= mysqli_fetch_array($data)){
              ?>
            <tr>
              
              <td><?php echo $temp["USERNAME"]?></td>
              <td><?php echo $temp["PASSWORD"] ?></td>
              <td><?php echo $temp["FULLNAME"] ?></td>
              <td><?php echo $temp["ROLE"] ?></td>
              <td><a href="index.php?QL=thanhvien&HD=edit&user=<?php echo $temp["USERNAME"];?>" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Sửa"><i class="fa fa-pencil"></i> <span class="hidden-xs">Sửa</span></a>&emsp;
              <a href="QL/QLthanhvien/Handling/deletenew.php?user=<?php echo $temp["USERNAME"]?>" data-toggle="tooltip" title="" class="btn btn-danger" onclick="return confirm('Bạn có Chắc chắn không?');" data-original-title="Xóa"><i class="fa fa-trash-o"></i> Xóa</button>
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