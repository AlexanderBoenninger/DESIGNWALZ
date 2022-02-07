<section id="support-m" class="support">
  <div class="container support_content content space_top_80p space_bottom_80p">
    <p class="smal_brot join_walzer white_typo"> <?= $support->support_banner_text()->ktr() ?></p>
    <a class="button click_ani join_walzer_button white_typo" href="mailto:<?= str::encode($support->email_support()) ?><?= $support->email_support_subject()?><?= $support->email_support_body()?>">
      <div class="stack stack_1_layer white_border green">
        <p class="big_brot button_text"> <?= $support->support_button()->ktr() ?></p>
      </div>
      <div class="stack_2_l stack_sized hover_react white_border green">
      </div>
    </a>

    <p class="smal_brot join_host white_typo"> <?= $support->donate_banner_text()->ktr() ?></p>
    <a class="button click_ani join_host_button white_typo" href="mailto:<?= str::encode($support->email_donate()) ?><?= $support->email_donate_subject()?><?= $support->email_donate_body()?>">
      <div class="stack stack_1_layer white_border green">
        <p class="big_brot button_text"> <?= $support->donate_button()->ktr() ?></p>
      </div>
      <div class="stack_2_r stack_sized hover_react white_border green">
      </div>
    </a>
  </div>

</section>
