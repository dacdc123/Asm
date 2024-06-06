<?php

use Dacdc\Asm\Controllers\Client\AboutController;
use Dacdc\Asm\Controllers\Client\ContactController;
use Dacdc\Asm\Controllers\Client\HomeController;
use Dacdc\Asm\Controllers\Client\ProductController;

$router->get( '/',                  HomeController::class       . '@index');
$router->get( '/about',             AboutController::class      . '@index');

$router->get( '/contact',           ContactController::class    . '@index');
$router->post( '/contact/store',    ContactController::class    . '@store');

$router->get( '/products',          ProductController::class    . '@index');
$router->get( '/products/{id}',     ProductController::class    . '@detail');

