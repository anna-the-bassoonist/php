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
    function createDoors(){
        $this->doors = 300;
    }
};

$bmw = new Car();
$audi = new Car();

$bmw->MoveWheels();
echo '<br>';
echo $bmw->wheels;
echo '<br>';

$bmw->doors = 3;
echo $bmw->doors;

echo '<br>';
echo $bmw->engine;

echo '<br>';

$truck = new Car();
echo $truck->doors = 9;
echo '<br>';

echo $truck->createDoors();
echo $truck->doors;


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