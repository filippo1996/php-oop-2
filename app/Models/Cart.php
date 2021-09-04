<?php

namespace App\Models;

class cart
{
    protected $id;
    protected $name;

    public function __construct($_id, $_name)
    {
        $this->id = $_id;
        $this->name = $_name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }
}