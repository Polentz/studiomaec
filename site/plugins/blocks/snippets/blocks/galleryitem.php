<?php 
    $images = $block->images()->toFiles();
?>

<div class="grid-item span-<?= $column->span() ?>">
    <div class="item-images">
        <?php if ($image = $block->images()->toFile()) : ?>
            <figure class="item-images-wrapper">
                <img src="<?= $image->url() ?>" alt="<?= $image->name() ?>">
            </figure>
        <?php endif ?>
    </div>
</div>