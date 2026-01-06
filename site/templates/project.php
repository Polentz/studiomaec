<?php
$siblings = $page->siblings()->listed()->filterby('publishToggle', true);
?>


<?= snippet('head') ?>
<?= snippet('header') ?>

<main class="main">
    <?= snippet('cover') ?>
    <section class="section intro-section">
        <?= $page->intro()->toBlocks() ?>
    </section>
    <?= snippet('grid') ?>
</main>

<?php if ($siblings->count() > 1) : ?>
    <section class="related-section">
        <?php foreach ($siblings->random(1, true) as $sibling) : ?>
            <div class="button-wrapper">
                <a href="<?= $sibling->url() ?>" class="button-text weight-700">Next project</a>
                <a href="<?= $sibling->url() ?>" class="button go">
                    <svg viewBox="0 0 23 22" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.5176 7.14148L7.51758 15.1415" />
                        <path d="M9.51758 7.14148H15.5176V13.1415" />
                    </svg>
                </a>
            </div>
        <?php endforeach ?>
    </section>
<?php endif ?>

<?= snippet('footer') ?>
<?= snippet('foot') ?>