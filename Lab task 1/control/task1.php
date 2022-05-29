<?php
$name=$_POST["num1"];
$name2=$_POST["num2"];
$func=$_POST["func"];
echo $name;
echo" ";
echo $name2;
echo"<br>";
echo "1st number ".$name;
echo"<br>";
echo "1st number ".$name2;
echo"<br>";

if ($func == "+")
{
    echo $name + $name2;
    
}

if ($func == "-")
{
    echo $name - $name2;
}
if ($func == "*")
{
    echo $name * $name2;
}
if ($func == "/")
{
    echo $name / $name2;
}
?>