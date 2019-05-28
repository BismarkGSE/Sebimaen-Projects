$(document).ready(function() {
      //variables
      var pass1 = $('[name=pass1]');
      var pass2 = $('[name=pass2]');
      var confirmacion = "Les contrasenyes si coinsideixen";
      var longitud = "La contrasenya a d'estar formada de 6-12 carácters";
      var negacion = "No coinsideixen les contrasenyes";
      var vacio = "La contrasenya no pot estar buit";
      //oculto por defecto el elemento span
      var span = $('<div style="padding-top: 50px;color: white;"></div>').insertAfter(pass2);
      span.hide();
      //función que comprueba las dos contraseñas
      function coincidePassword(){
        var valor1 = pass1.val();
        var valor2 = pass2.val();
        //muestro el span
        span.show().removeClass();
        //condiciones dentro de la función
        if(valor1 != valor2){
          span.text(negacion).addClass('negacion');
        }
        if(valor1.length==0 || valor1==""){
          span.text(vacio).addClass('negacion');
        }
        if(valor1.length<6 || valor1.length>12){
          span.text(longitud).addClass('negacion');
        }
        if(valor1.length!=0 && valor1==valor2){
          span.text(confirmacion).removeClass("negacion").addClass('confirmacion');
        }
      }
      //ejecuto la función al soltar la tecla
      pass2.keyup(function(){
        coincidePassword();
      });
});
