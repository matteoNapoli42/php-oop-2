<?php

class Category
{
    public $categoryName;
    public $icon;

    public function __construct(
        string $categoryName,
        string $icon
    ) {
        $this->categoryName = $categoryName;
        $this->icon = $icon;
    }

    public function getCategory()
    {
        return $this->categoryName;
    }

    public function getIcon()
    {
        return $this->icon;
    }
}
