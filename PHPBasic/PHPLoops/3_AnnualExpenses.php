<!DOCTYPE>
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
        
        <title>Problem 3.   Show Annual Expenses</title>
        <meta name="description" content="Write a PHP script AnnualExpenses.php that receives n years from an input HTML form and creates a table (like the one shown below) with random expenses by months and the corresponding years (n years back). For example, if N is 10, create a table that shows the expenses for each month for the last 10 years. Add a \"Total\" column at the end, showing the total expenses for the same year. The random expenses in the table should be in the range [0…999].">
      </head>
    <body>
        
        <form method="post">
            Enter number of years<input type="text" name="years" />
            <input type="submit" name="submit" value="Show costs" />
        </form>
       
<?php
if(isset($_POST['years'])){
$years = $_POST['years'];              
}                   
?>
              
        <table>
            <tr>
                <th>Years</th>
                <th>January</th>
                <th>February</th>
                <th>March</th>
                <th>April</th>
                <th>May</th>
                <th>June</th>
                <th>July</th>
                <th>August</th>
                <th>September</th>
                <th>Octomber</th>
                <th>November</th>
                <th>December</th>
                <th>Total</th>
            </tr>
          
          
<?php
for ($i=0; $i<$years; $i++):  
$sum=0;                           
?>
            
            <tr>
                <td><?=(2014-$i)?></td>                
<?php
for ($j=0; $j<12 ; $j++): 
$count = rand(0, 999);
$sum += $count;         
?>
                <td><?=$count?></td>                
<?php endfor ?>   
                <td><?=$sum?></td>  
            </tr>
    
<?php endfor ?>
         </table>
    </body>
</html>