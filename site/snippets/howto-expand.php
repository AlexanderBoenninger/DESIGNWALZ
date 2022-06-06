<?php if ($role === 'walzer'): ?>
  <?= $page->howto_walzer_expand()->toBlocks(); ?>
<?php endif; ?>

<?php if ($role === 'host'): ?>
  <div class="host_expand-container">
    <?= $page->howto_host_expand()->toBlocks(); ?>
  </div>
<?php endif; ?>
