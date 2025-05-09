<?= snippet('head') ?>
<?= snippet('header') ?>

<main class="main">
    <section class="section intro-section">
        <div class="intro-text text-large weight-600">
            <?= $page->description()->kt() ?>
        </div>
        <div class="intro-info grid">
            <?php if ($cover = $page->cover()->toFile()) : ?>
                <figure class="intro-info-image">
                    <img src="<?= $cover->url() ?>" alt="<?= $cover->name() ?>">
                </figure>
            <?php endif?>
            <ul class="intro-info-text">
                <?= $page->infoBlocks()->toBlocks() ?>
            </ul>
        </div>
    </section>
    <?= snippet('grid') ?>
</main>

<?= snippet('footer') ?>
<?= snippet('foot') ?>