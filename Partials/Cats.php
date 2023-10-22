<?php

//('', 'Cuccia per cani Woody con tetto piano', $dogIcon, 'Kennel', 85.99, true); Product example

require __DIR__ . '/../Database/db.php';
?>

<h2 class="text-center my-4 ">Gatti</h2>

<div class="container d-flex flex-wrap">
    <?php foreach ($dbProducts as $product) : ?>


        <!--Kennel-->

        <?php if ($product->categoryIcon->categoryName == 'Cat' && $product->productType == "Kennel") : ?>
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