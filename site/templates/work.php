<?php
$items = $site->grandchildren()->listed()->template('work');
$first = $items->first();
?>


<?= snippet('head') ?>
<?= snippet('header') ?>

<main class="main">
    <section class="section intro-section">
        <?php if ($page->description()->isNotEmpty()) : ?>
            <div class="intro-text text-large weight-600">
                <?= $page->description()->kt() ?>
            </div>
        <?php endif ?>
        <div class="intro-info grid">
            <?php if ($cover = $page->cover()->toFile()) : ?>
                <div class="intro-info-image lightbox-item">
                    <figure>
                        <img src="<?= $cover->resize(1200, null)->url() ?>" alt="<?= $cover->name() ?>">
                    </figure>
                </div>
            <?php endif ?>
            <ul class="intro-info-text">
                <li class="text">
                    <p class="weight-400">Project</p>
                    <p class="weight-700"><?= $page->title() ?></p>
                </li>
                <?php if ($page->year()->isNotEmpty()) : ?>
                    <li class="text">
                        <p class="weight-400">Year</p>
                        <p class="weight-700"><?= $page->year() ?></p>
                    </li>
                <?php endif ?>
                <?php if ($page->client()->isNotEmpty()) : ?>
                    <li class="text">
                        <p class="weight-400">Client</p>
                        <p class="weight-700"><?= $page->client() ?></p>
                    </li>
                <?php endif ?>
                <?php if ($page->location()->isNotEmpty()) : ?>
                    <li class="text">
                        <p class="weight-400">Location</p>
                        <p class="weight-700"><?= $page->location() ?></p>
                    </li>
                <?php endif ?>
                <?php if ($page->category()->isNotEmpty()) : ?>
                    <li class="text">
                        <p class="weight-400">Category</p>
                        <p class="weight-700"><?= $page->category() ?></p>
                    </li>
                <?php endif ?>
                <?php if ($page->stat()->isNotEmpty()) : ?>
                    <li class="text">
                        <p class="weight-400">Status</p>
                        <p class="weight-700"><?= $page->stat() ?></p>
                    </li>
                <?php endif ?>
                <?php if ($page->team()->isNotEmpty()) : ?>
                    <li class="text">
                        <p class="weight-400">Team</p>
                        <p class="weight-700"><?= $page->team() ?></p>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </section>

    <?= snippet('grid') ?>

    <?php if ($page->hasNextListed()) : ?>
        <section class="section footer-section">
            <div class="text-large weight-600">
                <p>next project:</p>
            </div>
            <div class="list">
                <?php snippet('list-header', slots: true) ?>
                <?php slot('sortable') ?>
                <?php endslot() ?>
                <?php endsnippet() ?>
                <?php snippet('list-items', ['item' => $page->nextListed()]) ?>
            </div>
        </section>
    <?php elseif ($page->isLast()) : ?>
        <section class="section footer-section">
            <div class="text-large weight-600">
                <p>next project:</p>
            </div>
            <div class="list">
                <?php snippet('list-header', slots: true) ?>
                <?php slot('sortable') ?>
                <?php endslot() ?>
                <?php endsnippet() ?>
                <?php snippet('list-items', ['item' => $first]) ?>
            </div>
        </section>
    <?php endif ?>
</main>

<?= snippet('footer') ?>
<?= snippet('foot') ?>