<nav id="menu" class="top-bar-left cell grid-x small-auto menu ">

  <div id="hole_menu" class="hidden">
    <div class="grid-x grid-container">


    <div class="first_menu">
      <?php foreach($subs as $sub): ?>
        <div <?php e($sub->isOpen(), 'class="active"') ?>>
          <a class="first_menu_link" href="<?= $sub->url() ?>"><?= $sub->title()->html() ?></a>
        </div>
      <?php endforeach ?>
    </div>

    <div id="sec_menu">
        <div <?php e($contact->isOpen(), 'class="active"') ?> class="">
          <a class="menu_contact_link" href="<?= $contact->url() ?>"><?= $contact->title()->html() ?></a>
        </div>
        <div <?php e($newsl->isOpen(), 'class="active"') ?> class="">
          <a class="menu_contact_link" href="<?= $newsl->url() ?>"><?= $newsl->title()->html() ?></a>
        </div>
        <?php if($legal = page('impressum')): ?>
          <div <?php e($legal->isOpen(), 'class="active"') ?> class="space_top_40p">
            <a class="menu_law_link" href="<?= $legal->url() ?>"><?= $legal->title()->html() ?></a>
          </div>
        <?php endif ?>
        <?php if($data = page('datenschutzerklaerung')): ?>
          <div <?php e($data->isOpen(), 'class="active"') ?> class="">
            <a class="menu_law_link" href="<?= $data->url() ?>"><?= $data->title()->html() ?></a>
          </div>
        <?php endif ?>
        <div class="space_top_20p">
          <?php snippet('mini/language') ?>
        </div>


    </div>
</div>
  </div>


  <div class="quick_reach">
    <?php foreach ($site->children()->listed() as $item):
      ($item->ext_url() != '') ? $href = $item->ext_url()->html().'"target="_blank'
                         : $href = $item->url();
                          ?>
        <?php if($item->tomenu()->toBool() === true): ?>
          <a href="<?php echo $href ?>" class="menu_link float-left"> <?= $item->title() ?>  </a>
        <?php endif ?>
    <?php endforeach ?>
  </div>

  <div class="burger_container">
    <div class="closer pointer hidden">
      <hr>
      <hr>
    </div>
    <div class="burger pointer">
      <hr>
      <hr>
      <hr>
    </div>
  </div>

<?php snippet('mini/language') ?>


</nav>
