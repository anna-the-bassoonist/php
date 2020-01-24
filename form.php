<?php

$obj = (object) ['name' => 'John', 'pizza' => 'margeritta'];
$xyz = 'pizza';
echo $obj->name . ' ' . $obj->pizza;
echo '<br>';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $names = array('Anna', 'Kata', 'Olka', 'Magda', 'Jane', 'Jaska');

    $min = 4;
    $max = 7;
    // echo 'username:'. ' '. $username . ' ' . 'password: '. $password;
    if (strlen($username) < $min) {
        echo '<h2 style="color:darkred">username has to be longer then 3</h2>';
    }
    if (strlen($username) > $max) {
        echo '<h2 style="color:darkred">username has to be shorter then 7</h2>';
    }
    if (!in_array($username, $names)) {

        echo 'this is not the right name; ';
    } 
     else {
        echo 'it is right name; ';
        if(preg_match('~\d~',$password)){
            echo 'password secure enough';
        } else {
            echo 'password is not secure ';
        };
    }
} else {
    echo 'it doesnt';
};
// echo "$names[1]";
// echo '<br>';
// var_dump($names);
// echo '<br>';
// echo implode(', ', $names);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="form.php" method="POST">

        <input placeholder="username" type="text" name="username">
        <input placeholder="password" type="password" name="password">
        <input type="submit" name="submit">
    </form>

</body>

</html>