<?php

namespace App\Controllers;

use App\Models\Cart;

class CartController
{
    /**
     * aggiunge il prodotto nel carrello
     * @param {int} $id 
     */
    public function addCart($id)
    {
        //var_dump($id);
        $response = [
            'name' => 'Iphone x max pro',
            'message' => 'aggiunto nel carrello'
        ];

        echo json_encode($response);
    }
}