<!DOCTYPE >
<html>
    <head>
        <title>Problem 4.   Find Primes in Range</title>
        <meta name="description" content="Write a PHP script PrimesInRange.php that receives two numbers – start and end – from an input field and displays all numbers in that range as a comma-separated list. Prime numbers should be bolded."/>
        <style>
            .isPrime{
                font-size: x-large;
                font-family: -webkit-pictograph;
                font-weight: bold;
                color: tomato;
            }
        </style>
    </head>
    <body>
        <form method="post">
            Starting index:
            <input type="text" name="start" />
            End:
            <input type="text" name="end" />
            <input type="submit" name="submit" value="submit" />
        </form>
        
<?php
if(isset($_POST['start'])&&(isset($_POST['end']))){
    $start=$_POST['start'];
    $end=$_POST['end'];    
}

function delemiter($i, $end){
	if($i != $end){
      return  ", ";
    }
}
function isPrime($i){
        $primeChecker = TRUE;
    for ($j=2; $j <= sqrt($i); $j++) { 
        if($i%$j==0){
            $primeChecker = FALSE;
        }
    }
    
    if(!$primeChecker){
            return $i;
        }
        else {
            echo "<span class=\"isPrime\">$i</span>"; 
        }
    
}

for ($i=$start; $i <= $end ; $i++) {    
    echo isPrime($i) . delemiter($i, $end);    
}?>    
    </body>    
</html>