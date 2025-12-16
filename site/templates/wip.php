<?= snippet('head') ?>

<header class="header">
    <div class="header-wrapper">
        <h1 class="site-title"><a href="<?= $site->url() ?>"><?= $site->title() ?></a></h1>
        <h2 class="site-subtitle text-label weight-500"><?= $site->subtitle() ?></h2>
    </div>
</header>
<menu class="menu">
    <div class="menu-wrapper">
        <h3 class="page-title text-label weight-500"><?= $page->title() ?></h3>
    </div>
</menu>
<main class="main">
    <section class="landing-section">
        <p class="text-label weight-700">our website is under construction</p>
        <p class="text-label weight-700">we will be online soon</p>
    </section>
</main>

<?= snippet('footer') ?>
<?= snippet('foot') ?>