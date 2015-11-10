<?php
//switch adalah suatu statement control yang digunakan untuk menyatakan suatu pernyataan, fungsinya sama dengan if.

echo"Use Switch<br>";

$a =8;
switch($a){
case 1:
	echo"Senin";
break;
case 2:
	echo"Selasa";
break;
case 3:
	echo"Rabu";
break;
case 4:
	echo"Kamis";
break;
case 5:
	echo"Jum'at";
break;
case 6:
	echo"Sabtu";
break;
case 7:
	echo"Minggu";
break;
default:
	echo"error 404";
break;
};
?>