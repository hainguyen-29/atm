<?php
	$connection = mysqli_connect('localhost','root','','atm');
	mysqli_query($connection,"SET CHARACTER SET 'utf8'");
	mysqli_query($connection,"SET SESSION collation_connection ='utf8_unicode_ci'");
// $num = 1000000;
// $formattedNum = number_format($num);
// echo $formattedNum;
?>