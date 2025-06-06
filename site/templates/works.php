<?= snippet('head') ?>
<?= snippet('header') ?>

<main class="main">
    <?= snippet('intro') ?>

    <section class="section list-section">
        <div class="list">
            <?php snippet('list-header', slots: true) ?>
            <?php slot('isSortable') ?>
            <?php endslot() ?>
            <?php endsnippet() ?>
            <?php foreach ($page->children()->listed() as $project) : ?>
                <?php snippet('list-items', ['item' => $project], slots: true) ?>
                <?php slot('hasCover') ?>
                <?php endslot() ?>
                <?php endsnippet() ?>
            <?php endforeach ?>
        </div>
    </section>
</main>

<?= snippet('footer') ?>
<?= snippet('foot') ?>