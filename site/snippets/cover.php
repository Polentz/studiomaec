<?php if ($slots->hasSummary()): ?>
    <?php if ($page->cover()->toFile() || $page->summary()->toObject()->isNotEmpty()) : ?>
        <section class="section cover-section">
            <div class="grid">
                <?php if ($cover = $page->cover()->toFile()) : ?>
                    <figure class="cover-image lightbox-item">
                        <img src="<?= $cover->resize(1200, null)->url() ?>" alt="<?= $cover->name() ?>">
                        <?php if ($page->caption()->isNotEmpty()) : ?>
                            <figcaption class="item-image-caption text-small weight-500">
                                <?= $page->caption()->inline() ?>
                            </figcaption>
                        <?php endif ?>
                    </figure>
                <?php endif ?>
                <?php if ($summary = $page->summary()->toObject()) : ?>
                    <ul class="summary-list">
                        <li class="text">
                            <p class="weight-500">Project</p>
                            <p class="weight-800"><?= $page->title() ?></p>
                        </li>
                        <?php if ($summary->year()->isNotEmpty()) : ?>
                            <li class="text">
                                <p class="weight-500">Year</p>
                                <p class="weight-800"><?= $summary->year() ?></p>
                            </li>
                        <?php endif ?>
                        <?php if ($summary->client()->isNotEmpty()) : ?>
                            <li class="text">
                                <p class="weight-500">Client</p>
                                <p class="weight-800"><?= $summary->client() ?></p>
                            </li>
                        <?php endif ?>
                        <?php if ($summary->location()->isNotEmpty()) : ?>
                            <li class="text">
                                <p class="weight-500">Location</p>
                                <p class="weight-800"><?= $summary->location() ?></p>
                            </li>
                        <?php endif ?>
                        <?php if ($summary->category()->isNotEmpty()) : ?>
                            <li class="text">
                                <p class="weight-500">Category</p>
                                <p class="weight-800"><?= $summary->category() ?></p>
                            </li>
                        <?php endif ?>
                        <?php if ($summary->stat()->isNotEmpty()) : ?>
                            <li class="text">
                                <p class="weight-500">Status</p>
                                <p class="weight-800"><?= $summary->stat() ?></p>
                            </li>
                        <?php endif ?>
                        <?php if ($summary->team()->isNotEmpty()) : ?>
                            <li class="text">
                                <p class="weight-500">Team</p>
                                <p class="weight-800"><?= $summary->team() ?></p>
                            </li>
                        <?php endif ?>
                    </ul>
                <?php endif ?>
            </div>
        </section>
    <?php endif ?>
<?php else : ?>
    <?php if ($page->cover()->toFile() || $page->summary()->isNotEmpty()) : ?>
        <section class="section cover-section">
            <div class="grid">
                <?php if ($cover = $page->cover()->toFile()) : ?>
                    <figure class="cover-image lightbox-item">
                        <img src="<?= $cover->resize(1200, null)->url() ?>" alt="<?= $cover->name() ?>">
                        <?php if ($page->caption()->isNotEmpty()) : ?>
                            <figcaption class="item-image-caption text-small weight-500">
                                <?= $page->caption()->inline() ?>
                            </figcaption>
                        <?php endif ?>
                    </figure>
                <?php endif ?>
                <div class="summary-list">
                    <?php if ($page->summary()->isNotEmpty()) : ?>
                        <?= $page->summary()->toBlocks() ?>
                    <?php endif ?>
                </div>
            </div>
        </section>
    <?php endif ?>
<?php endif ?>