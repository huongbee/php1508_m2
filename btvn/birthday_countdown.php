<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
	function getAge($day, $month, $year){
		$age = date('Y')-$year;
		if (date('m') < $month || date('d') < $day) {
			--$age;
		}
		echo "Your age is: ".$age.".";
	}
	function countDown($day, $month){
		$sec_bd = mktime(0,0,0,$month,$day,date('Y'));
		$sec_now = mktime(0,0,0,date('m'),date('d'),date('Y'));
		$time = ($sec_now - $sec_bd) / 86400;
		if ($time > 0) {
			$sec_next_bd = mktime(0,0,0,$month,$day,date('Y') + 1);
			$rs = ($sec_next_bd - $sec_now) / 86400;
			echo "It has been ".$time." day(s) since your birthday. The next is ".$rs." days from now.";
		}
		else if ($time < 0) {
			echo abs($time)." day(s) left until your birthday";
		}
		else{
			echo "Happy Birthday!!";
		}
	}

	if (isset($_POST['submit'])) {
		$ngay = $_POST['date'];
		$thang = $_POST['month'];
		$nam = $_POST['year'];
		getAge($ngay, $thang, $nam);
		echo "<hr>";
		countDown($ngay, $thang);
	}
?>
	<?php 
		$month = array(
						1 => "January",
						2 => "February",
						3 => "March",
						4 => "April",
						5 => "May",
						6 => "June",
						7 => "July",
						8 => "August",
						9 => "September",
						10 => "Octoper",
						11 => "November",
						12 => "December"
		);
		$day = range(1, 31);
		$year = range(1980, 2017);
	?>
	<div class="container" style="margin: 2% auto; width: 400px">
  		<h2>BIRTHDAY COUNTDOWN</h2>	
		<form method="post" accept-charset="utf-8">
			<select name="month">
				<option value="">Select month</option>
				<?php 
					foreach ($month as $key => $value) {
						# code...
						echo "<option value='{$key}'>".$value."</option>";
					}
				?>
			</select>
			<select name="date">
				<option value="">Select date</option>
				<?php 
					foreach ($day as $key => $value) {
						# code...
						echo "<option>".$value."</option>";
					}
				?>
			</select>
			<select name="year">
				<option value="">Select year</option>
				<?php 
					foreach ($year as $key => $value) {
						# code...
						echo "<option>".$value."</option>";
					}
				?>
			</select>
			<input type="submit" name="submit" value="SUBMIT">
		</form>
	</div>
</body>
</html>
