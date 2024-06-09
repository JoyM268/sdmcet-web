<?php
    $n1 = 110;
    $n2 = 20;
    $result = addNumbers($n1, $n2);

    $Str = "Computer Science and Engineering";
    $strlen = str_computeLen($Str);
    echo "Addition of two numbers using return stmt: " . $result . "<br/>";
    echo "The length of the String is: " . $strlen . "<br/>";


    function addNumbers($x, $y)
    {
        return $x + $y;
    }

    function str_computeLen($s)
    {
        return strlen($s);
    }
?>