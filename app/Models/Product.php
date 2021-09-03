<?php

namespace App\Models;

class Product
{
    /**
     * Name table db
     */
    protected $table = 'products';

    protected $products;
    protected $id;
    protected $name;
    protected $description;
    protected $price;
    protected $immage;

    public function __construct(array $_products){
        $this->products = $_products;
    }

    /**
     * metodo che restituisce tutti i prodotti
     */
    public function all()
    {
        return $this->products;
    }

    /**
     * metodo che restituisce l'id del prodotto
     */
    public function getId()
    {
        return $this->id; 
    }

    /**
     * metodo che restituisce il nome del prodotto
     */
    public function getName()
    {
        return $this->name; 
    }

    /**
     * metodo che restituisce la descrizione del prodotto
     */
    public function getDescription()
    {
        return $this->description; 
    }

    /**
     * metodo che restituisce il prezzo del prodotto
     */
    public function getPrice()
    {
        return $this->price; 
    }

    /**
     * metodo che restituisce il nome dell'immagine del prodotto
     */
    public function getImmage()
    {
        return $this->immage; 
    }
}