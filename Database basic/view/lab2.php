
<?php
include ("../control/task2.php")
?>
<html>

<head>
    <title>Registration form</title>

</head>

<body>
    <h1>Registration Form </h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    Fisrt Name :
                  
                
                
                <td>
                <td>
                    <input type="text" name="FirstName"> <?php echo $nameErr;?> <br>
                  
                </td>
            <tr>
                <td>
                    Last Name :
                <td>
                <td>
                    <input type="text" name="LastName"> <?php echo $name2Err;?> <br>
                </td>
            <tr>
                <td>
                    Age :
                <td>
                <td>
                    <input type="text" name="Age">  <?php echo $ageErr;?> <br>
                </td>
            </tr>
         
            <tr>
                <td>
                    Email :
                <td>
                <td>
                    <input type="email" name="Email">
                </td>
            </tr>
            <tr>
                <td>
                    Password :
                <td>
                <td>
                    <input type="password" name="Password">
                </td>
            </tr>
            <tr>
                <td>
                    Please choose a file
                <td>
                <td>
                    <input type="file" name="myfile">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="Submit">
                    <input type="reset" name="Reset">

                </td>
            </tr>
</body>

</html>
