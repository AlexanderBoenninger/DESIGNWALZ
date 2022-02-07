<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title() ?> | <?= $page->title() ?></title>
  <?= css('assets/css/Design_Walz.css') ?>
  <?= css(['assets/slick/slick.css', '@auto']) ?>
  <?= css('assets/css/styles.css') ?>

  <?= js(['assets/js/jquery-3.3.1.min.js', '@auto']) ?>
  <?= js(['assets/js/rellax.min.js', '@auto']) ?>
  <?= js(['assets/js/lottie-player.js', '@auto']) ?>
  <?= js(['assets/js/functions.js', '@auto']) ?>
  <?= js(['assets/slick/slick.min.js', '@auto']) ?>
</head>
<body>

    <header class="header shadow ">
      <a class="branding" href="<?= $site->url() ?>"><h1>Design Walz</h1></a>
      <?php snippet('menu') ?>
      <div class="mobile_menu_action">
        <div class="closer">
          <hr>
          <hr>
        </div>
        <div class="burger">
          <hr>
          <hr>
          <hr>
        </div>
      </div>

    </header>
