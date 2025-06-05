<div class="grid-item">
    <div class="item-image lightbox-item">
        <?php if ($image = $block->images()->toFile()) : ?>
            <figure class="item-image-wrapper">
                <img src="<?= $image->resize(1200, null)->url() ?>" alt="<?= $image->name() ?>">
            </figure>
            <?php if ($block->caption()->isNotEmpty()) : ?>
                <div class="item-image-caption text-small weight-500">
                    <p><?= $block->caption() ?></p>
                </div>
            <?php endif ?>
        <?php endif ?>
    </div>
</div>