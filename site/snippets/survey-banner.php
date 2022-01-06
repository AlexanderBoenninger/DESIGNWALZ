<section id="survey" class="survey">
      <div class="container survey_content content space_top_80p space_bottom_80p">
        <h2><?= $survey->secTitle()->html() ?></h2>
        <p class="big_brot survey_text"> <?= $survey->about()->ktr() ?></p>

        <a class="button click_ani join_walzer_button" href="https://docs.google.com/forms/d/e/1FAIpQLSclxYYWFqV0--KrAeWyeT9e-3Yk7pd9VJ97nT8I5PbiKxS6DA/viewform" target="_blank" >
          <div class="stack stack_1_layer blue_light">
            <p class="big_brot button_text"> <?= $survey->walzer_button()->ktr() ?></p>
          </div>
          <div class="stack_2_l stack_sized hover_react">
          </div>
        </a>
        <!-- <p class="smal_brot join_host"> <?= $survey->host()->ktr() ?></p> -->
        <a class="button click_ani join_host_button" href="https://docs.google.com/forms/d/e/1FAIpQLSc-jFUuuqA3I1dttIBq0rL-CDzUyPZkD-vkmS_s-QBw4brdJA/viewform" target="_blank" >

            <div class="stack stack_1_layer blue_light">
              <p class="big_brot button_text"> <?= $survey->host_button()->ktr() ?></p>
            </div>
            <div class="stack_2_r stack_sized hover_react ">
          </div>
        </a>
      </div>

</section>
