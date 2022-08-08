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
    <link rel="stylesheet" type="text/CSS" href="../css/design.css">
    <title>Employe Login Form </title>
</head>


    <form action=""method="POST" enctype="multipart/form-data">
    <center>
    <body>
    <div class= "header sticky">
    <h1>City Bank Limited</h1>
    </div>
        <header>

            <p><strong><font color="black">Login As An Employe</font></strong></p>
            <br><br><br><br>
        </header>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">

                <table>
                    <tr>
                        <td>
                            <label>
                            </label>
                            <input type="text" id="username" name="username" placeholder="Enter Username">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>
                            </label>
                            <input type="password" id="password" name="password">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" name="remember" id="remember"> 
                            <label for="remember">
                                <b>Remember Me</b>
                            </label>
                        </td>
                    </tr>
                   
                    <tr>
                        <td>
                            <input class="login" type="submit" name="submit" value="Login">
                        </td>
                        <td>
                            <input class="regi" type="submit" name="registration" value="Registration">
                        </td>
                    </tr>
                </table>
           
        </form>
    </center>
</body>

</html

 
