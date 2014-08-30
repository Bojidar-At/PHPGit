<!DOCTYPE >
<html>
    <head>
        <title>
            Problem 1.  Word Mapping
        </title>
        <meta name="description" content="Write a PHP program WordMapper.php that takes a text from a textarea and prints each word and the number of times it occurs in the text. The search should be case-insensitive. The result should be printed as an HTML table."/>
        <style>
            td{
            border: 1px solid black;
            padding: 5px;
            background: linear-gradient(to bottom right, orange , tomato);
            }
            table{
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <form method="post">
            <textarea rows="4" cols="50" name="str"></textarea>
            <input type="submit" name="submit" />
        </form>
<?php
if(isset($_POST['str'])){
    $str=htmlentities($_POST['str']);
    $paternt = '/\w+/';
    
    $words = preg_split('/\W+/', strtolower($str), -1, PREG_SPLIT_NO_EMPTY);
    $wordMap = [];
    
     
    foreach ($words as $word) {
        if (isset($wordMap[$word])) {
            $wordMap[$word]++;
        } else {
            $wordMap[$word] = 1;
        }
    }
    arsort($wordMap);    
}
?>

        <table>        
        <?php foreach ($wordMap as $word => $count) : ?>
            <tr>
                <td><?=$word?></td>
                <td><?=$count?></td>
            </tr>
        <?php endforeach; ?>
    </table>  
    </body>
</html>