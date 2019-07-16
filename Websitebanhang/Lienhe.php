<?php include("Layout/header.php") ?>
<style type="text/css">
	.lienhe-input{
		position: relative;
		width: 100%;
		border:none;
		border-bottom: 1px solid silver;
		font-size: 16px;
		padding: 10px 10px;
		margin-bottom: 10px;
	}
	.lienhe-button{
		border:none;
		background: #FF5C00;
		padding: 10px 30px;
		border-radius: 20px;
		color:white;
		width: auto;
		font-size: 16px;
	}
</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
            <div style="margin-left: 6%;" class="dieu-huong"><p> <ul class="breadcrumb">
            <li class="breadcrumb-item active"><a href="#"><i class="fa fa-home"></i> &emsp;Trang chủ</a></li>
            <li class="breadcrumb-item" aria-current="page">Liên hệ</li>
         </ul></p></div>
	</div>
</div>
</div>
<div class="container mb-sanpham" style="margin: 0 6%;">
	<div class="row">
			<div class="col-md-12">
			    <iframe src="https://www.google.com/maps/d/embed?mid=1qC2ujG70EMP1T0MQ7eY88itYCCTNNTvE" width="100%" height="300px;"></iframe>
			 </div>
	</div>
	<div class="row" style="margin-top: 20px;">
		<div class="col-md-4">
			<h4 style="border-bottom: 1px solid silver;width: 100%; padding-bottom: 5px; margin-bottom: 5px;">Địa chỉ của chúng tôi</h4><br>
			<img src="Image/logo-maxstore-500px-01.png" width="300" height="100" style="margin-bottom: 20px;"><br>
			<p style="font-size: 16px;"><i class="fa fa-home"></i>&emsp; 113/37/81 Tổ 3 khu phố 6, phường Phú Hòa , TP.Thủ Dầu Một</p>
			<p style="border-bottom: 1px solid silver;font-size: 16px; padding-bottom: 10px;"><i class="fa fa-phone-square"></i>&emsp; 038 319 7989</p>
		</div>
		<?php 
			$mail =  new PHPmailer();
		?>
		<div class="col-md-8">
			<form>
			<h3>Thông tin Liên Hệ</h3><br>
			<input class="lienhe-input" type="text" placeholder="Tên của bạn" required=""><br>
			<input class="lienhe-input" type="text" placeholder="Địa chỉ Email" required=""><br>
			<textarea class="form-control" rows="6" id="comment" placeholder="Nội dung" required=""></textarea><br>
			
			<button class="lienhe-button" type="submit"><i class="fa fa-chevron-right" style="background: #FF5C00;"></i> Gửi đi</button>
			
		</form>	
		</div>
	</div>
</div>
<?php include("Layout/footer.php") ?>