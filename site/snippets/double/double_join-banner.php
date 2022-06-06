<section class="join grid-x">
      <div class="space_top_80p small-10 small-offset-1 grid-x space_bottom_80p">
        <div class="for_walzer small-12 medium-5 space_bottom_40p">
          <div class="normal_brot">
            <?= $page->joinbannerwalzer()->kt() ?>
          </div>
          <a class="button small-only-expanded click_ani space_top_20p" href="mailto:<?= str::encode($join->email_new_walzer())?><?= $join->email_new_walzer_subject()?><?= $join->email_new_walzer_body()?>">
            <div class="stack stack_1_layer yellow">
              <p class="big_brot button_text"> <?= $page->walzer_button()->ktr() ?></p>
            </div>
            <div class="stack_2_l stack_sized hover_react yellow">
            </div>
          </a>
        </div>

        <div class="for_host small-12 medium-5 medium-offset-2 medium_remove_hide ">
          <div class="normal_brot">
            <?= $page->joinbannerhost()->kt() ?>
          </div>
          <a class="button small-only-expanded click_ani space_top_20p" href="mailto:<?= str::encode($join->email_new_host())?><?= $join->email_new_host_subject()?><?= $join->email_new_host_body()?>">
            <div class="stack stack_1_layer yellow">
              <p class="big_brot button_text"> <?= $page->host_button()->ktr() ?></p>
            </div>
            <div class="stack_2_r stack_sized hover_react yellow">
            </div>
          </a>
        </div>
      </div>

</section>
