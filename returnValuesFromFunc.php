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

        function add($num1, $num2){
            $sum = $num1 + $num2;
            return $sum;
        }

        $result = add(5,7);
        echo $result . '<br>';

        $result = add(3,$result);

        echo $result;


    ?>
</body>

</html>