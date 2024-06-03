<?php
require_once __DIR__ . "/models/product.php";
require_once __DIR__ . "/models/category.php";
require_once __DIR__ . "/models/food.php";



$dog_category = new Category();
$dog_category->setName("cane");

$cat_category = new Category();
$cat_category->setName("gatto");

$product1 = new Product('K9', 'pettorina', 20, 50);
$product1->setDescription('pettorina per cane');
var_dump($product1);

echo ("________________________________________________");

$product2 = new Product('Felix', 'lettiera', 10, 100);
$product2->setDescription('lettiera per gatti');
var_dump($product2);


$food1 = new Food('RR', "Croccantini", 20, 40, $dog_category);
$food1->setDescription('croaccatini dal gusto unico');
var_dump($food1);

$products = [$food1, $product2, $product1];

var_dump($products);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">



</head>

<body>
    <div class="container w-50">
        <?php foreach ($products as  $product) { ?>
            
            <div class="card text-center">
                <!-- <img src="..." class="card-img-top" alt="..."> -->
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product->getBrand() . " " ; echo $product->getName()?></h5>
                    <p class="card-text"> <?php echo $product->getDescription() ?></p>
                    <p class="card-text"> <?php echo $product->getPrice() . "€" ?></p>
                    <p class="card-text"> <?php echo $product->getAmount() . " prodotti disponibili" ?></p>
                    <a href="#" class="btn btn-primary">Add to cart</a>
                </div>
            </div>
        <?php } ?>
    </div>

</body>

</html>