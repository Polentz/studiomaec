<?php
$summary = $item->summary()->toObject();
$previewImages = $item->preview()->toFiles();
$previewText = $item->previewText();
?>

<?php if ($previewImages->isNotEmpty() || $previewText->isNotEmpty()) : ?>
    <div class="list-item accordion alternate" data-project="<?= $item->title() ?>" data-year="<?= $summary->year() ?>" data-client="<?= $summary->client()->slug() ?>" data-location="<?= $summary->location()->slug() ?>" data-category="<?= $summary->category()->slug() ?>" data-stage="<?= $summary->stage()->slug() ?>">
        <ul class="list-topbar-content<?php if ($page->template() != 'work') : ?> accordion-opener<?php endif ?>">
            <?php if ($summary): ?>
                <li class="topbar-label text-label weight-800">
                    <span class="topbar-label-name"><?= $item->title() ?></span>
                </li>
                <li class="topbar-label text-label weight-800">
                    <span<?php if ($summary->year()->isNotEmpty()) : ?> class="topbar-label-name" <?php endif ?>><?= $summary->year() ?></span>
                </li>
                <li class="topbar-label text-label weight-800">
                    <span<?php if ($summary->client()->isNotEmpty()) : ?> class="topbar-label-name" <?php endif ?>><?= $summary->client() ?></span>
                </li>
                <li class="topbar-label text-label weight-800">
                    <span <?php if ($summary->location()->isNotEmpty()) : ?> class="topbar-label-name" <?php endif ?>><?= $summary->location() ?></span>
                </li>
                <li class="topbar-label text-label weight-800">
                    <span <?php if ($summary->category()->isNotEmpty()) : ?> class="topbar-label-name" <?php endif ?>><?= $summary->category() ?></span>
                </li>
                <li class="topbar-label text-label weight-800">
                    <span <?php if ($summary->stage()->isNotEmpty()) : ?> class="topbar-label-name" <?php endif ?>><?= $summary->stage() ?></span>
                </li>
            <?php endif ?>
            <li class="topbar-icons icons">
                <?php if ($page->template() != 'work') : ?>
                    <button class="button plus-minus" role="button" aria-label="Open/Close">
                        <svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                            <path class="horizontal-path" d="M5.94434 10.9553H15.9443" />
                            <path class="vertical-path" d="M10.9443 5.95532V15.9553" />
                        </svg>
                    </button>
                <?php endif ?>
                <a href="<?= $item->url() ?>" class="button go">
                    <svg viewBox="0 0 23 22" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.5176 7.14148L7.51758 15.1415" />
                        <path d="M9.51758 7.14148H15.5176V13.1415" />
                    </svg>
                </a>
            </li>
            <?php if ($cover = $item->cover()->toFile() && $page->template() != 'work') : ?>
                <li class="topbar-image">
                    <img src="<?= $item->cover()->toFile()->url() ?>" alt="<?= $item->cover()->toFile()->name() ?>">
                </li>
            <?php endif ?>
        </ul>


        <div class="list-content accordion-content<?php if ($page->template() == 'work') : ?> open<?php endif ?>">
            <div class="list-content-image">
                <?php foreach ($item->preview()->toFiles()->limit(2) as $image) : ?>
                    <figure class="lightbox-item">
                        <img src="<?= $image->resize(1200, null)->url() ?>" alt="<?= $image->name() ?>">
                    </figure>
                <?php endforeach ?>
            </div>
            <div class="list-content-text">
                <?php if ($item->previewText()->isNotEmpty()) : ?>
                    <h3 class="text-label weight-800"><?= $item->title() ?></h3>
                    <div class="text-medium weight-500">
                        <?= $item->previewText()->kt() ?>
                    </div>
                <?php endif ?>
                <a href="<?= $item->url() ?>" class="button-text weight-800">View project</a>
            </div>
        </div>
    </div>

<?php else : ?>
    <a href="<?= $item->url() ?>" class="list-item" data-project="<?= $item->title() ?>" data-year="<?= $summary->year() ?>" data-client="<?= $summary->client()->slug() ?>" data-location="<?= $summary->location()->slug() ?>" data-category="<?= $summary->category()->slug() ?>" data-stage="<?= $summary->stage()->slug() ?>">
        <ul class="list-topbar-content">
            <?php if ($summary): ?>
                <li class="topbar-label text-label weight-800">
                    <span class="topbar-label-name"><?= $item->title() ?></span>
                </li>
                <li class="topbar-label text-label weight-800">
                    <span<?php if ($summary->year()->isNotEmpty()) : ?> class="topbar-label-name" <?php endif ?>><?= $summary->year() ?></span>
                </li>
                <li class="topbar-label text-label weight-800">
                    <span<?php if ($summary->client()->isNotEmpty()) : ?> class="topbar-label-name" <?php endif ?>><?= $summary->client() ?></span>
                </li>
                <li class="topbar-label text-label weight-800">
                    <span <?php if ($summary->location()->isNotEmpty()) : ?> class="topbar-label-name" <?php endif ?>><?= $summary->location() ?></span>
                </li>
                <li class="topbar-label text-label weight-800">
                    <span <?php if ($summary->category()->isNotEmpty()) : ?> class="topbar-label-name" <?php endif ?>><?= $summary->category() ?></span>
                </li>
                <li class="topbar-label text-label weight-800">
                    <span <?php if ($summary->stage()->isNotEmpty()) : ?> class="topbar-label-name" <?php endif ?>><?= $summary->stage() ?></span>
                </li>
            <?php endif ?>
            <li class="topbar-icons icons">
                <span class="button go">
                    <svg viewBox="0 0 23 22" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.5176 7.14148L7.51758 15.1415" />
                        <path d="M9.51758 7.14148H15.5176V13.1415" />
                    </svg>
                </span>
            </li>
            <?php if ($cover = $item->cover()->toFile()) : ?>
                <li class="topbar-image">
                    <img src="<?= $item->cover()->toFile()->url() ?>" alt="<?= $item->cover()->toFile()->name() ?>">
                </li>
            <?php endif ?>
        </ul>
    </a>
<?php endif ?>