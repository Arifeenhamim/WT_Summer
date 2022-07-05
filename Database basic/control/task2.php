<?php
include( "../model/db.php");

$nameErr="";
$name2Err="";
$ageErr="";

if (isset($_POST['Submit']))


{
    $FirsName = $_REQUEST['FirstName'];

        if (empty($FirsName)) 
    {
        
        $nameErr='Please Enter a valid First Name';
    
    }
    elseif (is_numeric($FirsName))
    {
        $nameErr=' First Name cant be number ';
    }

         else 
    {
     
      
        echo 'Your First Name is ' . $FirsName;
      
    }
    

    echo '<br>';

        $LastName = $_REQUEST['LastName'];
        if (empty($LastName)) 
    {
       
        echo 'Please Enter a valid Last Name';
        
    } 
    
    elseif (is_numeric($LastName))
    {
        $name2Err=' Last Name cant be number ';
    }

    else
    {
        $name2Err='Your Last Name is ' . $LastName;
    }

    echo '<br>';

    $Age = $_REQUEST['Age'];

        if ($Age == '') 
    {
        $ageErr= 'Please Enter your Age ';

    } else 
    {
        echo 'Your Age is ' . $Age;
    }

    echo '<br>';
    /*
    if (
        isset($_POST['Desgination1']) ||    // null kina  isset check kore radio button r error
        isset($_POST['Desgination2']) ||
        isset($_POST['Desgination3'])) 
        {
        if (isset($_POST['Desgination1'])) {
            echo 'Your Have Selected Junior Programmer ';
            echo '<br>';
        }
        if (isset($_POST['Desgination2'])) {
            echo 'Your Have Selected Senior Programmer';
            echo '<br>';
        }
        if (isset($_POST['Desgination3'])) {
            echo 'Your Have Selected Project Lead';
            echo '<br>';
        }
    } else {
        echo 'You Have not selected anything';
    }

    echo '<br>';

    
    if (
        isset($_POST['PreferredLanguage1']) ||
        isset($_POST['PreferredLanguage2']) ||
        isset($_POST['PreferredLanguage3'])) {
        if (isset($_POST['PreferredLanguage1'])) {
            echo 'Your Have Selected JAVA ';
            echo '<br>';
        }

        if (isset($_POST['PreferredLanguage2'])) {
            echo 'Your Have Selected PHP';
            echo '<br>';
        }
        if (isset($_POST['PreferredLanguage3'])) {
            echo 'Your Have Selected C++';
            echo '<br>';
        }
    } 
    else {
        echo 'You Have not Selected a checkbox';
        echo '<br>';
    }*/

    $Email = $_POST['Email'];
    if (
        empty($Email) ||
        !preg_match(
            '/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            $Email
        )
    ) {
        echo 'Invalid email';
        echo '<br>';
    } else 
    {
        echo 'Your email is ' . $Email . '<br>';
    }

    $Password = $_REQUEST['Password'];
    if (strlen($Password) < 8) {
        echo 'Enter a valid password';
    } else
     {
        echo 'password is valid';
    }


    echo $_FILES["myfile"]["name"];
    if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../uploads/".$_FILES["myfile"]["name"]))
    {
        echo "File Uploaded";
    }

  else {
      echo "uploading error";
echo $_FILES["myfile"]["error"];


  }

  $mydb = new db();
  $myconn=$mydb->openCon();

  $mydb->insertUser($FirsName,$LastName,$Age,$Email,$Password,"user",$myconn);
}

?>