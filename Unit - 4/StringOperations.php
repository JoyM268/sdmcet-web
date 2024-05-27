<?php
    $str1 = $_POST['txtstr1'];
    $str2 = $_POST['txtstr2'];

    //compute string length
    $sLen1 = strlen($str1);
    $sLen2 = strlen($str2);

    $sConcat = $str1.$str2;

    echo "The length of the string $str1 is: $sLen1<br/>The length of the string $str2 is: $sLen2<br/>";
    echo "The concatenation of the string $str1 and $str2 is: $sConcat<br/>";
    echo "<a href=\"StringOpHTMLJSPHP.html\">Back</a><br/>"
?>