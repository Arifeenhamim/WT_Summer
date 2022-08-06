<?php

@include("../model/db.php");

$mydb = new db();
$myconn = $mydb -> openConn();

$fname = "";
$lname = "";
$Username= "";
$Email = "";
$NID = "";
$Phone = "";
$Password = "";
$cpassword
$picture = "";
$cv = "";

if(isset($_POST["search"]))
{
    $mydb = new db();
$myconn = $mydb -> openConn();
$username= $_POST["uname"];
$results = $mydb->searchUserbyUsername($username,"manager",$myconn);

if($results->num_rows>0)
    {
        while($myrow=$results->fetch_assoc())
{
    $fname = $myrow["fname"];
    $lname = $myrow["lname"];
    $Username = $myrow["uname"];
    $Email = $myrow["email"];
    $NID = $myrow["nid"];
    $Phone = $myrow["phone"];
    $Password = $myrow["password"];
    $cpassword = $myrow["cpassword"];
    $picture = $myrow["picture"]["name"];
    $cv = $myrow["cv"]["name"];

}


}
}
if(isset($_POST["update"]))
{
$mydb = new db();
$myconn = $mydb -> openConn();
$results = $mydb->updateProfile($_POST["fname"],$_POST["lname"],$_POST["gender"],$_POST["age"],$_POST["fathername"],$_POST["mothername"],$_POST["username"],$_POST["pass"],$_POST["email"],$_POST["address"],$_POST["nid"],$_POST["phone"],$_POST["salary"],"manager",$myconn);
if($results===TRUE)
{
echo "Updated";
}
else{
echo "Can't Update". $myconn->error;
}    
}


?>
