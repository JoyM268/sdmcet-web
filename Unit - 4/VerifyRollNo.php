<!DOCTYPE html>
<html lang="en">
<head>
    <title>Web page to check data</title>
</head>
<body>
    <form method="post" action="VerifyRollNo.php">
        <center>
            <h3>Verify Student Roll Number:</h3>
            <label>Enter the student roll number</label>
            <input type="text" name="txtrollnum">
            <input type="submit" value="Verify" name="btnsubmit">
        </center>
    </form>
</body>
</html>
<?php
    if (isset($_POST['btnsubmit'])) {
        //collect the form data
        $flag = null;
        $rollno = $_POST['txtrollnum'];
        $studentRollno = [111, 222, 333, 444];
        for ($i = 0; $i < count($studentRollno); $i++) {
            if ($studentRollno[$i] == $rollno) {
                echo "Roll number exist";
                exit();
            }
        }
        echo "Roll number does not exist";
    }
?>