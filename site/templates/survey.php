<?php snippet('header') ?>

 <form class="">
    <?php foreach ($page->question_block()->toStructure() as $question_block): ?>
        <div id="form-block-<?= $question_block->indexOf()?>" class="form-block" focus="
          <?php if ($question_block->isfirst()): ?>
            this
          <?php endif; ?>
         ">
          <h2 class="headline_center space_top_20p space_bottom_20p"><?= $question_block->secTitle()->html() ?></h2>
          <?= $question_block->fragen()->toBlocks(); ?>
        </div>
    <?php endforeach; ?>
 </form>
 <div class="button small-only-expanded click_ani space_top_20p">

 </div>
 <section class="grid-x grid-container">
   <div id="block_next" class=" cell small-10 small-offset-1 grid-x space_bottom_80p">
     <a class="button large small-only-expanded center medium-large click_ani space_top_20p">
       <div class="stack stack_1_layer white">
         <p class="big_brot button_text"> <?php echo t('next') ?></p>
       </div>
       <div class="stack_2_r stack_sized hover_react">
       </div>
     </a>
   </div>
   <div id="form_send" class="cell small-10 small-offset-1 grid-x space_bottom_80p hidden">
     <a class="button large small-only-expanded center click_ani space_top_20p">
       <div class="stack stack_1_layer white">
         <input class="big_brot button_text " type="submit" name="submit" value="<?php echo t('send') ?>">
       </div>
       <div class="stack_2_r stack_sized hover_react ">
       </div>
     </a>
   </div>
 </section>



<?php snippet('footer') ?>
