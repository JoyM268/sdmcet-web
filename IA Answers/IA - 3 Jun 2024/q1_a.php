<!-- 
    Write an HTML markup to create a web page that allows users to select three of your favourite computer science subjects using checkboxes.
    When the user submits their choices, a php script will process the selection and display the choosen subjects in tabular format.
-->
<?php
    if(!isset($_POST["chk"])){
        echo "No subjects were selected";
    }else{
        $subjects = $_POST["chk"];
        $str = "<table border='1px'><tr><th>Subjects</th></tr>";
        foreach($subjects as $subject){
            $str .= "<tr><td>".$subject."</td></tr>";
        }
        $str .= "</table>";
        echo $str;       
    }
?>