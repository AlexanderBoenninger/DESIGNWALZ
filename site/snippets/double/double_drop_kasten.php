<section class="grid-x grid-container space_bottom_80p">
<?php snippet('mini/headline') ?>

<div class="for_walzer small-10 small-offset-1 medium-4">
  <div class="stack stack_1_layer stack_content white">
    <h3 class="big_brot thin_brot space_top_20p"><?php echo t('forwalzer') ?></h3>


    <div class="quick_how">
      <div class="tabs numbers" data-tabs id="walzer_quick_how">
        <?php foreach ($page->cont_quick_walzer()->toStructure() as $quick_w_step_numb): ?>
          <div class="tabs-title number quick_step_numb pointer
            <?php if ($quick_w_step_numb->is_active_walzer()->toBool() === true): ?>
              is-active
            <?php endif ?>
          " count="<?= $quick_w_step_numb->indexOf(); ?>">
            <a aria-selected="true" href="#walzer__<?= $quick_w_step_numb->indexOf(); ?>" ><?= $quick_w_step_numb->num_quick_walzer() ?></a>
          </div>
        <?php endforeach; ?>
      </div>

        <div class="tabs-content space_top_40p space_bottom_40p" data-tabs-content="walzer_quick_how" >
          <?php foreach ($page->cont_quick_walzer()->toStructure() as $quick_step): ?>
            <div class="tabs-panel
              <?php if ($quick_step->is_active_walzer()->toBool() === true): ?>
                is-active
              <?php endif ?>
            " id="walzer__<?= $quick_step->indexOf(); ?>" count="<?= $quick_step->indexOf(); ?>">
              <h4><?= $quick_step->title_quick_walzer() ?></h4>
              <div class="normal_brot">
                <?= $quick_step->text_quick_walzer()->kt() ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

    </div>

    <div class="expand_how ">

    </div>
  </div>
  <div class="stack_2_l stack_sized"></div>
</div>


<div class="for_host small-10 small-offset-1 medium-4 medium-offset-2 medium_remove_hide">
  <div class="stack stack_1_layer stack_content blue_light">
    <h3 class="big_brot thin_brot space_top_20p"><?php echo t('forhosts') ?></h3>
    <div class="quick_how">
      <div class="tabs numbers" data-tabs id="host_quick_how">
        <?php foreach ($page->cont_quick_host()->toStructure() as $quick_h_step_numb): ?>
          <div class="tabs-title number quick_step_numb pointer
            <?php if ($quick_h_step_numb->is_active_host()->toBool() === true): ?>
              is-active
            <?php endif ?>
          " count="<?= $quick_h_step_numb->indexOf(); ?>">
            <a aria-selected="true" href="#host__<?= $quick_h_step_numb->indexOf(); ?>" ><?= $quick_h_step_numb->num_quick_host() ?></a>
          </div>
        <?php endforeach; ?>
      </div>

        <div class="tabs-content space_top_40p space_bottom_40p" data-tabs-content="host_quick_how" >
          <?php foreach ($page->cont_quick_host()->toStructure() as $quick_step): ?>
            <div class="tabs-panel
              <?php if ($quick_step->is_active_host()->toBool() === true): ?>
                is-active
              <?php endif ?>
            " id="host__<?= $quick_step->indexOf(); ?>" count="<?= $quick_step->indexOf(); ?>">
              <h4><?= $quick_step->title_quick_host() ?></h4>
              <div class="normal_brot">
                <?= $quick_step->text_quick_host()->kt() ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
    </div>
    <div class="expand_how ">

    </div>
  </div>
  <div class="stack_2_r stack_sized "></div>
</div>

</section>
