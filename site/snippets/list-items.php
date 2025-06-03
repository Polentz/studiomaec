<div class="list-item accordion alternate" data-project="<?= $item->title() ?>" data-year="<?= $item->year() ?>" data-client="<?= $item->client()->slug() ?>" data-location="<?= $item->location()->slug() ?>" data-category="<?= $item->category()->slug() ?>" data-status="<?= $item->stat()->slug() ?>">
    <ul class="list-topbar-content accordion-opener">
        <li class="topbar-label text-label link weight-700"><span><?= $item->title() ?></span></li>
        <li class="topbar-label text-label <?php if ($item->year()->isNotEmpty()) : ?>link<?php endif ?> weight-700" data-item="year"><span><?= $item->year() ?></span></li>
        <li class="topbar-label text-label <?php if ($item->client()->isNotEmpty()) : ?>link<?php endif ?> weight-700"><span><?= $item->client() ?></span></li>
        <li class="topbar-label text-label <?php if ($item->location()->isNotEmpty()) : ?>link<?php endif ?> weight-700"><span><?= $item->location() ?></span></li>
        <li class="topbar-label text-label <?php if ($item->category()->isNotEmpty()) : ?>link<?php endif ?> weight-700"><span><?= $item->category() ?></span></li>
        <li class="topbar-label text-label <?php if ($item->stat()->isNotEmpty()) : ?>link<?php endif ?> weight-700"><span><?= $item->stat() ?></span></li>

        <li class="topbar-icons icons">
            <button class="button plus-minus">
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
            <li class="topbar-image">
                <img src="<?= $item->cover()->toFile()->url() ?>" alt="<?= $item->cover()->toFile()->name() ?>">
            </li>
        <?php endif ?>
    </ul>
    <div class="list-content accordion-content">
        <div class="list-content-image lightbox-item">
            <?php foreach ($item->preview()->toFiles()->limit(2) as $image) : ?>
                <figure class="list-content-image-wrapper">
                    <img src="<?= $image->resize(1200, null)->url() ?>" alt="<?= $image->name() ?>">
                </figure>
            <?php endforeach ?>
        </div>
        <div class="list-content-text">
            <?php if ($item->description()->isNotEmpty()) : ?>
                <div class="list-content-text-wrapper text-medium weight-500">
                    <?= $item->description()->kt() ?>
                </div>
            <?php endif ?>
            <a href="<?= $item->url() ?>" class="text-label weight-700">View project</a>
        </div>
    </div>
</div>