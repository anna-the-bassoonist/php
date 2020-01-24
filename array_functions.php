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
   
   $list = [1,4,5,6,55,7,8,9];
   echo "<br>";
   echo max($list);
   echo "<br>";
   echo min($list);
   echo "<br>";

   sort($list);
   print_r($list);



   
   ?> 
</body>
</html>