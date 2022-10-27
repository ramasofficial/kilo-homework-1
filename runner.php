<?php

use App\Kata2\FreeShippingCalculator;

require_once "vendor/autoload.php";

$demo = new App\DemoRun();
echo $demo->kata1();
echo PHP_EOL;
echo $demo->kata2(new FreeShippingCalculator());
echo PHP_EOL;
echo $demo->kata3();
echo PHP_EOL;
echo $demo->kata4();
