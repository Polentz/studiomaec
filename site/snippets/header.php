<header class="header">
    <div class="header-wrapper">
        <h1 class="site-title"><a href="<?= $site->url() ?>"><?= $site->title() ?></a></h1>
        <h2 class="site-subtitle text-label weight-500"><?= $site->subtitle() ?></h2>
    </div>
</header>
<menu class="menu">
    <div class="menu-wrapper">
        <?php if ($page->depth() > 1) : ?>
            <h3 class="page-title text-label weight-500"><?= $page->parent()->title() ?> <span class="page-title-divider">|</span> <?= $page->title() ?></h3>
        <?php else : ?>
            <h3 class="page-title text-label weight-500"><?= $page->title() ?></h3>
        <?php endif ?>
        <nav class="nav">
            <!-- About needs a specific template! Now is page, change it! -->
            <?php foreach ($site->children()->listed()->filterBy('template', 'in', ['home', 'works', 'page']) as $page) : ?>
                <a class="nav-item text-label weight-800 link <?= e($page->isActive(), 'current') ?>" href="<?= $page->url() ?>"><?= $page->title() ?></a>
            <?php endforeach ?>
            <a class="nav-item text-label weight-800 link js-href" href="#contact"><?= $site->contactname() ?></a>
        </nav>
    </div>
</menu>