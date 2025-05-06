<?= snippet('head') ?>
<?= snippet('header') ?>

<main class="main">
    <section class="section grid-section">
        <?php foreach ($page->grid()->toLayouts() as $layout) : ?>
            <div class="grid">
                <?php foreach ($layout->columns() as $column): ?>
                    <div class="grid-item sticky span-<?= $column->span() ?>">
                        <?= $column->blocks() ?>
                    </div>
                <?php endforeach ?>
            </div>
        <?php endforeach ?>
    </section>
</main>

<?= snippet('footer') ?>
<?= snippet('foot') ?>
