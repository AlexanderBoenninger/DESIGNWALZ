<?php snippet('header') ?>
<?php snippet('double/double_screen') ?>

<?php snippet('double/double_json_text') ?>
<?php snippet('double/double_benefits') ?>
<!-- <?php snippet('double/double_reminder') ?> -->

<?php snippet('double/double_image') ?>
<?php snippet('double/text') ?>


<?php snippet('double/double_join-banner') ?>

<?php if ($page->howitworksimg()->isNotEmpty() && $page->faqimg()->isNotEmpty() ): ?>
  <section class="double_content grid-x padding_top_40p padding_bottom_80p white">

    <div class="small-12 medium-6 space_top_40p ">
      <div class="double_image grid-x <?= $page->w_double_image_class_2()?>">
        <img src="<?= $page->howitworksimg()->tofile()->url() ?>" alt="">
        <div class="grande_brot text-center small-12 space_top_20p">
          <?= $page->howitworkstext()->kt() ?>
        </div>
      </div>

    </div>

    <div class="small-12 medium-6 space_top_40p ">
      <div class="double_image grid-x <?= $page->w_double_image_class_2()?>">
        <img src="<?= $page->faqimg()->tofile()->url() ?>" alt="">
        <div class="grande_brot text-center small-12 space_top_20p">
          <?= $page->faqtext()->kt() ?>
        </div>
      </div>
    </div>



  </section>
<?php endif; ?>

<?php snippet('support-banner') ?>

<?php snippet('footer') ?>
