<footer class="footer">
    <ul id="contact" class="footer-contact" style="grid-template-columns: repeat(<?= $site->contact()->toBlocks()->count() ?>, 1fr);">
        <?= $site->contact()->toBlocks() ?>
    </ul>
    <div class="footer-navigation">
        <p class="text">© <?= date("Y") ?> <?= $site->title() ?></p>
        <nav class="nav">
            <?php foreach ($site->children()->listed()->filterBy('template', 'footerpage') as $page) : ?>
                <a class="nav-item text-label weight-800 link<?= e($page->isActive(), ' current') ?>" href="<?= $page->url() ?>"><?= $page->title() ?></a>
            <?php endforeach ?>
        </nav>
    </div>
</footer>