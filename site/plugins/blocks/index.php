<?php

use Kirby\Cms\App as Kirby;

Kirby::plugin('studiomaec/blocks', [
  'blueprints' => [
    'blocks/contacblock' => __DIR__ . '/blueprints/blocks/contacblock.yml',
    'blocks/griditem' => __DIR__ . '/blueprints/blocks/griditem.yml',
    'blocks/galleryblock' => __DIR__ . '/blueprints/blocks/galleryblock.yml',
    'blocks/textblock' => __DIR__ . '/blueprints/blocks/textblock.yml',
    'blocks/summaryblock' => __DIR__ . '/blueprints/blocks/summaryblock.yml',
    'blocks/introblock' => __DIR__ . '/blueprints/blocks/introblock.yml',
  ],
  'snippets' => [
    'blocks/contacblock' => __DIR__ . '/snippets/blocks/contacblock.php',
    'blocks/griditem' => __DIR__ . '/snippets/blocks/griditem.php',
    'blocks/galleryblock' => __DIR__ . '/snippets/blocks/galleryblock.php',
    'blocks/textblock' => __DIR__ . '/snippets/blocks/textblock.php',
    'blocks/summaryblock' => __DIR__ . '/snippets/blocks/summaryblock.php',
    'blocks/introblock' => __DIR__ . '/snippets/blocks/introblock.php',
  ],
]);
