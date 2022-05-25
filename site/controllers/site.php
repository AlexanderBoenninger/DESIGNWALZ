<?php

return function ($site, $pages, $page) {
$img_1 = $page->wimg_1();
$img_2 = $page->wimg_2();
$img_3 = $page->wimg_3();

$subs = $site->pages()->listed();
$crumbs = $site->breadcrumb();
$opener = $pages->find('home');
$join = $pages->find('join');
$survey = $pages->find('survey');
$about = $pages->find('about');
$support = $pages->find('support');
$contact = $pages->find('contact');
$newsl = $pages->find('newsletter');

   return [
    '$img_1' => $img_1,
    '$img_2' => $img_2,
    '$img_3' => $img_3,

    'opener' => $opener,
    'join' => $join,
    'survey' => $survey,
    'about' => $about,
    'support' => $support,
    'contact' => $contact,
    'newsl' => $newsl,
    'subs' => $subs,
    'crumbs' => $crumbs,
  ];
};
Kirby::plugin('my/plugin', [
    'fieldMethods' => [
        'encode' => function ($field) {
            return \Kirby\Toolkit\Str::encode($field->value);
        }
    ]
]);
