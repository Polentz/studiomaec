<footer id="contact" class="footer">
    <div class="footer-wrapper" style="grid-template-columns: repeat(<?= $site->contact()->toBlocks()->count() ?>, 1fr);">
        <?= $site->contact()->toBlocks() ?>
    </div>
    <div class="footer-wrapper" style="grid-template-columns: repeat(calc(1 + <?= $site->children()->listed()->filterBy('template', 'simple')->count() ?>), 1fr);">
        <div class="footer-block text weight-500">
            <p>© <?= date("Y") ?> <?= $site->title() ?></p>
        </div>
        <?php foreach ($site->children()->listed()->filterBy('template', 'simple') as $page) : ?>
            <div class="footer-block text weight-800">
                <a class="link" href="<?= $page->url() ?>"><?= $page->title() ?></a>
            </div>
        <?php endforeach ?>
    </div>
</footer>