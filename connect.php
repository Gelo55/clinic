<?php

$connect = mysqli_connect('localhost','clin_admin','F1KoFpn^LEeLsbFu','clin_login');
if(mysqli_connect_error()){
    echo "Failed to connect to mysql:" . mysqli_connect_error();
}
