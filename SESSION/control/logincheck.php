<?php

if(isset($_POST["submit"])){
if(isset($_POST['username'])){


$existingdata = file_get_contents('../data1/data.json');
$tempJSONdata = json_decode($existingdata);

$formdata = array(
    'username' => $_POST['username'],
    'password' => $_POST['password']
);
}
$tempJSONdata[] =$formdata;
$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
if(file_put_contents('../data1/data.json',$jsondata))
{
    echo 'Data Successfully Saved';
}
else
echo 'No Data Saved';

$data = file_get_contents('../data1/data.json');
$mydata = json_decode($data);

/*
foreach($mydata as $myobject)
     {
     foreach($myobject as $key=>$value)
    {
        echo $key." => ".$value."<br>";
    }
    } */


session_start(); 

 $error="";

// store session data
if (isset($_REQUEST['submit'])) // submit press tah check korte se mane the the variable exists and is no

{
if (empty($_REQUEST['username']) || empty($_REQUEST['password']))
 {
$error = "invalid username/password...";
}
else
{

$_SESSION["username"] = $_REQUEST['username'];
$_SESSION["password"] = $_REQUEST['password'];

   }
 
}
}

?>