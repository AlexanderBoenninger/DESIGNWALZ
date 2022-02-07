<section id="join" class="join">
      <div class="container join_content content space_top_80p space_bottom_80p">
        <div class="normal_brot join_walzer">
          <?= $page->joinbannerwalzer()->kt() ?>
        </div>

        <a class="button click_ani join_walzer_button" href="mailto:<?= str::encode($join->email_new_walzer())?><?= $join->email_new_walzer_subject()?><?= $join->email_new_walzer_body()?>">
          <div class="stack stack_1_layer yellow">
            <p class="big_brot button_text"> <?= $join->walzer_button()->ktr() ?></p>
          </div>
          <div class="stack_2_l stack_sized hover_react yellow">
          </div>
        </a>
        <div class="normal_brot join_host">
          <?= $page->joinbannerhost()->kt() ?>
        </div>
        <a class="button click_ani join_host_button" href="mailto:<?= str::encode($join->email_new_host())?><?= $join->email_new_host_subject()?><?= $join->email_new_host_body()?>">
          <div class="stack stack_1_layer yellow">
            <p class="big_brot button_text"> <?= $join->host_button()->ktr() ?></p>
          </div>
          <div class="stack_2_r stack_sized hover_react yellow">
          </div>
        </a>
      </div>

</section>
