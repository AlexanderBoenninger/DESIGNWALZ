<section id="double_text_head" class="double_content space_bottom_80p">
  <?php snippet('mini/headline') ?>
  <?php if ($page->willu()->tofile()->type() === 'image' ): ?>
    <div class="for_walzer double_image">
      <img src="<?= $page->willu()->tofile()->url() ?>" alt="">
    </div>
  <?php endif ?>
  <?php if ($page->hillu()->tofile()->type() === 'image' ): ?>
    <div class="for_host double_image">
      <img src="<?= $page->hillu()->tofile()->url() ?>" alt="">
    </div>
  <?php endif ?>
  <?php if ($page->willu()->tofile()->extension() === 'json'): ?>
    <div class="for_walzer double_image grid_row_2">
      <lottie-player src="<?= $page->willu()->tofile()->url() ?>" background="transparent" speed="1" loop autoplay></lottie-player>
    </div>
  <?php endif ?>
  <?php if ($page->hillu()->tofile()->extension() === 'json'): ?>
    <div class="for_host double_image grid_row_2">
      <lottie-player src="<?= $page->hillu()->tofile()->url() ?>" background="transparent" speed="1" loop autoplay></lottie-player>
    </div>
  <?php endif ?>

  <div class="for_walzer">
     <p class="normal_brot"> <?= $page->walzer()->ktr() ?></p>
  </div>
  <div class="for_host">
     <p class="normal_brot"> <?= $page->host()->ktr() ?></p>
  </div>

</section>
