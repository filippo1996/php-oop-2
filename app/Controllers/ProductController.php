<?php

namespace App\Controllers;

use App\Models\Product;
use App\Controllers\UserController;
use App\Models\CreditCard;

class ProductController
{
    protected $layout = 'resources/views/templates/index.tpl.php';
    public $title = 'Prodotti in vendita';
    public $content;
    protected $product;

    protected $user;

    public function __construct(array $api){
        $this->product = new Product($api);

        //istanza da rimuovere in questa classe, solo per scopo di test
        $this->user = new UserController(['username' => 'Filmazza'], true);

        //istanza da rimuovere in questa classe, solo per scopo di test
        $this->user->insertCreditCard(new CreditCard('1233224223', 'Pippo Rossi', '20/2027', '123'));
    }

    public function display()
    {
        require_once $this->layout;
    }

    public function index()
    {
        //Logica da rimuovere in questa classe, solo per scopo di test
        $loginMessage = 'Accesso eseguito correttamente';
        try{
            $username = $this->user->showAccess();
        } catch(Exception $e){
            $loginMessage = $e->getMessage();
        }

        $products = $this->product->all();
        $this->content =  view('product', compact(['products','username','loginMessage']));
    }
}