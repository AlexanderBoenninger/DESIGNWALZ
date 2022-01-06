  </div>
  <footer class="footer">
<div class="footer_container">

 <div class="footer_col_1 footer_contact">
   <h2 class="white_typo">contact</h2>
    <div class="space_top_20p">
      <a class="white_typo link_white space_top_20p " href="mailto:<?= Str::encode($contact->email_info()) ?>"><?= $contact->email_info()?> </a>
      <p class="white_typo space_top_20p"><?= $contact->address_2()->ktr()?></p>
      <p class="white_typo space_top_20p space_bottom_40p "><?= $contact->address_1()->ktr()?></p>

    </div>
 </div>
 <div class="footer_col_2 footer_socialmedia">
   <h2 class="white_typo">social media</h2>
    <div class="sm_buttons space_top_20p">
      <a href="https://www.instagram.com/design_walz/" target="_blank"><img src="<?= $contact->social_media_insta()->ktr()?>" alt="Instagram"> </a>
      <a class="space_left_20p" href="https://www.instagram.com/design_walz/" target="_blank"><img src="<?= $contact->social_media_face()->ktr()?>" alt="Facebook"> </a>

    </div>

 </div>
 <div class="footer_col_3 footer_news">
   <h2 class="white_typo">newsletter</h2>
     <div class="newsletter_button space_top_20p">
       <a class="button click_ani newsletter_signin white_typo" href="<?= $news->url()?>">
         <div class="stack stack_1_layer white_border black_back">
           <p class="big_brot button_text"> <?= $news->button_footer()->ktr() ?></p>
         </div>
         <div class="stack_2_l stack_sized hover_react white_border black_back">
         </div>
       </a>
     </div>
 </div>
</div>

<div class="legal_nav white_typo space_top_20p space_bottom_20p">

  <?php if($legal = page('legal_notice')): ?>
      <a class="footer_link footer_col_1" href="<?= $legal->url() ?>">Legal notice</a>
  <?php endif ?>
  <?php if($p = page('privacy')): ?>
      <a class="footer_link footer_col_2" href="<?= $p->url() ?>">Privacy statment</a>
  <?php endif ?>
  </div>
    <a class="copyright badass_small white_typo  space_top_20p" href="<?= url() ?>">&copy; <?= date('Y') ?> / <?= $site->title() ?></a>

  </footer>

</body>
<script src="assets/js/functions.js"> </script>
</html>
