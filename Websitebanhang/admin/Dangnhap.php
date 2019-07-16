<?php session_start(); ?>
<?php
	if(isset($_SESSION["fullname"])){
		?>
				<script>
					window.location = "index.php?QL=control";
				</script>
				<?php
	}
	else{
?>
	<!DOCTYPE html>
<html>
<head>
	
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin - Login</title>
	 <!-- Compiled and minified CSS -->
 	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="../Style/admin/login.css">
    <!-- Compiled and minified JavaScript -->
    
    
</head>
<body>
	
<!------ Include the above in your HEAD tag ---------->
	<?php 
		require_once("config.php");		
	?>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../Style/Image/logo-maxstore-500px-01.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form method="post" >
    	
      <input type="text" id="login" class="fadeIn second" name="user" placeholder="Username">
      <input type="text" id="password" class="fadeIn third" name="pass" placeholder="password">
     	 <?php if(isset($_POST["login"])){
			$user = $_POST["user"];
			$pass = $_POST["pass"];
    		if($user=="" || $pass=="")
			{
				echo "<p class="?>bg-danger<?php echo ">Vui lòng nhập Username và Password</p>";
			}
			else{
				$sql = "select * from accout where USERNAME='$user' and PASSWORD='$pass'";
				$temp = mysqli_query($conn,$sql);
				$num_rows = mysqli_num_rows($temp); 
				if ($num_rows==0) {
					echo "<p class="?>bg-danger<?php echo ">Sai tài khoản hoặc mật khẩu </p>";
				}else{
				while( $data = mysqli_fetch_array($temp)){
					
					$_SESSION['user_name'] = $data["USERNAME"];
					$_SESSION['pass'] = $data["PASSWORD"];
					$_SESSION['fullname'] = $data["FULLNAME"];
					$_SESSION['role'] = $data["ROLE"];	
				}
				?>
				<script>
					window.location = "index.php?QL=control";
				</script>
				<?php
				
			}
		} 
	}
		?>
      <input type="submit" class="fadeIn fourth" value="Log In" name="login" onclick="check();">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
</body>
</html>
<?php } ?>