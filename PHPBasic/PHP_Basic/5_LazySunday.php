<?php

	find_the_sundays(date("M"));

	function find_the_sundays($date)
	{
	    $time = strtotime($date);
	    $year = date('Y', $time);
	    $month = date('m', $time);
	
		$sundays = array();
		
	    for($day = 1; $day <= 31; $day++)
	    {
	        $time = mktime(0, 0, 0, $month, $day, $year);
	        if (date('N', $time) == 7)
	        {
	            array_push($sundays, (date('d-M-Y', $time)));
	        }
	    }
		foreach($sundays as $key => $value){
 				 echo $value. "<br/>";
			}
	}
?>