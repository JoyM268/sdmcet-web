<?php
    //Collect form data
    $ddlValue = null;
    $rdbtnValue = null;
    $chkValue = null;
    $chkSelectedValue = null;
    $dtValue = null;
    if(isset($_POST['dd1eventsname']))
        $ddlValue = $_POST['dd1eventsname'];

    if(isset($_POST['rdfees']))
        $rdbtnValue = $_POST['rdfees'];

    if(isset($_POST['chkevents']))
        $chkValue = $_POST['chkevents'];

    foreach($chkValue as $chk){
        $chkSelectedValue .= $chk."<br/>";
    }

    $dtValue = $_POST['eventDate'];

    echo "<table border=\"1px\">
            <tr>
                <th>Event Name</th>
                <th>Fees Paid</th>
                <th>Event Type</th>
                <th>Event Date</th>
            </tr>
            <tr>
                <td>$ddlValue</td>
                <td>$rdbtnValue</td>
                <td>$chkSelectedValue</td>
                <td>$dtValue</td>
            </tr>
        </table><a href=\"InsigniaRegistrationDesk.html\">BACK</a>";
?>