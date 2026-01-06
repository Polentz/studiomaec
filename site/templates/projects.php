<?= snippet('head') ?>
<?= snippet('header') ?>

<main class="main">
    <section class="section list-section">
        <div class="list">
            <?= snippet('list-header') ?>
            <?php foreach ($page->children()->listed() as $project) : ?>
                <?= snippet('list-items', ['item' => $project]) ?>
            <?php endforeach ?>
        </div>
    </section>
</main>

<?= snippet('footer') ?>
<?= snippet('foot') ?>