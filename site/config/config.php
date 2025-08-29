<?php

return [
  'debug'  => true,
  'smartypants' => true,
  'panel' => [
    'install' => true,
    'css' => 'assets/css/panel.css'
  ],
  'routes' => [
    [
      'pattern' => '(:any)',
      'action'  => function ($uid) {
        $page = page($uid);
        if (!$page) $page = page('appendix/' . $uid);
        if (!$page) $page = site()->errorPage();
        return site()->visit($page);
      }
    ],
    [
      'pattern' => 'appendix/(:any)',
      'action'  => function ($uid) {
        go($uid);
      }
    ]
  ],
  'ready' => function () {
    return [
      'home' => ($p = site()->setHomePage()->toPage()) ? $p->id() : 'home'
    ];
  }
];
