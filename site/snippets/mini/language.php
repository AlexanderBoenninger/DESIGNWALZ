<div class="languages_cont">
  <div class="languages">
  <?php foreach($kirby->languages() as $language): ?>
    <span <?php e($kirby->language() == $language, 'class="buttonActive langActive"') ?>>
    <a class="tag pointer" href="<?= $page->url($language->code()) ?>">
      <?= html($language->name()) ?>
    </a>
  </span>
  <?php endforeach ?>
 </div>
</div>
