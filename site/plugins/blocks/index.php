<?php

use Kirby\Cms\App as Kirby;

Kirby::plugin('studiomaec/blocks', [
  'blueprints' => [
    'blocks/griditem' => __DIR__ . '/blueprints/blocks/griditem.yml',
    'blocks/galleryitem' => __DIR__ . '/blueprints/blocks/galleryitem.yml',
    'blocks/textitem' => __DIR__ . '/blueprints/blocks/textitem.yml',
    'blocks/contactitem' => __DIR__ . '/blueprints/blocks/contactitem.yml',
  ],
  'snippets' => [
    'blocks/griditem' => __DIR__ . '/snippets/blocks/griditem.php',
    'blocks/galleryitem' => __DIR__ . '/snippets/blocks/galleryitem.php',
    'blocks/textitem' => __DIR__ . '/snippets/blocks/textitem.php',
    'blocks/contactitem' => __DIR__ . '/snippets/blocks/contactitem.php',
  ],
]);
