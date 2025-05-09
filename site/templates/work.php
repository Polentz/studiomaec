<?php
    $items = $site->grandchildren()->listed()->template('work');
    $first = $items->first();
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
                <div class="intro-info-image lightbox-item">
                    <figure>
                        <img src="<?= $cover->resize(1200, null)->url() ?>" alt="<?= $cover->name() ?>">
                    </figure>
                </div>
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

    <?php if ($page->hasNextListed()) : ?>
        <section class="section footer-section">
            <div class="text-large weight-600">
                <p>next project:</p>
            </div>
            <div class="list">
                <ul class="list-topbar-header">
                    <li class="topbar-label text-label weight-400" data-item="project">
                        <span class="link">Name</span>
                    </li>
                    <li class="topbar-label text-label weight-400" data-item="year">
                        <span class="link">Year</span>
                    </li>
                    <li class="topbar-label text-label weight-400" data-item="client">
                        <span class="link">Client</span>
                    </li>
                    <li class="topbar-label text-label weight-400" data-item="location">
                        <span class="link">Location</span>
                    </li>
                    <li class="topbar-label text-label weight-400" data-item="category">
                        <span class="link">Category</span>
                    </li>
                    <li class="topbar-label text-label weight-400" data-item="status">
                        <span class="link">Status</span>
                    </li>
                </ul>
                <div class="list-item accordion">
                    <ul class="list-topbar-content accordion-opener">
                        <li class="topbar-label text-label weight-700"><span class="link"><?= $page->nextListed()->title() ?></span></li>
                        <li class="topbar-label text-label weight-700" data-item="year"><span class="link"><?= $page->nextListed()->year() ?></span></li>
                        <li class="topbar-label text-label weight-700"><span class="link"><?= $page->nextListed()->client() ?></span></li>
                        <li class="topbar-label text-label weight-700"><span class="link"><?= $page->nextListed()->location() ?></span></li>
                        <li class="topbar-label text-label weight-700"><span class="link"><?= $page->nextListed()->category() ?></span></li>
                        <li class="topbar-label text-label weight-700"><span class="link"><?= $page->nextListed()->stat() ?></span></li>
                        <li class="topbar-icons icons">
                            <button class="button plus-minus">
                                <svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                                    <path class="horizontal-path" d="M5.94434 10.9553H15.9443"/>
                                    <path class="vertical-path" d="M10.9443 5.95532V15.9553"/>
                                </svg>
                            </button>
                            <a href="<?= $page->nextListed()->url() ?>" class="button go">
                                <svg viewBox="0 0 23 22" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5176 7.14148L7.51758 15.1415"/>
                                    <path d="M9.51758 7.14148H15.5176V13.1415"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <div class="list-content accordion-content">
                        <div class="list-content-image">
                            <?php foreach ($page->nextListed()->preview()->toFiles() as $image) : ?>
                                <figure class="list-content-image-wrapper">
                                    <img src="<?= $image->resize(1200, null)->url() ?>" alt="<?= $image->name() ?>">
                                </figure>
                            <?php endforeach ?>
                        </div>
                        <div class="list-content-text">
                            <div class="list-content-text-wrapper text-large weight-700">
                                <?= $page->nextListed()->description()->kt() ?>
                            </div>
                            <a href="<?= $page->nextListed()->url() ?>" class="text-label weight-700">View project</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php elseif ($page->isLast()) : ?>
        <section class="section footer-section">
            <div class="text-large weight-600">
                <p>next project:</p>
            </div>
            <div class="">
                <ul class="list-topbar-header">
                    <li class="topbar-label text-label weight-400" data-item="project">
                        <span class="link">Name</span>
                    </li>
                    <li class="topbar-label text-label weight-400" data-item="year">
                        <span class="link">Year</span>
                    </li>
                    <li class="topbar-label text-label weight-400" data-item="client">
                        <span class="link">Client</span>
                    </li>
                    <li class="topbar-label text-label weight-400" data-item="location">
                        <span class="link">Location</span>
                    </li>
                    <li class="topbar-label text-label weight-400" data-item="category">
                        <span class="link">Category</span>
                    </li>
                    <li class="topbar-label text-label weight-400" data-item="status">
                        <span class="link">Status</span>
                    </li>
                </ul>
                <div class="list-item accordion">
                    <ul class="list-topbar-content accordion-opener">
                        <li class="topbar-label text-label weight-700"><span class="link"><?= $first->title() ?></span></li>
                        <li class="topbar-label text-label weight-700" data-item="year"><span class="link"><?= $first->year() ?></span></li>
                        <li class="topbar-label text-label weight-700"><span class="link"><?= $first->client() ?></span></li>
                        <li class="topbar-label text-label weight-700"><span class="link"><?= $first->location() ?></span></li>
                        <li class="topbar-label text-label weight-700"><span class="link"><?= $first->category() ?></span></li>
                        <li class="topbar-label text-label weight-700"><span class="link"><?= $first->stat() ?></span></li>
                        <li class="topbar-icons icons">
                            <button class="button plus-minus">
                                <svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                                    <path class="horizontal-path" d="M5.94434 10.9553H15.9443"/>
                                    <path class="vertical-path" d="M10.9443 5.95532V15.9553"/>
                                </svg>
                            </button>
                            <a href="<?= $first->url() ?>" class="button go">
                                <svg viewBox="0 0 23 22" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5176 7.14148L7.51758 15.1415"/>
                                    <path d="M9.51758 7.14148H15.5176V13.1415"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <div class="list-content accordion-content">
                        <div class="list-content-image">
                            <?php foreach ($first->preview()->toFiles()->limit(2) as $image) : ?>
                                <figure class="list-content-image-wrapper">
                                    <img src="<?= $image->resize(1200, null)->url() ?>" alt="<?= $image->name() ?>">
                                    <!-- add if -->
                                    <figcaption class="text-small"><?= $first->imagecaption()->kt() ?></figcaption>
                                </figure>
                            <?php endforeach ?>
                        </div>
                        <div class="list-content-text">
                            <div class="list-content-text-wrapper text-large weight-700">
                                <?= $first->description()->kt() ?>
                            </div>
                            <a href="<?= $first->url() ?>" class="text-label weight-700">View project</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif ?>
</main>

<?= snippet('footer') ?>
<?= snippet('foot') ?>