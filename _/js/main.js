
$(function() {


  // Faz o botao de chat desaparecer quando abrir a galeria de fotos
  var $lg = $('#lightgallery');
  $lg.lightGallery();
  $lg.on('onAfterOpen.lg',function(event){
    $('#wh-widget-send-button').css('display', 'none');
  });
  $lg.on('onCloseAfter.lg',function(event){
    $('#wh-widget-send-button').css('display', 'block');
  });

  // $('.slider').bxSlider({
  //   mode: 'fade',
  //   infiniteLoop: true,
  //   pager: true,
  //   auto:true,
  //   slideWidth: "970"
  // });

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

  //AJAX CONTACT FORM Contato...
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
          window.scrollTo(0, 0);
         }
      });
    return false;
  });


  //AJAX CONTACT FORM...
  $('form[name="formOrcamento"]').submit(function () {
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
              $('#ajax_budget_msg #msg').html( "Sua mensagem foi recebida por nós, vamos responder em breve." );
            } else {
              $('#ajax_budget_msg #msg').html( "Ops, aconteceu algum erro, envie seus dados para o email contato@royalleeventos.com.br que entraremos em contato." );
            }

            $(".shadow").css('opacity',0).show().animate({opacity:1});
            $('#ajax_budget_msg').css('display', 'block');
            window.scrollTo(0, 0);
            $('form[name="formOrcamento"]')[0].reset();
          window.scrollTo(0, 0);
         }
      });
    return false;
  });

});


  $(document).on("scroll",function(){
    if($(document).scrollTop()>20){
      $(".logo-mobile .large").css('display', 'none');//removeClass("large").addClass("small");
      $(".logo-mobile .small").css('display', 'block');//removeClass("large").addClass("small");
      $('header').css('height', '70');
      $('.btn-mobile').css('margin-top', '14px');

    } else{
      $(".logo-mobile .small").css('display', 'none');//removeClass("large").addClass("small");
      $(".logo-mobile .large").css('display', 'block');
      $('header').css('height', '100');
      $('.btn-mobile').css('margin-top', '28px');


    }
  });

$('.menu').click(function(){
  openMenu();
});

var accordion = function( id_expandir ){

  $("#label-tab.item-" + id_expandir ).toggleClass('ui-icon-carat-d ui-icon-carat-u');

  $( '.tab-content-' + id_expandir ).animate({height: 'toggle'});

};


$('#ajax_contact_msg #botao-home, #botao-home').click (function(){
  $('.form-contato-mobile .info, .form-contato-mobile .formContato').css('display', 'block');
  $('.form-contato-mobile #ajax_contact_msg').css('display', 'none');
  $('#ajax_budget_msg').css('display', 'none');
  closeAll();
});

$('.shadow, .sidebar-category .cardapio, .sidebar-category .sobre').click (function(){
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
