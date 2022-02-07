<?php if ($page->wimg()->isNotEmpty() && $page->himg()->isNotEmpty() ): ?>
  <section class="double_content">
    <div class="for_walzer double_image <?= $page->w_double_image_class()?>">
      <img src="<?= $page->wimg()->tofile()->url() ?>" alt="">
    </div>

    <div class="for_host double_image <?= $page->h_double_image_class()?>">
      <img src="<?= $page->himg()->tofile()->url() ?>" alt="">
    </div>
  </section>
<?php endif; ?>
