<?php 
    $images = $block->images()->toFiles();
?>

<div class="grid-item span-<?= $column->span() ?>">
    <div class="item-text text weight-400">
        <?= $block->text()->kt() ?>
    </div>
</div>