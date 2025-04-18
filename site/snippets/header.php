<header class="header">
    <h1 class="site-title"><a href="<?= $site->url() ?>"><?= $site->title() ?></a></h1>
</header>
<nav class="nav">
    <div class="nav-wrapper">
        <h2 class="text weight-700">Architecture & Territory</h2>
        <h3 class="page-title"><?= $page->title() ?></h3>
        <ul class="nav-menu text weight-700">
            <?php foreach($site->children()->listed() as $page) : ?>
                <?php if (!$page->isOpen()) : ?>
                    <li class="nav-item"><a class="link" href="<?= $page->url() ?>"><?= $page->title() ?></a></li>                    
                <?php endif ?>
            <?php endforeach ?>
            <li class="nav-item"><a class="link js-href" href="#contact">Contact</a></li>
        </ul>
    </div>
</nav>