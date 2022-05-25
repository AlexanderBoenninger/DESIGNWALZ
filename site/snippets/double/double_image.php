<?php if ($page->wimg()->isNotEmpty() && $page->himg()->isNotEmpty() ): ?>
  <section class="double_content grid-x grid-container">
    <div class="for_walzer small-12 medium-5 double_svg <?= $page->w_double_image_class()?>">
      <img src="<?= $page->wimg()->tofile()->url() ?>" alt="">
    </div>

    <div class="for_host small-12 medium-5 medium-offset-2 double_svg <?= $page->h_double_image_class()?> medium_remove_hide">
      <img src="<?= $page->himg()->tofile()->url() ?>" alt="">
    </div>
  </section>
<?php endif; ?>
