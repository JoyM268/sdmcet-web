<?php
$programs = array("PHP programming", "Java programming", "C# programming", "P programming", "HTML Markup");
$name = $_GET["name"];
if (strlen($name) > 0) {
    $match = "";
    for ($i = 0; $i < count($programs); $i++) {
        if (strtolower($name) == strtolower(substr($programs[$i], 0, strlen($name)))) {
            if ($match == "") {
                $match = $programs[$i];
            } else {
                $match = $match . " , " . $programs[$i];
            }
        }
    }
}
echo ($match == "") ? 'no match found' : $match;
?>