<?php

namespace App\Models;

class CreditCard 
{
    private $number;
    private $proprietor;
    private $expiry;
    private $cvc;

    public function __construct(string $_number, string $_proprietor, string $_expiry, string $_cvc){
        $this->number = $_number;
        $this->proprietor = $_proprietor;
        $this->expiry = $_expiry;
        $this->cvc = $_cvc;
    }

    /**
     * metodo che restituisce il numero della carta
     */
    public function getNumber()
    {
        return $this->number; 
    }

    /**
     * metodo che restituisce il nome del titolare della carta
     */
    public function getProprietor()
    {
        return $this->proprietor; 
    }

    /**
     * metodo che restituisce la data di scadenza della carta
     */
    public function getExpiry()
    {
        return $this->expiry; 
    }

    /**
     * metodo che restituisce il codice segreto della carta
     */
    public function getCvc()
    {
        return $this->cvc; 
    }
}