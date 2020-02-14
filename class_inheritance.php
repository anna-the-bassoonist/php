<?php

class Car
{
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    function moveWheels()
    {
        $this->engine = 20;
        echo 'wheels are moved';
    }
    function createDoors()
    {
        $this->doors = 300;
    }
};

$bmw = new Car();
$audi = new Car();

class Plane extends Car
{
    var $wheels = 40000;
}


$luft = new Plane();
$luft->createDoors();
echo $luft->doors;
echo '<br>';
echo $luft->wheels;


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