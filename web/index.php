<?php
require '../vendor/autoload.php';
use NoughtsAndCrosses\Application;

/* Create and run NoughtsAndCrosses application. */
$app = new Application();
$app->run();

echo "Welcome to the NoughtsAndCrosses application!";