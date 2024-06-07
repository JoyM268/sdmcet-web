<?php
    $text = $_GET['q'];
    $url = "localhost";
    $usr = "root";
    $pass = "";
    $database = "data";

    $conn = new mysqli($url, $usr, $pass, $database);
    if($conn->connect_error){
        echo "Failed: ".$conn->connect_error;
    }
    
    $sql = "select * from data1 where Name like '$text%'";
    $result = $conn->query($sql);

    if($result->num_rows == 0){
        echo "Not Found";
    }else{
        echo "<table border='1px'>";
        echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>ID</th>";
        echo "</tr>";
        while($array = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>".$array['Name']."</td>";
            echo "<td>".$array['ID']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    $conn->close();
?>