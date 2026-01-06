<?php
$summary = $item->summary()->toObject();
$previewImages = $item->preview()->toFiles();
$previewText = $item->previewText();
?>


<div class="list-item accordion" data-project="<?= $item->title() ?>" data-year="<?= $summary->year() ?>" data-client="<?= $summary->client()->slug() ?>" data-location="<?= $summary->location()->slug() ?>" data-category="<?= $summary->category()->slug() ?>" data-meters="<?= $summary->meters()->slug() ?>" data-stage="<?= $summary->stage()->slug() ?>">
    <ul class="list-topbar-content<?php if ($previewImages->isNotEmpty() || $previewText->isNotEmpty()) : ?> accordion-opener<?php endif ?>">
        <li class="topbar-label text-label weight-500">
            <span class="topbar-label-name"><?= $item->title() ?></span>
        </li>
        <li class="topbar-label text-label weight-500">
            <span<?php if ($summary->year()->isNotEmpty()) : ?> class="topbar-label-name" <?php endif ?>><?= $summary->year() ?></span>
        </li>
        <li class="topbar-label text-label weight-500">
            <span<?php if ($summary->client()->isNotEmpty()) : ?> class="topbar-label-name" <?php endif ?>><?= $summary->client() ?></span>
        </li>
        <li class="topbar-label text-label weight-500">
            <span <?php if ($summary->location()->isNotEmpty()) : ?> class="topbar-label-name" <?php endif ?>><?= $summary->location() ?></span>
        </li>
        <li class="topbar-label text-label weight-500">
            <span <?php if ($summary->category()->isNotEmpty()) : ?> class="topbar-label-name" <?php endif ?>><?= $summary->category() ?></span>
        </li>
        <li class="topbar-label text-label weight-500">
            <span <?php if ($summary->meters()->isNotEmpty()) : ?> class="topbar-label-name" <?php endif ?>><?= $summary->meters() ?></span>
        </li>
        <li class="topbar-label text-label weight-500">
            <span <?php if ($summary->stage()->isNotEmpty()) : ?> class="topbar-label-name" <?php endif ?>><?= $summary->stage() ?></span>
        </li>
        <li class="topbar-icons icons">
            <?php if ($previewImages->isNotEmpty() || $previewText->isNotEmpty()) : ?>
                <button class="button plus-minus" role="button" aria-label="Open/Close">
                    <svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                        <path class="horizontal-path" d="M5.94434 10.9553H15.9443" />
                        <path class="vertical-path" d="M10.9443 5.95532V15.9553" />
                    </svg>
                </button>
            <?php endif ?>
            <?php if ($item->publishToggle()->isTrue()) : ?>
                <a href="<?= $item->url() ?>" class="button go">
                    <svg viewBox="0 0 23 22" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.5176 7.14148L7.51758 15.1415" />
                        <path d="M9.51758 7.14148H15.5176V13.1415" />
                    </svg>
                </a>
            <?php endif ?>
        </li>
        <?php if ($image = $item->previewImage()->toFile()) : ?>
            <li class="topbar-image">
                <?php if ($image->type() == 'image') : ?>
                    <img src="<?= $image->resize(1200, null)->url() ?>" alt="<?= $image->alt() ?>">
                <?php elseif ($image->type() == 'video') : ?>
                    <video autoplay muted loop controlslist="noplaybackrate nodownload" disablePictureInPicture>
                        <source src="<?= $image->url() ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                <?php endif ?>
            </li>
        <?php endif ?>
    </ul>
    <?php if ($previewImages->isNotEmpty() || $previewText->isNotEmpty()) : ?>
        <div class="list-content accordion-content">
            <div class="list-content-image">
                <?php foreach ($item->preview()->toFiles()->limit(2) as $image) : ?>
                    <figure class="lightbox-item">
                        <?php if ($image->type() == 'image') : ?>
                            <img src="<?= $image->resize(1200, null)->url() ?>" alt="<?= $image->alt() ?>">
                        <?php elseif ($image->type() == 'video') : ?>
                            <video autoplay muted loop controlslist="noplaybackrate nodownload" disablePictureInPicture>
                                <source src="<?= $image->url() ?>" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        <?php endif ?>
                    </figure>
                <?php endforeach ?>
            </div>
            <div class="list-content-text">
                <h3 class="text-label weight-700"><?= $item->title() ?></h3>
                <?php if ($item->previewText()->isNotEmpty()) : ?>
                    <div class="text weight-500">
                        <?= $item->previewText()->kt() ?>
                    </div>
                <?php endif ?>
                <?php if ($item->publishToggle()->isTrue()) : ?>
                    <a href="<?= $item->url() ?>" class="button-text weight-700">View project</a>
                <?php endif ?>
            </div>
        </div>
</div>
<?php endif ?>