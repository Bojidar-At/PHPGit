<!DOCTYPE >
<html>
    <head>
        <title>Problem 5.   Sum of Digits</title>
        <meta name="description" content="Write a PHP script SumOfDigits.php which receives a comma-separated list of integers from an input form and creates a two- column table. The first column should contain each of the values from the input. The second column should contain the sum of the digits of each value. If the value is not an integer number, print \"I cannot sum that\"."/>
           <style>
               th, td{
                border: 1px solid black;
                padding: 5px;                
                width: 120px;
                text-align: center;
                }
                table{
                    border-collapse: collapse;
                }
            </style>
    </head>
    <body>
        <form method="post">
            Input string:
            <input type="text" name="data" />
            <input type="submit" name="submit" />
        </form>
        
<?php
if(isset($_POST["data"])){
    $data = ($_POST["data"]);
}    
    $splitData = preg_split('/[ ,;]+/', $data);  
    foreach ($splitData as $number) : ?>
    
    <table>
        <tr>
            <td>
<?=$number?>
            </td>
            <td>
<?php 
if(is_numeric($number)){
    $nstr = $number . "";
    $sum = 0;
    for ($i = 0; $i < strlen($nstr); ++$i)
    {
        $sum += $nstr[$i];
    }
    echo $sum;
}
else{
    $err = "I cannot sum that. ";
    echo "$err";
}
?>
            </td>
        </tr>
    </table>   
<?php endforeach ?>
    </body>
</html>