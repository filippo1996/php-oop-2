<?php

namespace App\Models;

class User 
{
    protected $user;
    private $access;

    public function __construct($_user, bool $_access){
        $this->user = $_user;
        $this->access = $_access;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getAccess()
    {
        return $this->access;
    }

    public function insertCreditCard(object $class)
    {
        $number = $class->getNumber();
        $proprietor = $class->getProprietor();
        $expiry = $class->getExpiry();
        $cvc = $class->getCvc();

        $message = 'La tua carta di credito numero '. $number . '<br>';
        $message .= ' Intestato a '.$proprietor.'<br>';
        $message .= ' Scadenza il '.$expiry.'<br>';
        $message .= ' Codice segreto '.$cvc.'<br>';

        echo $message;
    }
}