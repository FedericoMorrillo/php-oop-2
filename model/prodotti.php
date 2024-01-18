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

// Creiamo la classe per i prodotti
trait Product
{
    private $tipology;

    public function getTipology(): string
    {
        return $this->tipology;
    }
}

class Article extends Category
{

    use Product;
    private $name;
    private $image;
    private $price;

    public function __construct(string $name, string $image, $price, Category $category, string $tipology)
    {
        // costruttore della classe genitore
        parent::__construct($category->getCategory());

        if (!is_numeric($price)) {
            throw new Exception('Il prezzo non è un numero.');
        }

        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->tipology = $tipology;
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
