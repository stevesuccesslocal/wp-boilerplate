//// Owl carousel
//$('.owl-carousel').owlCarousel({
//    loop:true,
//    margin:10,
//    responsiveClass:true,
//    nav:true,
//    autoplay: true,
//    dots: true,
//    responsive:{
//        0:{
//            items:1,
//            nav:true
//        },
//        600:{
//            items:3,
//            nav:true
//        },
//        1000:{
//            items:4,
//            nav: true
//        }
//    }
//});


// Keep divs same height
$( document ).ready(function() {
equalheight = function(container){

var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     $el,
     topPosition = 0;
 $(container).each(function() {

   $el = $(this);
   $($el).height('auto')
   topPostion = $el.position().top;

   if (currentRowStart != topPostion) {
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = $el.height();
     rowDivs.push($el);
   } else {
     rowDivs.push($el);
     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
  }
   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
   }
 });
}

$(window).load(function() {
  equalheight('.same-height');
});

$(window).resize(function(){
  equalheight('.same-height');
});

  $(window).load(function() {
  equalheight('.same-height2');
});

$(window).resize(function(){
  equalheight('.same-height2');
});

  
});




// Browser notification
var $buoop = {required:{e:-4,f:-3,o:-3,s:-1,c:-3},insecure:true,style:"bottom",api:2019.02 }; 
function $buo_f(){ 
 var e = document.createElement("script"); 
 e.src = "//browser-update.org/update.min.js"; 
 document.body.appendChild(e);
};
try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
catch(e){window.attachEvent("onload", $buo_f)}


// Popup modal

$('.message-box').click(function() {
  $('.message-contents').slideToggle("slow");
});

$(document).ready(function() {
  var headerHeight = $('header.position-both, header.position-mobile, header.position-desktop').height() + 'px';
  $('body').css('margin-top', headerHeight);
}); 


// Shrink Header on scroll

$(window).scroll(function() {    
  var scroll = $(window).scrollTop();

  if (scroll >= 200) {
      $(".position-desktop, .position-mobile, .position-both").addClass("shrink-header");
  } else {
      $(".position-desktop, .position-mobile, .position-both").removeClass("shrink-header");
  }
});
