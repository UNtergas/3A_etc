<?php

include 'vendor/autoload.php';

$pug = new Pug([
    // here you can set options
]);

$pug->displayFile('home.pug');
