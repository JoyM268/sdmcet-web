<?php
    //Program to demonstrate user defined functions in PHP
    $str1 = "sdm";
    $str2 = "cet";
    $n1 = $n2 = 40;

    //Without Paremeter
    function greetUser(){
        echo "Welcome to functions in PHP<br/>";
    }
    

    //With String parameter 
    function concatStrings($s1, $s2){
        echo "Concatenate strings: ".$s1.$s2."<br/>";
        echo "Length of the first string: ".strlen($s1)."<br/>";
        echo "Length of the second string: ".strlen($s2)."<br/>";
    }

    //With integer parameter
    function exponentialValue($x, $y){
        return $x ** $y;
    }

    greetUser();
    concatStrings($str1, $str2);
    $exp = exponentialValue($n1, $n2);
    echo "Exponential result is: ".$exp;
?>