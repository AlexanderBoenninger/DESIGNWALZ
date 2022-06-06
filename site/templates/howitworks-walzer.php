<?php snippet('header') ?>

<section class="grid-x grid-container space_bottom_40p">
<?php snippet('mini/headline') ?>

<div class="dropdown small-10 small-offset-1">
  <div class="stack stack_1_layer stack_content white">

    <div class="quick_how space_top_20p">
      <div class="tabs numbers" data-tabs id="walzer_quick_how">
        <?php foreach ($how->cont_quick_walzer()->toStructure() as $quick_w_step_numb): ?>
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
          <?php foreach ($how->cont_quick_walzer()->toStructure() as $quick_step): ?>
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
    <div class="expand_how grid-x space_bottom_12p ">
      <div class="center clearfix pointer" data-toggle="howto_walzer_expand">
        <?php snippet('mini/moredets') ?>
      </div>
    </div>
  </div>
  <div class="stack_2_l stack_sized"></div>
</div>

</section>

<section class="join grid-x">
      <div class="space_top_80p small-10 small-offset-1 grid-x space_bottom_80p">
        <div class="small-12 space_bottom_40p">
          <div class="normal_brot">
            <?= $how->joinbannerwalzer()->kt() ?>
          </div>
          <a class="button small-only-expanded click_ani space_top_20p" href="mailto:<?= str::encode($join->email_new_walzer())?><?= $join->email_new_walzer_subject()?><?= $join->email_new_walzer_body()?>">
            <div class="stack stack_1_layer yellow">
              <p class="big_brot button_text"> <?= $how->walzer_button()->ktr() ?></p>
            </div>
            <div class="stack_2_l stack_sized hover_react yellow">
            </div>
          </a>
        </div>
      </div>
</section>


<?php snippet('singel/singel_benefits') ?>

<section class=" benefit grid-x grid-container">
  <h2 class="headline_center small-10 small-offset-1 space_top_20p space_bottom_20p"><?= $how->head_benefits()->html() ?></h2>

  <div class="small-10 small-offset-1 medium-4 space_bottom_20p">
     <ul class="">
       <?php foreach ($how->benefits_w()->toStructure() as $point): ?>
         <li class="normal_brot">
           <?= $point->benefit()->ktr() ?>
         </li>
       <?php endforeach ?>
     </ul>
  </div>


  <div class="for_walzer small-9 small-offset-1 medium-4 medium-offset-1 space_bottom_80p">
    <div class="stack stack_1_layer white border-orange">
      <p class="stack_layer_text mittel_brot" src="" alt="some text"><?= $how->reminder_w()->html() ?></p>
    </div>
    <div class="stack_2_r stack_sized white border-orange">
      <div class="stack_2_r substacks stack_5_r white border-orange">
       <div class="stack_2_r substacks substack_5_r white border-orange">
         <div class="stack_2_r substacks substack_5_r white border-orange">
         </div>
       </div>
     </div>
    </div>
  </div>

</section>


<?php snippet('support-banner') ?>
<?php snippet('footer') ?>
