<?php

use Kirby\Cms\App as Kirby;

Kirby::plugin('studiomaec/blocks', [
    'blueprints' => [
        'blocks/griditem' => __DIR__ . '/blueprints/blocks/griditem.yml',
      ],
      'snippets' => [
        'blocks/griditem' => __DIR__ . '/snippets/blocks/griditem.php',
      ],
]);