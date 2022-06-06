<?php if ($crumbs->count() > 1): ?>
  <nav class="breadcrumbs space_left_12p" aria-label="breadcrumb">
    <?php foreach($site->breadcrumb() as $crumb): ?>
      <?php if ($crumb->isActive()): ?>

			 <?= $crumb->title()->html() ?>

		 <?php else: ?>

		   <span><a href="<?= $crumb->url() ?>"><?= $crumb->title()->html() ?></a></span>  /

		 <?php endif ?>
    <?php endforeach; ?>

  </nav>
<?php endif ?>  
