<?php

digitFinder(1234);
digitFinder(145);
digitFinder(15);
digitFinder(247);

    function digitFinder($value){
    	$end=$value; 
    	if($end>988){
    		$end=987;
    	}
    	$result = array();
    	for ($i=102; $i <= $end ; $i++) { 
			$third = ($i%10);
			$second = ($i/10)%10;
			$first = (int)($i/100);
			
			if(($first!=$second)&&($second!=$third)&&
			($first!=$third)){
				array_push($result, $i);
			}
							
		}
		
		$result = array_filter($result);
		
		if (empty($result)) {
				echo "No";
		}
		else{		
			foreach($result as $key => $value){
 				 echo $value. ", ";
			}
		}
	
		echo "<br/><br/><br/>";
    }
?>