<?php

session_start();   #session suru user information store
if(isset($_POST['submit']))
{
    $Username = $_POST['username'];
    $password = $_POST['password'];

    if($Username != "" && $password != "")
    {
        if($_SERVER["REQUEST_METHOD"] == "POST") # user input post r modde jabe then server r req korsi
       {  
         

            $f = 0;    # 0 variable 
            $employedata = file_get_contents('../Data/empregistrationdata.json');  #funtion to reads a file into a string. plus array declar
            $employedata_array = json_decode($employedata,true);   #it is used to decode or convert a JSON object to a PHP object.
            if($employedata_array != NULL)  # vora kina 
            {foreach($employedata_array as $employeuser)  # data as user  store
        {
         if($employeuser["username"] === $_POST["username"] && $employeuser["password"] === $_POST["password"]) # condition to check data file r data r shate mile kina user r info
          {$_SESSION['username'] = $employeuser["username"];  #oondition match
          $_SESSION['password'] = $employeuser["password"];
              
          if (!empty($_POST["remember"]))

                        {
                        setcookie("username", $_SESSION['username'], time() + 86000);
                        setcookie("password", $_SESSION['password'], time() + 86000);
                        echo "";

                        }

                        else{
                     setcookie("username","");
                     setcookie("password","");
                     echo "";

    }
         
                           
        } }
    }
           if ($f == 0) 
           {
                echo  "Username and Password Doesn't Match";
           }
            else
            {
            $employeinfo = array
            (
                'username' => $Username,
                'password' => $Password
            );
            $employedata_array[] = $employeinfo;
            $employeinfoencode = json_encode($employedata_array,JSON_PRETTY_PRINT);  /// data json data ke elin kore

            if (file_put_contents('../Data/employelogindata.json', $employeinfoencode))   # indexed array into a JSON array
            {

                echo " ";
            } else {
                echo " ";
            }
            }
        }
    }
    else
    {
        echo " Username and Password Can't be Empty";
    }
    }
if(isset($_POST['registration']))
{
    header("location: ../view/employeregistration.php");
}

?>