// 
<!DOCTYPE html>
<html lang="en">
<?php

include("../control/viewinformationemp.php");
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Application Form</title>
</head>
<h2><a href="../view/employeregistration.php">Back </a></h2>  
<body bgcolor="skyblue">

    <header>
       
        <p><strong>Use correct information to Update </strong>
        </p>
    </header>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

        <h2>Update ation Form</h2>
        <table>


        <tr>
                        <td>
                            <label>
                                Enter Username :
                            </label>
                        </td>
                        <td> <input type="text" name="uname" value=></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="search" value= "Search">
                        </td>
                    </tr>
                    
            <tr>
                <td>
                    <input type="text" name="fname" placeholder="Firstname">
                </td>

                <td>
                    <input type="text" name="lname" placeholder="Lastname">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="text" name="uname" placeholder="Username"> <br>
                </td>

                <td>
                    <input type="text" name="email" placeholder="Email">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="text" name="nid" placeholder="Valid NID">
                </td>

                <td>
                    <input type="text" name="phone" placeholder="+880-1XXXXXXXXX">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="password" name="password" placeholder="Password">
                </td>

                <td>
                    <input type="password" name="cpassword" placeholder="Confirm Password">
                </td>
            </tr>

            <tr>
                <td>
                    Please upload your picture
                    <input type="file" name="picture">
                    </p>
                </td>

                <td>
                    Please upload your cv
                    <input type="file" name="cv">
                </td>
            </tr>

        </table>

        <table>

            <tr>
                <td>
                    <?php

                    echo $fnameerr;
                    echo $lnameerr;
                    echo $UsernameErr;
                    echo $UsernameErr1;
                    echo $Emailerr;
                    echo $NIDErr;
                    echo $NIDErr1;
                    echo $Phoneerr;
                    echo $Passworderr;
                    echo $Passworderr1;
                    echo $Passworderr2;
                    echo $Passworderr3;
                    echo $fileerr;
                    echo $fileerr1;
                    echo $imageerr;
                    echo $imageerr1;
                    echo $signuperr;

                    ?>

                    <br>
                    <br>

                    <input type="submit" name="update" value="Update">
                </td>
            </tr>

        </table>
    </form>
</body>

</html>