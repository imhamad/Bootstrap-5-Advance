<?php

require 'vendor/autoload.php';


// this loader is used to local templates

$loader = new \Twig\Loader\ArrayLoader([
'index' => 'hello {{name}}',
]);

// Store the configuration
$twig = new \Twig\Environment($loader);

print $twig->render('index',['name' => 'Hamad']);
