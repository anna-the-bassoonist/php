<?php

// $connection = mysqli_connect("localhost","my_user","my_password","my_db");
$connection = mysqli_connect('localhost', 'root', 'root', 'loginapp');
if (!$connection) {
 
    die('connection failed');
}
