<html>

<head>
    <title>Registration form</title>

</head>

<body>
    <h1>Registration Form </h1>
    <form action="../control/task2.php" method="post">
        <table>
            <tr>
                <td>
                    Fisrt Name :
                <td>
                <td>
                    <input type="text" name="FirstName">
                </td>
            <tr>
                <td>
                    Last Name :
                <td>
                <td>
                    <input type="text" name="LastName">
                </td>
            <tr>
                <td>
                    Age :
                <td>
                <td>
                    <input type="text" name="Age">
                </td>
            </tr>
            <tr>
                <td>
                    Designation :
                <td>
                <td>
                    <input type="radio" name="Desgination1">Junior Programmer
                    <input type="radio" name="Desgination2">Senior Programmer
                    <input type="radio" name="Desgination3">Project Lead
                </td>
            </tr>
            <tr>
                <td>
                    Preferred Language :
                <td>
                <td>
                    <input type="checkbox" name="PreferredLanguage1">JAVA
                    <input type="checkbox" name="PreferredLanguage2"> PHP
                    <input type="checkbox" name="PreferredLanguage3"> C++
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
                    <input type="file">
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
