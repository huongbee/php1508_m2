<?php

$day = 1;
$month =  10;
$year = 2000;
//=> 1/9/2000
//đã qua sinh nhật 20 ngày, 17 tuổi, 345 ngày đến sn
//


function SinhNhat($day,$month,$year){
	$yearNow = date('Y');

	$age = $yearNow - $year+1; //

	$sec_now = time();
	$sec_born = mktime(0,0,0,$month,$day,$yearNow);

	$note = ($sec_now - $sec_born)/(86400); //ngày
	$note = (int)$note;

	if($note >= 0 ){
		echo "Hiện tại đang $age tuổi. " ;

		if($note==0){
		echo 'Happy Birthday';
		}

		elseif($note>0){
			$comming = 365-$note;
			echo  "Đã qua sn ". abs($note) ." ngày. Còn $comming ngày nữa đến sn lần thứ ".($age+1);
			
		} 
	}

	else{
		echo  "Còn ". abs($note) ." ngày nữa đến sn. ";
		echo "Hiện tại đang ".($age-1)." tuổi" ;
	}

}
SinhNhat(12,9,1997);


?>