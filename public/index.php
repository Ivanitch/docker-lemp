<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

$name = 'Roma';

$a = 5;
$b = $a + 7;
$c = $a + $b + 45;

echo $c;

echo $name;

$app = new \App\App();