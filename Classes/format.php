<?php

class Format{

    public function name($str){ // Method to format fname,mname      
        return ucfirst(stripslashes(strip_tags($str)));     
    }
 
    public function formatPost($str){ // Method to add slash and trim input value
        return addslashes(htmlspecialchars(trim($str)));
    }

    public function decimalFormat($num){ // Method to remove trailing decimals
        return is_numeric($num) ? $num = $num * 1 : $num;
    }

    public function formatLongText($value){ //Method to format Duplicate text
        return strtoupper(trim(preg_replace('/[^a-zA-Z0-9]/s','',$value)));
    }

    public function removeSlash($str){ // Method to remove slash when calling value for DB
        return stripslashes($str);
    }


}


?>