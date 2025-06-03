<footer id="contact" class="footer">
    <div class="footer-wrapper">
        <?= $site->contact()->toBlocks() ?>
    </div>
    <div class="footer-wrapper">
        <div class="footer-block text weight-400">
            <p>© <?= $site->title() ?> <?= date("Y") ?> - all rigths reserved</p>
        </div>
        <?php foreach ($site->children()->listed()->filterBy('template', 'basic') as $page) : ?>
            <div class="footer-block text weight-400">
                <a href="<?= $page->url() ?>"><?= $page->title() ?></a>
            </div>
        <?php endforeach ?>
    </div>
</footer>