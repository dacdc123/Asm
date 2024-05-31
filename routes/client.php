<?php

use Dacdc\Asm\Controllers\Client\HomeController;

$router->get( '/', HomeController::class . '@index');
