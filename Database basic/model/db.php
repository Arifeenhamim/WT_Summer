<?php

class db
{

function openCon()
{


$servername="localhost";
$username="root";
$password="";
$dbname="secl";

$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error)
 {
    echo "error conneting data base";
}

return $conn;

}



    function insertUser($FirstName,$Lastname,$Age,$Email,$Password,$table,$conn)
    {
 $sqlstr="INSERT INTO $table (FirstName,Lastname,Age,Email,Password)
 VALUES ('$FirstName','$Lastname','$Age','$Email','$Password')";

if ($conn->query($sqlstr)) 
{ 
    echo "Data insert";
    } else 
    {
    echo "Error creating database: " .$conn->error;
    } 
    }
}
?>