<?php session_start(); ?>
<?php 
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		if(isset($_SESSION['cart'][$id])){
			$_SESSION['cart'][$id]['quantity']++;
			 ?><script> window.location = "../Muahang.php?id=<?php echo $id ?>"; 
              		</script>
			<?php
		}
		else{
			include("../admin/config.php");
			$sql_s= "SELECT * FROM sanpham 
                WHERE MASP=$id "; 
            $query_s=mysqli_query($conn,$sql_s); 
            if(mysqli_num_rows($query_s)!=0){ 
                $row_s=mysqli_fetch_array($query_s); 
             
                $_SESSION['cart'][$row_s['MASP']]=array( 
                        "quantity" => 1, 
                        "Name" => $row_s["TENSP"],
                        "price" => $row_s['GIA'] ,
                        "Image" => $row_s['Image']
                    );
     
                  ?><script> window.location = "../Muahang.php?id=<?php echo $id ?>"; 
              		</script>
					<?php
                  
            }else{ 
                  
                $message="This product id it's invalid!"; 
                  
            } 
		}
		
	}
?>