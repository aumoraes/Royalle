
$(function() {

  $('.slider').bxSlider({
    mode: 'fade',
    infiniteLoop: true,
    pager: true,
    auto:true,
    slideWidth: "970"
  });

  $(".swipe-sidebar").swipe( {
    //Generic swipe handler for all directions
    swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
      if(direction === "right"){
        openMenu();
      }
    }
  });
  $("body, .shadow, .sidebar-menu").swipe( {
    //Generic swipe handler for all directions
    swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
      if(direction === "left"){
        closeMenu();
      }
    }
  });

  $("body, .sidebar-menu").addClass("open");
  $(".shadow").css('opacity',0).show().animate({opacity:1});
  $(".form-contato-mobile").css('opacity',0).show().animate({opacity:1});

});

$('.footer-contato-mobile').click(function(){
  $("body, .sidebar-menu").addClass("open");
  $(".shadow").css('opacity',0).show().animate({opacity:1});
  $(".form-contato-mobile").css('opacity',0).show().animate({opacity:1});
});

$('.menu').click(function(){
  openMenu();
});
$('.shadow').click (function(){
  closeMenu();
});
function openMenu(){
  $("body, .sidebar-menu").addClass("open");
  $(".shadow").css('opacity',0).show().animate({opacity:1});
  $(".sidebar-menu").animate({'margin-left':'0px'});
}
function closeMenu(){

    $(".form-contato-mobile").css('display', 'none');
  $(".shadow").animate({opacity:0}, function(){
    $(".shadow").css('display','none');

  });
  $(".sidebar-menu").animate({'margin-left':'-85%'});
  $("body, .sidebar-menu").removeClass("open");
}
