$(document).foundation()
$(document).ready(function() {
  const mq_0 = window.matchMedia("(max-width:630px)");
  const mq_1 = window.matchMedia("(min-width:630px)");
  const mq_2 = window.matchMedia("(max-width:1024px)");



    $(".burger").click( function(){
        $("#hole_menu").removeClass("hidden");
        $(".closer").removeClass("hidden");
        $(".burger").addClass("hidden");
        $(".quick_reach").addClass("hidden");
      });
    $(".closer").click( function(){
      $("#hole_menu").addClass("hidden");
      $(".closer").addClass("hidden");
      $(".burger").removeClass("hidden");
      $(".quick_reach").removeClass("hidden");
      });


    $(".click_ani").hover(function(){
      $(this).find(".stack_2_l").toggleClass("click_stack_2_r");
      $(this).find(".stack_2_r").toggleClass("click_stack_2_l");
    });
    // ––––––––––––mobile_double Seiten––––––––––––
      $(".for_walzer_switch").click( function(){
        $(this).find(".link").addClass("link-active");
        $(".for_host_switch").find(".link").removeClass("link-active");
        $(".for_walzer").removeClass("hidden");
        $(".for_host").addClass("hidden");
        $(".host_back").addClass("hidden");
      });
      $(".for_host_switch").click( function(){
        $(this).find(".link").addClass("link-active");
        $(".for_walzer_switch").find(".link").removeClass("link-active");
        $(".for_walzer").addClass("hidden");
        $(".for_host").removeClass("hidden");
        $(".host_back").removeClass("hidden");
      });

    // ––––––––––––Linie nach Zahl––––––––––––
    $( "<hr>" ).insertAfter( ".quick_step_numb:not(:last-of-type)" );

    if (mq_0.matches) {
      $(".medium_remove_hide").addClass("hidden")
    }

// ––––––––––––survey––––––––––––
    var formPartials = $('.form-block'),
        formPartialsLength = formPartials.length;

    $('#block_next').click(function(e) {
      var activeFormPartialID = $(this).data('active-form-partial-id');
      activeFormPartialID++;

      $(this).data('active-form-partial-id', activeFormPartialID);

      formPartials.each(function(index) {
        $(formPartials[index]).toggleClass('hidden', index !== activeFormPartialID);
      });

      $('#block_next').toggleClass('hidden', ((formPartialsLength - 1) <= activeFormPartialID));
      $('#form_send').toggleClass('hidden', ((formPartialsLength - 1) !== activeFormPartialID));
    });
// ––––––––––––surveyend––––––––––––

    var rellax = new Rellax('.rellax');
});


function sizeing(doc) {
  let hArr = doc.querySelectorAll(".stack");
  let h2Arr = doc.querySelectorAll(".stack_sized");
  for(i=0; i< hArr.length; i++){
    let h = hArr[i].clientHeight
    h2Arr[i].style.height = h + 'px';
    $(".substacks").css("height", "inherit")
  }
};


$(".howto_w").click(function(){
  $(this).parents().find(".quick_how_walzer").toggleClass("hidden");
    $(".howto_h").parents().find(".quick_how_host").removeClass("hidden");
  $(this).find("svg").toggleClass("arrow_up");
  $(this).find(".more-dets-text").fadeOut(function () {
    $(".more-dets-text").text(($(".more-dets-text").text() == 'more details') ? 'less details' : 'more details').fadeIn();
  });
  setTimeout(function () {
    sizeing(document);
  },
    100);
});

$(".howto_h").click(function(){
  $(this).parents().find(".quick_how_host").toggleClass("hidden");
  $(".howto_w").parents().find(".quick_how_walzer").removeClass("hidden");
  $(this).find("svg").toggleClass("arrow_up");
  $(this).find(".more-dets-text").fadeOut(function () {
    $(".more-dets-text").text(($(".more-dets-text").text() == 'more details') ? 'less details' : 'more details').fadeIn();
  });
  setTimeout(function () {
    sizeing(document);
  },
    100);
});

$(".quick_step_numb, .for_host_switch, .for_walzer_switch, #block_next").click(function () {
  setTimeout(function () {
    sizeing(document);
  },
    100);
});


$(window).on('load', function() {
  sizeing(document);
});

$(window).on('resize', function() {
  sizeing(document);
});
