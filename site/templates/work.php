<?php
$items = $site->grandchildren()->listed()->template('work');
$first = $items->first();
?>


<?= snippet('head') ?>
<?= snippet('header') ?>

<main class="main">
    <?= snippet('cover') ?>
    <?= snippet('intro') ?>
    <?= snippet('grid') ?>
</main>

<?php if ($page->hasNextListed()) : ?>
    <section class="related-section">
        <div class="text-large weight-500">
            <p>next project:</p>
        </div>
        <div class="list">
            <?= snippet('list-header', slots: false) ?>
            <?= snippet('list-items', ['item' => $page->nextListed()]) ?>
        </div>
    </section>
<?php elseif ($page->isLast()) : ?>
    <section class="related-section">
        <div class="text-large weight-500">
            <p>next project:</p>
        </div>
        <div class="list">
            <?= snippet('list-header', slots: false) ?>
            <?= snippet('list-items', ['item' => $first]) ?>
        </div>
    </section>
<?php endif ?>

<?= snippet('footer') ?>
<?= snippet('foot') ?>