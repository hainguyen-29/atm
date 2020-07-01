<?php 
	if(!empty($session)){
 ?>
 <div class="content" id="left">
			<p>Chào <?php $name = arr_one($session); echo $name['name']; ?>&emsp;|| &emsp;<a href="exit.php">Log out</a></p>
			<h1>Chọn chức năng</h1>
				<div class="nav">

					<div class="text">
						<div class="one">

							<a href="tracuu.php">Tra cứu</a>
						</div>

						<div class="one">
							<a href="chuyentien.php">Chuyển tiền</a>
						</div>

					</div>

					<div class="text">

						<div class="one">
							<a href="naptien.php">Nạp tiền</a>
						</div>

						<div class="one">
							<a href="ruttien.php">Rút tiền</a>
						</div>

					</div>	

				</div>

		</div>
 <?php }else header('location:index.php'); ?>