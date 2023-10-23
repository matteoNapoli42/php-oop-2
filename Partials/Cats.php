<?php

//('', 'Cuccia per cani Woody con tetto piano', $dogIcon, 'Kennel', 85.99, true); Product example

require_once __DIR__ . '/../Database/db.php';
?>

<h2 class="text-center my-4 ">Gatti</h2>

<div class="container ">

    <!--Kennel-->
    <div class="row d-flex flex-wrap my-5">
        <h4 class="text-center ">Cucce e Coperte</h4>
        <?php foreach ($dbProducts as $product) : ?>


            <?php if ($product->categoryIcon->categoryName == 'Cat' && $product->productType == "Kennel") : ?>
                <div class="productCard col-3 d-flex flex-column">
                    <?php if ($product->errMessage === null) : ?>
                        <div>
                            <img class="productImage" src="<?php $product->getImage() ?>" alt="">
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


                    <?php elseif ($product->errMessage !== null) : ?>
                        <img class="productImage" src="https://th.bing.com/th/id/OIP.yYBFzWZ0R970KK2bJhwO9AHaEi?pid=ImgDet&rs=1" alt="">
                    <?php endif ?>
                </div>
            <?php endif ?>
        <?php endforeach ?>
    </div>

    <!--Toys-->
    <div class="row d-flex flex-wrap my-5">
        <h4 class="text-center ">Giocattoli</h4>
        <?php foreach ($dbProducts as $product) : ?>
            <?php if ($product->categoryIcon->categoryName == 'Cat' && $product->productType == "Toy") : ?>
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
            <?php if ($product->categoryIcon->categoryName == 'Cat' && $product->productType == "Food") : ?>
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