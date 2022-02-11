<?php foreach ($products as $product) { ?>
    <p><?= $product->title ?> | <?= $product->price ?> | Category: <?= $product->category->title ?></p>
<?php } ?>