<?php


$con=new mysqli('localhost','student', 'studentinfo','studentinfo');

if(!$con){
    die(mysqli_error($con));
}


$con2=new mysqli('localhost','staff', 'clinicstaff','managestaff');

if(!$con2){
    die(mysqli_error($con2));
}


$con3=new mysqli('localhost','admit', 'admithistory','admithistory');

if(!$con3){
    die(mysqli_error($con3));
}



$con4=new mysqli('localhost','medication', 'medicationinv','inventory_db');

if(!$con4){
    die(mysqli_error($con4));
}


$con5=new mysqli('localhost','equipment', 'equipmentinv','inventory_db');

if(!$con5){
    die(mysqli_error($con5));
}
?>