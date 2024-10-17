<?php


$con=new mysqli('localhost','root', 'password','studentinfo');

if(!$con){
    die(mysqli_error($con));
}

$con2=new mysqli('localhost','root', 'password','managestaff');

if(!$con2){
    die(mysqli_error($con2));
}


$con3=new mysqli('localhost','root', 'password','admithistory');

if(!$con3){
    die(mysqli_error($con3));
}


$con4=new mysqli('localhost','root', 'password','inventory_db');

if(!$con4){
    die(mysqli_error($con4));
}

$con5=new mysqli('localhost','root', 'password','inventory_db');

if(!$con5){
    die(mysqli_error($con5));
}
?>