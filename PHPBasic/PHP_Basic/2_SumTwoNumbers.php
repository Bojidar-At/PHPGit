<?php

sumTwoNumbers(2, 5);
sumTwoNumbers(1.567808, 0.356);
sumTwoNumbers(1234.5678, 333);


    function sumTwoNumbers($a, $b)
    {
        $firstNumber = $a;
		$secondNumber = $b;
		$sum = number_format(($secondNumber+$firstNumber),2,'.','');
		echo '$firstNumber + $secondNumber = ' . 
		"$firstNumber + $secondNumber = " . $sum . "<br/>";
    };
?>
