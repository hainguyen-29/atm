<?php 
	include('connection.php');
//Lay ra thong tin
	function check_login($account){
		global $connection;
		$sql = mysqli_query($connection,"SELECT * FROM khachhang WHERE account='$account'");
		return $sql;	
	}
//Lay thong tin va dua vao mang
	function arr_one($account){
		$check_login = check_login($account);
		$arr = mysqli_fetch_assoc($check_login);
		return $arr;
	}
//Check xem da co trong db chua
	function check_row($account){
		$run = check_login($account);
		$row = mysqli_num_rows($run);
		return $row;
	}
//Check mat khau da nhap va mat khau trong db cua $account
	function check_pass($pass,$account){
		$arr = arr_one($account);
		if($pass == $arr['pass']) return true;
		else return false;
	}
	function check_money($old_money,$input_money){
		if($old_money >= $input_money){

			return true;
		} 
		else return false;
	}
	//Cap nhat so tien sau khi rut
	function update_money($account,$total_money,$input_money){
		$total_money -= $input_money;
		global $connection;
		$query_mn = mysqli_query($connection,"UPDATE khachhang SET `money`=$total_money WHERE account='$account'" );
		return $total_money;
	}
	//Cap nhat so tien sau khi nap va duoc nguoi khac chuyen
	function add_money($account,$total_money,$input_money){
		$total_money += $input_money;
		global $connection;
		$query_mn = mysqli_query($connection,"UPDATE khachhang SET `money`=$total_money WHERE account='$account'" );
		return $total_money;
	}
 ?>