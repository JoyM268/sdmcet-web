<?php
    $assocObj = array("College" => "SDM", "Code" => "250", "Location" => "Dharwad");
    $Ecode_obj = json_encode($assocObj);
    echo $Ecode_obj;

    echo "<br>JSON object decode format<br>";
    var_dump(json_decode($Ecode_obj));
    echo "<br>Encoded json object data<br>";
    var_dump(json_encode($Ecode_obj));

    echo "<br/><hr>";
    echo "Multidimensional array";
    $empData = array(
        'person' => array(
            'name' => 'Vikas hegde',
            'age' => 30,
            'address' => array(
                'city' => 'Davanagere',
                'country' => 'India'
            ),
        ),

        'company' => array(
            'name' => 'ABC Corporation',
            'designation' => 'Project Manager'
        )
    );
    
    $jsonString = json_encode($empData);
    var_dump($jsonString);
    echo "<br><br>";
    $D_empDataj = json_decode($jsonString, true);
    var_dump($D_empDataj);
    echo "<br><br>";
    $D_empDataj['company']['designation'] = 'Tech Lead';
    var_dump($D_empDataj);
    echo "<hr>";

    $jsonUserData = '{"name": "Nishanth", "age": 30, "city": "Udupi"}';
    $userDataArray = json_decode($jsonUserData, true);
    $userDataArray['age'] += 1;
    $userDataArray['city'] ='Sirsi';
    var_dump($userDataArray);
    echo "<br/>Updated age value: ".$userDataArray['age'];
?>