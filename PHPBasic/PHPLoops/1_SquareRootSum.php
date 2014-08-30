<!DOCTYPE >
<html>
    <head>
        <style>
           th, td{
            border: 1px solid black;
            padding: 5px;
            }
            table{
                border-collapse: collapse;
            }
        </style>
        <title>Problem 1. Square Root Sum</title>
        <meta name="description" content="Write a PHP script SquareRootSum.php that displays a table in your browser with 2 columns. The first column should contain a number (even numbers from 0 to 100) and the second column should contain the square root of that number, rounded to the second digit after the decimal point. The last row of the table should contain the sum of all values in the Square column."> 
    </head>
    <body>
        <table>
            <tr><th>Number</th><th>Square root</th></tr>
            <?php
            $sum = 0;
            for ($i=0; $i <= 100 ; $i+=2) :
                $sqrt = sqrt($i);
                $sum+=$sqrt;
                $roundSqrt=round($sqrt,2)
            ?>
            
            <tr><td><?=$i?></td><td><?=$roundSqrt?></td></tr>
             
            <?php endfor ?>
            
            <tr><td>Total</td><td><?=round($sum,2)?></td></tr>
                        
        </table>
    </body>
</html>