<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: ../view/login.php"); //  Home Page a back korar jonno
}

?>

<html>
<body>
<h2>Home Page</h2>
<h3> <?php echo $_SESSION["username"];?></h3>
<br/><h5>Welcome to Home Page.</h5>


<h5>Want to see Profile <a href="page2.php"> MY Profile</a></h5>

<br/>
 <h5>Do you want to <a href="../control/logout.php">logout</a></h5>

</body>
</html>

<?php


?>