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

    $number = array( 'Huanita','Maia' ,'Alicja');

    // echo $number[1] . '<br>';
    print_r($number);

    echo '<br>';
    // $names = ['first_name' => 'Edwin'];
    $names = array('first_name' => 'Edwin', 'last_name' => 'Diaz');

    print_r($names);
    echo '<br>';

    echo $names['first_name'] . ' ' . $names['last_name'];




    ?>
</body>

</html>