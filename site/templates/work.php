<?php
$items = $site->grandchildren()->listed()->template('work');
$first = $items->first();
?>


<?= snippet('head') ?>
<?= snippet('header') ?>

<main class="main">
    <?= snippet('cover') ?>
    <section class="section intro-section">
        <?= $page->intro()->toBlocks() ?>
    </section>
    <?= snippet('grid') ?>
</main>

<?php if ($page->hasNextListed()) : ?>
    <section class="related-section">
        <div class="text-large weight-500">
            <p>Next project: <a href="<?= $page->nextListed()->url() ?>"><?= $page->nextListed()->title() ?></a></p>
        </div>
        <!-- <div class="list">
            <?= snippet('list-header', slots: false) ?>
            <?= snippet('list-items', ['item' => $page->nextListed()]) ?>
        </div> -->
    </section>
<?php elseif ($page->isLast()) : ?>
    <section class="related-section">
        <div class="text-large weight-500">
            <p>Next project: <a href="<?= $first->url() ?>"><?= $first->title() ?></a></p>
        </div>
        <!-- <div class="list">
            <?= snippet('list-header', slots: false) ?>
            <?= snippet('list-items', ['item' => $first]) ?>
        </div> -->
    </section>
<?php endif ?>

<?= snippet('footer') ?>
<?= snippet('foot') ?>