<?php

use Kirby\Cms\App as Kirby;

Kirby::plugin('studiomaec/blocks', [
    'blueprints' => [
        'blocks/griditem' => __DIR__ . '/blueprints/blocks/griditem.yml',
        'blocks/galleryitem' => __DIR__ . '/blueprints/blocks/galleryitem.yml',
      ],
      'snippets' => [
        'blocks/griditem' => __DIR__ . '/snippets/blocks/griditem.php',
        'blocks/galleryitem' => __DIR__ . '/snippets/blocks/galleryitem.php',
      ],
]);