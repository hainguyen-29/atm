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
	<title>Rút tiền </title>
	<link rel="stylesheet" href="css.css">
</head>
<body>

	<div class="form-home">

		<?php include('left.php') ?>

		<div class="content" id="right">
				<h1>Rút tiền</h1>

			<div class="welcom">
				<form action="#" method="post">
					<div class="chuyentien">
						<input type="number" name="money" placeholder="Số tiền cần rút" required>
					</div>

					<div class="chuyentien">
						<input class="sm-dongy" type="submit" name="ruttien" value="BẮT ĐẦU RÚT">
					</div>
				</form>
				<?php 
				if (isset($_POST['ruttien'])) {
				 	$sotien = $_POST['money'];

				 	if ( check_money($name['money'],$sotien) == true) {
				 		$sum = update_money($session,$name['money'],$sotien);
				 		echo "<p>Done! Nhận được ".$sotien." đồng</p><br>";
				 		echo "Còn lại ".$sum." đồng";
				 	}else echo "Đủ tiền đâu mà rút?";
				 } ?>
				
			</div>
		</div>

	</div>

</body>
</html>
<?php }else header('location:login.php'); ?>