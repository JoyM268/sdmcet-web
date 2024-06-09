<?php
    $arr_numbers = [111, 222, 333];
    echo "Array elements are :<br/>";
    for ($i = 0; $i < count($arr_numbers); $i++) {
        echo $arr_numbers[$i] . "<br/>";
    }
    echo "Using foreach looping statement<br/>";
    foreach ($arr_numbers as $arrElement) {
        echo $arrElement . "<br/>";
    }

    print_r($arr_numbers);

    echo "<hr><br/>";
    echo "Associative arrays in PHP :<br/>";
    $assoc_arr = ["collegeName" => "SDMCET", "collegeCode" => "2SD", "Address" => "Dharwad"];
    print_r($assoc_arr);
    echo "<br/>";
    foreach ($assoc_arr as $x => $y) {
        echo $x . "<br/>";
    }

    echo "<hr><br/>";
    echo "Multidimensional Arrays in PHP<br/>";

    $Multi_dimAray = array(array(11, 22, 33), array('s', 'd', 'm'), array("sdm", "cet", "dwd"));
    print_r($Multi_dimAray);
    echo "<br/>";
    for ($row = 0; $row < count($Multi_dimAray); $row++)
        for ($col = 0; $col < count($Multi_dimAray); $col++)
            echo $Multi_dimAray[$row][$col] . "<br/>";
    echo "<hr><br/>";
    echo "Built-in functions in Arrays:<br/>";
    print_r(array_keys($assoc_arr));

    echo "Reversing the array elements:<br/>";

    print_r(array_reverse($arr_numbers));

    $str = "hublidharwad";
    echo "String length: " . strrev($str);

    $s1 = null;
    if (empty($s1))
        echo "true";
    else
        echo "false";

    echo "<br/><br/>";
?>