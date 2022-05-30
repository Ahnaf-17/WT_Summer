<?php
$n1=$_POST["num1"];
$n2=$_POST["num2"];
$num_1=(float)$n1;
$num_2=(float)$n2;

$action=$_POST["btn"];

if($action=="+"){
    echo $num_1+$num_2;
}
elseif($action=="-"){
    echo $num_1-$num_2;
}
elseif($action=="*"){
    echo $num_1*$num_2;
}
elseif($action=="/"){
    echo $num_1/$num_2;
}

?>