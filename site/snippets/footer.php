  </div>
  <footer class="footer">
<div class="footer_container">

 <div class="footer_col_1 footer_contact">
   <h2 class="white_typo">contact</h2>
    <div class="space_top_20p">
      <a class="white_typo normal_brot link_white space_top_20p " href="mailto:<?= Str::encode($contact->emailinfo()) ?>"><?= $contact->emailinfo()?> </a>
      <p class="white_typo blass_typo small_brot space_top_20p"><?= $contact->address_2()->ktr()?></p>
      <p class="white_typo blass_typo small_brot space_top_20p space_bottom_40p "><?= $contact->address_1()->ktr()?></p>

    </div>
 </div>
 <div class="footer_col_2 footer_socialmedia">
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
 <div class="footer_col_3 footer_news">
   <h2 class="white_typo">newsletter</h2>
     <div class="newsletter_button space_top_20p">
       <a class="button click_ani newsletter_signin white_typo" href="<?= $newsl->url()?>">
         <div class="stack stack_1_layer white_border black_back">
           <p class="mittel_brot button_text"> <?php echo t('signin') ?></p>
         </div>
         <div class="stack_2_l stack_sized hover_react white_border black_back">
         </div>
       </a>
     </div>
 </div>
</div>

<div class="legal_nav white_typo space_top_20p space_bottom_20p">

  <?php if($legal = page('impressum')): ?>
      <a class="footer_link blass_typo footer_col_1 white_typo" href="<?= $legal->url() ?>">impressum</a>
  <?php endif ?>
  <?php if($p = page('datenschutzerklaerung')): ?>
      <a class="footer_link blass_typo footer_col_2" href="<?= $p->url() ?>">Datenschutz</a>
  <?php endif ?>
  </div>
    <a class="copyright badass_small white_typo blass_typo space_top_20p" href="<?= url() ?>">&copy; <?= date('Y') ?> / <?= $site->sitetitle() ?></a>

  </footer>

</body>

</html>
