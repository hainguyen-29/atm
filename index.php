<?php 
	session_start();
	include('model.php');
	$session = $_SESSION['account'];
	if(!empty($session)){
 ?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hệ thống quản lý thẻ ATM </title>
	<link rel="stylesheet" href="css.css">

</head>
<body>

	<div class="form-home">

		<?php include('left.php') ?>

		<div class="content" id="right">
			<div class="welcom" id="welcom">
				<img src="img/PR3_4 buoc dat hang.jpg" width="399" height="419">
			</div>
		</div>

	</div>

</body>
</html>
<?php }else header('location:login.php'); ?>