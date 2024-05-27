<!DOCTYPE html>
<html lang="en">
<head>
    <title>Math Operations</title>
</head>
<body>
    <form method="post" action="#">
        <fieldset>
            <legend>Web enabled Math Operations</legend>
            <table>
                <tr>
                    <td>
                        <label>Enter the First Number:</label>
                    </td>
                    <td>
                        <input type="text" name="txtN1">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Enter the Second Number:</label>
                    </td>
                    <td>
                        <input type="text" name="txtN2">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="btnSubmit" value="Submit">
                    </td>
                </tr>
            </table>
        </fieldset>    
    </form>
</body>
<?php
    if(isset($_POST['btnSubmit'])){
        $n1 = $_POST['txtN1'];
        $n2 = $_POST['txtN2'];

        //Computational part
        $result = $n1 ** $n2;
    
        //print the result
        echo "The exponential value of $n1 and $n2 is: $result";
    }
?>
</html>