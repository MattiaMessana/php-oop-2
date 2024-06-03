<?php
require_once __DIR__ . "/category.php";
class Product {
    private string      $brand;
    private string      $name;
    private string      $description;
    private int         $price;
    private int         $amount;
    private string      $poster;
    private Category    $category;

    public function __construct(string $_brand, string $_name, int $_price, int $_amount, Category $_category){ 
        $this->brand = $_brand;
        $this->name = $_name;     
        $this->price = $_price;
        $this->amount = $_amount;
        $this->category = $_category;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($_description)
    {
        $this->description = $_description;

    }

    /**
     * Get the value of brand
     */ 
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get the value of amount
     */ 
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Get the value of poster
     */ 
    public function getPoster()
    {
        return $this->poster;
    }

    /**
     * Set the value of poster
     *
     * @return  self
     */ 
    public function setPoster($_poster)
    {
        $this->poster = $_poster;

    }
}
