<?php
/* Consider the following JSON data format stored in a StudentsInfo.json file. Write a PHP script to develop a web page that converts 
the below given object data into a readable script to develop a web page that converts the below given object data into a readable format
and displays it with the help of an ordered list of HTML elements.
{
    "Students":
    [
        {
            "Roll_No": 111,
            "Name": "Jumaane",
            "CGPA": 9.12
        },
        {
            "Roll_No": 222,
            "Name": "John",
            "CGPA": 7.23
        }
    ]
}
*/
    $json = file_get_contents("StudentsInfo.json");
    $jsonArray = json_decode($json, true);
    $str = "<ol>";
    foreach($jsonArray["Students"] as $student){
        $str .= "<li>".$student["Roll_No"]."</li>";
        $str .= $student["Name"]."<br>";
        $str .= $student["CGPA"]."<br><br>";
    }
    $str .= "</ol>";
    echo $str;
?>