<?php

//creiamo la classe categoria
class Category
{
    private $category;

    public function __construct(string $category)
    {
        $this->category = $category;
    }

    public function getCategory(): string
    {
        return $this->category;
    }
}

// Creiamo la classe con i prodotti
class Product extends Category
{
    private $name;
    private $image;
    private $price;

    public function __construct(string $name, string $image, $price, Category $category)
    {
        // costruttore della classe genitore
        parent::__construct($category->getCategory());

        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
