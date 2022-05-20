$(document).foundation()
$(document).ready(function() {
  const mq = window.matchMedia("(max-width:630px)");
  const mq_2 = window.matchMedia("(max-width:920px)");



    $(".burger").click( function(){
        console.log("click");
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
    // $("#menu").children().click( function(){
    //     $("#menu").css("display","");
    //     $("#mobile_menu_back").removeClass("show");
    //     $(".closer").removeClass("show");
    //     $(".burger").removeClass("hide");
    //   });

    // $(".click_ani").hover(function(){
    //   console.log("hover");
    //   $(this).find(".hover_react").toggleClass("hover_stack_button");
    //
    // });

    $(".click_ani").hover(function(){
      $(this).find(".stack_2_l").toggleClass("click_stack_2_r");
      $(this).find(".stack_2_r").toggleClass("click_stack_2_l");
    });

    // ––––––––––––Linie nach Zahl––––––––––––
    $( "<hr>" ).insertAfter( ".quick_step_numb:not(:last-of-type)" );


    $( ".quick_step_numb" ).click(function () {
      $(this).toggleClass("activ_numb orange_typo");
      $( ".quick_step_numb" ).not(this).removeClass("activ_numb orange_typo");


      $('.slick_quick_how').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        swipe: true,
        swipeToSlide: true,
        lazyLoad: 'ondemand',
        arrows: false,

      });

    	var rellax = new Rellax('.rellax');
    });
});
function sizeing(doc) {
  let hArr = doc.querySelectorAll(".stack");
  let h2Arr = doc.querySelectorAll(".stack_sized");
  for(i=0; i< hArr.length; i++){
    let h = hArr[i].clientHeight
    h2Arr[i].style.height = h + 'px';
    $(".substacks").css("height", "inherit")
    console.log(h);
  }
};


$(window).on('load', function() {
  sizeing(document);
});
$(window).on('resize', function() {
  sizeing(document);
});
