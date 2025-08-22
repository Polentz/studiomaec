<?php if ($block->description()->isNotEmpty() || $block->text()->isNotEmpty()) : ?>
    <div class="intro-block">
        <?php if ($block->description()->isNotEmpty()) : ?>
            <div class="text-wrapper text-large weight-500">
                <?= $block->description()->kt() ?>
            </div>
        <?php elseif ($block->description()->isEmpty() && $block->text()->isNotEmpty()) : ?>
            <div class="text-block">
                <div class="text-wrapper text-medium weight-500">
                    <?= $block->text()->kt() ?>
                </div>
            </div>
        <?php endif ?>
        <?php if ($block->description()->isNotEmpty() && $block->text()->isNotEmpty()) : ?>
            <div class="grid accordion">
                <div class="button-wrapper accordion-opener">
                    <span class="button-text weight-700">More info</span>
                    <button class="button plus-minus more-info" role="button" aria-label="Open/Close">
                        <svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                            <path class="horizontal-path" d="M5.94434 10.9553H15.9443" />
                            <path class="vertical-path" d="M10.9443 5.95532V15.9553" />
                        </svg>
                    </button>
                </div>
                <div class="text-wrapper text-medium weight-500 accordion-content">
                    <?= $block->text()->kt() ?>
                </div>
            </div>
        <?php endif ?>
    </div>
<?php endif ?>