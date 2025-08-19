<?php if ($page->grid()->isNotEmpty()) : ?>
    <section class="section grid-section">
        <?php foreach ($page->grid()->toLayouts() as $layout) : ?>
            <?php if ($layout->isNotEmpty()) : ?>
                <div class="grid">
                    <?php foreach ($layout->columns() as $column): ?>
                        <div class="grid-column span-<?= $column->span() ?>">
                            <?php foreach ($column->blocks() as $block): ?>
                                <?php snippet('blocks/' . $block->type(), ['block' => $block, 'column' => $column, 'layout' => $layout]) ?>
                            <?php endforeach ?>
                        </div>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
        <?php endforeach ?>
    </section>
<?php endif ?>