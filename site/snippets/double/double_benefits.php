<section class="double_content benefit grid-x grid-container">

  <h2 class="headline_center small-10 small-offset-1 space_top_20p space_bottom_20p"><?= $page->head_benefits()->html() ?></h2>

  <div class="for_walzer small-10 small-offset-1 medium-4 space_bottom_20p">
     <ul class="">
       <?php foreach ($page->benefits_w()->toStructure() as $point): ?>
         <li class="normal_brot">
           <?= $point->benefit()->ktr() ?>
         </li>
       <?php endforeach ?>
     </ul>
  </div>
  <div class="for_host small-10 small-offset-1 medium-4 medium-offset-2 space_bottom_40p medium_remove_hide ">
     <ul class="">
       <?php foreach ($page->benefits_h()->toStructure() as $point): ?>
         <li class="normal_brot">
           <?= $point->benefit()->ktr() ?>
         </li>
       <?php endforeach ?>
     </ul>
  </div>




  <!-- <div class="for_host space_bottom_80p">
     <p class="normal_brot"> <?= $page->page_entry_h()->ktr() ?></p>
  </div> -->

</section>
