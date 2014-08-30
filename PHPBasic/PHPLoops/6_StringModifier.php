<!DOCTYPE >
<html>
    <head>
        <title>Problem 6.   Modify String</title>
        <meta name="description" content="Write a PHP script StringModifier.php which receives a string from an input form and modifies it according to the selected option (radio button). You should support the following operations: palindrome check, reverse string, split to extract leters only, hash the string with the default PHP hashing algorithm, shuffle the string characters randomly. The result should be displayed right under the input field. Styling the page is optional. Think about which of the modification can be achieved with already built-in functions in PHP. Where necessary, write your own algorithms to modify the given string. Hint: Use the crypt() function for the \"Hash String\" modification."/>         
    </head>
    <body>
        <form method="post">            
            <input type="text" name="string" /><br />
            <input type="radio" name="choice" value="palindrome"/>Check Palindrome<br />
            <input type="radio" name="choice" value="reverse"/>Reverse String<br />
            <input type="radio" name="choice" value="split"/>Split<br />
            <input type="radio" name="choice" value="hash"/>Hash String<br />
            <input type="radio" name="choice" value="shuffle"/>Shuffle String<br />
            <input type="submit" name="submit" />
        </form>
 <?php
 if(isset($_POST['string'])){
     $str=$_POST['string'];
     $choise = $_POST['choice'];
    
    switch ($choise) {
        case 'palindrome': is_palindrome($str);            
            break;
        
        case 'reverse': echo strrev($str);            
            break;
        
        case 'split': splitString($str);            
            break;
        
        case 'hash': echo crypt($str);            
            break;
        
        case 'shuffle': echo str_shuffle($str);            
            break;
        
        default: echo "Трябва да направиш своя Избор!";            
            break;
    }
 }

function is_palindrome($string){
    if ($string == strrev($string)){
        echo "$string is a palindrome!";   
    }
    else {
        echo "$string is NOT a palindrome.";  
    }
}
function splitString($string){
    $keywords = str_split("$string");
    foreach ($keywords as $key => $value) {
        if($value!=""){
            echo "$value ";
        }
    }
}

 ?>
 
    </body>
</html>