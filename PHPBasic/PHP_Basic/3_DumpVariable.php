<?php

varDump("hello");
varDump(15);
varDump(1.234);
varDump(array(1,2,3));
varDump((object)[2,34]);


function varDump ($value){
	
	$value=$value;
	if((gettype($value)=="integer")||(gettype($value)=="double")){
		echo var_dump($value) . "<br/> \n";
	}
	else{
		echo gettype($value) . "<br/> \n";
	}
	
}
?>