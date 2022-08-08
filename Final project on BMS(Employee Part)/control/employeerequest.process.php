<?php

@include("../model/db.php");

$mydb = new db();
$myconn = $mydb->openConn();
$result = $mydb -> retrive_applicant_info_for_employee("registrationofemployee", $myconn);

if($result == true)
{
    foreach($result as $row)
    {
        $id = $row['id'];
        echo '<tr>

        <td>'.$row['id'].'</td>
        <td>'.$row['fname'].'</td>
        <td>'.$row['lname'].'</td>
        <td>'.$row['Username'].'</td>
        <td>'.$row['Email'].'</td>
        <td>'.$row['NID'].'</td>
        <td>'.$row['Phone'].'</td>
        <td>'.$row['Password'].'</td>
        <td><img src="../uploads/'.$row['picture']. '" width="100px" height="100px"></td>
        <td><a id="info" href="../uploads/'.$row['cv']. '">View</a></td>

        
        //<td>
        //     <a class="accept" href="../control/EditedEmployee.php?addingid='.$id.'">Accept</a> <br><br><br>
        //     <a class="reject" href="../control/applicantdelete.php?deleteid='.$id.'">Reject</a>
        // </td>

        </tr>';
    }
}


?>