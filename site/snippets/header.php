<header class="header">
    <h1 class="site-title"><a href="<?= $site->url() ?>"><?= $site->title() ?></a></h1>
</header>
<menu class="menu">
    <div class="menu-wrapper">
        <h2 class="text weight-700"><?= $site->subtitle() ?></h2>
        <h3 class="page-title"><?= $page->title() ?></h3>
        <nav class="nav">
            <?php foreach ($site->children()->listed()->filterBy('template', 'in', ['home', 'page', 'works']) as $page) : ?>
                <a class="nav-item text-label weight-700 link <?= e($page->isActive(), 'current') ?>" href="<?= $page->url() ?>"><?= $page->title() ?></a>
            <?php endforeach ?>
            <a class="nav-item text-label weight-700 link js-href" href="#contact"><?= $site->contactname() ?></a>
        </nav>
    </div>
</menu>