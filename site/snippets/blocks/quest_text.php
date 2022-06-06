<div class="quest_text grid-container">
      <?php if ($block->placeholder_2()->isNotEmpty()): ?>
        <div class="grid-x  big_brot">
          <label  class="cell space_bottom_12p" for=""><?= $block->frage()->kt() ?></label>
          <div class="grid-x cell grid-margin-x small-10">
            <input class="cell small-12 medium-6" type="text" name="" value="" placeholder="<?= $block->placeholder_1()?>">
            <input class="cell small-12 medium-6" type="text" name="" value="" placeholder="<?= $block->placeholder_2()?>">
          </div>
        </div>
      <?php else: ?>
        <div class="cell grid-x grid-margin-x big_brot">
          <label class=" cell space_top_20p space_bottom_12p" for=""><?= $block->frage()->kt() ?></label>
            <input class="cell small-10" type="text" name="" value="" placeholder="<?= $block->placeholder_1()?>">

        </div>
      <?php endif; ?>


</div>
