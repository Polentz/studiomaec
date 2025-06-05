<?= snippet('head') ?>
<?= snippet('header') ?>

<main class="main">
    <?= snippet('intro') ?>

    <?php snippet('grid', slots: true) ?>
    <?php slot('gridField') ?>
    <?php endslot() ?>
    <?php endsnippet() ?>
</main>

<?= snippet('footer') ?>
<?= snippet('foot') ?>