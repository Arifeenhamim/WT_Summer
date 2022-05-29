<html>
<head>
<title>lab1</title>
</head>
<body>   

<form action="../control/task1.php" method="post">
    <table>
<tr>
<th><label for="num1">1st Number:</label></th>
<th><input type="text"   name="num1"></th>
</tr>
<tr>
<th><label for="num2">2nd Number:</label></th>
<th><input type ="text" name="num2"><br></th>
</tr>

<tr>
  <th>Sum:</th> 
  <th><input  type="radio"  name="func" value="+">
 <label for="func">plus</label></th>

 <th><input type="radio" name="func" value="-">
 <label for="func">minus</label></th>

 <th><input type="radio" name="func" value="*">
 <label for="func">mul</label></th>

 <th><input type="radio" name="func" value="/">
 <label for="func">div</label></th>

</tr>

<tr><th><input type = "submit" name="submit"></th></tr>
</from>
</table>
</body>
</html>
