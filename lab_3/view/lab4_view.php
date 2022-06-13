<?php
include("../control/lab4_control.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action ="" method="POST" enctype ="multipart/form-data">
<h1>Registration Form</h1>

<!-- name  -->

 First name 
 <input type="text" name="fname" ><br>
Last name 
<input type="text" name="lname" ><br>

<!-- age  -->
Age 
<input type="text" name="age" ><br>

<!-- designation  -->

Designation
<input type="radio" name="designation" value="Junior programmer">Junior programmer  <br>
<input type="radio" name="designation" value="Senior programmer">Senior programmer <br>
<input type="radio" name="designation" value="Project lead">Project lead <br>

<!-- language  -->

Preferred language
<input type="checkbox" id="l1" name="l1" value="java" >JAVA 
<input type="checkbox" id="l2" name="l2" value="php" >PHP 
<input type="checkbox" id="l3" name="l3" value="cplus" >C++ <br>

<!-- email  -->

 Email
<input type="email" name="email" > <br>

<!-- password  -->

 Password 
 <input type="password" name="pass" ><br>


<!-- file  -->
 Please choose a file 
 <input type="file" name="file" ><br>
 <br>

 <!-- submit  -->
 <input type="submit" name="Submit"  value ="Register">


</form>
</body>
