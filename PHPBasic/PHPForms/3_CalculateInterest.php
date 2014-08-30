<!DOCTYPE html>
<html>
    <head>
        <title>3. Calculate Interest</title>
        <meta name="description" content="Write a PHP script CalculateInterest.php which generates an HTML page that contains: An input text field to hold the amount of money; Radio buttons to choose the currency; An input text field to enter the compound annual interest amount; A dropdown menu to choose the period of time; A submit button. When the information is submitted, the script should print out the amount of money you will have after the selected period, rounded to 2 decimal places.">
    </head>
    <body>        
        <form method="get">
            <span>Enter Amount</span>
            <input type="number" name="amount" /><br/>
            <input type="radio" name="check_list" value="USD">USD
            <input type="radio" name="check_list" value="EUR">EUR
            <input type="radio" name="check_list" value="BGN">BGN<br />
            Compound Interest Amount<input type="number" name="interest" /><br/>
            <select name="months">
              <option value="6">6 Months</option>
              <option value="12">1 Year</option>
              <option value="24">2 Years</option>
              <option value="60">5 Years</option>
            </select>
            <input type="submit" name="submit"/>
        </form>
    
    
<?php
    if(isset($_GET['submit'])){
        $amount=htmlentities($_GET['amount']); 
        $curr=$_GET['check_list']; 
        $interest=htmlentities($_GET['interest']); 
        $months=htmlentities($_GET['months']); 
        $monthIntrerest=$interest/12;
        
        $total=$amount;
        
        for($i = 0; $i < $months; $i++){
           $total =+ ($total * ($monthIntrerest/100+1));
        }
        
        $symbol;
        switch ($curr) {
          case "USD":
            $symbol = '$';
            break;
          case "EUR":
            $symbol = '&#8364';
            break;
          case "BGN":
            $symbol = 'BGN';
            break;
          default:
            echo "Ни мъ хаквай";
            }
        
        $res=number_format($total,2,'.','');
        
        echo "$symbol $res";
                   
       
    }
?>
    
    </body>
</html>
