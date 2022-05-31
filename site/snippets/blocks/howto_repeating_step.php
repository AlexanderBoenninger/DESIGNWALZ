<div class="expend-block grid-x">
  <img class="expend-illu small-2" src="<?= $block->illu()->toFile()->url() ?>" alt="">
  <div class="numbers expand-nr-container repeat cell small-2">
    <div class="number center expand-nr expand_step_numb space_bottom_20p">
        <span class="big_brot"><?= $block->number() ?></span>
    </div>

    <div class="number center expand-nr expand_step_numb">
        <span class="big_brot"><?= $block->number2() ?></span>
    </div>
    <?php if ($block->islast()): ?>

    <?php else: ?>
      <div class="vertical-border repeat">
      </div>
    <?php endif; ?>
  </div>
  <div class="cell small-8 space_bottom_20p">
    <?php if ($block->headline()->isNotEmpty()): ?>
      <h3 class=""><?= $block->headline()?></h3>
    <?php endif; ?>
    <?= $block->text()->kt()?>
  </div>
</div>
