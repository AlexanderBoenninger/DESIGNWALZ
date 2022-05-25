<section class="support grid-x">
  <div class="space_top_80p space_bottom_80p small-10 small-offset-1 grid-x">
    <div class="small-12 medium-5 space_bottom_40p">
      <p class="smal_brot white_typo"> <?= $support->support_banner_text()->ktr() ?></p>
      <a class="button small-only-expanded click_ani white_typo space_top_20p" href="mailto:<?= str::encode($support->email_support()) ?><?= $support->email_support_subject()?><?= $support->email_support_body()?>">
        <div class="stack stack_1_layer white_border green">
          <p class="big_brot button_text white_typo"> <?= $support->support_button()->ktr() ?></p>
        </div>
        <div class="stack_2_l stack_sized hover_react white_border green">
        </div>
      </a>
    </div>

    <div class="small-12 medium-5 medium-offset-2">
      <p class="smal_brot white_typo"> <?= $support->donate_banner_text()->ktr() ?></p>
      <a class="button small-only-expanded click_ani white_typo space_top_20p" href="mailto:<?= str::encode($support->email_donate()) ?><?= $support->email_donate_subject()?><?= $support->email_donate_body()?>">
        <div class="stack stack_1_layer white_border green">
          <p class="big_brot button_text white_typo"> <?= $support->donate_button()->ktr() ?></p>
        </div>
        <div class="stack_2_r stack_sized hover_react white_border green">
        </div>
      </a>
    </div>
  </div>

</section>
