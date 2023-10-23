<?php


require __DIR__ . '/../Traits/ProductPrice.php';
class Product
{
    public $image;
    public $title;
    public $categoryIcon;
    public $productType;
    public $price;
    public $inStock;
    public $errMessage;
    use ProductPrice;


    //Constructor
    public function __construct(string $image, string $title, object $categoryIcon, string $productType, float $price, bool $inStock)
    {
        $this->image = $image;
        $this->title = $title;
        $this->categoryIcon = $categoryIcon;
        $this->productType = $productType;
        $this->price = $price;
        $this->inStock = $inStock;
        $this->errMessage = null;
    }

    //Getter Methods
    public function getImage()
    {
        return $this->image;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getIcon()
    {
        return $this->categoryIcon;
    }

    public function getType()
    {
        return $this->productType;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getStock()
    {
        return $this->inStock;
    }
}
