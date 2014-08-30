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
        
        <title>Problem 2.    Rich People’s Problems</title>
        <meta name="description" content="You are a very rich billionaire with an unhidden passion for cars. You like certain car manufacturers but you don’t really care about anything else, and that’s why you need your own randomizing algorithm that helps you decide how many and what color cars you should buy. Write a PHP script CarRandomizer.php that receives a string of cars from an input HTML form, separated by a comma and space (“, “). It then prints each car, a random color and a random quantity in a table like the one shown below. Use colors by your choice. Use as quantity a random number in range [1...5].">
    </head>
    <body>
        
        <form method="post">
            Enter cars<input type="text" name="cars" />
            <input type="submit" name="submit" value="Show result" />
        </form>
       
       <?php
       if(isset($_POST['cars'])){
           $cars = $_POST['cars'];
           $carList = preg_split('/[ ,;]+/', $cars);          
       }
       $color = ['white', 'black', 'purple', 'blue', 'red', 'green'];              
       ?>
              
        <table>
            <tr><th>Car</th><th>Color</th><th>Count</th></tr>
           <?php
           foreach ($carList as $carName):   
           $count = rand(1, 5); 
           $random_keys=array_rand($color)           
           ?>
            
            <tr><td><?=$carName?></td>
                <td><?=$color[$random_keys]?></td>
                <td><?=$count?></td>
            </tr>
             
            <?php endforeach ?>
         </table>
    </body>
</html>