<?php
require_once __DIR__ . '/prodotti.php';

//categorie

$dog = new Category('dog');
$cat = new Category('cat');

//articoli
$dog_food = new Product('Croccantini "Miglior Cane"', 'croccantini-cane.jpg', 5, $dog);
$cat_food = new Product('Croccantini "Fufi Top"', 'croccantini-gatto.jpg', 5, $cat);

$cat_toy = new product('Palo tiragraffi', 'palo-gatto.jpg', 15, $cat);
$dog_toy = new product('pallina in Stoffa', 'palla-cane.jpg', 6, $dog);

$dog_kettel = new product('cuccia per cani xl', 'cuccia-cane.jpg', 70, $dog);
$cat_kettel = new product('cuccia per gatti', 'cuccia-gatto.jpg', 45, $cat);
