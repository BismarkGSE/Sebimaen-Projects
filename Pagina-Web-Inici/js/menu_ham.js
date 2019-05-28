// PARA ANIMAR LAS TRES RAYAS DEL MENU HAMBURGUESA
$(document).ready(function(){
  $('#btn-menu').click(function(){
    $('.menu_ham').toggleClass('clos')
  });
});

// ESTA ES LA PARTE PARA QUE SALGA EL MENU HAMBURGUESA

$(document).ready(function() {
  $('#btn-menu').click(function(){ // Al hacer click...
	   $('body').toggleClass('visible_menu'); // Añadimos o eliminamos la clase 'visible_menu' al body
	});
});

var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '6Lcgx6EUAAAAAIRw3EXKn_rdnspHUMlcv_0StTGp'
        });
      };

// MOSTRAR O OCULTAR CONTRASEÑA

$(document).on('ready', function() {
  $('#show-hide-passwd').on('click', function(e) {
    e.preventDefault();
    var current = $(this).attr('action');
    if (current == 'hide') {
      $(this).prev().attr('type','text');
      $(this).removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close').attr('action','show');
    }
    if (current == 'show') {
      $(this).prev().attr('type','password');
      $(this).removeClass('glyphicon-eye-close').addClass('glyphicon-eye-open').attr('action','hide');
    }
  })
})