<?php 
	session_start();
	unset($info);
	if(isset($_SESSION['current_user']))
	{
		unset($_SESSION['current_user']);
	}
	?> <script> window.location = "../Login.php"</script><?php
?>