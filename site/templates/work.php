<?php
    $first = $page->gallery()->toFiles()->limit(1);
?>

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
                <li class="text">
                    <p class="weight-400">Project</p>
                    <p class="weight-700"><?= $page->title() ?></p>
                </li>
                <li class="text">
                    <p class="weight-400">Year</p>
                    <p class="weight-700"><?= $page->year() ?></p>
                </li>
                <li class="text">
                    <p class="weight-400">Client</p>
                    <p class="weight-700"><?= $page->client() ?></p>
                </li>
                <li class="text">
                    <p class="weight-400">Location</p>
                    <p class="weight-700"><?= $page->location() ?></p>
                </li>
                <li class="text">
                    <p class="weight-400">Category</p>
                    <p class="weight-700"><?= $page->category() ?></p>
                </li>
                <li class="text">
                    <p class="weight-400">Status</p>
                    <p class="weight-700"><?= $page->stat() ?></p>
                </li>
                <li class="text">
                    <p class="weight-400">Team</p>
                    <p class="weight-700"><?= $page->team() ?></p>
                </li>
            </ul>
        </div>
    </section>

    <?= snippet('grid') ?>
</main>

<?= snippet('footer') ?>
<?= snippet('foot') ?>