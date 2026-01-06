<div class="grid-item">
    <?php if ($image = $block->images()->toFile()) : ?>
        <figure class="item-image-wrapper lightbox-item">
            <?php if ($image->type() == 'image') : ?>
                <img src="<?= $image->resize(1200, null)->url() ?>" alt="<?= $image->alt() ?>">
            <?php elseif ($image->type() == 'video') : ?>
                <video autoplay muted loop controlslist="noplaybackrate nodownload" disablePictureInPicture>
                    <source src="<?= $image->url() ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            <?php endif ?>
            <?php if ($block->caption()->isNotEmpty()) : ?>
                <figcaption class="item-image-caption text-small weight-500">
                    <?= $block->caption()->inline() ?>
                </figcaption>
            <?php endif ?>
        </figure>
    <?php endif ?>
</div>