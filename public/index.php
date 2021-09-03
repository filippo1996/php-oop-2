<?php
//error_reporting(0);
/**
 * punto di ingresso
 */

chdir(dirname(__DIR__));

// creare un autoload per caricare dinamicamente le classi
require_once __DIR__.'/../helpers/functions.php';
require_once __DIR__.'/../app/Controllers/ProductController.php';
include_once __DIR__.'/../app/Models/Product.php';
include_once __DIR__.'/../api/products/data-products.php';
include_once __DIR__.'/../app/Models/User.php';
require_once __DIR__.'/../app/Controllers/UserController.php';
include_once __DIR__.'/../app/Models/CreditCard.php';


//$user = new App\Controllers\UserController();
$product = new App\Controllers\ProductController($dataProducts);
$product->index();
$product->display();
