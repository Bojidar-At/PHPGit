<?php
	$hapyNewYear=strtotime("00:00 01.01.2015");
	$days=ceil(($hapyNewYear-time())/60/60/24);
	$hour=ceil(($hapyNewYear-time())/60/60);	
	$min=ceil(($hapyNewYear-time())/60);	
	$sec=ceil(($hapyNewYear-time()));	
	
	
	echo "Hours until New Year : ".$hour . "<br/> \n";
	echo "Minutes until New Year : ".$min. "<br/> \n";
	echo "Seconds until New Year : ".$sec. "<br/> \n";
	echo "Days:Hours:Minutes:Seconds ". "$days:$hour:$min:$sec";

?>