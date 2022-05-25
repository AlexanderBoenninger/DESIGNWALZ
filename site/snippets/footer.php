</div>
<footer class="footer">
<div class="footer_container grid-x grid-container">

 <div class="small-10 small-offset-1 medium-4 medium-offset-0 footer_contact space_top_40p">
   <h2 class="white_typo">contact</h2>
    <div class="space_top_20p">
      <a class="white_typo normal_brot link_white space_top_20p " href="mailto:<?= Str::encode($contact->emailinfo()) ?>"><?= $contact->emailinfo()?> </a>
      <p class="white_typo blass_typo small_brot space_top_20p"><?= $contact->address_2()->ktr()?></p>
      <p class="white_typo blass_typo small_brot space_top_20p space_bottom_40p "><?= $contact->address_1()->ktr()?></p>

    </div>
 </div>
 <div class="small-10 small-offset-1 medium-4 medium-offset-0 footer_socialmedia space_top_40p">
   <h2 class="white_typo">social media</h2>
    <div class="sm_buttons space_top_20p">
      <?php if($contact->sozial_link1()->isNotEmpty()): ?>
        <a href="<?= $contact->sozial_link1()?>" target="_blank"><img src="<?= $contact->social_media_insta()->tofile()->url()?>" alt="Instagram"> </a>
      <?php endif ?>
      <?php if($contact->sozial_link2()->isNotEmpty()): ?>
        <a class="space_left_20p" href="<?= $contact->sozial_link2()?>" target="_blank"><img src="<?= $contact->social_media_face()->tofile()->url()?>" alt="Facebook"> </a>
      <?php endif ?>
    </div>

 </div>
 <div class="small-10 small-offset-1 medium-4 medium-offset-0 footer_news space_top_40p">
   <h2 class="white_typo">newsletter</h2>
     <div class="newsletter_button space_top_20p">
       <a class="button click_ani newsletter_signin white_typo" href="<?= $newsl->url()?>">
         <div class="stack stack_1_layer white_border black_back">
           <p class="mittel_brot button_text white_typo"> <?php echo t('signin') ?></p>
         </div>
         <div class="stack_2_l stack_sized hover_react white_border black_back">
         </div>
       </a>
     </div>
 </div>
</div>

<div class="legal_stuff grid-x grid-container white_typo space_top_40p padding_bottom_20p">
  <div class="small-11 small-offset-1 medium-12 medium-offset-0 grid-x">
    <?php if($legal = page('impressum')): ?>
        <a class="small-3 footer_link blass_typo footer_col_1 white_typo" href="<?= $legal->url() ?>">impressum</a>
    <?php endif ?>
    <?php if($data = page('datenschutzerklaerung')): ?>
        <a class="small-3 footer_link blass_typo footer_col_2" href="<?= $data->url() ?>">Datenschutz</a>
    <?php endif ?>
    <a class="small-5 medium-3 medium-offset-3 text-right copyright badass_small white_typo blass_typo" href="<?= url() ?>">&copy; <?= date('Y') ?> / <?= $site->sitetitle() ?></a>
  </div>

</div>

  </footer>

</body>
<?= js(['assets/js/jquery-3.3.1.min.js', '@auto']) ?>
<?= js(['assets/js/vendor/what-input.js', '@auto']) ?>
<?= js(['assets/js/vendor/foundation.min.js', '@auto']) ?>
<?= js(['assets/js/rellax.min.js', '@auto']) ?>
<?= js(['assets/js/lottie-player.js', '@auto']) ?>
<?= js(['assets/js/app.js', '@auto']) ?>

</html>
