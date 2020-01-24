<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $names = array('Anna', 'Kata', 'Olka', 'Magda', 'Jane', 'Jaska');

    $min = 4;
    $max = 7;

    if (strlen($username) < $min) {
        echo '<h2 style="color:darkred">username has to be longer then 3</h2>';
    }
    if (strlen($username) > $max) {
        echo '<h2 style="color:darkred">username has to be shorter then 7</h2>';
    }
    if (!in_array($username, $names)) {
        echo 'this is not the right name; ';
    
    } else {
        echo 'it is a right name';
    }
};
