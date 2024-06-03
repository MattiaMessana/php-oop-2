<?php
require_once __DIR__ . "/models/product.php";
require __DIR__ . "/models/category.php";


$dog_category = new Category();
$dog_category->setName("cane");

$cat_category = new Category();
$cat_category->setName("gatto");

$product1 = new Product('K9','pettorina', 20, 50, $dog_category);
$product1->setDescription('pettorina per cane');
var_dump($product1);

echo("________________________________________________");

$product2 = new Product('Felix', 'lettiera' , 10 , 100 , $cat_category);
var_dump($product2);

