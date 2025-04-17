<?= snippet('head') ?>
<?= snippet('header') ?>

<main class="main">
    <section class="section">
        <div class="list">
            <div class="list-item">
                <div class="list-item-wrapper">
                    <ul class="list-item-topbar list-item-topbar-header">
                        <li class="topbar-label text-label weight-400">
                            <span>Project</span>
                            <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 1L5 11L1 1"/>
                            </svg>
                        </li>
                        <li class="topbar-label text-label weight-400">
                            <span>Year</span>
                            <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 1L5 11L1 1"/>
                            </svg>
                        </li>
                        <li class="topbar-label text-label weight-400">
                            <span>Client</span>
                            <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 1L5 11L1 1"/>
                            </svg>
                        </li>
                        <li class="topbar-label text-label weight-400">
                            <span>Location</span>
                            <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 1L5 11L1 1"/>
                            </svg>
                        </li>
                        <li class="topbar-label text-label weight-400">
                            <span>Category</span>
                            <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 1L5 11L1 1"/>
                            </svg>
                        </li>
                        <li class="topbar-label text-label weight-400">
                            <span>Status</span>
                            <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 1L5 11L1 1"/>
                            </svg>
                        </li>
                        <li class="empty"></li>
                    </ul>
                </div>
            </div>
            <?php foreach ($page->children()->listed() as $project) : ?>
                <div class="list-item" data-project="<?= $project->title() ?>" data-year="<?= $project->year() ?>" data-client="<?= $project->client() ?>" data-location="<?= $project->location() ?>" data-category="<?= $project->category() ?>" data-status="<?= $project->stat() ?>">
                    <div class="list-item-wrapper">
                        <ul class="list-item-topbar list-item-topbar-content">
                            <li class="topbar-label text-label weight-700"><span><?= $project->title() ?></span></li>
                            <li class="topbar-label text-label weight-700"><span><?= $project->year() ?></span></li>
                            <li class="topbar-label text-label weight-700"><span><?= $project->client() ?></span></li>
                            <li class="topbar-label text-label weight-700"><span><?= $project->location() ?></span></li>
                            <li class="topbar-label text-label weight-700"><span><?= $project->category() ?></span></li>
                            <li class="topbar-label text-label weight-700"><span><?= $project->stat() ?></span></li>
                            <li class="item-ui-buttons">
                                <button class="button">
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.94434 11.9553H16.9443M11.9443 6.95526V16.9553M12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12C23 18.0751 18.0751 23 12 23Z"/>
                                    </svg>
                                </button>
                                <a href="<?= $project->url() ?>" class="button">
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.0176 8.14148L8.01758 16.1415M16.0176 8.14148H10.0176M16.0176 8.14148V14.1415M12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12C23 18.0751 18.0751 23 12 23Z"/>
                                    </svg>
                                </a>
                            </li>
                            <li class="topbar-image">
                                <?php foreach ($project->gallery()->toFiles()->limit(1) as $image) : ?>
                                    <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
                                <?php endforeach ?>
                            </li>
                        </ul>
                        <div class="list-item-content">
                            <div class="list-item-image">
                                <?php foreach ($project->gallery()->toFiles()->limit(2) as $image) : ?>
                                    <figure class="list-item-image-wrapper">
                                        <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
                                        <figcaption class="text-small"><?= $project->imagecaption()->kt() ?></figcaption>
                                    </figure>
                                <?php endforeach ?>
                            </div>
                            <div class="list-item-text">
                                <div class="list-item-text-wrapper text-large weight-700">
                                    <?= $project->description()->kt() ?>
                                </div>
                                <a href="<?= $project->url() ?>" class="button">
                                    <span class="text weight-700">View project</span>
                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.0176 8.14148L8.01758 16.1415M16.0176 8.14148H10.0176M16.0176 8.14148V14.1415M12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12C23 18.0751 18.0751 23 12 23Z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </section>
</main>

<?= snippet('footer') ?>
<?= snippet('foot') ?>