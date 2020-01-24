<?php

if (isset($_POST['submit'])) {

    echo '<br>';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = mysqli_connect('localhost', 'root', 'root', 'loginapp');
    if ($connection) {
        echo 'connected';
    } else {
        die('connection failed');
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="col-sm-6">
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label for="username">username</label>
                    <input type="text" name="username" class="form-control"></div>
                <div class="form-group">
                    <label for="password">password</label>
                    <input type="password" name="password" class="form-control"></div>
                <input type="submit" value="submit" name="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
</body>

</html>