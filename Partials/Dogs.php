<?php

//('', 'Cuccia per cani Woody con tetto piano', $dogIcon, 'Kennel', 85.99, true); Product example

require_once __DIR__ . '/../Database/db.php';
?>

<h2 class="text-center my-4 ">Cani</h2>

<div class="container ">

    <!--Kennel-->
    <div class="row d-flex flex-wrap my-5">
        <h4 class="text-center ">Cucce e Coperte</h4>
        <?php foreach ($dbProducts as $product) : ?>


            <?php if ($product->categoryIcon->categoryName == 'Dog' && $product->productType == "Kennel") : ?>
                <div class="productCard col-3 d-flex flex-column">
                    <div class="productImage">
                        <img src="<?php $product->getImage() ?>" alt="">
                    </div>
                    <h5><?= $product->getTitle() ?></h5>
                    <span><?= $product->categoryIcon->icon ?></span>
                    <span>Prezzo <?= $product->getPrice() ?> €</span>
                    <span>Disponibilità :
                        <?php
                        if ($product->inStock == true)
                            echo "Disponibile";
                        else
                            echo "Non Disponibile";
                        ?>
                    </span>
                </div>
            <?php endif ?>
        <?php endforeach ?>
    </div>

    <!--Toys-->
    <div class="row d-flex flex-wrap my-5">
        <h4 class="text-center ">Giocattoli</h4>
        <?php foreach ($dbProducts as $product) : ?>
            <?php if ($product->categoryIcon->categoryName == 'Dog' && $product->productType == "Toy") : ?>
                <div class="productCard col-3 d-flex flex-column">
                    <div class="productImage">
                        <img src="<?php $product->getImage() ?>" alt="">
                    </div>
                    <h5><?= $product->getTitle() ?></h5>
                    <span><?= $product->categoryIcon->icon ?></span>
                    <span>Prezzo <?= $product->getPrice() ?> €</span>
                    <span>Disponibilità :
                        <?php
                        if ($product->inStock == true)
                            echo "Disponibile";
                        else
                            echo "Non Disponibile";
                        ?>
                    </span>
                </div>
            <?php endif ?>
        <?php endforeach ?>
    </div>

    <!--Food-->
    <div class="row d-flex flex-wrap my-5">
        <h4 class="text-center ">Cibo</h4>
        <?php foreach ($dbProducts as $product) : ?>
            <?php if ($product->categoryIcon->categoryName == 'Dog' && $product->productType == "Food") : ?>
                <div class="productCard col-3 d-flex flex-column">
                    <div class="productImage">
                        <img src="<?php $product->getImage() ?>" alt="">
                    </div>
                    <h5><?= $product->getTitle() ?></h5>
                    <span><?= $product->categoryIcon->icon ?></span>
                    <span>Prezzo <?= $product->getPrice() ?> €</span>
                    <span>Disponibilità :
                        <?php
                        if ($product->inStock == true)
                            echo "Disponibile";
                        else
                            echo "Non Disponibile";
                        ?>
                    </span>
                </div>
            <?php endif ?>
        <?php endforeach ?>
    </div>


</div>