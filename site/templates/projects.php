<?= snippet('head') ?>
<?= snippet('header') ?>

<main class="main">
    <section class="section list-section">
        <div class="list">
            <?php snippet('list-header', slots: true) ?>
            <?php slot('isSortable') ?>
            <?php endslot() ?>
            <?php endsnippet() ?>
            <?php foreach ($page->children()->listed() as $project) : ?>
                <?= snippet('list-items', ['item' => $project]) ?>
            <?php endforeach ?>
        </div>
    </section>
</main>

<?= snippet('footer') ?>
<?= snippet('foot') ?>