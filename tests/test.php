<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Heoffice\Phpfun;

$phpfun = new Phpfun();
echo $phpfun->Hello();