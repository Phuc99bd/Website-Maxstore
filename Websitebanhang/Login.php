<?php

include("Layout/header.php");include ("facebook_source.php");
?>

<style type="text/css">
	.Khachhang-new{
	min-height: 20px;
    padding: 19px;
    margin-bottom: 20px;
    background-color: #f5f5f5;
    border: 1px solid #e3e3e3;
    border-radius: 4px;

	}
	.bttn{
			font-size: 16px;
			margin-top: 20px;
			font-family: Time-new-Roman;
			color: #fff;
			padding: 8px 10px;
			position: relative;
			letter-spacing: 2px;
			background: #4267b2;
			border: 0;
			overflow: hidden;
			transition: all .5s;
	}
	.bttn:before{
				content: '';
				position: absolute;
				top: 2px;
				left: 2px;
				bottom: 2px;
				width: 50%;
				transition: all .5s;
				background: rgba(255,255,255,0.1);
			}
			.bttn:hover:before{
				margin-left: 50%;
				transition: all .5s;
				background: rgba(255,255,255,0.1);
			}
			.bttn span:nth-child(1){
				position: absolute;
				top: 0;
				left: 0;
				width: 100%;
				height: 2px;
				background: linear-gradient(to right, #0c002b,#ccc);
				animation: span1 2s linear infinite;
				animation-delay: 1s;
			}
			@keyframes span1{
				0%{
					transform:  translateX(-100%);
				}
				100%{
					transform:  translateX(100%);
				}
			}
			.bttn span:nth-child(2){
				position: absolute;
				top: 0;
				right: 0;
				width: 2px;
				height: 100%;
				background: linear-gradient(to bottom, #0c002b,#ccc);
				animation: span2 2s linear infinite;
			}
			@keyframes span2{
				0%{
					transform:  translateY(-100%);
				}
				100%{
					transform:  translateY(100%);
				}
			}
			.bttn span:nth-child(3){
				position: absolute;
				bottom: 0;
				left: 0;
				width: 100%;
				height: 2px;
				background: linear-gradient(to left, #0c002b,#ccc);
				animation: span3 2s linear infinite;
			}
			@keyframes span3{
				0%{
					transform:  translateX(100%);
				}
				100%{
					transform:  translateX(-100%);
				}
			}
			.bttn span:nth-child(4){
				position: absolute;
				top: 0;
				left: 0;
				width: 2px;
				height: 100%;
				background: linear-gradient(to top, #0c002b,#ccc);
				animation: span4 2s linear infinite;
				animation-delay: 1s;
			}
			@keyframes span4{
				0%{
					transform:  translateY(100%);
				}
				100%{
					transform:  translateY(-100%);
				}
			}
		.notification-mh{
		color: #fff;
    	background-color: red;
    	border-color: #d6e9c6;
    	margin:0;
    	padding: 10px 10px;
    	width: 100%;
    	font-size: 16px;
    	position: relative;
    	display: block;

		}
		.notification-mh span{
			position: absolute;
			content:"X";
			right: 10px;
		}
</style>
 <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
              <div style="margin-left: 6%;" class="dieu-huong"> <p><ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="">Home</a></li>
    <li class="breadcrumb-item"><a href="">Tài khoản</a></li>
    <li class="breadcrumb-item active" aria-current="page">Đăng nhập</li>
  	</ol></p>
     	</div>
          </div>
          <div class="col-md-12" style="margin:0;padding: 0;"><?php if(isset($_GET['checkinfo'])){ ?>
		<p class="notification-mh"><i class="fa fa-exclamation"></i>&emsp; Vui lòng đăng nhập để mua hàng <span><a href="#" onclick="Xclose();">X</a></span></p> <?php } ?></div>
        </div>
 </div>
 <div class="container mb-sanpham" style="margin: 0 6%;">
 <div class="row">
 	<div class="col-md-6">
 		<div class="Khachhang-new">
 			<h4>Khách hàng mới</h4>
 			<p style="font-weight: 600;font-size: 15px;">Đăng ký</p>
 			<p>Bằng việc tạo tài khoản bạn có thể mua sắm nhanh hơn, theo dõi trạng thái đơn hàng. và theo dõi đơn hàng mà bạn đã đặt</p>
 			<button type="button" style="background: #FF5C00;
 padding: 12px 30px; border: none;"><a href="Registration.php" style="color:#fff;">Tiếp tục</a></button><?php 
		 		include("Modules/CKhachhang.php");
		 		if(isset($_POST['submit-form']))
		 		{
		 			$Username=$_POST['username'];
		 			$password=$_POST['password'];	
		 			$DB_khachhang= new Khachhang();
		 			$DB_khachhang->Login($Username,$password);

		 		}
 				?>
 		</div>
 	</div>
 	
 	<div class="col-md-6">
 		<div class="Khachhang-new">	
 			<form method="post"> 			
 			<h4>Khách hàng cũ</h4>
 			
 			<p style="font-weight: 600;font-size: 15px;">Tôi là khách hàng cũ</p>
 			<?php if(isset($error)) {?>
					<div class="alert alert-danger" role="alert">
				  	<?php echo $error; ?>
					</div> <?php } ?>
 			<p style="font-weight: 600;font-size: 15px;">Username</p>
			<input type="text" class="form-control" placeholder="Username" required="" name="username"><br>
 			<p style="font-weight: 600;font-size: 15px;">Mật Khẩu</p>
 			<input type="password" class="form-control" placeholder="Password" style="margin-bottom: 5px;" name="password">
 			<a href="">Quên mật khẩu?</a><br><br>
 			<input type="submit" value="Đăng nhập" style="padding: 12px 30px; font-size: 15px; color:#fff; border:none;background-color: #FF5C00;" name="submit-form"><br>
 			 <a href="<?= $loginUrl ?>"><button class="bttn" type="button"><span></span> <span></span> <span></span> <span></span>Login with FaceBook</button></a>
			</form>
 		</div>
 	</div>
 </div> 	
 </div>


<?php include("Layout/footer.php"); ?>