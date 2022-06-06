<section class="double_content grid-x grid-container space_bottom_80p">
  <?php snippet('mini/headline') ?>
  <?php if ($page->willu()->tofile()->type() === 'image' ): ?>
    <div class="for_walzer small-12 medium-2 double_svg">
      <img src="<?= $page->willu()->tofile()->url() ?>" alt="">
    </div>
  <?php endif ?>
  <?php if ($page->hillu()->tofile()->type() === 'image' ): ?>
    <div class="for_host small-12 medium-5 double_svg medium_remove_hide">
      <img src="<?= $page->hillu()->tofile()->url() ?>" alt="">
    </div>
  <?php endif ?>
  <?php if ($page->willu()->tofile()->extension() === 'json'): ?>
    <div class="for_walzer small-10 small-offset-1 medium-5 double_svg">
      <lottie-player src="<?= $page->willu()->tofile()->url() ?>" background="transparent" speed="1" loop autoplay></lottie-player>
    </div>
  <?php endif ?>
  <?php if ($page->hillu()->tofile()->extension() === 'json'): ?>
    <div class="for_host small-12 small-offset-1 medium-5 medium-offset-2 double_svg medium_remove_hide">
      <lottie-player src="<?= $page->hillu()->tofile()->url() ?>" background="transparent" speed="1" loop autoplay></lottie-player>
    </div>
  <?php endif ?>

  <div class="for_walzer small-12 medium-4 medium-offset-1 space_top_12p">
     <p class="normal_brot"> <?= $page->walzer()->ktr() ?></p>
  </div>
  <div class="for_host small-12 medium-4 medium-offset-2 space_top_12p medium_remove_hide">
     <p class="normal_brot"> <?= $page->host()->ktr() ?></p>
  </div>

</section>
