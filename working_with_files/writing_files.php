<?php

$file = 'example.txt';

if ($handle = fopen($file, 'w')) {

    fwrite($handle, 'in progress on php course');


    fclose($handle);
} else {
    echo 'files could not be written';
};
