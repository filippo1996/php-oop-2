<?php

use App\Controllers\CartController;

require_once __DIR__.'/../Controllers/CartController.php';

$cart = new CartController();

if(isset($_GET['add'])){
    $idProduct = (int) $_GET['add'];
    $cart->addCart($idProduct);
} else {
    echo 'nessun prodotto selezionato';
}