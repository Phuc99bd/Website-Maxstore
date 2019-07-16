<?php session_start(); ?>
<?php 
	if(isset($_SESSION["fullname"]))
	{
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Administor</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link src="http://example.com/foobar/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>
    <link rel="stylesheet" href="../Style/admin/index.css">
    <script type="text/javascript" src="../Style/Js/index.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top fixed-top">
	<div class="container-fluid">
		
		<a class="navbar-branch" href="#">
			<img src="../Style/Image/logo-maxstore-500px-01.png" height="40" style="max-width: 100%;">
		</a>
		
		<button class="navbar-toggler" type="button" data-toggle="collapse" 
			data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item ">
					<a class="nav-link" href="#"><i class="fa fa-home" style="color: #0444A3;"></i> Maxstore </a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="ajax/logout.php"><i class="fa fa-sign-out" style="color: red;"></i></i> Logout</a>
				</li>	
			</ul>
		</div>
	</div>
</nav>
	<div class="container-fluid">
		<div class="row">
		
		<div class="col-md-2" style="background-color: #515151;overflow: auto; height: 900px;" id="collectionright">
		<ul class="nav flex-column fixed-p" style=" margin:0px; padding:0px;padding-top: 1%;" id="controler">
			<div class="accordion" id="accordionExample">
			<li class="nav-item-by-p active"><p class="adminis"><i class="fa fa-user"></i>&emsp; <?php echo $_SESSION['fullname']?></p>
			<p class="adminis"><i class="fa fa-users"></i>&emsp; <?php echo $_SESSION['role'] ?></p>
			</li>
			<li class="nav-item-by-p active">
				<a class="nav-link-p" href="index.php?QL=control"><i class="fa fa-home" ></i> &emsp;Bảng điều khiển</a>
			</li>
			<li class="nav-item-by-p active">
				<a href="index.php?QL=thanhvien" class="nav-link-p"data-toggle="collapse" data-target="#collapseOne" role="button" style="color: #C4C4C4;">

					<i class="fa fa-empire"></i>
				&emsp;Quản lý thành viên </a>
				<ul id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample" class="nav flex-column collapse">
					<li class="nav-item-by-p active">
						<a  href="index.php?QL=thanhvien"  id="test">&emsp;<i class="fa fa-forward"></i>&emsp; Tài khoản Quản trị</a>
					</li>
					<li class="nav-item-by-p active">
						<a id="test" href="index.php?QL=khachhang">&emsp;<i class="fa fa-forward"></i>&emsp; Khách hàng </a>
					</li">
				</ul>
			</li>
		
			<li class="nav-item-by-p active">
				<a class="nav-link-p collapsed" data-toggle="collapse" data-target="#collapseTwo" role="button" href="#"><i class="fa fa-product-hunt"></i>&emsp; Quản lý sản phẩm </a>
				<ul class="nav flex-column collapse" id="collapseTwo"aria-labelledby="headingTwo" data-parent="#accordionExample">
					<li class="nav-item-by-p active">
						<a  href="index.php?QL=sanpham" id="test">&emsp;<i class="fa fa-forward"></i>&emsp; Sản phẩm</a>
					</li>
					<li class="nav-item-by-p active">
						<a id="test" href="index.php?QL=loaisanpham">&emsp;<i class="fa fa-forward"></i>&emsp; Loại sản phẩm</a>
					</li">
					<li class="nav-item-by-p active"><a id="test" href="index.php?QL=sanpham">&emsp;<i class="fa fa-forward"></i>&emsp; Hình ảnh / Gía Sell </a></li>
					<li class="nav-item-by-p active"><a id="test" href="index.php?QL=sanpham&HD=danhgia">&emsp;<i class="fa fa-forward"></i>&emsp; Đánh giá </a></li>
				</ul>
			</li>
			<li class="nav-item-by-p active">
				<a class="nav-link-p collapsed" data-toggle="collapse" data-target="#collapseThree" role="button" href="#"><i class="fa fa-product-hunt"></i>&emsp; Đơn hàng </a>
				<ul class="nav flex-column collapse" id="collapseThree"aria-labelledby="headingTwo" data-parent="#accordionExample">
					<li class="nav-item-by-p active">
						<a  href="index.php?QL=sanpham" id="test">&emsp;<i class="fa fa-forward"></i>&emsp; Đơn hàng</a>
					</li>
					<li class="nav-item-by-p active">
						<a id="test" href="index.php?QL=loaisanpham">&emsp;<i class="fa fa-forward"></i>&emsp; Phiếu giao hàng</a>
					</li">
				</ul>
			</li>
			<li class="nav-item-by-p active">
				<a href="#" class="nav-link-p"><i class="fa fa-pencil-square-o"></i>&emsp;Tin tức</a>
			</li>
			<li class="nav-item-by-p active">
				<a class="nav-link-p collapsed" data-toggle="collapse" data-target="#collapseBC" role="button" href="#"><i class="fa fa-product-hunt"></i>&emsp; Báo cáo </a>
				<ul class="nav flex-column collapse" id="collapseBC"aria-labelledby="headingTwo" data-parent="#accordionExample">
					<li class="nav-item-by-p active">
						<a  href="index.php?QL=sanpham" id="test">&emsp;<i class="fa fa-forward"></i>&emsp; Đơn hàng</a>
					</li>
					<li class="nav-item-by-p active">
						<a id="test" href="index.php?QL=loaisanpham">&emsp;<i class="fa fa-forward"></i>&emsp; Phiếu giao hàng</a>
					</li">
				</ul>
			</li>
								</div>
		</ul>
	

	</div>

	<div class="col-md-10" style="background: #fff;overflow: auto; height: auto;" id="cuon-trang" id="collectionleft">

		<?php
		$check="";
		if(isset($_GET["HD"]))
		{
			$check = "co";
			if($_GET["QL"]=="sanpham" && $_GET["HD"]=="add")
			{
			include("QL/QLSanpham/addsanpham.php");
			
			}
			else
				if($_GET["QL"]=="sanpham" && $_GET["HD"]=="edit")
				{
					include("QL/QLSanpham//editsanpham.php");
				}
			
			else
				if($_GET["QL"]=="loaisanpham" && $_GET["HD"]=="add")
			{
			include("QL/QLloaisanpham/addnew.php");
			}
			else
				if($_GET["QL"]=="loaisanpham" && $_GET["HD"]=="edit")
			{
			include("QL/QLloaisanpham/editnew.php");
			}
			else
				if($_GET["QL"]=="thanhvien" && $_GET["HD"]=="add"){
					include("QL/QLthanhvien/createtv.php");
				}
			else
				if($_GET["QL"]=="thanhvien" && $_GET["HD"]=="edit"){
					include("QL/QLthanhvien/edittv.php");
				}
			else
				if($_GET["QL"]=="khachhang" && $_GET["HD"]=="edit"){
					include("QL/QLkhachhang/editnew.php");
				}
			else
				if($_GET["QL"]=="sanpham" && $_GET["HD"]=="danhgia"){
					include("QL/QLSanpham/danhgia.php");
				}
			else
				if($_GET["QL"]=="sanpham" && $_GET["HD"]=="editdanhgia"){
					include("QL/QLSanpham/Handling/danhgia.php");
				}

		}
		else{		
		if($_GET["QL"]=="sanpham" && $check!="co")	
		{
		include("QL/sanpham.php");
		}
		else
			if($_GET["QL"]=="thanhvien"){
				include("QL/thanhvien.php");
		}
		else
			if($_GET["QL"]=="loaisanpham" && $check!="co")	
		{
		include("QL/loaisanpham.php");
		}
		else
			if($_GET["QL"]=="control" && $check!="co"){
				include("Bangdieukhien.php");
			}
		else
			if($_GET["QL"]=="khachhang" && $check!="co"){
				include("QL/khachhang.php");
			}
	}
		?>
	</div>
</div>
</div>
	
	<div class="container-fluid">
			<a href="#nav" style="position: fixed;
						  right: 3%;
						   top: 70%;" class="To-top-by-p">
			<i class="fa fa-chevron-up"></i></a>
	</div>
	<div class="container-fluid" style="background: silver; padding: 10px 5px; align-items: center; vertical-align: middle; padding-bottom: 5px;">
		<p style="text-align: center;font-size: 16px; color:#908989">Copyright@2019 by FFQ</p>
	</div>
</body>
</html>
<?php } else{
	?>
				<script>
					window.location = "Dangnhap.php";
				</script>
				<?php
}