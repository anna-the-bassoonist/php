<?php

class Car
{
    //everywhere
    public $wheels = 4;

    //inside classes and subclasses
    protected $hood = 1;

    //inside a specific class
    private $engine = 1;
    var $doors = 4;
    function showProperty()
    {
        echo $this->hood;
        echo $this->engine; //error
    }
};

$bmw = new Car();

echo $bmw->wheels; // 4
// echo $bmw->hood; //error
echo $bmw->showProperty(); //1
// echo $bmw->engine;

$semi = new Semi;

class Semi extends Car
{
}
// echo $semi->showProperty();

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