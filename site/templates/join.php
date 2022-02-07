<?php snippet('header') ?>
<?php snippet('double/double_screen') ?>

<?php snippet('double/double_text_head') ?>
<?php snippet('double/double_benefits') ?>
<!-- <?php snippet('double/double_reminder') ?> -->

<?php snippet('double/double_image') ?>
<?php snippet('double/text') ?>


<?php snippet('join-banner') ?>

<?php if ($page->howitworksimg()->isNotEmpty() && $page->faqimg()->isNotEmpty() ): ?>
  <section class="double_content padding_top_40p padding_bottom_80p white_back">
    <div class="for_walzer double_image <?= $page->w_double_image_class_2()?>">
      <img src="<?= $page->howitworksimg()->tofile()->url() ?>" alt="">
    </div>

    <div class="for_host double_image <?= $page->h_double_image_class_2()?>">
      <img src="<?= $page->faqimg()->tofile()->url() ?>" alt="">
    </div>
    <div class="for_walzer space_left_20p double_text big_brot_container">
      <?= $page->howitworkstext()->kt() ?>
    </div>

    <div class="for_host space_left_20p double_text big_brot_container">
      <?= $page->faqtext()->kt() ?>
    </div>
  </section>
<?php endif; ?>

<?php snippet('support-banner') ?>

<?php snippet('footer') ?>
