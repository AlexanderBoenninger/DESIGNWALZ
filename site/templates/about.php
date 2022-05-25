<?php snippet('header') ?>
<section class="about grid-x grid-container">
      <div class="about_content small-12 medium-10 cell space_top_40p space_bottom_40p">
        <h2 class="headline_center small-10 medium-offset-1 space_bottom_20p"><?= $page->secTitle()->html() ?></h2>
        <div class="big_brot">
          <?= $page->text()->kt() ?>
        </div>
      </div>

      <div class="team_container grid-x grid-padding-x grid-container space_top_40p space_bottom_20p">
        <?php foreach ($page->team()->toStructure() as $team_member): ?>

         <div class="cell small-12 medium-4 medium-offset-1 space_bottom_20p">
          <div class="about_team_img">
            <div class="about_team_portrait">
              <div class="about_team_portrait_container stack stack_1_layer white" style="background-image: url('<?= $team_member->pic()->tofile()->url() ?>')">
              </div>
            </div>
            <?php if ($team_member->stack_class()->toBool() === true): ?>
              <div class="about_team_stack_2 stack_2_r stack_sized white ">
              </div>
            <?php else: ?>
              <div class="about_team_stack_2 stack_2_l stack_sized white ">
              </div>
            <?php endif; ?>

          </div>
          <div class="mittel_brot team_zitat space_top_20p">
             <?= $team_member->zitat()->kt() ?>
          </div>

          <div class="person team_zitat_1 space_top_12p">
            <strong class="normal_brot"><?= $team_member->name()->ktr() ?></strong>
            <?= $team_member->job()->kt() ?>
            <div class="team_member_web-link space_top_20p grid-x">
              <span class="small-1">w:</span>
              <div class="small-11">
                <?php foreach ($team_member->web()->toStructure() as $member_web): ?>
                  <a href="https://<?= $member_web->weblink() ?>" target="_blank"><?= $member_web->weblink() ?></a>
                <?php endforeach ?>
              </div>
            </div>
            <div class="team_member_mail space_top_20p grid-x">
              <span class="small-1">m:</span>
              <a class="normal_brot" href="mailto:<?= Str::encode($team_member->email()) ?>"><?= Str::encode($team_member->email()) ?></a>
            </div>
          </div>
          </div>
        <?php endforeach ?>
        </div>
</section>

<?php snippet('footer') ?>
