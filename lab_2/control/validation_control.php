<?php 
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$jprogrammer = $_POST["jprogrammer"];
$sprogrammer = $_POST["sprogrammer"];
$leader = $_POST["leader"];
$designation = $_POST["designation"];
$age = $_POST["age"];
$email = $_POST["email"];
$password = $_POST['password'];

$pattern = "([0-9])";

if(empty($fname) || empty($lname)){
    echo "Name is required"; 
    echo "<br>";
}
else{
    if(preg_match($pattern, $fname) || preg_match($pattern, $lname)){
    echo "Enter name :";
}
    else{
    echo "First name :".$fname;
    echo "Last name :".$lname;
}
}


if (isset($designation ["jprogrammer"]) || isset($designation ["sprogrammer"]) || isset($designation ["leader"])){
    echo $designation;
    echo "<br>";
} else {
    echo "must select one";
    echo "<br>";
}

if(!empty($age)){
    echo $age;
}


if(isset($_POST["java"]) || isset($_POST["PHP"]) || isset($_POST["C#"])){
    echo "<br>Language preferred - <br>";
    if(isset($_POST["java"])){
        echo $_POST["java"]." <br>";
    }
    if(isset($_POST["PHP"])){
        echo $_POST["PHP"]." <br>";
    }
    if(isset($_POST["C#"])){
        echo $_POST["C#"]." <br>";
    }
}
else{
    echo "no language selected";
}



$email = $_POST["email"];
if (empty($email) || !preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',$email)){
    echo "Invalid email";
    echo "<br>";}
    else {
    echo $email;
    echo "<br>";
}

if(strlen($pass)>8){
    echo "Password given";}
    else{
    echo "Password should be more than 8 characters";
}
?>