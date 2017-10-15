
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
        closeAll();
      }
    }
  });

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
            if( response ){
              $('#ajax_contact_msg #msg').html( "Sua mensagem foi recebida por nós, vamos responder em breve." );
            } else {
              $('#ajax_contact_msg #msg').html( "Ops, aconteceu algum erro, envie seus dados para o email contato@royalleeventos.com.br que entraremos em contato." );
            }

          $('.form-contato-mobile .info, .form-contato-mobile .formContato').css('display', 'none');
          $('.form-contato-mobile #ajax_contact_msg').css('display', 'block');
          $('form[name="formContato"]')[0].reset();
         }
      });
    return false;
  });

});

$('.menu').click(function(){
  openMenu();
});

$('#botao-home').click (function(){
  $('.form-contato-mobile .info, .form-contato-mobile .formContato').css('display', 'block');
  $('.form-contato-mobile #ajax_contact_msg').css('display', 'none');
  closeAll();
});

$('.shadow, .sidebar-category .cardapio').click (function(){
  closeAll();
});

$('.sidebar-category .contato').click (function(){
  closeMenu();
});

function openMenu(){
  $("body, .sidebar-menu").addClass("open");
  $(".shadow").css('opacity',0).show().animate({opacity:1});
  $(".sidebar-menu").animate({'margin-left':'0px'});
}
function closeAll(){

  $(".form-contato-mobile").css('display', 'none');
  $(".modal-contato").css('display', 'none');
  $(".shadow").animate({opacity:0}, function(){
    $(".shadow").css('display','none');
  });
  $(".sidebar-menu").animate({'margin-left':'-85%'});
  $("body, .sidebar-menu").removeClass("open");
}

function closeMenu(){
  $(".sidebar-menu").animate({'margin-left':'-85%'});
  $("body, .sidebar-menu").removeClass("open");
}


function openModal( modal_class_name, close_other_modal, modal_to_close ){
  if(close_other_modal){
    $("."+modal_to_close).css('opacity',1).hide().animate({opacity:0});
  }

  window.scrollTo(0, 0);
  $("."+modal_class_name).css('opacity',0).show().animate({opacity:1});
  $(".shadow").css('opacity',0).show().animate({opacity:1});
}
