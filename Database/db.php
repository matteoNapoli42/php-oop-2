<?php
require __DIR__ . '/../Models/Categories.php';
require __DIR__ . '/../Models/Product.php';
require __DIR__ . '/../Models//Kennel.php';
require __DIR__ . '/../Models//Toy.php';

$dogIcon = new Category('Dog', '<i class="fa-solid fa-dog"></i>');
$catIcon = new Category('Cat', '<i class="fa-solid fa-cat"></i>');

/*superclass variables 
   string $image, string $title, int $categoryIcon, string $productType, float $price, bool $inStock
*/


//Kennel
$product1 = new Kennel('', 'Cuccia per cani Woody con tetto piano', $dogIcon, 'Kennel', 85.99, true);
$product2 = new Kennel('', 'Cuccia per cani Spike Classic', $dogIcon, 'Kennel', 72.99, false);


//Database Array

$dbProducts = [];

array_push($dbProducts, $product1, $product2);
