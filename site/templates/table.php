<?= snippet('head') ?>
<?= snippet('header') ?>

<main class="main">
    <section class="section">
        <table id="table" class="list" width="100%">
            <tr class="list-topbar-header">
                <th class="topbar-label text-label weight-400">
                    <span>Project</span>
                    <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 1L5 11L1 1"/>
                    </svg>
                </th>
                <th class="topbar-label text-label weight-400">
                    <span>Year</span>
                    <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 1L5 11L1 1"/>
                    </svg>
                </th>
                <th class="topbar-label text-label weight-400">
                    <span>Client</span>
                    <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 1L5 11L1 1"/>
                    </svg>
                </th>
                <th class="topbar-label text-label weight-400">
                    <span>Location</span>
                    <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 1L5 11L1 1"/>
                    </svg>
                </th>
                <th class="topbar-label text-label weight-400">
                    <span>Category</span>
                    <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 1L5 11L1 1"/>
                    </svg>
                </th>
                <th class="topbar-label text-label weight-400">
                    <span>Status</span>
                    <svg viewBox="0 0 10 13" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 1L5 11L1 1"/>
                    </svg>
                </th>
            </tr>
            <?php foreach ($page->children()->listed()->sortBy('year', 'desc') as $project) : ?>
                <tr class="list-topbar-content accordion-opener" data-id="<?= $project->title() ?>">
                    <td class="topbar-label text-label weight-700"><span class="link"><?= $project->title() ?></span></td>
                    <td class="topbar-label text-label weight-700"><span class="link"><?= $project->year() ?></span></td>
                    <td class="topbar-label text-label weight-700"><span class="link"><?= $project->client() ?></span></td>
                    <td class="topbar-label text-label weight-700"><span class="link"><?= $project->location() ?></span></td>
                    <td class="topbar-label text-label weight-700"><span class="link"><?= $project->category() ?></span></td>
                    <td class="topbar-label text-label weight-700"><span class="link"><?= $project->stat() ?></span></td>
                    <td class="topbar-icons icons">
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
                    </td>
                    <td class="topbar-image">
                        <?php foreach ($project->gallery()->toFiles()->limit(1) as $image) : ?>
                            <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
                        <?php endforeach ?>
                    </td>
                    <td class="list-content accordion-content" data-id="<?= $project->title() ?>">
                        <div class="list-content-image">
                            <?php foreach ($project->gallery()->toFiles()->limit(2) as $image) : ?>
                                <figure class="list-content-image-wrapper">
                                    <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
                                    <figcaption class="text-small"><?= $project->imagecaption()->kt() ?></figcaption>
                                </figure>
                            <?php endforeach ?>
                        </div>
                        <div class="list-content-text">
                            <div class="list-content-text-wrapper text-large weight-700">
                                <?= $project->description()->kt() ?>
                            </div>
                            <a href="<?= $project->url() ?>" class="icons">
                                <span class="text-label weight-700">View project</span>
                                <button class="button go">
                                    <svg viewBox="0 0 23 22" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.5176 7.14148L7.51758 15.1415"/>
                                        <path d="M9.51758 7.14148H15.5176V13.1415"/>
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </section>
</main>

<?= snippet('footer') ?>
<?= snippet('foot') ?>