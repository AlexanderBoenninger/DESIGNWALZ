<section id="double_benefits" class="double_content">

  <h2 class="headline_center"><?= $page->head_benefits()->html() ?></h2>

  <div class="for_walzer space_bottom_80p">
     <ul class="">
       <?php foreach ($page->benefits_w()->toStructure() as $point): ?>
         <li class="normal_brot">
           <?= $point->benefit()->ktr() ?>
         </li>
       <?php endforeach ?>
     </ul>
  </div>
  <div class="for_host space_bottom_40p">
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
