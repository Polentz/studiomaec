<footer class="footer">
    <!-- <ul class="footer-contact" style="grid-template-columns: repeat(<?= $site->contact()->toBlocks()->count() ?>, 1fr);">
        <?= $site->contact()->toBlocks() ?>
    </ul> -->

    <div id="contact" class="footer-navigation">
        <div class="text-label weight-700">Julia Mäckler + Augustin Clément</div>
        <nav class="nav">
            <?= $site->contact()->toBlocks() ?>
        </nav>
    </div>
    <div class="footer-navigation">
        <p class="text">© <?= date("Y") ?> <?= $site->title() ?></p>
        <nav class="nav">
            <?php foreach ($site->children()->listed()->filterBy('template', 'appendix') as $page) : ?>
                <a class="nav-item text-label weight-400<?= e($page->isActive(), ' current') ?>" href="<?= $page->url() ?>"><?= $page->title() ?></a>
            <?php endforeach ?>
        </nav>
    </div>
</footer>