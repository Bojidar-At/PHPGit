<?php
    $text = $_GET['text'];
    $key = $_GET['key'];
       
    $paternKey = $key[0];
       
    if(!ctype_digit($key[0]) && !ctype_alpha($key[0])){
        $paternKey = '\\'.$key[0];
    } 
    
    for ($i=1; $i < strlen($key) -1; $i++) { 
        if(ctype_digit($key[$i])){
            $paternKey .='\d*';
        }
        elseif (ctype_lower($key[$i])) {
            $paternKey .='[a-z]*';
        }
        elseif (ctype_upper($key[$i])) {
            $paternKey .='[A-Z]*';
        } else{
            $paternKey .= '\\'.$key[$i];
        }
    }
    
     if(!ctype_digit($key[strlen($key)-1]) && !ctype_alpha($key[strlen($key)-1])){
        $paternKey .= '\\'.$key[strlen($key)-1];
    } 
    
    $paternKey .= $key[strlen($key)-1];
    
    $pattern = '/'. $paternKey. '(.{2,6})'. $paternKey. '/';
    
    preg_match_all($pattern, $text, $matches);
    
    $addres = implode('', $matches[1]);    
    
    echo "$addres";
    
?>