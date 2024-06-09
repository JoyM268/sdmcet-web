<?php
// Reading textbox values
$vehicleNum = $_GET['VehicleRegVal'];
$btnsubmit = $_GET['btnsubmit'];

// Establishing Connection with Server..
$connection = mysqli_connect("localhost", "root", "");

// Selecting Database
$db = mysqli_select_db($connection, "vehicledb");

if (isset($btnsubmit)) {
    //Selecting row Query
    $sql = "SELECT * FROM TwoWheeler WHERE Reg_Number='" . $vehicleNum . "'";

    $query = mysqli_query($connection, $sql) or die(mysql_error());

    if (mysqli_num_rows($query) > 0) {
        //Display tableData in tabular format
        echo "<h1>Vehicle DETAILS<h1>";
        echo "<table border=\"1\">
			<tr>
			<th>Registration Number</th>
			<th>Customer Name</th>
			<th>Address</th>
			<th>Phone Number</th>
			</tr>";
        while ($row = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>" . $row['Reg_Number'] . "</td>";
            echo "<td>" . $row['Customer_Name'] . "</td>";
            echo "<td>" . $row['Address'] . "</td>";
            echo "<td>" . $row['Phone_Number'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "something went wrong....!!!!!!!!!";
    }
    
    // Connection Closed
    mysqli_close($connection);
} else {
    echo "Error!!!! Problem in executing SQL query.....";
}
?>