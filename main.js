
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


  //AJAX CONTACT FORM...
  $('form[name="formContato"]').submit(function () {
    var This = $(this);
      var action = $(This).attr('action');
      var data_value = unescape($(This).serialize());
      $.ajax({
         type: "POST",
         url:action,
         data: data_value,
         error: function (xhr, status, error) {
           confirm('Ops, aconteceu algum erro, envie seus dados para o email contato@royalleeventos.com.br que entraremos em contato.');
         },
          success: function (response) {
          $('#ajax_contact_msg').html(response);
          $('#ajax_contact_msg').slideDown('slow').delay(1500).slideUp('slow');
         }
      });
    return false;
  });

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
