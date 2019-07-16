
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
            <li class="breadcrumb-item" aria-current="page">Category Sản phẩm</li>
         </ul></p></div>
          </div>
          
        </div>

        <a href="index.php?QL=loaisanpham&HD=add" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Thêm mới" style="float: right;margin-bottom: 1%;"><i class="fa fa-plus"></i> Thêm mới</a>
        <div class="search-box" id="load-box">  
          <form class="search-form" action="index.php?QL=sanpham&HD=search" method="post"> <input class="form-control timkiem" placeholder="Tìm kiếm tên loại sản phẩm" type="text" name="search"> 
           <button class="btn btn-link search-btn" type="submit"> <i class="fa fa-search"></i> </button>
           </a> 
          </form> 
          </div>
    </div>   
      <script type="text/javascript">
            $('.timkiem').keyup(function(){
              var txt = $('.timkiem').val(); 
              $.post('ajax/searchloaisanpham.php',{data: txt },function(data){
                $('.danhsach2').html(data);
              });
            })
        </script>    
    <?php 
      require_once("../config.php");
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
      $sql="select * FROM loaisanpham order by idsp DESC LIMIT $start, $limit ";
      $data = mysqli_query($conn,$sql);
      ?>
    
    <div class="container-fluid">
        <form action="QLSanpham/addsanpham.php" method="POST">
          <div class="table-reponsive">
        <table class="table table-striped table-bordered">
         
          <thead>
            <tr>
              <th>Tên Loại sản phẩm</th>
              <th>Hành động</th>
            </tr>
          </thead>
          <tbody class="danhsach2">
            <?php while($temp= mysqli_fetch_array($data)){
              ?>
            <tr>
              

              <td><?php echo $temp["Nameloaisp"] ?></td>
              <td><a href="index.php?QL=loaisanpham&HD=edit&idsp=<?php echo $temp["idsp"] ?>" class="btn btn-primary"><i class="fa fa-pencil"></i> <span class="hidden-xs">Sửa</span></a>&emsp;
              <a href="QL/QLloaisanpham/Handling/deletenew.php?idsp=<?php echo $temp["idsp"]?>" onclick="return confirm('Bạn có chắc chắn không?');" class="btn btn-danger" ><i class="fa fa-trash-o"></i> Xóa</span></a>&emsp;</td></tr>
           <?php }; ?>
          </tbody>

</table>
<ul class="pagination"> <?php
 if ($current_page > 1 && $total_page > 1){ 
   ?> <li class="page-item"><a class="page-link" href="index.php?QL=loaisanpham&page=<?php echo ($current_page-1) ?>">Previous</a></li> <?php } ?>
<?php 
    for ($i = 1; $i <= $total_page; $i++){
    // Nếu là trang hiện tại thì hiển thị thẻ span
    // ngược lại hiển thị thẻ a
    if ($i == $current_page){ 
        ?> <li class="page-item active"><a class="page-link" href="index.php?QL=loaisanpham&page=<?php echo $i ?>"><?php echo $i ?></a> </li> <?php
    }
    else{
      ?> <li class="page-item"><a class="page-link" href="index.php?QL=loaisanpham&page=<?php echo $i ?>"><?php echo $i ?></a> </li> <?php
    }

     ?>
    <?php 
} ?>
<?php 
if ($current_page < $total_page && $total_page > 1){ 
   ?> <li class="page-item"><a class="page-link" href="index.php?QL=loaisanpham&page=<?php echo ($current_page+1) ?>">Next</a></li> <?php } ?>
</ul></div></form></div>

