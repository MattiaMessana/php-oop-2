<?php
class Product {
    private string      $brand;
    private string      $name;
    private string      $description;
    private int         $price;
    private int         $amount;
    public  Category    $category;

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
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }
}
