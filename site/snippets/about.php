<section id="about" class="about">
      <div class="container about_content content space_top_80p space_bottom_80p">
        <h2><?= $about->secTitle()->html() ?></h2>
         <p class="big_brot"> <?= $about->text()->ktr() ?></p>

     <div class="team_container space_top_40p space_bottom_20p">

        <div class="two_col col_1_team space_bottom_20p">
         <div class="button about_team_1">
           <div class="stack stack_1_layer white">
             <img class="portrait" src="<?= $about->alex_pic()->url() ?>" alt="">
           </div>
           <div class="stack_2_r stack_sized white">
             <!-- <div class="stack_2_r substacks stack_5_r white">
              <div class="stack_2_r substacks substack_5_r white">
                <div class="stack_2_r substacks substack_5_r white">
                </div>
              </div>
            </div> -->
           </div>
         </div>
         <p class="mittel_brot team_zitat_1"> <?= $about->alex_zitat()->ktr() ?></p>
         <div class="person team_zitat_1 ">
           <strong class=""><?= $about->alex_name()->ktr() ?></strong>
           <p><?= $about->alex_job()->ktr() ?></p>
              </br>
           <?= $about->alex_web_1()->ktr() ?></br>
           <?= $about->alex_web_2()->ktr() ?>
              </br></br>
           <a class="normal_brot link" href="mailto:<?= $about->alex_mail()->ktr() ?>"><?= $about->alex_mail()->ktr() ?></a>

         </div>
         </div>

         <div class="two_col col_2_team space_bottom_20p">
         <div class="button about_team_2">
           <div class="stack stack_1_layer white">
             <img class="portrait" src="<?= $about->veronika_pic()->url() ?>" alt="">
           </div>
           <div class="stack_2_l stack_sized white">
             <!-- <div class="stack_2_l substacks stack_5_l white">
              <div class="stack_2_l substacks substack_5_l white">
                <div class="stack_2_l substacks substack_5_l white">
                </div>
              </div>
            </div> -->
           </div>
         </div>
         <p class="mittel_brot team_zitat_2"> <?= $about->veronika_zitat()->ktr() ?></p>

         <div class="person team_zitat_2">
           <strong class=""><?= $about->veronika_name()->ktr() ?></strong>
           <p><?= $about->veronika_job()->ktr() ?></p>
           </br>
           <?= $about->veronika_web_1()->ktr() ?></br>
           <?= $about->veronika_web_2()->ktr() ?>
         </br></br>
           <a class="normal_brot link" href="mailto:<?= $about->veronika_mail()->ktr() ?>"><?= $about->veronika_mail()->ktr() ?></a>
         </div>
        </div>
      </div>
</section>
