<ul class="summary-list">
    <?php foreach ($block->summaryentries()->toStructure() as $entry): ?>
        <div class="summary-item">
            <p class="text-label weight-500"><?= $entry->title() ?></p>
            <p class="text weight-800"><?= $entry->text()->inline() ?></p>
        </div>
    <?php endforeach ?>
</ul>