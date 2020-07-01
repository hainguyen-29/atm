<?php 
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Đăng nhập</title>
	<link rel="stylesheet" href="css.css">
</head>
<body>
	<div class="form-login">
		<h1>Đăng nhập</h1>
		<p>Sử dụng tài khoản ngân hàng của bạn</p>

		<form method="post" action="#">
			<div class="three">

				<div class="text">
					<input class="txt" type="text" name="account" placeholder="Nhập số tài khoản">
				</div>

				<div class="text">
					<input class="txt" type="text" name="pass" placeholder="Mật khẩu">
				</div>

				<div class="text">
					<input class="sm" type="submit" name="login" value="TIẾP THEO">
				</div>

			</div>
		</form>
		<?php 
			include('model.php');
			if(isset($_POST['login'])){
				$account = $_POST['account'];
				$pass = $_POST['pass'];

				// $check = check_account($account,$pass);
				$check_acc = check_login($account);
				$row = check_row($account);
				if($row == 1){
					$check_pass = check_pass($pass,$account);
					if($check_pass == TRUE){ 
						echo "<script>
										alert('Dang nhap thanh cong'); 	
										location.replace('index.php');
									</script>";
						$_SESSION['account'] = $account;
					}else echo "<script>alert('Sai mat khau')</script>";
				}else echo "<script>alert('Sai tai khoan')</script>";

			}
		?>

	</div>
</body>
</html>