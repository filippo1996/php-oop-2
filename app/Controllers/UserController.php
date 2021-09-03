<?php

namespace App\Controllers;

use App\Models\User;
use Exception;

class UserController extends User
{
    /**
     * proprietà della classe parent
     * protected $user;
     * private $access;
     */

    public $content;

    public function __construct($user, $access){
        parent::__construct($user, $access);
    }

    public function showAccess()
    {
        if(!$this->getAccess()){
            throw new Exception('Non hai eseguito l\'accesso');
        }
        return $username = $this->getUser()['username'];
        //$this->content =  view('dashboard', compact('username'));
    }
}