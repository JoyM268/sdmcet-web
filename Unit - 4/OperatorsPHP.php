<?php
    //Program to demonstrate use of operators, arrays and loops in PHP
    // $n1 = 2;
    // $n2 = 2;
    $n1 = $n2 = 3;
    echo "Exponential value of $n1, $n2 is: ". $n1 ** $n2;

    $x = "120";
    $y = 120;
    echo "<hr>";
    echo "Equal operator<br/>";
    //If == it will give output as equal but === will give not equal
    if($x === $y)
        echo "Variable values are equal.";
    else
        echo "Variable values are not equal.";

    echo "<hr>";
    echo "Plus operator in PHP<br/>";
    $p = 30;
    $r = 40;
    $q = 50;
    echo "Sum of three values: ".$p + $r + $q."<br/>";
    echo "Multiplication of three values: ".$p * $r * $q."<br/>";

    //Declaration of arrays in PHP
    echo "<hr>";
    echo "Arrays in PHP<br/>";
    $Num_Array = array(10, 20, 30, 40);
    print_r($Num_Array);

    //Iterate using foreach
    echo "<br/>Using foreach loop<br/>";
    foreach($Num_Array as $arrValue){
        echo $arrValue."<br/>";
    }

    //Iterate using for loop
    echo "<br/>Using for loop<br/>";
    for($i = 0; $i < count($Num_Array); $i++){
        echo $Num_Array[$i]."<br/>";
    }
?>