<?php include("Layout/header.php"); ?>
<div class="container-fluid">
    <div class="row">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="Image/slide-img-1920x510.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Image/slide-img2-1920x510.jpg" alt="Second slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>

<div class="container" style="margin-top: 2%;">
		<div class="row" style="border:0.2px solid silver;">
			<div class="col-md-3">
				<div class="service-th">
					<i class="fa fa-truck"></i>
					<div class="text">
                       <h5 class="hidden-xs">MIỄN PHÍ GIAO HÀNG</h5>
                       <p class="chinh_sach">Miễn phí giao hàng toàn quốc<p>
                     </div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="service-th">
					<i class="fa fa-money"></i>
					<div class="text">
                       <h5 class="hidden-xs">GIÁ TỐT NHẤT</h5>
                       <p class="chinh_sach">Cam Kết Giá Tốt Nhất<p>
                     </div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="service-th">
					<i class="fa fa-smile-o"></i>
					<div class="text">
                       <h5 class="hidden-xs">NHẤP CHUỘT & LỰA CHỌN</h5>
                       <p class="chinh_sach">Khám Phá Kho Sản Phẩm<p>
                     </div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="service-th2">
					<i class="fa fa-comments"></i>
					<div class="text">
                       <h5 class="hidden-xs">GIẢM GIÁ</h5>
                       <p class="chinh_sach">Bùng Nổ Khuyến Mãi<p>
                     </div>
				</div>
			</div>
		</div>
	</div>
<!-- case 3 -->
  <div class="container" style="margin-top:20px;margin-bottom: 20px;">
    <div class="row deletepad">
      <div class="col-md-4" style="padding-left: 0 !important;">
        <a href="">
        <img class="img-fluid" src="Image/banner1-370x220.jpg"></a>
      </div>
      <div class="col-md-4">
          <a href="">
        <img class="img-fluid" src="Image/offer-banner-370x220.jpg"></a>
      </div>
      <div class="col-md-4" style="padding-right: 0 !important">
          <a href="">
         <img class="img-fluid" src="Image/offer-banner2-370x220.jpg"></a>
      </div>
    </div>
  </div>
<!-- end case -->

<!-- Chăm sóc sức khỏe -->
  <div class="container" >
    
    <div class="row ToCSSK">

      <div class="col-md-2" style="padding: 0;">
          <div class="new-title">
            <h2>CHĂM SÓC SỨC KHỎE VÀ LÀM ĐẸP</h2>
          </div>
          <ul class="list-group nav nav-tabs">
           <li class="list-group2 active"><a data-toggle="tab" href="#home" class="active">Chăm sóc sức khỏe và làm đẹp</a></li>
          <li class="list-group2"><a data-toggle="tab" href="#menu1">Chăm sóc cá nhân</a></li>
          <li class="list-group2"><a data-toggle="tab" href="#menu2">Chăm sóc cơ thể</a></li>
           <li class="list-group2"><a data-toggle="tab" href="#menu3">Chăm sóc da mặt</a></li>
            <li class="list-group2"><a data-toggle="tab" href="#menu4">Trang điểm</a></li>
            
        </ul>
      </div>
      <div class="col-md-10" style="padding: 0;">
        
        <div class="tab-content">

        <div id="home" class="tab-pane active">
            <?php $i=0; while($i!=5)
            { ?>
            <div class="Item-product">
             <div class="col-item wow rollIn" data-toggle="tooltip" data-placement="bottom" title="" data-wow-delay="0.5s" style="border:none;">
            
            
            <div class="col-img" style="padding: 20px 20px;">
              <a href=""> <img src="Upload-product/kem-tay-long-400x300 (1).jpg" class="img-fluid">
              <div class="backgroud-hover"></div></a>
            </div>
            <div class="col-nameG">
              <div class="col-item-nameG">
              <p style="color:black">Kem tẩy lông In Slower...</p>
              <p class="gia-col"> 65,000đ<span class="badge badge-danger"></p></div>
              <div class="hover-item"><button type="submit" class="item-mua"><a href="" style="color:#fff;">Mua ngay</a></button><a href="Chitietsanpham.php?MASP=<?php echo $temp["MASP"] ?>"><i class="fa fa-eye"></i></a></div>
            </div>
            
          </div>
          </div>
          <?php $i=$i+1; } ?>
  
          </div>
       
     
        <div id="menu1" class="tab-pane fade">
          <?php $i=0; while($i!=5)
            { ?>
            <div class="Item-product">
             <div class="col-item wow rollIn" data-toggle="tooltip" data-placement="bottom" title="" data-wow-delay="0.5s" style="border:none;">
            
            
            <div class="col-img" style="padding: 20px 20px;">
              <a href=""> <img src="Upload-product/kem-tay-long-400x300 (1).jpg" class="img-fluid">
              <div class="backgroud-hover"></div></a>
            </div>
            <div class="col-nameG">
              <div class="col-item-nameG">
              <p style="color:black">Kem tẩy lông In Slower...</p>
              <p class="gia-col"> 65,000đ<span class="badge badge-danger"></p></div>
              <div class="hover-item"><button type="submit" class="item-mua"><a href="" style="color:#fff;">Mua ngay</a></button><a href="Chitietsanpham.php?MASP=<?php echo $temp["MASP"] ?>"><i class="fa fa-eye"></i></a></div>
            </div>
            
          </div>
          </div>
          <?php $i=$i+1; } ?>
        </div>
        <div id="menu2" class="tab-pane fade">
          <?php $i=0; while($i!=5)
            { ?>
            <div class="Item-product">
             <div class="col-item wow " data-toggle="tooltip" data-placement="bottom" title="" style="border:none;">
            
            
            <div class="col-img" style="padding: 20px 20px;">
              <a href=""> <img src="Upload-product/kem-tay-long-400x300 (1).jpg" class="img-fluid">
              <div class="backgroud-hover"></div></a>
            </div>
            <div class="col-nameG">
              <div class="col-item-nameG">
              <p style="color:black">Kem tẩy lông In Slower...</p>
              <p class="gia-col"> 65,000đ<span class="badge badge-danger"></p></div>
              <div class="hover-item"><button type="submit" class="item-mua"><a href="" style="color:#fff;">Mua ngay</a></button><a href="Chitietsanpham.php?MASP=<?php echo $temp["MASP"] ?>"><i class="fa fa-eye"></i></a></div>
            </div>
            
          </div>
          </div>
          <?php $i=$i+1; } ?>
        </div>
      </div>
  </div>
  </div>
</div>
<!-- End CSSK -->


<!-- Cho bé -->
  <div class="container" style="margin-top: 50px;">
    
    <div class="row ToCSSK">

      <div class="col-md-2" style="padding: 0;">
          <div class="new-title">
            <h2>Cho Bé</h2>
          </div>
          <ul class="list-group nav nav-tabs">
           <li class="list-group2 active"><a data-toggle="tab" href="#home" class="active">Thế giới cho bé</a></li>
          <li class="list-group2"><a data-toggle="tab" href="#menu1">Tã & Dụng cụ vệ sinh</a></li>
          <li class="list-group2"><a data-toggle="tab" href="#menu2">Xe & Ghế</a></li>
           <li class="list-group2"><a data-toggle="tab" href="#menu3">Đồ chơi thú nhồi bông</a></li>
            <li class="list-group2"><a data-toggle="tab" href="#menu4">Đồ dùng uống sữa & ăn dặm</a></li>
            
        </ul>
      </div>
      <div class="col-md-10" style="padding: 0;">
        
        <div class="tab-content">

        <div id="home" class="tab-pane active">
            <?php $i=0; while($i!=5)
            { ?>
            <div class="Item-product">
             <div class="col-item wow rollIn" data-toggle="tooltip" data-placement="bottom" title="" data-wow-delay="0.5s" style="border:none;">
            
            
            <div class="col-img" style="padding: 20px 20px;">
              <a href=""> <img src="Upload-product/1a-500x515 (2)-228x228.jpg" class="img-fluid">
              <div class="backgroud-hover"></div></a>
            </div>
            <div class="col-nameG">
              <div class="col-item-nameG">
              <p style="color:black">Gấu nhồi bông</p>
              <p class="gia-col"> 65,000đ<span class="badge badge-danger"></p></div>
              <div class="hover-item"><button type="submit" class="item-mua"><a href="" style="color:#fff;">Mua ngay</a></button><a href="Chitietsanpham.php?MASP=<?php echo $temp["MASP"] ?>"><i class="fa fa-eye"></i></a></div>
            </div>
            
          </div>
          </div>
          <?php $i=$i+1; } ?>
  
          </div>
       
     
        <div id="menu1" class="tab-pane fade">
          
        </div>
        <div id="menu2" class="tab-pane fade">
         
        </div>
      </div>
  </div>
  </div>
</div>

<!-- End bé  -->

<!-- Công nghệ -->
  <div class="container" style="margin-top: 50px;">
    
    <div class="row ToCSSK">

      <div class="col-md-2" style="padding: 0;">
          <div class="new-title">
            <h2>Công Nghệ</h2>
          </div>
          <ul class="list-group nav nav-tabs">
           <li class="list-group2 active"><a data-toggle="tab" href="#home" class="active">Tin học và Thiết bị số</a></li>
          <li class="list-group2"><a data-toggle="tab" href="#menu1">Máy tính và linh kiện máy tính</a></li>
          <li class="list-group2"><a data-toggle="tab" href="#menu2">Thiết bị âm thanh</a></li>
           <li class="list-group2"><a data-toggle="tab" href="#menu3">Thiết bị mạng và Lưu trữ</a></li>
            <li class="list-group2"><a data-toggle="tab" href="#menu4">Thiết bị số</a></li>
             <li class="list-group2"><a data-toggle="tab" href="#menu4">Tivi - Thiết bị giải trí</a></li>
            
             <li class="list-group2"><a data-toggle="tab" href="#menu4">Điện thoại - Máy tính bảng</a></li>
            
            
        </ul>
      </div>
      <div class="col-md-10" style="padding: 0;">
        
        <div class="tab-content">

        <div id="home" class="tab-pane active">
            <?php $i=0; while($i!=5)
            { ?>
            <div class="Item-product">
             <div class="col-item wow rollIn" data-toggle="tooltip" data-placement="bottom" title="" data-wow-delay="0.5s" style="border:none;">
            
            
            <div class="col-img" style="padding: 20px 20px;">
              <a href=""> <img src="Upload-product/hdmi-to-vga-adapter-1-228x228.jpg" class="img-fluid">
              <div class="backgroud-hover"></div></a>
            </div>
            <div class="col-nameG">
              <div class="col-item-nameG">
              <p style="color:black">Hdmi vga</p>
              <p class="gia-col"> 65,000đ<span class="badge badge-danger"></p></div>
              <div class="hover-item"><button type="submit" class="item-mua"><a href="" style="color:#fff;">Mua ngay</a></button><a href="Chitietsanpham.php?MASP=<?php echo $temp["MASP"] ?>"><i class="fa fa-eye"></i></a></div>
            </div>
            
          </div>
          </div>
          <?php $i=$i+1; } ?>
  
          </div>
       
     
        <div id="menu1" class="tab-pane fade">
          
        </div>
        <div id="menu2" class="tab-pane fade">
         
        </div>
      </div>
  </div>
  </div>
</div>
<!-- End Công nghệ -->

<!-- Thời trang -->
     <div class="container" style="margin-top: 50px;">
    
    <div class="row ToCSSK">

      <div class="col-md-2" style="padding: 0;">
          <div class="new-title">
            <h2>Thời trang</h2>
          </div>
          <ul class="list-group nav nav-tabs">
           <li class="list-group2 active"><a data-toggle="tab" href="#home" class="active">Thời trang và Phụ kiện</a></li>
          <li class="list-group2"><a data-toggle="tab" href="#menu1">Thời trang Nam</a></li>
          <li class="list-group2"><a data-toggle="tab" href="#menu2">Thời trang Nữ</a></li>
          
            
            
        </ul>
      </div>
      <div class="col-md-10" style="padding: 0;">
        
        <div class="tab-content">

        <div id="home" class="tab-pane active">
            <?php $i=0; while($i!=5)
            { ?>
            <div class="Item-product">
             <div class="col-item wow rollIn" data-toggle="tooltip" data-placement="bottom" title="" data-wow-delay="0.5s" style="border:none;">
            
            
            <div class="col-img" style="padding: 20px 20px;">
              <a href=""> <img src="Upload-product/6d-500x515-400x300.jpg" class="img-fluid">
              <div class="backgroud-hover"></div></a>
            </div>
            <div class="col-nameG">
              <div class="col-item-nameG">
              <p style="color:black">Aó Hoodie Nỉ Có Mũ nữ...</p>
              <p class="gia-col"> 65,000đ<span class="badge badge-danger"></p></div>
              <div class="hover-item"><button type="submit" class="item-mua"><a href="" style="color:#fff;">Mua ngay</a></button><a href="Chitietsanpham.php?MASP=<?php echo $temp["MASP"] ?>"><i class="fa fa-eye"></i></a></div>
            </div>
            
          </div>
          </div>
          <?php $i=$i+1; } ?>
  
          </div>
       
     
        <div id="menu1" class="tab-pane fade">
          
        </div>
        <div id="menu2" class="tab-pane fade">
         
        </div>
      </div>
  </div>
  </div>
</div>
<!-- End thời trang -->
<!-- Đồ gia dụng -->
<div class="container" style="margin-top: 50px;">
    
    <div class="row ToCSSK">

      <div class="col-md-2" style="padding: 0;">
          <div class="new-title">
            <h2>Đồ gia dụng</h2>
          </div>
          <ul class="list-group nav nav-tabs">
           <li class="list-group2 active"><a data-toggle="tab" href="#home" class="active">Bếp & Phòng ăn</a></li>
          <li class="list-group2"><a data-toggle="tab" href="#menu1">Trang trí nội thất & nhà cửa</a></li>
          <li class="list-group2"><a data-toggle="tab" href="#menu2">Tủ đựng</a></li>
          <li class="list-group2"><a data-toggle="tab" href="#menu2">Điện gia dụng</a></li>
          
            
            
        </ul>
      </div>
      <div class="col-md-10" style="padding: 0;">
        
        <div class="tab-content">

        <div id="home" class="tab-pane active">
            <?php $i=0; while($i!=5)
            { ?>
            <div class="Item-product">
             <div class="col-item wow rollIn" data-toggle="tooltip" data-placement="bottom" title="" data-wow-delay="0.5s" style="border:none;">
            
            
            <div class="col-img" style="padding: 20px 20px;">
              <a href=""> <img src="Upload-product/binh-u-chao-228x228.jpg" class="img-fluid">
              <div class="backgroud-hover"></div></a>
            </div>
            <div class="col-nameG">
              <div class="col-item-nameG">
              <p style="color:black">Bình nước</p>
              <p class="gia-col"> 65,000đ<span class="badge badge-danger"></p></div>
              <div class="hover-item"><button type="submit" class="item-mua"><a href="" style="color:#fff;">Mua ngay</a></button><a href="Chitietsanpham.php?MASP=<?php echo $temp["MASP"] ?>"><i class="fa fa-eye"></i></a></div>
            </div>
            
          </div>
          </div>
          <?php $i=$i+1; } ?>
  
          </div>
       
     
        <div id="menu1" class="tab-pane fade">
          
        </div>
        <div id="menu2" class="tab-pane fade">
         
        </div>
      </div>
  </div>
  </div>
</div>
  
<!-- End đồ gia dụng -->
<!-- Nổi bật nhất -->
      <?php 
        require_once("Modules/CSanpham.php"); 
        global $limit ;
        $limit= isset($_GET['data']) ? $_GET['data'] : 6;
        $DB_sanpham = new Sanpham();
        $DB_sanpham->LoadInfo($limit);

        ?>
    <div class="container" style="margin-top: 50px;">
      <div class="row">
        <div class="col-md-12" style="padding: 0;">
          <div class="new-noibat">
            <h2>NỔI BẬT NHẤT</h2>     
          </div>
          <div class="owl-carousel owl-theme">
           <?php while($temp=mysqli_fetch_array($sources)){
         ?>
            <div>   <div class="col-item wow rollIn" data-toggle="tooltip" data-placement="bottom" title="" data-wow-delay="0.5s" style="">
            
            
            <div class="col-img" style="padding: 20px 20px;">
              <a href=""> <img src="Upload-product/<?php echo $temp["Image2"] ?>" class="img-fluid">
              <div class="backgroud-hover"></div></a>
            </div>
            <div class="col-nameG">
              <div class="col-item-nameG">
              <p style="color:black"><?php echo $temp["TENSP"]; ?></p>
              <p class="gia-col"><?php echo $temp["GIA"];?>đ<span class="badge badge-danger"></p></div>
              <div class="hover-item"><button type="submit" class="item-mua"><a href="" style="color:#fff;">Mua ngay</a></button><a href="Chitietsanpham.php?MASP=<?php echo $temp["MASP"] ?>"><i class="fa fa-eye"></i></a></div>
            </div>
            
          </div> </div><?php  } ?>
            
          </div>
        </div>
      </div>
    </div>

<!--End nổi bật -->

<!-- Bán chạy nhất -->
   <?php 
        require_once("Modules/CSanpham.php"); 
        global $limit ;
        $limit= isset($_GET['data']) ? $_GET['data'] : 6;
        $DB_sanpham = new Sanpham();
        $DB_sanpham->LoadInfo($limit);

        ?>
    <div class="container" style="margin-top: 50px;">
      <div class="row">
        <div class="col-md-12" style="padding: 0;">
          <div class="new-noibat">
            <h2>BÁN CHẠY NHẤT</h2>     
          </div>
          <div class="owl-carousel owl-theme">
           <?php while($temp=mysqli_fetch_array($sources)){
         ?>
            <div>   <div class="col-item wow rollIn" data-toggle="tooltip" data-placement="bottom" title="" data-wow-delay="0.5s" style="">
            
            
            <div class="col-img" style="padding: 20px 20px;">
              <a href=""> <img src="Upload-product/<?php echo $temp["Image2"] ?>" class="img-fluid">
              <div class="backgroud-hover"></div></a>
            </div>
            <div class="col-nameG">
              <div class="col-item-nameG">
              <p style="color:black"><?php echo $temp["TENSP"]; ?></p>
              <p class="gia-col"><?php echo $temp["GIA"];?>đ<span class="badge badge-danger"></p></div>
              <div class="hover-item"><button type="submit" class="item-mua"><a href="" style="color:#fff;">Mua ngay</a></button><a href="Chitietsanpham.php?MASP=<?php echo $temp["MASP"] ?>"><i class="fa fa-eye"></i></a></div>
            </div>
            
          </div> </div><?php  } ?>
            
          </div>
        </div>
      </div>
    </div>
<!-- End -->
<?php include("Layout/footer.php"); ?>