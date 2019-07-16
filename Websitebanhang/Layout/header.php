<?php session_start(); ?>
<?php
    switch ($_SERVER["SCRIPT_NAME"]) {
        case "/Websitebanhang/Gioithieu.php":
            $title = "About Us";
            break;
        case "/Websitebanhang/Sanpham.php":
            $title = "Sản phẩm";
            break;
         case "/Websitebanhang/Muahang.php":
            $title = "Thanh toán";
            break;
         case "/Websitebanhang/Tintuc.php":
            $title = "Tin Tức";
            break;
         case "/Websitebanhang/Giohang.php":
            $title = "Giỏ hàng";
            break;
         case "/Websitebanhang/Chitietsanpham.php":
            $title = "Chi tiết sản phẩm";
            break;
        default:
            $title = "Welcome to my homepage!";
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $title;?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="StyleND/index.css">
    <!-- owl -->
    <link rel="stylesheet" href="StyleND/owl.theme.default.min.css">
     <link rel="stylesheet" href="StyleND/owl.carousel.min.css">
     
    <!-- end owl -->
    <link rel="stylesheet" href="StyleND/Tintuc.css">
    <link rel='stylesheet' href='https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css'>
    
    
    <link src="http://example.com/foobar/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="style.css">
    
     <link rel="stylesheet" href="StyleND/chitietsanpham.css">
     <link rel="stylesheet" href="StyleND/sanpham.css">
    
    


</head>

    
<body>
    <div class="container-fluid">
        <div class="row" style="font-size: 12px; background: #F5F5F5;color:#FF9933;">
            <div class="col-md-12">
                <div class="dropdown" style="float: left;margin-left: 7%;">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tài khoản
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#"><i class="fa fa-heart"></i> Yêu thích (0)</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-share"></i> Thanh toán</a>  
                  </div>
                </div>
                <div class="dropdown" style="float: left; margin-left: 0.5%;">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tiền tệ
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#"><i class="fa fa-eur"></i> Euro</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-gbp"></i> Pound Sterling</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-usd"></i> US Dollar</a>  
                    <a class="dropdown-item" href="#">đ VND</a>   
                  </div>
                </div>
                <div class="Login/regest">
                    <?php if(isset($_SESSION['current_user']))
                    {
                        global $info;
                        $info = $_SESSION['current_user'];
                        ?>   <div class="dropdown" style="float: right; margin-right: 8%;">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $info['FULLLNAME']; ?>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="Modules/Logout.php">Logout</a>
                    <?php if(!empty($info['USERNAME'])){ ?>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Đổi mật khẩu</a> <?php } ?>
                    <a class="dropdown-item" href="Viewdonhang.php"> Xem lịch sử đơn hàng</a>  
                    <a class="dropdown-item" href="Thongtintaikhoan.php">Chỉnh sửa thông tin cá nhân</a>  
                   
                  </div>
                </div> <?php
                    }else{

                    ?>
                    <a href="Registration.php" style="" class="Dang-ki">Đăng ký </a>
                    <a href="Login.php" class="Dang-nhap">Đăng Nhập </a>
                <?php } ?>
                </div>
                
            </div>
        </div>
        <div class="row" style="margin-bottom: 1%;margin-top: 1%;">
            <div class="col-md-3"><a href="#"><img class="img-fluid" alt="Responsive image" src="Image/logo-maxstore-500px-01.png" id="LogoTC"></a>
            </div>
                <div class="col-md-6">
                <div class="search-fs">
                    <select class="custom-select custom-select-sm">
                      <option selected>Tất cả</option>
                      <option value="1">Bách hóa online</option>
                      <option value="2">&nbsp;&nbsp;Bánh kẹo độ vặt</option>
                      <option value="3">&nbsp;&nbsp;Hóa mỹ phẩm</option>
                    </select>
                
                    <input type="text" name="search" value="" placeholder="Tìm kiếm" class="input-group-field" autocomplete="off" ><a href="#"><i class="fa fa-search"></i></a></div>
            </div>
            <div class="col-md-3">
                <div class="dropdown">
                <div class="cart" >
                    
                    <div class="shopping-cart">
                        <i class="fa fa-cart-plus"></i>
                    </div>
                    <div class="product-gia">
                        <span><b><?php if(!isset($_SESSION['cart'])){ echo "0"; }else{  global $total;
                            $total=0;
                            $a=0;
                        foreach ($_SESSION['cart'] as $key => $value) {
                            $a = $a + $value['quantity'];
                            $total = $total + ($value['quantity']*$value['price']);
                             # code...
                         } echo $a; } ?> sản phẩm</b></span><br>
                        <span style="color: black;"><?php 
                        if(!isset($_SESSION['cart'])){
                            echo "0"; 
                        }else{
                            echo $total;
                        } ?> đ</span>
                    </div>
                    </div>
                
                <div class="dropdown-menu" >
                    <ul class="dropdown-item" style="overflow: auto; position: relative; width: 300px;">
                        <?php  if(isset($_SESSION['cart'])){
                            foreach($_SESSION['cart'] as $id => $value) {      
                                ?> <li class="list-item-group"><img src="admin/QL/Upload/<?php echo $value['Image'];?>" width="50" height="50">&emsp;<span style="color:red; font-weight: 500;"><?php echo $value['price'] ?>đ x <?php echo $value['quantity'];?> </span>
                                    <p style="font-size: 13px; width: 50%;"> <?php echo $value['Name']; ?></p>
                                </li><?php } ?>                                <li class="list-item-group"><p style="position: relative; width: 100%;">Thành tiền: <span style="float: right; color:red; font-weight: 500;"><?php echo $total ?>đ</span></p></li>
                                <li><p style="width: 100%;padding-top: 10px;"><button style="padding: 5px 20px; background: #FF5C00; border:none; color:white;" onclick="Giohang();">Giỏ hàng</button><button style="float:right;padding: 5px 20px; background: #FF5C00; border:none; color:white;" onclick="Thanhtoan();">Thanh Toán</button></p></li>
                                <?php 
                            }   else{  ?>
                        <li>Giỏ hàng bạn đang trống</li> <?php } ?>
                    </ul>
                </div>
                </div>
            </div>
    </div></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fix-nav">
        <div class="navbar-brand">
    <div class="dropbtn"> DANH MỤC 
    </div>
    <ul class="drop-btn-1">
        <Li class="list-group-item">
            <a href=""><i class="fa fa-tablet" ></i>&emsp;Bách Hóa Online</a>
            <ul class="drop-btn-2">
                <li class="list-p-2">
                <a href="">&emsp;Bánh kẹo,đồ ăn vặt</a>
                </li>
                <li class="list-p-2">
                <a href="">&emsp;Hóa mỹ phẩm</a>
                </li>
                <li class="list-p-2">
                <a href="">&emsp;Vali, balo , túi du lịch</a>
                </li>
                <li class="list-p-2">
                <a href="">&emsp;Đồ hộp, đồ khô</a>
                </li>
                <li class="list-p-2">
                <a href="">&emsp;Đồ uống giải khát</a>
                </li>
            </ul>
        </Li>
        <li class="list-group-item">
            <a href=""><i class="fa fa-street-view" ></i>&emsp;Chăm Sóc Sức Khỏe và Làm Đẹp</a>
            <ul class="drop-btn-2">
                <li class="list-p-2">
                <a href="">&emsp;Chăm sóc cá nhân</a>
                </li>
                <li class="list-p-2">
                <a href="">&emsp;Chăm sóc cơ thể</a>
                </li>
                <li class="list-p-2">
                <a href="">&emsp;Chăm sóc da mặt</a>
                </li>
                <li class="list-p-2">
                <a href="">&emsp;Trang điểm</a>
                </li>
            </ul>
        </li>
        <li class="list-group-item">
            <a href=""><i class="fa fa-dropbox"></i>&emsp;Thế Giới Cho Bé</a>
            <ul class="drop-btn-2">
                <li class="list-p-2">
                <a href="">&emsp;Tả & Dụng cụ vệ sinh</a>
                </li>
                <li class="list-p-2">
                <a href="">&emsp;Xe & Ghế</a>
                </li>
                <li class="list-p-2">
                <a href="">&emsp;Đồ chơi thú nhồi bông</a>
                </li>
                <li class="list-p-2">
                <a href="">&emsp;Đồ dùng uống sữa & ăn đạm</a>
                </li>
            </ul>
        </li>
        <li class="list-group-item">
            <a href=""><i class="fa fa-futbol-o"></i>&emsp;Thời Trang và Phụ Kiện</a>
            <ul class="drop-btn-2">
                <li class="list-p-2">
                <a href="">&emsp;Kính Mắt</a>
                </li>
                <li class="list-p-2">
                <a href="">&emsp;Thời trang Nam</a>
                </li>
                <li class="list-p-2">
                <a href="">&emsp;Thời trang Nữ</a>
                </li>
                <li class="list-p-2">
                <a href="">&emsp;Túi xách</a>
                </li>
                <li class="list-p-2">
                <a href="">&emsp;Đồng hồ</a>
                </li>
            </ul>
        </li>
        <li class="list-group-item">
            <a href=""><i class="fa fa-heart-o"></i>&emsp;Tin Học và Thiết Bị Số</a>
            <ul class="drop-btn-2">
                <li class="list-p-2">
                <a href="">&emsp;Máy tính và linh kiện máy tính</a>
                </li>
                <li class="list-p-2">
                <a href="">&emsp;Thiết bị âm thanh</a>
                </li>
                <li class="list-p-2">
                <a href="">&emsp;Thiết bị mạng và lưu trũ</a>
                </li>
                <li class="list-p-2">
                <a href="">&emsp;Thiết bị số</a>
                </li>
                <li class="list-p-2">
                <a href="">&emsp;Tivi - Thiết bị giải trí</a>
                </li>
                <li class="list-p-2">
                <a href="">&emsp;Điện thoại - Máy tính bảng</a>
                </li>
            </ul>
        </li>
        <li class="list-group-item">
            <ul class="drop-btn-2">
                <li class="list-p-2">
                <a href="">&emsp;Bếp & phòng ăn</a>
                </li>
                <li class="list-p-2">
                <a href="">&emsp;Trang trí nội thất & nhà cửa</a>
                </li>
                <li class="list-p-2">
                <a href="">&emsp;Tủ đựng</a>
                </li>
                <li class="list-p-2">
                <a href="">&emsp;Điện gia dụng</a>
                </li>
            </ul>
            <a href=""><i class="fa fa-car"></i>&emsp;Đồ Gia Dụng</a>
        </li>
    </ul>
  </div> 


  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span> Menu
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">TRANG CHỦ<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Gioithieu.php">GIỚI THIỆU</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Sanpham.php">SẢN PHẨM</a>
        <ul class="drop-btn-3">
            <li class="list-group-item">
                <a class="nav-link-p" href="">Trang điểm </a>
            </li>
            <li class="list-group-item" >
                <a class="nav-link-p"  href="">Chăm sóc cơ thể </a>
            </li>
            <li class="list-group-item">
                <a class="nav-link-p"  href="">Chăm sóc da mặt</a>
            </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Tintuc.php">TIN TỨC</a>
        <ul class="drop-btn-3">
            <li class="list-group-item">
                <a class="nav-link-p" href="Tintuc.php">Thời trang </a>
            </li>
            <li class="list-group-item" >
                <a class="nav-link-p"  href="Tintuc.php">Mỹ phẩm </a>
            </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Lienhe.php">LIÊN HỆ</a>
      </li>
      <li class="nav-item">
        <div class="search-fs2">
                    <input type="text" name="search" value="" placeholder="Tìm kiếm" class="input-group-field" autocomplete="off" ><a href="#"><i class="fa fa-search"></i></a></div>
      </li>
     
  </ul>
        
</div>
<div class="col-md-3 col-6"> 
    <div class="dropdown">
                <div class="cart2" >
                    
                    <div class="shopping-cart">
                        <i class="fa fa-cart-plus"></i>
                    </div>
                    <div class="product-gia">
                        <span><b><?php if(!isset($_SESSION['cart'])){ echo "0"; }else{  global $total;
                            $total=0;
                            $a=0;
                        foreach ($_SESSION['cart'] as $key => $value) {
                            $a = $a + $value['quantity'];
                            $total = $total + ($value['quantity']*$value['price']);
                             # code...
                         } echo $a; } ?> sản phẩm</b></span><br>
                        <span style="color: black;"><?php 
                        if(!isset($_SESSION['cart'])){
                            echo "0"; 
                        }else{
                            echo $total;
                        } ?> đ</span>
                    </div>
                    </div>
                
                <div class="dropdown-menu" >
                    <ul class="dropdown-item" style="overflow: auto; position: relative; width: 300px;">
                        <?php  if(isset($_SESSION['cart'])){
                            foreach($_SESSION['cart'] as $id => $value) {      
                                ?> <li class="list-item-group"><img src="admin/QL/Upload/<?php echo $value['Image'];?>" width="50" height="50">&emsp;<span style="color:red; font-weight: 500;"><?php echo $value['price'] ?>đ x <?php echo $value['quantity'];?> </span>
                                    <p style="font-size: 13px; width: 50%;"> <?php echo $value['Name']; ?></p>
                                </li><?php } ?>                                <li class="list-item-group"><p style="position: relative; width: 100%;">Thành tiền: <span style="float: right; color:red; font-weight: 500;"><?php echo $total ?>đ</span></p></li>
                                <li><p style="width: 100%;padding-top: 10px;"><button style="padding: 5px 20px; background: #FF5C00; border:none; color:white;" onclick="Giohang();">Giỏ hàng</button><button onclick="Thanhtoan();" class="tt-button">Thanh Toán</button></p></li>
                                <?php 
                            }   else{  ?>
                        <li>Giỏ hàng bạn đang trống</li> <?php } ?>
                    </ul>
                </div>
                </div>
</div>
            
</nav>
<script type="text/javascript">
    
</script>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document"> 
            
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color:red; font-weight: 500;text-align: center; width: 100%;"><i class="fa fa-wrench"></i> Đổi mật khẩu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                 
                  <div class="modal-body">
                    <div class="form-group">

                    <input type="password" name="" class="form-control" required="" placeholder="Mật khẩu cũ" id="passcu">
                    </div>
                    <div class="form-group">
                    <input type="password" name="" class="form-control" required="" placeholder="Mật khẩu mới" id="passnew">
                    </div>
                    <div class="form-group">
                    <input type="password" name="" class="form-control" required="" placeholder="Xác nhận mật khẩu" id="xnpassnew">
                    </div>
                    <div class="form-group">
                    <button type="button" name="" style="background: red; color:#fff; padding: 10px 40px; border:none;" class="showpass">Show pass</button>
                    </div>
                    <p style="color:red; width: 100%; font-size: 16px; font-weight: 500;" class="result-pass"></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary checksubmit">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
          
        </div>
    </div>
</div>