<footer id="contact" class="footer">
    <div class="footer-wrapper">
        <?= $site->contact()->toBlocks() ?>
    </div>
    <div class="footer-wrapper">
        <div class="footer-block text weight-400">
            <p>© <?= date("Y") ?> <?= $site->title() ?></p>
        </div>
        <?php foreach ($site->children()->listed()->filterBy('template', 'simple') as $page) : ?>
            <div class="footer-block text weight-400">
                <a class="link" href="<?= $page->url() ?>"><?= $page->title() ?></a>
            </div>
        <?php endforeach ?>
    </div>
</footer>