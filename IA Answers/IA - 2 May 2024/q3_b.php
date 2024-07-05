<?php
    /* Write a PHP script to read and display the following details using variables in a tabular format with the proper heading:
    i) College Name
    ii) College Code
    iii) Total Intake
    iv) Number of UG courses
    v) College Address 
    */

    $name = "SDMCET";
    $code = "2SD";
    $intake = 120;
    $ugCourses = 5;
    $address = "Dharwad";

    echo "<table border='1px'>
            <tr>
                <th>College Name</th>
                <th>College Code</th>
                <th>Total Intake</th>
                <th>Number of UG Courses</th>
                <th>College Address</th>
            </tr>
            <tr>
                <td>$name</td>
                <td>$code</td>
                <td>$intake</td>
                <td>$ugCourses</td>
                <td>$address</td>
            </tr>
        </table>";
?>