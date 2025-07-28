<?php
$items = $site->grandchildren()->listed()->template('work');
$first = $items->first();
?>


<?= snippet('head') ?>
<?= snippet('header') ?>

<main class="main">
    <?php snippet('cover', slots: true) ?>
    <?php slot('hasSummary') ?>
    <?php endslot() ?>
    <?php endsnippet() ?>

    <?= snippet('intro') ?>

    <?php snippet('grid', slots: true) ?>
    <?php slot('gridField') ?>
    <?php endslot() ?>
    <?php endsnippet() ?>
</main>

<?php if ($page->hasNextListed()) : ?>
    <section class="related-section">
        <div class="text-large weight-500">
            <p>next project:</p>
        </div>
        <div class="list">
            <?php snippet('list-header', slots: false) ?>
            <?php snippet('list-items', ['item' => $page->nextListed()], slots: true) ?>
            <?php slot('hasCover') ?>
            <?php endslot() ?>
            <?php endsnippet() ?>
        </div>
    </section>
<?php elseif ($page->isLast()) : ?>
    <section class="related-section">
        <div class="text-large weight-500">
            <p>next project:</p>
        </div>
        <div class="list">
            <?php snippet('list-header', slots: false) ?>
            <?php snippet('list-items', ['item' => $first], slots: true) ?>
            <?php slot('hasCover') ?>
            <?php endslot() ?>
            <?php endsnippet() ?>
        </div>
    </section>
<?php endif ?>

<?= snippet('footer') ?>
<?= snippet('foot') ?>