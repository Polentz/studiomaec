<?php

return [
  'debug'  => false,
  'smartypants' => true,
  'panel' => [
    'install' => true,
    'css' => 'assets/css/panel.css'
  ],
  'ready' => function () {
    return [
      'home' => ($p = site()->setHomePage()->toPage()) ? $p->id() : 'home'
    ];
  }
];
