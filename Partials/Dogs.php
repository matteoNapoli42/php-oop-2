<?php

require __DIR__ . '/../Database/db.php';
?>

<div class="container">

    <h2 class="text-center my-4 ">Cani</h2>


    <?php foreach ($dbProducts as $product) : ?>
        <!--Kennel-->

        <?php if ($product->categoryIcon->categoryName == 'Dog') : ?>
            <div class="productCard col-3">
                <h5><?= $product->getTitle() ?></h5>
            </div>
        <?php endif ?>



    <?php endforeach ?>
</div>