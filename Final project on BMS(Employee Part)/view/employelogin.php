<?php

include('../control/emplogin.php');     #employ login r control

    if(isset($_SESSION['username']) )
{
    header("location: ../view/epage1.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/CSS" href="../CSS/emplogin.css">
    <title>Employe Log in</title>
</head>


    <form action=""method="POST" enctype="multipart/form-data">
        
    
   
    <center>

    <body background="../Image/bg_img.png">
        <header>
            <h1><font color="green">XYZ Bank Limited.</font></h1>
            <p><strong><font color="green">Login As An Employe</font></strong></p>
            <br><br><br><br>
        </header>
        
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
            
                <table>
                    <tr>
                        <td>
                            <label>
                                <font color="darkblue">Username:</font>
                            </label>
                            <input type="text" id="username" name="username"> <br><br>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>
                                <font color="darkblue">Password :</font>
                            </label>
                            <input type="password" id="password" name="password"> <br><br>
                             
                        </td>
                    </tr>

                    <tr>
                        <td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><input type="checkbox" name="remember" id="remember"> 
                            <label for="remember">
                                <b>Remember Me</b>
                            </label>
                        </td>
                    </tr>
                   
                    <tr>
                        <td>
                          <br>
                                <label></label>
                                <input type="submit" name="submit" value="Login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="submit" name="registration" value="Registration">
                            
                        </td>
                    </tr>
                </table>
           
        </form>
    </center>
</body>

</html

 
