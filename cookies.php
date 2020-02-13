<?php

// $_COOKIE;

$name = 'cookieName';
$value = 49;
$expiration = time() + (60 * 60 * 24 * 7);

setcookie($name, $value, $expiration);

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


    <?php

    if (isset($_COOKIE['cookieName'])) {

        $someOne = $_COOKIE['cookieName'];
        echo $someOne;
    } else {
        $someOne = '';
    }

    ?>
</body>

</html>