<?php
$items = $site->grandchildren()->listed()->template('work');
$first = $items->first();
?>


<?= snippet('head') ?>
<?= snippet('header') ?>

<main class="main">
    <?= snippet('intro') ?>

    <section class="section cover-section">
        <div class="grid">
            <?php if ($cover = $page->cover()->toFile()) : ?>
                <div class="cover-image lightbox-item">
                    <figure>
                        <img src="<?= $cover->resize(1200, null)->url() ?>" alt="<?= $cover->name() ?>">
                    </figure>
                </div>
            <?php endif ?>
            <?php if ($summary = $page->summary()->toObject()): ?>
                <ul class="intro-info-text">
                    <li class="text">
                        <p class="weight-400">Project</p>
                        <p class="weight-700"><?= $page->title() ?></p>
                    </li>
                    <?php if ($summary->year()->isNotEmpty()) : ?>
                        <li class="text">
                            <p class="weight-400">Year</p>
                            <p class="weight-700"><?= $summary->year() ?></p>
                        </li>
                    <?php endif ?>
                    <?php if ($summary->client()->isNotEmpty()) : ?>
                        <li class="text">
                            <p class="weight-400">Client</p>
                            <p class="weight-700"><?= $summary->client() ?></p>
                        </li>
                    <?php endif ?>
                    <?php if ($summary->location()->isNotEmpty()) : ?>
                        <li class="text">
                            <p class="weight-400">Location</p>
                            <p class="weight-700"><?= $summary->location() ?></p>
                        </li>
                    <?php endif ?>
                    <?php if ($summary->category()->isNotEmpty()) : ?>
                        <li class="text">
                            <p class="weight-400">Category</p>
                            <p class="weight-700"><?= $summary->category() ?></p>
                        </li>
                    <?php endif ?>
                    <?php if ($summary->stat()->isNotEmpty()) : ?>
                        <li class="text">
                            <p class="weight-400">Status</p>
                            <p class="weight-700"><?= $summary->stat() ?></p>
                        </li>
                    <?php endif ?>
                    <?php if ($summary->team()->isNotEmpty()) : ?>
                        <li class="text">
                            <p class="weight-400">Team</p>
                            <p class="weight-700"><?= $summary->team() ?></p>
                        </li>
                    <?php endif ?>
                </ul>
            <?php endif ?>
        </div>
    </section>

    <?php snippet('grid', slots: true) ?>
    <?php slot('gridField') ?>
    <?php endslot() ?>
    <?php endsnippet() ?>
</main>

<?php if ($page->hasNextListed()) : ?>
    <section class="related-section">
        <div class="text-large weight-600">
            <p>next project:</p>
        </div>
        <div class="list">
            <?php snippet('list-header', slots: false) ?>
            <?php snippet('list-items', ['item' => $page->nextListed()]) ?>
        </div>
    </section>
<?php elseif ($page->isLast()) : ?>
    <section class="related-section">
        <div class="text-large weight-600">
            <p>next project:</p>
        </div>
        <div class="list">
            <?php snippet('list-header', slots: false) ?>
            <?php snippet('list-items', ['item' => $first]) ?>
        </div>
    </section>
<?php endif ?>

<?= snippet('footer') ?>
<?= snippet('foot') ?>