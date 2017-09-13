<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bàn cờ</title>
	<link rel="stylesheet" href="">
</head>
<style>
	.container{
		margin: 10px auto;
		width: 802px;

	}
	.banco{
		width: 800px;
		height: 800px;
		border:1px solid #000;
	}
	.o_co{
		width: 100px;
		height: 100px;
		float: left;
	}
	.trang{
		background-color: #fff
	}
	.den{
		background-color: #000
	}
</style>


<body>
	<div class="container">
		<div class="banco">

		<?php

		for($y=1; $y<=8; $y++){
			for($x=1; $x<=8; $x++){
				if(($y+$x)%2 == 0){

				?>
					<div class='o_co trang'></div>
				<?php 
				}
				else{
				?>
					<div class='o_co den'></div>
				<?php
				}
			}
		}

		?>

			
			

		</div>

	</div>
</body>
</html>