<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">

  <title><?= $site->title() ?> | <?= $page->title() ?></title>
  <?= css('assets/css/foundation.min.css') ?>
  <?= css('assets/css/Design_Walz.css') ?>
  <?= css(['assets/slick/slick.css', '@auto']) ?>
  <?= css('assets/css/app.css') ?>


</head>
<body>
    <header class="header top-bar grid-x grid-container shadow ">
      <a class="top-bar-right cell small-8 medium-7 branding" href="<?= $site->url() ?>">
        <h1>Design Walz</h1>
      </a>
    <?php snippet('menu') ?>
</header>
<?php snippet('mini/breadcrumb') ?>
