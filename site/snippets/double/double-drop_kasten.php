<section class="double_content space_bottom_80p">
<?php snippet('mini/headline') ?>

<div class="for_walzer walzer_breit">
  <div class="stack stack_1_layer  stack_content white_back">
    <h3><?php echo t('forwalzer') ?></h3>
    <div class="quick_how">
      <div class="numbers">
        <?php foreach ($page->cont_quick_walzer()->toStructure() as $quick_step_numb): ?>
          <div class="number quick_step_numb pointer" count="<?= $quick_step_numb->indexOf(); ?>">
            <span><?= $quick_step_numb->num_quick_walzer() ?></span>
          </div>
        <?php endforeach; ?>
      </div>

<!-- Hier aufgehört: Slick js wird geladen – aus der quick info einen Slider machen. -->

      <div class="slick_quick_how space_top_40p space_bottom_40p">
        <?php foreach ($page->cont_quick_walzer()->toStructure() as $quick_step): ?>
          <div class="quick_step_content" count="<?= $quick_step->indexOf(); ?>">
            <h4><?= $quick_step->title_quick_walzer() ?></h4>
            <div class="normal_brot">
              <?= $quick_step->text_quick_walzer() ?>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>

    <div class="expand_how hidden">

    </div>
  </div>
  <div class="stack_2_l stack_sized"></div>
</div>


<div class="for_host host_breit">
  <div class="stack stack_1_layer stack_content blue_light">
    <h3><?php echo t('forhosts') ?></h3>

  </div>
  <div class="stack_2_r stack_sized "></div>
</div>

</section>
