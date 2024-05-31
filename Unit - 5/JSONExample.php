<?php
    $assocObj = array("College" => "SDM", "Code" => "250", "Location" => "Dharwad");
    $Ecode_obj = json_encode($assocObj);
    echo $Ecode_obj;

    echo "<br>JSON object decode format<br>";
    var_dump(json_decode($Ecode_obj));
    echo "<br>Encoded json object data<br>";
    var_dump(json_encode($Ecode_obj))
?>