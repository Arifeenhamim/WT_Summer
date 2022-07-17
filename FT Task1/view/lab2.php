
<?php
include ("../control/task2.php")
?>
<head>
    <body>
   
        <h1>  Registration  </h1>
       
        <form action ="" method ="post" enctype ="multipart/form-data">
            <table>
            <tr>
                <td>
         First Name : <input type= "text" name ="fname" placeholder =" Enter First Name">   <?php echo $nameErr; ?> <br>
       
</td>
</tr>
<tr>
    <td>
         Last Name : <input type ="text" name ="lname" placeholder = "Enter Last Name">  <?php echo $name2Err; ?><br>
</td>
</tr>
<tr>
    <td>
    Age :     <input type ="text" name ="age" placeholder = "Enter Your Age"> <?php echo $AgeErr; ?><br>
</td>
</tr>
<tr>
    <td>

         Designation : <input type = "radio" name = "designation" value ="juniorprogrammer">Junior Programmer
         <input type = "radio" name = "designation" value ="seniorprogrammer">Senior Programmer
         <input type = "radio" name = "designation" value ="projectlead">Project Lead <td> <?php echo $desigErr; ?></td><br><br>
</td>
</tr>
<tr>
<td>
    Preferred Language :          
    <input type="checkbox" name="PreferredLanguage1"  value="java" >JAVA
    <input type="checkbox" name="PreferredLanguage2"  value="php"> PHP
    <input type="checkbox" name="PreferredLanguage2"  value="c++"> C++
    <?php echo $LanErr; ?><br>
 </td>


</tr>
<tr>
    <td>
   Email : <input type ="email" name = "email" placeholder = "Enter Your Email" autocomplete ="on"><td> <?php echo $emailErr; ?> </td><br>
 

</td>
</tr>
<tr>
    <td>
         Password : <input type ="password" name ="pass" placeholder = "Enter Desired Password"><?php echo $passErr; ?><br>
</td>
</tr>




<tr>
     <td>
      Please choose a photo
               
      <input type="file" name ="myfile"> <br>
      <?php echo $fileErr; ?>
     <br>
    </td>
</tr>
<tr>
    <td>
    <input type ="submit" name="Submit" >
    <input type = "reset">

</td>
</tr>

   

</form>
    </table>
   
    </body>
    </head>