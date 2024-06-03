<?php 
require_once __DIR__ . "/product.php";
require_once __DIR__ . "/category.php";

class Food extends Product {
    private Category $category;


    public function __construct(string $_brand, string $_name, int $_price, int $_amount, Category $_category)
    {
        parent::__construct($_brand, $_name, $_price, $_amount);

        $this->category = $_category;
    }

}