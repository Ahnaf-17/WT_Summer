<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>
<body>
    <form action="../control/process.php" method="post">
        enter the numbers : 
    Enter first number : <input type="text" name="num1"><br>
    Enter second number : <input type="text" name ="num2"><br>

    select your operation :
    <input type="radio" name="btn"value="+" >+
    <input type="radio" name="btn"value ="-">-
    <input type="radio" name="btn" value ="*">*
    <input type="radio" name="btn" value ="/">/
    <br>

    <input type="submit" name ="Submit" value="result">


</form>
    
</body>
</html>