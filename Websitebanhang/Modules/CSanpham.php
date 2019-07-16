<?php 
	class Sanpham
	{
		function editsoluong()
		{
			foreach ($_SESSION['cart'] as $key => $value) {
			
			if(isset($_POST["sl_$key"])){
			
				$soluong= $_POST["sl_$key"];
				if($soluong<1)
				{
					unset($_SESSION['cart'][$key]);
				}
				else{
					$_SESSION['cart'][$key]['quantity']= $soluong;
				}
				}
			}
			if(empty($_SESSION['cart'])){
	
				unset($_SESSION['cart']);
					}		
			?><script> window.location = "giohang.php"; 
		              		</script>
				<?php
			
		}
		function Danhgia($MASP,$fullname,$noidung,$chatluong)
		{
			include("admin/config.php");
			$format='Y/m/d';
			$time = time();
			$Ngaythem =date($format,$time);
			$sql = "INSERT INTO `danhgiasanpham`(`FULLNAME`, `MASP`, `Noidung`, `Ngaythem`,`Chatluong`) VALUES ('$fullname',$MASP,'$noidung','$Ngaythem',$chatluong)";
			mysqli_query($conn,$sql);
			?><script> window.location = "Chitietsanpham.php?MASP=<?php echo $MASP ?>"; 
		              		</script>
				<?php
		}
		function Dathang($TENKH,$EMAIL,$SDT,$Diachi,$loinhan,$total,$id)
		{
			include("admin/config.php");
			$format='Y/m/d';
			$time = time();
			$Ngaythem =date($format,$time);
			
			$sqldh = "INSERT INTO `donhang`(`idkh`, `TrangthaiDH`, `Ngaydathang`, `GiatriDH`, `Loinhan`,`TENKH`, `EMAIL`, `SDT`, `DIACHI`) VALUES ($id,0,'$Ngaythem',$total,'$loinhan','$TENKH','$EMAIL','$SDT','$Diachi')";
				
			mysqli_query($conn,$sqldh);
			
			$sqlreturn = "select Max(MADH) as 'iddh' from donhang";
			$laydl = mysqli_query($conn,$sqlreturn);
			$iddh = mysqli_fetch_array($laydl);
			$iddonhang = $iddh['iddh'];
			if(isset($_SESSION['cart']))
			{
			foreach ($_SESSION['cart'] as $key => $value) {
				$soluong =$value['quantity'];
				$sqlctdh= "INSERT INTO `chitietdonhang`(`MADH`, `MASP`, `COUNT`) VALUES ($iddonhang,$key,$soluong)";
				mysqli_query($conn,$sqlctdh);
				}
			}
			unset($_SESSION['cart']);
			 ?><script> window.location = "Complete.php"; 
		              		</script>
					<?php
		}
		function LoadInfo($limit)
		{
	
			include("admin/config.php");
     	 	$result = mysqli_query($conn, "select count(MASP) as total from sanpham ");
		      $row = mysqli_fetch_array($result);
		      $total_records = $row['total'];
		     global $current_page;
		       $current_page= isset($_GET['page']) ? $_GET['page'] : 1;
		      global $total_page;
		      $total_page = ceil($total_records / $limit);
		      if ($current_page > $total_page){
		          $current_page = $total_page;
		      }
		      else if ($current_page < 1){
		          $current_page = 1;
		      }
		      $start = ($current_page - 1) * $limit;
			
			$sql ="select * from sanpham,supportproduct where sanpham.MASP=supportproduct.MASP limit $start,$limit";
			global $sources;
			$sources = mysqli_query($conn,$sql);
		}
		function Addtogio()
		{
			if(isset($_GET['MASP']))
			{
				$sl = $_POST['soluong'];
				$id = $_GET['MASP'];
				if(isset($_SESSION['cart'][$id])){
					$_SESSION['cart'][$id]['quantity']= $_SESSION['cart'][$id]['quantity'] + $sl;
					 ?><script> window.location = "Chitietsanpham.php?MASP=<?php echo $id ?>"; 
		              		</script>
					<?php
				}
				else{
					include("admin/config.php");
					$sql_s= "SELECT * FROM sanpham 
		                WHERE MASP=$id "; 
		            $query_s=mysqli_query($conn,$sql_s); 
		            if(mysqli_num_rows($query_s)!=0){ 
		                $row_s=mysqli_fetch_array($query_s); 
		             
		                $_SESSION['cart'][$row_s['MASP']]=array( 
		                        "quantity" => $sl, 
		                        "Name" => $row_s["TENSP"],
		                        "price" => $row_s['GIA'] ,
		                        "Image" => $row_s['Image']
		                    );
		     
		                  ?><script> window.location = "Chitietsanpham.php?MASP=<?php echo $id ?>"; 
		              		</script>
							<?php
		                  
		            }else{ 
		                  
		                $message="This product id it's invalid!"; 
		                  
		            } 
				}
				
			}
		}
	}

?>