<?php

$connect = mysqli_connect('localhost','
clin_adminlogin','Cicdj%MOo!E6jgEe','
clin_login');
if(mysqli_connect_error()){
    echo "Failed to connect to mysql:" . mysqli_connect_error();
}
