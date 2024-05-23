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
    echo "<hr>";

    //Multidimensional arrays in PHP
    echo "Multidimensional arrays in PHP<br/>";
    $Mul_array = array(array(11, 22, 33, 44), array("sdm", "sdmit", "sdmh", "sdmc"), array('s', 'd', 'm', 'c'));
    echo "The output of the array is: ".$Mul_array[2][2]."<br/>";
    print_r($Mul_array);
    echo "<br/>";

    //Printing multidimensional array using for loop
    for($row = 0; $row < count($Mul_array); $row++){
        for($col = 0; $col < count($Mul_array[$row]); $col++)
            echo $Mul_array[$row][$col]." ";
        echo "<br>";
    }
    echo "<hr>";
    //Associative arrays in PHP
    echo "Associative arrays in PHP:<br/>";
    $assoc_arrObj = ["Name" => "SDMCET", "CollegeCode" => "2SD", "Intake" => "160"];
    foreach ($assoc_arrObj as $k => $v){
        echo $k.": ".$v."<br/>";
    }
    echo "<hr>";
    echo "Built-in functions in PHP<br/>";
    //Returns array of keys
    print_r(array_keys($assoc_arrObj));

    echo"<br/>";
    //returns merged array
    print_r(array_merge($Num_Array, $assoc_arrObj));

    //Add element in array and returns the length of array
    array_push($Num_Array, 50);
    echo "<br/>After pushing new element: ";
    foreach ($Num_Array as $val) {
        echo $val." ";
    }

    //Pops element from array and returns the popped element
    echo "<br>After poping array element: ";
    print_r(array_pop($Num_Array));
    echo "<br/>";
    print_r($Num_Array);

    //Returns sum of all elements
    echo "<br>Sum of all elements in array is: ".array_sum($Num_Array);

    //Returns a reversed array
    echo "<br>Array in reverse order: ";
    print_r(array_reverse($Num_Array));
    
?>