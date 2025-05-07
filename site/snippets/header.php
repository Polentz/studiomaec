<header class="header">
    <h1 class="site-title"><a href="<?= $site->url() ?>"><?= $site->title() ?></a></h1>
</header>
<menu class="menu">
    <div class="menu-wrapper">
        <h2 class="text weight-700">Architecture & Territory</h2>
        <h3 class="page-title"><?= $page->title() ?></h3>
        <nav class="nav">
            <?php foreach($site->children()->listed() as $page) : ?>
                <?php if (!$page->isHomePage()) : ?>
                    <a class="nav-item text-label weight-700 link" href="<?= $page->url() ?>"><?= $page->title() ?></a>
                <?php endif ?>
            <?php endforeach ?>
            <a class="nav-item text-label weight-700 link js-href" href="#contact">Contact</a>
        </nav>
    </div>
</menu>