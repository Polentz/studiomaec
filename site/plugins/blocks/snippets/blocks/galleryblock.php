<div class="grid-item">
    <?php if ($image = $block->images()->toFile()) : ?>
        <figure class="item-image-wrapper lightbox-item">
            <img src="<?= $image->resize(1200, null)->url() ?>" alt="<?= $image->alt() ?>">
            <?php if ($block->caption()->isNotEmpty()) : ?>
                <figcaption class="item-image-caption text-small weight-500">
                    <?= $block->caption()->inline() ?>
                </figcaption>
            <?php endif ?>
        </figure>
    <?php endif ?>
</div>