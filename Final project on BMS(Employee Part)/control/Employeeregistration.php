<?php

$fnameerr = "";
$lnameerr = "";
$UsernameErr = "";
$UsernameErr1 = "";
$Emailerr = "";
$NIDErr = "";
$NIDErr1 = "";
$Phoneerr = "";
$Passworderr = "";
$Passworderr1 = "";
$Passworderr2 = "";
$Passworderr3 = "";
$filepath = "";
$imgpath = "";
$fileerr = "";
$fileerr1 = "";
$imageerr = "";
$imageerr1 = "";
$signuperr = "";


@include("../model/db.php");

$uppercase = $lowercase = $number = $specialchars = "";

if(isset($_POST["submit"]))
{
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $Username = $_POST["uname"];
    $Email = $_POST["email"];
    $NID = $_POST["nid"];
    $Phone = $_POST["phone"];
    $Password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $picture = $_FILES["picture"]["name"];
    $cv = $_FILES["cv"]["name"];

    $uppercase = preg_match('@[A-Z]@', $Password);
    $lowercase = preg_match('@[a-z]@', $Password);
    $number = preg_match('@[0-9]@', $Password);
    $specialchars = preg_match('@[^\W]@', $Password);

    if (empty($fname) && empty($lname) && empty($Username) && empty($Email) && empty($NID) && empty($Phone) && empty($Password) && empty($cpassword) && empty($_FILES["picture"]["tmp_name"]) && empty($_FILES["cv"]["tmp_name"]))
    {
        $signuperr = "You did not fill all the fields! ";
        
    }
    else if(empty($fname))
    {
        $fnameerr = "Please Enter Your Firstname. ";
       
    }
    else if(empty($lname))
    {
        $lnameerr = "Please Enter Your Lastname. ";
        
    }
    else if(empty($Username))
    {
        $UsernameErr1 = "Please Enter Your Username. ";
        
    }
    else if (!empty($Username) && strlen($Username) <= 5)
    {
        $UsernameErr = "Username must be more than 5 characters! ";
      
    }
    else if(empty($Email))
    {
        $Emailerr = "Please Enter Valid Email Address. ";
       
    }
    else if(!empty($Email) && !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $Email))
    {
        $Emailerr = "Please Enter Valid Email Address. ";
    
    }
    else if(empty($NID))
    {
        $NIDErr = "Please Enter Valid National Identity Number. ";
    }
        
    else if(!empty($NID) && strlen($NID) != 8)
    {
        $NIDErr1 = "NID should be 8 digits. ";
        
    }
    else if(empty($Phone))
    {
        $Phoneerr = "Please Enter Valid Phone Number. ";
      
    }
    else if(empty($Password))
    {
        $Passworderr = "Enter Password! ";
       
    }
    elseif(empty($cpassword))
    {
        $Passworderr1 = "Confirm Your Password ";
     
    }
    else if(!empty($Password) && !empty($cpassword))
    {
        if(!$uppercase || !$lowercase || !$number || !$specialchars || strlen($Password) <= 8)
        {
            $Passworderr2 = "Password should be more than or equal to 8 characters and should include at least one uppercase, one lower case, one number and one special character! ";
           
        }
        else if($Password != $cpassword)
        {
            $Passworderr3 = "Password didn't match. ";
      
        }
    }
    if ($fname != "" && $lname != "" && $Username != "" && $Email != "" && $NID != "" && $Phone != "" && $Password != "" && $cpassword != "") 
    {
        if(true)
        {
            $target_dir = "../uploads/";
            $target_dirr = "../uploads/";

            $target_file = $target_dir . $_FILES["picture"]["name"];
            $target_filee = $target_dirr . $_FILES["cv"]["name"];

            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $FileType = strtolower(pathinfo($target_filee, PATHINFO_EXTENSION));

            if(empty($picture))
            {
                $imageerr1 = "Please select your picture to upload. ";
                
            }
            else if(empty($cv))
            {
                $fileerr1 = "Please select your cv to upload. ";
               
            }
            else if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif")
            {
                $imageerr = "Sorry, only JPG, JPEG, PNG & GIF files are allowed. ";
               
            }
            else if($FileType != "pdf")
            {
                $fileerr = "Sorry, Only PDF files are allowed. ";
         
            }
            else
            {
                if ((move_uploaded_file($_FILES["picture"]["tmp_name"], "../uploads/" . $_FILES["picture"]["name"])) 
                    && (move_uploaded_file($_FILES["cv"]["tmp_name"], "../uploads/" . $_FILES["cv"]["name"])))
                {
                    $imgpath = "../uploads/" . $_FILES["picture"]["name"];
                    $filepath = "../uploads/" . $_FILES["cv"]["name"];

                    $mydb = new db();
                    $myconn = $mydb->openConn();
                    $mydb->insertapplicant($fname, $lname, $Username, $Email, $NID, $Phone, $Password, $cpassword, $imgpath, $filepath, "registrationofemployee", $myconn);

                    
                }
                else
                {
                    
                }
            }

        }
    }
}
if(isset($_POST["return"]))
{
    header("location: ../view/employelogin.php");
}

?>