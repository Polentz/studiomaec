<?php
$images = $block->images()->toFiles();
?>

<div class="grid-item accordion">
    <div class="item-image slideshow-item">
        <?php foreach ($images as $image): ?>
            <figure class="item-image-wrapper lightbox-item">
                <img src="<?= $image->resize(1200, null)->url() ?>" alt="<?= $image->name() ?>">
            </figure>
        <?php endforeach ?>
    </div>
    <?php if ($images->count() > 1 || $block->text()->isNotEmpty() || $block->link()->isNotEmpty() || $block->url()->isNotEmpty()) : ?>
        <div class="item-footer">
            <?php if ($images->count() > 1) : ?>
                <div class="icons item-footer-counter" style="display: none;">
                    <button class="button left" role="button" aria-label="Previous">
                        <svg viewBox="0 0 23 22" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.49951 11H16.4995" />
                            <path d="M10.4995 7L6.49951 11L10.4995 15" />
                        </svg>
                    </button>
                    <div class="counter text-small weight-500"><span class="counter-num">1</span>/<span class="counter-lenght"><?= $images->count() ?></span></div>
                    <button class="button right" role="button" aria-label="Next">
                        <svg viewBox="0 0 23 22" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.5005 11L6.50049 11" />
                            <path d="M12.5005 15L16.5005 11L12.5005 7" />
                        </svg>
                    </button>
                </div>
            <?php endif ?>
            <?php if ($block->title()->isNotEmpty()) : ?>
                <p class="item-header-title text-label weight-800"><?= $block->title() ?></p>
            <?php endif ?>
            <div class="icons item-footer-links">
                <?php if ($block->text()->isNotEmpty()) : ?>
                    <button class="button plus-minus accordion-opener" role="button" aria-label="Open/Close">
                        <svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                            <path class="horizontal-path" d="M5.94434 10.9553H15.9443" />
                            <path class="vertical-path" d="M10.9443 5.95532V15.9553" />
                        </svg>
                    </button>
                <?php endif ?>
                <?php if ($block->linklocation() == 'web' && $block->url()->isNotEmpty()) : ?>
                    <a href="<?= $block->url()->url() ?>" target="_blank" class="button go">
                        <svg viewBox="0 0 23 22" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.5176 7.14148L7.51758 15.1415" />
                            <path d="M9.51758 7.14148H15.5176V13.1415" />
                        </svg>
                    </a>
                <?php elseif ($block->linklocation() == 'page' && $block->link()->toPage()) : ?>
                    <a href="<?= $block->link()->toPage()->url() ?>" class="button go">
                        <svg viewBox="0 0 23 22" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.5176 7.14148L7.51758 15.1415" />
                            <path d="M9.51758 7.14148H15.5176V13.1415" />
                        </svg>
                    </a>
                <?php endif ?>
            </div>
        </div>
        <?php if ($block->text()->isNotEmpty() || $block->subtext()->isNotEmpty()) : ?>
            <div class="item-content accordion-content">
                <?php if ($block->text()->isNotEmpty()) : ?>
                    <div class="text-medium weight-500">
                        <?= $block->text()->kt() ?>
                    </div>
                <?php endif ?>
                <?php if ($block->subtext()->isNotEmpty()) : ?>
                    <div class="text weight-800">
                        <?= $block->subtext()->kt() ?>
                    </div>
                <?php endif ?>
            </div>
        <?php endif ?>
    <?php endif ?>
</div>