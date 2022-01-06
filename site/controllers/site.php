<?php

return function ($site, $pages, $page) {

$opener = $pages->find('home');
$join = $pages->find('join');
$survey = $pages->find('survey');
$about = $pages->find('about');
$support = $pages->find('support');
$contact = $pages->find('contact');
$news = $pages->find('newsletter');

   return [
    'opener' => $opener,
    'join' => $join,
    'survey' => $survey,
    'about' => $about,
    'support' => $support,
    'contact' => $contact,
    'news' => $news
  ];
};
Kirby::plugin('my/plugin', [
    'fieldMethods' => [
        'encode' => function ($field) {
            return \Kirby\Toolkit\Str::encode($field->value);
        }
    ]
]);
