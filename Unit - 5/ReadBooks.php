<?php
    $booksData = file_get_contents("sdmlibrary.json");
    $DcodeBooks = json_decode($booksData, true);
    $output ="<ul>";
    foreach($DcodeBooks['Books'] as $book){
        $output .= "<h3>".$book["Title"]."</h3>";
        $output .= "<li>".$book["Author"]."</li>";
        $output .= "<li>".$book["price"]."</li>";
    }
    $output.="</ul>";
    echo $output;
?>