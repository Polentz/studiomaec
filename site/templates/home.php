<?= snippet('head') ?>
<?= snippet('header') ?>

<main class="main">
    <?php snippet('grid', slots: true) ?>
    <?php slot('gridField') ?>
    <?php endslot() ?>
    <?php endsnippet() ?>

    <?= snippet('intro') ?>
</main>

<?= snippet('footer') ?>
<?= snippet('foot') ?>