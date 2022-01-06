<nav id="menu" class="menu">
  <?php foreach ($site->children()->listed()->offset(6) as $item):
    ($item->ext_url() != '') ? $href = $item->ext_url()->html().'"target="_blank'
                       : $href = $item->url();
                        ?>
      <a href="<?php echo $href ?>" class="menu_link"> <?= $item->title() ?>  </a>
  <?php endforeach ?>
  <div id="mobile_menu_back">
  </div>

<!-- <div class="languages_cont"> -->
  <!-- <div class="languages"> -->
  <!-- <?php foreach($kirby->languages() as $language): ?>
    <span <?php e($kirby->language() == $language, 'class="buttonActive langActive"') ?>>
    <a class="tag pointer" href="<?= $page->url($language->code()) ?>">
      <?= html($language->name()) ?>
    </a>
  </span>
  <?php endforeach ?> -->
  <!-- </div> -->
  <!-- </div> -->
</nav>
