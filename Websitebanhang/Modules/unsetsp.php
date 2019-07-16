<?php 
	session_start();
	if(isset($_GET['key']))
	{
		$key = $_GET['key'];
		unset($_SESSION['cart'][$key]);
		if(empty($_SESSION['cart'])){
	
				unset($_SESSION['cart']);
		}
		?><script type="text/javascript">window.location="../giohang.php";</script><?php
	}
?>