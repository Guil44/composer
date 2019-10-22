<?php
require_once '../vendor/autoload.php';

use App\Wcs\Hello;
use App\Wcs\Hello2;
$test = new Hello();
$test2 = new Hello2();

echo $test->talk();

echo $test2->talk();