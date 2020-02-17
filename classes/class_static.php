<?php

class Car
{
    static $wheels = 4;
    var $hood = 1;

    function moveWheels()
    {
        Car::$wheels = 20;
    }
};

$bmw = new Car();

// $bmw->wheels; //error-accessing static property

//to access static property:
echo Car::$wheels;
Car::moveWheels();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>