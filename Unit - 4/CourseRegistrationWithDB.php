<?php
    //Establish connection with server
    $connection = mysqli_connect('localhost','root','','CourseRegDB');

    // //Selecting the DataBase
    // $selectdb = mysql_select_db("studentdb",$connection);


    if($_POST["ddlCRUDOp"]=="Create/Insert")
    {
            //Collection of web page data
            $courseVal = null;
            $stName = $_POST["txtname"];
            $stUSN = $_POST["ddl_usn"];
            if(isset($_POST["rddivision"]))
                $stDiv = $_POST["rddivision"];       
            if($_POST["chkcourses"]!=null)
                $stCourse = $_POST["chkcourses"];
            $regDate = $_POST["dtregistration"];

            foreach ($stCourse as $course) {
                $courseVal .= $course .",";
            }
        $sqlquery = "INSERT into tbl_Registration(St_Name, St_USN, St_Div, St_Courses, St_Registration) 
        values('$stName','$stUSN','$stDiv','$courseVal','$regDate')" or die(mysql_error());
    
            //Execute SQL Statements
            $exequery = mysqli_query($connection, $sqlquery);
            if($exequery)
            {
                echo "<span style=\"color:Red\"><p><b><center>New Record created sucessfully</center></b></p></span>"."<br/>";
                echo "<center><a href=\"CourseRegistrationWithDB.html\">&lt-Back</a></center>";
            }
            else
            {
                echo "Exception!!! not able to execute query";
            }

            mysqli_close($connection);	
    }
    else if($_POST["ddlCRUDOp"]=="Read/Display")
    {
        $stUSN = $_POST["ddl_usn"];
            //prepare SQL statements
            $selectquery = "SELECT * FROM tbl_Registration where St_USN='".$stUSN."'";

            //execute SQL query
            $exequery = mysqli_query($connection, $selectquery) or die(mysql_error());
            //print_r($exequery);
            if($exequery)
            {
                echo "<table border=\"1\">
                        <tr>
                            <th>Student Name</th>
                            <th>USN</th>
                            <th>Division</th>
                            <th>Courses</th>
                            <th>Registration Date</th>
                        </tr>";
                while($row = mysqli_fetch_array($exequery))
                {
                    echo "<tr>";
                    echo "<td>".$row['St_Name']."</td>";
                    echo "<td>".$row['St_USN']."</td>";
                    echo "<td>".$row['St_Div']."</td>";
                    echo "<td>".$row['St_Courses']."</td>";
                    echo "<td>".$row['St_Registration']."</td>";
                    echo "</tr>";
                }
                echo "<tr><td colspan=\"5\" align=\"center\"><a href=\"CourseRegistrationWithDB.html\">&lt-Back</a></td></tr></table>";
            }
            else{
                echo "<span style=\"color:Red\"><p><b><center>Record not found!!!! Try with some other input</center></b></p></span>"."<br/>";
                echo "<center><a href=\"CourseRegistrationWithDB.html\">&lt-Back</a></center>";
                mysqli_close($connection);
        }
    }
    else if($_POST["ddlCRUDOp"]=="Update")
    {
        //Collection of web page data
        $courseVal = null;
        $stName = $_POST["txtname"];
        $stUSN = $_POST["ddl_usn"];
        if(isset($_POST["rddivision"]))
            $stDiv = $_POST["rddivision"];       
        if($_POST["chkcourses"]!=null)
            $stCourse = $_POST["chkcourses"];
        $regDate = $_POST["dtregistration"];

        foreach ($stCourse as $course) {
            $courseVal .= $course .",";
        }
        //Prepare SQL query
        $updatequery = "UPDATE tbl_Registration SET St_Name='$stName',St_Div='$stDiv',St_Courses='$courseVal',St_Registration='$regDate' WHERE St_USN='$stUSN'";
        
        //execute SQL query
        $exeupdatequery = mysqli_query($connection, $updatequery) or die(mysql_error());


        if($exeupdatequery)
        {
            echo "<span style=\"color:Red\"><p><b><center>Record updated sucessfully</center></b></p></span>"."<br/>";
            echo "<center><a href=\"CourseRegistrationWithDB.html\">&lt-Back</a></center>";
        }
        else
        {
            echo "Excpetion!! not able to execute SQL query";
        }
        mysqli_close($connection);
    }
    else if($_POST["ddlCRUDOp"]=="Delete")
    {
        $stUSN = $_POST["ddl_usn"];
        //Prepared statements
        $deleteQuery = "DELETE from tbl_Registration WHERE St_USN='$stUSN'";
        
        //execute Query
        $exedeletequery = mysqli_query($connection, $deleteQuery) or die(mysql_error());

        if($exedeletequery)
        {
            echo "<span style=\"color:Red\"><p><b><center>Record Deleted sucessfully</center></b></p></span>"."<br/>";
            echo "<center><a href=\"CourseRegistrationWithDB.html\">&lt-Back</a></center>";
        }
        else
        {
            echo "Exception!!!, Record not deleted";
        }
    mysqli_close($connection);
    }
?>