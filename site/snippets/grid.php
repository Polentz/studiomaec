<section class="section grid-section">
    <?php foreach ($page->grid()->toLayouts() as $layout) : ?>
        <div class="grid">
            <?php foreach ($layout->columns() as $column): ?>
                <?php foreach ($column->blocks() as $block): ?>
                    <?php snippet('blocks/' . $block->type(), ['block' => $block, 'column' => $column, 'layout' => $layout]) ?>
                <?php endforeach ?>
            <?php endforeach ?>
        </div>
    <?php endforeach ?>
</section>