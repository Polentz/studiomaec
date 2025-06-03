<?= snippet('head') ?>
<?= snippet('header') ?>

<main class="main">
    <?php if ($page->description()->isNotEmpty() || $page->cover()->isNotEmpty() || $page->infoBlocks()->isNotEmpty()) : ?>
        <section class="section intro-section">
            <?php if ($page->description()->isNotEmpty()) : ?>
                <div class="intro-text text-large weight-600">
                    <?= $page->description()->kt() ?>
                </div>
            <?php endif ?>
            <div class="intro-info grid">
                <?php if ($cover = $page->cover()->toFile()) : ?>
                    <figure class="intro-info-image">
                        <img src="<?= $cover->resize(1200, null)->url() ?>" alt="<?= $cover->name() ?>">
                    </figure>
                <?php endif ?>
                <?php if ($page->infoBlocks()->isNotEmpty()) : ?>
                    <ul class="intro-info-text">
                        <?= $page->infoBlocks()->toBlocks() ?>
                    </ul>
                <?php endif ?>
            </div>
        </section>
    <?php endif ?>
    <?= snippet('grid') ?>
</main>

<?= snippet('footer') ?>
<?= snippet('foot') ?>