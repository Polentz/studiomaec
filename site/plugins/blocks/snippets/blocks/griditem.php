<?php 
    $images = $block->images()->toFiles();
?>

<div class="item-header">
    <p class="item-header-title text weight-700"><?= $block->title() ?></p>
    <p class="item-header-category text weight-500"><?= $block->category() ?></p>
</div>
<div class="item-images">
    <?php foreach ($images as $image): ?>
        <figure class="item-images-wrapper">
            <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
        </figure>
    <?php endforeach ?>
</div>
<div class="accordion">
    <div class="item-footer">
        <?php if ($images->count() > 1) : ?>
            <div class="icons">
                <button class="button left">
                    <svg viewBox="0 0 23 22" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.49951 11H16.4995"/>
                        <path d="M10.4995 7L6.49951 11L10.4995 15"/>
                    </svg>
                </button>
                <div class="counter text-small weight-500"><span class="counter-num">1</span>/<span class="counter-lenght"><?= $images->count() ?></span></div>
                <button class="button right">
                    <svg viewBox="0 0 23 22" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.5005 11L6.50049 11"/>
                        <path d="M12.5005 15L16.5005 11L12.5005 7"/>
                    </svg>
                </button>
            </div>
        <?php endif ?>
        <div class="icons">
            <?php if ($block->text()->isNotEmpty()) : ?>
                <button class="button plus-minus accordion-opener">
                    <svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                        <path class="horizontal-path" d="M5.94434 10.9553H15.9443"/>
                        <path class="vertical-path" d="M10.9443 5.95532V15.9553"/>
                    </svg>
                </button>
            <?php endif ?>
            <?php if ($block->link()->isNotEmpty()) : ?>
                <a href="<?= $block->link()->url() ?>" class="button go">
                    <svg viewBox="0 0 23 22" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.5176 7.14148L7.51758 15.1415"/>
                        <path d="M9.51758 7.14148H15.5176V13.1415"/>
                    </svg>
                </a>
            <?php endif ?>
        </div>
    </div>
    <div class="item-content accordion-content text-medium weight-500">
        <?= $block->text()->kt() ?>
    </div>
</div>