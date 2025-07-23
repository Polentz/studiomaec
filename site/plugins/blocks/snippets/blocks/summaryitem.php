<ul class="summary-list">
    <?php foreach ($block->summaryentries()->toStructure() as $entry): ?>
        <div class="text">
            <p class="weight-500"><?= $entry->title() ?></p>
            <p class="weight-800"><?= $entry->text()->inline() ?></p>
        </div>
    <?php endforeach ?>
</ul>