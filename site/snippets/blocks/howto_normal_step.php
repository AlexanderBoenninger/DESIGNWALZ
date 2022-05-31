<div class="expend-block grid-x">
  <img class="expend-illu small-2" src="<?= $block->illu()->toFile()->url() ?>" alt="">
  <div class="numbers expand-nr-container cell small-2">
    <div class="number center expand-nr expand_step_numb pointer">
        <span class="big_brot"><?= $block->number() ?></span>
    </div>
    <?php if ($block->islast()): ?>

    <?php else: ?>
      <div class="vertical-border">
      </div>
    <?php endif; ?>

  </div>
  <div class="cell small-8 space_bottom_20p">
    <h3 class=""><?= $block->headline()?></h3>
    <?= $block->text()->kt()?>
  </div>
</div>
