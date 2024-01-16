<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!--includiamo php-->
    <?php
    include 'model/main.php';
    ?>
    <!--/includiamo php-->

    <header class="flex">

        <!--titolo pagina-->
        <h1>Animal shop</h1>
        <!--/titolo pagina-->

    </header>

    <main>
        <!--container-->
        <div class="container">

            <!--col cani-->
            <div class="col">
                <h2>Dogs</h2>
                <div class="flex justify-center">
                    <?php foreach ([$dog_food, $dog_toy, $dog_kettel] as $product) : ?>
                        <div class="card">
                            <ul>
                                <li class="image">
                                    <img src="img/<?= $product->getImage() ?>" alt="Product Image">
                                <li>
                                <li class="name pad text-center">
                                    <h3><?= $product->getName() ?></h3>
                                </li>
                                <li class="prezzo pad text-end">
                                    <h4>€<?= $product->getPrice() ?></h4>
                                    <button class="btn">Acquista</button>
                                </li>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!--/col gatti-->
            <div class="col">
                <h2>Cats</h2>
                <div class="flex justify-center">
                    <?php foreach ([$cat_food, $cat_toy, $cat_kettel] as $product) : ?>
                        <div class="card">
                            <ul>
                                <li class="image">
                                    <img src="img/<?= $product->getImage() ?>" alt="Product Image">
                                <li>
                                <li class="name pad text-center">
                                    <h3><?= $product->getName() ?></h3>
                                </li>
                                <li class="prezzo pad text-end">
                                    <h4>€<?= $product->getPrice() ?></h4>
                                    <button class="btn">Acquista</button>
                                </li>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
        <!--/container-->
    </main>
</body>

</html>