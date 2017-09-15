
$(function() {
  $("body, .shadow, .sidebar-menu").swipe( {
    //Generic swipe handler for all directions
    swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
      if(direction === "right"){
        openMenu();
      }else if(direction === "left"){
        closeMenu();
      }
    }
  });
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
  $(".shadow").animate({opacity:0}, function(){
    $(".shadow").css('display','none')
  });
  $(".sidebar-menu").animate({'margin-left':'-85%'});
  $("body, .sidebar-menu").removeClass("open");
}
