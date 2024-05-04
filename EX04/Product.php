<?php

class Product
{
    private $id;
    private $name;
    private $quantity;

    public function __construct($id, $name, $quantity)
    {
        $this->id = $id;
        $this->name = $name;
        $this->quantity = $quantity;
    }

    // Getters and setters
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
}

