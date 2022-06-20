<?php
session_start(); 

if(empty($_SESSION["username"])) 
{
header("Location: ../view/login.php"); // Home Page a back korar jonno
}

?>

<html>
<body>
<h2>Profile Page</h2>

<h3><?php echo $_SESSION["username"];?></h3>
<br/>Your Profile Page.



<br>
Want to logout? <a href="../control/logout.php">logout</a>
<br>
Go to page one <a href="../control/page1.php">page one</a>
</body>
</html>