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
        $(".for_walzer").removeClass("hidden");
        $(".for_host").addClass("hidden");
        $(".host_back").addClass("hidden");
      });
      $(".for_host_switch").click( function(){
        $(".for_walzer").addClass("hidden");
        $(".for_host").removeClass("hidden");
        $(".host_back").removeClass("hidden");
      });

    // ––––––––––––Linie nach Zahl––––––––––––
    $( "<hr>" ).insertAfter( ".quick_step_numb:not(:last-of-type)" );

    if (mq_0.matches) {
      $(".medium_remove_hide").addClass("hidden")
    }

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

$(".quick_step_numb, .for_host_switch, .for_walzer_switch").click(function () {
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
