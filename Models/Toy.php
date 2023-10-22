<?php
/*superclass variables 
   string $image, string $title, int $categoryIcon, string $productType, float $price, bool $inStock
*/

class Toy extends Product
{
    public function __construct(string $image, string $title, object $categoryIcon, string $productType, float $price, bool $inStock)
    {
        parent::__construct($image, $title, $categoryIcon, $productType, $price, $inStock);
    }
}
