<?php
require_once __DIR__ . '/prodotti.php';

//categorie

$dog = new Category('dog');
$cat = new Category('cat');

//articoli
$dogfood = new Product('Croccantini cani taglia M', 'img', 5, $dog);
$catfood = new Product('Croccantini gatti', 'img', 5, $cat);

$cat_toy = new product('Palo tiragraffi', 'img', 15, $cat);
$dog_toy = new product('pallina', 'img', 6, $dog);

$dogkettel = new product('cuccia per cani xl', 'img', 70, $dog);
$catkettel = new product('cuccia per gatti', 'img', 45, $cat);
