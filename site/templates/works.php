<?= snippet('head') ?>
<?= snippet('header') ?>

<!-- Posso fare la topbar dinamica con structure -->

<main class="main">
    <section class="section list-section">
        <div class="list">
            <ul class="list-topbar-header">
                <li class="topbar-label text-label weight-400" data-item="project">
                    <span class="link">Name</span>
                    <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 1L5 11L1 1"/>
                    </svg>
                </li>
                <li class="topbar-label text-label weight-400" data-item="year">
                    <span class="link">Year</span>
                    <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 1L5 11L1 1"/>
                    </svg>
                </li>
                <li class="topbar-label text-label weight-400" data-item="client">
                    <span class="link">Client</span>
                    <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 1L5 11L1 1"/>
                    </svg>
                </li>
                <li class="topbar-label text-label weight-400" data-item="location">
                    <span class="link">Location</span>
                    <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 1L5 11L1 1"/>
                    </svg>
                </li>
                <li class="topbar-label text-label weight-400" data-item="category">
                    <span class="link">Category</span>
                    <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 1L5 11L1 1"/>
                    </svg>
                </li>
                <li class="topbar-label text-label weight-400" data-item="status">
                    <span class="link">Status</span>
                    <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 1L5 11L1 1"/>
                    </svg>
                </li>
            </ul>
            <!-- sortBy('year', 'asc') -->
            <?php foreach ($page->children()->listed() as $project) : ?>
                <div class="list-item accordion alternate" data-project="<?= $project->title() ?>" data-year="<?= $project->year() ?>" data-client="<?= $project->client()->slug() ?>" data-location="<?= $project->location()->slug() ?>" data-category="<?= $project->category()->slug() ?>" data-status="<?= $project->stat()->slug() ?>">
                    <ul class="list-topbar-content accordion-opener">
                        <li class="topbar-label text-label weight-700"><span class="link"><?= $project->title() ?></span></li>
                        <li class="topbar-label text-label weight-700"><span class="link"><?= $project->year() ?></span></li>
                        <li class="topbar-label text-label weight-700"><span class="link"><?= $project->client() ?></span></li>
                        <li class="topbar-label text-label weight-700"><span class="link"><?= $project->location() ?></span></li>
                        <li class="topbar-label text-label weight-700"><span class="link"><?= $project->category() ?></span></li>
                        <li class="topbar-label text-label weight-700"><span class="link"><?= $project->stat() ?></span></li>
                        <li class="topbar-icons icons">
                            <button class="button plus-minus">
                                <svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                                    <path class="horizontal-path" d="M5.94434 10.9553H15.9443"/>
                                    <path class="vertical-path" d="M10.9443 5.95532V15.9553"/>
                                </svg>
                            </button>
                            <a href="<?= $project->url() ?>" class="button go">
                                <svg viewBox="0 0 23 22" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5176 7.14148L7.51758 15.1415"/>
                                    <path d="M9.51758 7.14148H15.5176V13.1415"/>
                                </svg>
                            </a>
                        </li>
                        <li class="topbar-image">
                            <?php foreach ($project->gallery()->toFiles()->limit(1) as $image) : ?>
                                <img src="<?= $image->url() ?>" alt="<?= $image->name() ?>">
                            <?php endforeach ?>
                        </li>
                    </ul>
                    <div class="list-content accordion-content">
                        <div class="list-content-image">
                            <?php foreach ($project->gallery()->toFiles()->limit(2) as $image) : ?>
                                <figure class="list-content-image-wrapper">
                                    <img src="<?= $image->url() ?>" alt="<?= $image->name() ?>">
                                    <!-- add if -->
                                    <figcaption class="text-small"><?= $project->imagecaption()->kt() ?></figcaption>
                                </figure>
                            <?php endforeach ?>
                        </div>
                        <div class="list-content-text">
                            <div class="list-content-text-wrapper text-large weight-700">
                                <?= $project->description()->kt() ?>
                            </div>
                            <a href="<?= $project->url() ?>" class="text-label weight-700">View project</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </section>
</main>

<?= snippet('footer') ?>
<?= snippet('foot') ?>


<svg viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M3.5752 3.5752C7.6757 -0.525309 14.3243 -0.525309 18.4248 3.5752C22.5253 7.6757 22.5253 14.3243 18.4248 18.4248C14.3243 22.5253 7.6757 22.5253 3.5752 18.4248C-0.525309 14.3243 -0.525309 7.6757 3.5752 3.5752Z"/>
    <path d="M7.45679 7.39349L14.5279 14.4646"/>
    <path d="M14.5278 7.39349L7.45676 14.4646"/>
</svg>


<svg viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M7.45679 7.39349L14.5279 14.4646"/>
    <path d="M14.5278 7.39349L7.45676 14.4646"/>
</svg>
