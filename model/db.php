<?php
class db{

    function openConn()
    {
        $servername="localhost";
        $username = "root";
        $password = "";
        $dbname = "bankinmanagmentsystem";
        $conn =  new mysqli($servername,$username,$password,$dbname);
        if($conn -> connect_error)
        {
            echo "error connecting database";
        
        }
        return $conn;
    }

    function employee_login($conn, $employeelogin, $username, $password)
    {
        $sqlstr = "SELECT username, password FROM employeelogin WHERE username = '$username' AND password = '$password'";
        return $conn->query($sqlstr);
    }
   
    function insertapplicant($fname, $lname, $Username, $Email, $NID, $Phone, $Password, $cpassword, $picture, $cv, $registrationofemployee, $conn)
    {
        $sqlstr = "INSERT INTO registrationofemployee (fname, lname, Username, Email, NID, Phone, Password, cpassword, picture, cv) VALUES ('$fname', '$lname', '$Username', '$Email', '$NID', '$Phone', '$Password', '$cpassword', '$picture', '$cv')";
        return $conn->query($sqlstr);
    }

    function CheckUser($username,$password,$table,$conn)
    {
        $result = $conn->query("SELECT * FROM ". $table." WHERE Username='". $Username."' AND Password ='". $Password."'");
        return $result;
    }
    function displayUser($table,$conn)
    {
        $result = $conn->query("SELECT * FROM  $table");
        if ($result->num_rows>0) {
            while($row = $result->fetch_assoc())
            echo "id: ". $row["id"]."<br>"." First Name: ". $row["firstname"]."<br> "."username : ".
            $row["username"]."<br>"."Password : ". $row["pass"];
        }
            else
            echo "0 results";
           
    }

}
?>