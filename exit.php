<?php 
	session_start();
	session_destroy();
	echo "<script>alert('Đăng xuất thành công!!');
	              location.replace('login.php');
	      </script>";	
 ?>