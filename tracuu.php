<?php 
	session_start();
	include('model.php');
	$session = $_SESSION['account'];
	if(!empty($session)){
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tra cứu </title>
	<link rel="stylesheet" href="css.css">
</head>
<body>

	<div class="form-home">

		<?php include('left.php') ?>

		<div class="content" id="right">
			<h1>Thông tin khác hàng</h1>
			<div class="welcom tracuu">
				<div class="chuyentien">
					<div class="one">Họ tên chủ thẻ</div>
					<div class="one"><?php echo $name['name'] ?></div>
				</div>
				<div class="chuyentien">
					<div class="one">Số tài khoản</div>
					<div class="one"><?php echo $name['account'] ?></div>
				</div>
				<div class="chuyentien">
					<div class="one">Số dư</div>
					<div class="one"><?php echo number_format($name['money']) ?> đồng</div>
				</div>
			</div>
		</div>

	</div>

</body>
</html>
<?php }else header('location:login.php'); ?>