<?php if ($page->cover()->toFile() || $page->summary()->toObject()->isNotEmpty()) : ?>
    <section class="section cover-section">
        <div class="grid">
            <?php if ($image = $page->cover()->toFile()) : ?>
                <figure class="cover-image lightbox-item">
                    <?php if ($image->type() == 'image') : ?>
                        <img src="<?= $image->resize(1200, null)->url() ?>" alt="<?= $image->alt() ?>">
                    <?php elseif ($image->type() == 'video') : ?>
                        <video autoplay muted loop controlslist="noplaybackrate nodownload" disablePictureInPicture>
                            <source src="<?= $image->url() ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    <?php endif ?>
                    <?php if ($page->caption()->isNotEmpty()) : ?>
                        <figcaption class="item-image-caption text-small weight-500">
                            <?= $page->caption()->inline() ?>
                        </figcaption>
                    <?php endif ?>
                </figure>
            <?php endif ?>
            <?php if ($summary = $page->summary()->toObject()) : ?>
                <ul class="summary-list">
                    <li class="summary-item">
                        <p class="text-label weight-500">Project</p>
                        <p class="text weight-700"><?= $page->title() ?></p>
                    </li>
                    <?php if ($summary->year()->isNotEmpty()) : ?>
                        <li class="summary-item">
                            <p class="text-label weight-500">Year</p>
                            <p class="text weight-700"><?= $summary->year() ?></p>
                        </li>
                    <?php endif ?>
                    <?php if ($summary->client()->isNotEmpty()) : ?>
                        <li class="summary-item">
                            <p class="text-label weight-500">Client</p>
                            <p class="text weight-700"><?= $summary->client() ?></p>
                        </li>
                    <?php endif ?>
                    <?php if ($summary->location()->isNotEmpty()) : ?>
                        <li class="summary-item">
                            <p class="text-label weight-500">Location</p>
                            <p class="text weight-700"><?= $summary->location() ?></p>
                        </li>
                    <?php endif ?>
                    <?php if ($summary->category()->isNotEmpty()) : ?>
                        <li class="summary-item">
                            <p class="text-label weight-500">Category</p>
                            <p class="text weight-700"><?= $summary->category() ?></p>
                        </li>
                    <?php endif ?>
                    <?php if ($summary->stage()->isNotEmpty()) : ?>
                        <li class="summary-item">
                            <p class="text-label weight-500">Stage</p>
                            <p class="text weight-700"><?= $summary->stage() ?></p>
                        </li>
                    <?php endif ?>
                    <?php if ($summary->team()->isNotEmpty()) : ?>
                        <li class="summary-item">
                            <p class="text-label weight-500">Team</p>
                            <p class="text weight-700"><?= $summary->team() ?></p>
                        </li>
                    <?php endif ?>
                </ul>
            <?php endif ?>
        </div>
    </section>
<?php endif ?>