<?php

use Kirby\Cms\App as Kirby;

Kirby::plugin('studiomaec/blocks', [
    'blueprints' => [
        'blocks/griditem' => __DIR__ . '/blueprints/blocks/griditem.yml',
        'blocks/galleryitem' => __DIR__ . '/blueprints/blocks/galleryitem.yml',
        'blocks/infoitem' => __DIR__ . '/blueprints/blocks/infoitem.yml',
        'blocks/textitem' => __DIR__ . '/blueprints/blocks/textitem.yml',
      ],
      'snippets' => [
        'blocks/griditem' => __DIR__ . '/snippets/blocks/griditem.php',
        'blocks/galleryitem' => __DIR__ . '/snippets/blocks/galleryitem.php',
        'blocks/infoitem' => __DIR__ . '/snippets/blocks/infoitem.php',
        'blocks/textitem' => __DIR__ . '/snippets/blocks/textitem.php',
      ],
]);