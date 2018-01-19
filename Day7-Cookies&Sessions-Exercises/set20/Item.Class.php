<?php

class Item{
    
    private $name;
    private $price;
    
    public function __construct($nom, $prix){
        $this->name = $nom;
        $this->price = $prix;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    
    
}