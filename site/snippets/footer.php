<footer class="footer">
    <div id="contact" class="footer-navigation">
        <h3 class="text weight-700"><?= $site->contactheadline() ?></h3>
        <ul class="nav">
            <?= $site->contact()->toBlocks() ?>
        </ul>
    </div>
    <div class="footer-navigation">
        <p class="text">© <?= date("Y") ?> <?= $site->title() ?></p>
        <nav class="nav">
            <?php foreach ($site->grandchildren()->listed()->filterBy('template', 'appendix') as $page) : ?>
                <a class="nav-item text-label weight-400<?= e($page->isActive(), ' current') ?>" href="<?= $page->url() ?>"><?= $page->title() ?></a>
            <?php endforeach ?>
        </nav>
    </div>
</footer>