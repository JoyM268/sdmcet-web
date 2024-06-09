<?php
    $usrName = $_POST["txtusername"];
    $usrPwd = $_POST["txtpassword"];
    
    //Establish connection with server
    $connection = mysqli_connect('localhost','root','','logindb');
    //Prepare SQL query
    $query = "SELECT username, password FROM authentication where username = '$usrName' and password = '$usrPwd'";
    
    $result = mysqli_query($connection, $query);
    $data = mysqli_fetch_array($result);  
    $rowcount = mysqli_num_rows($result);  
    if($rowcount == 1){
        header("location: CourseRegistrationWithDB.html");
        
    }
    else{
        echo "Verify user name and password!!!!<br/><a href=\"Login.html\">BACK</a>";
    }
?>