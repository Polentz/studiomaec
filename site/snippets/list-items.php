<?php
$summary = $item->summary()->toObject();
?>

<div class="list-item accordion alternate" data-project="<?= $item->title() ?>" data-year="<?= $summary->year() ?>" data-client="<?= $summary->client()->slug() ?>" data-location="<?= $summary->location()->slug() ?>" data-category="<?= $summary->category()->slug() ?>" data-status="<?= $summary->stat()->slug() ?>">
    <ul class="list-topbar-content accordion-opener">
        <?php if ($summary): ?>
            <li class="topbar-label text-label weight-800">
                <span class="link"><?= $item->title() ?></span>
            </li>
            <li class="topbar-label text-label weight-800">
                <span<?php if ($summary->year()->isNotEmpty()) : ?> class="link" <?php endif ?>><?= $summary->year() ?></span>
            </li>
            <li class="topbar-label text-label weight-800">
                <span<?php if ($summary->client()->isNotEmpty()) : ?> class="link" <?php endif ?>><?= $summary->client() ?></span>
            </li>
            <li class="topbar-label text-label weight-800">
                <span <?php if ($summary->location()->isNotEmpty()) : ?> class="link" <?php endif ?>><?= $summary->location() ?></span>
            </li>
            <li class="topbar-label text-label weight-800">
                <span <?php if ($summary->category()->isNotEmpty()) : ?> class="link" <?php endif ?>><?= $summary->category() ?></span>
            </li>
            <li class="topbar-label text-label weight-800">
                <span <?php if ($summary->stat()->isNotEmpty()) : ?> class="link" <?php endif ?>><?= $summary->stat() ?></span>
            </li>
        <?php endif ?>
        <li class="topbar-icons icons">
            <button class="button plus-minus" role="button" aria-label="Open/Close">
                <svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                    <path class="horizontal-path" d="M5.94434 10.9553H15.9443" />
                    <path class="vertical-path" d="M10.9443 5.95532V15.9553" />
                </svg>
            </button>
            <a href="<?= $item->url() ?>" class="button go">
                <svg viewBox="0 0 23 22" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.5176 7.14148L7.51758 15.1415" />
                    <path d="M9.51758 7.14148H15.5176V13.1415" />
                </svg>
            </a>
        </li>
        <?php if ($slots->hasCover()) : ?>
            <?php if ($cover = $item->cover()->toFile()) : ?>
                <li class="topbar-image">
                    <img src="<?= $item->cover()->toFile()->url() ?>" alt="<?= $item->cover()->toFile()->name() ?>">
                </li>
            <?php endif ?>
        <?php endif ?>
    </ul>
    <div class="list-content accordion-content">
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
            <a href="<?= $item->url() ?>" class="text-label weight-800">View project</a>
        </div>
    </div>
</div>