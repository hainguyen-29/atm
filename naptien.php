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
	<title>Nạp tiền </title>
	<link rel="stylesheet" href="css.css">
</head>
<body>

	<div class="form-home">

		<?php include('left.php') ?>

		<div class="content" id="right">
			<h1>Nạp tiền</h1>
			<div class="welcom">
				<form action="#" method="post">
					<div class="chuyentien">
						<input type="number" name="money" placeholder="Số tiền cần nạp" required>
					</div>

					<div class="chuyentien">
						<input class="sm-dongy" type="submit" name="naptien" value="BẮT ĐẦU NẠP">
					</div>
				</form>
				<?php  
					if (isset($_POST['naptien'])) {
						$sotien = $_POST['money'];

						$add = add_money($session,$name['money'],$sotien);
						echo "<p>Nạp thành công! Số dư mới ".$add." đồng</p><br>";
					}
				?>
			</div>
		</div>

	</div>

</body>
</html>
<?php }else header('location:login.php'); ?>