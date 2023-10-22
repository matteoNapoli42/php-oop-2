<?php
require __DIR__ . '/../Models/Categories.php';
require __DIR__ . '/../Models/Product.php';
require __DIR__ . '/../Models//Kennel.php';
require __DIR__ . '/../Models//Toy.php';
require __DIR__ . '/../Models//Food.php';

$dogIcon = new Category('Dog', '<i class="fa-solid fa-dog"></i>');
$catIcon = new Category('Cat', '<i class="fa-solid fa-cat"></i>');

/*superclass variables 
   string $image, string $title, int $categoryIcon, string $productType, float $price, bool $inStock
*/

/* DOGS */

//Kennel
$kennel1 = new Kennel('', 'Cuccia per cani Woody con tetto piano', $dogIcon, 'Kennel', 85.99, true);
$kennel2 = new Kennel('', 'Cuccia per cani Spike Classic', $dogIcon, 'Kennel', 72.99, false);

//Toy
$toy1 = new Toy('', 'Pelushe Squeak', $dogIcon, 'Toy', 11.99, false);

//Food
$food1 = new Food('', 'Croccantini di carne', $dogIcon, 'Food', 23.99, false);

/* CATS */

//Kennel
$kennel3 = new Kennel('', 'Cuccia per cani Woody con tetto piano', $catIcon, 'Kennel', 85.99, true);
$kennel4 = new Kennel('', 'Cuccia per cani Spike Classic', $catIcon, 'Kennel', 72.99, false);

//Toy
$toy2 = new Toy('', 'Pelushe Squeak', $catIcon, 'Toy', 11.99, false);






//Database Array

$dbProducts = [];

array_push($dbProducts, $kennel1, $kennel2, $toy1, $kennel3, $kennel4, $toy2, $food1);
