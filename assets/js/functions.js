$(document).ready(function() {
  const mq = window.matchMedia("(max-width:630px)");
  const mq_2 = window.matchMedia("(max-width:920px)");


let hArr = document.querySelectorAll(".stack");
let h2Arr = document.querySelectorAll(".stack_sized");

$( window ).on( "load", function sizeing() {

  for(i=0; i< hArr.length; i++){
    let h = hArr[i].clientHeight
    h2Arr[i].style.height = h + 'px';
    $(".substacks").css("height", "inherit")
  };


});
$('body').on('change', 'h', sizeing()
  // Action goes here.
);

    $(".burger").click( function(){
        console.log("click");
        $("#menu").css("display","block");
        $(".closer").addClass("show");
        $(".burger").addClass("hide");
        $("#mobile_menu_back").addClass("show");
      });
    $(".closer").click( function(){
        $("#menu").css("display","");
        $("#mobile_menu_back").removeClass("show");
        $(".closer").removeClass("show");
        $(".burger").removeClass("hide");
      });
    $("#menu").children().click( function(){
        $("#menu").css("display","");
        $("#mobile_menu_back").removeClass("show");
        $(".closer").removeClass("show");
        $(".burger").removeClass("hide");
      });

    // $(".click_ani").hover(function(){
    //   console.log("hover");
    //   $(this).find(".hover_react").toggleClass("hover_stack_button");
    //
    // });

    $(".click_ani").hover(function(){
      $(this).find(".stack_2_l").toggleClass("click_stack_2_r");
      $(this).find(".stack_2_r").toggleClass("click_stack_2_l");
    });

    	var rellax = new Rellax('.rellax');


});
