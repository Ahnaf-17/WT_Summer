<?php
class db
{
    function openCon()
    {
$servername="localhost";
$username="root";
$password="";
$dbname="labtask";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    echo "error connecting db";
}
return $conn;
    }
function insertUser($fname,$lname,$ag,$desg,$pre,$eml,$password,$file,$table,$conn)
{
$sqlstr="INSERT into $table (fname,lname,age,designation,planguage,email,password,picture) 
VALUES ('$fname','$lname',$ag,'$desg','$pre','$eml','$password','$file')";
if($conn->query($sqlstr))
{
    echo "data inserted";
}
else
{
echo "failed".$conn->error;
} 
}
}
?>