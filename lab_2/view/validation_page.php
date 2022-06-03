<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form action="../control/validation_control.php" method designationpost">

    First_Name : <input type="text" name ="fname"><br>
    Last_Name : <input type="text" name = "lname" ><br>
    Age : <input type="text" name = "age"><br>
    Designation :
    <input type="radio" name="designation" value = "jprogrammer">Junior programmer
    <input type="radio" name="designation" value = "sprogrammer">Senior programmer
    <input type="radio" name="designation" value = "projectleader">Project leader <br>

    Preffered_Language : 
    <input type="checkbox" name="check" value = "java">JAVA
    <input type="checkbox" name="check" value = "PHP">PHP
    <input type="checkbox" name="check" value = "C#">C#<br>

    Email : <input type="email" name="email" id=""><br>

    Password : <input type="text" name = "password"><br>

    Please choose a file :
     <input type="file" name="fiel"><br>
    <input type="submit" value="submit">
    <input type="reset" value="reset">
    <!-- Gender : -->
     <!-- <input type="radio" name="gender" value="male">Male -->
     <!-- <input type="radio" name="gender" value="female">Female -->
     <!-- <input type="radio" name="gender" value="other">Other -->
     

    </form>
</body>
</html>