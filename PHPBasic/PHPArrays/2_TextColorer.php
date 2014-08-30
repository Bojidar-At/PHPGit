<!DOCTYPE >
<html>
    <head>
        <title>
            Problem 2.  Coloring Texts
        </title>
        <meta name="description" content="Write a PHP program TextColorer.php that takes a text from a textfield, colors each character according to its ASCII value and prints the result. If the ASCII value of a character is odd, the character should be printed in blue. If it’s even, it should be printed in red."/>
        <style>
            .red {
            color: red;
            }
            .blue {
                color: blue;
            }
        </style>
    </head>
    <body>
        <form method="post">
            <textarea rows="4" cols="50" name="str"></textarea>
            <input type="submit" name="submit" value="Color text"/>
        </form>
<?php
if(isset($_POST['str'])){
    $str=($_POST['str']);
    for ($i = 0; $i < strlen($str); $i++) {
            if (ord($str[$i]) % 2 == 0) {
                echo "<span class='red'>$str[$i]</span>";
            } else {
                echo "<span class='blue'>$str[$i]</span>";
            }
        }
}
?>
    </body>
</html>