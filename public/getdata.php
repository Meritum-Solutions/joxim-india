<?php

$val = $_GET['selectvalue'];

$stablizer = array('D Lite ML 500','D Lite AC 120','D Lite AC 90');	
$ceiling = array('ERA Series');	
$aircooler = array('Reno','Coolx','Fero','Speedo','Thunder','Windx');	
switch ($val) {
		case 'Stabilizer': foreach ($stablizer as $stabval) {
		echo " <option>  $stabval </option> ";
		}
		break;
		case 'Ceiling Fan': foreach ($ceiling as $ceilingval) {
		echo " <option>  $ceilingval </option> ";
		}
		break;
		case 'Air Cooler': foreach ($aircooler as $coolerval) {
		echo " <option>  $coolerval </option> ";
		}
			
	}	


?>