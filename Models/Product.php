<?php

class Product
{
    public $image;
    public $title;
    public $categoryIcon;
    public $productType;
    public $price;

    //Constructor
    public function __construct(string $image, string $title, int $categoryIcon, string $productType, float $price)
    {
        $this->image = $image;
        $this->title = $title;
        $this->categoryIcon = $categoryIcon;
        $this->productType = $productType;
        $this->price = $price;
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
}
