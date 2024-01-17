<?php
require_once __DIR__ . '/prodotti.php';

//categorie

$dog = new Category('dog');
$cat = new Category('cat');

//articoli
$dog_food = new Article('Croccantini "Miglior Cane"', 'croccantini-cane.jpg', 5, $dog, 'food');
$cat_food = new Article('Croccantini "Fufi Top"', 'croccantini-gatto.jpg', 5, $cat, 'food');

$cat_toy = new Article('Palo tiragraffi', 'palo-gatto.jpg', 15, $cat, 'toy');
$dog_toy = new Article('pallina in Stoffa', 'palla-cane.jpg', 6, $dog, 'toy');

$dog_kettel = new Article('cuccia per cani xl', 'cuccia-cane.jpg', 70, $dog, 'kettel');
$cat_kettel = new Article('cuccia per gatti', 'cuccia-gatto.jpg', 45, $cat, 'kettel');
