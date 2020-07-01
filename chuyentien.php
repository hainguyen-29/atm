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
	<title>Chuyển tiền </title>
	<link rel="stylesheet" href="css.css">
</head>
<body>

	<div class="form-home">

		<?php include('left.php') ?>

		<div class="content" id="right">
			<h1>Chuyển tiền</h1>
			<div class="welcom">
				<form action="#" method="post">
					<div class="chuyentien">
						<input type="text" name="account" placeholder="Số tài khoản người nhận" required>
					</div>

					<div class="chuyentien">
						<input type="number" name="money" placeholder="Số tiền" required>
					</div>

					<div class="chuyentien">
						<input class="sm-dongy" type="submit" name="chuyentien" value="ĐỒNG Ý">
					</div>
				</form>
				<?php 
					if(isset($_POST['chuyentien'])){
						$account = $_POST['account'];
						$money = $_POST['money'];

						$arr_you 	 = arr_one($account);
						if(check_row($account) == 1){
							if($session != $account) {
								if(check_money($name['money'],$money) == TRUE){
									$ud_money_me = update_money($session,$name['money'],$money);
									$ud_money_you = add_money($account,$arr_you['money'],$money);
									echo "Chuyển thành công cho bạn ".$arr_you['name']."!<br>Còn lại ".$ud_money_me;
								}else echo "Tài khoản không đủ chuyển con khỉ";
							}else echo "Bị ngáo à mà tự chuyển cho mình??";
						}else echo "Người nhận chưa mở thẻ";

					}
				?>
			</div>

		</div>

	</div>

</body>
</html>
<?php }else header('location:login.php'); ?>