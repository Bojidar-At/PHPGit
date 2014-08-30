<?php
$text = $_GET['text'];
$hashValue = $_GET['hashValue'];
$fontSize = $_GET['fontSize'];
$fontStyle = $_GET['fontStyle'];

$cssStyle = "font-size:$fontSize;";
if($fontStyle == 'bold'){
    $cssStyle .='font-weight:bold;';
}
else if(($fontStyle == 'italic')||($fontStyle == 'normal')){
    $cssStyle.="font-style:$fontStyle;";
}

$encrypted = encryptText ($text, $hashValue);

echo "<p style=\"$cssStyle\">$encrypted</p> ";


function encryptText ($text, $hashValue){
    $result = '';
    for ($i=0; $i < strlen($text) ; $i++) { 
        $ch=$text[$i];
        
        if($i%2==0){
            $ch = chr(ord($ch) + $hashValue);
        }
        else{
            $ch = chr(ord($ch) - $hashValue);
        }
        $result .= $ch;       
    }
    return $result;
}

?>